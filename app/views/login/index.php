<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?= BASEURL; ?>/img/logo/logo.ico" type="image/x-icon">
    <title><?= $data['title']; ?></title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/style.css">
</head>

<body>
    <div class="login">
        <div class="wrapper_login">
            <div class="title">
                Login Form
            </div>
            <form action="<?= BASEURL; ?>/Log/login" method="post">
                <div class="field">
                    <input type="text" name="username" required>
                    <label>Email Address</label>
                </div>
                <div class="field">
                    <input type="password" name="password" required>
                    <label>Password</label>
                </div>
                <div class="content">
                    <div class="checkbox">
                        <input type="checkbox" id="remember-me">
                        <label for="remember-me">Remember me</label>
                    </div>
                    <div class="pass-link">
                        <a href="#">Forgot password?</a>
                    </div>
                </div>
                <div class="field">
                    <input type="submit" value="Login">
                </div>
                <div class="signup-link">
                    Not a member? <a href="#">Signup now</a>
                </div>
            </form>
        </div>
    </div>

    <script>
        const form = document.querySelector("form");
        eField = form.querySelector(".email"),
            eInput = eField.querySelector("input"),
            pField = form.querySelector(".password"),
            pInput = pField.querySelector("input");

        form.onsubmit = (e) => {
            e.preventDefault();
            (eInput.value == "") ? eField.classList.add("shake", "error"): checkEmail();
            (pInput.value == "") ? pField.classList.add("shake", "error"): checkPass();

            setTimeout(() => {
                eField.classList.remove("shake");
                pField.classList.remove("shake");
            }, 500);

            eInput.onkeyup = () => {
                checkEmail();
            }
            pInput.onkeyup = () => {
                checkPass();
            }

            function checkEmail() {
                let pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
                if (!eInput.value.match(pattern)) {
                    eField.classList.add("error");
                    eField.classList.remove("valid");
                    let errorTxt = eField.querySelector(".error-txt");
                    (eInput.value != "") ? errorTxt.innerText = "Enter a valid email address": errorTxt.innerText = "Email can't be blank";
                } else {
                    eField.classList.remove("error");
                    eField.classList.add("valid");
                }
            }

            function checkPass() {
                if (pInput.value == "") {
                    pField.classList.add("error");
                    pField.classList.remove("valid");
                } else {
                    pField.classList.remove("error");
                    pField.classList.add("valid");
                }
            }

            if (!eField.classList.contains("error") && !pField.classList.contains("error")) {
                window.location.href = form.getAttribute("action");
            }
        }
    </script>
</body>

</html>
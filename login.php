<!DOCTYPE html>

<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="./css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@400;700&display=swap" rel="stylesheet">
    <script>
        var charGood = false;
        var userLenGood = false;
        var passLenGood = false;
        var check1 = false;
        var check2 = false;
        var attempts = 3;

        var defaultUsername = "username";
        var defaultPassword = "P4$$word";


        // username
        function request_login(form) {
            console.log(attempts);
            var username = form.username.value;
            var password = form.password.value;

            if (username == defaultUsername && password == defaultPassword) {
            window.location.href = "homepage.php";
        }

            for (var i = 0; i < username.length; i++) {
                var currentChar = username[i];
                if (
                    !(currentChar >= 'a' && currentChar <= 'z') &&
                    !(currentChar >= 'A' && currentChar <= 'Z')
                ) {
                    showError(1);
                }
                else {
                    charGood = true;
                }
            }

        if (username.trim().length < 8) {
            showError(2);
        }
        else {
            userLenGood = true;
        }

        if (password.trim().length < 8) {
            showError(3);
        }

        if (username.trim().length < 8 && password.trim().length < 8) {
            showError(5);
        }
        // password

        var hasUppercase = false;
        var hasLowercase = false;
        var hasNumeric = false;
        var hasSpecialChar = false;

        for (var i = 0; i < password.length; i++) {
            var currentChar = password[i];
        
            if (password[1] >= 'A' && password[1] <= 'Z') {
                hasUppercase = true;
            } else if (currentChar >= 'a' && currentChar <= 'z') {
                hasLowercase = true;
            } else if (currentChar >= '0' && currentChar <= '9') {
                hasNumeric = true;
            } else {
                hasSpecialChar = true;
            }
        }

        if (charGood && userLenGood && passLenGood) {
            check1 = true;
            document.getElementById("error1").style.display="none";
            document.getElementById("error2").style.display="none";
        }

        if (hasUppercase && hasLowercase && hasNumeric && hasSpecialChar) {
            check2 = true;
            document.getElementById("error3").style.display="none";
            document.getElementById("error4").style.display="none";
        } else {
            showError(4);
        }

        if (check1 && check2) {
            window.location.href = 'homepage.php';
        }


        if (attempts < 1) {
            document.getElementById("user-box").disabled = "true";
            document.getElementById("pass-box").disabled = "true";
            document.getElementById("login-box").disabled = "true";
        }

        attempts--;

        }

        function showError (error) {
            switch (error) {
                case 1:
                    document.getElementById("error1").style.display="block";
                    break;
                case 2:
                    document.getElementById("error2").style.display="block";
                    break;
                case 3:
                    document.getElementById("error3").style.display="block";
                    break;
                case 4:
                    document.getElementById("error4").style.display="block";
                    break;
                case 5:
                    document.getElementById("error5").style.display="block";
                    break;
            }
        }
    </script>
</head>

<body>
    <!-- DEFAULT USERNAME: username, DEFAULT PASSWORD: P4$$word -->
    <section class="container">
        <input type="checkbox">
        <form class="form" action="">
            <div class="form_front">
                <div class="form_details">Login to FizeraX</div>
                <input id="user-box" name="username" placeholder="Username" class="input" type="text" maxlength="8">
                <input id="pass-box" name="password" placeholder="Password" class="input" type="password" maxlength="8" minlength="8">
                <input id="login-box"type="button" class="btn" onclick="request_login(this.form)" value="Login"></input>
                <span class="move">Don't have an account?
                    <label class="signup_tog" onclick="window.location.href = 'signup.php'">
                        Sign Up
                    </label>
                </span>
                <span class="error" id="error1">Username contains special characters or numbers.</span>
                <span class="error" id="error2">Username is less than 8 characters.</span>
                <span class="error" id="error3">Password is less than 8 characters.</span>
                <span class="error" id="error4">Password must start with one uppercase and contains lowercase, numeric and special character.</span>
                <span class="error" id="error5">Input boxes cannot be empty.</span>
            </div>
        </form>
    </section>
</body>

</html>

<!--Login page (apply background image and other elements)

 o   Username

·         8 characters long containing only uppercase and lowercase characters. Special and numeric characters are not allowed.

o   Password

    - 8 characters long containing at least one uppercase, lowercase, numeric and special character. Must start with a capital letter.

  o  There shall be 3 allowable attempts. After which, it will display an appropriate error message. Provide in the comment section the default username and password so that I can access the page.

 o   Aside from the username and password in the login page, include a link below to Create New Account.
 -->
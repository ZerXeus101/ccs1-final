<!DOCTYPE html>

<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="./css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@400;700&display=swap" rel="stylesheet">
</head>



<body>
    <section class="container">
        <input type="checkbox">
        <form class="form">
            <div class="form_front">
                <div class="form_details">Login to FizeraX</div>
                <input placeholder="Username" class="input" type="text">
                <input placeholder="Password" class="input" type="password">
                <input type="button" class="btn" onclick="window.location.href = 'homepage.php'" value="Login"></input>
                <span class="move">Don't have an account?
                    <label class="signup_tog" onclick="window.location.href = 'signup.php'">
                        Sign Up
                    </label>
                </span>
            </div>
        </form>
    </section>
</body>

</html>
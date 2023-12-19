<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Account</title>
    <link rel="stylesheet" href="./css/styler.css">
</head>
<body>
    <main class="wrap">
    <form action="homepage.php" class="createform" id="createform" method="post">
            <section class="formbox">
                <label for="username"><?php
                    echo "Hello " . $_POST["username"] . "!, Your Account has been Created!";
                ?></label>
                <input value=<?php echo $_POST["username"]; ?> style="visibility: hidden" type="text" id="username" name="username" maxlength="8" placeholder="Only uppercase or lowercase letters, 8 characters long">
            </section>
            <aside class="submitbox">
                <input type="submit" id="submit" name="submit" value="GO TO HOMEPAGE" onclick="return true">
                <input type="button" id="cancel" name="cancel" value="CANCEL" onclick="window.location.href = './login.php'";
            </aside>
        </form>
    </main>
</body>
</html>
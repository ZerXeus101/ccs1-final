<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Account</title>
    <link rel="stylesheet" href="./css/styler.css">
    <style>
        input {
            border: none;
        }
    </style>
</head>
<body>
    <!-- Made by: Baxter Bao-as -->
    <main class="wrap">
        <form action="create.php" class="createform" id="createform" method="post">
        <section class="formbox box1 fullname">
            <label for="fName">First Name:</label>
            <input disabled value=<?php echo $_POST["fName"]; ?> type="text" id="fName" name="fName" placeholder="Levi Merino" value="">
            <label for="lName">Last Name:</label>
            <input disabled value=<?php echo $_POST["lName"]; ?> type="text" id="lName" name="lName" placeholder="Ortua">
            <label for="midIn">Middle Initial:</label>
            <input disabled value=<?php echo $_POST["midIn"]; ?> type="text" id="midIn" name="midIn" placeholder="A." maxlength="2">
        </section>
            <hr color="black"/>
        <section class="formbox box2 information">
            <span id="g">Gender:</span>
            <input disabled value=<?php echo $_POST["gender"]; ?> type="text" id="gender" name="gender" placeholder="Ortua">
            <label for="age">Age:</label>
            <input disabled value=<?php echo $_POST["age"]; ?> type="number" name="age" id="age" placeholder="How old are you?">
            <!-- TODO: fix the upperbutton key -->
            <label for="contact">Contact Number:</label>
            <input disabled value=<?php echo $_POST["contact"]; ?> type="text" id="contact" name="contact" placeholder="091234567890">
        </section>
            <hr color="black"/>
        <section class="formbox box3 account">
            <label for="email">Email:</label>
            <input disabled value=<?php echo $_POST["email"]; ?> type="text" id="email" name="email" placeholder="levi123@yahoo.com">
            <label for="username">Username:</label>
            <input value=<?php echo $_POST["username"]; ?> type="text" id="username" class="unclickable" name="username" maxlength="8" placeholder="Only uppercase or lowercase letters, 8 characters long">
            <label for="pass">Password:</label>
            <input disabled value=<?php echo $_POST["pass"]; ?> type="password" id="pass" name="pass" maxlength="8" placeholder="Starts with a capital, At least 1 lowercase, number and special character, 8 characters long">
            <label for="retype">Confirm Password:</label>
            <input disabled value=<?php echo $_POST["retype"]; ?> type="password" id="retype" name="retype" placeholder="Confirm Password">
        </section>
            <br />
            <span id="errorbox" style="visibility: visible">Confirm these details? <a href="./signup.php" style="color: red">Go Back?</a></span>
            <aside class="submitbox">
                <input type="submit" id="submit" name="submit" value="Create New Account" onclick="return true">
            </aside>
        </form>
    </main>
</body>
</html>
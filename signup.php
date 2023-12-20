<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Account</title>
    <link rel="stylesheet" href="./css/styler.css">
</head>
<body>
    <!-- Made by: Baxter Bao-as -->
    <main class="wrap">
        <form action="confirm.php" name="signupform" class="createform" id="createform" method="post">
            <section class="formbox box1 fullname">
                <label for="fName">First Name:</label>
                <input type="text" id="fName" name="fName" placeholder="Levi Merino" value="" class="nameinfo">
                <label for="lName">Last Name:</label>
                <input type="text" id="lName" name="lName" placeholder="Ortua" class="nameinfo">
                <label for="midIn">Middle Initial:</label>
                <input type="text" class="nameinfo" id="midIn" name="midIn" placeholder="A." maxlength="2">
            </section>
            <hr color="black"/>
            <section class="formbox box2 information">
                <span id="g">Gender:</span>
                <section class="genderchecklist" id="genders">
                    <label for="male">Male</label>
                    <input type="radio" name="gender" id="male" class="gender" value="male">
                    <label for="female">Female</label>
                    <input type="radio" name="gender" id="female" class="gender" value="female">
                </section>
                <label for="age">Age:</label>
                <input type="number" name="age" id="age" placeholder="How old are you?">
                <label for="contact">Contact Number:</label>
                <input type="number" id="contact" name="contact" placeholder="091234567890">
            </section>
            <hr color="black"/>
            <section class="formbox box3 account">
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" placeholder="levi123@yahoo.com">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" maxlength="8" placeholder="Only uppercase or lowercase letters, 8 characters long">
                <label for="pass">Password:</label>
                <input type="password" id="pass" name="pass" maxlength="8" placeholder="Starts with a capital, At least 1 lowercase, number and special character, 8 characters long">
                <label for="retype">Confirm Password:</label>
                <input type="password" id="retype" name="retype" placeholder="Confirm Password">
            </section>
            <br />
            <span id="errorbox">* </span>
            <aside class="submitbox">
                <input type="submit" id="submit" name="submit" value="Sign Up" onclick="return errorCheck(this.form, this)">
            </aside>
        </form>
    </main>
</body>
<script>
    function errorCheck(f, btn) {
        if(f.fName.value.trim().length == 0 || f.lName.value.trim().length == 0 || f.midIn.value.trim().length == 0 || f.gender.value == 0 || f.age.value.trim().length == 0 || f.contact.value.trim().length == 0 || f.email.value.trim().length == 0 || f.username.value.trim().length == 0 || f.pass.value.trim().length == 0 || f.retype.value.trim().length == 0) {
            blankCheck(f);
            return false;
        }
        else if (f.age.value == "0") {
            errorInit(1, "Age")
            return false
        }
        else if (f.contact.value == "0") {
            errorInit(1, "Contact Number")
            return false
        }
        else if(!emailCheck(f.email.value.trim())) {
            errorInit(2, "Email")
            return false
        }
        else if(!usernameCheck(f.username.value)) {
            errorInit(2, "Username")
            return false
        }
        else if(!passwordCheck(f.pass.value)) {
            errorInit(2, "Password")
            return false
        }
        else if(f.pass.value !== f.retype.value) {
            errorInit(3, "Confirm Password")
            return false
        }
        else {
            document.getElementById("errorbox").style.visibility = "hidden";
            f.action = "confirm.php";
            btn.setAttribute("type", "submit");
            return true;
        }
    }

    function blankCheck(f) {
        var empty = 0;
        switch(empty) {
            case f.fName.value.trim().length:
                errorInit(0, "First Name")
                break;
            case f.lName.value.trim().length:
                errorInit(0, "Last Name")
                break;
            case f.midIn.value.trim().length:
                errorInit(0, "Middle Initial")
                break;
            case f.gender.value.length:
                errorInit(0, "Gender")
                break;
            case f.age.value.trim().length:
                errorInit(0, "Age");
                break;
            case f.contact.value.trim().length:
                errorInit(0, "Contact Number")
                break;
            case f.email.value.trim().length:
                errorInit(0, "Email")
                break;
            case f.username.value.trim().length:
                errorInit(0, "Username")
                break;
            case f.pass.value.trim().length:
                errorInit(0, "Password")
                break;
            case f.retype.value.trim().length:
                errorInit(0, "Confirm Password")
                break;
        }
    }

    function emailCheck(email) {
        var pass = false;
        var error = document.getElementById('errorbox');
        error.textContent = "* ";
        for(i = 0; i < email.length; i++) {
            if(email[i] == "@") {
                pass = true;
                break;
            }
        }
        if(!pass) {
            error.textContent += "Expected '@' in the email field";
            error.style.visibility = 'visible';
        }
        return pass;
    }

    function usernameCheck(username) {
        var valid = true;
        var error = document.getElementById('errorbox');
        error.textContent = "* ";
        if(username.length != 8) {
            valid = false;
            error.textContent += "Username must be 8 characters long";
            error.style.visibility = 'visible';
            return valid;
        }
        for(i = 0; i < username.length; i++) {
            if((username[i] < "a" || username[i] > "z") && (username[i] < "A" || username[i] > "Z")) {
                valid = false;
                error.textContent += "Username must only have letters";
                error.style.visibility = 'visible';
                break;
            }
        }
        return valid;
    }

    function passwordCheck(pass) {
        var valid = true;
        var error = document.getElementById('errorbox');
        error.textContent = "* ";
        if(pass.length != 8) {
            valid = false;
            error.textContent += "Password must be 8 characters long";
            error.style.visibility = 'visible';
            return valid;
        }
        if(pass[0] < "A" || pass[0] > "Z") {
            valid = false;
            error.textContent += "Password must start with a capital letter";
            error.style.visibility = 'visible';
            return valid;
        }
        var lc = false, num = false, special = false;
        for(i = 0; i < pass.length; i++) {
            if(pass[i] >= "a" && pass[i] <= "z") 
                lc = true;
            if(pass[i] >= "0" && pass[i] <= "9")
                num = true;
            if((pass[i] < "a" || pass[i] > "z") && (pass[i] < "A" || pass[i] > "Z") && (pass[i] < "0" || pass[i] > "9")) {
                special = true;
            }       
        }
        if(lc && num && special) {
            valid = true;
            return valid;
        }
        else {
            error.textContent += "Needs at least ";
            if(!lc)
                error.textContent += "1 lowercase character, ";
            if(!num)
                error.textContent += "1 number, ";
            if(!special)
                error.textContent += "1 special character, ";
            error.style.visibility = "visible";
            valid = false
            return valid;
        }
    }

    //error codes
    //0 - One of the form elements is not filled
    //1 - Age/Contact Number shouldn't be zero
    //2 - Invalid Email/Username/Password
    //3 - Passwords don't match each other

    function errorInit(code, directObject) {
        var error = document.getElementById("errorbox")
        switch(code) {
            case 0:
                error.textContent = "* " + directObject + " field is blank";
                error.style.visibility = "visible"; 
                break;
            case 1:
                error.textContent = "* " + directObject + " shouldn't be zero";
                error.style.visibility = "visible"; 
                break;
            case 2:
                error.textContent += " - Invalid " + directObject; 
                break;
            case 3:
                error.textContent = "* " + directObject + " doesn't match"
                error.style.visibility = "visible"; 
                break;
            default:
                alert("Unknown Error encountered.. for some reason, restarting the website");
                window.location.reload();
        }
    }
</script>
</html>
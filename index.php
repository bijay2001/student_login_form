<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "student_form";

$conn = new mysqli($servername, $username, $password, $database);

if (!$conn) {
    echo " Not Connected ";
}

?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STUDENT LOGIN</title>
    <style>
        body {
            align-items: center;
            justify-content: center;
            height: 100vh;
            background: blueviolet;
            display: flex;
            font-size: x-large;
            color: white;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }

        input {
            border: none;
            padding: 5px;
            border-radius: 3px;
        }

        button {
            margin-left: 200px;
            padding: 5px;
            border: none;
            font-weight: bold;
        }
        button:hover{
            background: blue;
            color: white;
        }

        p {
            display: none;
            color: red;
            font-size: small;
        }
    </style>
</head>

<body>
    <fieldset>
        <legend>Student login form</legend>
        <form onsubmit="return input()" method="post">
            <label for="Name">Name:</label>
            <input type="text" id="f_name" name="fname" placeholder="first name">
            <span>
                <p id="fnameError">"*First name cannot be empty"</p>
            </span>
            <input type="text" id="l_name" name="lname" placeholder="Last name">
            <p id="lnameError">"*Last name cannot be empty"</p><br><br>
            <label for="phone">Mob no:</label>
            <input type="text" id="mob" name="number" placeholder="Mob No">
            <p id="mobError">"*Mobile number cannot be empty"</p><br><br>
            <label for="email">Email:</label>
            <input type="text" id="e_mail" name="email" placeholder="Email id">
            <p id="emailError">"*Email cannot be empty"</p><br><br>
            <label for="pass">Password:</label>
            <input type="password" id="pass" name="password" placeholder="password">
            <p id="passError">"*Password cannot be empty"</p><br><br>
            <button name="submit_data" value="submit">Submit</button>
        </form>
    </fieldset>
</body>
<script>
    function input() {
        let firstName = document.getElementById("f_name").value.trim();
        let lastName = document.getElementById("l_name").value.trim();
        let mobNo = document.getElementById("mob").value.trim();
        let email = document.getElementById("e_mail").value.trim();
        let password = document.getElementById("pass").value.trim();

        if (firstName === "") {
            document.getElementById("fnameError").style.display = "block";
            return false;
        } else {
            document.getElementById("fnameError").style.display = "none";

        }

        if (lastName === "") {
            document.getElementById("lnameError").style.display = "block";
            return false;
        } else {
            document.getElementById("lnameError").style.display = "none";

        }

        if (mobNo === "") {
            document.getElementById("mobError").style.display = "block";
            return false;
        } else {
            document.getElementById("mobError").style.display = "none";
        }

        if (email === "") {
            document.getElementById("emailError").style.display = "block";
            return false;
        } else {
            document.getElementById("emailError").style.display = "none";
        }

        if (password === "") {
            document.getElementById("passError").style.display = "block";
            return false;
        } else {
            document.getElementById("passError").style.display = "none";

        }
    }
</script>

</html>
<?php
if (isset($_POST["submit_data"])) {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $number = $_POST["number"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $query = "INSERT INTO `login_form`( `fname`, `lname`, `number`, `email`, `password`) VALUES ('$fname','$lname','$number','$email','$password')";
    $result = mysqli_query($conn, $query);
    if ($result) {
        ?>
        <script>
            alert("Login successfully");
        </script>
        <?php

    }

}

?>
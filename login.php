<?php
//IMPORT THE DB CONN AND auxiliaries.phpS
require_once "./conn.php";
require_once "./auxiliaries.php";

//CHECK IF THE SUBMIT BUTTON IS CLICKED
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    //CREATE AN OBJECT OF THE CLASS ADMIN
    $Admin = new Admin($conn, "admin");

    //CALL THE READ FUNCTION OF THE ADMIN CLASS AND STORE RESPONSE IN $results
    $results = $Admin->read("email", $email);

    //CHECK IF THE NUMBER OF ROW RETURNED IS > 0
    if (!empty($results)) {
        $retrievedEmail = $results[0]["email"];
        $retrievedPassword = $results[0]["password"];

        //CHECK IF USER EMAIL IS EQUAL TO RETRIEVED EMAIL AND USER PASSWORD IS EQUAL TO RETRIEVED PASSWORD
        if ($email == $retrievedEmail && $password == $retrievedPassword) {
            //REDIRECT USER TO BLOG PAGE
            header("location: ./blog.php");
        } else {
            //SHOW ERROR TO USER
            echo "wrong email or password";
        }
    } else {
        //SHOW ERROR TO USER
        echo "check your details";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hi-Fi</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,900&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">
        <nav class="navbar">
            <a href="#">Company</a>
        </nav>
        <div class="login-container">
            <div class="form">
                <h2>Admin Login</h2>
                <form action="" method="POST">
                    <div class="form-details">
                        <label for="">Email</label>
                        <input type="email" name="email" id="">
                        <label for="">Password</label>
                        <input type="password" name="password" id="">
                        <a href="#" style="text-align: right;">Forgot your password?</a>
                        <button type="submit" name="submit">Log In</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
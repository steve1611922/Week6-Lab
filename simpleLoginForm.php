<!--<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login Form</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>
    <div id="main">
        <h1>PHP Login Form with Session</h1>
        <div class="login">
            <h2>Login Form</h2>
            <form method="post" action="login.php">
                <label>Username:</label>
                <input type="text" name="username" placeholder="username" />
                <label>Password:</label>
                <input type="password" name="password" placeholder="password" />
                <input type="submit" name="submit" value = "login"/>
                <span id="error">
                <?php
                //$error = $_GET['error'];
                //echo $error;
                ?>
            </span>
            </form>

        </div>
    </div>
</body>
</html>-->
<?php
include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
    header("location: profile.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login Form in PHP with Session</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="main">
    <h1>PHP Login Session Example</h1>
    <div id="login">
        <h2>Login Form</h2>
        <form action="" method="post">
            <label>UserName :</label>
            <input id="name" name="username" placeholder="username" type="text">
            <label>Password :</label>
            <input id="password" name="password" placeholder="**********" type="password">
            <input name="submit" type="submit" value=" Login ">
            <span><?php echo $error; ?></span>
        </form>
    </div>
</div>
</body>
</html>

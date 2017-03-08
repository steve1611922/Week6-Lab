<!doctype html>
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
    <br><br>
    <form method="post" action="login.php">
        <label>Username:</label><br>
        <input type="text" name="username" placeholder="username" /><br><br>
        <label>Password:</label><br>
        <input type="password" name="password" placeholder="password" />  <br><br>
        <input type="submit" name="submit" value = "login"/>
    </form>
    <div id="error">
        <?php
        $error = $_GET['error'];
        echo $error;
        ?>
    </div>
</div>
</div>
</body>
</html>

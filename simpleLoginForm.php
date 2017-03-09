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
        <div id="login">
            <h2>Login Form</h2>
            <form method="post" action="login.php">
                <label>Username:</label>
                <input type="text" name="username" placeholder="username" />
                <label>Password:</label>
                <input type="password" name="password" placeholder="password" />
                <input type="submit" name="submit" value = "login"/>
                <span id="error">
                <?php
                    $error = $_GET['error'];
                    echo "<br>."$error;
                ?>
            </span>
            </form>
        </div>
    </div>
</body>
</html>

<! DOCTYPE html >
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
<p>
    <?php
    // php code goes here
    include('dbConnect.php'); // connect to db uses string $link
    // check login details
    if(empty($_POST["username"]) || empty($_POST["password"]))
    {
        echo "Both fields are required.";
    }else {
        $username = $_POST['username'];
        $password = $_POST['password'];
        echo $username;
        echo $password;
        $sql="SELECT uid FROM users WHERE username='".$username."' and password='".$password."'";
        echo $sql;
        $result = mysqli_query($link,$sql);
        echo $result;
        echo mysql_num_rows($result);
        if(mysqli_num_rows($result) == 1)
        {
            header("location: home.php?username=$username"); // Redirecting To another Page
        }else
        {
            echo "Incorrect username or password.";
        }
    }
    ?>
</p>
</body>
</html>
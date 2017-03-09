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
        $error = "Both fields are required.";
        header("location: simpleLoginForm.php?error=".$error); // Redirecting To another Page
        //echo "Both fields are required.";
    }else
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        //Query with mysqli_*
        /*$sql="SELECT uid FROM users WHERE username='".$username."' and password='".$password."'";
        $result = mysqli_query($link,$sql);
        if(mysqli_num_rows($result) == 1)
        {
            header("location: home.php?username=".$username); // Redirecting To another Page
        }else
        {
            //echo "Incorrect username or password.";
            $error = "Incorrect username or password.";
            header("location: simpleLoginForm.php?error=".$error); // Redirecting To another Page
        }*/
        //Query with PDO
        $sql = 'SELECT uid FROM users WHERE username = :username AND password=:password';
        $result = $link_pdo->prepare($sql);
        $result->execute(['username' => $username, 'password' => $password]);
        if($result->rowCount() == 1)
        {
            header("location: home.php?username=".$username); // Redirecting To another Page
        }else
        {
            //echo "Incorrect username or password.";
            $error = "Incorrect username or password.";
            header("location: simpleLoginForm.php?error=".$error); // Redirecting To another Page
        }
    }
    ?>
</p>
</body>
</html>
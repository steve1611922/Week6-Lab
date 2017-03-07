<html>
<head>
    <meta charset="utf-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>
<h1>Hello</h1>
<?php
$user = $_GET["$username"];
echo "Hello:".$username;
include('dbClose.php'); // disconnect from db
?>
</body>
</html>

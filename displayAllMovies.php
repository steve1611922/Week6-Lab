<! DOCTYPE html >
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Display all Movies</title>
</head>
<body>
<p>
    <?php
    include('dbConnect.php'); // connect to db
    // php code goes here
    // create a SQL query as a string
    $sql_query = "SELECT * FROM marvelmovies";
    // execute the SQL query
    $result = $link_pdo->query($sql_query);
    // iterate over $result object one $row at a time
    // use fetch_array() to return an associative array
    //<ul class="list-group">
    //   <li class="list-group-item list-group-item-success">Dapibus ac facilisis in</li>
    //</ul>
    echo "<ul class='list-group'></ul>";
    while($row = $result->fetch(PDO::FETCH_ASSOC)){
        // print out fields from row of data
        $movieTitle = $row["title"];
        echo "<li class='list-group-item list-group-item-success'>" . $movieTitle . "</li>";
     //   echo "<p>" . $movieTitle . "</p>";
    }
    echo "</ul>";
    

    include('dbClose.php'); // disconnect from db
    ?>
</p>
</body>
</html>
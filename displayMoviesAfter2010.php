<! DOCTYPE html >
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Marvel Movies after 2010</title>
</head>
<body>
<p>
    <?php
    include('dbConnect.php'); // connect to db
    // php code goes here
    // create a SQL query as a string
    $sql_query = "SELECT * FROM marvelmovies WHERE yearReleased > 2010";
    // execute the SQL query
    $result = $link->query($sql_query);
    // iterate over $result object one $row at a time
    // use fetch_array() to return an associative array
    while($row = $result->fetch_array()){
        // print out fields from row of data
        $movieTitle = $row["title"];
        echo "<p>" . $movieTitle . "</p>";
    }
    include('dbClose.php'); // disconnect from db
    ?>
</p>
</body>
</html>
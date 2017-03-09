<?php
/*
* Check the file is of an allowed type
* Check if the uploaded file is no bigger thant the maximum allowed size
* connect to the database
* Insert the data
*/
/**
 * the upload function
 * @access public
 * @return void
 */
function upload(){
    global $link_pdo;  // To make database connection available within function
    /*** check if a file was uploaded ***/
    if(is_uploaded_file($_FILES['userfile']['tmp_name']) && getimagesize($_FILES['userfile']['tmp_name']) != false)
    {
        /***  get the image info. ***/
        $size = getimagesize($_FILES['userfile']['tmp_name']);
        /*** assign our variables ***/
        $type = $size['mime'];
        $imgfp = fopen($_FILES['userfile']['tmp_name'], 'rb');
        $size = $size[3];
        $name = $_FILES['userfile']['name'];
        $maxsize = 99999999;

        /***  check the file is less than the maximum file size ***/
        if($_FILES['userfile']['size'] < $maxsize )
        {
            /*** connect to db ***/
            include('dbConnect.php'); // connect to db uses string $link
            /* $dbh = new PDO("mysql:host=localhost;dbname=testblob", 'username', 'password');
            /*** set the error mode ***/
            /*$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); */

            /*** our sql query ***/
            $stmt = $link_pdo->prepare("INSERT INTO dbimage (image_type ,image, image_size, image_name) VALUES (? ,?, ?, ?)");

            /*** bind the params ***/
            $stmt->bindParam(1, $type);
            $stmt->bindParam(2, $imgfp, PDO::PARAM_LOB);
            $stmt->bindParam(3, $size);
            $stmt->bindParam(4, $name);

            /*** execute the query ***/
            $stmt->execute();
        }
        else
        {
            /*** throw an exception is image is not of type ***/
            throw new Exception("File Size Error");
        }
    }
    else
    {
        // if the file is not less than the maximum allowed, print an error
        throw new Exception("Unsupported Image Format!");
    }
}
?>
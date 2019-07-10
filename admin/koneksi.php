<?php
    $HOSTNAME = "localhost";
    $USERNAME = "root";
    $PASSWORD = "" ;
    $DBNAME   = "ecatalog";

    $conn = mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD) or
                 die(mysqli_errorr());
    $db = mysqli_select_db ($conn,$DBNAME) or
            die(mysqli_error($conn));

   $pdo = new PDO('mysql:host='.$HOSTNAME.';dbname='.$DBNAME, $USERNAME, $PASSWORD);

?>

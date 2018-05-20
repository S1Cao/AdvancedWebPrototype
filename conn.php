<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "BookStore";

    $db = mysqli_connect($servername,$username,$password,$dbname)or die("Error connecting to database."); 
    //Connect to the databasse 
    //$db = mysqli_select_db($conn, $dbname)or die("Couldn't select the database."); 
    //Selects the database
?>
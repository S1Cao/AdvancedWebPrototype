<?php
    require('conn.php');
      
    $reg_username = $password = $reg_email = "";
    
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $reg_username = reg_input($_POST["reg_username"]);
    $password = reg_input($_POST["reg_password"]);
    //include 'pw_hash.php';
    $reg_email = reg_input($_POST["reg_email"]);
    }

    function reg_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }
    
    $sql_insert="INSERT INTO user (username, password, email) VALUE
    ('".$reg_username."', '".$password."' , '".$reg_email."')";
    echo '<script language="javascript">';
    echo 'alert("Acount successfully created")';
    echo '</script>';
    mysqli_query($db, $sql_insert);
    
?>
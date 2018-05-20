<?php
   include("conn.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {     
     
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
     
      $sql = "SELECT password FROM user WHERE username = '$myusername'";
      $hashed_psw = mysqli_query($db,$sql);
      $row = mysqli_fetch_assoc($hashed_psw);
     if (password_verify($mypassword, $row['password'])) {
         //session_register("myusername");
         //$_SESSION['login_user'] = $myusername;        
         $message = "Login success";
         echo "<script type='text/javascript'>alert('$message');</script>";
         echo "<script>setTimeout(\"location.href = 'index.php';\",0);</script>";
      
      }else {
         $message = "Your Login Name or Password is invalid";
         echo "<script type='text/javascript'>alert('$message');</script>";
         echo "<script>setTimeout(\"location.href = 'login.php';\",0);</script>";
      }
   }
?>
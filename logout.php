<?php 
session_start();
    
 $_SESSION['username']= null;

 header("location: home.php");


?>
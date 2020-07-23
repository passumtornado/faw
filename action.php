<?php
  session_start();
  require('database/connection.php');

  if (isset($_POST['login'])) {
  	 $login = $_POST['login'];
     $password = $_POST['password'];                
     $login = mysqli_real_escape_string($conn,$login);
      $password=mysqli_real_escape_string($conn,$password);

       $query = "SELECT * FROM farmer WHERE (username = '$login' OR email ='$login' )";
         $result = mysqli_query($conn,$query);
          if(mysqli_num_rows($result)>0){
          	 $row = mysqli_fetch_assoc($result);
                $pwd = $row['password'];
                $isValid = password_verify($password, $pwd);
                if($isValid){
                        $_SESSION['username'] = $username;
                        $_SESSION['farmerID'] = $row['farmerID'];
                        header('location:farmer_interface.php');
                        echo 'yes';
                }else{
                      echo 'no';
                }
          }
          else{
             echo 'me';

          }
  }
 ?>
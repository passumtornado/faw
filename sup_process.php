<?php
session_start();
require('database/connection.php');
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
  
    $email = mysqli_real_escape_string($conn,$email);
    $password = mysqli_real_escape_string($conn,$password);
  
    if(empty($email)){
      $erro[]="email is required";
    }
    if(empty($password)){
      $erro[]="password is required";
    }
    if(empty($error)){
      $query = "SELECT * FROM suppliers  WHERE email = '$email'";
      $result = mysqli_query($conn,$query);
      if($result){
          if(mysqli_num_rows($result)>0){
              $row = mysqli_fetch_assoc($result);
            $pwd = $row['password'];
            $isValid = password_verify($password, $pwd);
            if($isValid){
                   
             $_SESSION['firstname'] = $row['firstname'];
             $_SESSION['email']= $row['firstname'];
              header('location:supplier_dashboard.php');
               exit();
  
           }else{
               header('location:supplier_register.php');
             $_SESSION['message']= "Invalid password";
             $_SESSION['msg_type'] = "danger";
           }
           } else{
            header('location:supplier_register.php');
            $_SESSION['message']= "Invalid email";
            $_SESSION['msg_type'] = "danger";
            }
      }
  
  }
  }
  
  if(isset($_POST['register'])){
  
    $firstname= $_POST['firstname'];
      $lastname = $_POST['lastname'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $password1 = $_POST['confirm_password'];
      $address = $_POST['address'];
      $mobile = $_POST['mobile']; 
       
      $firstname = mysqli_real_escape_string($conn,$firstname);
      $lastname = mysqli_real_escape_string($conn,$lastname);
      $email = mysqli_real_escape_string($conn,$email);
      $password=mysqli_real_escape_string($conn,$password);
      $password1 = mysqli_real_escape_string($conn,$password1);
      $mobile = mysqli_real_escape_string($conn,$mobile);
      $address = mysqli_real_escape_string($conn,$address);            
         if($password == $password1){
           // $password = md5($password);
            $password = password_hash($password, PASSWORD_DEFAULT);
        }
        else{
          header('location:signup.php');
          $_SESSION['message']= "Password did not match";
          $_SESSION['msg_type'] = "danger";
      }
      $query = "SELECT email FROM suppliers WHERE email= '$email'";
       $query_result = mysqli_query($conn,$query);
         if($row = mysqli_num_rows($query_result)>0){
          header('location:signup.php');
          $_SESSION['message']= "Email already exist";
          $_SESSION['msg_type'] = "danger";
    }
  
     else{
     $query = "INSERT INTO suppliers (firstname,lastname,email,password,address,mobile)
                VALUES('$firstname','$lastname','$email','$password','$address','$mobile')";
         $result = mysqli_query($conn,$query);
         
  
      if(result){
        
      header('location:supplier_thank_you.php');
        exit();
   }
   else{
      header('location:signup.php');
      $_SESSION['message']= "You could not be registered due";
      $_SESSION['message'].="System Error<br />You could not be registered due ";
      $_SESSION['message'].="to a system error. We apologize for anyinconvenience.";
      $_SESSION['msg_type'] = "danger";
   exit();
   mysqli_close($conn);
  }
  }
  }

?>
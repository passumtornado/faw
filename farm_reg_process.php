<?php
 $error =array( );
  include ('database/connection.php');
  $first_name =  mysqli_real_escape_string($conn,$_POST['first_name']);
  if(empty($first_name)){
  	$error[]= "you forgot to enter first name";
  }
  $last_name = mysqli_real_escape_string($conn,$_POST['last_name']);
  if(empty($first_name)){
  	$error[]= "you forgot to enter last name";
  }
  $user_name =  mysqli_real_escape_string($conn,$_POST['user_name']);
  if(empty($user_name)){
  	$error[]= "you forgot to enter user name";
  }
  $email =  mysqli_real_escape_string($conn,$_POST['email']);
  if(empty($user_name)){
  	$error[]= "you forgot to enter email";
  }
  $address =  mysqli_real_escape_string($conn,$_POST['Address']);
  if(empty($address)){
  	$error[]= "you forgot to enter address";
  }
  $mobile =  mysqli_real_escape_string($conn,$_POST['phone']);
  if(empty($mobile)){
  	$error[]= "you forgot to enter mobile number";
  }
  $password =  mysqli_real_escape_string($conn,$_POST['password']);
  $password1 =  mysqli_real_escape_string($conn,$_POST['password1']);
  if(!empty($password)){
  	if($password !== $password1){
  		$error[]= "you two password did not match ";
  		echo "
                <div class='alert alert-warning'>
                 <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b><p>your password did not match</p></b>
                 </div>
            ";

  	}
  }else{
  		$error[]= "you forgot to enter password ";
  	}
  	print_r($error);
   if(empty($error)){
   	try{
   		 $query = "SELECT username,email FROM supplier WHERE username= '$username' OR email= '$email'";
         $query_result = mysqli_query($conn,$query);
         if($row = mysqli_num_rows($query_result)>0){
         	 echo "
                       <div class='alert alert-warning'>
                           <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b><p>Email or Username already exist</p></b>
                           </div>
                      ";
                  exit();
              }else{
              	//hash password
              	$hash_pascode = password_hash($password, PASSWORD_DEFAULT);
   		         require ('database/connection.php');
   		// make the query
   		$query ="INSERT INTO `farmer`(`firstname`,`lastname`,`username`,`email`,`password`,`address`,`contact`) ";
   		$query .= "VALUES(?,?,?,?,?,?,?)";
   		 $stmt = mysqli_prepare($conn,$query);
          $stmt->bind_param("sssssss", $first_name,$last_name,$user_name,$email,$hash_pascode,$address,$mobile);
         $result = $stmt->execute();
               if($result){
              
                 header('location:farmer_thanks.php');
               
                  exit();
             }   else{
   		 	echo "Error Occirred";
            mysqli_close($conn);
            exit();
   		 }

              }

   		
   		
         
         //  $result = mysqli_query($conn,$query);
   		// $result = mysqli_query($conn,$query);
              
}
   catch(Exception $e){
   	  print "An Exception occurred. Message: " . $e->getMessage();
       //print "The system is busy please try later";
   }
   catch(Error $e){
   	 print "An Exception occurred. Message: " . $e->getMessage();
      // print "The system is busy please try later";
   }
   }else{
   	echo "
                <div class='alert alert-warning'>
                 <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b><p>Error occured</p></b>
                 </div>
            ";
   }
 ?>
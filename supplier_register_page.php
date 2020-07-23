<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta name="description" content="farmers Assistance website">
	<meta name="keyword" content="farmers,suppliers,crops,">
	<!--bootstrap files-->
	<link href="css/material-kit.css?v=2.0.5" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="css/popper.css">
	
	<link href="css/.min.css?v=2.0.5" rel="stylesheet" />
	<!--fontawesome-->
	<!--<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />-->
	<link rel="stylesheet" type="text/css" href="css/all.css">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
   <link rel="stylesheet" type="text/css" href="iconfont/material-icons.css">
	<!-- faws css file -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Farmers Assistance Web services</title>
	<style type="text/css">
	
	</style>
</head>
<body>
 <!-- Header Section-->
 <header class="faws-header" id="faws-header">
 	<div class=" fawsnav">
 		<nav class="navbar fixed-top navbar-expand-lg bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">FAWS</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="sr-only">Toggle navigation</span>
    <span class="navbar-toggler-icon"></span>
    <span class="navbar-toggler-icon"></span>
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php"><i class="material-icons">home</i> Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="material-icons">account_circle</i> About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="material-icons">phone</i> Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#register"><i class="material-icons">send</i>Register</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
 	</div>
 </header>
  <!-- faws banner -->
 <div class="fwasbanner">
  <img src="images/supplier1.jpg" class="img-fluid" id="fwasbanner">
 </div>
 <!-- farmer Register Forms -->
 <div class="container-fluid register" id="register">
    <div class="row">
  <div class="col-md-2"></div>
  <div class="col-md-8">
       <div class="card">
        <div class="card-header card-header-success">
            <h4 class="card-title">Register with us </h4>
            <p class="category">please fill in all fields!!!</p>
        </div>
        <div class="card-body">
          <?php 
          require ('database/connection.php');
              if(isset($_POST['submit'])){
               
                $firstname= $_POST['firstname'];
                $lastname = $_POST['lastname'];
                $username = $_POST['username'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $password1 = $_POST['password1'];
                $address = $_POST['address'];
                $mobile = $_POST['mobile']; 
                 
                $firstname = mysqli_real_escape_string($conn,$firstname);
                $lastname = mysqli_real_escape_string($conn,$lastname);
                $username = mysqli_real_escape_string($conn,$username);
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
                     echo  "
             <div class='alert alert-warning'>
                 <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b><p>Please password did not match</p></b>
                 </div>
                       ";
                   exit();
                }
                $query = "SELECT username,email FROM supplier WHERE username= '$username' OR email= '$email'";
                 $query_result = mysqli_query($conn,$query);
                   if($row = mysqli_num_rows($query_result)>0){
                  echo "
                       <div class='alert alert-warning'>
                           <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b><p>Email or Username already exist</p></b>
                           </div>
                      ";
                  exit();
              }

               else{
               $query = "INSERT INTO supplier (firstname,lastname,username,email,password,address,contact)
                          VALUES('$firstname','$lastname','$username','$email','$password','$address','$mobile')";
                   $result = mysqli_query($conn,$query);
                   
          
                if(result){
                  
                header('location:supplier_thank_you.php');
                  exit();
             }
             else{
             $errorstring = "<p class='text-center col-sm-8' style='color:red'>";
             $errorstring .= "System Error<br />You could not be registered due ";
             $errorstring .= "to a system error. We apologize for anyinconvenience.</p>";
            echo "
                <div class='alert alert-warning'>
                 <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b><p>$errorstring</p></b>
                 </div>
                  ";
             exit();
             mysqli_close($conn);
           }
            }
          }
            ?>
             <form method="post" action="">
               <div class="form-group bmd-form-group">
                                <div class="input-group">
                                  <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="material-icons">face</i></div>
                                  </div>
                                  <input type="text" class="form-control" placeholder="First Name..." required name="firstname">
                                </div>
                            </div>


                            <div class="form-group bmd-form-group">
                                <div class="input-group">
                                  <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="material-icons">face</i></div>
                                  </div>
                                  <input type="text" class="form-control" placeholder="last Name..." required name="lastname">
                                </div>
                            </div>
                            <div class="form-group bmd-form-group">
                                <div class="input-group">
                                  <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="material-icons">face</i></div>
                                  </div>
                                  <input type="text" class="form-control" placeholder="user Name..." required name="username">
                                </div>
                            </div>


                            <div class="form-group bmd-form-group">
                                <div class="input-group">
                                  <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="material-icons">email</i></div>
                                  </div>
                                  <input type="text" class="form-control" name="email" placeholder="Email..." required>
                                </div>
                            </div>
                            <div class="form-group bmd-form-group">
                                <div class="input-group">
                                  <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="material-icons">home</i></div>
                                  </div>
                                  <input type="text" class="form-control" name="address" placeholder="Address..." required>
                                </div>
                            </div>
                            <div class="form-group bmd-form-group">
                                <div class="input-group">
                                  <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="material-icons">phone</i></div>
                                  </div>
                                  <input type="number" class="form-control" name="mobile" placeholder="phone No..." required>
                                </div>
                            </div>

                            <div class="form-group bmd-form-group">
                                <div class="input-group">
                                  <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="material-icons">lock_outline</i></div>
                                  </div>
                                  <input type="password" name="password" placeholder="Password..." class="form-control" required>
                                </div>
                            </div>
                             <div class="form-group bmd-form-group">
                                <div class="input-group">
                                  <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="material-icons">lock_outline</i></div>
                                  </div>
                                  <input type="password" name="password1" placeholder="confirm Password..." class="form-control" required>
                                </div>
                            </div>
                             <button type="submit" class="btn btn-success" name="submit" class="form-control"style="width: 100%;">Submit</button>
             </form>
        </div>
    </div>
  </div>
  <div class="col-md-2"></div>
 </div>
 </div>


 <!--jquery & bootstrap js files -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/popper.min.js" type="text/javascript"></script>
<script src="js/bootstrap-material-design.min.js" type="text/javascript"></script>
<script src="js/moment.min.js"></script>
<script src="js/material-kit.js?v=2.0.5" type="text/javascript"></script>
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
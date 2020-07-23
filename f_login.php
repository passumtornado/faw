<?php 
session_start();
?>
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
	   body{
	   	background: url('images/cover.jpg') no-repeat;
	   }
      .card-body p{
        padding-left: 14px;
     }
    
	</style>
</head>
<body>
    <div class="container-fluid" style="margin-top: 70px;">
    	<div class="row">
    		<div class="col-md-4">
    		</div>
    		<div class="col-md-4">
    			<div class="card card-signup">
    				<div class="card-header card-header-success text-center">
    					 <h4 class="card-title">Log in</h4>
                    <div class="social-line" style="">
                      <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                        <i class="fa fa-facebook-square" style="color: blue;font-size: 24px;"></i>
                      </a>
                      <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                        <i class="fa fa-twitter" style="color: lightblue; font-size: 24px;"></i>
                      <div class="ripple-container"></div></a>
                      <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                        <i class="fa fa-google-plus" style="color: red; font-size: 24px;"></i>
                      </a>
                    </div>
    				</div>
    				<div class="card-body">

    			<?php 
                  $error = array();
                  require('database/connection.php');
                    if(isset($_POST['submit_farmer'])){
                      
                      $login = $_POST['login'];
                      $password = $_POST['password'];

                     
                      $login = mysqli_real_escape_string($conn,$login);
                      $password=mysqli_real_escape_string($conn,$password);
                      if(empty($login)){
                        $error[]="enter username or email";
                      }
                      if(empty($password)){
                        $error[]="enter password";
                      }
                      if(empty($error)){
                      // $hash_code = password_hash($password, PASSWORD_DEFAULT);
                        $query = "SELECT * FROM farmer WHERE (username = '$login' OR email ='$login' )";
                         $result = mysqli_query($conn,$query);
                        if(mysqli_num_rows($result)>0){
                          $row = mysqli_fetch_assoc($result);
                        $pwd = $row['password'];
                        $isValid = password_verify($password, $pwd);
                         if($isValid){
                          
                          $_SESSION['username'] = $row['username'];
                           $_SESSION['email']= $row['username'];
                           $_SESSION['success']= "Welcome Admin";
                           header('location:farmer_dashboard.php');
                            exit();

                        }else{
                          
                          $error[]="Wrong username/email or password";
                           echo  "
                               <div class='alert alert-warning'>
                                   <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b><p>Please password is not valid</p></b>
                                   </div>
                              ";
                         }

                        }else{
                           
                          echo  "
                               <div class='alert alert-warning'>
                                   <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b><p>Wrong username or password</p></b>
                                   </div>
                              ";
                        }
                        

                       
                        
                      }else{
                        echo  "
                               <div class='alert alert-warning'>
                                   <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b><p>All fields are required</p></b>
                                   </div>
                              ";
                      }
                           
                      }
                          
                  ?>
    					 <form class="form" method="post" action=" " name="farmer_login">
                        <h4 class="description text-center">farmer login forms</h4>
                        <div class="card-body">
                            <div class="form-group bmd-form-group">
                                <div class="input-group">
                                  <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="material-icons">email</i></div>
                                  </div>
                                  <input type="text" class="form-control" placeholder="Email or username..." required name="login" id="login"> 
                                </div>
                            </div>

                            <div class="form-group bmd-form-group">
                                <div class="input-group">
                                  <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="material-icons">lock_outline</i></div>
                                  </div>
                                  <input type="password" placeholder="Password..." class="form-control" required name="password" id="password">
                                </div>
                            </div>
                            <div class="form-group">
                            	 <button type="submit" class="btn btn-success" name="submit_farmer" class="form-control" id="submit_farmer" style="float:right;">login</button>
                            	<p><a href="#" class="text-primary">forgot password?</a><p/>
                            		<p><a href="#">Create an account</a></p>
                            	
                            </div>
                             
                        </div>
                    </form>
    				</div>
    			</div>
    		</div>
    		<div class="col-md-4"></div>
    	</div>
    </div>

	<footer class="jumbotron bg-dark">
	<p class="h6 col-sm-12 text-light">Copyright &copy;2019</p>
</footer>

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
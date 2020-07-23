<?php 
require ('database/connection.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="description" content="farmers Assistance website">
    <meta name="keyword" content="farmers,suppliers,crops,">
    <!--bootstrap files-->
    <link href="assets/css/.min.css?v=2.0.5" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/popper.css">

    <link href="assets/css/material-kit.css" rel="stylesheet" />
    <!--fontawesome-->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />

    <link rel="stylesheet" type="text/css" href="css/all.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
     <link rel="stylesheet" type="text/css" href="signup.css"> 
    <title>Register page</title>

</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">FAWS</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                        <li class="nav-item  active">
                            <a class="nav-link" href="#">login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main class="main">

        <div class="container form-container" id="signin">
            <div class="card">
                <div class="row">
                <div class="col-md-6">
                      <div class="singin-container">
     <?php 
     session_start();
        if(isset($_SESSION['message'])):?>
    <div class="row justify-content-center">
    	<div class="col-md-12">
    		 <div class="alert alert-<?=$_SESSION['msg_type']?> alert-dismissible fade show text-center" role="alert">
    		 		
    	<?php 
    	 echo $_SESSION['message'];
          unset( $_SESSION['message']);
    	 ?>
    	 <button type="button" class="close" data-dismiss="alert" aria-label="close">
    	 	<span aria-hidden="true">&times;</span>
    		 	<span class="sr-only">close</span>
    	 </button>
    		 	
    </div>
    	</div>
    	
    </div>
   
    <?php endif ?>
                    <form method="post" action="farm_process.php">
                        <h2>Sign In</h2>
                        <div class="social-container">
                            <a href="#" class="social"><i class="fa fa-facebook-f"></i></a>
                            <a href="#" class="social"><i class="fa fa-google-plus-g"></i></a>
                            <a href="#" class="social"><i class="fa fa-linkedin-in"></i></a>
                        </div>
                        <span>or use your account</span>
                        <div class="form-group bmd-form-group">
                            <label class="bmd-label-static">Email</label>
                            <input type="email" class="form-control" name="email" required>
                        </div>
                         <div class="form-group bmd-form-group">
                            <label class="bmd-label-static">password</label>
                            <input type="password" class="form-control" name="password" required>
                        </div>
                          <a href="#">Forgot your password?</a>
                        <div class="form-group bmd-form-group">
                             <button type="submit"  class="btn btn-primary btn-round" name="signin">Sign In</button>
                        </div>
                    </form>
                </div> 
                </div>
                    <div class="col-md-6" style="background:url('images/suppliers.jpg')">
                       <div class="overlay-panel" id="supplier_panel">
                        <h2>Hello, Suppliers!</h2>
                        <p>Enter your personal details and start journey with us</p>
                       <button class="btn btn-primary btn-round" id="signUp">Sign Up</button>
                    </div>
                    </div>
                </div>
             
            </div>

        </div>
         <div class="container forms-container" id="signup">
            <div class="card">
                <div class="row">
                <div class="col-md-6">
                      <div class="singin-container">
                      <?php 
        if(isset($_SESSION['message'])):?>
    <div class="row justify-content-center">
    	<div class="col-md-12">
    		 <div class="alert alert-<?=$_SESSION['msg_type']?> alert-dismissible fade show text-center" role="alert">
    		 		
    	<?php 
    	 echo $_SESSION['message'];
          unset( $_SESSION['message']);
    	 ?>
    	 <button type="button" class="close" data-dismiss="alert" aria-label="close">
    	 	<span aria-hidden="true">&times;</span>
    		 	<span class="sr-only">close</span>
    	 </button>
    		 	
    </div>
    	</div>
    	
    </div>
   
    <?php endif ?> 
                    <form method="post" action="sup_process.php">
                        <h2>Sign Up</h2>
                        <div class="social-container">
                            <a href="#" class="social"><i class="fa fa-facebook-f"></i></a>
                            <a href="#" class="social"><i class="fa fa-google-plus-g"></i></a>
                            <a href="#" class="social"><i class="fa fa-linkedin-in"></i></a>
                        </div>
                        <span>or use your account</span>
                        <div class="form-group bmd-form-group">
                            <label class="bmd-label-static">first name</label>
                            <input type="text" class="form-control" name="firstname" required>
                        </div>
                        <div class="form-group bmd-form-group">
                            <label class="bmd-label-static">last name</label>
                            <input type="text" class="form-control" name="lastname" required>
                        </div>
                        <div class="form-group bmd-form-group">
                            <label class="bmd-label-static">Email</label>
                            <input type="email" class="form-control" name="email" required>
                        </div>
                        <div class="form-group bmd-form-group">
                            <label class="bmd-label-static">Address</label>
                            <input type="text" class="form-control" name="address" required>
                        </div>
                        <div class="form-group bmd-form-group">
                            <label class="bmd-label-static">Mobile</label>
                            <input type="text" class="form-control" name="mobile" required>
                        </div>
                         <div class="form-group bmd-form-group">
                            <label class="bmd-label-static">password</label>
                            <input type="password" class="form-control" name="password" required>
                        </div>
                         <div class="form-group bmd-form-group">
                            <label class="bmd-label-static">Confirm password</label>
                            <input type="password" class="form-control" name="confirm_password" required>
                        </div>
                        <div class="form-group bmd-form-group">
                             <button type="submit" class="btn btn-primary btn-round" name="signup">Register</button>
                        </div>
                    </form>
                </div> 
                </div>
                    <div class="col-md-6 my-panel" style="background:url('images/suppliers.jpg')">
                       <div class="overlay-panel">
                        <h1>Welcome Back!</h1>
                        <p>
                            To keep connected with us please login with your personal info
                        </p>
                       <button class="btn btn-primary btn-round" id="signIn">Sign In</button>
                    </div>
                    </div>
                </div>
             
            </div>

        </div>
        

    </main>

    <script src="assets/js/core/jquery.min.js" type="text/javascript"></script>
    <script src="assets/js/material-kit.js" type="text/javascript"></script>
    <script src="assets/js/core/popper.min.js" type="text/javascript"></script>
    <script src="assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
    <script src="assets/js/plugins/moment.min.js"></script>
    <script src="assets/js/material-kit.js?v=2.0.5" type="text/javascript"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="main.js"></script>
</body>

</html>
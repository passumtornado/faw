
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
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
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
  <img src="images/farmreg.jpg" class="img-fluid" id="fwasbanner">
 </div>
 <!-- farmer Register Forms -->
 <div class="container-fluid register" id="register">
    <div class="row">
  <div class="col-md-3"></div>
  <div class="col-md-6">
       <div class="card">
        <div class="card-header card-header-success">
            <h4 class="card-title text-center">Register with us </h4>
            <p class="category">please fill in all fields!!!</p>
        </div>

        <div class="card-body">
           <?php 
          

          if($_SERVER['REQUEST_METHOD']=='POST'){
                require('farm_reg_process.php');
           }
         ?>
             <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" name="regform" id="regform">
               <div class="form-group bmd-form-group">
                                <div class="input-group">
                                  <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="material-icons">face</i></div>
                                  </div>
                                  <input type="text" class="form-control" placeholder="First Name..." name="first_name" required value="<?php if(isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name'])?>">
                                </div>
                            </div>


                            <div class="form-group bmd-form-group">
                                <div class="input-group">
                                  <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="material-icons">face</i></div>
                                  </div>
                                  <input type="text" class="form-control" placeholder="last Name..."name="last_name" required value="<?php if(isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name'])?>">
                                </div>
                            </div>
                            <div class="form-group bmd-form-group">
                                <div class="input-group">
                                  <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="material-icons">face</i></div>
                                  </div>
                                  <input type="text" class="form-control" placeholder="user Name..."name="user_name" required value="<?php if(isset($_POST['user_name'])) echo htmlspecialchars($_POST['user_name']) ?>">
                                </div>
                            </div>


                            <div class="form-group bmd-form-group">
                                <div class="input-group">
                                  <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="material-icons">email</i></div>
                                  </div>
                                  <input type="text" class="form-control" placeholder="Email..." name="email"required value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']) ?>">
                                </div>
                            </div>
                            <div class="form-group bmd-form-group">
                                <div class="input-group">
                                  <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="material-icons">home</i></div>
                                  </div>
                                  <input type="text" class="form-control" placeholder="Address..." required name="Address" value="<?php if(isset($_POST['Address'])) echo htmlspecialchars($_POST['Address']) ?>">
                                </div>
                            </div>
                            <div class="form-group bmd-form-group">
                                <div class="input-group">
                                  <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="material-icons">phone</i></div>
                                  </div>
                                  <input type="number" class="form-control" placeholder="phone No..." required name="phone" value="<?php if(isset($_POST['phone'])) echo htmlspecialchars($_POST['phone'])?>">
                                </div>
                            </div>

                            <div class="form-group bmd-form-group">
                                <div class="input-group">
                                  <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="material-icons">lock_outline</i></div>
                                  </div>
                                  <input type="password" placeholder="Password..." class="form-control" required name="password" value="<?php if(isset($_POST['password'])) echo htmlspecialchars($_POST['password']) ?>">
                                </div>
                            </div>
                             <div class="form-group bmd-form-group">
                                <div class="input-group">
                                  <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="material-icons">lock_outline</i></div>
                                  </div>
                                  <input type="password" placeholder="confirm Password..." class="form-control" required name="password1" value="<?php if(isset($_POST['password1'])) echo htmlspecialchars($_POST['password1']) ?>">
                                </div>
                            </div>
                             <button type="submit" class="btn btn-success" name="submit" class="form-control" style="width: 100%;" value="Register">Submit</button>
             </form>
        </div>
    </div>
  </div>
  <div class="col-md-3"></div>
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
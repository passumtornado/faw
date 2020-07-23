<?php 
require ('database/connection.php');
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
          <a class="nav-link" href="#"><i class="material-icons">home</i> Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="material-icons">account_circle</i> About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact"><i class="material-icons">phone</i> Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#login"><i class="material-icons">send</i>login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
 	</div>
 </header>
 <!-- faws banner -->
<!-- <div class="fwasbanner">
 	<img src="images/bg3.jpg" class="img-fluid" id="fwasbanner">
 </div>
 <!-- jumbotron -->
 <div class="jumbotron bg-success">
 	<div class="row">
 		<div class="col-md-8">
 			<p class="text-center text-light">A Web project to help farmers ensure greater profitability through direct farmer to supplier and farmer to farmer communication.
            This service boosts business communication and brings transparency in the system.
            This innovative site allows for good farmer, retailer and supplier communication. It allows farmers to login and communicate to respective dealers. When dealers publish an advertisement or offer, the respective farmers get notified via Sms message.</p>
 		</div>
 		<div class="col-md-2">
 			<a href="#"><button class="btn btn-dark btn-round">
       <i class="material-icons">favorite</i> View Tips
        </button></a>
 		</div>
 	</div>
 </div>
 <!-- Login -->
 <div class="container-fluid login" id="login">
 	<div class="row">
 		<div class="col-md-6">
 			<?php include ('farmer_login.php') ?>
 		</div>
 		<div class="col-md-6">
 			<?php include ('supplier_login.php') ?>
 		</div>
 	</div>
 </div>
 <!--about $ contact -->
 <div class="container-fluid">
 	<div class="row">
 		<div class="col-md-6">
 			<div class="about">
 				<h4 class="text-center">About</h4><hr>
 			</div>
 			<div class="card">
 				<div class="card-body">
 					<ul class="nav nav-pills nav-pills-icons" role="tablist">
    <!--
        color-classes: "nav-pills-primary", "nav-pills-info", "nav-pills-success", "nav-pills-warning","nav-pills-danger"
    -->
    <li class="nav-item">
        <a class="nav-link" href="#dashboard-1" role="tab" data-toggle="tab">
            <i class="material-icons">home</i>
            profile
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="#schedule-1" role="tab" data-toggle="tab">
            <i class="material-icons">schedule</i>
            mission
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#tasks-1" role="tab" data-toggle="tab">
            <i class="material-icons">list</i>
            vision
        </a>
    </li>
</ul>
<div class="tab-content tab-space">
    <div class="tab-pane active" id="dashboard-1">
		     A Web project to help farmers ensure greater profitability through direct farmer to supplier and farmer to farmer communication.
		This service boosts business communication and brings transparency in the system.
		This innovative site allows for good farmer, retailer and supplier communication. It allows farmers to login and communicate to respective dealers. When dealers publish an advertisement or offer, the respective farmers get notified via Sms message...<a href=""><button class="btn btn-success">Read more</button></a>
    </div>
    <div class="tab-pane" id="schedule-1">
      Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas.
      <br><br>Dramatically maintain clicks-and-mortar solutions without functional solutions.
    </div>
    <div class="tab-pane" id="tasks-1">
        Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas.
        <br><br>Dynamically innovate resource-leveling customer service for state of the art customer service.
    </div>
</div>

 				</div>
 			</div>
 		</div>
 		<div class="col-md-6">
 			<div class="about" id="contact">
 				<h4 class="text-center">contact</h4><hr>
 			</div>
 			<div class="card">
 				<div class="card-body">
 						<div class="row">
 						<div class="col-md-12">
 							<div class="container mydetials">
 								<h3 style="font-weight: 600;">Contact Details</h3><hr>
 							  <div class="test-one" id="test-one">
							  <h5><small>stay connected</small></h5>
							  <p><i class="fa fa-fw fa-phone"></i>+233241333114</p>
							  <p><a href="#"><i class="fa fa-fw fa-envelope"></i>zyontech@email.com</a></p>
							  <p><i class="fa fa-fw fa-map-marker"></i>Uenr-fiapre-notredam</p>
							  <p><a href="#"><i class="fa fa-fw fa-facebook"></i>facebook</a></p>
							  <p><a href="#"><i class="fa fa-fw fa-twitter"></i>@twitter</a></p>
							</div>
 							</div>
 							
 						</div>
 					</div>
 					<div class="row">
 						<div class="col-md-12">
 							<div>
 								<h4 class="text-danger text-center" style="font-weight: 400;">Please Message us!!!</h4>
 							</div>
 							<form>
 								<div class="form-group">
								    <label for="exampleInputEmail1">Email address</label>
								    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
								    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
								  </div>
								    <div class="form-group">
								    <label for="exampleFormControlTextarea1">Message</label>
								    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
								  </div>
								   <button type="submit" class="btn btn-success" name="submit" class="form-control" style="width: 100%;" value="Register">Submit</button>
 							</form>
 						</div>
 					</div>
 				
 				</div>
 			</div>
 		</div>
 	</div>

 </div>
 <!--footer -->
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
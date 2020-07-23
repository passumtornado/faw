<?php 
 session_start();
 if(!isset($_SESSION['email']) && !isset($_SESSION['firstname'])){
 	header('location:s_login.php');

 }
 include "database/connection.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="description" content="farmers Assistance website">
    <meta name="keyword" content="farmers,suppliers,crops,">
    <!--bootstrap files-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/datatables.min.css">
    
    <!--fontawesome-->
    <!--<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />-->
    <link rel="stylesheet" type="text/css" href="css/all.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="iconfont/material-icons.css">
    <!-- faws css file -->
    <link rel="stylesheet" type="text/css" href="css/styledash.css">
    <title>Farmers Assistance Web services</title>
    <style type="text/css">
        .dropdown-menu {
            width: 100%;
            background: rgb(120, 120, 120);
        }

        .dropdown-menu a {
            color: white;
            text-align: center;
        }

        .dropdown-menu a:hover {
            width: 100%;
            background-color: rgb(0, 0, 0);
            color: rgb(255, 255, 200);
        }

    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <button class="navbar-toggler sideMenuToggler" type="button">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">Faws</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item" style="padding-right: 24px;">
                    <a class="nav-link" href="#"><i class="material-icons">notifications</i><span class="badge badge-light">9</span></a>
                </li>
                <li class="nav-item dropdown" style="padding-right: 60px;">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Profile
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Profile</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">update</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="logout.php">logout</a>
                    </div>
                </li>

            </ul>
        </div>
    </nav>
    <div class="wrapper d-flex">
        <div class="sideMenu">
            <div class="sidebar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="#" class="nav-link px-2">
                            <i class="material-icons icon">dashboard</i><span class="text">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="supplier_dashboard.php?sources=supplier_pro_view" class="nav-link px-2">
                            <i class="material-icons icon">business_center</i><span class="text">Market</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="supplier_dashboard.php?sources=supplier_advert" class="nav-link px-2">
                            <i class="material-icons icon">public</i><span class="text">Request</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link px-2">
                            <i class="material-icons icon">pages</i><span class="text">Post</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link px-2">
                            <i class="material-icons icon">chat_bubble</i><span class="text">chart</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link px-2">
                            <i class="material-icons icon">settings</i><span class="text">settings</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link sideMenuToggler px-2">
                            <i class="material-icons icon">view_list</i><span class="text">resize</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="content">
            <main>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4 my-3">
                            <div class="p-3 bg-success">
                                <h4 class="mb-2 text-light"><small>welcome</small> <?php  echo $_SESSION['firstname'];?></h4>
                            </div>
                        </div>
                        <div class="col-md-4 my-3">
                            <div class="p-3 bg-primary">
                                <h4 class="mb-2 text-light">Notification</h4>
                            </div>
                        </div>
                        <div class="col-md-4 my-3">
                            <div class="p-3 bg-light">
                                <h4 class="mb-2">complaint</h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <?php 
                        if(isset($_GET['sources'])){
                        	$source = $_GET['sources'];
                        }else{
                        	$source = '';
                        }

                        switch ($source) {
                        	case 'supplier_advert':
                        		include('supplier_adver.php');
                        		break;
                        	case 'supplier_pro_view':
                        		include('supplier_pro_rec.php');
                        		break;
                        	default:
                        		# code...
                        		break;
                        }
					 ?>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <!--jquery & bootstrap js files -->
    <script src="js/jquery-3.4.1.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script src="js/popper.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/jquery.slimscroll.min.js"></script>
    <script src="js/script.js" type="text/javascript"></script>
     <script src="js/datatables.min.js" type="text/javascript"></script>
  
<script>
$(document).ready( function () {
    $('#myTable').DataTable();
});

</script>

</body>

</html>

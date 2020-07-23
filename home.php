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
    <title>Farmers Assistance Web services</title>
    <style type="text/css" href="css/home.css"></style>
    <style type="text/css">
        body {
            margin: 0;
            font-family: Verdana, Georgia, serif;
            font-size: 14px;
        }

        .mynav {
            margin: 0 auto;
            padding: 0;
            background-image: url('images/bg1.jpg');
            background-size: cover;
            height: 500px;
            position: relative;
            background-color: rgba(0, 0, 0, 0.3) !important;

        }

        .navbar {
            /* background-color: transparent !important;*/

        }

        .navbar-brand {
            color: #000 !important;
            font-weight: 800 !important;
            font-size: 1.3em !important;
        }

        .navbar .navbar-nav {
            margin: 0 auto;

        }

        .navbar .nav-item {
            padding-left: 24px;
        }

        .navbar .nav-item a {
            color: #000 !important;
            font-weight: 800 !important;
            /*  font-size: 1.0em !important; */

        }

        .navbar .navbar-nav .nav-item.active .nav-link {
            background: #48D1CC !important;
            color: #fff !important;
        }

        .navbar .navbar-nav .nav-item .nav-link:hover {
            background: #228B22 !important;
            color: #fff !important;
        }

        .mynav h2 {
            margin-top: 2.5em;
            padding: 0;
            font-size: 2.0em;
            font-weight: 1000;
            color: #fff;
            text-transform: uppercase;
        }

        .mynav h4 {
            padding: 0;
            font-size: 1.2em;
            line-height: 1.5em;
            color: #fff;

        }

        .main {
            background-color: #fff;
            font-family: cursive;
        }

        .main .card .card-body .fas {
            font-size: 50px;
            color: #228B22;
        }

        .navbar .navbar-nav .social {
            margin: 0px 10px;
            width: 30px;
            height: 30px;
            background: #eee;
            border-radius: 50%;
            color: #fff;
            line-height: 30px;
            text-align: center !important;
            padding: 4px 10px;
            margin-top: 4px;

        }
        .navbar .navbar-nav .social a{
            justify-content: center;
            align-items: center;
        }

        .navbar .navbar-nav .social .fa {
            color: #fff;
        }

        .navbar .navbar-nav #facebook {
            background: #1E90FF;
        }

        .navbar .navbar-nav #twitter {
            background: #00acee;
        }

        .navbar .navbar-nav #youtube {
            background: #8B0000;
        }

        .navbar .navbar-nav #facebook:hover {
            color: #5252b8;
            background: #6A5ACD;
        }

        .navbar .navbar-nav #twitter:hover {
            color: #5252b8;
            background: #5252b8;
        }

        .navbar .navbar-nav #youtube:hover {
            color: #5252b8;
            background: #FF6347;
        }

        .btn {
            background: #228B22 !important;
        }

        #footer {
            background: #000;
            height: 200px;
            border-radius: 5px;
            color: #efe5d0;
            padding: 15px;
            font-size: 90%;
        }

        #footer #contact {
            list-style-type: none;

        }

        #footer #navfoot {
            list-style-type: none;
            margin: 10px;
            padding: 5px;
            border-radius: 5px;
        }
        #footer #navfoot li{
            display: inline;
        }

        #footer #navfoot li a {
            color: #fff !important;
            padding: .2em 1em;
        }

        #footer #navfoot li a:hover {
            color: #fff !important;
            background-color: #228B22 !important;
        }

        .navbar-brand img {
            max-height: 150%;
            max-width: 150%;
        }
        #hori{
            width: 70px;
            height: 2px;
            background:#228B22; 
            position: relative;
            top: -10px;
            left: 10px;
            border-radius: 6px;
        }

    </style>

</head>

<body>
    <header>
        <div class="mynav">
            <nav class="navbar navbar-expand-lg bg-light">
                <div class="container">
                    <a class="navbar-brand" href="#"><img src="images/zyon.jpg"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="navbar-toggler-icon"></span>
                        <span class="navbar-toggler-icon"></span>
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#login">login</a>
                            </li>
                            <li class="nav-item social" id="facebook">
                                <a href="#"><i class="fa fa-facebook"></i></a </li> <li class="nav-item social" id="twitter">
                                <a href="#"><i class="fa fa-twitter"></i></a </li> <li class="nav-item social" id="youtube">
                                <a href="#"><i class="fa fa-youtube"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2>Stay Connected with faws</h2>
                        <h4>Farmers Assistance Web services</h4>

                    </div>

                    <div class="col-md-6">
                        <div class="card" style="width: 20rem; border:2px solid #228B22;">
                            <div class="card-header card-header-info" style="background:#228B22 !important;">
                                <h4 class="card-title text-center">Let hear from you!!</h4>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Message</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-info" name="submit" class="form-control" style="width: 100%;" value="Register">Submit</button>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </header>
    <section class="main">
        <div class="container">
            <div class="row">
                <div class="col-md-6" style="margin-top: 2.5em;">
                    <h4>What is Faws?</h4>
                    <div id="hori"></div>
                    <p> A Web project to help farmers ensure greater profitability through direct farmer to supplier and farmer to farmer communication.
                        This service boosts business communication and brings transparency in the system.
                        This innovative site allows for good farmer, retailer and supplier communication...</p>
                    <button type="submit" class="btn btn-info" name="submit" class="form-control">Read more</button>
                </div>
                <div class="col-md-3" id="login">
                    <div class="card" style=" border:1px solid #228B22;">
                        <div class="card-body">
                            <i class="fas fa-seedling"></i>
                            <h4>Farmers module</h4>
                             <div id="hori"></div>
                            <p>this module gives farmers chance to sell their produce
                                and also get connected to suppliers.
                            </p>
                            <a href="signup.php"><button type="submit" class="btn btn-info" name="submit" class="form-control">login</button></a>
                        </div>

                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card" style=" border:1px solid #228B22;">
                        <div class="card-body">
                            <i class="fas fa-business-time"></i>
                            <h4>Suppliers Module</h4>
                            <div id="hori"></div>
                            <p>this module gives suppliers chance to advertise their product
                                and also get connected to farmers.
                            </p>
                            <a href="supplier_register.php"><button type="submit" class="btn btn-info" name="submit" class="form-control">login</button></a>
                        </div>

                    </div>
                </div>


            </div>
        </div>
        
    </section>
    <div class="show" style="width:100%;height:10px;background:#228B22;border-radius:6px;">
    </div>
    <div id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h4>Contact Details</h4>
                    <ul id="contact">
                        <li><i class="fas fa-phone"></i> +23324133114</li>
                        <li><i class="fas fa-envelope"></i> passumtornado10@gmail.com</li>
                        <li><i class="fas fa-home"></i> kumasi-Ahwiaa</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul id="navfoot">
                        <li><a href="#">About Zyon</a></li>
                        <li><a href="#">Career</a></li>
                        <li><a href="#">Help?</a></li>
                        <li><a href="#">Tips</a></li>
                    </ul>
                    &copy;2019 zyonTechnologies.com All Rights Reserved.
                </div>
            </div>
        </div>
    </div>
    <!--  <footer class="jumbotron bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h4 style="color:#ccc;">Contact Details</h4>

                </div>
                <div class="col-md-6 navfoot">
                    <ul>
                        <li><a href="#">About Zyon</a></li>
                        <li><a href="#">Career</a></li>
                        <li><a href="#">Help</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                    &copy;2019 zyonTechnologies.com All Rights Reserved.
                </div>
            </div>
        </div>

    </footer> -->




    <!-- <script type="text/javascript" src="js/bootstrap.min.js"></script> -->
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

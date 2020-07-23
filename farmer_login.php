<div class="card card-nav-tabs text-center">
    <div class="card-header card-header-image">
        <a href="#pablo">
            <img class="img" src="images/farmer1.jpg">
            <div class="card-title">
                login in as a farmer to promote your produce.
            </div>
        </a>
    </div>
    <div class="card-body">
        <h4 class="card-title">Note!! this login model is for farmers only</h4>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="f_login.php"><button class="btn btn-success btn-round">
                Login<i class="material-icons">assignment</i>
            </button></a>
        <!-- modal -->
        <div class="modal fade" id="loginModal" tabindex="-1" role="">
            <div class="modal-dialog modal-login" role="document">
                <div class="modal-content">
                    <div class="card card-signup card-plain">
                        <div class="modal-header">
                            <div class="card-header card-header-success text-center">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    <i class="material-icons">clear</i>
                                </button>

                                <h4 class="card-title">Log in</h4>
                                <div class="social-line">
                                    <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                                        <i class="fa fa-facebook-square"></i>
                                    </a>
                                    <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                                        <i class="fa fa-twitter"></i>
                                        <div class="ripple-container"></div>
                                    </a>
                                    <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="modal-body">
                            <?php 
                  $error = array();
                  require('database/connection.php');
                    if(isset($_POST['submit_farmer'])){
                      
                      $login = $_POST['login'];
                      $password = $_POST['password'];

                     
                      $login = mysqli_real_escape_string($conn,$login);
                      $password=mysqli_real_escape_string($conn,$password);
                      if(empty($login)){
                        $erro[]="enter username or email";
                      }
                      if(empty($password)){
                        $erro[]="enter password";
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
                          // header('location:supplier_thank_you.php');
                          
                          $_SESSION['farmerID'] = $username;
                           $_SESSION['success']= "Welcome Admin";
                           header('location:farmer_dashboard.php');
                            exit();

                        }else{
                          //header('location:index.php');
                          echo "<script> alert('Wrong Username or password')</script>";
                        }

                        }else{
                          echo "<script> alert('Wrong Username or password')</script>".mysqli_errno();
                          //header('location:index.php?#login');
                        }
                        

                       
                        
                      }else{
                        echo "all field is required";
                      }

                      }
                          
                  ?>
                            <form class="form" method="post" action="farmer_login.php" name="farmer_login">
                                <p class="description text-center">farmer login forms</p>
                                <div class="card-body">
                                    <div class="form-group bmd-form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="material-icons">email</i></div>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Email/username..." required name="login" id="login">
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
                                    <button type="submit" class="btn btn-success" name="submit_farmer" class="form-control" id="submit_farmer">Submit</button>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer justify-content-center">
                            <a href="farmer_register_page.php" class="btn btn-primary btn-link btn-wd btn-lg">REGISTER</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End of Modal -->
        <!--<script>
    $(document).ready(function(){
       $('#submit_farmer').click(function(){
        var farmer = $('#login').val();
        var password = $('#password').val();
        if(password !='' && login !=''){
          $.ajax({
            url:'action.php',
            method:'post',
            data:{login:login,password:password},
            success:function(data){
              if (data == 'No') {
                alert('wrong username or password');
              }else{
                $('#loginModal').hide();
                 location.reloaded();
              }
            }
          });
        }else{
          alert('Both field are required');
        }
       })
    });
</script> -->
    </div>
    <div class="card-footer text-center">
        new users??<span>..please</span><a href="farmer_register_page.php"><b>..Register</b></a>
    </div>
</div>

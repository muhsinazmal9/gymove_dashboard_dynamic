<?php session_start();?>


<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Gymove - Fitness Bootstrap Admin Dashboard</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <link href="./css/style.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
					
					<div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
									<div class="text-center mb-3">
										<a href="#"><img src="images/logo-full.png" alt=""></a>
									</div>
                                    <h4 class="text-center mb-4 text-white">Sign up your account</h4>
                                    <!-- from starts here -->
                                    <form action="register_post.php" method="post">

                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Username</strong></label>
                                            <input type="text" class="form-control" placeholder="username" name="user_name"
                                            value="<?php
                                            // old data store
                                            if (isset($_SESSION['old_user_name'])) {
                                                echo $_SESSION['old_user_name'];
                                            }?>">
                                        </div>
                                        <!-- validation -->
                                        <?php if(isset($_SESSION['username_error'])) :?>
                                        <p class="text-danger">
                                            <?=$_SESSION['username_error'];?> <!-- echo -->
                                        </p>
                                        <?php endif;?>
                                        <!-- ========== -->
                                        
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Email</strong></label>
                                            <input type="email" class="form-control" placeholder="hello@example.com" name="user_email" 
                                            value="<?php
                                            // old data store
                                            if (isset($_SESSION['old_email'])) {
                                                echo $_SESSION['old_email'];
                                            }?>">
                                        </div>
                                        <!-- validation -->
                                        <?php if(isset($_SESSION['email_error'])) :?>
                                        <p class="text-danger">
                                            <?=$_SESSION['email_error'];?> <!-- echo -->
                                        </p>
                                        <?php endif;?>
                                        <!-- ========== -->

                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Password</strong></label>
                                            <input type="password" class="form-control" placeholder="Password" name="user_pass" 
                                            value="<?php
                                            // old data store
                                            if (isset($_SESSION['old_pass'])) {
                                                echo $_SESSION['old_pass'];
                                            }?>">
                                        </div>
                                        <!-- validation -->
                                        <?php if(isset($_SESSION['password_error'])) :?>
                                        <p class="text-danger">
                                            <?=$_SESSION['password_error'];?> <!-- echo -->
                                        </p>
                                        <?php endif;?>
                                        <!-- ========== -->
                                        <div class="text-center mt-4">
                                            <button type="submit" class="btn bg-white text-primary btn-block">Sign me up</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p class="text-white">Already have an account? <a class="text-white" href="page-login.php">Sign in</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!--**********************************
	Scripts
***********************************-->
<!-- Required vendors -->
<script src="./vendor/global/global.min.js"></script>
<script src="./vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="./js/custom.min.js"></script>
<script src="./js/deznav-init.js"></script>

</body>
</html>


<?php session_unset(); ?>
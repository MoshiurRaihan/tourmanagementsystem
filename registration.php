<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sign Up Page</title>

        <!-- Bootstrap v3.3.7 -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- google font-->
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700" rel="stylesheet">

        <!--    theme styling-->
        <link href="css/style.css" rel="stylesheet">


        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <!-- main content start-->
        <main class="login">
            <div class="container">
                <div class="alert_box">
                    <div class="hidden alert alert-danger alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>Error!</strong> Your user name or password is not correct.
                    </div>
                </div>
                <!-- Login form start -->
                <form action="application/index.php" class="login_form registrationform">
                    <h2>Please Sign Up</h2>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="firstName">Name</label>
                                <input type="text" name="firstName" id="firstName" class="form-control" placeholder="First Name">
                            </div>
                            <div class="col-lg-6">
                                <label for="lasttName">&nbsp;</label>
                                <input type="text" name="lastName" id="lasttName" class="form-control" placeholder="Last Nmae">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" class="form-control" placeholder="yourname@mail.com">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="********"/>
                    </div>
                    <div class="form-group">
                        <label for="conforimPassword">Confirm Password</label>
                        <input type="password" name="conforimPassword" id="conforimPassword" class="form-control" placeholder="********"/>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-3">
                                <label for="gender">Birthday</label>
                                <select class="form-control">
                                    <?php 
                                        for($i=1;$i<=31;$i++){
                                    ?>
                                    <option><?=$i;?></option>
                                    <?php
                                        }
                                        ?>
                                </select>
                            </div>
                            <div class="col-lg-5">
                                <label for="gender">&nbsp;</label>
                                <select class="form-control">
                                    <option>January</option>
                                    <option>February</option>
                                    <option>March</option>
                                    <option>April</option>
                                    <option>May</option>
                                    <option>June</option>
                                    <option>July</option>
                                    <option>August</option>
                                    <option>September</option>
                                    <option>October</option>
                                    <option>November</option>
                                    <option>December</option>
                                </select>
                            </div>
                            <div class="col-lg-4">
                                <label for="gender">&nbsp;</label>
                                <select class="form-control">
                                    <?php 
                                        for($i=1900;$i<2016;$i++){
                                    ?>
                                    <option><?=$i;?></option>
                                    <?php
                                        }
                                        ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="gender">Gender</label>
                        <select class="form-control">
                            <option>Male</option>
                            <option>Female</option>
                            <option>Others</option>
                        </select>
                    </div>
                    <button class="btn  btn-primary" type="submit">Sign up</button>
                </form><!-- End login form -->
                <div class="registration">
                    <a href="index.php">Already have account? Sign in</a>
                </div>
            </div>
        </main><!-- End main content --> 

        <!-- jQuery v1.12.4 -->
        <script src="js/jquery.min.js"></script>

        <!-- Bootstrap v3.3.7 -->
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>



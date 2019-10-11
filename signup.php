<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>


    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/css/mdb.min.css" rel="stylesheet">

</head>

<body>


    <!-- Default form register -->
    <div class="container" style="padding:70px">

        <form method="POST" class="text-center border border-light p-5" action="#!" enctype="multipart/form-data">
            <section class="signup">

                <p class="h4 mb-4">Sign up</p>

                <div class="form-row mb-4">
                    <div class="col">
                        <!-- First name -->
                        <input type="text" id="defaultRegisterFormFirstName" class="form-control" placeholder="Username" name="username" required>
                    </div>

                </div>

                <!-- E-mail -->
                <input type="email" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="E-mail" name="email" required>

                <!-- Password -->
                <input type="password" id="defaultRegisterFormPassword" class="form-control" placeholder="Password" name="password" aria-describedby="defaultRegisterFormPasswordHelpBlock" required minlength="6" aria-describedby="passwordHint" autocomplete="current-password" />
                <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
                    At least 6 characters
                </small>

                <!-- Phone number -->


                <!-- Newsletter -->
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="defaultRegisterFormNewsletter">
                    <label class="custom-control-label" for="defaultRegisterFormNewsletter">Subscribe to our newsletter</label>
                </div>

                <!-- Sign up button -->
                <button class="btn btn-info my-4 btn-block" name="reg_btn" type="submit">Register</button>

                <!-- Register -->
                <p>Already a member?<P>
                        <a href="signin.php">Sign In</a>
                    </p>

                    <?php require 'db.php';

                            if (isset($_REQUEST) && !empty($_POST)) {
                                $username = $_POST['username'];
                                $email = $_POST['email'];
                                $password = md5($_POST['password']);


                                $username = mysqli_real_escape_string($con, $username);
                                $email = mysqli_real_escape_string($con, $email);
                                $password = mysqli_real_escape_string($con, $password);

                                $sql = "INSERT INTO users (USERNAME, EMAIL, PWD) VALUES ('$username', '$email', '$password')";

                                if (mysqli_query($con, $sql)) {
                                    $msg = "you have succesfully registered... <a href = 'signin.php'>LOGIN</a> now..";

                                    // header('location:signin.php');

                                    echo "<div class = 'echo'>";

                                    echo $msg;

                                    echo "</div>";
                                } else {
                                    echo "error";
                                }
                            }
        ?>

                    <!-- Social register -->
                    <p>or sign up with:</p>

                    <a type="button" class="light-blue-text mx-2">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a type="button" class="light-blue-text mx-2">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a type="button" class="light-blue-text mx-2">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a type="button" class="light-blue-text mx-2">
                        <i class="fab fa-github"></i>
                    </a>

                    <hr>

                    <!-- Terms of service -->
                    <p>By clicking
                        <em>Sign up</em> you agree to our
                        <a href="signin.php" target="_blank">terms of service</a>

        </form>

    </div>
    <!-- Default form register -->


  

<?php
    require 'footer2.php'
    ?>


<style>
    .echo{
      font-size: 50px;
      
      
    }

  </style>

    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/js/mdb.min.js"></script>
</body>

</html>
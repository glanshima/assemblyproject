<?php
include("path.php");
include(ROOT_PATH . "/app/controllers/users.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Font Awesome-->
    <link rel="stylesheet" href="assets/Font/Fontawesome/css/all.min.css">


    <!-- Google Fonts -->
    <link href="assets/Font/Google font/candal-v9-latin-regular.woff">
    <link href="assets/Font/Google font/lora-v14-cyrillic_latin-regular.woff2">

    <!-- Custom Styling -->
    <link rel="stylesheet" href="assets/css/style.css">

    <title>Login</title>
</head>

<body>
<!-- include header -->
<?php include(ROOT_PATH . "/app/includes/header.php"); ?>


    <div class="auth-content">

        <form action="login.php" method="post">
            <h1 class="form-title">Login</h1>

            <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>

            <div>
                <label>Username</label>
                <input type="text" name="username" value="<?php echo $username ;?>" class="text-input">
            </div>


            <div>
                <label>Password</label>
                <input type="password" name="password" value="<?php echo $password ;?>" class="text-input">
            </div>

            <div>
                <button type="login" name="login-btn" class="btn btn-big">Login</button>
            </div>
            <p> Or
                <a href="<?php echo BASE_URL . '/register.php' ?>">Sign Up</a>
            </p>

        </form>

    </div>


    <!-- JQuery-->
    <script src="assets/js/jquery-3.4.1.min.js"></script>



    <!-- Custom Script-->
    <script src="assets/js/scripts.js"></script>


</body>

</html>

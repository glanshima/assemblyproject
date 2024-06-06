<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . '/app/controllers/users.php');
adminOnly();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Font Awesome-->
    <link rel="stylesheet" href="../../assets/Font/Fontawesome/css/all.min.css">


    <!-- Google Fonts -->
    <link href="../../assets/Font/Google font/candal-v9-latin-regular.woff">
    <link href="../../assets/Font/Google font/lora-v14-cyrillic_latin-regular.woff2">

    <!-- Custom Styling -->
    <link rel="stylesheet" href="../../assets/css/style.css">

    <!-- Admin Styling -->
    <link rel="stylesheet" href="../../assets/css/admin.css">

    <title>Admin Section - Add Users</title>
</head>

<body>
    <?php include(ROOT_PATH . "/app/includes/adminHeader.php"); ?>

    <!-- Admin Page  Wrapper-->

    <div class="admin-wrapper">

        <!-- Left Sidebar-->
        <?php include(ROOT_PATH . "/app/includes/adminSidebar.php"); ?>
        <!-- // Left Sidebar -->

        <!-- Admin Content-->
        <div class="admin-content">
            <div class="button-group">
                <a href="create.php" class="btn btn-big">Add User</a>
                <a href="index.php" class="btn btn-big">Manage Users</a>

            </div>
            <div class="content">
                <h2 class="page-title">Add User</h2>
                <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>
                <form action="create.php" method="post">
                    <div>
                        <label>Username</label>
                        <input type="text" name="username" value="<?php echo $username; ?>" class="text-input">
                    </div>
                    <div>
                        <label>Email</label>
                        <input type="email" name="email" value="<?php echo $email; ?>" class="text-input">
                    </div>

                    <div>
                        <label>Password</label>
                        <input type="password" name="password" value="<?php echo $password; ?>" class="text-input">
                    </div>

                    <div>
                        <label>Password Confirmation</label>
                        <input type="password" name="passwordconf" value="<?php echo $passwordconf; ?>"class="text-input">
                    </div>
                    <div>
                        <?php if (isset($admin) && $admin == 1) : ?>
                          <label>
                            <input type="checkbox" name="admin" checked>Admin
                          </label>
                        <?php else : ?>
                          <label>
                            <input type="checkbox" name="admin">Admin
                          </label>
                        <?php endif; ?>
                      </div>

                    <div>
                        <button type="submit" name="create-admin" class="btn btn-big">Add User</button>

                    </div>

                </form>


            </div>

        </div>
        <!-- // Admin Content-->

    </div>



    <!--// Admin Page Wrapper-->


    <!-- JQuery-->
    <script src="../../assets/js/jquery-3.4.1.min.js"></script>


    <!-- CKeditor-->

    <script src="../../assets/ckeditor5-build-classic/ckeditor.js"></script>

    <!-- // CKeditor-->


    <!-- Custom Script-->
    <script src="../../assets/js/scripts.js"></script>


</body>

</html>
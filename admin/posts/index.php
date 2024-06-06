<?php include "../../path.php";?>
<?php include ROOT_PATH . "/app/controllers/posts.php";
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

    <title>Admin Section - Manage Posts</title>
</head>

<body>
    <?php include ROOT_PATH . "/app/includes/adminHeader.php";?>

    <!-- Admin Page  Wrapper-->

    <div class="admin-wrapper">

        <!-- Left Sidebar-->
        <?php include ROOT_PATH . "/app/includes/adminSidebar.php";?>
        <!-- // Left Sidebar -->

        <!-- Admin Content-->

        <div class="admin-content">
            <div class="button-group">
                <a href="create.php" class="btn btn-big">Add Post</a>
                <a href="index.php" class="btn btn-big">Manage Posts</a>

            </div>
            <div class="content">
                <h2 class="page-title">Manage Posts</h2>
                <?php include ROOT_PATH . "/app/includes/messages.php";?>
                <table>
                    <thead>
                        <th>SN</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th colspan="3">Action</th>
                    </thead>
                    <tbody>
                        <?php foreach ($posts as $key => $post): ?>
                        <tr>
                            <td><?php echo $key + 1; ?></td>
                            <td><?php echo $post['title']; ?></td>
                            <td>Glanshima</td>
                            <td><a href="edit.php?id=<?php echo $post['id']; ?>" class="edit">Edit</a></td>
                            <td>
                                <a href="edit.php?delete_id=<?php echo $post['id']; ?>" class="delete">Delete</a>
                            </td>
                            <?php if ($post['published']): ?>
                            <td><a href="edit.php?published=0&p_id=<?php echo $post['id']; ?>"
                                    class="unpublish">Unpublish</a></td>
                            <?php else: ?>
                            <td><a href="edit.php?published=1&p_id=<?php echo $post['id']; ?>"
                                    class="publish">Publish</a></td>
                            <?php endif;?>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
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
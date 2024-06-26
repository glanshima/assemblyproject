<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/posts.php");
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

    <title>Admin Section - Edit Posts</title>
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
                <a href="create.php" class="btn btn-big">Add Post</a>
                <a href="index.php" class="btn btn-big">Manage Posts</a>

            </div>
            <div class="content">
                <h2 class="page-title">Edit Post</h2>
                    <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>
                <form action="edit.php" method="post" enctype="multipart/form-data">
                  <input type="hidden" name="id" value="<?php echo $id; ?>">
                  <div>
                      <label>Title</label>
                      <input type="text" name="title" value="<?php echo $title; ?>" class="text-input">

                  </div>
                  <div>
                      <label>Body</label>
                      <textarea name="body" id="body"><?php echo $body; ?></textarea>

                  </div>
                  <div>
                      <label>Image</label>
                      <input type="file" name="image" class="text-input">

                  </div>
                  <div>
                      <label>Topic</label>
                      <select name="topic_id" class="text-input">
                          <option value=""></option>
                            <?php foreach ($topics as $key => $topic) : ?>
                                <?php if (!empty($topic_id) && $topic_id == $topic['id']) : ?>
                                <option selected value="<?php echo $topic['id']; ?>">
                                    <?php echo $topic['name']; ?></option>
                                <?php else : ?>
                                <option value="<?php echo $topic['id']; ?>"><?php echo $topic['name']; ?></option>
                                <?php endif; ?>
                            <?php endforeach; ?>
                      </select>

                  </div>
                  <div>
                        <?php if (empty($published) && $published == 0) : ?>
                      <label>
                        <input type="checkbox" name="published">Publish
                      </label>
                        <?php else : ?>
                      <label>
                        <input type="checkbox" name="published" checked>Publish
                      </label>
                        <?php endif; ?>
                  </div>
                    <div>
                        <button type="submit" name="update-post" class="btn btn-big">Update Post</button>

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

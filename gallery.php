<?php include("path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/posts.php");
if (isset($_GET['id'])) {
    $posts = selectOne('posts', ['id' => $_GET['id']]);
}

$topics = selectAll('topics');
$posts = selectAll('posts', ['published' => 1]);

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
    <link rel="stylesheet" href="ckstyle.css">

    
</head>

<body>

    <!-- Facebook Page-->

    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous"
    src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v4.0"></script>

    <!-- // Facebook Page-->

   <!-- include header -->
    <?php include(ROOT_PATH . "/app/includes/header.php"); ?>

    <!--Page  Wrapper-->
    <div class="page-wrapper">


        <!-- Content -->

        <div class="content clearfix">

              <!-- Main Content Wrapper -->

              <div class="main-content-wrapper">
                
              <!--  <div class="main-content single">
                    <h1 class="post-title"> <?php echo $post['title']; ?></h1>
                      <div class="post-content">
                      <img src="<?php echo BASE_URL . '/assets/images/' . $post['image']; ?>
                      "width="100%" height="30%" alt="" >
                            <?php echo html_entity_decode($post['body']); ?>
                      </div>


                </div>-->


            <!-- // Main Content -->

            <!-- Side Bar -->

            <div class="sidebar single">

                <!-- Facebook Page -->

                <div class="fb-page" data-href="https://www.facebook.com/Flipkoncepts/" data-tabs="" data-width=""
                data-height="" data-small-header="false" data-adapt-container-width="true"
                data-hide-cover="false" data-show-facepile="true">
                    <blockquote cite="https://www.facebook.com/Flipkoncepts/" class="fb-xfbml-parse-ignore">
                      <a href="https://www.facebook.com/Flipkoncepts/">Flip Koncepts</a></blockquote>
                </div>

                <!-- // Facebook Page -->

                <div class="section popular">
                    <h2 class="post-title">Popular Post</h2>

                    <?php foreach ($posts as $p) : ?>
                      <div class="post clearfix">
                          <img src="<?php echo BASE_URL . '/assets/images/' . $p['image']; ?>" alt="">
                          <a href="single.php?id=<?php echo $p['id']; ?>" class="title">
                              <h4><?php echo substr($p['title'], 0, 50) . '...'; ?></h4>
                          </a>
                      </div>
                    <?php endforeach; ?>


                </div>

                <div class="section topic">
                    <h2 class="section-title">Topics</h2>
                    <ul>
                        <?php foreach ($topics as $key => $topic) : ?>
                          <li><a href="<?php echo BASE_URL . '/index.php?t_id=' . $topic['id'] . '&name=' . $topic['name']; ?>">
                            <?php echo $topic['name']; ?></a> </li>
                        <?php endforeach; ?>


                    </ul>
                </div>

            </div>

            <!--// Side Bar -->

        </div>

        <!-- // Content -->

    </div>

    <!--// Page Wrapper-->

    <!-- Foot Content-->

    <?php include(ROOT_PATH . "/app/includes/footer.php"); ?>



    <!-- // Footer -->

    <!-- JQuery-->
    <script src="assets/js/jquery-3.4.1.min.js"></script>

    <!-- Slick Carousel -->

    <script src="jquery/slick.min.js"></script>

    <!-- Custom Script-->
    <script src="assets/js/scripts.js"></script>


</body>

</html>

<?php include "path.php";?>

<?php include ROOT_PATH . "/app/controllers/aboutPost.php";
if (isset($_GET['id'])) {
    $post = selectOne('about', ['id' => $_GET['id']]);
}

$topics = selectAll('topics');
$posts = selectAll('posts', ['published' => 1]);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!--====== Required meta tags ======-->
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="description"
        content="History, Mission, Vision and Mandate of the Benue State House of Assembly Service Commission " />
    <meta name="keywords" content="Benue House of Assembly, State Assembly, Benue Legislature">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!--====== Title ======-->

    <title><?php echo "ABOUT"; ?> | Benue State Assembly Service Commission</title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="../assets/images/favicon.svg" type="image/svg" />

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />

    <!--====== Line Icons css ======-->
    <link rel="stylesheet" href="assets/css/lineicons.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--====== Tiny Slider css ======-->
    <link rel="stylesheet" href="assets/css/tiny-slider.css" />

    <!--====== gLightBox css ======-->
    <link rel="stylesheet" href="assets/css/glightbox.min.css" />

    <link rel="stylesheet" href="assets/css/stylemain.css" />
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <!-- Facebook Page-->
    <?php include ROOT_PATH . '/app/includes/fb_root.php'?>

    <!-- // Facebook Page-->

    <!-- include header -->
    <?php include ROOT_PATH . "/app/includes/header2.php";?>
    <!--====== SIDEBAR PART START ======-->
    <?php include ROOT_PATH . '/app/includes/sideBarOverlay.php'?>

    <!--====== SIDEBAR PART ENDS ======-->
    </main>
    <!--Page  Wrapper-->

    <main class="about page-wrapper">


        <!-- Content -->

        <div class="content about">

            <!-- Main Content Wrapper -->

            <div class="main-content-wrapper about">
                <div class="main-content single about">
                    <h1 class="about-title title-h1 main-section-title"> <?php echo "ABOUT BSHOASC"; ?></h1>
                    <div class="post-content">
                        <?php foreach ($post as $key => $post): ?>
                        <div class="postimg">
                            <img src="<?php echo BASE_URL . '/assets/images/' . $post['image']; ?>
                          " width="100%" height="30%" alt="">
                        </div>
                        <?php echo html_entity_decode($post['body']); ?>
                        <?php endforeach;?>
                    </div>


                </div>
            </div>

            <!-- // Main Content -->

            <!-- Side Bar -->

            <div class="sidebar single about">

                <!-- Facebook Page -->

                <div class="fb-page-section">
                    <?php include ROOT_PATH . '/app/includes/facebookpage.php'?>
                </div>

                <!-- // Facebook Page -->

                <div class="section popular">
                    <h2 class="post-title">Popular Post</h2>

                    <?php foreach ($posts as $p): ?>
                    <div class="post ">
                        <img src="<?php echo BASE_URL . '/assets/images/' . $p['image']; ?>" alt="">
                        <a href="singlepost.php?id=<?php echo $p['id']; ?>" class="title">
                            <h4><?php echo substr($p['title'], 0, 50) . '...'; ?></h4>
                        </a>
                    </div>
                    <?php endforeach;?>


                </div>

                <div class="section topic">
                    <h2 class="section-title">Topics</h2>
                    <ul>
                        <?php foreach ($topics as $key => $topic): ?>
                        <li><a
                                href="<?php echo BASE_URL . '/index.php?t_id=' . $topic['id'] . '&name=' . $topic['name']; ?>">
                                <?php echo $topic['name']; ?></a> </li>
                        <?php endforeach;?>


                    </ul>
                </div>

            </div>

            <!--// Side Bar -->

        </div>

        <!-- // Content -->

    </main>

    <!--// Page Wrapper-->

    <!-- Foot Content-->

    <?php include ROOT_PATH . "/app/includes/footer.php";?>



    <!-- // Footer -->
    <a href="#" class="scroll-top btn-hover">
        <i class="fa-solid fa-chevron-up"></i>
    </a>
    <!-- JQuery-->
    <script src="assets/js/jquery-3.4.1.min.js"></script>

    <!-- Slick Carousel -->

    <script src="jquery/slick.min.js"></script>

    <!-- Custom Script-->

    <script script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12">
    </script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/glightbox.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/tiny-slider.js"></script>
    <script src="assets/js/consolidatedscript.js"></script>
</body>

</html>
<?php include "path.php";?>
<?php include ROOT_PATH . "/app/controllers/posts.php";

if (isset($_GET['id'])) {
    $post = selectOne('posts', ['id' => $_GET['id']]);
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
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!--====== Title ======-->

    <title><?php echo "News"; ?> | BSHOASC</title>
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="assets/images/header/coatofarms.svg" type="image/svg" />

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

    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v4.0">
    </script>

    <!-- // Facebook Page-->

    <!-- include header -->
    <?php include ROOT_PATH . "/app/includes/header2.php";?>
    <!--====== SIDEBAR PART START ======-->
    <div class="sidebar-left">
        <div class="sidebar-close">
            <a class="close" href="#close"><i class="fa-solid fa-xmark"></i></a>
        </div>
        <div class="sidebar-content">
            <div class="sidebar-logo">
                <a href="<?php echo BASE_URL . '/index.php'; ?>">
                    <img src="assets/images/header/coatofarms.svg" alt="Logo" />
                </a>
            </div>
            <?php if (isset($_SESSION['id'])): ?>
            <div class="dashboard-links">

                <ul class="links-to-dashboard">
                    <li>

                        <i class="fa fa-user"></i>

                    </li>&nbsp; &#124; &nbsp;
                    <li>
                        <?php echo $_SESSION['username']; ?>
                    </li>
                </ul>

                <ul class="user-links">
                    <?php if ($_SESSION['admin']): ?>
                    <li><a href="<?php echo BASE_URL . '/admin/dashboard.php'; ?>">Dashboard</a></li>
                    <?php endif;?>
                    <li class="logout-li"><a href="<?php echo BASE_URL . '/logout.php'; ?>" class="logout">Logout</a>
                    </li>
                </ul>
            </div>
            <?php else: ?>
            <li><a href="<?php echo BASE_URL . '/register.php'; ?>">Sign Up</a></li>
            <li><a href="<?php echo BASE_URL . '/login.php'; ?>">Login</a></li>
            <?php endif;?>

            <!-- logo -->
            <div class="sidebar-menu">
                <h5 class="menu-title">Quick Links</h5>
                <ul>
                    <li><a href="<?php echo BASE_URL . '/about.php'; ?>">About Us</a></li>
                    <li><a href="javascript:void(0)">Our Team</a></li>
                    <li><a href="javascript:void(0)">Latest News</a></li>
                    <li><a href="javascript:void(0)">Resources</a></li>
                </ul>
            </div>
            <!-- menu -->
            <div class="sidebar-social align-items-center justify-content-center">
                <h5 class="social-title">Follow Us On</h5>
                <ul>
                    <li>
                        <a href="javascript:void(0)"><i class="fa-brands fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><i class="fa-brands fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><i class="fa-brands fa-linkedin"></i></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><i class="fa-brands fa-youtube"></i></a>
                    </li>
                </ul>
            </div>
            <!-- sidebar social -->
        </div>
        <!-- content -->
    </div>
    <div class="overlay-left"></div>

    <!--====== SIDEBAR PART ENDS ======-->
    <!--Page  Wrapper-->
    <div class="page-wrapper single">


        <!-- Content -->

        <div class="content single">

            <!-- Main Content Wrapper -->

            <div class="main-content-wrapper single">
                <div class="main-content single">
                    <h1 class="post-title single title-h1"> <?php echo $post['title']; ?></h1>
                    <div class="post-content">
                        <div class="postimg">

                            <img src="<?php echo BASE_URL . '/assets/images/' . $post['image']; ?>
                          " width="100%" height="30%" alt="">
                        </div>
                        <?php echo html_entity_decode($post['body']); ?>
                    </div>


                </div>
            </div>

            <!-- // Main Content -->

            <!-- Side Bar -->

            <div class="sidebar single">

                <!-- Facebook Page -->

                <div class="fb-page" data-href="https://www.facebook.com/Flipkoncepts/" data-tabs="" data-width=""
                    data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false"
                    data-show-facepile="true">
                    <blockquote cite="https://www.facebook.com/Flipkoncepts/" class="fb-xfbml-parse-ignore">
                        <a href="https://www.facebook.com/Flipkoncepts/">Flip Koncepts</a>
                    </blockquote>
                </div>

                <!-- // Facebook Page -->

                <div class="section popular">
                    <h2 class="post-title">Popular Post</h2>

                    <?php foreach ($posts as $p): ?>
                    <div class="post clearfix">
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

    </div>

    <!--// Page Wrapper-->

    <!-- Foot Content-->

    <?php include ROOT_PATH . "/app/includes/footer.php";?>



    <!-- // Footer -->

    <!-- JQuery-->
    <script src="assets/js/jquery-3.4.1.min.js"></script>

    <!-- Slick Carousel -->

    <script src="jquery/slick.min.js"></script>

    <!-- Custom Script-->
    <script src="assets/js/scripts.js"></script>
    <script script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12">
    </script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/glightbox.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/tiny-slider.js"></script>
    <script src="assets/js/consolidatedscript.js"></script>

</body>

</html>
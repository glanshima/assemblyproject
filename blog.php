<?php
include "path.php";
include ROOT_PATH . "/app/controllers/topics.php";

$posts = array();
$postsTitle = "Recent Posts";

if (isset($_GET['t_id'])) {
    $posts = getPostsByTopicId($_GET['t_id']);
    $postsTitle = "You searched for posts under '" . $_GET['name'] . "'";
} elseif (isset($_POST['search-term'])) {
    $postsTitle = "You searched for '" . $_POST['search-term'] . "'";
    $posts = searchPosts($_POST['search-term']);
} else {
    $posts = getPublishedPosts();
}

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
    <link rel="stylesheet" href="assets/css/stle.css">
    <link rel="stylesheet" href="assets/css/blogStyle.css">
</head>


<body>

    <!--include header -->
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
    <!--Page  Wrapper-->&nbsp;
    <div class="page-wrapper">
        <?php include ROOT_PATH . "/app/includes/messages.php";?>
        <!--Carousel-->
        <div class="carousel">
            <h1 class="carousel-title"> Trending Posts</h1>
            <i class="fas fa-chevron-left prev carousel-nav-btn"></i>
            <i class="fas fa-chevron-right next carousel-nav-btn"></i>

            <div class="post-wrapper">
                <?php foreach ($posts as $post): ?>
                <div class="post">
                    <img src="<?php echo BASE_URL . '/assets/images/' . $post['image']; ?>" alt="" class="slide-image">
                    <div class="post-info">
                        <h4><a href="singlepost.php?id=<?php echo $post['id']; ?>">
                                <?php echo substr($post['title'], 0, 30) . '...'; ?></a></h4>
                        <i class="far fa-user"> <?php echo $post['username']; ?></i> &nbsp;
                        <i class="far fa-calendar"> <?php echo date('F j, Y', strtotime($post['created_at'])); ?></i>
                    </div>
                </div>
                <?php endforeach;?>
            </div>
        </div>

        <!-- // Carousel-->

        <!-- Content -->

        <div class="content">

            <!--Main content or Recent Post-->

            <div class="main-content">
                <h1 class="main-content-title"> <?php echo $postsTitle; ?></h1>

                <?php foreach ($posts as $post): ?>
                <div class="post">
                    <img src="<?php echo BASE_URL . '/assets/images/' . $post['image']; ?>" alt="" class="post-image">
                    <div class="post-preview">
                        <h2><a href="singlepost.php?id=<?php echo $post['id']; ?>">
                                <?php echo substr($post['title'], 0, 70); ?></a></h2>
                        <i class="far fa-user"> <?php echo $post['username']; ?></i> &nbsp;
                        <i class="far fa-calendar"> <?php echo date('F j, Y', strtotime($post['created_at'])); ?></i>
                        <p class="preview-text">
                            <?php echo html_entity_decode(substr($post['body'], 0, 200) . '...'); ?>
                        </p>
                        <a href="singlepost.php?id=<?php echo $post['id']; ?>" class="btn read-more"> Read More</a>
                    </div>
                </div>
                <?php endforeach;?>
            </div>

            <!-- // Recent Posts -->

            <div class="sidebar">
                <div class="section search">
                    <h2 class="section-title">Search</h2>
                    <form action="index.php" method="post">
                        <input type="text" name="search-term" class="text-input" placeholder="Search...">
                    </form>
                </div>

                <div class="section topic">
                    <h2 class="section-title">Topics</h2>
                    <ul>
                        <?php foreach ($topics as $key => $topic): ?>
                        <li><a
                                href="<?php echo BASE_URL . '/index.php?t_id=' . $topic['id'] . '&name=' . $topic['name'] ?>">
                                <?php echo $topic['name']; ?></a> </li>
                        <?php endforeach;?>
                    </ul>
                </div>


            </div>

        </div>

        <!-- // Content -->

    </div>

    <!--// Page Wrapper-->

    <!-- include Footer-->

    <?php include ROOT_PATH . "/app/includes/footer.php";?>



    <!-- // Footer -->







    <!-- JQuery-->
    <script src="assets/js/jquery-3.4.1.min.js"></script>

    <!-- Slick Carousel -->

    <script src="assets/js/slick.min.js"></script>

    <!-- Custom Script-->
    <!--
    <script src="assets/js/scripts.js"></script>
    <script src="assets/js/consolidatedscript.js"></script> -->

    <script script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12">
    </script>
    <script src="assets/js/blogSrcipt.js"></script>

    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/glightbox.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/tiny-slider.js"></script>
    <script src="assets/js/consolidatedscript.js"></script>

</body>

</html>
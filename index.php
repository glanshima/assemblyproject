<?php include "path.php";
include ROOT_PATH . "/app/controllers/topics.php";

$commissioners = array();
$commissionersTitle = "Commissioners";

if (isset($_GET['t_id'])) {
    $commissioners = getCommissionersByTopicId($_GET['t_id']);
    $commissionersTitle = "You displayed  posts under '" . $_GET['name'] . "'";
} elseif (isset($_POST['search-term'])) {
    $commissionersTitle = "You searched for '" . $_POST['search-term'] . "'";
    $commissioners = searchCommissioners($_POST['search-term']);

} else {
    $commissioners = getPublishedCommissioners();
}
$topics = selectAll('topics');
$commissioners = selectAll('commissioners', ['published' => 1]);

$posts = array();
/* $posts = "posts"; */
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
    <meta name="description"
        content="History, Mission, Vision and Mandate of the Benue State House of Assembly Service Commission " />
    <meta name="keywords" content="Benue House of Assembly, State Assembly, Benue Legislature">
    <!--====== Title ======-->

    <title><?php echo "Home"; ?> | Benue State Assembly Commission</title>
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

<body style="background-color: #fff;">

    <!--include header -->
    <?php include ROOT_PATH . "/app/includes/header.php";?>



    <!-- Start header Area -->
    <section id="hero-area" class="header-area header-eight">
        <div class="container hero-container">
            <div id="hero-inner-content" class="row align-items-center hero-inner-content">
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="header-content">
                        <h1 class="site-title-h1"><span id="auto-header"></span>of Assembly Service
                            Commission.</h1>
                        <p>
                            The Benue State House of Assembly Service Commission is an organ of the State Legislature.
                            It has the mandate of Appointment, Promotion and Discipline of staff of the State Assembly
                            Service and establishing working conditions and a service scheme for the staff.
                        </p>
                        <div class="button">
                            <a href="<?php echo BASE_URL . '/about.php'; ?>" class="btn primary-btn">More About Us</a>
                            <a href="https://www.youtube.com/watch?v=r44RKWyfcFw&fbclid=IwAR21beSJORalzmzokxDRcGfkZA1AtRTE__l5N4r09HcGS5Y6vOluyouM9EM"
                                class="glightbox video-button">

                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="header-image">
                        <img src="<?php echo BASE_URL . '/assets/images/header/coatofarms.svg'; ?>" alt="#" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End header Area -->
    <!--====== SIDEBAR PART START ======-->
    <?php include ROOT_PATH . '/app/includes/sideBarOverlay.php'?>

    <!--====== SIDEBAR PART ENDS ======-->

    <!--Page  Wrapper-->&nbsp;
    <main class="page-wrapper main">
        <?php include ROOT_PATH . "/app/includes/messages.php";?>


        <!-- Content -->
        <section id="commissioners" class="commissioners">

            <div class="content ">



                <!--Main content or Recent Post-->

                <div class="main-content">
                    <h2 class="main-content-title  title-h1"> <?php echo $commissionersTitle; ?></h2>
                    <div class="main-content_posts grid-container">

                        <?php foreach ($commissioners as $commissioner): ?>
                        <div class="post-wrap">

                            <div class="post member-of-team">

                                <div class="post-img tm-img">
                                    <a href="single.php?id=<?php echo $commissioner['id']; ?>">

                                        <img src="<?php echo BASE_URL . '/assets/images/' . $commissioner['image']; ?>"
                                            alt="" class="post-image">
                                    </a>
                                </div>
                                <div class="post-preview commissioners-profile">
                                    <h2 class="tm-name"><a href="single.php?id=<?php echo $commissioner['id']; ?>">
                                            <?php echo substr($commissioner['title'], 0, 70); ?></a></h2>
                                    <div class="commissioner-info-card">
                                        <div class="tm-name-tag">
                                            <p class="commissioner-rank-text tm-role ">
                                                <?php echo $commissioner['rank']; ?>
                                            </p>
                                            <i class="far fa-calendar"><span class="dateAppointed">
                                                    <?php echo $commissioner['appointed']; ?></i>
                                            </span>

                                            <!--  <p class="preview-text">
                                                <?php echo html_entity_decode(substr($commissioner['body'], 0, 0) . '...'); ?>
                                                </p> -->
                                        </div>
                                        <a href="single.php?id=<?php echo $commissioner['id']; ?>"
                                            class="btn read-more">
                                            View
                                            Profile</a>
                                    </div>
                                    <!-- Social Media Tags -->
                                    <?php include ROOT_PATH . '/app/includes/socialMediaTags.php'?>

                                    <!-- Social Media Tags End -->
                                </div>

                            </div>
                        </div>
                        <?php endforeach;?>
                    </div>
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
                    <div class="section sidebar-posts">
                        <h2 class="section-title">News</h2>
                        <div class="sidebar_posts ">
                            <ul class="post_list">
                                <ul class="headline">
                                    <?php foreach ($posts as $post): ?>
                                    <li class="news-">
                                        <div class="post">

                                            <div class="post-info">
                                                <p><a href="singlepost.php?id=<?php echo $post['id']; ?>">
                                                        <?php echo substr($post['title'], 0, 67) . '...'; ?></a></p>

                                                <i class="far fa-calendar">
                                                    <?php echo date('F j, Y', strtotime($post['created_at'])); ?></i>
                                            </div>
                                        </div>
                                    </li>
                                    <?php endforeach;?>

                                </ul>
                            </ul>

                        </div>
                    </div>

                    <div class="youtube-channel-wrapper">
                        <!--  <h3 class="youtube-title main-section-title">Watch us on youtube</h3> -->
                        <iframe src="https://www.youtube.com/embed/5bZ7R4U-o?si=" title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                    </div>
                </div>

            </div>
        </section>
        <sections id="events" class="events">
            <!--Carousel-->

            <div class="carousel">
                <h2 class="carousel-title main-section-title">Events</h2>
                <div class="prev-icon"></div>
                <i class="fas fa-chevron-left prev carousel-btn"></i>
                <div class="next-icon"></div>
                <i class="fas fa-chevron-right next carousel-btn"></i>
                <div class="post-wrapper carousel-wrap">

                    <?php
/*  dynamically set image format */
$imageFormat = "";
if ($imageFormat === 'png') {
    $fileExtension = '.png';
} elseif ($imageFormat === 'jpg') {
    $fileExtension = '.jpg';
} else {
    // Default to PNG if the format is unknown
    $fileExtension = '.png';
}

// Use the $fileExtension variable when saving or displaying the image
//echo "Image extension: $fileExtension"; // Example usage

$imageFolder = 'eventsImgs/';
$images = glob($imageFolder . '*' . $imageFormat); // Adjust file extension as needed

foreach ($images as $index => $image) {
    $activeClass = $index === 0 ? 'activeSlide' : '';
    echo '<div class="post ' . $activeClass . '" >';
    echo '<img src="' . $image . '"  alt=" Image" class="slide-image">';
    echo '</div>';
}
?>

                </div>
            </div>

            <!-- // Carousel-->

        </sections>
        <!-- // Content -->

    </main>

    <!--// Page Wrapper-->

    <!-- include Footer-->

    <section id="contact">
        <?php include ROOT_PATH . "/app/includes/footer.php";?>

    </section>



    <!-- // Footer -->






    <!-- JQuery-->
    <script src="assets/js/jquery-3.4.1.min.js"></script>

    <!-- Slick Carousel -->

    <script src="assets/js/slick.min.js"></script>

    <!-- Custom Script-->
    <script src="assets/js/scripts.js"></script>
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>

    <a href="#" class="scroll-top btn-hover">
        <i class="fa-solid fa-chevron-up"></i>
    </a>

    <!--====== js ======-->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/glightbox.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/tiny-slider.js"></script>
    <script src="assets/js/consolidatedscript.js"></script>
    <script>
    /* auto-input */

    let typed = new Typed('#auto-header', {
        strings: ['Benue State House ^1000'],
        typeSpeed: 50,
        backSpeed: 25,
        loop: false,
        smartBackspace: true,
        showCursor: false
    });
    </script>
</body>

</html>
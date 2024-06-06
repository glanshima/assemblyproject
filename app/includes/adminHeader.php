<header>
        <a class="logo" href="<?php echo BASE_URL . '/index.php' ; ?>">
            <!-- <img src="images/Sidgaks logo single.png" alt="" class="logo-image"> -->

            <h1 class="logo-text"><span>SID</span>GAKS</h1>

        </a>
        <i class="fa fa-bars menu-toggle"></i>
        <ul class="nav">
          <li>
            <a href="<?php echo BASE_URL . '/index.php'; ?>">Home</li></a>

            <?php if (isset($_SESSION['username'])) : ?>
            <li>
                <a href="#">
                    <i class="fa fa-user"></i>
                    <?php echo $_SESSION['username']; ?>
                    <i class="fa fa-chevron-down chevron-down"></i>
                </a>
                <ul>
                    <li><a href="<?php echo BASE_URL . '/logout.php'; ?>" class="logout">Logout</a></li>
                </ul>
            </li>
            <?php endif; ?>
        </ul>
    </header>

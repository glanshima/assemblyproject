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
                  <li><a href="<?php echo BASE_URL . '/blog.php' ?>">Latest News</a></li>
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
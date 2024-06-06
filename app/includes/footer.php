<?php include ROOT_PATH . "/app/helpers/formProcess.php";?>
<footer class="footer">
    <section class="footer-content">

        <div class="footer-section about">
            <a href="<?php echo BASE_URL . '/index.php'; ?>">
                <p class="logo-text"><span class="logo-text-p1">BSH</span><span class="logo-text-p2">OASC</span></p>
            </a>
            <p>
                C/o Benue State House of Assembly, <br> P.M.B. 102073,<br> Assembly Complex, <br> Makurdi, <br>
                Benue State,<br> Nigeria.
            </p>
            <div class="contact">
                <span><i class="fas fa-phone"></i> &nbsp; +234-800-000-000</span>
                <span><i class="fas fa-envelope"></i> &nbsp; info@bshoasc.be.gov.ng</span>
            </div>
            <div class="footer-socials">
                <a target="_blank"
                    href="https://web.facebook.com/p/Benue-State-Assembly-Service-Commission-100069112244069/"><i
                        class=" fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
        </div>

        <div class="footer-section links">
            <h2>Quick Links</h2>
            <br>
            <ul>
                <a href="<?php echo BASE_URL . '/index.php'; ?>">
                    <li>Home</li>
                </a>
                <a href="<?php echo BASE_URL . '/about.php'; ?>">
                    <li>About Us </li>
                </a>
                <a href="<?php echo BASE_URL . '/Blog.php'; ?>">
                    <li>Latest News</li>
                </a>
                <a href="<?php echo BASE_URL . '/gallery.php'; ?>">
                    <li>Gallery</li>
                </a>
                <!--  <a href="#">
                    <li>Terms and Conditions</li>
                </a> -->
                <a href="#">
                    <li>Jobs</li>
                </a>
            </ul>
        </div>
        <div class="footer-section map-wrapper">
            <p>Pay Us a visit today! You can also scan the QR code to get directions on your mobile phone
            </p>
            <br>
            <div class="map-tools">
                <div class="map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.481676427005!2d8.530835173739503!3d7.738622007853907!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1050815dbfd0f2a5%3A0xb24f86f6ed284444!2sBenue%20State%20House%20of%20Assembly%20Complex!5e0!3m2!1sen!2sng!4v1714666609885!5m2!1sen!2sng"
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="qr-code">
                    <img src="<?php echo BASE_URL . '/uploads/QR for Map.png' ?>" alt="" class="mapQRCode">
                </div>
            </div>

        </div>

    </section>

    <div class="footer-bottom">
        <p class="copyRight-text"></p>
    </div>

</footer>

<script>
const footerCopyRight = document.querySelector('.copyRight-text')
const getYear = new Date();
let year = getYear.getFullYear();
footerCopyRight.innerHTML = ` &copy; ${year} All Rights Reserved BSHOASC || SIDGAKS Tech`
</script>
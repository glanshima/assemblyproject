<div class="social-media-card socials">
    <?php
// Assume you have retrieved social media URLs from the database
$twitter = $commissioner["twitter"];
$instagram = $commissioner["instagram"];
$linkedin = $commissioner["linkedin"];
$facebook = $commissioner["facebook"];
$mail = $commissioner["mail"];

// Map URLs to icons
$twitterIcon = '<a target="_blank" href="' . $twitter . '" title="Twitter"><i class="fa-brands fa-x-twitter i-style-mine " style="--clr:#f1f1f1" id="tw-icon"></i></a>';

$instagramIcon = '<a target="_blank" href="' . $instagram . '" title="Instagram"><i class="fa-brands fa-instagram i-style-mine"style="--clr:#962fbf" id="insta-icon"></i></a>';

$linkedinIcon = '<a target="_blank" href="' . $linkedin . '" title="LinkedIn"><i class="fa-brands fa-linkedin i-style-mine " style="--clr:#0a66c2" id="insta-icon"></i></a>';

$facebookIcon = '<a target="_blank" href="' . $facebook . '" title="Facebook"><i class="fa-brands fa-facebook i-style-mine " style="--clr:#1877F2" id="insta-icon"></i></a>';
$mailIcon = '<a target="_blank" href="mailto:' . $mail . '" title="Email"><i class="fa-solid fa-envelope i-style-mine " style="--clr:#f06b0d;" id="envelop-icon"></i></a>';

// Echo the icons

?>
    <ul class="socials-links">
        <li>
            <?php echo $twitterIcon; ?>
        </li>
        <li>
            <?php echo $instagramIcon; ?>
        </li>
        <li>
            <?php echo $linkedinIcon; ?>
        </li>
        <li>
            <?php echo $facebookIcon; ?>
        </li>
        <li>
            <?php echo $mailIcon; ?>
        </li>
    </ul>
</div>
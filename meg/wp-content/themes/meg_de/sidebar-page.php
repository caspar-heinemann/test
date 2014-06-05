<?php
/**
 * The Sidebar for Pages can be filled in widget area
 *
 * @author Nina Taberski-Besserdich (nina.taberski@besserdich.com)
 * @package WordPress
 * @subpackage BIC Bootstrap Wordpress Theme
 */
?>
<section class="sidebar-page">
    <?php
    if (function_exists('dynamic_sidebar')) {
        dynamic_sidebar("sidebar-page");
    }
    ?>
</section>

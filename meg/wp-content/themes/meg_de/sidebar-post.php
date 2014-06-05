<?php
/**
 * The Sidebar for Post Areas can be filled in widget area.
 *
 * @author Nina Taberski-Besserdich (nina.taberski@besserdich.com)
 * @package WordPress
 * @subpackage BIC Bootstrap Wordpress Theme
 */
?>
<section class="sidebar-posts">

    <?php
    if (function_exists('dynamic_sidebar')) {

        dynamic_sidebar("sidebar-post");
    }
    ?>

</section>

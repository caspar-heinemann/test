<?php
/**
 * The template for displaying Archive pages.
 * 
 * @author Nina Taberski-Besserdich (nina.taberski@besserdich.com)
 * @package WordPress
 * @subpackage BIC Bootstrap Wordpress Theme
 */
get_header();
?>

<!-- Section 1 -->

<section id="home" data-speed="4" data-type="background">
  <div class="container Head ">
    <h1>
     Partner
    </h1>
  </div>
</section>
<!-- Section 2 -->
<div id="sectionHeadHome" class="center">
  <h2>Wir wollen viel bewegen. Du auch?</h2>
</div>
<div class="container">
  <div id="responsiveDisplay">
    <div class="text-center jobLead">Die offiziellen Partner von Mobileeventguide.</div>
  </div>
  
<div class="container padTop50">
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8 col-8 ">
            <div class="content ">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php get_template_part('content', get_post_format()); ?>


    <?php endwhile;
else: ?>
                    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                <?php endif; ?>

            </div> <!-- /.content -->

                <?php
            if (function_exists('wp_pagenavi')) {
                wp_pagenavi();
            } else {
                bootstrapwp_content_nav('nav-below');
            }
            ?>

        </div> <!-- /.col-lg-9 /.col-md-9 /.col-sm-9 /.col-9 -->
        <div class="col-lg-3 col-md-3 col-sm-3 col-3 sidebar-wrapper">

          <?php
dynamic_sidebar('Partner Sidebar');
?>


            <!-- /.col-lg-3 /.col-md-3 /.col-sm-3 /.col-3 -->
        </div> <!-- /.row -->
    </div>
</div> <!-- /.container -->
</div>

<?php get_footer(); ?>
            


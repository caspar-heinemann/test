<?php
/**
 * Template Name: CASES//Full Width Page
 * Description: Page template with a full width content container.
 *
 * @author Nina Taberski-Besserdich (nina.taberski@besserdich.com)
 * @package WordPress 
 * @subpackage BIC Bootstrap Wordpress Theme
 */
?>
<?php get_header(); ?>

<!DOCTYPE html>
<html>
<head>
	
<!-- Section 1 -->

</section>
<!-- Section 2 -->
<section id="home" data-speed="4" data-type="background">
    <div class="container">
        More content goes here!
       
    </div>
</section>
<!-- Section 3 -->
<section id="" data-speed="2" data-type="background">
    <div class="container">
       
    </div>
</section>



<div class="container">

    <div class="row">
        <div class="col-12">
            <?php
            if (function_exists('bootstrapwp_breadcrumbs')) {
                bootstrapwp_breadcrumbs();
            }
            ?>
        </div><!--/.span12 -->
    </div><!--/.row -->

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                    <header>
                        <h1><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
        <?php the_title(); ?></a></h1>
                    </header>

                </div>
            </div>

           
                    <div class="content">


                        <article class="post" id="post-<?php the_ID(); ?>">

                            <p><?php echo the_content(); ?></p>

                        </article>

                    </div> <!-- /.content -->
                </div> <!-- /.col-lg-12 /.col-md-12 /col-sm-12 /.col-12 -->

            <?php endwhile;
        else: ?>
            <p><?php _e('Diese Seite gibt es nicht :('); ?></p>
<?php endif; ?>

    </div> <!-- /.container -->
    

</div>

<?php get_footer(); ?>
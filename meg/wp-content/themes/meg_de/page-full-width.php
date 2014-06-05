<?php
/**
 * Template Name: Full Width Page
 * Description: Page template with a full width content container.
 *
 * @author Nina Taberski-Besserdich (nina.taberski@besserdich.com)
 * @package WordPress 
 * @subpackage BIC Bootstrap Wordpress Theme
 */
?>
<?php get_header(); ?>
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

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
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
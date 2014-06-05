<?php
/**
 * Template Name: Default Page
 * Description: Page template with a content container and right sidebar.
 *
 * @author Nina Taberski-Besserdich (nina.taberski@besserdich.com)
 * @package WordPress
 * @subpackage BIC Bootstrap Wordpress Theme
 */
?>
<?php get_header(); ?>
<div class="container main">

    <div class="row main-breadcrumb">
        <div class="col-12">
            <?php
            if (function_exists('bootstrapwp_breadcrumbs')) {
                bootstrapwp_breadcrumbs();
            }
            ?>
        </div><!--/.span12 -->
    </div><!--/.row -->

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <div class="row main-top">
                <div class="col-lg-8 col-md-8 col-sm-8 col-8">

                    <header>
                        <h1><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
        <?php the_title(); ?></a></h1>
                    </header>

                </div>
            </div>


            <div class="row main-content">
                <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                    <div class="content main">

                        <article class="post" id="post-<?php the_ID(); ?>">

                            <p><?php echo the_content(); ?></p>

                        </article>

                    </div> <!-- /.content -->
                </div> <!-- /.col-lg-9 /.col-md-9 /col-sm-9 /.col-9 -->


            <?php endwhile;

                  endif; ?>

        <div class="col-lg-3 col-md-3 col-sm-3 col-3 sidebar-wrapper">
<?php get_sidebar('Apps Featured'); ?>

            </div>
        </div> <!-- /.sidebar -->
    </div> <!-- /.container -->

</div> <!---->
<?php get_footer(); ?>



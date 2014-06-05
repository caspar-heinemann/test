<?php
/**
 * Description: Search Results
 *
 * @author Nina Taberski-Besserdich
 * @package WordPress
 * @subpackage BIC Bootstrap Wordpress Theme
 */
?>
<?php get_header(); ?>
<div class="container">

    <div class="row">
        <div class="col-12">
            <ul class="breadcrumb">
                <li>
                    <a href="/">Home</a> / Search
                </li>
            </ul>
        </div><!--/.span12 -->
    </div><!--/.row -->

    <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-9 col-9">
            <div class="content">

                <?php if (have_posts()) : ?>
                    <header class="post-title">
                        <h1><?php printf(__('Search Results for: %s', 'bicbswp'), '<span>' . get_search_query() . '</span>'); ?></h1>
                    </header>

                    <?php while (have_posts()) : the_post(); ?>


                        <?php get_template_part('content', get_post_format()); ?>


                    <?php endwhile;
                else:
                    ?>




                    <header class="post-title">
                        <h1><?php _e('No Results Found', 'bicbswp'); ?></h1>
                    </header>
                    <p class="lead">
                        <?php
                        _e(
                                'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps you should try again with a different search term.', 'bicbswp');
                        ?>
                    </p>
                    <div class="well">
    <?php get_search_form(); ?>
                    </div><!--/.well -->



<?php endif; ?>



            </div> <!-- /.content -->
        </div> <!-- /.col-lg-9 /.col-md-9 /col-sm-9 /.col-9 -->
        <div class="col-lg-3 col-md-3 col-sm-3 col-3 sidebar-wrapper">
<?php get_sidebar('page'); ?>


            <!-- /.col-lg-3 /.col-md-3 /.col-sm-3 /.col-3 -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->

</div>
<?php get_footer(); ?>


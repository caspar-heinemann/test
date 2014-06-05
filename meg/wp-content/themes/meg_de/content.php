<?php
/**
 * The default template for displaying content. Content displayed when clicking on Partners menu
 *
 * @author Caspar Heinemann
 * @package WordPress
 * @subpackage BIC Bootstrap Wordpress Theme
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <header class="entry-header">

        <aside class="entry-details">




        </aside><!--end .entry-details -->
    </header><!--end .entry-header -->
        <div class="row jobSection">

            <?php if (is_search()) : // Only display excerpts without thumbnails for search.  ?>
                <div class="entry-summary">
                    <?php the_excerpt(); ?>
                </div><!-- end .entry-summary -->

            <?php else : ?>

                <div class="entry-content">
                    <?php if (bootstrapwp_autoset_featured_img() !== false) : ?>
                        <div class="col-md-4 padTop50">
                            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute('echo=0'); ?>">
                        <?php echo bootstrapwp_autoset_featured_img(); ?>
                            </a>
                        </div>

                        <div class="col-md-8">
                         <div class="bullitHead"><a href="<?php the_permalink(); ?>" title="<?php printf(esc_attr__('Permalink to %s', 'bicbswp'), the_title_attribute('echo=0')); ?>" rel="bookmark"><?php the_title(); ?></a></div>
    <?php else : ?>
                            <div class="col-md-12">
                        <?php endif; ?>
                        <?php
                        $options = get_option('bicbswp_theme_options');

                        if ($options['excerpts']) {

                            echo the_excerpt();
                        } else {

                            echo the_content('<span class="morelink-icon">Read more</span>', 'bicbswp');
                        }
                        ?>
 <?php edit_post_link(__('Edit', 'bicbswp')); ?>
                        </div>
                    </div>

                </div><!-- /.row -->
                        <?php endif; ?>


    <footer class="entry-meta">



    </footer><!-- end .entry-meta -->

</article><!-- /.post-->

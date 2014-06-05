<?php
/**
 * The template for displaying content in the single.php.
 * 
 * @author Nina Taberski-Besserdich (nina.taberski@besserdich.com)
 * @package WordPress
 * @subpackage BIC Bootstrap Wordpress Theme
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
       
       

        
    </header><!--end .entry-header -->
    <div class="container"> 
  

    <section class="post-content padTop50">
        <div class="row">
            <div class="entry-content">
                <?php if (bootstrapwp_autoset_featured_img() !== false) : ?>
                    <div class="col-md-3">
                        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute('echo=0'); ?>">
                           <?php the_post_thumbnail('full');   ?> 
                        </a>
                    </div>

                  <div class="col-md-7">
      				 <div class="bullitHeadJobs h4"><?php the_title(); ?></div>
       <span class="glyphicon glyphicon-bookmark"><div class="bullitSub h4">Erweitern Sie unser Team</div></span>

                    <?php else : ?>
                       
                        <?php
                        endif;

                        echo the_content();
                        ?>
                  
                </div>

            </div><!-- /.row -->

    </section>

   

</article><!-- /.post-->

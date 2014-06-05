<?php
/**
 * Template Name: SITEMAP
 * Description: Page template with a full width content container.
 *
 * @author Nina Taberski-Besserdich (nina.taberski@besserdich.com)
 * @package WordPress 
 * @subpackage BIC Bootstrap Wordpress Theme
 */
?>

<?php get_header(); ?>


<!-- Section 1 -->
<title>Sitemap |</title>

<section id="kontakt" data-speed="4" data-type="background">
    <div class="container Head">
    
        <h1><?php the_title(); ?></h1>
      
    </div> </div> </div> </div>
</section>
<!-- Section 2 -->


	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="container padBot30">
	<?php echo the_content(); ?>

                    </div> <!-- /.content -->
                </div> <!-- /.col-lg-12 /.col-md-12 /col-sm-12 /.col-12 -->
                
 


<!-- Section 3 -->
<div class="container padBot50">
<div class="col-xs-12 col-sm-6 col-md-4 sitemap">
<h3>Pages</h3>  
    <ul><?php wp_list_pages("title_li=" ); ?></ul>  
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 sitemap">
<h3>Feeds</h3>  
    <ul>  
        <li><a title="Full content" href="feed:<?php bloginfo('rss2_url'); ?>">Main RSS</a></li>  
        <li><a title="Comment Feed" href="feed:<?php bloginfo('comments_rss2_url'); ?>">Comment Feed</a></li>  
    </ul>  
  </div>
  <div class="col-xs-12 col-sm-6 col-md-4 sitemap">	   
<h3>Categories</h3>  
    <ul><?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0&feed=RSS'); ?></ul>  
    

   

 	<?php endwhile;
    else: ?>
	<p><?php _e('Diese Seite gibt es nicht :('); ?></p>
	<?php endif; ?>

  </div> <!-- /.container -->
 <?php echo do_shortcode( '[res_map address="52.509119,13.388219" description="<img src=\'http://staging.mobileeventguide.de/wp-content/themes/meg_de/images/stuff/logo-desk.png\'> {br} Mauerstrasse 79 F, 10117 Berlin {br} Phone: +49.30.206.581.613 " icon="http://meg-blog-com-assets.s3.amazonaws.com/wp-content/uploads/mapPointer.png" style="26" pancontrol="no" scalecontrol="no" typecontrol="no" streetcontrol="no" zoom="15" zoomcontrol="no" draggable="yes" scrollwheel="yes" width="100%" height="500px" maptype="roadmap" popup="no" center="52.509119,13.388219" refresh="yes"]' ); ?>
 
 <!-- Section 2 -->
 
 

</div>
</div>
</div>

<?php get_footer(); ?>

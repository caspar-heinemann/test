<?php
/**
 * Template Name: CONTACT//Full Width Page
 * Description: Page template with a full width content container.
 *
 * @author Nina Taberski-Besserdich (nina.taberski@besserdich.com)
 * @package WordPress 
 * @subpackage BIC Bootstrap Wordpress Theme
 */
?>
<script src="http://code.jquery.com/jquery-1.8.0.min.js"></script>
<?php get_header(); ?>


<!-- Section 1 -->
<section id="kontakt" data-speed="4" data-type="background">
    <div class="container Head">
    
        <h1><?php the_title(); ?></h1>
      
    </div> </div> </div> </div>
</section>
<!-- Section 2 -->


	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="container padBot30 padTop50">
	<?php echo the_content(); ?>

                    </div> <!-- /.content -->
                </div> <!-- /.col-lg-12 /.col-md-12 /col-sm-12 /.col-12 -->
                
<section id="sectionGrey" ><a href="#go"><div class="center" id="impressumIcon1"></div></a>
 <div class="container">
 
 

 <div id="go"><div class="jobHead h3">
               <div data-icon="g"> Schreiben Sie uns.</div>
            </div><div class="row">
        <div class="col-md-6">
           <?php echo do_shortcode("[vfb id='2']"); ?>
 
   </div>
        
         <div class="col-md-6">
            <div class="padTop50">
                <div class="row jobsBack">
           <div class="card"> 
             <div class="face front">
               <div class="kontaktImg">
                 <div class="jobsTextFrontFranka">
                   <h7>Franka Mörke</h7><br>
                      <p>VP Sales & Marketing</p>
                      <span class="glyphicon glyphicon-earphone"></span><span class="glyph">49 30 / 206 581 60</span><br>
                      <span class="glyphicon glyphicon-envelope"></span><a href="mailto:franka.moerke@mobileeventguide.de"><span class="glyph">E-mail Franka Mörke</span></a>
                    
                      </div>
               
            </div> 
         </div> 

    </div>
  </div> 
</div>
</section>


<!-- Section 3 -->
<section id="sectionMap">

<?php echo do_shortcode( '[res_map address="52.509119,13.388219" description="<img src=\'http://staging.mobileeventguide.de/wp-content/themes/meg_de/images/stuff/logo-desk.png\'> {br} Mauerstrasse 79 F, 10117 Berlin {br} Phone: +49.30.206.581.613 " icon="http://meg-blog-com-assets.s3.amazonaws.com/wp-content/uploads/mapPointer.png" style="26" pancontrol="no" scalecontrol="no" typecontrol="no" streetcontrol="no" zoom="15" zoomcontrol="no" draggable="yes" scrollwheel="yes" width="100%" height="40%" maptype="roadmap" popup="no" center="52.509119,13.388219" refresh="yes"]' ); ?>





</section>
 	<?php endwhile;
    else: ?>
	<p><?php _e('Diese Seite gibt es nicht :('); ?></p>
	<?php endif; ?>

    </div> <!-- /.container -->
 
 
 <!-- Section 2 -->
 
 

</div>
</div>
</div>

<?php get_footer(); ?>

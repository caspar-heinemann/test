<?php
/**
 * Template Name: DANKE
 * Description: Page template with a full width content container.
 *
 * @author Nina Taberski-Besserdich (nina.taberski@besserdich.com)
 * @package WordPress
 * @subpackage BIC Bootstrap Wordpress Theme
 */
?>


<?php get_header(); ?>

<!-- Section 1 -->
<section id="produkt" data-speed="4" data-type="background">
    <div class="container Head">

        <h1>Vielen Dank</h1>

    </div>
</section>
</section>
	<div class="content">

			 <div class="container ">

        <div class="row">
  <div class="col-md-8 col-md-offset-2 col-sm-6 padTop5">

   <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="container padBot30 padTop50">
	<?php echo the_content(); ?>

                    </div> <!-- /.content -->


<?php endwhile;
    else: ?>
	<p><?php _e('Diese Seite gibt es nicht :('); ?></p>
	<?php endif; ?>


    </div></div>


                    </div> <!-- /.content -->




            </div></div>
<!-- Section 2 -->
<section id="produkt1" data-speed="5" data-type="background">
    <div class="container">
    <div class="weiterHead">Mehr erfahren unter</div><br>
    <div class="col-md-12 weiterButtons">

      <a href="<?php echo get_site_url(); ?>/produkt" class="buttonFooter">Produkt</a><a href="<?php echo get_site_url(); ?>/referenzen" class="buttonFooter">Referenzen</a><a href="<?php echo get_site_url(); ?>/kontakt" class="buttonFooter">Kontakt</a>


    </div></div>
</section>

</div>
<?php get_footer(); ?>

<?php
/**
* Template Name: TEAM
* Description: Page template with a full width content container.
*
* @author Nina Taberski-Besserdich (nina.taberski@besserdich.com)
* @package WordPress
* @subpackage BIC Bootstrap Wordpress Theme
*/
?>
<?php get_header(); ?>

<!-- Section 1 -->
<section id="team">
  <div class="container Head">
    <h1><?php the_title(); ?></h1>
  </div>
</section>

<div class="container">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="content">
        <?php echo the_content(); ?>
  <?php endwhile; else: ?>
    <p><?php _e('Diese Seite gibt es nicht :('); ?></p>
  <?php endif; ?>



 <!-- Section 2 -->
<section id="produkt1" data-speed="5" data-type="background">
  <div class="container ">
    <div class="weiterHead">Mehr erfahren unter</div>
    <br>
    <div class="col-md-12 weiterButtons">
      <a href="<?php echo get_site_url(); ?>/produkt" class="buttonFooter">Produkt</a>
      <a href="<?php echo get_site_url(); ?>/referenzen" class="buttonFooter">Referenzen</a>
      <a href="<?php echo get_site_url(); ?>/kontakt" class="buttonFooter">Kontakt</a>
    </div>
  </div>
</section>

<?php get_footer(); ?>

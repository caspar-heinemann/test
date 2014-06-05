<?php
/**
 * Template Name: ABOUT
 * Description: Page template with a full width content container.
 *
 * @author Nina Taberski-Besserdich (nina.taberski@besserdich.com)
 * @package WordPress
 * @subpackage BIC Bootstrap Wordpress Theme
 */
?>
<?php get_header(); ?>

<!-- Section 1 -->
<section id="company" data-speed="4" data-type="background">
    <div class="container Head noMobile">

        <h1><?php the_title(); ?></h1>

    </div>
</section>
<!-- Section 2 -->
<section id="" data-speed="2" data-type="background">
    <div class="container">

    </div>
</section>



<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                    <header>

                    </header>

                </div>
            </div>


                    <div class="content">


                        <article class="post" id="post-<?php the_ID(); ?>">

                            <p><?php echo the_content(); ?></p>

                        </article>

                    </div> <!-- /.content -->
                </div> <!-- /.col-lg-12 /.col-md-12 /col-sm-12 /.col-12 -->
<!-- Section 3 -->
<!-- Section 3 -->
<section id="sectionRecentApps" data-speed="2" data-type="background">

    <div class="container"><div class="recentAppContainer">
        <div class="row">
			<div id="carousel-example-generic1" class="carousel slide">
<!-- Indicators -->
<ol class="carousel-indicators">
    <li data-target="#carousel-example-generic1" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic1" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic1" data-slide-to="2"></li>
</ol>

<!-- Wrapper for slides -->
<div class="carousel-inner">
    <!-- Slide -->
    <div class="item active">
        <div class="row">
            <div class="col-md-8 col-md-offset-3 col-sm-offset-1">
              <div class="col-md-2 col-sm-2 col-xs-3 "><div id="feedback-icon1"></div></div>
                <div class="col-md-8 col-sm-8 col-xs-9 feedBackText"><h4>Dennis Schultz</h4>Alles was unsere Austeller, Sponsoren und Besucher sich gewünscht haben in einer App. Weiter so!<br>
                <h8>Helios Media</h8></div>


            </div>
        </div>
    </div>
    <!-- Slide -->
    <div class="item">
        <div class="row">
             <div class="col-md-8 col-md-offset-3 col-sm-offset-1">
               <div class="col-md-2 col-sm-2 col-xs-3"><div id="feedback-icon1"></div></div>
                <div class="col-md-8 col-sm-8 col-xs-9 feedBackText"><h4>Mark A. Cano</h4>Mobile Event Guides Erfahrung im Messemarkt hat sich in unserer App widergespiegelt:  Sie war bestens auf unsere Bedürfnisse abgestimmt!<br>
                <h8>Verlagsleiter des Deutschen Fachverlags</h8></div>
            </div>
        </div>
    </div>
    <!-- Slide -->
    <div class="item">
        <div class="row center-block">
         <div class="col-md-8 col-md-offset-3 col-sm-offset-1">
               <div class="col-md-2 col-sm-2 col-xs-3"><div id="feedback-icon1"></div></div>
                <div class="col-md-8 col-sm-8 col-xs-9 feedBackText"><h4>Elke Schmeckenbecher</h4>Die Konferenz-App von Mobile Event Guide war ein großes Plus für unsere Aussteller und Besucher.<br>
                <h8>DDG-Tagungskoordinatorin</h8></div>

            </div>
        </div>
    </div>
     <div class="item">
        <div class="row center-block">
         <div class="col-md-8 col-md-offset-3 col-sm-offset-1">
             <div class="col-md-2 col-sm-2 col-xs-3"><div id="feedback-icon1"></div></div>
                <div class="col-md-8 col-sm-8 col-xs-9 feedBackText"><h4>Sarah Steinbeck</h4>Die kompetente Beratung, die zahlreichen App-Funktionen und die persönliche Unterstützung haben uns überzeugt.<br>
                <h8>DDG-Tagungskoordinatorin</h8></div>

            </div>
        </div>
    </div>
 </div><!---recent app container--->
    <!-- Controls -->

</div>
</div>
    </div>
</section>

            <?php endwhile;
        else: ?>
            <p><?php _e('Diese Seite gibt es nicht :('); ?></p>
<?php endif; ?>

    </div> <!-- /.container -->



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

<script>

	</script>

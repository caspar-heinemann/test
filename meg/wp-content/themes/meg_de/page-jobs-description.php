<?php
/**
 * Template Name: JOBS-Desiption//Full Width Page
 * Description: Page template with a full width content container.
 *
 * @author Nina Taberski-Besserdich (nina.taberski@besserdich.com)
 * @package WordPress
 * @subpackage BIC Bootstrap Wordpress Theme
 */
?>
<?php
get_header();
?>

<?php {echo '<section id="printContact">
<div><p>Maria Wirt • HR Manager • Mobile Event Guide GmbH • Mauerstr. 79 f, 10117 Berlin • +49 30 206 581 610 • maria.wirt@mobileeventguide.de </p><div>
</section>';} ?>
<!-- Section 1 -->
<section id="home" data-speed="4" data-type="background">
    <div class="container">
    	<h1><div class="headOne">MOBILE EVENT GUIDE</div></h1>
        <h1><?php
the_title();
?></h1>

    </div>
</section>
<!-- Section 2 -->


<!-- Section Content -->
 <div class="container">
<?php
if (have_posts()):
    while (have_posts()):
        the_post();
?>

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                    <header>

                    </header>

                </div>
            </div>


                    <div class="content">


                        <article class="post" id="post-<?php
        the_ID();
?>">

                            <p><?php
        echo the_content();
?></p>

                        </article>

                    </div> <!-- /.content -->
                </div> <!-- /.col-lg-12 /.col-md-12 /col-sm-12 /.col-12 -->
<!-- Section 3 -->


<!-- Section 3 -->
<section id="sectionRecentApps" data-speed="2" data-type="background">

    <div class="container"><div class="recentAppContainer">
        <div class="row">
			<div id="carousel-example-generic" class="carousel slide">
<!-- Indicators -->
<ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
</ol>

<!-- Wrapper for slides -->
<div class="carousel-inner">
    <!-- Slide -->
    <div class="item active">
        <div class="row">

            <div class="col-sm-3 col-xs-6 center-block"> <img src="http://placehold.it/200x100" alt=""/>
                <div class="carousel-caption">This is a caption</div>

       	   </div>
            <div class="col-sm-3 col-xs-6 center-block"> <img src="http://placehold.it/200x100" alt=""/>
                <div class="carousel-caption">This is a caption</div>
            </div>
            <div class="col-sm-3 col-xs-6 center-block"> <img src="http://placehold.it/200x100" alt=""/>
                <div class="carousel-caption">This is a caption</div>
            </div>
            <div class="col-sm-3 col-xs-6 center-block"> <img src="http://placehold.it/200x100" alt=""/>
                <div class="carousel-caption">This is a caption</div>
            </div>
        </div>
    </div>
    <!-- Slide -->
    <div class="item">
        <div class="row">
            <div class="col-sm-3 col-xs-6"> <img src="http://placehold.it/200x100" alt=""/>
                <div class="carousel-caption">This is a caption</div>
            </div>
            <div class="col-sm-3 col-xs-6"> <img src="http://placehold.it/200x100" alt=""/>
                <div class="carousel-caption">This is a caption</div>
            </div>
            <div class="col-sm-3 col-xs-6"> <img src="http://placehold.it/200x100" alt=""/>
                <div class="carousel-caption">This is a caption</div>
            </div>
            <div class="col-sm-3 col-xs-6"> <img src="http://placehold.it/200x100" alt=""/>
                <div class="carousel-caption">This is a caption</div>
            </div>
        </div>
    </div>
    <!-- Slide -->
    <div class="item">
        <div class="row center-block">
            <div class="col-sm-3 col-xs-6"> <img src="http://placehold.it/200x100" alt=""/>
                <div class="carousel-caption">This is a caption</div>
            </div>
            <div class="col-sm-3 col-xs-6"> <img src="http://placehold.it/200x100" alt=""/>
                <div class="carousel-caption">This is a caption</div>
            </div>
            <div class="col-sm-3 col-xs-6"> <img src="http://placehold.it/200x100" alt=""/>
                <div class="carousel-caption">This is a caption</div>
            </div>
            <div class="col-sm-3 col-xs-6"> <img src="http://placehold.it/200x100" alt=""/>
                <div class="carousel-caption">This is a caption</div>
            </div>
        </div>
    </div>
 </div><!---recent app container--->
    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev"> <span class="icon-prev"></span> </a> <a class="right carousel-control" href="#carousel-example-generic" data-slide="next"> <span class="icon-next"></span> </a>
</div>
</div>
    </div>
</section>


            <?php
    endwhile;
else:
?>
            <p><?php
    _e('Diese Seite gibt es nicht :(');
?></p>
<?php
endif;
?>

    </div> <!-- /.container -->


 <!-- Section 2 -->
<section id="produkt1" data-speed="5" data-type="background">
    <div class="container">
    <div class="weiterHead">Mehr erfahren unter</div>
    <div class="col-md-8 col-md-offset-4">

      <a href="<?php echo get_site_url(); ?>/produkt" class="buttonFooter">Produkt</a><a href="<?php echo get_site_url(); ?>/referenzen" class="buttonFooter">Referenzen</a><a href="<?php echo get_site_url(); ?>/kontakt" class="buttonFooter">Kontakt</a>

    </div></div>

</section>
</div>

<?php
get_footer();
?>

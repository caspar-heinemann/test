<?php
/*
Template Name: PRIVACY MAIN // Right Sidebar Page
*/
?>

<?php get_header(); ?>

<!-- Section 1 -->
<section id="kontakt" data-speed="4" data-type="background">
    <div class="container Head">

        <h1><?php the_title(); ?></h1>

    </div>
</section>
<!-- Section 2 -->
<section id="clientNavContainer" data-speed="2" data-type="background">
  <div class="clientNavAgb">
       <ul>
       <li><a href="#registrierung">Registrierung</a></li>
       <li><a href="#netzwerke">Soziale Netzwerke</a></li>

       </ul>
 	</div>
</section>

<!-- Section Content -->
 <div class="container">
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



<section id="sectionGrey" data-speed="2" data-type="background"><div class="center" id="impressumIcon1"></div>
 <div class="container">

 <div class="meetingHead h3">
                Schreiben Sie uns.
            </div><div class="row">
        <div class="col-md-8">

   <?php echo do_shortcode("[vfb id='2']"); ?>
   </div>
         <div class="col-md-4">
            <div class="padTop50">
                <div class="row jobsBack">
           <div class="card">
             <div class="face front">
               <div class="kontaktImg">
                 <div class="jobsTextFront">
                   <h7>Franka Mörke</h7><br>
                      VP Sales & Marketing
                     <div class="bullitListJobs">Write Email</div>
                      </div>

            </div>
         </div>
 <div class="meetingHead h3">
                Schreiben Sie uns.
            </div>

            <p>Mit unserem personalisierten, interaktiven Planungstool können Sie Ihre Teilnehmer optimal informieren, Networking effizienter gestalten. Rufen Sie uns für ein Beratungsgespräch an.</p>
      </div>
    </div>
  </div>
</div>
</section>








        </div>
    </div>

            <?php endwhile;
        else: ?>
            <p><?php _e('Diese Seite gibt es nicht :('); ?></p>
<?php endif; ?>

    </div> <!-- /.container -->


 <!-- Section 2 -->
<section id="home2" data-speed="5" data-type="background">
    <div class="container">
    <div class="weiterHead">Mehr erfahren unter</div><br>
    <div class="col-md-12 weiterButtons">

      <a href="<?php echo get_site_url(); ?>/produkt" class="buttonFooter">Produkt</a><a href="<?php echo get_site_url(); ?>/referenzen" class="buttonFooter">Referenzen</a><a href="<?php echo get_site_url(); ?>/kontakt" class="buttonFooter">Kontakt</a>


    </div></div>
</section>

</div>

<?php get_footer(); ?>


<script type="text/javascript">
$(document).ready(function()
 {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top + -170
        }, 1000);
        return false;
      }
    }
  });
});
</script>

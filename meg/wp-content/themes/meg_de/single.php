<?php
/**
 * Default Post Template
 * Description: Post template with a content container and right sidebar.
 *
 * @author Nina Taberski-Besserdich (nina.taberski@besserdich.com)
 * @package WordPress
 * @subpackage BIC Bootstrap Wordpress Theme
 */
get_header();
?>

<section id="company" data-speed="4" data-type="background">
  <div class="container Head">
    <h1>
      <?php
$category = get_the_category();
echo $category[0]->cat_name;
?>
    </h1>
  </div>
</section>
<!-- Section 2 -->


    <div class="row">

        <div class="content">

          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <?php get_template_part('content-single'); ?>
          <?php endwhile;
else: ?>
          <p>
            <?php _e('Diese Seite gibt es nicht :('); ?>
          </p>
          <?php endif; ?>
        </div>
        <!-- /.content -->
      </div>
      <!-- /.col-lg-9 /.col-md-9 /.col-sm-9 /.col-9 -->

      <!-- /.col-lg-3 /.col-md-3 /.col-sm-3 /.col-3  -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->

</div>
</div>
</div>
</div>
</div>
<!-- Section 3 -->
<section id="sectionGreyJobs" ><a href="#go"><div class="center" id="impressumIcon1"></div></a>
 <div class="container">
 <div class="container">
 <div class="container">
 <div id="go"><div class="meetingHead h3">
                <div data-icon="g"> Jetzt Bewerben</div>
            </div>

   <?php echo do_shortcode("[vfb id='1']"); ?>
   </div></div></div>


   <!-- Section 3
         <div class="col-md-4">
            <div class="padTop50">
                <div class="row jobsBack">
           <div class="card">
             <div class="face front">
               <div class="kontaktImg2">
                 <div class="jobsTextFront">
                   <h7>Maria Wirt</h7><br>
                      Human Resources
                     <a href="mailto:maria.wirt@mobileeventguide.de"<div class="bullitListJobs">Email</div></a>
                      </div>

            </div>
         </div>
 <div class="meetingContainer">
 <div class="meetingHead h3">
                Schreiben Sie uns.
            </div>-->



  </div>
</div>
</div>
</section>

 <!-- Section 2 -->
<!-- Section 2 -->
<section id="jobs1" data-speed="5" data-type="background">
    <div class="container ">
    <div class="weiterHead">Mehr erfahren unter</div><br>
    <div class="col-md-12 weiterButtons">

      <a href="<?php echo get_site_url(); ?>/produkt" class="buttonFooter">Produkt</a><a href="<?php echo get_site_url(); ?>/referenzen" class="buttonFooter">Referenzen</a><a href="<?php echo get_site_url(); ?>/kontakt" class="buttonFooter">Kontakt</a>


    </div></div>
</section>
<?php get_footer(); ?>

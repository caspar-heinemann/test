<?php
/*
Template Name: JOBS
*/
?>

<?php
get_header();
?>
<!-- Section 1 -->
<section id="company" data-speed="4" data-type="background">
    <div class="container Head">

        <h1><?php
the_title();
?></h1>

    </div>
</section>
<!-- Section 2 -->
<div id="sectionHeadHome" class="center">
<h2>Wir wollen viel bewegen. Du auch?</h2>
</div>

 <div class="container">
<div id="responsiveDisplay"><div class="text-center jobLead">Unser großartiges Team besteht aus Talenten aus aller Welt. Dabei macht jeder den Unterschied und jeden Tag zu einem Gewinn. Wenn wir miteinander arbeiten, stehen wir ganz vorne in der Mobile App Entwicklung und verwirklichen unsere Vision von der zukünftigen Messe- und Kongresswelt. Komm an Board und werde Teil unseres großartigen Teams!</div></div>




<div class="teamImg">
  <img src="/wp-content/themes/meg_de/images/jobs/teamImg-ipad.jpg" alt="Movile Event Guide Team Image" />
</div>
<!-- Section Content -->

   <div class="row">

<?php


$args = array(
    'category_name' => 'Jobs',
    'caller_get_posts' => 4
);

if ($paged > 1) {
    $args['paged'] = $paged;
}

$my_query = new WP_Query($args);
?>

<?php
if (have_posts()):
    while (have_posts()):
        the_post();
?>
<div class="post" id="post-<?php
        the_ID();
?>">

  <div class="xentry">
   <?php
        the_content('<p class="serif">Read the rest of this page &raquo;</p>');
?>
  <?php
        wp_link_pages(array(
            'before' => '<p><strong>Pages:</strong> ',
            'after' => '</p>',
            'next_or_number' => 'number'
        ));
?>
 </div>
</div>
<?php
    endwhile;
endif;
?>
</div>
</div>
<div id="job-listing-container">
<a href="#go"><div class="center" id="jobsIcon1"></div></a>
<?php
if ($my_query->have_posts()):
?>
 <?php
    while ($my_query->have_posts()):
        $my_query->the_post();
?>
   <?php
        //necessary to show the tags
        global $wp_query;
        $wp_query->in_the_loop = true;
?>
 <section id="sectionWhiteJobs">
 <div class="container col-md-offset-2">
   <div class="col-md-3 col-sm-4 col-xs-12 center-block jobBatch">
     <a href="<?php echo get_permalink(); ?>"><div id="partnercat"></div><?php the_post_thumbnail('full'); ?></a>
   </div>
   <div class="col-md-7 col-sm-8 col-xs-12">
     <div class="bullitHeadJobs h4"><?php the_title(); ?></div>
       <span class="glyphicon glyphicon-bookmark"></span><div class="bullitSub h4">Erweitern Sie unser Team</div>
     <p><?php echo get_excerpt(125); ?>
     </p>
     <a class="buttonCase" href="<?php echo get_permalink(); ?> ">Job ansehen</a>
      </section>
    </div>

</div>

<?php
    endwhile;
?>
</div>
<?php
else:
?>
</div>
  <h2 class="center">Not Found</h2>
  <p class="center">Sorry, but you are looking for something that isn't here.</p>
  <?php
    get_search_form();
?>

<?php
endif;
?>



            </div></div></div></div>  <!-- end col-lg-9 col-push-3 borderRight -->


                         </div> </div> </div> </div> </div> </div>

                     </div>     <!-- end container-sidebar -->
               </div>     <!-- end container-sidebar -->
        </section> <!-- end article header -->


        </article> <!-- end article

  <section id="jobsMitte" data-speed="5" data-type="background"></section>  -->

<!-- Section 3 -->
<section id="sectionGreyJobs" ><a href="#go"><div class="center" id="impressumIcon1"></div></a>
 <div class="container">

 <div id="go"><div class="jobHead h3">
                 <div data-icon="g"> Jetzt Bewerben
            </div></div><div class="row">
        <div class="col-md-12">

   <?php echo do_shortcode("[vfb id='1']"); ?>
   </div>





    </div>
  </div>
</div>
</div>
</section>



 <!-- Section 2 -->
<section id="jobs1" data-speed="5" data-type="background">
    <div class="container ">
    <div class="weiterHead">Mehr erfahren unter</div><br>
    <div class="col-md-12 weiterButtons">

      <a href="<?php echo get_site_url(); ?>/produkt" class="buttonFooter">Produkt</a><a href="<?php echo get_site_url(); ?>/referenzen" class="buttonFooter">Referenzen</a><a href="<?php echo get_site_url(); ?>/kontakt" class="buttonFooter">Kontakt</a>


    </div></div>
</section>
<?php
get_footer();
?>

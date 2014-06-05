<?php
/*
Template Name: PARTNER1 MAIN // Right Sidebar Page
*/
?>
<?php
get_header();
?>
<!-- Section 1 -->

<section id="kontakt" data-speed="4" data-type="background">
  <div class="container Head">
    <h1>
      <?php the_title(); ?>
    </h1>
  </div>
</section>

  <div class="container">
    <div class="row padTop50">
      <div class="col-md-8 padBot50">
        <?php


$args = array(
    'category_name' => 'Partner',
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
          <div class="entry">
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
        <div class=""> <a href="<?php
        echo get_permalink();
?>">
          <div class="jobSection">
            <div id="partnercat"></div>
            <div class="col-md-4 padTop50 partnerIcon">
              <?php
        the_post_thumbnail('medium');
?>
              </a></div>
            <div class="bullitHead h4">
              <?php
        the_title();
?>
            </div>
            <p>
              <?php
        $my_excerpt = get_the_excerpt();
        if ($my_excerpt != '') {
            // Some string manipulation performed
        }
        echo $my_excerpt; // Outputs the processed value to the page
?>
            </p>
            <a class="buttonCase" href="<?php
        echo get_permalink();
?> ">Details ansehen</a> </div>
          <?php
    endwhile;
?>
          <?php
else:
?>
          <h2 class="center">Not Found</h2>
          <p class="center">Sorry, but you are looking for something that isn't here.</p>
          <?php
    get_search_form();
?>
          <?php
endif;
?>
        </div>
      </div>
    </div>  </div>  </div>

  <!-- end col-lg-9 col-push-3 borderRight -->
  
  <div class="col-md-4">
    <?php
dynamic_sidebar('Partner Sidebar');
?>
  </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- end container-sidebar -->
</div>
<!-- end container-sidebar -->
</section>
<!-- end article header -->

<footer> </footer>
<!-- end article footer -->
</article>
<!-- end article -->

<section id="sectionGrey" ><a href="#go"><div class="center" id="impressumIcon1"></div></a>
 <div class="container">
 
 <div id="go"><div class="meetingHead h3">
                Schreiben Sie uns.
            </div><div class="row">
        <div class="col-md-6">
          
   <?php echo do_shortcode("[vfb id='1']"); ?>
   </div>
         <div class="col-md-6">
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
 
    </div>

</section>
<?php
get_footer();
?>
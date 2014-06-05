<?php
/*
Template Name: PARTNER MAIN // Right Sidebar Page
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


  <!-- Section Content -->


        <?php


$args = array(
    'category_name' => 'blog',
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
        <div class=""> <a href="<?php echo get_permalink(); ?>">
         <section id="sectionWhitePartner"><a href="#go"><div class="center" id="impressumIcon1"></div></a>
          <div class="container">

            <div class="col-md-3 col-md-offset-1 padTop50 partnerIcon">
                <?php the_post_thumbnail(array(151, 100)); ?>
            </div>

            <div class="bullitHeadPartner h4">
              <?php the_title(); ?>


            <div class="categoryPartner"><span class="glyphicon glyphicon-bookmark"><div class="bullitSub h4">Category | <?php
$category = get_the_category( $custompost );
echo $category[0]->cat_name;
?></div></span></div></div>
            <p>
              <?php $my_excerpt = get_the_excerpt();
        if ($my_excerpt != '') {
            // Some string manipulation performed
        }
        echo $my_excerpt; // Outputs the processed value to the page
?>
            </p>
            <a class="buttonCase" href="<?php
        echo get_permalink();
?> ">Details ansehen</a>


</div>


          <?php
    endwhile;
?>
          <?php
else:
?></div>

</section></section>
          <h2 class="center">Not Found</h2>
          <p class="center">Sorry, but you are looking for something that isn't here.</p>
          <?php
    get_search_form();
?>
          <?php
endif;
?>



  <!-- end col-lg-9 col-push-3 borderRight -->




</div>


<section id="sectionGrey" ><a href="#go"><div class="center" id="impressumIcon1"></div></a>
 <div class="container">

 <div id="go"><div class="formHead h3">
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


<?php
get_footer();
?>


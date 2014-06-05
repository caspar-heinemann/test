<?php
/*
Template Name: IMPRESSUM
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



<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="container padTop50 padBot50">
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
                
<section id="sectionGrey" ><a href="#go"><div class="center" id="impressumIcon1"></div></a>
 <div class="container">
 
 

 <div id="go"><div class="jobHead h3">
                Schreiben Sie uns.
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
<section id="sectionMap" data-speed="2" data-type="background">

<?php

if (function_exists('pronamic_google_maps')) {
    pronamic_google_maps(array(
        'width' => '100%',
        'height' => '400px',
        'marker_options' => array(
                                'icon' => 'http://meg-blog-com-assets.s3.amazonaws.com/wp-content/uploads/mapPointer.png'),
        
        'map_options' => array(
            
            
            // https://developers.google.com/maps/documentation/javascript/styling
            // http://gmaps-samples-v3.googlecode.com/svn/trunk/styledmaps/wizard/index.html
            'styles' => array(
                (object) array(
                    'style' => 'google.maps.ZoomControlStyle.SMALL'
                ),
                (object) array(
                    'featureType' => 'landscape',
                    'elementType' => 'all',
                    'stylers' => array(
                        (object) array(
                            'hue' => '#ffff00'
                        ),
                        (object) array(
                            'visibility' => 'simplified'
                        )
                    )
                ),
                (object) array(
                    'featureType' => 'road',
                    'elementType' => 'labels',
                    'stylers' => array(
                        (object) array(
                            'hue' => '#ff0000'
                        ),
                        (object) array(
                            'saturation' => '-200    '
                        ),
                        (object) array(
                            'visibility' => 'on'
                        )
                    )
                ),
                (object) array(
                    'featureType' => 'water',
                    'elementType' => 'geometry',
                    'stylers' => array(
                        (object) array(
                            'color' => '#3577a6'
                        ),
                        (object) array(
                            'saturation' => '53'
                        ),
                        (object) array(
                            'visibility' => 'on'
                        )
                    )
                ),
                (object) array(
                    'featureType' => 'administrative',
                    'elementType' => 'labels',
                    'stylers' => array(
                        
                        (object) array(
                            'saturation' => '-100'
                        ),
                        (object) array(
                            'visibility' => 'on'
                        )
                    )
                ),
                (object) array(
                    'featureType' => 'poi',
                    'stylers' => array(
                        (object) array(
                            'visibility' => 'off'
                        ),
                        (object) array(
                            'saturation' => '-100'
                        )
                    )
                ),
                (object) array(
                    'featureType' => 'landscape.man_made',
                    'stylers' => array(
                        (object) array(
                            'saturation' => '-100'
                        )
                    )
                ),
           
            )
        )
    ));
}

?>

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

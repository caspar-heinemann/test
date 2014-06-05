<?php
/**
* Default Footer
*
* @author Nina Taberski-Besserdich (nina.taberski@besserdich.com)
* @package WordPress
* @subpackage BIC Bootstrap Wordpress Theme
*/
?>
<!-- Section 3 Content-->
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
                <div id="recentApp1" class="col-md-4 col-sm-6 col-xs-12">
                  <?php
                    $args = array( 'posts_per_page' => 1,'offset' => 0, 'category_name' => 'Recent Apps', );
                    $myposts = get_posts( $args );
                    foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
                      <div class="col-md-6 col-sm-1 col-xs-4 recentAppIcon">
                        <a href="<?php the_permalink(); ?>">
                          <?php the_post_thumbnail( array(70,70) ); ?>
                        </a>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-8 recentAppHead">
                        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                        <div class="recentAppText"> <?php the_excerpt(); ?> </div>
                      </div>
                    <?php
                      endforeach;
                      wp_reset_postdata();
                    ?>
                </div>

                <div id="recentApp2" class="col-md-4 col-sm-6 col-xs-12">
                  <?php
                  $args = array( 'posts_per_page' => 1,'offset' => 1, 'category_name' => 'Recent Apps', );
                  $myposts = get_posts( $args );
                  foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
                  <div class="col-md-6 col-sm-1 recentAppIcon"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( array(70,70) ); ?></a></div>
                  <div class="col-md-6 col-sm-6 recentAppHead"><h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                    <div class="recentAppText"> <?php the_excerpt(); ?> </div></div>
                  <?php endforeach;
                  wp_reset_postdata();?>

                </div>
                <div id="recentApp3" class="col-md-4 col-sm-6 col-xs-12">
                  <?php
                  $args = array( 'posts_per_page' => 1,'offset' => 2, 'category_name' => 'Recent Apps', );
                  $myposts = get_posts( $args );
                  foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
                  <div class="col-md-6 col-sm-1 recentAppIcon"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( array(70,70) ); ?></a></div>
                  <div class="col-md-6 col-sm-6 recentAppHead"><h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                    <div class="recentAppText"> <?php the_excerpt(); ?> </div></div>
                  <?php endforeach;
                  wp_reset_postdata();?>
                </div>
              </div>
            </div>
            <!-- Slide -->
            <div class="item">
              <div class="row">
                <div id="recentApp4" class="col-md-4 col-sm-6 col-xs-12"> <?php
                  $args = array( 'posts_per_page' => 1,'offset' => 3, 'category_name' => 'Recent Apps', );
                  $myposts = get_posts( $args );
                  foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
                  <div class="col-md-6 col-sm-1 col-xs-4 recentAppIcon"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( array(70,70) ); ?></a></div>
                  <div class="col-md-6 col-sm-6 col-xs-8 recentAppHead"><h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                    <div class="recentAppText"> <?php the_excerpt(); ?> </div></div>
                  <?php endforeach;
                  wp_reset_postdata();?>

                </div>
                <div id="recentApp5" class="col-md-4 col-sm-6 col-xs-12"> <?php
                  $args = array( 'posts_per_page' => 1,'offset' => 4, 'category_name' => 'Recent Apps', );
                  $myposts = get_posts( $args );
                  foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
                  <div class="col-md-6 col-sm-1 recentAppIcon"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( array(70,70) ); ?></a></div>
                  <div class="col-md-6 col-sm-6 recentAppHead"><h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                    <div class="recentAppText"> <?php the_excerpt(); ?> </div></div>
                  <?php endforeach;
                  wp_reset_postdata();?>

                </div>
                <div id="recentApp6" class="col-md-4 col-sm-6 col-xs-12"> <?php
                  $args = array( 'posts_per_page' => 1,'offset' => 5, 'category_name' => 'Recent Apps', );
                  $myposts = get_posts( $args );
                  foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
                  <div class="col-md-6 col-sm-1 recentAppIcon"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( array(70,70) ); ?></a></div>
                  <div class="col-md-6 col-sm-6 recentAppHead"><h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                    <div class="recentAppText"> <?php the_excerpt(); ?> </div></div>
                  <?php endforeach;
                  wp_reset_postdata();?>

                </div>
              </div>
            </div>
            <!-- Slide -->
            <div class="item">
              <div class="row center-block">
                <div id="recentApp7" class="col-md-4 col-sm-6 col-xs-12"> <?php
                  $args = array( 'posts_per_page' => 1,'offset' => 3, 'category_name' => 'Recent Apps', );
                  $myposts = get_posts( $args );
                  foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
                  <div class="col-md-6 col-sm-1 col-xs-4 recentAppIcon"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( array(70,70) ); ?></a></div>
                  <div class="col-md-6 col-sm-6 col-xs-8 recentAppHead"><h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                    <div class="recentAppText"> <?php the_excerpt(); ?> </div></div>
                  <?php endforeach;
                  wp_reset_postdata();?>

                </div>
                <div id="recentApp8" class="col-md-4 col-sm-6 col-xs-12"> <?php
                  $args = array( 'posts_per_page' => 1,'offset' => 4, 'category_name' => 'Recent Apps', );
                  $myposts = get_posts( $args );
                  foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
                  <div class="col-md-6 col-sm-1 recentAppIcon"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( array(70,70) ); ?></a></div>
                  <div class="col-md-6 col-sm-6 recentAppHead"><h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                    <div class="recentAppText"> <?php the_excerpt(); ?> </div></div>
                  <?php endforeach;
                  wp_reset_postdata();?>

                </div>
                <div id="recentApp9" class="col-md-4 col-sm-6 col-xs-12"> <?php
                  $args = array( 'posts_per_page' => 1,'offset' => 5, 'category_name' => 'Recent Apps', );
                  $myposts = get_posts( $args );
                  foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
                  <div class="col-md-6 col-sm-1 recentAppIcon"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( array(70,70) ); ?></a></div>
                  <div class="col-md-6 col-sm-6 recentAppHead"><h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                    <div class="recentAppText"> <?php the_excerpt(); ?> </div></div>
                  <?php endforeach;
                  wp_reset_postdata();?>

                </div>
              </div>

            </div>
          </div>
          <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev"> </a> <a class="right carousel-control" href=	"#carousel-example-generic" data-slide="next"> </a>
        </div>
      </div>
      </div>
    </div>
  </section>

  <footer>
    <div class="footer-wrapper">
      <div class="container">
        <?php get_sidebar('footer'); ?>
      </div>

    </div>

    <div class="row copyright-wrapper">
      <div class="container">

        <div class="row copyright">
          <div class="col-md-12"><a href="#top"><div id="toTop"></div></a>


            <div class="pull-left">
              <?php
              $options = get_option('bicbswp_theme_options');
              if ($options['footertext'] != '') {
              echo ('<p>');
              echo stripslashes($options['footertext']);
              echo ('</p>');
              } else {
              ?>
              <ul class="credit">
                <li>&copy; <?php echo date('Y'); ?> <?php bloginfo(); ?></li>

              </ul><!-- end .credit -->
              <?php } ?>

            </div>

            <div class="pull-right">

              <?php



              if ( has_nav_menu( 'footer-menu' ) ) {

              wp_nav_menu(array(
              'menu' => '',
              'theme_location' => 'footer-menu',
              'depth' => 2,
              'container' => false,
              'menu_class' => 'footer-menu',
              'fallback_cb' => 'wp_page_menu',
              'walker' => new wp_bootstrap_navwalker())
              );

              }
              ?>

            </div>

          </div>
        </div>
      </div>

    </div>
</footer>


 <script src="http://code.jquery.com/jquery-1.8.0.min.js"></script>


<?php wp_footer(); ?>


</body>
</html>

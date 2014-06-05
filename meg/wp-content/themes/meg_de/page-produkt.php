<?php
/**
 * Template Name: PRODUKT
 * Description: Page template with a full width content container.
 *
 * @author Caspar Heinemann (mobileeventguide.com)
 * @package WordPress
 * @subpackage Bootstrap Wordpress Theme
 */
?>

<?php get_header(); ?>


<!-- Section 1 -->
<section id="produkt" data-speed="4" data-type="background">
    <div class="container Head">

        <h1><?php the_title(); ?></h1>

    </div>
</section>
<!-- Section Swipe Product Mobile -->

<section id="swipeMobileProd">

    <div id="carousel">
        <ul>
            <li class="pane1">
           <div class="accProd">

            <img src='http://staging.mobileeventguide.de/wp-content/themes/meg_de/images/2x/product/iphone-screen1.jpg' style="width:80%; height:80%;" class="center img-responsive">
          </li>

            <li class="pane2">
            <div class="accProd">

           <img src='http://staging.mobileeventguide.de/wp-content/themes/meg_de/images/2x/product/iphone-screen2.jpg' style="width:80%; height:80%;" class="center img-responsive">
            </li>

            <li class="pane3">
             <div class="accProd">

           <img src='http://staging.mobileeventguide.de/wp-content/themes/meg_de/images/2x/product/iphone-screen3.jpg' style="width:80%; height:80%;" class="center img-responsive">
            </li>

            <li class="pane4">
             <div class="accProd">

           <img src='http://staging.mobileeventguide.de/wp-content/themes/meg_de/images/2x/product/iphone-screen4.jpg' style="width:80%; height:80%;" class="center img-responsive">
            </li>

            <li class="pane5">
            <div class="accProd">

           <img src='http://staging.mobileeventguide.de/wp-content/themes/meg_de/images/2x/product/iphone-screen5.jpg' style="width:80%; height:80%;" class="center img-responsive">
            </li>

            <li class="pane6">
             <div class="accProd">

           <img src='http://staging.mobileeventguide.de/wp-content/themes/meg_de/images/2x/product/iphone-screen6.jpg' style="width:80%; height:80%;" class="center img-responsive">
            </li>

            <li class="pane7">
              <div class="accProd">

           <img src='http://staging.mobileeventguide.de/wp-content/themes/meg_de/images/2x/product/iphone-screen7.jpg' style="width:80%; height:80%;" class="center img-responsive">
            </li>

        </ul>
    </div>

  </section>


 <!--scripts here-->
    <script>

    /**
    * super simple carousel
    * animation between panes happens with css transitions
    */
    function Carousel(element)
    {
        var self = this;
        element = $(element);

        var container = $(">ul", element);
        var panes = $(">ul>li", element);

        var pane_width = 0;
        var pane_count = panes.length;

        var current_pane = 0;


        /**
         * initial
         */
        this.init = function() {
            setPaneDimensions();

            $(window).on("load resize orientationchange", function() {
                setPaneDimensions();
            })
        };


        /**
         * set the pane dimensions and scale the container
         */
        function setPaneDimensions() {
            pane_width = element.width();
            panes.each(function() {
                $(this).width(pane_width);
            });
            container.width(pane_width*pane_count);
        };


        /**
         * show pane by index
         */
        this.showPane = function(index, animate) {
            // between the bounds
            index = Math.max(0, Math.min(index, pane_count-1));
            current_pane = index;

            var offset = -((100/pane_count)*current_pane);
            setContainerOffset(offset, animate);
        };


        function setContainerOffset(percent, animate) {
            container.removeClass("animate");

            if(animate) {
                container.addClass("animate");
            }

            if(Modernizr.csstransforms3d) {
                container.css("transform", "translate3d("+ percent +"%,0,0) scale3d(1,1,1)");
            }
            else if(Modernizr.csstransforms) {
                container.css("transform", "translate("+ percent +"%,0)");
            }
            else {
                var px = ((pane_width*pane_count) / 100) * percent;
                container.css("left", px+"px");
            }
        }

        this.next = function() { return this.showPane(current_pane+1, true); };
        this.prev = function() { return this.showPane(current_pane-1, true); };


        function handleHammer(ev) {
            console.log(ev);
            // disable browser scrolling
            ev.gesture.preventDefault();

            switch(ev.type) {
                case 'dragright':
                case 'dragleft':
                    // stick to the finger
                    var pane_offset = -(100/pane_count)*current_pane;
                    var drag_offset = ((100/pane_width)*ev.gesture.deltaX) / pane_count;

                    // slow down at the first and last pane
                    if((current_pane == 0 && ev.gesture.direction == "right") ||
                        (current_pane == pane_count-1 && ev.gesture.direction == "left")) {
                        drag_offset *= .4;
                    }

                    setContainerOffset(drag_offset + pane_offset);
                    break;

                case 'swipeleft':
                    self.next();
                    ev.gesture.stopDetect();
                    break;

                case 'swiperight':
                    self.prev();
                    ev.gesture.stopDetect();
                    break;

                case 'release':
                    // more then 50% moved, navigate
                    if(Math.abs(ev.gesture.deltaX) > pane_width/2) {
                        if(ev.gesture.direction == 'right') {
                            self.prev();
                        } else {
                            self.next();
                        }
                    }
                    else {
                        self.showPane(current_pane, true);
                    }
                    break;
            }
        }

        new Hammer(element[0], { drag_lock_to_axis: true }).on("release dragleft dragright swipeleft swiperight", handleHammer);
    }

    var carousel = new Carousel("#carousel");
    carousel.init();


	var nexthammertime = Hammer('.right').on("tap", function (event) {
  console.log(event);
  var nextCarousel = new Carousel("#carousel");
  nextCarousel.init();
  nextCarousel.showPane(1);
});

    </script>



</body>
</html>



</div>



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
<!-- /.col-lg-12 /.col-md-12 /col-sm-12 /.col-12 -->

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

   <a href="<?php echo get_site_url(); ?>/uber-uns/company/" class="buttonFooter">Company</a><a href="<?php echo get_site_url(); ?>/referenzen" class="buttonFooter">Referenzen</a><a href="<?php echo get_site_url(); ?>/kontakt" class="buttonFooter">Kontakt</a>


    </div></div>
</section>


</div>

<?php get_footer(); ?>

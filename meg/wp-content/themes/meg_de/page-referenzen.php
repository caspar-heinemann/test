<?php
/**
 * Template Name: REFERENZEN
 * Description: Page template with a full width content container.
 *
 * @author Nina Taberski-Besserdich (nina.taberski@besserdich.com)
 * @package WordPress
 * @subpackage BIC Bootstrap Wordpress Theme
 */
?>
<?php get_header(); ?>

<!-- Section 1 -->
<section id="referenzen" data-speed="4" data-type="background">
  <div class="container Head">
      <h1><?php the_title(); ?></h1>
  </div>
</section>
<!-- Section 2 -->
<div class="clientNav">
  <ul>
    <li><a href="#messe-app"><div id="messeNav">Messe-App</div></a></li>
    <li><a href="#konferenz-app"><div id="konferenzNav">Konferenz-App</div></a></li>
    <li><a href="#meeting-app"><div id="meetingNav">Meeting-App</div></a></li>
  </ul>
</div>

<!-- Section Content -->
 <div class="container" id="referenzen-page">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <div class="content">
                        <article class="post" id="post-<?php the_ID(); ?>">
                            <p><?php echo the_content(); ?></p>
                        </article>
                    </div> <!-- /.content -->
                </div> <!-- /.col-lg-12 /.col-md-12 /col-sm-12 /.col-12 -->
<!-- Section 3 -->
            <?php endwhile;
        else: ?>
            <p><?php _e('Diese Seite gibt es nicht :('); ?></p>
<?php endif; ?>

    </div> <!-- /.container -->


 <!-- Section 2 -->
<section id="referenzen1" data-speed="5" data-type="background">
    <div class="container">
    <div class="weiterHead">Mehr erfahren unter</div><br>
    <div class="col-md-12 weiterButtons">

   <a href="<?php echo get_site_url(); ?>" class="buttonFooter">Home</a><a href="<?php echo get_site_url(); ?>/produkt" class="buttonFooter">Produkt</a><a href="<?php echo get_site_url(); ?>/kontakt" class="buttonFooter">Kontakt</a>


    </div></div>
</section>
</div>

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

<?php get_footer(); ?>



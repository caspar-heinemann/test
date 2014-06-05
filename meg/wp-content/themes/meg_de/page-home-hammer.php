<?php
/**
 * Template Name: HOME-HAMMER
 * Description: Page template with a full width content container.
 *
 * @author Caspar Heinemann (mobileeventguide.com)
 * @package WordPress 
 * @subpackage Bootstrap Wordpress Theme
 */
?>
<?php get_header(); ?>

<html>
<head>
    <title>Hammer.js</title>
  
    <style>

       

        #carousel {

            background: silver;
            overflow: hidden;
            width: 100%;
            -webkit-backface-visibility: hidden;
            -webkit-transform: translate3d(0,0,0) scale3d(1,1,1);
            -webkit-transform-style: preserve-3d;
        }

        #carousel ul.animate {
            -webkit-transition: all .3s;
            -moz-transition: all .3s;
            -o-transition: all .3s;
            transition: all .3s;
        }

        #carousel ul {
            -webkit-transform: translate3d(0%,0,0) scale3d(1,1,1);
            -moz-transform: translate3d(0%,0,0) scale3d(1,1,1);
            -ms-transform: translate3d(0%,0,0) scale3d(1,1,1);
            -o-transform: translate3d(0%,0,0) scale3d(1,1,1);
            transform: translate3d(0%,0,0) scale3d(1,1,1);
            overflow: hidden;
            -webkit-backface-visibility: hidden;
            -webkit-transform-style: preserve-3d;
        }

        #carousel ul {
            -webkit-box-shadow: 0 0 20px rgba(0,0,0,.2);
            box-shadow: 0 0 20px rgba(0,0,0,.2);
            position: relative;
        }

        #carousel li {
            float: left;
            overflow: hidden;
            -webkit-transform-style: preserve-3d;
            -webkit-transform: translate3d(0,0,0);
        }

        #carousel li h2 {
            color: #fff;
           font-size:22px;
            text-align: center;
            position: absolute;
            top: 40%;
            left: 0;
            width: 100%;
            text-shadow: -1px -1px 0 rgba(0,0,0,.2);
        }

        #carousel2 li.pane1 { background: #42d692; }
        #carousel2 li.pane2 { background: #4986e7; }
        #carousel2 li.pane3 { background: #d06b64; }
        #carousel2 li.pane4 { background: #cd74e6; }
        #carousel2 li.pane5 { background: #9fe1e7; }

    </style>
</head>

<body>

    <div id="carousel">
        <ul>
            <li class="pane1"><a href="#kontakt"><h2>Swipe...</h2></a></li>
            <li class="pane2"><h2>...or drag...</h2></li>
            <li class="pane3"><h2>...or swipe...</h2></li>
            <li class="pane4"><h2>..or drag...</h2></li>
            <li class="pane5"><h2>Dit is het einde!</h2></li>
        </ul>
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

    </script>

    <script src="/megwebsite-de/wp-content/themes/meg_de/bootstrap/js/ga.js"></script>

</body>
</html>

<!-- Section 1 -->

<section id="hero">
<div class="container">
  <div class="row">
    <div itemscope itemtype="http://schema.org/SoftwareApplication" class="col-xs-12 col-sm-6 col-md-4 col-md-offset-2">
      <div class="heroPhone transition_margin_1_5_seconds">
        <meta itemprop="image" content="http://staging.mobileeventguide.de/wp-content/themes/meg_de/images/product/phone-white1.png">
      </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-5">
      <div class="heroText headline transition_margin_right_1_5_seconds transition_opac_0_5_seconds">
        <h2>Die smarte App für Ihr Event</h2>
        <h4>Marktführer in Deutschland mit über 180 Events</h4>
        <h4>Größter Funktionsumfang mit intuitivem Design</h4>
        <h4>Umfassendes und erfolgreiches Projektmanagement</h4>
        <div id="heroBtn"> <a href="http://staging.mobileeventguide.de/index.php/kontakt/" class="buttonHero">Kontaktieren Sie uns</a> </div>
      </div>
      <div class="col-xs-6 col-sm-3"> </div>
      <div class="col-xs-6 col-sm-3"> </div>
    </div>
  </div>
  </section>
  <!-- Section 2 -->
  <section id="sectionLogosHome"><a href="#umsatzquellen">
    <div class="center" id="homeArrow1"></div>
    </a>
    <div class="container">
      <div class="row">
        <div id="carousel-1" class="carousel slide"> 
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#carousel-tmb1" data-slide-to="1" class="active"></li>
            <li data-target="#carousel-tmb2" data-slide-to="1"></li>
            <li data-target="#carousel-tmb3" data-slide-to="2"></li>
          </ol>
          
          <!-- Wrapper for slides -->
          <div class="carousel-inner center"> 
            <!-- Slide -->
            <div class="item active">
              <div class="row">
                <div id="logo1" class="col-sm-2 col-xs-4 center-block img-responsive"> 
                <img src="../wp-content/themes/meg_de/images/logos/tmobile.png" alt="logo-t-mobile" class="img-responsive"/></div>
                <div id="logo2" class="col-sm-2 col-xs-4 center-block img-responsive"> 
                <img src="../wp-content/themes/meg_de/images/logos/montgomery.png" alt="logo-montgomery"  class="img-responsive"/></div>
                <div id="logo3" class="col-sm-2 col-xs-4 center-block img-responsive"> 
                <img src="../wp-content/themes/meg_de/images/logos/ngn.png" alt="logo-ngn"  class="img-responsive"/></div>
                <div id="logo4" class="col-sm-2 col-xs-4 center-block img-responsive"> 
                <img src="../wp-content/themes/meg_de/images/logos/ubm.png" alt="logo-ubm" class="img-responsive"/></div>
                <div id="logo5" class="col-sm-2 col-xs-4 center-block img-responsive"> 
                <img src="../wp-content/themes/meg_de/images/logos/bayer.png" alt="logo-bayer"  class="img-responsive"/></div>
                <div id="logo6" class="col-sm-2 col-xs-4 center-block img-responsive"> 
                <img src="../wp-content/themes/meg_de/images/logos/tmobile.png" alt="logo-t-mobile"  class="img-responsive"/></div>
              </div>
            </div>
            <!-- Slide -->
            <div class="item">
              <div class="row">
                <div id="logo7" class="col-sm-2 col-xs-4 center-block"> 
                <img src="../wp-content/themes/meg_de/images/logos/tmobile.png" alt="logo-t-mobile" class="img-responsive"/></div>
                <div id="logo8" class="col-sm-2 col-xs-4 center-block"> 
                <img src="../wp-content/themes/meg_de/images/logos/montgomery.png" alt="logo-montgomery"  class="img-responsive"/></div>
                <div id="logo9" class="col-sm-2 col-xs-4 center-block"> 
                <img src="../wp-content/themes/meg_de/images/logos/ngn.png" alt="logo-ngn"  class="img-responsive"/></div>
                <div id="logo10" class="col-sm-2 col-xs-4 center-block"> 
                <img src="../wp-content/themes/meg_de/images/logos/ubm.png" alt="logo-ubm" class="img-responsive"/></div>
                <div id="logo11" class="col-sm-2 col-xs-4 center-block"> 
                <img src="../wp-content/themes/meg_de/images/logos/bayer.png" alt="logo-bayer"  class="img-responsive"/></div>
                <div id="logo12" class="col-sm-2 col-xs-4 center-block"> 
                <img src="../wp-content/themes/meg_de/images/logos/tmobile.png" alt="logo-bayer"  class="img-responsive"/></div>
              </div>
            </div>
            <!-- Slide -->
            <div class="item">
              <div class="row">
                <div id="logo13" class="col-sm-2 col-xs-4 center-block"> 
                <img src="../wp-content/themes/meg_de/images/logos/tmobile.png" alt="logo-bayer"  class="img-responsive"/></div>
                <div id="logo14" class="col-sm-2 col-xs-4 center-block"> 
                <img src="../wp-content/themes/meg_de/images/logos/montgomery.png" alt="logo-bayer"  class="img-responsive"/></div>
                <div id="logo15" class="col-sm-2 col-xs-4 center-block"> 
                <img src="../wp-content/themes/meg_de/images/logos/ngn.png" alt="logo-bayer"  class="img-responsive"/></div>
                <div id="logo16" class="col-sm-2 col-xs-4 center-block"> 
                <img src="../wp-content/themes/meg_de/images/logos/ubm.png" alt="logo-bayer"  class="img-responsive"/></div>
                <div id="logo17" class="col-sm-2 col-xs-4 center-block"> 
                <img src="../wp-content/themes/meg_de/images/logos/bayer.png" alt="logo-bayer"  class="img-responsive"/></div>
                <div id="logo18" class="col-sm-2 col-xs-4 center-block"> 
                <img src="../wp-content/themes/meg_de/images/logos/tmobile.png" alt="logo-bayer"  class="img-responsive"/></div>
              </div>
            </div>
          </div>
          <!---recent app container---> 
          <!-- Controls
                <a class="left carousel-control" href="#carousel-example-generic3" data-slide="prev">  </a> <a class="right carousel-control" href="#carousel-example-generic3" data-slide="next">  </a> --> 
        </div>
      </div>
    </div>
  </section>
  <!-- END of Section 3 Content --> 
  
  <!-- Section 3 Content -->
  <div class="container">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="content">
      <article class="post" id="post-<?php the_ID(); ?>">
        <p><?php echo the_content(); ?></p>
      </article>
    </div>
    <!-- /.content --> 
  </div>
  <!-- /.col-lg-12 /.col-md-12 /col-sm-12 /.col-12 -->
  
  <?php endwhile;
        else: ?>
  <p>
    <?php _e('Diese Seite gibt es nicht :('); ?>
  </p>
  <?php endif; ?>
</div>
<!-- /.container --> 

<!-- Section 2 -->
<section id="home2" data-speed="5" data-type="background">
  <div class="container">
    <div class="weiterHead">Mehr erfahren unter</div>
    <br>
    <div class="col-md-8 weiterButtons"> <a href="<?php echo get_site_url(); ?>/produkt" class="buttonFooter">Produkt</a><a href="<?php echo get_site_url(); ?>/referenzen" class="buttonFooter">Referenzen</a><a href="<?php echo get_site_url(); ?>/index.php/kontakt" class="buttonFooter">Kontakt</a> </div>
  </div>
</section>
</div>
<?php get_footer(); ?>


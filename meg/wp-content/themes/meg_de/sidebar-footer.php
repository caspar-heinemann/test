<?php
/**
 * The Sidebar for Footer.
 *
 * @author Nina Taberski-Besserdich (nina.taberski@besserdich.com)
 * @package WordPress
 * @subpackage BIC Bootstrap Wordpress Theme
 */
?>

 
     
        <div class="row footer">
            <div class="col-md-2 col-sm-4 col-xs-6">
                <?php
                if (function_exists('dynamic_sidebar')) {
                    dynamic_sidebar("footer-column-1");
                }
                ?>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 ">
                <?php
                if (function_exists('dynamic_sidebar')) {
                    dynamic_sidebar("footer-column-2");
                }
                ?>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-11">
                <?php
                if (function_exists('dynamic_sidebar')) {
                    dynamic_sidebar("footer-column-3");
                }
                ?>
            </div>
             <div class="col-md-5 col-sm-12 col-xs-12">
                <?php
                if (function_exists('dynamic_sidebar')) {
                    dynamic_sidebar("footer-column-4");
                }
                ?>
            </div>
            
        </div>   
    
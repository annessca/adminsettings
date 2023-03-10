<?php 

/* Template Name: Homepage */

/**
 * The template for displaying all a customised homepage
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package OG_Custom
 */

get_header();
?>


        <div class="layer-622-holder">
            <div class="copy-intro">
                <p class="breadcrumb-text">Home / Who we are / <strong class="text-style">Contact</strong></p>
                <h2 class="contact">Contact</h2>
                <?php
                if ( have_posts() ) : while ( have_posts() ) : the_post();

                    the_content();

                endwhile; endif;
			    ?>
                
            </div>

            <br><br>

            <div class="container">
                <div class="row input-container">
                    <div class="double">
                        <h4>Contact Us</h4>
                        <div class="demarker"></div>
                        <div class="col-xs-12">
                            <div class="styled-input wide">
                                <input type="text" required />
                                <label>Name</label>
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <div class="styled-input">
                                <input type="text" required />
                                <label>Email</label>
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <div class="styled-input" style="float:right">
                                <input type="text" required />
                                <label>Phone</label>
                            </div>
                        </div> 
                        <div class="col-xs-12">
                            <div class="styled-input wide">
                                <textarea required></textarea>
                                <label>Message</label>
                            </div>
                        </div> 
                        <div class="col-xs-12" >
                            <div class="btn-lrg submit-btn">SUBMIT</div>
                        </div>
                        <!-- Replace the HTML form with a contact form shortcode as indicated below. -->
                        <?php //echo apply_shortcodes( '[wpforms id="24" title="false"]"]' ); ?>
                    </div>
                    <div class="double">
                        <h4>Reach Us</h4>
                        <div class="demarker"></div> 
                        <p>Ogunlabs Skills Test</p><br>
                        <p><?php echo get_option('address'); ?></p><br>
                        <p>Phone: <?php echo get_option('telephone'); ?></p><br>
                        <p>Fax: <?php echo get_option('fax'); ?></p><br><br>
                        <a href="<?php echo get_option('facebook'); ?>" class="fa fa-facebook" target="blank"></a>
                        <a href="<?php echo get_option('twitter'); ?>" class="fa fa-twitter" target="blank"></a>
                        <a href="<?php echo get_option('linkedin'); ?>" class="fa fa-linkedin" target="blank"></a>
                        <a href="<?php echo get_option('pinterest'); ?>" class="fa fa-pinterest" target="blank"></a>
                    </div>
                    
                </div>
            </div>  
        </div>

<?php
get_footer();
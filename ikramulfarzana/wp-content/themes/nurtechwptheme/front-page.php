<?php get_header(); ?>

<section  class="home-banner">
    <?php echo do_shortcode( '[visitslider]' ); ?>
</section>

<section class="homefeature-section">
    <div class="homefeature-section-inner widget-snippet">
        <div class="row">
            <div class="col-md-8">
                <h2>What We <span>Support</span> </h2>
                <div class="service-list">
                    <div  class="service-list-item">
                    <div class="service-list-item-picture">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/support-1.jpg" alt="support" />
                     </div>
                    <a href="<?php echo home_url( '/educational-support' ); ?>"><span class="service-number">01</span>Educational Support</a>
                    </div>
                    <div  class="service-list-item">
                    <div class="service-list-item-picture">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/support-2.jpg" alt="support" />
                     </div>
                    <a href="<?php echo home_url( '/hungers-support' ); ?>"><span class="service-number">02</span>Hunger Support</a>
                    </div>

                    <div  class="service-list-item">
                    <div class="service-list-item-picture">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/support-3.jpg" alt="support" />
                     </div>
                    <a href="<?php echo home_url( '/medical-support' ); ?>"><span class="service-number">03</span>Medical Support </a>
                    </div>

                    <div  class="service-list-item">
                    <div class="service-list-item-picture">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/support-4.jpg" alt="support" />
                     </div>
                    <a href="<?php echo home_url( '/digester-support' ); ?>"><span class="service-number">04</span>Digester Support</a>
                    </div>

                    <div  class="service-list-item">
                    <div class="service-list-item-picture">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/support-5.jpg" alt="support" />
                     </div>
                    <a href="<?php echo home_url( '/poverty-alleviation' ); ?>"><span class="service-number">05</span>Poverty Support </a>
                    </div>
                    <div  class="service-list-item">
                    <div class="service-list-item-picture">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/support-6.jpg" alt="support" />
                     </div>
                    <a href="<?php echo home_url( '/poverty-alleviation' ); ?>"><span class="service-number">06</span>Poverty Support </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="time-line-section">
                    <div class="time-heading">
                        <h2>
                        <span>Upcoming<span> 
                        <span  class="time-heading-first-text">Events </span>
                        <a href="<?php echo home_url( '/blog' ); ?>">View All</a>	
                        </h2>
                    </div>
                    <?php echo latest_newspost(); ?>
                </div>
            </div>
        </div>
    </div>
</section>



 


<?php get_footer();

<div class="footer-custom-section">
			<div class="footer-custom-contentbody">
					<div class="extra-footer-widget extra-footer-firstpart">
                    	<?php dynamic_sidebar( 'footerwidgetone' ); ?>
						<div class="social-link">
	<a target="_blank" href="">
    <img src="<?php echo get_template_directory_uri(); ?>/images/facebook-icon.png" alt="social" />
    </a>
	<a target="_blank" href="">
    <img src="<?php echo get_template_directory_uri(); ?>/images/twitter-icon.png" alt="social" />
    </a>
	<a target="_blank" href="">
    <img src="<?php echo get_template_directory_uri(); ?>/images/linkedin-icon.png" alt="social" />
    </a>
	<a target="_blank" href="">
    <img src="<?php echo get_template_directory_uri(); ?>/images/youtube-icon.png" alt="social" />
    </a>
 </div>	
                    </div>
                	<div class="extra-footer-widget extra-footer-secondpart">
                    	<?php dynamic_sidebar( 'footerwidgetwo' ); ?>
                    </div>
                	<div class="extra-footer-widget extra-footer-thirdpart">
                    	<?php dynamic_sidebar( 'footerwidgethree' ); ?>
                    </div>
                	<div class="extra-footer-widget extra-footer-fourpart">
                    	<div class="join-group"><?php dynamic_sidebar( 'footerwidgefour' ); ?></div>
                    </div>	
			</div>
			<div class="website-copyright-text">
				<p>Website Develop By <a href="https://nurtech.co/" target="_blank">NURTECH</a></p>
			</div>


		</div> 


<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.bxslider.js"></script>
<link href="<?php echo get_template_directory_uri(); ?>/css/jquery.bxslider.css" rel="stylesheet" />
<script src="<?php echo get_template_directory_uri(); ?>/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script>
<?php wp_footer(); ?>
</body>
</html>

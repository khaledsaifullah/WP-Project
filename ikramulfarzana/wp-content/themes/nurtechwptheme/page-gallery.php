<?php get_header(); ?>
<section class="inner-section">
	<div class="inner-content-body">
        <header class="entry-header-page">
			<h2>Gallery</h2>
 		</header>
        <div class="entry-content">        
			<?php echo do_shortcode( '[gallery]' ); ?>
        </div>
 	</div>
 </section>
<?php get_footer();?>

   

    <!-- Arquivos utilizados pelo jQuery lightBox plugin -->
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/gallery/js/jquery.js"></script>

		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/gallery/js/jquery.lightbox-0.5.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/gallery/css/jquery.lightbox-0.5.css" media="screen" />
    <script type="text/javascript">
 	jQuery(document).ready(function($){
	 	jQuery.noConflict();
		jQuery('#gallery a').lightBox();
		
	});
     </script>

<style type="text/css">
@media screen and (max-width:767px) {
#lightbox-container-image-data-box{
		width:95% !important;	
	}
#lightbox-secNav-btnClose {
    position: absolute;
    right: 10px;
    bottom: 3px;
	border:1px solid #fff;
	z-index:999;
}
#lightbox-nav-btnPrev, #lightbox-nav-btnNext {
    width: 50px !important;
    height: 100% !important;
    display: block !important;
    transform: translateY(35%);
}
#lightbox-nav-btnNext{
	background:url("<?php echo get_template_directory_uri(); ?>/gallery/images/lightbox-btn-next.gif") no-repeat !important;	
}
#lightbox-nav-btnPrev{
	background:url("<?php echo get_template_directory_uri(); ?>/gallery/images/lightbox-btn-prev.gif") no-repeat !important;	
} 

}
</style>

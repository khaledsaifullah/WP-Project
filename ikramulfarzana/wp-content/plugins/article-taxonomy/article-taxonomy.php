<?php
/*
Plugin Name: Article Taxonomy
Plugin URI: http://nurtech.co/
Description: Article Taxonomy
Version: 1.0
Author: Nurtech
Author URI: http://nurtech.co/
*/

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

if (!class_exists("Articles")) {

	class Articles
	{

		/**
		 * Constructor. Called when plugin is initialised
		 */
		function __construct()
		{
			// Disable display of errors and warnings
			@define('WP_DEBUG_DISPLAY', true);
			@ini_set('display_errors',1);

			add_action('init', array($this, 'init_taxonomy'));
		}

		function init_taxonomy() {
			//Services Section
			$args = array(
				'labels' => array(
					'name' => __('Services'),
					'singular_name' => __('Services')
				),
				'public' => true,
				'publicly_queryable' => true,
				'show_ui' => true,
				'query_var' => true,
				'capability_type' => 'post',
				'hierarchical' => true,
				'menu_position' => null,
				'supports' => array('title', 'editor', 'thumbnail', 'page-attributes','excerpt'),
				'rewrite' => array(
					'slug' => 'services',
					'with_front' => false
				),
				//'has_archive' => 'gallery'
			);

			register_post_type('services', $args);

			//Gallery Section
			$args = array(
				'labels' => array(
					'name' => __('Gallery'),
					'singular_name' => __('Gallery')
				),
				'public' => true,
				'publicly_queryable' => true,
				'show_ui' => true,
				'query_var' => true,
				'capability_type' => 'post',
				'hierarchical' => true,
				'menu_position' => null,
				'supports' => array('title', 'editor', 'thumbnail', 'page-attributes','excerpt'),
				'rewrite' => array(
					'slug' => 'gallery',
					'with_front' => false
				),
				//'has_archive' => 'gallery'
			);

			register_post_type('gallery', $args);


			//Visit Our Hospital Section
			$args = array(
				'labels' => array(
					'name' => __('Visitslider'),
					'singular_name' => __('Visitslider')
				),
				'public' => true,
				'publicly_queryable' => true,
				'show_ui' => true,
				'query_var' => true,
				'capability_type' => 'post',
				'hierarchical' => true,
				'menu_position' => null,
				'supports' => array('title', 'editor', 'thumbnail', 'page-attributes','excerpt'),
				'rewrite' => array(
					'slug' => 'visitslider',
					'with_front' => false
				),
				//'has_archive' => 'visitslider'
			);

			register_post_type('visitslider', $args);



			//logo Section
			$args = array(
				'labels' => array(
					'name' => __('Logo'),
					'singular_name' => __('Logo')
				),
				'public' => true,
				'publicly_queryable' => true,
				'show_ui' => true,
				'query_var' => true,
				'capability_type' => 'post',
				'hierarchical' => true,
				'menu_position' => null,
				'supports' => array('title', 'editor', 'thumbnail', 'page-attributes','excerpt'),
				'rewrite' => array(
					'slug' => 'logo',
					'with_front' => false
				),
				'has_archive' => 'logo'
			);

			register_post_type('logo', $args);

			
			flush_rewrite_rules();
		}


		function getPostsByType($post_type){

			$posts = get_posts(array(
					'numberposts' => 50,
					'order' => 'asc',
					'orderby' => 'menu_order',
				    'post_status'      => 'publish',
					'post_type' => $post_type,
					'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1 ),
				)
			);

			return $posts;
		}
 

		//services Section
		public  static  function getServices(){
			$items = get_posts(array(
				'order' => 'asc',
				'orderby' => 'menu_order',
				'post_type' => 'services',
				'post_status'      => 'publish',
				'numberposts'	   =>-1,
				'offset'         => 0,
			));
			$html = '';
			if(sizeof($items)>0){
					$html .= '<div   class="buttons-tab">';
					$count=0;
					foreach ($items as $item) {
						$html .= '<button class="btntab" value="'.$count.'">'.$item->post_title.'</button>';
						$count++;
					}
				    $html .= '</div>';

					$html .= '<div   class="text-tab-content">';
					$counttext=0;

					foreach ($items as $item) {
						if($counttext==0){
							$html .= '<div class="text-tab active" value="'.$counttext.'">';
							$html .= '<h5>'.$item->post_title.'</h5>';
							$html .= $item->post_content;
							$html .= '</div>';
						}
						else{
							$html .= '<div class="text-tab" value="'.$counttext.'">';
							$html .= '<h5>'.$item->post_title.'</h5>';
							$html .= $item->post_content;
							$html .= '</div>';
						}
						$counttext++;
					}
				    $html .= '</div>';
			}
			return $html;

		}
 
		//Gallery Section
		public  static  function getGallery(){
			$items = get_posts(array(
				'order' => 'asc',
				'orderby' => 'menu_order',
				'post_type' => 'gallery',
				'post_status'      => 'publish',
				'numberposts'	   =>-1,
				'offset'         => 0,
			));
			$html = '';
			if(sizeof($items)>0){
				$html .= '<div  id="gallery" class="gallery-content">';
					$html .= '<ul class="row">';
					foreach ($items as $item) {
						$featured_img_url = get_the_post_thumbnail_url($item->ID, 'full');
						$title = $item->post_title;
						$html .= '<li class="col-sm-4">';
						$html .= '<a href="'.$featured_img_url.'">';
						$html .= '<img src="'.$featured_img_url.'"  alt="'.$title.'" />';
						$html .= '</a>';
						$html .= '</li>';
					}
				$html .= '</ul>';
			}
			return $html;

		}



		//visitslider Section
		public  static  function getVisitslider(){
			$items = get_posts(array(
				'order' => 'asc',
				'orderby' => 'menu_order',
				'post_type' => 'visitslider',
				'post_status'      => 'publish',
				'numberposts'	   =>-1,
				'offset'         => 0,
			));
			$html = '';
			if(sizeof($items)>0){
				$html .= '<div class="home-slider-content">';
					$html .= '<div class="home-slider">';
					foreach ($items as $item) {
						$featured_img_url = get_the_post_thumbnail_url($item->ID, 'full');
						$title = $item->post_title;
						$html .= '<img src="'.$featured_img_url.'"  alt="'.$title.'" />';
					}
					$html .= '</div>';
				$html .= '</div>';
			}
			return $html;

		}

		 




		//Logo Section
		public  static  function getLogo(){
			$items = get_posts(array(
				'order' => 'asc',
				'orderby' => 'menu_order',
				'post_type' => 'logo',
				'post_status'      => 'publish',
				'numberposts'	   =>-1,
				'offset'         => 0,
			));
			$html = '';
			if(sizeof($items)>0){
				$html .= '<div class="company-logo">';
				$html .='<a href="'.home_url().'">';
				foreach ($items as $item) {
					$featured_img_url = get_the_post_thumbnail_url($item->ID, 'full');
					$title = $item->post_title;
					$html .= '<img src="'.$featured_img_url.'"  alt="'.$title.'" />';
				}
				$html .= '</a></div>';
			}
			return $html;

		}



	}

	$Articles = new Articles();
}


add_shortcode( 'logo', array('Articles', 'getLogo'));
add_shortcode( 'gallery', array('Articles', 'getGallery'));
add_shortcode( 'services', array('Articles', 'getServices'));
add_shortcode( 'visitslider', array('Articles', 'getVisitslider'));




add_filter('widget_text','do_shortcode'); //allow shortcodes in widget



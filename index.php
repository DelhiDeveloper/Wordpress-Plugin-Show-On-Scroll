<?php
/**
 * Plugin Name: Show On Scroll
 * Plugin URI: https://delhideveloper.com/
 * Description: Makes the content elements appear only when these elements are scrolled into view. The plugins requres no configuration or coding. Works right after installation. To learn more about the plugin just visit this page: <a href="http://delhideveloper.com/divi-scroll-reveal-plugin/">How to use "Show On Scroll" Plugin</a>.
 * Version: 0.1.0
 * Author: Delhi Developer
 * Author URI: https://delhideveloper.com/
 *
 */

define( 'DIVI_SCROLL_REVEAL_PLUGIN_URL' , __FILE__ );


/* Securing the plugin from front-end access */
if( !function_exists('add_action') ) {
	echo '<a href="https://delhideveloper.com/">Delhi Developer : A Website Designing Company in Delhi</a>';
	exit;
}



/* Enqueue Function */
function enqueue_css_divi_scroll_reveal_plugin() {

	wp_enqueue_script( 'jquery' );
	
	wp_register_script( 'css_scroll_reveal' , plugins_url( '/assets/js/show-on-scroll.min.js' , DIVI_SCROLL_REVEAL_PLUGIN_URL ) );
	wp_enqueue_script( 'css_scroll_reveal' );
	
	wp_register_script( 'css_effects_scroll_reveal' , plugins_url( '/assets/js/show-on-scroll-effects.js' , DIVI_SCROLL_REVEAL_PLUGIN_URL ) );
	wp_enqueue_script( 'css_effects_scroll_reveal' );
	
}
add_action( 'wp_enqueue_scripts' , 'enqueue_css_divi_scroll_reveal_plugin' );







libxml_use_internal_errors(true);



function show_on_scroll_filter( $html ) {
	
	/* Loading Content String Into A DOM Object */
	$html_dom = new DOMDocument();
	$html_dom->loadHTML( $html );
	
	/* Creating XPATH from the DOM of the Content (Useful in extracting elements by Class Name) */
	$html_xpath = new DOMXpath( $html_dom );
	
	/* Getting Elements By Class Name */
	/* $element_by_class = $content_xpath->query("//*[contains(@class, 'log_in_button')]")->item(0); */
	
	
	$leaf_nodes = $html_xpath->query("//node()[not(node())]");
	foreach( $leaf_nodes as $leaf_node ) {
		$rand = rand(1,4);
		
		$rand = 4;
		switch($rand) {
			case 1 : $effect_class = 'scroll_reveal_top'; break;
			case 2 : $effect_class = 'scroll_reveal_left'; break;
			case 3 : $effect_class = 'scroll_reveal_right'; break;
			case 4 : $effect_class = 'scroll_reveal_bottom'; break;
			default : $effect_class = 'scroll_reveal_bottom'; break;
		}
		 
			
		if( $leaf_node->nodeType == 3 ) { /* If Node is Text */
		
			//Create new wrapper span
			$wrapper = $html_dom->createElement('span');
			
			$wrapper->setAttribute('class',$effect_class);
			$leaf_node->parentNode->replaceChild( $wrapper , $leaf_node );
			$wrapper->appendChild( $leaf_node );
			
		} else if( $leaf_node->nodeType == 1 ) { /* If Node is Element */
			
			$class  = $leaf_node->getAttribute ( 'class' );
			if( $class != '' ) {
				$class .= ' ';
			}
			$class .= $effect_class;
			$leaf_node->setAttribute( 'class', $class );
			
		}
		
	}
	
	$html = $html_dom->saveHTML();
	return $html ;
}

function show_on_scroll_elements ( $hook_name ) {
	add_filter( $hook_name , 'show_on_scroll_filter' );	
}



show_on_scroll_elements( 'the_content' );
show_on_scroll_elements( 'the_title' );
show_on_scroll_elements( 'the_excerpt' );
show_on_scroll_elements( 'comment_text' );











?>
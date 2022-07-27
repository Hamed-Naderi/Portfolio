<?php

/*
  Plugin Name: Kontaktformular-Plugin
  Version: 1.0
  Author: Hamed Naderi
  Author URI: https://hamed-naderi.de/
  Description: Ich habe dieses Kontaktformular-Plugin für mein Portfolio entwickelt
*/

if( ! defined( 'ABSPATH' ) ) exit;

require dirname( __FILE__ ) . '/inc/contact_form_elements.php';

add_shortcode('custom_contact_form', 'contactForm');

function set_html_content_type() {
	return 'text/html';
}
	
function theFormFunction() {
	if(array_key_exists('submit_btn',$_POST)) {
		$to = "info@hamed-naderi.de";
		$subject = "Nachricht von der Website hamed-naderi.de";
		$body = '';
		$body .= 'Name: '.$_POST['full_name'].' <br /> ';
		$body .= 'Email: '.$_POST['email_address'].' <br /> ';
		$body .= 'Geburtsdatum: '.$_POST['date_of_birth']. ' <br /> ';
		$body .= 'Kontinent: '.$_POST['the_Continent']. ' <br /> ';
		$body .= 'Land: '.$_POST['the_Country']. ' <br /> ';
		$body .= 'Stadt: '.$_POST['the_City']. ' <br /> ';
		$body .= 'Mitteilung: '.$_POST['comments'].' <br /> ';
	
		add_filter('wp_mail_content_type','set_html_content_type');
		wp_mail($to, $subject, $body);
		remove_filter('wp_mail_content_type', 'set_html_content_type');
	}
}
add_action('wp_head', 'theFormFunction');

		
function theScriptStyle() {
	wp_enqueue_script( 'myCustomFormJs', plugin_dir_url( __FILE__ ) . 'js/customForm.js', array(), '', true );
	wp_enqueue_style( 'myStyleFormCss', plugin_dir_url( __FILE__ ) . 'css/styleForm.css' );
}
add_action( 'wp_enqueue_scripts', 'theScriptStyle');

?>
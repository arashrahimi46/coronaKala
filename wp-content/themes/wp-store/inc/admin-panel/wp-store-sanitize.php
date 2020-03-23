<?php
function wp_store_sanitize_text( $input ) {
  return wp_kses_post( force_balance_tags( $input ) );
}
function wp_store_sanitize_radio_webpagelayout($input) {
  $valid_keys = array(
    'fullwidth' => __('Full Width', 'wp-store'),
    'boxed' => __('Boxed Layout', 'wp-store'),
    );
  if ( array_key_exists( $input, $valid_keys ) ) {
    return $input;
  } else {
    return '';
  }
}

function wp_store_sanitize_transition_type($input) {
  $valid_keys = array(
    'fade' => __('Fade', 'wp-store'),
    'backSlide' => __('Back Slide', 'wp-store'),
    'goDown' => __('Go Down Slide', 'wp-store'),
    'fadeUp' => __('Fade Up', 'wp-store'),
    );
  if ( array_key_exists( $input, $valid_keys ) ) {
   return $input;
 } else {
   return '';
 }
}

function wp_store_sanitize_radio_alignment_logo($input) {
  $valid_keys = array(
    'left'=>__('Logo and Menu at Left with ads', 'wp-store'),
    'center'=>__('Logo and Menu at Center', 'wp-store'),
    'right'=>__('Logo and Menu at Right with ads', 'wp-store')
    );
  if ( array_key_exists( $input, $valid_keys ) ) {
   return $input;
 } else {
   return '';
 }
}


function wp_store_sanitize_radio_sidebar($input) {
  $valid_keys = array(
    'left-sidebar' =>  __('Left Sidebar','wp-store'),
    'right-sidebar' =>  __('Right Sidebar','wp-store'),
    'both-sidebar' =>  __('Both Sidebar','wp-store'),
    'no-sidebar' =>  __('No Sidebar','wp-store'),
    );
  if ( array_key_exists( $input, $valid_keys ) ) {
    return $input;
  } else {
    return '';
  }
}

function wp_store_sanitize_radio_row($input) {
  $valid_keys = array(        
    '2' => __('Two', 'wp-store'),
    '3' => __('Three', 'wp-store'),
    '4' => __('Four', 'wp-store'),
    '5' => __('Five', 'wp-store'),
    );
  if ( array_key_exists( $input, $valid_keys ) ) {
    return $input;
  } else {
    return '';
  }
}

   //integer sanitize
function wp_store_sanitize_integer($input){
  return intval( $input );
}

function wp_store_sanitize_blog_layout($input){
  $blog_layout = array(
    'large-image' => __('Blog with Large Image', 'wp-store'),
    'medium-image' => __('Blog with Medium Image', 'wp-store'),
    'alternate-image' => __('Blog with Alternate Medium Image', 'wp-store'),
    );

  if(array_key_exists($input,$blog_layout)){
    return $input;
  }else{
    return '';
  }
}

function wp_store_sanitize_archive_layout($input){
  $blog_layout = array(
    'large-image' => __('Archive with Large Image', 'wp-store'),
    'medium-image' => __('Archive with Medium Image', 'wp-store'),
    'alternate-image' => __('Archive with Alternate Medium Image', 'wp-store'),
    );

  if(array_key_exists($input,$blog_layout)){
    return $input;
  }else{
    return '';
  }
}

function wp_store_sanitize_checkbox($input){
  if($input == 1){
    return 1;
  }else{
    return '';
  }
}

function wp_store_sutoplay_on(){
  $wp_store_autoplay = get_theme_mod( 'wp_store_homepage_setting_slider_transition_auto','0');
  if( $wp_store_autoplay == '1') {
    return true;
  }
  return false;
}
<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Store
 */

get_header();
$page_for_posts = get_option( 'page_for_posts' );
$page_layout='right-sidebar';
if($page_for_posts!=0){
$page_layout = get_post_meta( $page_for_posts, 'wp_store_sidebar_layout', true );
}
$slider_page = get_theme_mod('wp_store_innerpage_setting_single_page_slider',0);
if($slider_page == '1'):
	do_action('wp_store_slider_section'); 
endif;
?>
<div class="ed-container">
	<?php
	if($page_layout=='both-sidebar'){
		?>
		<div class="left-sidebar-right">
			<?php
		}
		?>
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">

				<?php
				if ( have_posts() ) :

					if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

				<?php
				endif;

				/* Start the Loop */
				while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

				endwhile;

				the_posts_navigation();

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif; ?>

			</main><!-- #main -->
		</div><!-- #primary -->
		<?php 
		if($page_layout=='left-sidebar' || $page_layout=='both-sidebar'){
			get_sidebar('left');
		}
		if($page_layout=='both-sidebar'){
			?>
		</div>
		<?php
	}
	if($page_layout=='right-sidebar' || $page_layout=='both-sidebar'){
		get_sidebar();
	}
	?>
</div>
<?php
if(get_theme_mod('wp_store_innerpage_setting_single_page_cta')=="1"){
	if(is_active_sidebar('widget-area-two')){
		?>
		<div class='widget-area'>
			<div class='ed-container'>
				<?php
				dynamic_sidebar('widget-area-two');
				?>
			</div>
		</div>			
		<?php
	}
}
get_footer();

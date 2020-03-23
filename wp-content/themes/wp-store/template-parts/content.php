<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Store
 */

if(!(is_archive() &&  is_category())):?>
	<header class="page-header">
		<?php
			if ( is_single() || is_front_page() ) {
				the_title( '<h1 class="page-title"><span>', '</span></h1>' );
			}

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php wp_store_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<?php if(has_post_thumbnail()): ?>
		<div class="post-thumbnail">
			<?php
				$image_resize = 'full';
			?>
			<?php the_post_thumbnail($image_resize); ?>
		</div>		
	<?php endif; ?>

	<div class="entry-content">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wp-store' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php wp_store_entry_footer(); ?>
	</footer><!-- .entry-footer -->

<?php 

else:

$blog_readmore = get_theme_mod('wp_store_innerpage_setting_blog_page_readmore',__('Read More','wp-store')); 
$blog_cat = get_theme_mod('wp_store_homepage_setting_blog_category');
$blog_post_layout = get_theme_mod('wp_store_innerpage_setting_blog_post_layout','large-image'); 

$archive_post_layout = get_theme_mod('wp_store_innerpage_setting_blog_post_layout','large-image'); 
$archive_readmore = get_theme_mod('wp_store_innerpage_setting_archive_readmore',__('Read More','wp-store')); 

if(!empty($blog_cat) && is_category($blog_cat))
	$readmore = $blog_readmore;
else
	$readmore = $archive_readmore;

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<?php
			if ( is_single() ) {
				the_title( '<h1 class="entry-title">', '</h1>' );
			} else {
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_the_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			}

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php wp_store_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->
	<div class="content-thumbnail">
		<?php if(has_post_thumbnail()): ?>
			<div class="post-thumbnail">
				<?php
					$image_resize = 'wp-store-large-image';
				?>
				<?php the_post_thumbnail($image_resize); ?>
			</div>		
		<?php endif; ?>
		<div class="wrap-content">
			<div class="entry-content">
				<?php
						if(!is_single()):
							the_excerpt();	
							echo "<a href ='".esc_url(get_the_permalink())."'>".esc_html($readmore)."</a>";	
						else:
							the_content();
						endif;

					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wp-store' ),
						'after'  => '</div>',
					) );
				?>
			</div><!-- .entry-content -->

			<footer class="entry-footer">
				<?php wp_store_entry_footer(); ?>
			</footer><!-- .entry-footer -->
		</div>
	</div>
</article>
<?php
endif;

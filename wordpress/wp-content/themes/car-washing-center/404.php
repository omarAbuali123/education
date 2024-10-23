<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Car Washing Center
 */

get_header(); ?>

<div class="header-image-box text-center">
  <div class="container">
    <?php if ( get_theme_mod('car_washing_center_header_page_title' , true)) : ?>
      <h1><?php echo esc_html(get_theme_mod('car_washing_center_page_not_found_title', __('404 Error!', 'car-washing-center'))); ?></h1>
    <?php endif; ?>
    <?php if ( get_theme_mod('car_washing_center_header_breadcrumb' , true)) : ?>
      <div class="crumb-box mt-3">
        <?php car_washing_center_the_breadcrumb(); ?>
      </div>
    <?php endif; ?>
  </div>
</div>

<div id="content">
	<div class="container">
		<div class="py-5 text-center not-found-content">
      <p><?php echo esc_html(get_theme_mod('car_washing_center_page_not_found_text', __('The page you are looking for may have been moved, deleted, or possibly never existed.', 'car-washing-center'))); ?></p>
			<?php get_search_form(); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>
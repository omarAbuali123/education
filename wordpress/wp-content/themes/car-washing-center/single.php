<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Car Washing Center
 */

get_header(); ?>

<div class="header-image-box text-center">
  <div class="container">
    <?php if ( get_theme_mod('car_washing_center_header_page_title' , true)) : ?>
        <div class="headerimgbox-meta">
          <span><i class="far fa-clock"></i><?php esc_html_e(' Posted On ','car-washing-center'); echo esc_attr(get_the_date()); ?></span>
        </div>
        <h1 class="my-3"><?php the_title(); ?></h1>
        <div class="headerimgbox-meta">
          <?php while ( have_posts() ) : the_post(); ?>
            <span><i class="far fa-user me-2"></i><?php the_author(); ?></span>
          <?php endwhile; ?>
          <span class="ms-3"><i class="far fa-comments me-2"></i> <?php comments_number( esc_attr('0', 'car-washing-center'), esc_attr('0', 'car-washing-center'), esc_attr('%', 'car-washing-center') ); ?> <?php esc_html_e('comments','car-washing-center'); ?></span>
        </div>
    <?php endif; ?>
    <?php if ( get_theme_mod('car_washing_center_header_breadcrumb' , true)) : ?>
      <div class="crumb-box mt-3">
        <?php car_washing_center_the_breadcrumb(); ?>
      </div>
    <?php endif; ?>
  </div>
</div>

<div id="content" class="mt-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-8">
        <?php
          while ( have_posts() ) :

            the_post();
            get_template_part( 'template-parts/content', 'post');

            wp_link_pages(
              array(
                'before' => '<div class="car-washing-center-pagination">',
                'after' => '</div>',
                'link_before' => '<span>',
                'link_after' => '</span>'
              )
            );

            comments_template();
          endwhile;
        ?>
      </div>
      <div class="col-lg-4 col-md-4">
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
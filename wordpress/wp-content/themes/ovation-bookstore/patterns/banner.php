<?php
/**
 * Title: Banner
 * Slug: ovation-bookstore/banner
 * Categories: ovation-bookstore, banner
 */
?>

<!-- wp:group {"className":"bannerimage","layout":{"type":"default"}} -->
<div class="wp-block-group bannerimage"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() . '/images/banner.png'); ?>","id":9,"dimRatio":80,"overlayColor":"secondary","isUserOverlayColor":true,"minHeight":600,"style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:600px"><span aria-hidden="true" class="wp-block-cover__background has-secondary-background-color has-background-dim-80 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-9" alt="" src="<?php echo esc_url( get_template_directory_uri() . '/images/banner.png'); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":"20%","className":"banner-dummy"} -->
<div class="wp-block-column is-vertically-aligned-center banner-dummy" style="flex-basis:20%"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"35%","className":"banner-text-box"} -->
<div class="wp-block-column is-vertically-aligned-center banner-text-box" style="flex-basis:35%"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"400","fontSize":"40px"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} -->
<h2 class="wp-block-heading has-base-color has-text-color has-link-color" style="font-size:40px;font-style:normal;font-weight:400"><?php esc_html_e('The Man In The','ovation-bookstore'); ?></h2>
<!-- /wp:heading -->

<!-- wp:heading {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"fontSize":"40px","fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
<h2 class="wp-block-heading has-primary-color has-text-color has-link-color" style="margin-top:0;margin-bottom:0;font-size:40px;font-style:normal;font-weight:700"><?php esc_html_e('Glass House','ovation-bookstore'); ?></h2>
<!-- /wp:heading -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"20px"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} -->
<h3 class="wp-block-heading has-base-color has-text-color has-link-color" style="font-size:20px;font-style:normal;font-weight:500"><?php esc_html_e('A great landing page to sell your eBook!','ovation-bookstore'); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"banner-main-text","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"fontSize":"14px"}},"textColor":"base"} -->
<p class="banner-main-text has-base-color has-text-color has-link-color" style="font-size:14px"><?php esc_html_e('We work with our partners to streamline project plans that don’t just deliver on product perfection, but also delivers on time.','ovation-bookstore'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","textColor":"heading","style":{"border":{"radius":"0px"},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}},"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"500","textTransform":"capitalize"},"elements":{"link":{"color":{"text":"var:preset|color|heading"}}}}} -->
<div class="wp-block-button has-custom-font-size" style="font-size:14px;font-style:normal;font-weight:500;text-transform:capitalize"><a class="wp-block-button__link has-heading-color has-primary-background-color has-text-color has-background has-link-color wp-element-button" href="#" style="border-radius:0px;padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)"><?php esc_html_e('buy now for ','ovation-bookstore'); ?><i class="fas fa-check"></i><?php esc_html_e(' $14.99','ovation-bookstore'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"12px"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} -->
<p class="has-base-color has-text-color has-link-color" style="font-size:12px"><span>*</span><?php esc_html_e(' eBook includes iBooks, PDF &amp; ePub versions','ovation-bookstore'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"54px"} -->
<div style="height:54px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom","width":"45%","className":"slider-img-wrap-upper"} -->
<div class="wp-block-column is-vertically-aligned-bottom slider-img-wrap-upper" style="flex-basis:45%"><!-- wp:group {"className":"slider-img-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group slider-img-wrap"><!-- wp:image {"id":19,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/image.png'); ?>" alt="" class="wp-image-19"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"className":"discount-box","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"radius":"10px"}},"backgroundColor":"primary","layout":{"type":"default"}} -->
<div class="wp-block-group discount-box has-primary-background-color has-background" style="border-radius:10px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"className":"discount-box-inner","style":{"border":{"style":"dashed","width":"1px","color":"#ffffff","radius":"10px"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group discount-box-inner has-border-color" style="border-color:#ffffff;border-style:dashed;border-width:1px;border-radius:10px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--30)"><!-- wp:heading {"textAlign":"center","level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"20px"}},"textColor":"secondary"} -->
<h4 class="wp-block-heading has-text-align-center has-secondary-color has-text-color has-link-color" style="font-size:20px;font-style:normal;font-weight:700"><?php esc_html_e('50%','ovation-bookstore'); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"500","textTransform":"capitalize"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} -->
<p class="has-text-align-center has-base-color has-text-color has-link-color" style="margin-top:0;margin-bottom:0;font-size:14px;font-style:normal;font-weight:500;text-transform:capitalize"><?php esc_html_e('discount&nbsp;on early purchase','ovation-bookstore'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
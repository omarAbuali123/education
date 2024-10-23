<?php
/**
 * Title: Latest News
 * Slug: ovation-bookstore/latest-news
 * Categories: ovation-bookstore, latest-news
 */
?>

<!-- wp:group {"metadata":{"categories":["ovation-bookstore","latest-news"],"patternName":"ovation-bookstore/latest-news","name":"Latest News"},"className":"blog-section","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"base","layout":{"type":"constrained","contentSize":"67%"}} -->
<div class="wp-block-group blog-section has-base-background-color has-background" style="margin-top:0px;margin-bottom:0px"><!-- wp:spacer {"height":"54px","className":"latest-top-spacer"} -->
<div style="height:54px" aria-hidden="true" class="wp-block-spacer latest-top-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"className":"section-shot-head","layout":{"type":"default"}} -->
<div class="wp-block-group section-shot-head"><!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"700","textTransform":"uppercase","letterSpacing":"2px"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary"} -->
<h3 class="wp-block-heading has-text-align-center has-secondary-color has-text-color has-link-color" style="font-size:16px;font-style:normal;font-weight:700;letter-spacing:2px;text-transform:uppercase"><?php esc_html_e('Our Blog','ovation-bookstore'); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"center","className":"sec-main-heading","style":{"typography":{"fontSize":"35px","fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"var:preset|spacing|20"}}}} -->
<h2 class="wp-block-heading has-text-align-center sec-main-heading" style="margin-top:var(--wp--preset--spacing--20);font-size:35px;font-style:normal;font-weight:600"><?php esc_html_e('Our Latest News Post','ovation-bookstore'); ?><br><?php esc_html_e('and Articles?','ovation-bookstore'); ?></h2>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"20px","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div style="margin-top:0;margin-bottom:0;height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:query {"queryId":34,"query":{"perPage":"6","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":"2"}} -->
<!-- wp:columns {"className":"blog-box"} -->
<div class="wp-block-columns blog-box">
<!-- wp:column {"verticalAlignment":"top","width":"45%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:45%"><!-- wp:post-featured-image /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"55%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:55%"><!-- wp:group {"className":"blog-text-box","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group blog-text-box" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:post-terms {"term":"category","textAlign":"left","style":{"typography":{"fontSize":"12px"},"color":{"text":"#777d83"},"elements":{"link":{"color":{"text":"#777d83"}}},"spacing":{"padding":{"top":"0"}}}} /-->

<!-- wp:group {"className":"custom-meta-box","style":{"spacing":{"padding":{"left":"var:preset|spacing|40"},"margin":{"top":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group custom-meta-box" style="margin-top:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40)"><!-- wp:post-date {"format":"M j, Y","style":{"typography":{"fontSize":"12px"}}} /-->

<!-- wp:post-author {"showAvatar":false,"byline":"by","style":{"typography":{"fontSize":"12px","fontStyle":"normal","fontWeight":"400","textTransform":"capitalize"}}} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"isLink":true,"style":{"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"var:preset|spacing|20"}}}} /-->

<!-- wp:post-excerpt {"excerptLength":18,"style":{"typography":{"fontSize":"14px"},"spacing":{"margin":{"top":"var:preset|spacing|20"}}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->
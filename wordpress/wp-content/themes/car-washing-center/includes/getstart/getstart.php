<?php
//about theme info
add_action( 'admin_menu', 'car_washing_center_gettingstarted' );
function car_washing_center_gettingstarted() {
	add_theme_page( esc_html__('Car Washing Center', 'car-washing-center'), esc_html__('Car Washing Center', 'car-washing-center'), 'edit_theme_options', 'car_washing_center_about', 'car_washing_center_mostrar_guide');
}

// Add a Custom CSS file to WP Admin Area
function car_washing_center_admin_theme_style() {
	wp_enqueue_style('car-washing-center-custom-admin-style', esc_url(get_template_directory_uri()) . '/includes/getstart/getstart.css');
	wp_enqueue_script('car-washing-center-tabs', esc_url(get_template_directory_uri()) . '/includes/getstart/js/tab.js');
	wp_enqueue_style( 'font-awesome-css', get_template_directory_uri().'/assets/css/fontawesome-all.css' );
}
add_action('admin_enqueue_scripts', 'car_washing_center_admin_theme_style');

// Changelog
if ( ! defined( 'CAR_WASHING_CENTER_CHANGELOG_URL' ) ) {
    define( 'CAR_WASHING_CENTER_CHANGELOG_URL', get_template_directory() . '/readme.txt' );
}

function car_washing_center_changelog_screen() {	
	global $wp_filesystem;
	$car_washing_center_changelog_file = apply_filters( 'car_washing_center_changelog_file', CAR_WASHING_CENTER_CHANGELOG_URL );
	if ( $car_washing_center_changelog_file && is_readable( $car_washing_center_changelog_file ) ) {
		WP_Filesystem();
		$car_washing_center_changelog = $wp_filesystem->get_contents( $car_washing_center_changelog_file );
		$car_washing_center_changelog_list = car_washing_center_parse_changelog( $car_washing_center_changelog );
		echo wp_kses_post( $car_washing_center_changelog_list );
	}
}

function car_washing_center_parse_changelog( $car_washing_center_content ) {
	$car_washing_center_content = explode ( '== ', $car_washing_center_content );
	$car_washing_center_changelog_isolated = '';
	foreach ( $car_washing_center_content as $key => $car_washing_center_value ) {
		if (strpos( $car_washing_center_value, 'Changelog ==') === 0) {
	    	$car_washing_center_changelog_isolated = str_replace( 'Changelog ==', '', $car_washing_center_value );
	    }
	}
	$car_washing_center_changelog_array = explode( '= ', $car_washing_center_changelog_isolated );
	unset( $car_washing_center_changelog_array[0] );
	$car_washing_center_changelog = '<div class="changelog">';
	foreach ( $car_washing_center_changelog_array as $car_washing_center_value) {
		$car_washing_center_value = preg_replace( '/\n+/', '</span><span>', $car_washing_center_value );
		$car_washing_center_value = '<div class="block"><span class="heading">= ' . $car_washing_center_value . '</span></div><hr>';
		$car_washing_center_changelog .= str_replace( '<span></span>', '', $car_washing_center_value );
	}
	$car_washing_center_changelog .= '</div>';
	return wp_kses_post( $car_washing_center_changelog );
}

//guidline for about theme
function car_washing_center_mostrar_guide() { 
	//custom function about theme customizer
	$car_washing_center_return = add_query_arg( array()) ;
	$car_washing_center_theme = wp_get_theme( 'car-washing-center' );
?>

    <div class="top-head">
		<div class="top-title">
			<h2><?php esc_html_e( 'Car Washing Center', 'car-washing-center' ); ?></h2>
		</div>
		<div class="top-right">
			<span class="version"><?php esc_html_e( 'Version', 'car-washing-center' ); ?>: <?php echo esc_html($car_washing_center_theme['Version']);?></span>
		</div>
    </div>

    <div class="inner-cont">

	    <div class="tab-sec">
	    	<div class="tab">
				<button class="tablinks" onclick="car_washing_center_open_tab(event, 'wpelemento_importer_editor')"><?php esc_html_e( 'Setup With Elementor', 'car-washing-center' ); ?></button>
				<button class="tablinks" onclick="car_washing_center_open_tab(event, 'setup_customizer')"><?php esc_html_e( 'Setup With Customizer', 'car-washing-center' ); ?></button>
				<button class="tablinks" onclick="car_washing_center_open_tab(event, 'changelog_cont')"><?php esc_html_e( 'Changelog', 'car-washing-center' ); ?></button>
			</div>

			<div id="wpelemento_importer_editor" class="tabcontent open">
				<?php if(!class_exists('WPElemento_Importer_ThemeWhizzie')){
					$car_washing_center_plugin_ins = Car_Washing_Center_Plugin_Activation_WPElemento_Importer::get_instance();
					$car_washing_center_actions = $car_washing_center_plugin_ins->car_washing_center_recommended_actions;
					?>
					<div class="car-washing-center-recommended-plugins ">
							<div class="car-washing-center-action-list">
								<?php if ($car_washing_center_actions): foreach ($car_washing_center_actions as $car_washing_center_key => $car_washing_center_actionValue): ?>
										<div class="car-washing-center-action" id="<?php echo esc_attr($car_washing_center_actionValue['id']);?>">
											<div class="action-inner plugin-activation-redirect">
												<h3 class="action-title"><?php echo esc_html($car_washing_center_actionValue['title']); ?></h3>
												<div class="action-desc"><?php echo esc_html($car_washing_center_actionValue['desc']); ?></div>
												<?php echo wp_kses_post($car_washing_center_actionValue['link']); ?>
											</div>
										</div>
									<?php endforeach;
								endif; ?>
							</div>
					</div>
				<?php }else{ ?>
					<div class="tab-outer-box">
						<h3><?php esc_html_e('Welcome to WPElemento Theme!', 'car-washing-center'); ?></h3>
						<p><?php esc_html_e('Click on the quick start button to import the demo.', 'car-washing-center'); ?></p>
						<div class="info-link">
							<a  href="<?php echo esc_url( admin_url('admin.php?page=wpelementoimporter-wizard') ); ?>"><?php esc_html_e('Quick Start', 'car-washing-center'); ?></a>
						</div>
					</div>
				<?php } ?>
			</div>

			<div id="setup_customizer" class="tabcontent">
				<div class="tab-outer-box">
				  	<div class="lite-theme-inner">
						<h3><?php esc_html_e('Theme Customizer', 'car-washing-center'); ?></h3>
						<p><?php esc_html_e('To begin customizing your website, start by clicking "Customize".', 'car-washing-center'); ?></p>
						<div class="info-link">
							<a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e('Customizing', 'car-washing-center'); ?></a>
						</div>
						<hr>
						<h3><?php esc_html_e('Help Docs', 'car-washing-center'); ?></h3>
						<p><?php esc_html_e('The complete procedure to configure and manage a WordPress Website from the beginning is shown in this documentation .', 'car-washing-center'); ?></p>
						<div class="info-link">
							<a href="<?php echo esc_url( CAR_WASHING_CENTER_FREE_THEME_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation', 'car-washing-center'); ?></a>
						</div>
						<hr>
						<h3><?php esc_html_e('Need Support?', 'car-washing-center'); ?></h3>
						<p><?php esc_html_e('Our dedicated team is well prepared to help you out in case of queries and doubts regarding our theme.', 'car-washing-center'); ?></p>
						<div class="info-link">
							<a href="<?php echo esc_url( CAR_WASHING_CENTER_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support Forum', 'car-washing-center'); ?></a>
						</div>
						<hr>
						<h3><?php esc_html_e('Reviews & Testimonials', 'car-washing-center'); ?></h3>
						<p> <?php esc_html_e('All the features and aspects of this WordPress Theme are phenomenal. I\'d recommend this theme to all.', 'car-washing-center'); ?></p>
						<div class="info-link">
							<a href="<?php echo esc_url( CAR_WASHING_CENTER_REVIEW ); ?>" target="_blank"><?php esc_html_e('Review', 'car-washing-center'); ?></a>
						</div>
						<hr>
						<div class="link-customizer">
							<h3><?php esc_html_e( 'Link to customizer', 'car-washing-center' ); ?></h3>
							<div class="first-row">
								<div class="row-box">
									<div class="row-box1">
										<span class="dashicons dashicons-buddicons-buddypress-logo"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Upload your logo','car-washing-center'); ?></a>
									</div>
									<div class="row-box2">
										<span class="dashicons dashicons-menu"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Menus','car-washing-center'); ?></a>
									</div>
								</div>
							
								<div class="row-box">
									<div class="row-box1">
										<span class="dashicons dashicons-align-center"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=header_image') ); ?>" target="_blank"><?php esc_html_e('Header Image','car-washing-center'); ?></a>
									</div>
									<div class="row-box2">
										<span class="dashicons dashicons-screenoptions"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=widgets') ); ?>" target="_blank"><?php esc_html_e('Footer Widget','car-washing-center'); ?></a>
									</div>
								</div>
							</div>
						</div>
				  	</div>
				</div>
			</div>

			<div id="changelog_cont" class="tabcontent">
				<div class="tab-outer-box">
					<?php car_washing_center_changelog_screen(); ?>
				</div>
			</div>
			
		</div>

		<div class="inner-side-content">
			<h2><?php esc_html_e('Premium Theme', 'car-washing-center'); ?></h2>
			<div class="tab-outer-box">
				<img src="<?php echo esc_url(get_template_directory_uri()); ?>/screenshot.png" alt="" />
				<h3><?php esc_html_e('Car Washing Center WordPress Theme', 'car-washing-center'); ?></h3>
				<div class="iner-sidebar-pro-btn">
					<span class="premium-btn"><a href="<?php echo esc_url( CAR_WASHING_CENTER_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Premium', 'car-washing-center'); ?></a>
					</span>
					<span class="demo-btn"><a href="<?php echo esc_url( CAR_WASHING_CENTER_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'car-washing-center'); ?></a>
					</span>
					<span class="doc-btn"><a href="<?php echo esc_url( CAR_WASHING_CENTER_THEME_BUNDLE ); ?>" target="_blank"><?php esc_html_e('Theme Bundle', 'car-washing-center'); ?></a>
					</span>
				</div>
				<hr>
				<div class="premium-coupon">
					<div class="premium-features">
						<h3><?php esc_html_e('premium Features', 'car-washing-center'); ?></h3>
						<ul>
							<li><?php esc_html_e( 'Multilingual', 'car-washing-center' ); ?></li>
							<li><?php esc_html_e( 'Drag and drop features', 'car-washing-center' ); ?></li>
							<li><?php esc_html_e( 'Zero Coding Required', 'car-washing-center' ); ?></li>
							<li><?php esc_html_e( 'Mobile Friendly Layout', 'car-washing-center' ); ?></li>
							<li><?php esc_html_e( 'Responsive Layout', 'car-washing-center' ); ?></li>
							<li><?php esc_html_e( 'Unique Designs', 'car-washing-center' ); ?></li>
						</ul>
					</div>
					<div class="coupon-box">
						<h3><?php esc_html_e('Use Coupon Code', 'car-washing-center'); ?></h3>
						<a class="coupon-btn" href="<?php echo esc_url( CAR_WASHING_CENTER_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('UPGRADE NOW', 'car-washing-center'); ?></a>
						<div class="coupon-container">
							<h3><?php esc_html_e( 'elemento20', 'car-washing-center' ); ?></h3>
						</div>
					</div>
				</div>
			</div>	
		</div>
	</div>

<?php } ?>
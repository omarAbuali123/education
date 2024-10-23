<?php

if ( class_exists("Kirki")){

	Kirki::add_config('theme_config_id', array(
		'capability'   =>  'edit_theme_options',
		'option_type'  =>  'theme_mod',
	));

	Kirki::add_field( 'theme_config_id', [
        'type'        => 'slider',
        'settings'    => 'car_washing_center_logo_resizer',
        'label'       => __( 'Logo Size', 'car-washing-center' ),
        'section'     => 'title_tagline',
        'default'     => 150,
        'choices'     => [
            'min'   => 50,
            'max'   => 300,
            'step'  => 1,
        ],
    ] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'car_washing_center_enable_logo_text',
		'section'     => 'title_tagline',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Site Title and Tagline', 'car-washing-center' ) . '</h3>',
		'priority'    => 10,
	] );

  	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'car_washing_center_display_header_title',
		'label'       => esc_html__( 'Site Title Enable / Disable Button', 'car-washing-center' ),
		'section'     => 'title_tagline',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'car-washing-center' ),
			'off' => esc_html__( 'Disable', 'car-washing-center' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'car_washing_center_display_header_text',
		'label'       => esc_html__( 'Tagline Enable / Disable Button', 'car-washing-center' ),
		'section'     => 'title_tagline',
		'default'     => '0',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'car-washing-center' ),
			'off' => esc_html__( 'Disable', 'car-washing-center' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'car_washing_center_site_tittle_font_heading',
		'section'     => 'title_tagline',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Site Title Font Size', 'car-washing-center' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'car_washing_center_site_tittle_font_size',
		'type'        => 'number',
		'section'     => 'title_tagline',
		'transport' => 'auto',
		'output' => array(
			array(
				'element'  => array('.logo a'),
				'property' => 'font-size',
				'suffix' => 'px'
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'car_washing_center_site_tittle_transform_heading',
		'section'     => 'title_tagline',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Site Title Text Transform', 'car-washing-center' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'settings'    => 'car_washing_center_site_tittle_transform',
		'section'     => 'title_tagline',
		'default'     => 'capitalize',
		'choices'     => [
			'none' => esc_html__( 'Normal', 'car-washing-center' ),
			'uppercase' => esc_html__( 'Uppercase', 'car-washing-center' ),
			'lowercase' => esc_html__( 'Lowercase', 'car-washing-center' ),
			'capitalize' => esc_html__( 'Capitalize', 'car-washing-center' ),
		],
		'output' => array(
			array(
				'element'  => array( '.logo a'),
				'property' => ' text-transform',
			),
		),
	 ) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'car_washing_center_site_tagline_font_heading',
		'section'     => 'title_tagline',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Site Tagline Font Size', 'car-washing-center' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'car_washing_center_site_tagline_font_size',
		'type'        => 'number',
		'section'     => 'title_tagline',
		'transport' => 'auto',
		'output' => array(
			array(
				'element'  => array('.logo span'),
				'property' => 'font-size',
				'suffix' => 'px'
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'custom',
		'settings'    => 'car_washing_center_logo_settings_premium_features',
		'section'     => 'title_tagline',
		'priority'    => 50,
		'default'     => '<h3 style="color: #2271b1; padding:5px 20px 5px 20px; background:#fff; margin:0;  box-shadow: 0 2px 4px rgba(0,0,0, .2); ">' . esc_html__( 'Unlock More Features in the Premium Version!', 'car-washing-center' ) . '</h3><ul style="color: #121212; padding: 5px 20px 20px 30px; background:#fff; margin:0;" ><li style="list-style-type: square;" >' . esc_html__( 'Customizable Text Logo', 'car-washing-center' ) . '</li><li style="list-style-type: square;" >'.esc_html__( 'Enhanced Typography Options', 'car-washing-center' ) .'</li><li style="list-style-type: square;" >'.esc_html__( 'Priority Support', 'car-washing-center' ) .'</li><li style="list-style-type: square;" >'.esc_html__( '....and Much More', 'car-washing-center' ) . '</li></ul><div style="background: #fff; padding: 0px 10px 10px 20px;"><a href="' . esc_url( __( 'https://www.wpelemento.com/products/car-wash-wordpress-theme', 'car-washing-center' ) ) . '" class="button button-primary" target="_blank">'. esc_html__( 'Upgrade for more', 'car-washing-center' ) .'</a></div>',
	) );

	// Theme color

	Kirki::add_section( 'car_washing_center_theme_color_setting', array(
		'title'    => __( 'Color Option', 'car-washing-center' ),
		'priority' => 10,
	) );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'car_washing_center_theme_color',
		'label'       => __( 'Theme color', 'car-washing-center'),
		'description'    => esc_html__( 'To customize the colors of the homepage, use the Elementor editor', 'car-washing-center' ),
		'section'     => 'car_washing_center_theme_color_setting',
		'type'        => 'color',
		'default'     => '#DE0B04',
	) );

	// TYPOGRAPHY SETTINGS
	Kirki::add_panel( 'car_washing_center_typography_panel', array(
		'priority' => 10,
		'title'    => __( 'Typography', 'car-washing-center' ),
	) );

	//Heading 1 Section

	Kirki::add_section( 'car_washing_center_h1_typography_setting', array(
		'title'    => __( 'Heading 1', 'car-washing-center' ),
		'panel'    => 'car_washing_center_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'car_washing_center_h1_typography_heading',
		'section'     => 'car_washing_center_h1_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading 1 Typography', 'car-washing-center' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'car_washing_center_h1_typography_font',
		'section'   =>  'car_washing_center_h1_typography_setting',
		'default'   =>  [
			'font-family'   =>  'DM Sans',
			'variant'       =>  '700',
			'font-size'       => '',
			'line-height'   =>  '',
			'letter-spacing'    =>  '',
			'text-transform'    =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   =>  'h1',
				'suffix' => '!important'
			],
		],
	) );

	//Heading 2 Section

	Kirki::add_section( 'car_washing_center_h2_typography_setting', array(
		'title'    => __( 'Heading 2', 'car-washing-center' ),
		'panel'    => 'car_washing_center_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'car_washing_center_h2_typography_heading',
		'section'     => 'car_washing_center_h2_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading 2 Typography', 'car-washing-center' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'car_washing_center_h2_typography_font',
		'section'   =>  'car_washing_center_h2_typography_setting',
		'default'   =>  [
			'font-family'   =>  'DM Sans',
			'font-size'       => '',
			'variant'       =>  '700',
			'line-height'   =>  '',
			'letter-spacing'    =>  '',
			'text-transform'    =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   =>  'h2',
				'suffix' => '!important'
			],
		],
	) );

	//Heading 3 Section

	Kirki::add_section( 'car_washing_center_h3_typography_setting', array(
		'title'    => __( 'Heading 3', 'car-washing-center' ),
		'panel'    => 'car_washing_center_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'car_washing_center_h3_typography_heading',
		'section'     => 'car_washing_center_h3_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading 3 Typography', 'car-washing-center' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'car_washing_center_h3_typography_font',
		'section'   =>  'car_washing_center_h3_typography_setting',
		'default'   =>  [
			'font-family'   =>  'DM Sans',
			'variant'       =>  '700',
			'font-size'       => '',
			'line-height'   =>  '',
			'letter-spacing'    =>  '',
			'text-transform'    =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   =>  'h3',
				'suffix' => '!important'
			],
		],
	) );

	//Heading 4 Section

	Kirki::add_section( 'car_washing_center_h4_typography_setting', array(
		'title'    => __( 'Heading 4', 'car-washing-center' ),
		'panel'    => 'car_washing_center_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'car_washing_center_h4_typography_heading',
		'section'     => 'car_washing_center_h4_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading 4 Typography', 'car-washing-center' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'car_washing_center_h4_typography_font',
		'section'   =>  'car_washing_center_h4_typography_setting',
		'default'   =>  [
			'font-family'   =>  'DM Sans',
			'variant'       =>  '700',
			'font-size'       => '',
			'line-height'   =>  '',
			'letter-spacing'    =>  '',
			'text-transform'    =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   =>  'h4',
				'suffix' => '!important'
			],
		],
	) );

	//Heading 5 Section

	Kirki::add_section( 'car_washing_center_h5_typography_setting', array(
		'title'    => __( 'Heading 5', 'car-washing-center' ),
		'panel'    => 'car_washing_center_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'car_washing_center_h5_typography_heading',
		'section'     => 'car_washing_center_h5_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading 5 Typography', 'car-washing-center' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'car_washing_center_h5_typography_font',
		'section'   =>  'car_washing_center_h5_typography_setting',
		'default'   =>  [
			'font-family'   =>  'DM Sans',
			'variant'       =>  '700',
			'font-size'       => '',
			'line-height'   =>  '',
			'letter-spacing'    =>  '',
			'text-transform'    =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   =>  'h5',
				'suffix' => '!important'
			],
		],
	) );

	//Heading 6 Section

	Kirki::add_section( 'car_washing_center_h6_typography_setting', array(
		'title'    => __( 'Heading 6', 'car-washing-center' ),
		'panel'    => 'car_washing_center_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'car_washing_center_h6_typography_heading',
		'section'     => 'car_washing_center_h6_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading 6 Typography', 'car-washing-center' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'car_washing_center_h6_typography_font',
		'section'   =>  'car_washing_center_h6_typography_setting',
		'default'   =>  [
			'font-family'   =>  'DM Sans',
			'variant'       =>  '700',
			'font-size'       => '',
			'line-height'   =>  '',
			'letter-spacing'    =>  '',
			'text-transform'    =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   =>  'h6',
				'suffix' => '!important'
			],
		],
	) );

	//body Typography

	Kirki::add_section( 'car_washing_center_body_typography_setting', array(
		'title'    => __( 'Content Typography', 'car-washing-center' ),
		'panel'    => 'car_washing_center_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'car_washing_center_body_typography_heading',
		'section'     => 'car_washing_center_body_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Content  Typography', 'car-washing-center' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'car_washing_center_body_typography_font',
		'section'   =>  'car_washing_center_body_typography_setting',
		'default'   =>  [
			'font-family'   =>  'Mulish',
			'variant'       =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   => 'body',
				'suffix' => '!important'
			],
		],
	) );

	// Theme Options Panel
	Kirki::add_panel( 'car_washing_center_theme_options_panel', array(
		'priority' => 10,
		'title'    => __( 'Theme Options', 'car-washing-center' ),
	) );

	// HEADER SECTION

	Kirki::add_section( 'car_washing_center_section_header',array(
		'title' => esc_html__( 'Header Settings', 'car-washing-center' ),
		'description'    => esc_html__( 'Here you can add header information.', 'car-washing-center' ),
		'panel' => 'car_washing_center_theme_options_panel',
		'tabs'  => [
			'header' => [
				'label' => esc_html__( 'Header', 'car-washing-center' ),
			],
			'menu'  => [
				'label' => esc_html__( 'Menu', 'car-washing-center' ),
			],
		],
		'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'menu',
		'settings'    => 'car_washing_center_menu_size_heading',
		'section'     => 'car_washing_center_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Menu Font Size(px)', 'car-washing-center' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'car_washing_center_menu_size',
		'tab'      => 'menu',
		'label'       => __( 'Enter a value in pixels. Example:20px', 'car-washing-center' ),
		'type'        => 'text',
		'section'     => 'car_washing_center_section_header',
		'transport' => 'auto',
		'output' => array(
			array(
				'element'  => array( '#main-menu a', '#main-menu ul li a', '#main-menu li a'),
				'property' => 'font-size',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'menu',
		'settings'    => 'car_washing_center_menu_text_transform_heading',
		'section'     => 'car_washing_center_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Menu Text Transform', 'car-washing-center' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'tab'      => 'menu',
		'settings'    => 'car_washing_center_menu_text_transform',
		'section'     => 'car_washing_center_section_header',
		'default'     => 'capitalize',
		'choices'     => [
			'none' => esc_html__( 'Normal', 'car-washing-center' ),
			'uppercase' => esc_html__( 'Uppercase', 'car-washing-center' ),
			'lowercase' => esc_html__( 'Lowercase', 'car-washing-center' ),
			'capitalize' => esc_html__( 'Capitalize', 'car-washing-center' ),
		],
		'output' => array(
			array(
				'element'  => array( '#main-menu a', '#main-menu ul li a', '#main-menu li a'),
				'property' => ' text-transform',
			),
		),
	 ) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'tab'      => 'header',
		'settings'    => 'car_washing_center_sticky_header',
		'label'       => esc_html__( 'Enable/Disable Sticky Header', 'car-washing-center' ),
		'section'     => 'car_washing_center_section_header',
		'default'     => '0',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'car-washing-center' ),
			'off' => esc_html__( 'Disable', 'car-washing-center' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'header',
		'tab'      => 'header',
		'settings'    => 'car_washing_center_enable_button_heading',
		'section'     => 'car_washing_center_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Button', 'car-washing-center' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'tab'      => 'header',
		'label'    => esc_html__( 'Button Text', 'car-washing-center' ),
		'settings' => 'car_washing_center_header_button_text',
		'section'  => 'car_washing_center_section_header',
		'default'  => '',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'url',
		'tab'      => 'header',
		'label'    =>  esc_html__( 'Button Link', 'car-washing-center' ),
		'settings' => 'car_washing_center_header_button_url',
		'section'  => 'car_washing_center_section_header',
		'default'  => '',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'custom',
		'tab'      => 'header',
		'settings'    => 'car_washing_center_logo_settings_premium_features_header',
		'section'     => 'car_washing_center_section_header',
		'priority'    => 50,
		'default'     => '<h3 style="color: #2271b1; padding:5px 20px 5px 20px; background:#fff; margin:0;  box-shadow: 0 2px 4px rgba(0,0,0, .2); ">' . esc_html__( 'Enhance your header design now!', 'car-washing-center' ) . '</h3><ul style="color: #121212; padding: 5px 20px 20px 30px; background:#fff; margin:0;" ><li style="list-style-type: square;" >' . esc_html__( 'Customize your header background color', 'car-washing-center' ) . '</li><li style="list-style-type: square;" >'.esc_html__( 'Adjust icon and text font sizes', 'car-washing-center' ) .'</li><li style="list-style-type: square;" >'.esc_html__( 'Explore enhanced typography options', 'car-washing-center' ) .'</li><li style="list-style-type: square;" >'.esc_html__( '....and Much More', 'car-washing-center' ) . '</li></ul><div style="background: #fff; padding: 0px 10px 10px 20px;"><a href="' . esc_url( __( 'https://www.wpelemento.com/products/car-wash-wordpress-theme', 'car-washing-center' ) ) . '" class="button button-primary" target="_blank">'. esc_html__( 'Upgrade for more', 'car-washing-center' ) .'</a></div>',
	) );

	// WOOCOMMERCE SETTINGS

	Kirki::add_section( 'car_washing_center_woocommerce_settings', array(
		'title'          => esc_html__( 'Woocommerce Settings', 'car-washing-center' ),
		'description'    => esc_html__( 'Woocommerce Settings of themes', 'car-washing-center' ),
		'panel'    => 'woocommerce',
		'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'car_washing_center_shop_page_sidebar',
		'label'       => esc_html__( 'Enable/Disable Shop Page Sidebar', 'car-washing-center' ),
		'section'     => 'car_washing_center_woocommerce_settings',
		'default'     => 'true',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'label'       => esc_html__( 'Shop Page Layouts', 'car-washing-center' ),
		'settings'    => 'car_washing_center_shop_page_layout',
		'section'     => 'car_washing_center_woocommerce_settings',
		'default'     => 'Right Sidebar',
		'choices'     => [
			'Right Sidebar' => esc_html__( 'Right Sidebar', 'car-washing-center' ),
			'Left Sidebar' => esc_html__( 'Left Sidebar', 'car-washing-center' ),
		],
		'active_callback'  => [
			[
				'setting'  => 'car_washing_center_shop_page_sidebar',
				'operator' => '===',
				'value'    => true,
			],
		]

	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'select',
		'label'       => esc_html__( 'Products Per Row', 'car-washing-center' ),
		'settings'    => 'car_washing_center_products_per_row',
		'section'     => 'car_washing_center_woocommerce_settings',
		'default'     => '3',
		'priority'    => 10,
		'choices'     => [
			'2' => '2',
			'3' => '3',
			'4' => '4',
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'label'       => esc_html__( 'Products Per Page', 'car-washing-center' ),
		'settings'    => 'car_washing_center_products_per_page',
		'section'     => 'car_washing_center_woocommerce_settings',
		'default'     => '9',
		'priority'    => 10,
		'choices'  => [
					'min'  => 0,
					'max'  => 50,
					'step' => 1,
				],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'car_washing_center_single_product_sidebar',
		'label'       => esc_html__( 'Enable / Disable Single Product Sidebar', 'car-washing-center' ),
		'section'     => 'car_washing_center_woocommerce_settings',
		'default'     => 'true',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'label'       => esc_html__( 'Single Product Layout', 'car-washing-center' ),
		'settings'    => 'car_washing_center_single_product_sidebar_layout',
		'section'     => 'car_washing_center_woocommerce_settings',
		'default'     => 'Right Sidebar',
		'choices'     => [
			'Right Sidebar' => esc_html__( 'Right Sidebar', 'car-washing-center' ),
			'Left Sidebar' => esc_html__( 'Left Sidebar', 'car-washing-center' ),
		],
		'active_callback'  => [
			[
				'setting'  => 'car_washing_center_single_product_sidebar',
				'operator' => '===',
				'value'    => true,
			],
		]
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'car_washing_center_products_button_border_radius_heading',
		'section'     => 'car_washing_center_woocommerce_settings',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Products Button Border Radius', 'car-washing-center' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'car_washing_center_products_button_border_radius',
		'section'     => 'car_washing_center_woocommerce_settings',
		'default'     => '1',
		'priority'    => 10,
		'choices'  => [
					'min'  => 1,
					'max'  => 50,
					'step' => 1,
				],
		'output' => array(
			array(
				'element'  => array('.woocommerce ul.products li.product .button',' a.checkout-button.button.alt.wc-forward','.woocommerce #respond input#submit', '.woocommerce a.button', '.woocommerce button.button','.woocommerce input.button','.woocommerce #respond input#submit.alt','.woocommerce button.button.alt','.woocommerce input.button.alt'),
				'property' => 'border-radius',
				'units' => 'px',
			),
		),
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'car_washing_center_sale_badge_position_heading',
		'section'     => 'car_washing_center_woocommerce_settings',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Sale Badge Position', 'car-washing-center' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'settings'    => 'car_washing_center_sale_badge_position',
		'section'     => 'car_washing_center_woocommerce_settings',
		'default'     => 'right',
		'choices'     => [
			'right' => esc_html__( 'Right', 'car-washing-center' ),
			'left' => esc_html__( 'Left', 'car-washing-center' ),
		],
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'car_washing_center_products_sale_font_size_heading',
		'section'     => 'car_washing_center_woocommerce_settings',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Sale Font Size', 'car-washing-center' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'text',
		'settings'    => 'car_washing_center_products_sale_font_size',
		'section'     => 'car_washing_center_woocommerce_settings',
		'priority'    => 10,
		'output' => array(
			array(
				'element'  => array('.woocommerce span.onsale','.woocommerce ul.products li.product .onsale'),
				'property' => 'font-size',
				'units' => 'px',
			),
		),
	] );
	
	//ADDITIONAL SETTINGS

	Kirki::add_section( 'car_washing_center_additional_setting',array(
		'title' => esc_html__( 'Additional Settings', 'car-washing-center' ),
		'panel' => 'car_washing_center_theme_options_panel',
		'tabs'  => [
			'general' => [
				'label' => esc_html__( 'General', 'car-washing-center' ),
			],
			'header-image'  => [
				'label' => esc_html__( 'Header Image', 'car-washing-center' ),
			],
		],
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'car_washing_center_preloader_hide',
		'label'       => esc_html__( 'Here you can enable or disable your preloader.', 'car-washing-center' ),
		'section'     => 'car_washing_center_additional_setting',
		'default'     => '0',
		'priority'    => 10,
		'tab'      => 'general',
	] );
 
	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'car_washing_center_scroll_enable_setting',
		'label'       => esc_html__( 'Here you can enable or disable your scroller.', 'car-washing-center' ),
		'section'     => 'car_washing_center_additional_setting',
		'default'     => '0',
		'tab'      => 'general',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'car_washing_center_single_page_layout_heading',
		'section'     => 'car_washing_center_additional_setting',
		'tab'      => 'general',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Single Page Layout', 'car-washing-center' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'settings'    => 'car_washing_center_single_page_layout',
		'section'     => 'car_washing_center_additional_setting',
		'tab'      => 'general',
		'default'     => 'One Column',
		'choices'     => [
			'Left Sidebar' => esc_html__( 'Left Sidebar', 'car-washing-center' ),
			'Right Sidebar' => esc_html__( 'Right Sidebar', 'car-washing-center' ),
			'One Column' => esc_html__( 'One Column', 'car-washing-center' ),
		],
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'header-image',
		'settings'    => 'car_washing_center_header_background_attachment_heading',
		'section'     => 'car_washing_center_additional_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Header Image Attachment', 'car-washing-center' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'tab'      => 'header-image',
		'settings'    => 'car_washing_center_header_background_attachment',
		'section'     => 'car_washing_center_additional_setting',
		'default'     => 'scroll',
		'choices'     => [
			'scroll' => esc_html__( 'Scroll', 'car-washing-center' ),
			'fixed' => esc_html__( 'Fixed', 'car-washing-center' ),
		],
		'output' => array(
			array(
				'element'  => '.header-image-box',
				'property' => 'background-attachment',
			),
		),
	 ) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'header-image',
		'settings'    => 'car_washing_center_header_overlay_heading',
		'section'     => 'car_washing_center_additional_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Header Image Overlay', 'car-washing-center' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'car_washing_center_header_overlay_setting',
		'tab'      => 'header-image',
		'label'       => __( 'Overlay Color', 'car-washing-center' ),
		'type'        => 'color',
		'section'     => 'car_washing_center_additional_setting',
		'transport' => 'auto',
		'default'     => '#00000061',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => '.header-image-box:before',
				'property' => 'background',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'header-image',
		'settings'    => 'car_washing_center_header_page_title',
		'label'       => esc_html__( 'Enable / Disable Header Image Page Title.', 'car-washing-center' ),
		'section'     => 'car_washing_center_additional_setting',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'header-image',
		'settings'    => 'car_washing_center_header_breadcrumb',
		'label'       => esc_html__( 'Enable / Disable Header Image Breadcrumb.', 'car-washing-center' ),
		'section'     => 'car_washing_center_additional_setting',
		'default'     => '1',
		'priority'    => 10,
	] );

	// POST SECTION

	Kirki::add_section( 'car_washing_center_blog_post',array(
		'title' => esc_html__( 'Post Settings', 'car-washing-center' ),
		'description'    => esc_html__( 'Here you can add post information.', 'car-washing-center' ),
		'panel' => 'car_washing_center_theme_options_panel',
		'tabs'  => [
			'blog-post' => [
				'label' => esc_html__( 'Blog Post', 'car-washing-center' ),
			],
			'single-post'  => [
				'label' => esc_html__( 'Single Post', 'car-washing-center' ),
			],
		],
		'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'blog-post',
		'settings'    => 'car_washing_center_post_layout_heading',
		'section'     => 'car_washing_center_blog_post',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Blog Layout', 'car-washing-center' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'tab'      => 'blog-post',
		'settings'    => 'car_washing_center_post_layout',
		'section'     => 'car_washing_center_blog_post',
		'default'     => 'Right Sidebar',
		'choices'     => [
			'Left Sidebar' => esc_html__( 'Left Sidebar', 'car-washing-center' ),
			'Right Sidebar' => esc_html__( 'Right Sidebar', 'car-washing-center' ),
			'One Column' => esc_html__( 'One Column', 'car-washing-center' ),
			'Three Columns' => esc_html__( 'Three Columns', 'car-washing-center' ),
			'Four Columns' => esc_html__( 'Four Columns', 'car-washing-center' ),
		],
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'blog-post',
		'settings'    => 'car_washing_center_date_hide',
		'label'       => esc_html__( 'Enable / Disable Post Date', 'car-washing-center' ),
		'section'     => 'car_washing_center_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'blog-post',
		'settings'    => 'car_washing_center_author_hide',
		'label'       => esc_html__( 'Enable / Disable Post Author', 'car-washing-center' ),
		'section'     => 'car_washing_center_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'blog-post',
		'settings'    => 'car_washing_center_comment_hide',
		'label'       => esc_html__( 'Enable / Disable Post Comment', 'car-washing-center' ),
		'section'     => 'car_washing_center_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'blog-post',
		'settings'    => 'car_washing_center_blog_post_featured_image',
		'label'       => esc_html__( 'Enable / Disable Post Image', 'car-washing-center' ),
		'section'     => 'car_washing_center_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'blog-post',
		'settings'    => 'car_washing_center_length_setting_heading',
		'section'     => 'car_washing_center_blog_post',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Blog Post Content Limit', 'car-washing-center' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'tab'      => 'blog-post',
		'settings'    => 'car_washing_center_length_setting',
		'section'     => 'car_washing_center_blog_post',
		'default'     => '15',
		'priority'    => 10,
		'choices'  => [
					'min'  => -10,
					'max'  => 40,
		 			'step' => 1,
				],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'single-post',
		'settings'    => 'car_washing_center_single_post_date_hide',
		'label'       => esc_html__( 'Enable / Disable Single Post Date', 'car-washing-center' ),
		'section'     => 'car_washing_center_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'single-post',
		'settings'    => 'car_washing_center_single_post_author_hide',
		'label'       => esc_html__( 'Enable / Disable Single Post Author', 'car-washing-center' ),
		'section'     => 'car_washing_center_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'single-post',
		'settings'    => 'car_washing_center_single_post_comment_hide',
		'label'       => esc_html__( 'Enable / Disable Single Post Comment', 'car-washing-center' ),
		'section'     => 'car_washing_center_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'single-post',
		'label'       => esc_html__( 'Enable / Disable Single Post Tag', 'car-washing-center' ),
		'settings'    => 'car_washing_center_single_post_tag',
		'section'     => 'car_washing_center_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'single-post',
		'label'       => esc_html__( 'Enable / Disable Single Post Category', 'car-washing-center' ),
		'settings'    => 'car_washing_center_single_post_category',
		'section'     => 'car_washing_center_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'single-post',
		'settings'    => 'car_washing_center_single_post_featured_image',
		'label'       => esc_html__( 'Enable / Disable Single Post Image', 'car-washing-center' ),
		'section'     => 'car_washing_center_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'single-post',
		'settings'    => 'car_washing_center_single_post_radius',
		'section'     => 'car_washing_center_blog_post',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Single Post Image Border Radius(px)', 'car-washing-center' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'car_washing_center_single_post_border_radius',
		'tab'      => 'single-post',
		'label'       => __( 'Enter a value in pixels. Example:15px', 'car-washing-center' ),
		'type'        => 'text',
		'section'     => 'car_washing_center_blog_post',
		'transport' => 'auto',
		'output' => array(
			array(
				'element'  => array('.post-img img'),
				'property' => 'border-radius',
			),
		),
	) );

	// No Results Page Settings

	Kirki::add_section( 'car_washing_center_no_result_section', array(
		'title'          => esc_html__( '404 & No Results Page Settings', 'car-washing-center' ),
		'panel'    => 'car_washing_center_theme_options_panel',
		'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'car_washing_center_page_not_found_title_heading',
		'section'     => 'car_washing_center_no_result_section',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( '404 Page Title', 'car-washing-center' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'car_washing_center_page_not_found_title',
		'section'  => 'car_washing_center_no_result_section',
		'default'  => esc_html__('404 Error!', 'car-washing-center'),
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'car_washing_center_page_not_found_text_heading',
		'section'     => 'car_washing_center_no_result_section',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( '404 Page Text', 'car-washing-center' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'car_washing_center_page_not_found_text',
		'section'  => 'car_washing_center_no_result_section',
		'default'  => esc_html__('The page you are looking for may have been moved, deleted, or possibly never existed.', 'car-washing-center'),
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'     => 'custom',
		'settings' => 'car_washing_center_page_not_found_line_break',
		'section'  => 'car_washing_center_no_result_section',
		'default'  => '<hr>',
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'car_washing_center_no_results_title_heading',
		'section'     => 'car_washing_center_no_result_section',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'No Results Title', 'car-washing-center' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'car_washing_center_no_results_title',
		'section'  => 'car_washing_center_no_result_section',
		'default'  => esc_html__('Nothing Found', 'car-washing-center'),
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'car_washing_center_no_results_content_heading',
		'section'     => 'car_washing_center_no_result_section',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'No Results Content', 'car-washing-center' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'car_washing_center_no_results_content',
		'section'  => 'car_washing_center_no_result_section',
		'default'  => esc_html__('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'car-washing-center'),
	] );
	
	// FOOTER SECTION

	Kirki::add_section( 'car_washing_center_footer_section', array(
        'title'          => esc_html__( 'Footer Settings', 'car-washing-center' ),
        'description'    => esc_html__( 'Here you can change copyright text', 'car-washing-center' ),
        'panel'    => 'car_washing_center_theme_options_panel',
		'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'car_washing_center_footer_text_heading',
		'section'     => 'car_washing_center_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Text', 'car-washing-center' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'car_washing_center_footer_text',
		'section'  => 'car_washing_center_footer_section',
		'default'  => '',
		'priority' => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'car_washing_center_footer_enable_heading',
		'section'     => 'car_washing_center_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Footer Link', 'car-washing-center' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'car_washing_center_copyright_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'car-washing-center' ),
		'section'     => 'car_washing_center_footer_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'car-washing-center' ),
			'off' => esc_html__( 'Disable', 'car-washing-center' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'car_washing_center_footer_background_widget_heading',
		'section'     => 'car_washing_center_footer_section',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Widget Background', 'car-washing-center' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id',
	[
		'settings'    => 'car_washing_center_footer_background_widget',
		'type'        => 'background',
		'section'     => 'car_washing_center_footer_section',
		'default'     => [
			'background-color'      => 'rgba(18,18,18,1)',
			'background-image'      => '',
			'background-repeat'     => 'no-repeat',
			'background-position'   => 'center center',
			'background-size'       => 'cover',
			'background-attachment' => 'scroll',
		],
		'transport'   => 'auto',
		'output'      => [
			[
				'element' => '.footer-widget',
			],
		],
	]);

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'car_washing_center_footer_copright_color_heading',
		'section'     => 'car_washing_center_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Copyright Background Color', 'car-washing-center' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'car_washing_center_footer_copright_color',
		'type'        => 'color',
		'label'       => __( 'Background Color', 'car-washing-center' ),
		'section'     => 'car_washing_center_footer_section',
		'transport' => 'auto',
		'default'     => '#121212',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => '.footer-copyright',
				'property' => 'background',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'car_washing_center_footer_copright_text_color_heading',
		'section'     => 'car_washing_center_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Copyright Text Color', 'car-washing-center' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'car_washing_center_footer_copright_text_color',
		'type'        => 'color',
		'label'       => __( 'Text Color', 'car-washing-center' ),
		'section'     => 'car_washing_center_footer_section',
		'transport' => 'auto',
		'default'     => '#ffffff',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => array( '.footer-copyright a', '.footer-copyright p'),
				'property' => 'color',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'custom',
		'settings'    => 'car_washing_center_logo_settings_premium_features_footer',
		'section'     => 'car_washing_center_footer_section',
		'priority'    => 50,
		'default'     => '<h3 style="color: #2271b1; padding:5px 20px 5px 20px; background:#fff; margin:0;  box-shadow: 0 2px 4px rgba(0,0,0, .2); ">' . esc_html__( 'Elevate your footer with premium features:', 'car-washing-center' ) . '</h3><ul style="color: #121212; padding: 5px 20px 20px 30px; background:#fff; margin:0;" ><li style="list-style-type: square;" >' . esc_html__( 'Tailor your footer layout', 'car-washing-center' ) . '</li><li style="list-style-type: square;" >'.esc_html__( 'Integrate an email subscription form', 'car-washing-center' ) .'</li><li style="list-style-type: square;" >'.esc_html__( 'Personalize social media icons', 'car-washing-center' ) .'</li><li style="list-style-type: square;" >'.esc_html__( '....and Much More', 'car-washing-center' ) . '</li></ul><div style="background: #fff; padding: 0px 10px 10px 20px;"><a href="' . esc_url( __( 'https://www.wpelemento.com/products/car-wash-wordpress-theme', 'car-washing-center' ) ) . '" class="button button-primary" target="_blank">'. esc_html__( 'Upgrade for more', 'car-washing-center' ) .'</a></div>',
	) );
	
	// Footer Social Icons Section

	Kirki::add_section( 'car_washing_center_footer_social_media_section', array(
		'title'          => esc_html__( 'Footer Social Icons', 'car-washing-center' ),
		'panel'    => 'car_washing_center_theme_options_panel',
		'priority'       => 160,
	) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'car_washing_center_footer_social_icon_hide_heading',
		'section'     => 'car_washing_center_footer_social_media_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable or Disable your Footer Social Icon', 'car-washing-center' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'car_washing_center_footer_social_icon_hide',
		'label'       => esc_html__( 'Enable or Disable Social Icon.', 'car-washing-center' ),
		'section'     => 'car_washing_center_footer_social_media_section',
		'default'     => false,
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'car_washing_center_enable_footer_socail_link_align_heading',
		'section'     => 'car_washing_center_footer_social_media_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Social Media Text Align', 'car-washing-center' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'car_washing_center_enable_footer_socail_link_align',
		'type'        => 'select',
		'priority'    => 10,
		'label'       => __( 'Text Align', 'car-washing-center' ),
		'section'     => 'car_washing_center_footer_social_media_section',
		'default'     => 'left',
		'choices'     => [
			'center' => esc_html__( 'center', 'car-washing-center' ),
			'right' => esc_html__( 'right', 'car-washing-center' ),
			'left' => esc_html__( 'left', 'car-washing-center' ),
		],
		'output' => array(
			array(
				'element'  => array( '.footer-links'),
				'property' => 'text-align',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'priority'    => 10,
		'settings'    => 'car_washing_center_enable_footer_socail_link',
		'section'     => 'car_washing_center_footer_social_media_section',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Social Media Link', 'car-washing-center' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'repeater',
		'priority'    => 10,
		'section'     => 'car_washing_center_footer_social_media_section',
		'row_label' => [
			'type'  => 'field',
			'value' => esc_html__( 'Footer Social Icons', 'car-washing-center' ),
			'field' => 'link_text',
		],
		'button_label' => esc_html__('Add New Social Icon', 'car-washing-center' ),
		'settings'     => 'car_washing_center_social_links_settings_footer',
		'default'      => '',
		'fields' 	   => [
			'link_text' => [
				'type'        => 'text',
				'label'       => esc_html__( 'Icon', 'car-washing-center' ),
				'description' => esc_html__( 'Add the fontawesome class ex: "fab fa-facebook-f".', 'car-washing-center' ). ' <a href="https://fontawesome.com/search?o=r&m=free&f=brands" target="_blank"><strong>' . esc_html__( 'View All', 'car-washing-center' ) . ' </strong></a>',
				'default'     => '',
			],
			'link_url' => [
				'type'        => 'url',
				'label'       => esc_html__( 'Social Link', 'car-washing-center' ),
				'description' => esc_html__( 'Add the social icon url here.', 'car-washing-center' ),
				'default'     => '',
			],
		],
		'choices' => [
			'limit' => 20
		],
	] );

}
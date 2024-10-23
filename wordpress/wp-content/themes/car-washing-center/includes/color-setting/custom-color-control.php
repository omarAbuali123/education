<?php

  $car_washing_center_theme_custom_setting_css = '';

	// Global Color
	$car_washing_center_theme_color = get_theme_mod('car_washing_center_theme_color', '#DE0B04');

	$car_washing_center_theme_custom_setting_css .=':root {';
		$car_washing_center_theme_custom_setting_css .='--primary-color: '.esc_attr($car_washing_center_theme_color ).'!important;';
	$car_washing_center_theme_custom_setting_css .='}';
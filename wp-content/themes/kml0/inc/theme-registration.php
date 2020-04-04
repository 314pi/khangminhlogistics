<?php
/**
 * Register automatic updates for this theme.
 */

use ProteusThemes\ThemeRegistration\ThemeRegistration;

class CargoPressThemeRegistration {
	function __construct() {
		$this->enable_theme_registration();
	}

	/**
	 * Load theme registration and automatic updates.
	 */
	private function enable_theme_registration() {
		$config = array(
			'item_name'        => 'CargoPress',
			'theme_slug'       => 'cargopress-pt',
			'item_id'          => 2812,
			'tf_item_id'       => 11601531,
			'customizer_panel' => 'panel_cargopress',
			'build'            => 'tf',
		);
		$pt_theme_registration = ThemeRegistration::get_instance( $config );
	}
}

if ( ! CARGOPRESS_DEVELOPMENT ) {
	$cargopress_theme_registration = new CargoPressThemeRegistration();
}

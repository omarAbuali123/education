<?php
if ( ! class_exists( 'Car_Washing_Center_Plugin_Activation_WPElemento_Importer' ) ) {
    /**
     * Car_Washing_Center_Plugin_Activation_WPElemento_Importer initial setup
     *
     * @since 1.6.2
     */

    class Car_Washing_Center_Plugin_Activation_WPElemento_Importer {

        private static $car_washing_center_instance;
        public $car_washing_center_action_count;
        public $car_washing_center_recommended_actions;

        /** Initiator **/
        public static function get_instance() {
          if ( ! isset( self::$car_washing_center_instance) ) {
            self::$car_washing_center_instance = new self();
          }
          return self::$car_washing_center_instance;
        }

        /*  Constructor */
        public function __construct() {

            add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_scripts' ) );

            // ---------- wpelementoimpoter Plugin Activation -------
            add_filter( 'car_washing_center_recommended_plugins', array($this, 'car_washing_center_recommended_elemento_importer_plugins_array') );

            $car_washing_center_actions                   = $this->car_washing_center_get_recommended_actions();
            $this->car_washing_center_action_count        = $car_washing_center_actions['count'];
            $this->car_washing_center_recommended_actions = $car_washing_center_actions['actions'];

            add_action( 'wp_ajax_create_pattern_setup_builder', array( $this, 'create_pattern_setup_builder' ) );
        }

        public function car_washing_center_recommended_elemento_importer_plugins_array($car_washing_center_plugins){
            $car_washing_center_plugins[] = array(
                    'name'     => esc_html__('WPElemento Importer', 'car-washing-center'),
                    'slug'     =>  'wpelemento-importer',
                    'function' => 'WPElemento_Importer_ThemeWhizzie',
                    'desc'     => esc_html__('We highly recommend installing the WPElemento Importer plugin for importing the demo content with Elementor.', 'car-washing-center'),               
            );
            return $car_washing_center_plugins;
        }

        public function enqueue_scripts() {
            wp_enqueue_script('updates');      
            wp_register_script( 'car-washing-center-plugin-activation-script', esc_url(get_template_directory_uri()) . '/includes/getstart/js/plugin-activation.js', array('jquery') );
            wp_localize_script('car-washing-center-plugin-activation-script', 'car_washing_center_plugin_activate_plugin',
                array(
                    'installing' => esc_html__('Installing', 'car-washing-center'),
                    'activating' => esc_html__('Activating', 'car-washing-center'),
                    'error' => esc_html__('Error', 'car-washing-center'),
                    'ajax_url' => esc_url(admin_url('admin-ajax.php')),
                    'wpelementoimpoter_admin_url' => esc_url(admin_url('admin.php?page=wpelemento-importer-tgmpa-install-plugins')),
                    'addon_admin_url' => esc_url(admin_url('admin.php?page=wpelementoimporter-wizard'))
                )
            );
            wp_enqueue_script( 'car-washing-center-plugin-activation-script' );

        }

        // --------- Plugin Actions ---------
        public function car_washing_center_get_recommended_actions() {

            $car_washing_center_act_count  = 0;
            $car_washing_center_actions_todo = get_option( 'recommending_actions', array());

            $car_washing_center_plugins = $this->car_washing_center_get_recommended_plugins();

            if ($car_washing_center_plugins) {
                foreach ($car_washing_center_plugins as $car_washing_center_key => $car_washing_center_plugin) {
                    $car_washing_center_action = array();
                    if (!isset($car_washing_center_plugin['slug'])) {
                        continue;
                    }

                    $car_washing_center_action['id']   = 'install_' . $car_washing_center_plugin['slug'];
                    $car_washing_center_action['desc'] = '';
                    if (isset($car_washing_center_plugin['desc'])) {
                        $car_washing_center_action['desc'] = $car_washing_center_plugin['desc'];
                    }

                    $car_washing_center_action['name'] = '';
                    if (isset($car_washing_center_plugin['name'])) {
                        $car_washing_center_action['title'] = $car_washing_center_plugin['name'];
                    }

                    $car_washing_center_link_and_is_done  = $this->car_washing_center_get_plugin_buttion($car_washing_center_plugin['slug'], $car_washing_center_plugin['name'], $car_washing_center_plugin['function']);
                    $car_washing_center_action['link']    = $car_washing_center_link_and_is_done['button'];
                    $car_washing_center_action['is_done'] = $car_washing_center_link_and_is_done['done'];
                    if (!$car_washing_center_action['is_done'] && (!isset($car_washing_center_actions_todo[$car_washing_center_action['id']]) || !$car_washing_center_actions_todo[$car_washing_center_action['id']])) {
                        $car_washing_center_act_count++;
                    }
                    $car_washing_center_recommended_actions[] = $car_washing_center_action;
                    $car_washing_center_actions_todo[]        = array('id' => $car_washing_center_action['id'], 'watch' => true);
                }
                return array('count' => $car_washing_center_act_count, 'actions' => $car_washing_center_recommended_actions);
            }

        }

        public function car_washing_center_get_recommended_plugins() {

            $car_washing_center_plugins = apply_filters('car_washing_center_recommended_plugins', array());
            return $car_washing_center_plugins;
        }

        public function car_washing_center_get_plugin_buttion($slug, $name, $function) {
                $car_washing_center_is_done      = false;
                $car_washing_center_button_html  = '';
                $car_washing_center_is_installed = $this->is_plugin_installed($slug);
                $car_washing_center_plugin_path  = $this->get_plugin_basename_from_slug($slug);
                $car_washing_center_is_activeted = (class_exists($function)) ? true : false;
                if (!$car_washing_center_is_installed) {
                    $car_washing_center_plugin_install_url = add_query_arg(
                        array(
                            'action' => 'install-plugin',
                            'plugin' => $slug,
                        ),
                        self_admin_url('update.php')
                    );
                    $car_washing_center_plugin_install_url = wp_nonce_url($car_washing_center_plugin_install_url, 'install-plugin_' . esc_attr($slug));
                    $car_washing_center_button_html        = sprintf('<a class="car-washing-center-plugin-install install-now button-secondary button" data-slug="%1$s" href="%2$s" aria-label="%3$s" data-name="%4$s">%5$s</a>',
                        esc_attr($slug),
                        esc_url($car_washing_center_plugin_install_url),
                        sprintf(esc_html__('Install %s Now', 'car-washing-center'), esc_html($name)),
                        esc_html($name),
                        esc_html__('Install & Activate', 'car-washing-center')
                    );
                } elseif ($car_washing_center_is_installed && !$car_washing_center_is_activeted) {

                    $car_washing_center_plugin_activate_link = add_query_arg(
                        array(
                            'action'        => 'activate',
                            'plugin'        => rawurlencode($car_washing_center_plugin_path),
                            'plugin_status' => 'all',
                            'paged'         => '1',
                            '_wpnonce'      => wp_create_nonce('activate-plugin_' . $car_washing_center_plugin_path),
                        ), self_admin_url('plugins.php')
                    );

                    $car_washing_center_button_html = sprintf('<a class="car-washing-center-plugin-activate activate-now button-primary button" data-slug="%1$s" href="%2$s" aria-label="%3$s" data-name="%4$s">%5$s</a>',
                        esc_attr($slug),
                        esc_url($car_washing_center_plugin_activate_link),
                        sprintf(esc_html__('Activate %s Now', 'car-washing-center'), esc_html($name)),
                        esc_html($name),
                        esc_html__('Activate', 'car-washing-center')
                    );
                } elseif ($car_washing_center_is_activeted) {
                    $car_washing_center_button_html = sprintf('<div class="action-link button disabled"><span class="dashicons dashicons-yes"></span> %s</div>', esc_html__('Active', 'car-washing-center'));
                    $car_washing_center_is_done     = true;
                }

                return array('done' => $car_washing_center_is_done, 'button' => $car_washing_center_button_html);
            }
        public function is_plugin_installed($slug) {
            $car_washing_center_installed_plugins = $this->get_installed_plugins(); // Retrieve a list of all installed plugins (WP cached).
            $car_washing_center_file_path         = $this->get_plugin_basename_from_slug($slug);
            return (!empty($car_washing_center_installed_plugins[$car_washing_center_file_path]));
        }
        public function get_plugin_basename_from_slug($slug) {
            $car_washing_center_keys = array_keys($this->get_installed_plugins());
            foreach ($car_washing_center_keys as $car_washing_center_key) {
                if (preg_match('|^' . $slug . '/|', $car_washing_center_key)) {
                    return $car_washing_center_key;
                }
            }
            return $slug;
        }

        public function get_installed_plugins() {

            if (!function_exists('get_plugins')) {
                require_once ABSPATH . 'wp-admin/includes/plugin.php';
            }

            return get_plugins();
        }
        public function create_pattern_setup_builder() {

            $edit_page = admin_url().'post-new.php?post_type=page&create_pattern=true';
            echo json_encode(['page_id'=>'','edit_page_url'=> $edit_page ]);

            exit;
        }

    }
}
/**
 * Kicking this off by calling 'get_instance()' method
 */
Car_Washing_Center_Plugin_Activation_WPElemento_Importer::get_instance();
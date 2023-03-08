<?php
/**
 * Plugin Name: Text Typing - Block
 * Description: Make your text in amazing typing effect.
 * Version: 1.0.3
 * Author: bPlugins LLC
 * Author URI: http://bplugins.com
 * License: GPLv3
 * License URI: https://www.gnu.org/licenses/gpl-3.0.txt
 * Text Domain: text-typing
 */

// ABS PATH
if ( !defined( 'ABSPATH' ) ) { exit; }

// Constant
define( 'TTB_PLUGIN_VERSION', isset($_SERVER['HTTP_HOST']) && 'localhost' === $_SERVER['HTTP_HOST'] ? time() : '1.0.3' );
define( 'TTB_ASSETS_DIR', plugin_dir_url( __FILE__ ) . 'assets/' );

// Text Typing
class TTBTextTyping{
	function __construct(){
		add_action( 'enqueue_block_assets', [$this, 'enqueueBlockAssets'] );
		add_action( 'init', [$this, 'onInit'] );
	}

	function enqueueBlockAssets(){ wp_enqueue_script( 'typedJS', TTB_ASSETS_DIR . 'js/typed.min.js', [], '2.0.12', true ); }

	function onInit() {
		wp_register_style( 'ttb-text-typing-editor-style', plugins_url( 'dist/editor.css', __FILE__ ), [ 'wp-edit-blocks' ], TTB_PLUGIN_VERSION ); // Backend Style
		wp_register_style( 'ttb-text-typing-style', plugins_url( 'dist/style.css', __FILE__ ), [ 'wp-editor' ], TTB_PLUGIN_VERSION ); // Frontend Style

		register_block_type( __DIR__, [
			'editor_style'		=> 'ttb-text-typing-editor-style',
			'style'				=> 'ttb-text-typing-style',
			'render_callback'	=> [$this, 'render']
		] ); // Register Block
		
		wp_set_script_translations( 'ttb-text-typing-editor-script', 'text-typing', plugin_dir_path( __FILE__ ) . 'languages' ); // Translate
	}

	function render( $attributes ){
		extract( $attributes );

		$className = $className ?? '';
		$ttbBlockClassName = 'wp-block-ttb-text-typing ' . $className . ' align' . $align;

		ob_start(); ?>
		<div class='<?php echo esc_attr( $ttbBlockClassName ); ?>' id='ttbTextTyping-<?php echo esc_attr( $cId ) ?>' data-attributes='<?php echo esc_attr( wp_json_encode( $attributes ) ); ?>'></div>

		<?php return ob_get_clean();
	} // Render
}
new TTBTextTyping;
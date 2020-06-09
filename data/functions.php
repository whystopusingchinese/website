<?php
/**
 * @param      $key
 * @param bool $default
 *
 * @return bool
 */
if ( ! function_exists( 'chex_option' ) ) {
	function chex_option( $key, $default = false ) {
		global $chex;
		return ( isset( $chex[ $key ] ) ) ? $chex[ $key ] : $default;
	}
}

if ( ! function_exists( 'chex_template' ) ) {
	function chex_template( $file = false ) {
		$content = '';
		if ( ! empty( $file ) ) {
			ob_start();
			include TEMPLATE_DIR . $file;
			$content = ob_get_clean();
		}
		return $content;
	}
}

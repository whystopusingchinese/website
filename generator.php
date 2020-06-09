<?php
global $github_sha;
$github_sha = ( isset( $argv[1] ) ) ? $argv[1] : 'Unknown';
$base       = __DIR__ . '/';
$output     = $base . 'output/';
$files      = glob( $base . '*.php' );

@mkdir( $output );

function recurse_copy( $src, $dst ) {
	$dir = opendir( $src );
	@mkdir( $dst );
	while ( false !== ( $file = readdir( $dir ) ) ) {
		if ( ( $file != '.' ) && ( $file != '..' ) ) {
			if ( is_dir( $src . '/' . $file ) ) {
				recurse_copy( $src . '/' . $file, $dst . '/' . $file );
			} else {
				copy( $src . '/' . $file, $dst . '/' . $file );
			}
		}
	}
	closedir( $dir );
}

if ( ! empty( $files ) ) {
	foreach ( $files as $_file ) {
		if ( basename( __FILE__ ) !== basename( $_file ) ) {
			ob_start();
			include( $_file );
			$data = ob_get_clean();

			$data      = str_replace( '.php', '.html', $data );
			$save_file = str_replace( '.php', '.html', basename( $_file ) );
			file_put_contents( $output . $save_file, $data );
		}
	}
	recurse_copy( $base . '/assets/', $output . 'assets/' );
}
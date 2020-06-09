<?php

$alternates = [];

$files = glob( __DIR__ . '/alternates/*.php' );

if ( ! empty( $files ) ) {
	foreach ( $files as $file ) {
		$alternates[ str_replace( '.php', '', basename( $file ) ) ] = include $file;
	}
}
return $alternates;
<?php
if ( ! defined( 'TEMPLATE_DIR' ) ) {
	defined( 'TEMPLATE_DIR' ) || define( 'TEMPLATE_DIR', __DIR__ . '/../template-parts/' );
	global $chex, $chex_hardware, $chex_softwares, $chex_investments;
	require __DIR__ . '/global.php';
	require __DIR__ . '/hardware.php';
	require __DIR__ . '/software.php';
	require __DIR__ . '/investments.php';
	require __DIR__ . '/functions.php';
}
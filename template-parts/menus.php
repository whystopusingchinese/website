<nav class="navbar sticky-top bg-white text-dark navbar-light rounded navbar-expand-lg navbar-expand-md py-3">
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
			aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarNavDropdown">
		<ul class="navbar-nav offset-md-0 offset-lg-3">
			<?php
			$menus = chex_option( 'menus' );
			if ( ! empty( $menus ) ) {
				global $chex_active_page;
				foreach ( $menus as $id => $title ) {
					$is_active = ( isset( $chex_active_page ) && $chex_active_page === $id ) ? 'active' : '';
					echo "<li class=\"nav-item\"><a class=\"nav-link ${is_active}\" href=\"${id}\">${title}</a></li>";
				}
			}
			?>
		</ul>
	</div>
</nav>
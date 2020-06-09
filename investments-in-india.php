<?php
$chex_active_page = basename( __FILE__ );
include 'template-parts/header.php'; ?>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb" class="bg-light">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Investments in India</li>
    </ol>
</nav>

<div class="row mb-2">
    <div class="col-md-12">
        <p>India is the newest country to embrace technology in a huge way. We have the highest number of
            young adults than any other country in the world. This has created numerous startups with unlimited growth
            potential.</p>
        <p>China and its investors have realized the growth capacity and economic potential of India. They
            have figured that this is the fastest way they can grow their wealth in the shortest possible time. They
            look for promising new startup ideas, who are looking for funding to expand their business, offer them
            very attractive terms, and invest in them, only to take away all the profits to China. These investments
            range from about $100Mn all the way up to a staggering $3.8Bn!</p>
        <p class="lead">Below are a list of prominent Indian companies who have been funded by Chinese investment firms.</p>
    </div>
</div>

<div class="row mb-5">
    <div class="col-md-4 mb-3">
        <h5>Chinese Investors</h5>
		<?php
		global $chex_investments;
		foreach ( $chex_investments[ 'investors' ] as $investor ) {
			if ( !empty( $investor[ 'icon' ] ) ) {
				echo '<span class="d-inline-block mr-4 border rounded p-1 m-1"><img class="mr-2" src="assets/img/investors/' . $investor[ 'icon' ] . '" width="40" height"40">' . $investor[ 'name' ] . '</span>';
			} else {
				echo '<span class="d-inline-block mr-4 border rounded p-2 m-1">' . $investor[ 'name' ] . '</span>';
			}
		}
		?>
    </div>
    <div class="col-md-8 mb-3">
        <h5>Investments in India <span class="badge badge-info">By Industry</span></h5>
		<?php
		$industries = '';
		$cards = '';
		$count = 1;
		foreach ( $chex_investments[ 'industry' ] as $key => $industry ) {
			$industries .= '<button type="button" class="btn btn-outline-secondary" data-toggle="collapse" href="#' . $key . '">
                        <i class="fas fa-' . $industry[ 'icon' ] . '"></i> ' . $industry[ 'name' ] . '</button>';
			$desc = $industry[ 'desc' ];
			$is_show = ( 1 === $count ) ? 'show' : '';
			$companies = '';
			foreach ( $chex_investments[ 'ind_companies' ][ $key ] as $index => $ind_company ) {
				$investors = '<ul class="pl-3 m-0">';
				foreach ( $ind_company[ 'investors' ] as $investor ) {
					$investors .= '<li class="pl-0 my-1">' . $chex_investments[ 'investors' ][ $investor ][ 'name' ] . '</li>';
				}
				$investors .= '</ul>';
				$companies .= '<span class="align-middle d-inline-block border rounded py-1 px-2 mr-2 mb-2">
                    <a href="' . $ind_company[ 'website' ] . '" target="_blank"><img class="mr-1" src="assets/img/ind_companies/' . $ind_company[ 'logo' ] . '" width="30"><strong>' . $ind_company[ 'name' ] . '</strong></a>
                    <small>' . rtrim( $investors, ', ' ) . '</small>
                    <span class="badge badge-secondary">' . $ind_company[ 'amount' ] . '</span></span>';
			}
			$cards .= '<div class="card">
                    <div id="' . $key . '" class="collapse ' . $is_show . '" aria-labelledby="headingOne"
                         data-parent="#chnInvestments">
                        <div class="card-body">
                            <h3 class="mb-4 text-secondary"><i class="fas fa-' . $industry[ 'icon' ] . '"></i> ' . $industry[ 'name' ] . '</h3>
                            <p>' . $desc . '</p>' . $companies . '                            
                        </div>
                    </div>
                </div>';
			$count++;
		}
		?>
        <div class="btn-group mb-3" role="group" aria-label="Basic example"> <?php echo $industries; ?> </div>
        <div class="accordion" id="chnInvestments"><?php echo $cards; ?> </div>
    </div>
</div>

<?php include 'template-parts/footer.php'; ?>


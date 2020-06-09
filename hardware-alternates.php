<?php
$chex_active_page = basename( __FILE__ );
include 'template-parts/header.php'; ?>

	<nav aria-label="breadcrumb">
		<ol class="breadcrumb" class="bg-light">
			<li class="breadcrumb-item"><a href="index.php">Home</a></li>
			<li class="breadcrumb-item active" aria-current="page">Hardware Alternates</li>
		</ol>
	</nav>

	<div class="container">
		<div class="row">
			<div class="col-md-12 col-lg-8 mb-4 text-justify pl-0">
				<p>While most of us believe that it is impossible or impractical to eliminate Chinese goods from our
					lives, the reality is far from that. There are plenty of companies, both Indian and non-Chinese,
					that
					serve as good, sometimes even better, alternates to chinese goods. Consider Taiwan, for example.
					Until
					the 90s, Taiwan was the world's 'go-to' for manufacture of electronics, until China began its
					run.</p>
				<p>It makes sense for us to mostly spend our money buying Indian goods wherever possible, so our money
					remains within India and helps our economy. If we are unable to find Indian goods to meet our needs,
					we
					should prefer buying goods from a country which does not threaten India's safety, our economy, and
					our
					sovereignty.</p>
				<p>Yes, some of the alternates listed on this page also <em>probably</em> manufacture in China.
					Notwithstanding, it is
					always better to purchase from a company which is not headquartered in China, which may contract
					manufacture in China, rather than buy from a Chinese-headquartered company. For example, Apple and
					Foxconn are American and Taiwanese companies respectively, which have outsourced their manufacturing
					to
					China. <strong>This is the difference between 'Chinese Goods' and goods 'Made in China'.</strong>
				</p>
				<p class="lead">Chinese arm twisting of India should stop, and we should send a clear message!</p>
			</div>
			<div class="col-md-12 col-lg-4 mb-4 bg-light p-3">
				<h4 class="text-danger border-bottom pb-3 mb-3"><i class="far fa-question-circle"></i> Did you know?
				</h4>
				<p style="font-size: 13px;">Devices manufactured by the Chinese manufacturer <em>Huawei</em>,
					particularly
					their routers, were found to contain malware that allowed them to view, access and monitor data from
					millions of users across the world.</p>
				<p style="font-size: 13px;">This was detected by the US, and consequently Huawei was
					banned from selling their products in the US.</p>
				<hr>
				<p style="line-height: 1.1em; !important; font-size: 12px;"><strong>Interesting to read:</strong>
					<span class="d-block mb-2 mt-3"><a
								href="https://www.cnet.com/news/us-finds-huawei-has-backdoor-access-to-mobile-networks-globally-report-says/"
								target="_blank">CNET:</a> US finds Huawei has backdoor access to mobile networks globally</span>
					<span class="d-block mb-2"><a
								href="https://www.cnet.com/news/british-carrier-vodafone-found-hidden-backdoors-in-huawei-equipment-says-report/"
								target="_blank">CNET:</a> Vodafone found hidden backdoors in Huawei equipment</span>
					<span class="d-block mb-2"><a
								href="https://www.whitehouse.gov/presidential-actions/executive-order-securing-information-communications-technology-services-supply-chain/"
								target="_blank">White House:</a> Trump effectively bans Huawei with a national security order</span>
					<span class="d-block mb-2"><a
								href="https://www.reuters.com/article/us-huawei-iran-sanctions-exclusive/exclusive-newly-obtained-documents-show-huawei-role-in-shipping-prohibited-u-s-gear-to-iran-idUSKBN20P1VA"
								target="_blank">Reuters:</a> Newly obtained documents show Huawei role in shipping
                        prohibited
                        U.S. gear to Iran</span></p>
			</div>
		</div>
	</div>

	<div class="row mt-4 mb-5">
		<div class="col-md-12 col-lg-4 mb-3">
			<h5 class=" mb-3">Chinese</h5>
			<?php
			global $chex_hardware;
			foreach ( $chex_hardware['china'] as $item ) {
				echo <<<HTML
<figure class="figure mr-3">
  <img src="assets/img/hardware/{$item['icon']}" class="figure-img img-fluid rounded" alt="{$item['name']}" style="max-width:50px;">
  <figcaption class="figure-caption text-center">{$item['name']}</figcaption>
</figure>
HTML;
			}
			?>
		</div>
		<div class="col-md-12 col-lg-8 mb-3">
			<h5>Alternates <span class="badge badge-info">By Country</span></h5>
			<?php
			$card    = '';
			$oth_btn = '';
			foreach ( $chex_hardware['alternates'] as $key => $alternate ) {
				$alts      = array();
				$is_india  = ( 'India' === $alternate['name'] );
				$is_show   = ( $is_india ) ? 'show' : '';
				$btn_class = ( $is_india ) ? 'success' : 'secondary';
				$btn_html  = "<button type='button' class='btn btn-outline-{$btn_class}' data-toggle='collapse' href='#{$key}'><span class='flag-icon flag-icon-{$alternate['flag']}'></span> {$alternate['name'] } </button>";

				foreach ( $alternate['companies'] as $company ) {
					$border = ( $is_india ) ? 'border-success' : 'border';
					$alts[] = "<a style='text-decoration:none;' href='{$company['web']}' target='_blank'> 
<img src='assets/img/hardware/{$company['icon']}' class='border p-1 rounded img-thumbnail ${border} mb-2 mr-1' style='max-height:75px;'></a>";
				}

				$alts = implode( '<span class="px-2"> </span>', $alts );
				if ( $is_india ) {
					$ind_btn = $btn_html;
				} else {
					$oth_btn .= $btn_html;
				}


				$card .= <<<HTML
<div class="card">
	<div id="${key}" class="collapse ${is_show}" aria-labelledby="headingOne" data-parent="#hardwareAlternates">
		<div class="card-body"> <h3 class="mb-4"><span class="flag-icon flag-icon-{$alternate['flag']}"></span> {$alternate['name']}</h3> ${alts} </div>
	</div>
</div>
HTML;
			}

			?>

			<div class="btn-toolbar mb-3" role="toolbar" aria-label="Toolbar with button groups">
				<div class="btn-group mr-2 mb-2" role="group" aria-label="First group"> <?php echo $ind_btn; ?> </div>
				<div class="btn-group mr-2 mb-2" role="group" aria-label="Second group"> <?php echo $oth_btn; ?> </div>
			</div>
			<div class="accordion" id="hardwareAlternates"> <?php echo $card; ?> </div>
		</div>
	</div>

<?php include 'template-parts/footer.php'; ?>
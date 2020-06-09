<?php
$chex_active_page = basename( __FILE__ );
include 'template-parts/header.php';

$banner = chex_option( 'banner' );
echo "<div class=\"jumbotron p-0 p-md-0 text-white rounded bg-dark\">${banner}</div>";

// Videos
include 'template-parts/index/videos.php';
?>

	<div class="row my-2">
		<div class="col-md-12 col-lg-3">
			<?php echo chex_template( 'index/site-notice.php' ); ?>
		</div>
		<div class="col-md-12 col-lg-9 text-justify">
			<?php echo chex_template( 'index/intro_content.php' ); ?>
		</div>
	</div>

	<div class="container">
		<div class="row mb-4 py-3 bg-light">
			<div class="col-md-12 mb-3">
				<h3 class="text-center">What it means for India</h3>
				<hr>
			</div>
			<div class="col-md-12 col-lg-6 text-justify">
				<h4>Economic Impact</h4>
				<p><strong>Like most other countries, we Indians use things in our everyday lives that come from
						China.</strong> But here’s the kicker -- Most framed pictures of deities, those little twinkle
					lights we use during
					Diwali,
					Christmas and New Year, all come from China! To top the list, the Diwali firecrackers we Indians are
					so
					crazy about also come from China.</p>
				<p><strong>That’s the EXACT opposite of <code>आत्मनिर्भर (Self Reliant)</code>!</strong></p>
				<p><strong>What happens when we buy Chinese goods?</strong> We are helping China build their economy,
					their military and weapons, and their technical expertise. They propagate their nefarious
					agenda and wilfully enter into unprovoked disputes with other countries with a perfect plan and
					strategy, the primary
					target being India, after which they have also done the same with Japan and numerous others.
					They also conduct biological research in their labs, one such lab in Wuhan which caused the COVID
					pandemic worldwide.</p>
			</div>

			<div class="col-md-12 d-lg-none">
				<hr/>
			</div>

			<div class="col-md-12 col-lg-6 text-justify">
				<h4>Border Dispute</h4>
				<p><strong>India has never invaded any country in its 5000+ years of existence.</strong> We continue to
					live by the 'live and
					let live' principle. That being said, despite zero provocation, our neighbors have constantly
					encroached
					on our sovereign territory without just cause.</p>
				<p>While Pakistan has made a self-propagated agenda out of blaming India and funding terror, China has
					frequently and purposely encroached upon Indian territory, far past the LAC. The 'Doklam' stand-off
					is a classic example.</p>
				<p>It is interesting to note that China has not only funded numerous infrastructure projects in
					Pakistan,
					including the dam in <code>Pakistan-occupied-Kashmir (POK)</code>, but they have continuously
					undermined
					India's request for naming 'Masood Azhar' the terror mastermind on the UN terror list.</p>
			</div>
		</div>
	</div>


<?php
echo chex_template( 'index/whyboycott.php' );
echo chex_template( 'index/howto.php' );
echo chex_template( 'index/alternates.php' );
echo chex_template( 'index/covid19mask.php' );
include 'template-parts/footer.php';
?>
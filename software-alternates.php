<?php $chex_active_page = basename( __FILE__ );
include 'template-parts/header.php'; ?>

<nav aria-label="breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="index.php">Home</a></li>
		<li class="breadcrumb-item active" aria-current="page">Software Alternates</li>
	</ol>
</nav>

<div class="row mb-3">
	<div class="col-md-12 col-lg-6">
		<h4>Let us talk about Software Alternates</h4>
		<p>Most people in the world today are tech-savvy. Majority of younger users are smartphone addicts, carrying
			one 24x7, and using it every waking moment. With such ease of access, our habits have undergone a change.
			Nobody in India, for example, stops by the road-side and asks a stranger for directions. Almost everybody
			know how pin locations work on WhatsApp, and how to navigate using Google Maps.</p>
		<p>Cashing in on this ease of access, coupled with incessant usage of apps, millions of tech startups have
			spawned worldwide. They produce apps across all categories from shopping and food, to gaming, messaging and
			social connections. It goes without saying that a number of these apps come from Chinese developers.</p>
		<p>So, should we stop using Chinese apps? Yes, we should. And if we do, will we lose functionality we rely on?
			Absolutely not!</p>
	</div>
	<div class="col-md-12 col-lg-6">
		<p><strong>Yes, we should stop using these apps.</strong></p>
		<p>Primarily, because they are hosted on Chinese servers under the jurisdiction
			of China, with constant monitoring by the CPC. Snooping into app usage, user data and content is
			commonplace. There exists no such thing as user data privacy in China.</p>
		<p>Secondly, these apps bring in
			billions
			of dollars of revenue to China, which they use for furthering their nefarious agendas such as border
			disputes, bio-lab research, weapon systems, etc.</p>
		<p><strong>No, we will not lose any functionality.</strong></p>
		<p>We can easily replace Chinese apps with apps made in
			India, or those made by non-Chinese countries, where
			there exist strong data privacy laws. The intent of this page is to highlight all the alternate apps that
			users can use, in lieu of Chinese apps.</p>
	</div>
</div>

<div class="alert-warning alert text-center">
	There are ton's of Chiense App. and we are constantly working on to improve our apps list and to provide
	best alternative options.
	<br/>
	if you find any apps that are missed or want to add some alternative app. please <a
			href="https://github.com/whystopusingchinese/website/issues">submitt request
		here </a>
</div>
<table class="table table-bordered text-left table-danger ">
	<tbody>
	<tr>
		<p>
			<small>
				<span class="flag-icon flag-icon-in"></span> Company or the person who developed is based in indian
				making it
				an indian app
			</small>
			<br/>
			<small>
				<img src="assets/img/tick.png" title="Preferred App"
					 style="width: 10px;margin-right: 5px;" alt="Preferred App"/>
				Prefered Application based on usability
			</small>
		</p>
	</tr>
	<?php
	global $chex_softwares;

	if ( ! empty( $chex_softwares ) ) {
		foreach ( $chex_softwares['china'] as $appid => $soft ) {
			$divid      = str_replace( '.', '_', $appid );
			$alternates = isset( $chex_softwares['alternates'][ $appid ] ) ? $chex_softwares['alternates'][ $appid ] : false;
			if ( ! empty( $alternates ) && is_array( $alternates ) ) {
				$alt_html = array();
				foreach ( $alternates as $alt_appid => $alt_soft ) {
					$playstore  = ( ! isset( $alt_soft['google'] ) ) ? 'https://play.google.com/store/apps/details?id=' . $alt_appid : $alt_soft['google'];
					$applestore = ( ! isset( $alt_soft['apple'] ) ) ? '' : $alt_soft['apple'];
					$playstore  = ( ! empty( $playstore ) ) ? "<a target=\"_blank\" href=\"${playstore}\"><img src=\"assets/img/google-play.png\" style=\"width:90px;\"/></a>" : '';
					$applestore = ( ! empty( $applestore ) ) ? "<a target=\"_blank\" href=\"${applestore}\"><img src=\"assets/img/apple-store.png\" style=\"width:74px;\"/></a>" : '';
					$app_links  = implode( ' | ', array_filter( array( $playstore, $applestore ) ) );
					$prefer     = ( ! isset( $alt_soft['prefer'] ) ) ? '' : '<img src="assets/img/tick.png" title="Preferred App" style="width: 10px;margin-right: 5px;vertical-align: top;" alt="Preferred App"/>';
					$is_indian  = ( isset( $alt_soft['indian'] ) && true === $alt_soft['indian'] ) ? '<span class="flag-icon flag-icon-in" style="vertical-align: top;"></span>' : '';
					//<span class="badge badge-primary">{$alt_soft['downloads']}</span>
					$html       = <<<HTML
<tr>
	<td class="pl-4 text-center text-lg-left">
		<img src="assets/img/softwares/{$alt_soft['icon']}" width="30" height="30" style="margin-right:10px;"/>{$alt_soft['name']} <small>$is_indian $prefer</small>
		<span class="mr-4 d-none d-lg-inline-block"></span>
		<span class="d-block d-lg-inline-block mt-2 mt-lg-0">$app_links</span>
	</td>
</tr>
HTML;
					$alt_html[] = $html;
				}
				$alt_html = implode( ' ', $alt_html );
				$alt_html = <<<HTML
<td class="p-0"><table class="m-0 table table-light table-bordered table-striped"><tbody> $alt_html</tbody> </table></td>
HTML;

			} else {
				$alt_html = '<td class="p-0"><table class="m-0 table table-light table-bordered table-striped"><tbody> <tr><td>--</td></td></tr></tbody> </table></td>';
			}

			echo <<<HTML
<tr>
	<td>
		<img src="assets/img/softwares/{$soft['icon']}" alt="{$soft['name']}" width="30" height="30" style="margin-right:10px;"/>{$soft['name']}
		<span class="badge badge-danger badge-pill">{$soft['downloads']}</span>
	</td>
</tr>
<tr>
$alt_html
</tr>
HTML;
		}
	}
	?>
	</tbody>
</table>


<?php include 'template-parts/footer.php'; ?>


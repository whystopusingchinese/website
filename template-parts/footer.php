</div>
<?php
global $github_sha;
$now = new \DateTime( 'now', new DateTimeZone( 'Asia/Kolkata' ) );
?>
<footer class="blog-footer">
	<p>
		<span class="flag-icon flag-icon-in"></span> आत्मनिर्भर भारत | Self Reliant India <br/>
		<i><small>Last Updated : <?php echo $now->format( 'D d-M-yy | H:i:s A P' ); ?></small></i>
	</p>
	<p>
		<!-- Place this tag where you want the button to render. -->
		<a class="github-button" href="https://github.com/whystopusingchinese/whystopusingchinese/subscription"
		   data-icon="octicon-eye" data-size="large" data-show-count="true"
		   aria-label="Watch whystopusingchinese/whystopusingchinese on GitHub">Subscribe For Updates</a>

		<!-- Place this tag where you want the button to render. -->
		<a class="github-button" href="https://github.com/whystopusingchinese/whystopusingchinese/issues"
		   data-icon="octicon-issue-opened" data-size="large" data-show-count="true"
		   aria-label="Issue whystopusingchinese/whystopusingchinese on GitHub">Report Issue</a>

		<a class="github-button" href="https://github.com/whystopusingchinese/whystopusingchinese/fork"
		   data-icon="octicon-repo-forked" data-size="large" data-show-count="true"
		   aria-label="Fork whystopusingchinese/whystopusingchinese on GitHub">Make Change</a>
	</p>
</footer>
<script src="assets/js/fontawesome.js"></script>
<script src="assets/js/jquery-3.5.1.slim.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/jquery.fancybox.min.js"></script>
<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-63845590-4"></script>
<script>
	window.dataLayer = window.dataLayer || [];

	function gtag() {
		dataLayer.push( arguments );
	}

	gtag( 'js', new Date() );

	gtag( 'config', 'UA-63845590-4' );
</script>

<!--  Triggered By Github SHA : <?php echo ( isset( $github_sha ) && ! empty( $github_sha ) ) ? $github_sha : ''; ?> -->
</body>
</html>

		<footer>
			<?php wp_footer(); ?>
			<table style="width: 100%">
				<tr>
					<td align="center" style="text-align: center">
						<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
						<!-- Footer -->
						<ins class="adsbygoogle"
						     style="display:inline-block;width:728px;height:90px"
						     data-ad-client="ca-pub-2399752909796795"
						     data-ad-slot="4224940660"></ins>
						<script>
						(adsbygoogle = window.adsbygoogle || []).push({});
						</script>
					</td>
				</tr>
			</table>
			<div class="footer-center">
				<div class="footer-social">
					<a href="http://martin-brennan.com/feed" target="_blank" title="Add Martin Brennan to your RSS Feeds">
						<div class="mbs small round foot" style=" background-color: #ea9522;">r</div>
					</a>
					<a href="http://stackoverflow.com/users/875941/martin-brennan" target="_blank" title="Martin Brennan on StackOverflow">
						<div class="mbs small round foot" style=" background-color: #f6891f;">s</div>
					</a>
					<a href="https://github.com/Martin-Brennan" target="_blank" title="Martin Brennan on GitHub">
						<div class="mbs small round foot" style=" background-color: #000;">g</div>
					</a>
					<a href="http://twitter.com/mjrbrennandev" target="_blank" title="Martin Brennan on Twitter">
						<div class="mbs small round foot" style=" background-color: #3CAAE4;">t</div>
					</a>
					<a href="http://www.imbibeblog.com" target="_blank" title="Beer, wine, cocktail, bar and spirit reviews on imbíbe">
						<div class="mbs small round foot" style=" background-color: #CC5630;">i</div>
					</a>
					<div class="clearfix"></div>
				</div>
				<p>&copy; Martin Brennan 2013. All rights reserved in perpetuity throughout the universe. (That’ll hold up in court)</p>
				<p><a href="/">Blog</a> | <a href="/about">About</a> | <a href="/archive">Archive</a> | <a href="/projects">Projects</a></p>
			</div>
		</footer>
		<div class="footer-after"></div>
	</body>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/app.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/highlight/highlight.pack.js"></script>
	<!-- Load the JSONP data using the GitHub API -->
	<?php if( is_page('Projects')) { ?>
		<script src="https://api.github.com/users/martin-brennan/repos?callback=getRepos"></script>
	<?php } ?>
	<script>hljs.initHighlightingOnLoad();</script>
</html>
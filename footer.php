		<div class="row">
			<div class="twelvecol">
				<div class="footer">
					<ul class="footer-nav">
						<li><a href="/" title="Blog"><h4>Blog</h4></a></li>
						<li><a href="/about" title="About"><h4>About</h4></a></li>
						<li><a href="/archive" title="Archive"><h4>Archive</h4></a></li>
						<li><a href="/projects" title="Projects"><h4>Projects</h4></a></li>
						<li><a class="no_icon" href="http://www.github.com/Martin-Brennan" target="_blank" title="Github"><h4>Github</h4></a></li>
					</ul>
					<div class="clearfix"></div>
					<p class="subtitle">
						&copy; Martin Brennan 
						<?php
							$today = getdate();
							print_r($today[year]);
						?>
					</p>
				</div>
			</div>
		</div>
	</div>
	<?php wp_footer(); ?>
		</body>
</html>
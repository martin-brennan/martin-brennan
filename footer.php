		<div class="row">
			<div class="twelvecol">
				<div class="footer">
					<ul class="footer-nav">
						<li><a href="/"><h4>Blog</h4></a></li>
						<li><a href="/about"><h4>About</h4></a></li>
						<li><a href="/archive"><h4>Archive</h4></a></li>
						<li><a href="/projects"><h4>Projects</h4></a></li>
						<li><a href="http://www.github.com/Martin-Brennan"><h4>Github</h4></a></li>
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
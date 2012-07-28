<div id="sidebar">
	<div class="search-side">
		<?php get_search_form(); ?>
	</div>
	<h4><strong>Follow Me!</strong></h4>
	<div class="side-list">
		<ul>
			<li><a class="no_icon" href="http://feeds.feedburner.com/MartinBrennan" rel="alternate" type="application/rss+xml"><img alt="Subscribe via RSS" src="<?php bloginfo('template_directory') ?>/img/rss.png"></img>&nbsp;Subscribe via RSS</a></li>
			<li><a class="no_icon" href="http://feedburner.google.com/fb/a/mailverify?uri=MartinBrennan&amp;loc=en_US"><img alt="Subscribe via Email" src="<?php bloginfo('template_directory') ?>/img/email.png"></img>&nbsp;Subscribe via Email</a></li>
			<br/>
		</ul>
	</div>
	<h4><strong>Categories</strong></h4>
	<div class="side-list">
		<ul><?php wp_list_categories('show_count=1&title_li='); ?></ul>
	</div>
	<h4><strong>Post Archives</strong></h4>
	<div class="side-list">
		<ul><?php wp_get_archives(); ?> </ul>
	</div>
	<div class="scrolltop noshow">
		<p><code>^ Scroll to top ^</code></p>
	</div>
</div>
</div>
</div>
</div>
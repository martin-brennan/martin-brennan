<div id="sidebar">
	<div class="search-side">
		<?php get_search_form(); ?>
	</div>
	<h4><strong>Categories</strong></h4>
	<div class="side-list">
		<ul><?php wp_list_categories('title_li='); ?></ul>
	</div>
	<h4><strong>Post Archives</strong></h4>
	<div class="side-list">
		<ul><?php wp_get_archives(); ?> </ul>
	</div>
	<h4><strong>Follow Me!</strong></h4>
	<div class="side-list">
		<ul>
			<li><a href="#">Subscribe via RSS</a></li>
			<li><a href="#">Subscribe via Email</a></li>
			<br/>
			<a href="https://twitter.com/mjrbrennan" class="twitter-follow-button" data-show-count="false">Follow @mjrbrennan</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
		</ul>
	</div>
	<div class="scrolltop noshow">
		<p><code>^ Scroll to top ^</code></p>
	</div>
</div>
</div>
</div>
</div>
<?php
/*
Template Name: Projects
*/
?>
<!-- Get the header.php file -->
	<?php get_header(); ?>
	<div class="container">
		<div class="row">
			<div class="ninecol">
				<h1>Projects</h1>
				<div class="about-content">
					<?php if(have_posts()) : while(have_posts()) : the_post(); the_content(); endwhile; endif; ?>
				</div>
				<div class="project-item">
					<a title="imbíbe" target="_blank" href="http://www.imbibeblog.com"><img src="<?php bloginfo('template_directory') ?>/img/projects/imbibe.png" alt="imbíbe" title="imbíbe"></img></a>
					<h3>imbíbe</h3>
					<p>imbíbe is a blog started in 2012 by me and my good friend, Michael Fitz-Payne. We are two liquor connoisseurs and we write cocktail, beer, spirits, wine and bar reviews to provide those interested with an education in liquor and for the sheer enjoyment of our hobby. <a title="imbíbe" href="http://www.imbibeblog.com.au">Visit imbíbe</a>.</p>
				</div>
				<h2>Github Repos</h2>
				<div class="repo-result"></div>
				<script type="text/javascript">
					//Get the template URL of the blog.
					var templateUrl = '<?= get_bloginfo("template_url"); ?>';

					//Get the repository information as a JSONP callback, using the API URL in the script tag below.
				    function getRepos(data) {
				    	//Load the repository data in a variable.
				    	var repos = data.data;

				    	//Loop through all returned repositories.
				    	for(var i = 0; i < repos.length; i++) {
				    		//Get the pushed date and convert it to a more readable format.
				    		var pushed = new Date(repos[i].pushed_at);
				    		pushed = pushed.toString('dddd, d MMMM yyyy')

				    		//Construct the information about the repo, using when it was last pushed, the clone URL and the description.
				    		$('.repo-result').append('<p class="repo-info">Last pushed on <strong>' + pushed + '</strong> | <a href="github-mac://openRepo/' + repos[i].html_url + '" title="Clone in GitHub for Mac"><img src="' + templateUrl + '/img/mac-icon.png"></img> Clone in GitHub for Mac</a></p>')
				    					.append('<h3><a target="_blank" href="' + repos[i].html_url + '">' + repos[i].name + '</a></h3>')
				    					.append('<p><pre class="markdown"><code>' + replaceURLWithHTMLLinks(repos[i].description) + '</code></pre></p>');
				    	}
					}

					//Replaces any links found in the specified string with <a href> HTML links.
					function replaceURLWithHTMLLinks(text) {
					    var exp = /(\b(https?|ftp|file):\/\/[-A-Z0-9+&@#\/%?=~_|!:,.;]*[-A-Z0-9+&@#\/%=~_|])/ig;
					    return text.replace(exp,"<a target='_blank' href='$1'>$1</a>"); 
					}
				</script>

				<!-- Load the JSONP data using the GitHub API -->
				<script src="https://api.github.com/users/martin-brennan/repos?callback=getRepos"></script>
			</div>
			<div class="threecol last">
<?php get_sidebar(); ?>
<?php get_footer(); ?>
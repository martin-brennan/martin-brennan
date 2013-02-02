$(function () {
	//Fix for Facebook's share button width.
	$('.post-share').find('iframe:first').css('width', '85px');

	setPostIcons();
}());

/**
 * Loop through all the post icons on the page
 * and send them to setPostIcon to have their
 * colour and background-pos set.
 */
function setPostIcons() {
	$('.container').find('article, .archive-item').each(function () {
		var $this    = $(this),
			category = $this.find('input[type=hidden]').val(),
			$icon    = $this.find('div.round.side.cat, div.micro.round.archive');

		setPostIcon(category, $icon);
	});
};

/**
 * Sets the colour and background position of
 * each post icon depending on the category,
 * then shows the icon.
 *
 * @param {string}  cat The category of the post.
 * @param {element} $el The post icon element.
 */
function setPostIcon (cat, $el) {
	if (cat !== undefined) {
	cat = cat.toLowerCase();
		switch (cat) {
			case 'share':
				$el.css('background-color', '#EA9623').html('l');
			break;
			case 'algorithm':
				$el.css('background-color', '#000').html('p');
			break;
			case 'development':
				$el.css('background-color', '#C42624').html('c');
			break;
			case 'design':
				$el.css('background-color', '#30F2BF').html('d');
			break;
			case 'beginner':
				$el.css('background-color', '#1FC6E4').html('b');
			break;
			case 'observation':
				$el.css('background-color', '#E06934').html('o');
			break;
			case 'news':
				$el.css('background-color', '#E06934').html('n');
			break;
			case 'writing':
				$el.css('background-color', '#E06934').html('w');
			break;
			case 'tutorial':
				$el.css('background-color', '#F086B6').html('m');
			break;
			case 'aha':
				$el.css('background-color', '#FFE000').html('a');
			break;
		};
		$el.show();
	}
}

//Get the repository information as a JSONP callback, using the API URL in the script tag below.
function getRepos(data) {
	//Get the template URL of the blog.
	var templateUrl = $('#hf_templateURL').val();
	//Load the repository data in a variable.
	var repos = data.data;

	//Loop through all returned repositories.
	for(var i = 0; i < repos.length; i++) {
		//Get the pushed date and convert it to a more readable format.
		var pushed = new Date(repos[i].pushed_at);
		pushed = pushed.toString('dddd, d MMMM yyyy')

		//Construct the information about the repo, using when it was last pushed, the clone URL and the description.
		$('.repo-result').append('<h2><a target="_blank" href="' + repos[i].html_url + '">' + repos[i].name + '</a></h2>')
					.append('<span>Last pushed on <strong>' + pushed + '</strong> | <div class="mbs micro inline">3</div> <a href="github-mac://openRepo/' + repos[i].html_url + '" title="Clone in GitHub for Mac">Clone in GitHub for Mac</a></span>')
					.append('<p><pre class="markdown"><code>' + replaceURLWithHTMLLinks(repos[i].description) + '</code></pre></p>');
	}
}

//Replaces any links found in the specified string with <a href> HTML links.
function replaceURLWithHTMLLinks(text) {
    var exp = /(\b(https?|ftp|file):\/\/[-A-Z0-9+&@#\/%?=~_|!:,.;]*[-A-Z0-9+&@#\/%=~_|])/ig;
    return text.replace(exp,"<a target='_blank' href='$1'>$1</a>"); 
}
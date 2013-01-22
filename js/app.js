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
	$('.container').find('article').each(function () {
		var $this    = $(this),
			category = $this.find('input[type=hidden]').val(),
			$icon    = $this.find('div.round.side.cat');

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
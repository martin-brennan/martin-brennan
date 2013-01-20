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
			$el.css('background-position', '-4px -453px').css('background-color', '#EA9623');
		break;
		case 'algorithm':
			$el.css('background-position', '-4px -907px').css('background-color', '#000');
		break;
		case 'development':
			$el.css('background-position', '-4px -518px').css('background-color', '#C42624');
		break;
		case 'design':
			$el.css('background-position', '-4px 0px').css('background-color', '#30F2BF');
		break;
		case 'beginner':
			$el.css('background-position', '-4px -64px').css('background-color', '#1FC6E4');
		break;
		case 'observation':
			$el.css('background-position', '-4px -843px').css('background-color', '#E06934');
		break;
		case 'news':
			$el.css('background-position', '-4px -130px').css('background-color', '#E06934');
		break;
		case 'writing':
			$el.css('background-position', '-4px -194px').css('background-color', '#E06934');
		break;
		case 'tutorial':
			$el.css('background-position', '-4px -778px').css('background-color', '#F086B6');
		break;
		case 'aha':
			$el.css('background-position', '-4px -712px').css('background-color', '#FFE000');
		break;
	};
	$el.show();
}
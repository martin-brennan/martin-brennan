var page = window.location.href;
if (page.indexOf('archive') != -1) {
	var link = document.getElementById('nav_archive');
	link.className = 'selected';
} else if (page.indexOf('about') != -1) {
	var link = document.getElementById('nav_about');
	link.className = 'selected';
} else {
	var link = document.getElementById('nav_articles');
	link.className = 'selected';
}
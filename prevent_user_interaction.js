// Because we hate users? And people can't screenshot?
// Fuck
window.addEventListener("load", function() {
	for( img of document.getElementsByTagName('img')) {
	    img.ondragstart = () => false;
	    img.oncontextmenu = () => false;
	}
});



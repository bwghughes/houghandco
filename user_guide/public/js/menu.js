function initMenu() {
	var _li = document.getElementById("nav").getElementsByTagName("li");
	for (var i = 0; i <_li.length; i++) {
		_li[i].style.zIndex = _li.length + 100 - i;
	}
}
if (window.addEventListener) window.addEventListener("load", initMenu, false);
else if (window.attachEvent) window.attachEvent("onload", initMenu);

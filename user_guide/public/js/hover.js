function initHover()
{
	var nodes = document.getElementById("menu").getElementsByTagName("li");
	for (var i=0; i<nodes.length; i++)
	{
		nodes[i]._iter = i;
		nodes[i].onmouseover = function()
		{
			this.className += " hover";
			this.getElementsByTagName("span")[0].style.height = this.parentNode.offsetHeight - 3 + "px";
			this.getElementsByTagName("span")[0].style.backgroundPosition ="-1px " + (this._iter*31)  + "px";
		}
		nodes[i].onmouseout = function()
		{
			this.className = this.className.replace("hover", "");
		}
	}
}
if (window.addEventListener) window.addEventListener("load", initHover, false);
else if (window.attachEvent) window.attachEvent("onload", initHover);
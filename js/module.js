var lang = document.querySelector("#lang");
var lang_group = document.querySelector(".lang_group");
var lang_group_item = document.querySelectorAll(".lang_group > li");
var href = location.href;

for (let i = 0; i < lang_group_item.length; i++) {
	const element = lang_group_item[i];
	element.classList.remove("on");
}
(function () {
	if (href.indexOf("zh-tw") !== -1) {
		lang_group_item[0].classList.add("on");
		// lang_txt.innerHTML = "繁中";
	} else if (href.indexOf("zh-cn") !== -1) {
		lang_group_item[1].classList.add("on");
		// lang_txt.innerHTML = "简中";
	} else if (href.indexOf("en-us") !== -1) {
		lang_group_item[2].classList.add("on");
		// lang_txt.innerHTML = "EN";
		// body.classList.add("en")
	} else if (href.indexOf("ja-jp") !== -1) {
		lang_group_item[3].classList.add("on");
	}
})();
if (lang) {
	lang.onclick = function () {
		lang.classList.toggle("show_lang");
	};
}
for (let i = 0; i < lang_group_item.length; i++) {
	const element = lang_group_item[i];
	element.onclick = function () {
		event.stopPropagation();
		// lang_txt.innerHTML = element.innerHTML;
		lang.classList.remove("on");
		var changeLang = element.getAttribute("data-lang");
		var num = null;
		var newHref = "";
		if (href.indexOf(changeLang) == -1) {
			let hrefS = href.split("/");
			if (hrefS.indexOf("zh-tw") !== -1) {
				num = hrefS.indexOf("zh-tw");
			} else if (hrefS.indexOf("zh-cn") !== -1) {
				num = hrefS.indexOf("zh-cn");
			} else if (hrefS.indexOf("en-us") !== -1) {
				num = hrefS.indexOf("en-us");
			} else if (hrefS.indexOf("ja-jp") !== -1) {
				num = hrefS.indexOf("ja-jp");
			}
			// 112.10.19  module.js補上ja-jp
			
			hrefS.splice(num, 1, changeLang);

			for (let i = 0; i < hrefS.length; i++) {
				if (i == hrefS.length - 1) {
					newHref += hrefS[i];
				} else {
					newHref += hrefS[i] + "/";
				}
			}
			location.href = newHref;
		}
	};
}

var screen = window.innerWidth <= 1024 ? "ph" : "pc";

var nav_item = document.querySelectorAll("[name = 'nav_item']");
var nav_item_count = null;
if (nav_item) {
	for (let i = 0; i < nav_item.length; i++) {
		const element = nav_item[i];
		element.onclick = function () {
			if (screen == "pc") return;
			if (nav_item_count == null) {
				element.classList.add("on");
				nav_item_count = i;
			} else if (nav_item_count == i) {
				element.classList.remove("on");
				nav_item_count = null;
			} else {
				nav_item[nav_item_count].classList.remove("on");
				element.classList.add("on");
				nav_item_count = i;
			}
		};
	}
}
var nav_btn = document.querySelector("#nav_btn");
var header = document.querySelector("#header");
if (nav_btn) {
	nav_btn.onclick = function () {
		header.classList.toggle("showMenu");
	};
}

function touchHeader() {
	header.classList.add('onHead');
	header.addEventListener("touchend", touchendHeader);
}
function touchendHeader() {
	header.classList.remove('onHead');
}
header.addEventListener("touchstart", touchHeader);

window.onresize = function () {
	if (screen == "pc" && window.innerWidth <= 1024) {
		screen = "ph";
	} else if (screen == "ph" && window.innerWidth > 1024) {
		screen = "pc";
		if (nav_item_count !== null) {
			nav_item[nav_item_count].classList.remove("on");
		}
		header.classList.remove("showMenu");
	}
};

var alert = document.querySelector("#alert");
var alert_close = document.querySelector("#alert_close");
var alert_lightBox = document.querySelector("#alert_lightBox");
if (alert_lightBox) {
	alert_lightBox.onclick = function (event) {
		event.stopPropagation();
	};
}
if (alert_close && alert) {
	alert_close.onclick = function () {
		alert.classList.remove("on");
		setTimeout(() => {
			alert.classList.remove("show");
		}, 500);
	};
	alert.onclick = function () {
		alert.classList.remove("on");
		setTimeout(() => {
			alert.classList.remove("show");
		}, 500);
	};
}

let favicon = document.querySelector('link[rel="shortcut icon"]');
let isDarkMode = false;
isDarkMode = window.matchMedia("(prefers-color-scheme: dark)").matches;

var html = document.querySelector("html");

if (isDarkMode || html.getAttribute("native-dark-active") !== null) {
	favicon.href = "../favicon-light.ico";
} else {
	favicon.href = "../favicon-dark.ico";
}

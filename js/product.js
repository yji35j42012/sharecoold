var swiper1_prev = document.querySelector("#product_prev");
var swiper1_next = document.querySelector("#product_next");
var swiper1_group = document.querySelector("#product_group");
var swiper1_dots = document.querySelector("#product_dots");
var swiper1_dots_item = null;
var swiper1_item = document.querySelectorAll("#product_group .product_item");
var swiper1_count = 0;
var swiper1_max = swiper1_item.length;
var swiper1_moveNum = 0;

function swiper1MoveHandler(e) {
	var def = swiper1_count * 50;
	swiper1_group.style = `transform: translateX(calc(${swiper1_moveNum}% - ${def}px));transition-duration: 0.3s;opacity:1;`;
}

swiper1_prev.onclick = function() {
	if (swiper1_count == 0) {
		swiper1_count = swiper1_max - 1;
	} else {
		swiper1_count--;
	}
	swiper1_moveNum = -100 * swiper1_count;
	swiper1MoveHandler();
	dotsSwiper1Handler();
};

swiper1_next.onclick = function() {
	if (swiper1_count + 1 >= swiper1_max) {
		swiper1_count = 0;
	} else {
		swiper1_count++;
	}
	swiper1_moveNum = -100 * swiper1_count;
	swiper1MoveHandler();
	dotsSwiper1Handler();
};
function allDots1RemoveSwiper1() {
	for (let i = 0; i < swiper1_dots_item.length; i++) {
		const element = swiper1_dots_item[i];
		element.classList.remove("on");
	}
}
function dotsSwiper1Handler() {
	allDots1RemoveSwiper1();
	swiper1_dots_item[swiper1_count].classList.add("on");
}
function pushDots1() {
	swiper1_dots.innerHTML = "";
	for (let i = 0; i < swiper1_max; i++) {
		const liDot = document.createElement("li");
		liDot.setAttribute("class", "dots_item");
		swiper1_dots.append(liDot);
	}
	swiper1_dots_item = document.querySelectorAll("#product_dots > li");
	dotsSwiper1Handler();
	dotSwiper1Item();
}
function dotSwiper1Item() {
	for (let i = 0; i < swiper1_dots_item.length; i++) {
		const element = swiper1_dots_item[i];
		element.onclick = function() {
			swiper1_count = i;
			swiper1_moveNum = -100 * swiper1_count;
			swiper1MoveHandler();
			dotsSwiper1Handler();
		};
	}
}
pushDots1();

var screen = window.innerWidth <= 1024 ? "ph" : "pc";

var allaos = document.querySelectorAll("[name = 'aos']");

window.onresize = function() {
	// AOS.init();
	if (screen == "ph" && window.innerWidth > 1024) {
		screen = "pc";
		swiper1_group.style = ``;
		swiper1_count = 0;
		pushDots1();
		AOS.init();
		setTimeout(() => {
			AOS.init();
			document
				.querySelector("html")
				.scrollTo(document.querySelector("html").scrollTop - 1);
			document
				.querySelector("html")
				.scrollTo(document.querySelector("html").scrollTop + 1);
		}, 100);
	} else if (screen == "pc" && window.innerWidth <= 1024) {
		screen = "ph";
		AOS.init();
		setTimeout(() => {
			AOS.init();
		}, 100);
	}
};

window.addEventListener("scroll", event => {
	AOS.init();
});

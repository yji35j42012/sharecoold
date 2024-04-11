var bannerSwiper = document.querySelector("#bannerSwiper_group");
var bannerSwiper_pic = document.querySelectorAll("#bannerSwiper_group > .bannerSwiper_item");
var bannerSwiper_prev = document.querySelector("#bannerSwiper_prev");
var bannerSwiper_next = document.querySelector("#bannerSwiper_next");
var bannerSwiper_count = 1;
var bannerSwiper_moveNum = -100 * bannerSwiper_count;
var bannerSwiper_maxCount = bannerSwiper_pic.length;
var bannerSwiper_time = 5; //6秒
var countdown = bannerSwiper_time;
let bannerSwiperTime = null;
var bannerSwiper_dots = document.querySelector("#bannerSwiper_dots");
var bannerSwiper_dots_item = null;
var photo_kp = document.querySelector("#photo_kp");
var introduction1 = document.querySelector("#introduction1");
var bannerSwiperBox = document.querySelector("#bannerSwiperBox");
var introduction1_pic = document.querySelector(
	"#introduction1 > .brandSH_introduction_pic"
);
var introduction1_txt = document.querySelector(
	"#introduction1 > .brandSH_introduction_txt"
);

function bannerSwiperTimeHandler() {
	countdown--;
	if (countdown >= 0) {
		bannerSwiperTime = setTimeout(bannerSwiperTimeHandler, 1000);
	} else {
		bannerSwiper_count++;
		bannerSwiper_moveNum = -100 * bannerSwiper_count;
		bannerSwiper_moveHandler();
		if (bannerSwiper_count == bannerSwiper_maxCount + 1) {
			goFirst();
		} else if (bannerSwiper_count == 0) {
			goEnd();
		}
		dotsHandler();
		countdown = bannerSwiper_time;
		bannerSwiperTime = setTimeout(bannerSwiperTimeHandler, 1000);
	}
}
bannerSwiper_next.onclick = function() {
	bannerSwiper_count++;
	bannerSwiper_moveNum = -100 * bannerSwiper_count;
	bannerSwiper_moveHandler();
	resetTime();
	dotsHandler();
};
bannerSwiper_prev.onclick = function() {
	bannerSwiper_count--;
	bannerSwiper_moveNum = -100 * bannerSwiper_count;
	bannerSwiper_moveHandler();
	resetTime();
	dotsHandler();
};
//時間重置
function resetTime() {
	clearTimeout(bannerSwiperTime);
	countdown = bannerSwiper_time;
	bannerSwiperTime = setTimeout(bannerSwiperTimeHandler, 1000);
	if (bannerSwiper_count == bannerSwiper_maxCount + 1) {
		goFirst();
	} else if (bannerSwiper_count == 0) {
		goEnd();
	}
}
// 移動
function bannerSwiper_moveHandler() {
	window.removeEventListener("touchmove", bannerSwiperTouchMove);
	window.removeEventListener("touchend", bannerSwiperTouchEnd);
	window.removeEventListener("mousemove", bannerSwiperTouchMove);
	window.removeEventListener("mouseup", bannerSwiperTouchEnd);
	bannerSwiper.style = `transform: translateX(${bannerSwiper_moveNum}%);transition-duration: 0.3s;opacity:1;`;
}
// 快速換回第一張
function goFirst() {
	setTimeout(() => {
		bannerSwiper_count = 1;
		bannerSwiper_moveNum = -100 * bannerSwiper_count;
		bannerSwiper.style = `transform: translateX(${bannerSwiper_moveNum}%);transition-duration: 0;opacity:1;`;
	}, 350);
}
// 快速換回最後一張
function goEnd() {
	setTimeout(() => {
		bannerSwiper_count = bannerSwiper_maxCount;
		bannerSwiper_moveNum = -100 * bannerSwiper_count;
		bannerSwiper.style = `transform: translateX(${bannerSwiper_moveNum}%);transition-duration: 0;opacity:1;`;
	}, 350);
}
function pushStart() {
	var getImg = document.querySelector(
		"#bannerSwiper_group > .bannerSwiper_item:last-child img"
	);
	const liStart = document.createElement("li");
	liStart.setAttribute("class", "bannerSwiper_item");
	liStart.setAttribute(
		"style",
		"background-image: url('" + getImg.getAttribute("src") + "')"
	);
	const child = document.createElement("img");
	child.setAttribute("src", getImg.getAttribute("src"));
	liStart.append(child);
	bannerSwiper.insertBefore(liStart, bannerSwiper_pic[0]);
}
function pushEnd() {
	var getImg = document.querySelector(
		"#bannerSwiper_group > .bannerSwiper_item:nth-child(2) img"
	);
	const liEnd = document.createElement("li");
	liEnd.setAttribute("class", "bannerSwiper_item");
	liEnd.setAttribute(
		"style",
		"background-image: url('" + getImg.getAttribute("src") + "')"
	);
	const child = document.createElement("img");
	child.setAttribute("src", getImg.getAttribute("src"));
	liEnd.append(child);
	bannerSwiper.appendChild(liEnd, bannerSwiper_pic[0]);
}
function pushDots() {
	for (let i = 0; i < bannerSwiper_maxCount; i++) {
		const liDot = document.createElement("li");
		liDot.setAttribute("class", "normal_dots_item");
		bannerSwiper_dots.append(liDot);
	}
	bannerSwiper_dots_item = document.querySelectorAll("#bannerSwiper_dots >li");
	dotsHandler();
	dotItem();
}
function dotsHandler() {
	allDotsRemove();
	if (bannerSwiper_count == 1) {
		bannerSwiper_dots_item[bannerSwiper_count - 1].classList.add("on");
	} else if (bannerSwiper_count == 0) {
		bannerSwiper_dots_item[bannerSwiper_maxCount - 1].classList.add("on");
	} else if (bannerSwiper_count > bannerSwiper_maxCount) {
		bannerSwiper_dots_item[0].classList.add("on");
	} else {
		bannerSwiper_dots_item[bannerSwiper_count - 1].classList.add("on");
	}
}
function dotItem() {
	for (let i = 0; i < bannerSwiper_dots_item.length; i++) {
		const element = bannerSwiper_dots_item[i];
		element.onclick = function() {
			bannerSwiper_count = i + 1;
			bannerSwiper_moveNum = -100 * bannerSwiper_count;
			bannerSwiper_moveHandler();
			dotsHandler();
			resetTime();
		};
	}
}
function allDotsRemove() {
	for (let i = 0; i < bannerSwiper_dots_item.length; i++) {
		const element = bannerSwiper_dots_item[i];
		element.classList.remove("on");
	}
}
var startX = 0;
var nowX = 0;
var endX = 0;

function bannerSwiperTouchStart(event) {
	clearTimeout(bannerSwiperTime);
	bannerSwiperTime = null;
	// 點擊位置
	if (!event.touches) {
		//相容移動端
		startX = event.clientX;
	} else {
		//相容PC端
		startX = event.touches[0].pageX;
	}
	nowX = startX;
	window.addEventListener("touchmove", bannerSwiperTouchMove);
	window.addEventListener("touchend", bannerSwiperTouchEnd);
	window.addEventListener("mousemove", bannerSwiperTouchMove);
	window.addEventListener("mouseup", bannerSwiperTouchEnd);
}
function bannerSwiperTouchMove() {
	if (!event.touches) {
		//相容移動端
		nowX = event.clientX;
	} else {
		//相容PC端
		nowX = event.touches[0].pageX;
	}
	let newX = nowX - startX;
	bannerSwiper.style = `transform: translateX(calc(${bannerSwiper_moveNum}% + ${newX}px) );transition-duration: 0s;opacity:1;`;
}
function bannerSwiperTouchEnd() {
	if (nowX > startX) {
		bannerSwiper_count--;
		bannerSwiper_moveNum = -100 * bannerSwiper_count;
		bannerSwiper_moveHandler();
		if (bannerSwiper_count == bannerSwiper_maxCount + 1) {
			goFirst();
		} else if (bannerSwiper_count == 0) {
			goEnd();
		}
		dotsHandler();
	} else if (nowX < startX) {
		bannerSwiper_count++;
		bannerSwiper_moveNum = -100 * bannerSwiper_count;
		bannerSwiper_moveHandler();
		if (bannerSwiper_count == bannerSwiper_maxCount + 1) {
			goFirst();
		} else if (bannerSwiper_count == 0) {
			goEnd();
		}
		dotsHandler();
	}
	countdown = bannerSwiper_time;
	bannerSwiperTime = setTimeout(bannerSwiperTimeHandler, 1000);
	window.removeEventListener("touchmove", bannerSwiperTouchMove);
	window.removeEventListener("touchend", bannerSwiperTouchEnd);
	window.removeEventListener("mousemove", bannerSwiperTouchMove);
	window.removeEventListener("mouseup", bannerSwiperTouchEnd);
}
bannerSwiperBox.addEventListener("touchstart", bannerSwiperTouchStart);
bannerSwiperBox.addEventListener("mousedown", bannerSwiperTouchStart);
bannerSwiperBox.addEventListener("touchstart", bannerSwiperTouchStart);
bannerSwiperBox.addEventListener("mousedown", bannerSwiperTouchStart);

setTimeout(() => {
	pushStart();
	pushEnd();
	bannerSwiper_moveHandler();
	pushDots();
}, 100);

bannerSwiperTimeHandler();

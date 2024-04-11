




var header = document.querySelector("#header");
var headerH = header.offsetHeight
var scrollTop = window.pageYOffset;
var windowH = window.innerHeight;

var video_box1 = document.querySelector("#video_box1");
var v1T = video_box1.offsetTop
var v1H = video_box1.offsetHeight
var v1Max = v1T + v1H - headerH + windowH
var video_box2 = document.querySelector("#video_box2");
var v2T = video_box2.offsetTop
var v2H = video_box2.offsetHeight
var v2Max = v2T + v2H - headerH + windowH


// console.log('headerH',headerH);
var tag = document.createElement("script");
tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName("script")[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
var player1;
var player2;
function onYouTubeIframeAPIReady() {
	player1 = new YT.Player("player1", {
		width: "100%",
		height: "100%",
		videoId: "RWFLs9EUw-w",
		playerVars: {
			playlist: "RWFLs9EUw-w",
			autoplay: 1,
			loop: 1,
			controls: 0,
			playsinline: 1,
			rel: 0,
			autohide: 1, // Hide video controls when playing

		},
		events: {
			onReady: onPlayerReady
		}
	});
	player2 = new YT.Player("player2", {
		width: "100%",
		height: "100%",
		videoId: "SpRIlkGi2ao",
		playerVars: {
			playlist: "SpRIlkGi2ao",
			autoplay: 0,
			loop: 1,
			controls: 0,
			playsinline: 1,
			rel: 0
		},
		events: {
			onReady: onPlayerReady2
		}
	});
}
function onPlayerReady(event) {
	event.target.setVolume(0);
	event.target.setLoop(true);
	if (screen == 'ph') {
		event.target.mute();
	}
	if (scrollTop + windowH > v1T && scrollTop + windowH < v1Max) {
		console.log('ASDF');
		event.target.playVideo();
	}
}
function onPlayerReady2(event) {
	event.target.setVolume(0);
	event.target.setLoop(true);
	if (screen == 'ph') {
		event.target.mute();
	}
	if (scrollTop + windowH > v2T && scrollTop + windowH < v2Max) {
		player2.playVideo();
	}
}

var videoHandler1 = document.querySelector("#videoHandler1");
var videoHandler2 = document.querySelector("#videoHandler2");

videoHandler1.onclick = function () {
	if (videoHandler1.classList.contains("_quiet")) {
		videoHandler1.classList.remove("_quiet");
		videoHandler1.classList.add("_voiced");
		player1.setVolume(100);
	} else {
		videoHandler1.classList.remove("_voiced");
		videoHandler1.classList.add("_quiet");
		player1.setVolume(0);
	}
};
videoHandler2.onclick = function () {
	if (videoHandler2.classList.contains("_quiet")) {
		videoHandler2.classList.remove("_quiet");
		videoHandler2.classList.add("_voiced");
		player2.setVolume(100);
	} else {
		videoHandler2.classList.remove("_voiced");
		videoHandler2.classList.add("_quiet");
		player2.setVolume(0);
	}
};

window.addEventListener("scroll", (event) => {
	scrollTop = window.pageYOffset;
	windowH = window.innerHeight;
	if (screen == 'ph') {
		v1T = video_box1.offsetTop
		v1H = video_box1.offsetHeight
		v2T = video_box2.offsetTop
		v2H = video_box2.offsetHeight
		v1Max = v1T + v1H - headerH + windowH
		v2Max = v2T + v2H - headerH + windowH
	}
	videoHandler(scrollTop + windowH)
});

function videoHandler(num) {
	if (num > v1T && num < v1Max) {
		console.log('v1可以播放囉');
		player1.playVideo();
	} else if (num > v1Max && player1) {
		console.log('v1要暫停囉');
		player1.pauseVideo();
	}

	// console.log(' window.innerHeight', window.innerHeight);
	console.log('num', num);
	console.log('v2T', v2T);
	console.log('v2Max', v2Max);
	if (num > v2T && num < v2Max && player2) {
		console.log('v2可以播放囉');
		player2.playVideo();
	} else if (num > v2Max || num < v2T && player2) {
		console.log('v2要暫停囉');
		player2.pauseVideo();
	}
}

var swiper1_prev = document.querySelector("#swiper1_prev");
var swiper1_next = document.querySelector("#swiper1_next");
var swiper1_group = document.querySelector("#swiper1_group");
var swiper1_dots = document.querySelector("#swiper1_dots");
var swiper1_dots_item = null;
var swiper1_item = document.querySelectorAll(
	"#swiper1_group .gallery_swiper_item"
);
var swiper1_count = 0;
var swiper1_max =
	screen == "pc"
		? Math.ceil(swiper1_item.length / 4)
		: Math.ceil(swiper1_item.length / 2);

var swiper1_moveNum = 0;

function swiper1MoveHandler(e) {
	swiper1_group.style = `transform: translateX(${swiper1_moveNum}%);transition-duration: 0.3s;opacity:1;`;
}

swiper1_prev.onclick = function () {
	if (swiper1_count == 0) {
		swiper1_count = swiper1_max - 1;
	} else {
		swiper1_count--;
	}
	swiper1_moveNum = -100 * swiper1_count;
	swiper1MoveHandler();
	dotsSwiper1Handler();
};

swiper1_next.onclick = function () {
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
	swiper1_dots_item = document.querySelectorAll("#swiper1_dots > li");
	dotsSwiper1Handler();
	dotSwiper1Item();
}
function dotSwiper1Item() {
	for (let i = 0; i < swiper1_dots_item.length; i++) {
		const element = swiper1_dots_item[i];
		element.onclick = function () {
			swiper1_count = i;
			swiper1_moveNum = -100 * swiper1_count;
			swiper1MoveHandler();
			dotsSwiper1Handler();
		};
	}
}
pushDots1();

var swiper2_prev = document.querySelector("#swiper2_prev");
var swiper2_next = document.querySelector("#swiper2_next");
var swiper2_group = document.querySelector("#swiper2_group");
var swiper2_dots = document.querySelector("#swiper2_dots");
var swiper2_dots_item = null;
var swiper2_item = document.querySelectorAll(
	"#swiper2_group .gallery_swiper_item"
);
var swiper2_count = 0;
var swiper2_max =
	screen == "pc"
		? Math.ceil(swiper2_item.length / 4)
		: Math.ceil(swiper2_item.length / 2);
var swiper2_moveNum = 0;
function swiper2MoveHandler(e) {
	swiper2_group.style = `transform: translateX(${swiper2_moveNum}%);transition-duration: 0.3s;opacity:2;`;
}

swiper2_prev.onclick = function () {
	if (swiper2_count == 0) {
		swiper2_count = swiper2_max - 1;
	} else {
		swiper2_count--;
	}
	swiper2_moveNum = -100 * swiper2_count;
	swiper2MoveHandler();
	dotsSwiper2Handler();
};

swiper2_next.onclick = function () {
	if (swiper2_count + 1 >= swiper2_max) {
		swiper2_count = 0;
	} else {
		swiper2_count++;
	}
	swiper2_moveNum = -100 * swiper2_count;
	swiper2MoveHandler();
	dotsSwiper2Handler();
};
function allDots2RemoveSwiper2() {
	for (let i = 0; i < swiper2_dots_item.length; i++) {
		const element = swiper2_dots_item[i];
		element.classList.remove("on");
	}
}
function dotsSwiper2Handler() {
	allDots2RemoveSwiper2();
	swiper2_dots_item[swiper2_count].classList.add("on");
}
function pushDots2() {
	swiper2_dots.innerHTML = "";
	for (let i = 0; i < swiper2_max; i++) {
		const liDot = document.createElement("li");
		liDot.setAttribute("class", "dots_item");
		swiper2_dots.append(liDot);
	}
	swiper2_dots_item = document.querySelectorAll("#swiper2_dots > li");
	dotsSwiper2Handler();
	dotSwiper2Item();
}
function dotSwiper2Item() {
	for (let i = 0; i < swiper2_dots_item.length; i++) {
		const element = swiper2_dots_item[i];
		element.onclick = function () {
			swiper2_count = i;
			swiper2_moveNum = -100 * swiper2_count;
			swiper2MoveHandler();
			dotsSwiper2Handler();
		};
	}
}
pushDots2();

window.onresize = function () {
	if (window.innerWidth <= 1024 && screen == "pc") {
		screen = "ph";
		swiper1_max = Math.ceil(swiper1_item.length / 2);
		swiper2_max = Math.ceil(swiper2_item.length / 2);
		pushDots1();
		pushDots2();
	} else if (screen == "ph" && window.innerWidth > 1024) {
		screen = "pc";
		swiper1_max = Math.ceil(swiper1_item.length / 4);
		swiper2_max = Math.ceil(swiper2_item.length / 4);
		swiper1_count = 0;
		swiper2_count = 0;
		swiper1_moveNum = -100 * swiper1_count;
		swiper2_moveNum = -100 * swiper2_count;
		swiper1MoveHandler();
		swiper2MoveHandler();
		pushDots1();
		pushDots2();
	}
};

var swiperHandler = document.querySelectorAll("[name='swiperHandler']");
var gal_year = document.querySelector("#gal_year");
var gal_name = document.querySelector("#gal_name");
var gal_detail = document.querySelector("#gal_detail");
var gal_photo = document.querySelector("#gal_photo");
var gal_pic = document.querySelector("#gal_pic");
var gal_txt = document.querySelector("#gal_txt");
var show_photo = document.querySelector("#show_photo");
var gal_picOutside = document.querySelector("#gal_picOutside");

for (let i = 0; i < swiperHandler.length; i++) {
	const element = swiperHandler[i];
	element.onclick = function () {
		if (alert) {
			setAlert(element.getAttribute("data-galId"));
			alert.classList.add("show");
			setTimeout(() => {
				alert.classList.add("on");
			}, 10);
		} else {
			return;
		}
		var galId = element.getAttribute("data-galId");
	};
}

// 112.10.19 gallery.js 修改 start
var href = location.href;
var galData;
(function () {
	if (href.indexOf("zh-tw") !== -1) {
		galData = [
			{
				galId: 1,
				setMaxW: false,
				galName: "裸麝香",
				galPhoto: "perfume_name_photot_1.png",
				galPic: "perfume_open_photot_1.jpg",
				galPicPh: "perfume_open_photot_ph1.jpg",
				galYear: "2023",
				galDetail:
					"海洋。孕育生命的起源，如鯨鯊的存在 強悍與母性並存 <br> 溫柔撩人的香氣 充滿成熟的韻味",
				picPosition: "center"
			},
			{
				galId: 2,
				setMaxW: false,
				galName: "麝掠香",
				galPhoto: "perfume_name_photot_2.png",
				galPic: "perfume_open_photot_2.jpg",
				galPicPh: "perfume_open_photot_ph2.jpg",
				galYear: "2023",
				galDetail:
					"在叢林的騷動裡 靜靜窺探，清澈、桀驁的琥珀木質香 <br> 模糊我們的界線",
				picPosition: "30%"
			},
			{
				galId: 3,
				setMaxW: false,
				galName: "迷幻靈魂",
				galPhoto: "perfume_name_photot_3.png",
				galPic: "perfume_open_photot_3.jpg",
				galPicPh: "perfume_open_photot_ph3.jpg",
				galYear: "2023",
				galDetail:
					"在叢林的騷動裡 靜靜窺探，清澈、桀驁的琥珀木質香 <br> 模糊我們的界線",
				picPosition: "center"
			},
			{
				galId: 4,
				setMaxW: false,
				galName: "焚香草",
				galPhoto: "perfume_name_photot_4.png",
				galPic: "perfume_open_photot_4.jpg",
				galPicPh: "perfume_open_photot_ph4.jpg",
				galYear: "2023",
				galDetail:
					"一呼一吸 觸動心跳加速，我的香味是 Invitation Code <br> 這場螢光派對 你想邀請誰？",
				picPosition: "center"
			},
			{
				galId: 5,
				setMaxW: false,
				galName: "黑水香樹",
				galPhoto: "perfume_name_photot_5.png",
				galPic: "perfume_open_photot_5.jpg",
				galPicPh: "perfume_open_photot_ph5.jpg",
				galYear: "2022",
				galDetail: "木質酸甜的香氣、作為掩護 <br> 迷惑了感官、讓人卸下防備",
				picPosition: "42%"
			},
			{
				galId: 6,
				setMaxW: false,
				galName: "捕蠅草",
				galPhoto: "perfume_name_photot_6.png",
				galPic: "perfume_open_photot_6.jpg",
				galPicPh: "perfume_open_photot_ph6.jpg",
				galYear: "2022",
				galDetail:
					"精心佈置的伊甸園，默默散發誘惑的甜沁氣息 <br> 靜待獵物、被動比主動更有侵略性",
				picPosition: "52%"
			},
			{
				galId: 7,
				setMaxW: false,
				galName: "琥珀檀香",
				galPhoto: "perfume_name_photot_7.png",
				galPic: "perfume_open_photot_7.jpg",
				galPicPh: "perfume_open_photot_ph7.jpg",
				galYear: "2022",
				galDetail:
					"時而高傲冷漠，時而溫軟柔軟 <br> 無法被馴化侵略性浪漫，讓人無法招架",
				picPosition: "82%"
			},
			{
				galId: 8,
				setMaxW: false,
				galName: "清醒夢",
				galPhoto: "perfume_name_photot_8.png",
				galPic: "perfume_open_photot_8.jpg",
				galPicPh: "perfume_open_photot_ph1.jpg",
				galYear: "2021",
				galDetail:
					"浸入香味打造的幻境烏托邦，清新、歡愉、舒適慵懶 <br> 別叫醒我，夢境才是我的真實",
				picPosition: "97%"
			},
			{
				galId: 9,
				setMaxW: false,
				galName: "維吉尼亞麝香",
				galPhoto: "perfume_name_photot_9.png",
				galPic: "perfume_open_photot_9.jpg",
				galPicPh: "perfume_open_photot_ph9.jpg",
				galYear: "2021",
				galDetail:
					"霸道的控制狂穿上厚重木質煙燻氣息 <br> 只要妳願意臣服，就會感覺到無比的安全感",
				picPosition: "28%"
			},
			{
				galId: 10,
				setMaxW: false,
				galName: "大麻麝香",
				galPhoto: "perfume_name_photot_10.png",
				galPic: "perfume_open_photot_10.jpg",
				galPicPh: "perfume_open_photot_ph10.jpg",
				galYear: "2020",
				galDetail:
					"柑橘香氣拉開叢林的序幕，野性的菸草香瀰漫在空氣中 <br> 王者準備凱旋歸來",
				picPosition: "28%"
			},
			{
				galId: 11,
				setMaxW: false,
				galName: "琥珀萊姆",
				galPhoto: "perfume_name_photot_11.png",
				galPic: "perfume_open_photot_11.jpg",
				galPicPh: "perfume_open_photot_ph11.jpg",
				galYear: "2020",
				galDetail:
					"微辛甜氣喚醒夜的感官，萊姆酒香交織慵懶的雪松氣息 <br> 跳一支不想散場的舞",
				galTxt:
					"Odors have a power of persuasion stronger than that of words, appearances or will.SHARECO, <br>  using the most direct odor tomake you feel the fine atmosphere."
			},
			{
				galId: 12,
				setMaxW: false,
				galName: "奇蹟罌粟",
				galPhoto: "perfume_name_photot_12.png",
				galPic: "perfume_open_photot_12.jpg",
				galPicPh: "perfume_open_photot_ph12.jpg",
				galYear: "2018",
				galDetail:
					"聖壇上三花齊放的讚美歌 <br> 伴隨令人成癮的安定與和平，是最奢侈的享受",
				galTxt:
					"Odors have a power of persuasion stronger than that of words, appearances or will.SHARECO, <br>  using the most direct odor tomake you feel the fine atmosphere."
			},
			{
				galId: 13,
				setMaxW: false,
				galName: "能量麝香",
				galPhoto: "perfume_name_photot_13.png",
				galPic: "perfume_open_photot_13.jpg",
				galPicPh: "perfume_open_photot_ph13.jpg",
				galYear: "2018",
				galDetail:
					"冒險就在愜意的草木香中展開，隨晨曦揭開麝香的清新活力 <br> 為紳士帶來沈穩的優雅",
				galTxt:
					"Odors have a power of persuasion stronger than that of words, appearances or will.SHARECO, <br>  using the most direct odor tomake you feel the fine atmosphere."
			},
			{
				galId: 14,
				setMaxW: false,
				galName: "皇家橡樹",
				galPhoto: "perfume_name_photot_14.png",
				galPic: "perfume_open_photot_14.jpg",
				galPicPh: "perfume_open_photot_ph14.jpg",
				galYear: "2018",
				galDetail:
					"不凡自信，在貴族檀香中誕生 <br> 融合海島植物與果實的香氣，散發皇室魅力",
				galTxt:
					"Odors have a power of persuasion stronger than that of words, appearances or will.SHARECO, <br>  using the most direct odor tomake you feel the fine atmosphere."
			},
			{
				galId: 15,
				setMaxW: true,
				galName: "雪松麝香 沐浴膠",
				galPhoto: "bathing_name_1.png",
				galPic: "bathing_open_1.jpg",
				galPicPh: "bathing_open_1.jpg",
				galYear: "2023",
				galDetail:
					"乾冷的雪松木質香氣， 像早晨的空氣 輕盈、乾淨<br>營造慵懶自在的 Morning Vibe",
				galTxt:
					"Odors have a power of persuasion stronger than that of words, appearances or will.SHARECO, <br>  using the most direct odor tomake you feel the fine atmosphere."
			},
			{
				galId: 16,
				setMaxW: true,
				galName: "菸草香 沐浴膠",
				galPhoto: "bathing_name_2.png",
				galPic: "bathing_open_2.jpg",
				galPicPh: "bathing_open_2.jpg",
				galYear: "2023",
				galDetail: "菸草混合濃郁木質基底<br>在煙霧彌漫的水蒸氣中解放心身靈",
				galTxt:
					"Odors have a power of persuasion stronger than that of words, appearances or will.SHARECO, <br>  using the most direct odor tomake you feel the fine atmosphere."
			},
			{
				galId: 17,
				setMaxW: true,
				galName: "木曜森林 沐浴膠",
				galPhoto: "bathing_name_3.png",
				galPic: "bathing_open_3.jpg",
				galPicPh: "bathing_open_3.jpg",
				galYear: "2023",
				galDetail: "微酸紅醋栗、微醺的狀態，感知力太強、靈感太多<br>捨不得今晚就這樣結束",
				galTxt:
					"Odors have a power of persuasion stronger than that of words, appearances or will.SHARECO, <br>  using the most direct odor tomake you feel the fine atmosphere."
			},
			{
				galId: 18,
				setMaxW: true,
				galName: "大麻士革 洗髮膠",
				galPhoto: "bathing_name_4.png",
				galPic: "bathing_open_4.jpg",
				galPicPh: "bathing_open_4.jpg",
				galYear: "2023",
				galDetail: "強勢又濃郁的沉香木基底<br>只要臣服 就會感覺到無比的安全感",
				galTxt:
					"Odors have a power of persuasion stronger than that of words, appearances or will.SHARECO, <br>  using the most direct odor tomake you feel the fine atmosphere."
			},
			{
				galId: 19,
				setMaxW: true,
				galName: "厚磅窄版TEE",
				galPhoto: "",
				galPic: "clothing_open_photot_5.jpg",
				galPicPh: "clothing_open_photot_ph5.jpg",
				galYear: "2019",
				galDetail: "S / M / L / XL / XXL",
				galTxt:
					"Odors have a power of persuasion stronger than that of words, appearances or will.SHARECO, <br>  using the most direct odor tomake you feel the fine atmosphere."
			}
		];
	} else if (href.indexOf("zh-cn") !== -1) {
		galData = [
			{
				galId: 1,
				setMaxW: false,
				galName: "裸麝香",
				galPhoto: "perfume_name_photot_1.png",
				galPic: "perfume_open_photot_1.jpg",
				galPicPh: "perfume_open_photot_ph1.jpg",
				galYear: "2023",
				galDetail:
					"海洋。孕育生命的起源，如鲸鲨的存在 强悍与母性并存 <br> 温柔撩人的香气 充满成熟的韵味",
				picPosition: "center"
			},
			{
				galId: 2,
				setMaxW: false,
				galName: "麝掠香",
				galPhoto: "perfume_name_photot_2.png",
				galPic: "perfume_open_photot_2.jpg",
				galPicPh: "perfume_open_photot_ph2.jpg",
				galYear: "2023",
				galDetail:
					"在丛林的骚动里 静静窥探，清澈、桀骜的琥珀木质香 <br> 模糊我们的界线",
				picPosition: "30%"
			},
			{
				galId: 3,
				setMaxW: false,
				galName: "迷幻灵魂",
				galPhoto: "perfume_name_photot_3.png",
				galPic: "perfume_open_photot_3.jpg",
				galPicPh: "perfume_open_photot_ph3.jpg",
				galYear: "2023",
				galDetail:
					"在丛林的骚动里 静静窥探，清澈、桀骜的琥珀木质香 <br> 模糊我们的界线",
				picPosition: "center"
			},
			{
				galId: 4,
				setMaxW: false,
				galName: "焚香草",
				galPhoto: "perfume_name_photot_4.png",
				galPic: "perfume_open_photot_4.jpg",
				galPicPh: "perfume_open_photot_ph4.jpg",
				galYear: "2023",
				galDetail:
					"一呼一吸 触动心跳加速，我的香味是 Invitation Code <br> 这场萤光派对 你想邀请谁？",
				picPosition: "center"
			},
			{
				galId: 5,
				setMaxW: false,
				galName: "黑水香树",
				galPhoto: "perfume_name_photot_5.png",
				galPic: "perfume_open_photot_5.jpg",
				galPicPh: "perfume_open_photot_ph5.jpg",
				galYear: "2022",
				galDetail: "木质酸甜的香气、作为掩护 <br> 迷惑了感官、让人卸下防备",
				picPosition: "42%"
			},
			{
				galId: 6,
				setMaxW: false,
				galName: "捕蝇草",
				galPhoto: "perfume_name_photot_6.png",
				galPic: "perfume_open_photot_6.jpg",
				galPicPh: "perfume_open_photot_ph6.jpg",
				galYear: "2022",
				galDetail:
					"精心布置的伊甸园，默默散发诱惑的甜沁气息 <br> 静待猎物、被动比主动更有侵略性",
				picPosition: "52%"
			},
			{
				galId: 7,
				setMaxW: false,
				galName: "琥珀檀香",
				galPhoto: "perfume_name_photot_7.png",
				galPic: "perfume_open_photot_7.jpg",
				galPicPh: "perfume_open_photot_ph7.jpg",
				galYear: "2022",
				galDetail:
					"时而高傲冷漠，时而温软柔软 <br> 无法被驯化侵略性浪漫，让人无法招架",
				picPosition: "82%"
			},
			{
				galId: 8,
				setMaxW: false,
				galName: "清醒梦",
				galPhoto: "perfume_name_photot_8.png",
				galPic: "perfume_open_photot_8.jpg",
				galPicPh: "perfume_open_photot_ph1.jpg",
				galYear: "2021",
				galDetail:
					"浸入香味打造的幻境乌托邦，清新、欢愉、舒适慵懒 <br> 别叫醒我，梦境才是我的真实",
				picPosition: "97%"
			},
			{
				galId: 9,
				setMaxW: false,
				galName: "维吉尼亚麝香",
				galPhoto: "perfume_name_photot_9.png",
				galPic: "perfume_open_photot_9.jpg",
				galPicPh: "perfume_open_photot_ph9.jpg",
				galYear: "2021",
				galDetail:
					"霸道的控制狂穿上厚重木质烟熏气息 <br> 只要妳愿意臣服，就会感觉到无比的安全感",
				picPosition: "28%"
			},
			{
				galId: 10,
				setMaxW: false,
				galName: "大麻麝香",
				galPhoto: "perfume_name_photot_10.png",
				galPic: "perfume_open_photot_10.jpg",
				galPicPh: "perfume_open_photot_ph10.jpg",
				galYear: "2020",
				galDetail:
					"柑橘香气拉开丛林的序幕，野性的菸草香弥漫在空气中 <br> 王者准备凯旋归来",
				picPosition: "28%"
			},
			{
				galId: 11,
				setMaxW: false,
				galName: "琥珀莱姆",
				galPhoto: "perfume_name_photot_11.png",
				galPic: "perfume_open_photot_11.jpg",
				galPicPh: "perfume_open_photot_ph11.jpg",
				galYear: "2020",
				galDetail:
					"微辛甜气唤醒夜的感官，莱姆酒香交织慵懒的雪松气息 <br> 跳一支不想散场的舞",
				galTxt:
					"Odors have a power of persuasion stronger than that of words, appearances or will.SHARECO, <br>  using the most direct odor tomake you feel the fine atmosphere."
			},
			{
				galId: 12,
				setMaxW: false,
				galName: "奇迹罂粟",
				galPhoto: "perfume_name_photot_12.png",
				galPic: "perfume_open_photot_12.jpg",
				galPicPh: "perfume_open_photot_ph12.jpg",
				galYear: "2018",
				galDetail:
					"圣坛上三花齐放的赞美歌 <br> 伴随令人成瘾的安定与和平，是最奢侈的享受",
				galTxt:
					"Odors have a power of persuasion stronger than that of words, appearances or will.SHARECO, <br>  using the most direct odor tomake you feel the fine atmosphere."
			},
			{
				galId: 13,
				setMaxW: false,
				galName: "能量麝香",
				galPhoto: "perfume_name_photot_13.png",
				galPic: "perfume_open_photot_13.jpg",
				galPicPh: "perfume_open_photot_ph13.jpg",
				galYear: "2018",
				galDetail:
					"冒险就在惬意的草木香中展开，随晨曦揭开麝香的清新活力 <br> 为绅士带来沈稳的优雅",
				galTxt:
					"Odors have a power of persuasion stronger than that of words, appearances or will.SHARECO, <br>  using the most direct odor tomake you feel the fine atmosphere."
			},
			{
				galId: 14,
				setMaxW: false,
				galName: "皇家橡树",
				galPhoto: "perfume_name_photot_14.png",
				galPic: "perfume_open_photot_14.jpg",
				galPicPh: "perfume_open_photot_ph14.jpg",
				galYear: "2018",
				galDetail:
					"不凡自信，在贵族檀香中诞生 <br> 融合海岛植物与果实的香气，散发皇室魅力",
				galTxt:
					"Odors have a power of persuasion stronger than that of words, appearances or will.SHARECO, <br>  using the most direct odor tomake you feel the fine atmosphere."
			},
			{
				galId: 15,
				setMaxW: true,
				galName: "雪松麝香 沐浴胶",
				galPhoto: "bathing_name_1.png",
				galPic: "bathing_open_1.jpg",
				galPicPh: "bathing_open_1.jpg",
				galYear: "2023",
				galDetail:
					"干冷的雪松木质香气， 像早晨的空气 轻盈、干净<br>营造慵懒自在的 Morning Vibe",
				galTxt:
					"Odors have a power of persuasion stronger than that of words, appearances or will.SHARECO, <br>  using the most direct odor tomake you feel the fine atmosphere."
			},
			{
				galId: 16,
				setMaxW: true,
				galName: "菸草香 沐浴胶",
				galPhoto: "bathing_name_2.png",
				galPic: "bathing_open_2.jpg",
				galPicPh: "bathing_open_2.jpg",
				galYear: "2023",
				galDetail: "菸草混合浓郁木质基底<br>在烟雾弥漫的水蒸气中解放心身灵",
				galTxt:
					"Odors have a power of persuasion stronger than that of words, appearances or will.SHARECO, <br>  using the most direct odor tomake you feel the fine atmosphere."
			},
			{
				galId: 17,
				setMaxW: true,
				galName: "木曜森林 沐浴胶",
				galPhoto: "bathing_name_3.png",
				galPic: "bathing_open_3.jpg",
				galPicPh: "bathing_open_3.jpg",
				galYear: "2023",
				galDetail: "微酸红醋栗、微醺的状态，感知力太强、灵感太多<br>舍不得今晚就这样结束",
				galTxt:
					"Odors have a power of persuasion stronger than that of words, appearances or will.SHARECO, <br>  using the most direct odor tomake you feel the fine atmosphere."
			},
			{
				galId: 18,
				setMaxW: true,
				galName: "大麻士革 洗发胶",
				galPhoto: "bathing_name_4.png",
				galPic: "bathing_open_4.jpg",
				galPicPh: "bathing_open_4.jpg",
				galYear: "2023",
				galDetail: "强势又浓郁的沉香木基底<br>只要臣服 就会感觉到无比的安全感",
				galTxt:
					"Odors have a power of persuasion stronger than that of words, appearances or will.SHARECO, <br>  using the most direct odor tomake you feel the fine atmosphere."
			},
			{
				galId: 19,
				setMaxW: true,
				galName: "厚磅窄版TEE",
				galPhoto: "",
				galPic: "clothing_open_photot_5.jpg",
				galPicPh: "clothing_open_photot_ph5.jpg",
				galYear: "2019",
				galDetail: "S / M / L / XL / XXL",
				galTxt:
					"Odors have a power of persuasion stronger than that of words, appearances or will.SHARECO, <br>  using the most direct odor tomake you feel the fine atmosphere."
			}
		];
	} else if (href.indexOf("en-us") !== -1) {
		galData = [
			{
				galId: 1,
				setMaxW: false,
				galName: "裸麝香",
				galPhoto: "perfume_name_photot_1.png",
				galPic: "perfume_open_photot_1.jpg",
				galPicPh: "perfume_open_photot_ph1.jpg",
				galYear: "2023",
				galDetail:
					"Like the ocean that is the cradle of life, a tough and feminine presence that lures you away.",
				picPosition: "center"
			},
			{
				galId: 2,
				setMaxW: false,
				galName: "麝掠香",
				galPhoto: "perfume_name_photot_2.png",
				galPic: "perfume_open_photot_2.jpg",
				galPicPh: "perfume_open_photot_ph2.jpg",
				galYear: "2023",
				galDetail:
					"Lurking in the bustling jungle, a clear, young amber wood note that blurs the lines.",
				picPosition: "30%"
			},
			{
				galId: 3,
				setMaxW: false,
				galName: "迷幻灵魂",
				galPhoto: "perfume_name_photot_3.png",
				galPic: "perfume_open_photot_3.jpg",
				galPicPh: "perfume_open_photot_ph3.jpg",
				galYear: "2023",
				galDetail:
					"A mysterious hint of strong floral notes, inviting you on an adventure in the land of imagination.",
				picPosition: "center"
			},
			{
				galId: 4,
				setMaxW: false,
				galName: "焚香草",
				galPhoto: "perfume_name_photot_4.png",
				galPic: "perfume_open_photot_4.jpg",
				galPicPh: "perfume_open_photot_ph4.jpg",
				galYear: "2023",
				galDetail:
					"Heart racing with every breath, is my scent an invitation?Who do you want to meet?",
				picPosition: "center"
			},
			{
				galId: 5,
				setMaxW: false,
				galName: "黑水香树",
				galPhoto: "perfume_name_photot_5.png",
				galPic: "perfume_open_photot_5.jpg",
				galPicPh: "perfume_open_photot_ph5.jpg",
				galYear: "2022",
				galDetail: "Wood scent masked with a hint of sweet and a note of tang; enchanting your senses, lowering defences.",
				picPosition: "42%"
			},
			{
				galId: 6,
				setMaxW: false,
				galName: "捕蝇草",
				galPhoto: "perfume_name_photot_6.png",
				galPic: "perfume_open_photot_6.jpg",
				galPicPh: "perfume_open_photot_ph6.jpg",
				galYear: "2022",
				galDetail:
					"Like the garden of Eden, a hint of something tempting lurks within;wait for your prey, sometimes defense is the best offence.",
				picPosition: "52%"
			},
			{
				galId: 7,
				setMaxW: false,
				galName: "琥珀檀香",
				galPhoto: "perfume_name_photot_7.png",
				galPic: "perfume_open_photot_7.jpg",
				galPicPh: "perfume_open_photot_ph7.jpg",
				galYear: "2022",
				galDetail:
					"Sometimes cold and prideful, sometimes soft and gentle; an aggressive romantic that cannot be tamed, and you cannot resist.",
				picPosition: "82%"
			},
			{
				galId: 8,
				setMaxW: false,
				galName: "清醒梦",
				galPhoto: "perfume_name_photot_8.png",
				galPic: "perfume_open_photot_8.jpg",
				galPicPh: "perfume_open_photot_ph1.jpg",
				galYear: "2021",
				galDetail:
					"Immersed in the fantastic utopia of scent, fresh, joyous, and comfortably laid back. Don’t wake me, my dream is my reality.",
				picPosition: "97%"
			},
			{
				galId: 9,
				setMaxW: false,
				galName: "维吉尼亚麝香",
				galPhoto: "perfume_name_photot_9.png",
				galPic: "perfume_open_photot_9.jpg",
				galPicPh: "perfume_open_photot_ph9.jpg",
				galYear: "2021",
				galDetail:
					"Like the strong ladies’ man embraced with smoking wood; let him take charge, and feel unassailable security.",
				picPosition: "28%"
			},
			{
				galId: 10,
				setMaxW: false,
				galName: "大麻麝香",
				galPhoto: "perfume_name_photot_10.png",
				galPic: "perfume_open_photot_10.jpg",
				galPicPh: "perfume_open_photot_ph10.jpg",
				galYear: "2020",
				galDetail:
					"An elegant but slightly flirty blend, light citrus in a jungle, wild tobacco in the air, the King has returned.",
				picPosition: "28%"
			},
			{
				galId: 11,
				setMaxW: false,
				galName: "琥珀莱姆",
				galPhoto: "perfume_name_photot_11.png",
				galPic: "perfume_open_photot_11.jpg",
				galPicPh: "perfume_open_photot_ph11.jpg",
				galYear: "2020",
				galDetail:
					"Soft sweetness of rum blended with the sharp scent of cedar, let’s go, just one more dance, that lasts forever.",
				galTxt:
					"Odors have a power of persuasion stronger than that of words, appearances or will.SHARECO, <br>  using the most direct odor tomake you feel the fine atmosphere."
			},
			{
				galId: 12,
				setMaxW: false,
				galName: "奇迹罂粟",
				galPhoto: "perfume_name_photot_12.png",
				galPic: "perfume_open_photot_12.jpg",
				galPicPh: "perfume_open_photot_ph12.jpg",
				galYear: "2018",
				galDetail:
					"The three main floral scent joined in harmony, creating a symphony that brings peace and stability. A most luxurious enjoyment.",
				galTxt:
					"Odors have a power of persuasion stronger than that of words, appearances or will.SHARECO, <br>  using the most direct odor tomake you feel the fine atmosphere."
			},
			{
				galId: 13,
				setMaxW: false,
				galName: "能量麝香",
				galPhoto: "perfume_name_photot_13.png",
				galPic: "perfume_open_photot_13.jpg",
				galPicPh: "perfume_open_photot_ph13.jpg",
				galYear: "2018",
				galDetail:
					"The adventure starts with herbaceous scents, that bring with it the energizing freshness of musk; the subtle elegance and suave of a gentleman.",
				galTxt:
					"Odors have a power of persuasion stronger than that of words, appearances or will.SHARECO, <br>  using the most direct odor tomake you feel the fine atmosphere."
			},
			{
				galId: 14,
				setMaxW: false,
				galName: "皇家橡树",
				galPhoto: "perfume_name_photot_14.png",
				galPic: "perfume_open_photot_14.jpg",
				galPicPh: "perfume_open_photot_ph14.jpg",
				galYear: "2018",
				galDetail:
					"The noble sandalwood grants you unbridled confidence, infused withisland plants and fruits that offer a hint of luxury, allowing you to feel like royalty.",
				galTxt:
					"Odors have a power of persuasion stronger than that of words, appearances or will.SHARECO, <br>  using the most direct odor tomake you feel the fine atmosphere."
			},
			{
				galId: 15,
				setMaxW: true,
				galName: "Shower Gel",
				galPhoto: "bathing_name_1.png",
				galPic: "bathing_open_1.jpg",
				galPicPh: "bathing_open_1.jpg",
				galYear: "2023",
				galDetail:
					"The clean, cold scent of cedarwood, light and full of light, like the morning air, some laid-back morning vibes.",
				galTxt:
					"Odors have a power of persuasion stronger than that of words, appearances or will.SHARECO, <br>  using the most direct odor tomake you feel the fine atmosphere."
			},
			{
				galId: 16,
				setMaxW: true,
				galName: "Shower Gel",
				galPhoto: "bathing_name_2.png",
				galPic: "bathing_open_2.jpg",
				galPicPh: "bathing_open_2.jpg",
				galYear: "2023",
				galDetail: "Tobacco mixed with a wood base, like steam flitting through the smoke and mirrors, asking you to relax.",
				galTxt:
					"Odors have a power of persuasion stronger than that of words, appearances or will.SHARECO, <br>  using the most direct odor tomake you feel the fine atmosphere."
			},
			{
				galId: 17,
				setMaxW: true,
				galName: "Shower Gel",
				galPhoto: "bathing_name_3.png",
				galPic: "bathing_open_3.jpg",
				galPicPh: "bathing_open_3.jpg",
				galYear: "2023",
				galDetail: "The sharpness of redcurrants, with a mild tipsiness, there’s a sensory overload happening, and I don’t want it to end.",
				galTxt:
					"Odors have a power of persuasion stronger than that of words, appearances or will.SHARECO, <br>  using the most direct odor tomake you feel the fine atmosphere."
			},
			{
				galId: 18,
				setMaxW: true,
				galName: "Shampoo",
				galPhoto: "bathing_name_4.png",
				galPic: "bathing_open_4.jpg",
				galPicPh: "bathing_open_4.jpg",
				galYear: "2023",
				galDetail: "A strong agarwood base, that lets its presence known as soon as you quiet down…an underlying sense of security. ",
				galTxt:
					"Odors have a power of persuasion stronger than that of words, appearances or will.SHARECO, <br>  using the most direct odor tomake you feel the fine atmosphere."
			},
			{
				galId: 19,
				setMaxW: true,
				galName: "厚磅窄版TEE",
				galPhoto: "",
				galPic: "clothing_open_photot_5.jpg",
				galPicPh: "clothing_open_photot_ph5.jpg",
				galYear: "2019",
				galDetail: "S / M / L / XL / XXL",
				galTxt:
					"Odors have a power of persuasion stronger than that of words, appearances or will.SHARECO, <br>  using the most direct odor tomake you feel the fine atmosphere."
			}
		];
	} else if (href.indexOf("ja-jp") !== -1) {
		galData = [
			{
				galId: 1,
				setMaxW: false,
				galName: "キンダブギー",
				galPhoto: "perfume_name_photot_1.png",
				galPic: "perfume_open_photot_1.jpg",
				galPicPh: "perfume_open_photot_ph1.jpg",
				galYear: "2023",
				galDetail:
					"橘の香りが、ジャングルの始まりを予感させる。空間に広がるのは、野性的なタバコの香り。王者はもうすぐ凱旋帰還します。",
				picPosition: "center"
			},
			{
				galId: 2,
				setMaxW: false,
				galName: "エナジームスク",
				galPhoto: "perfume_name_photot_2.png",
				galPic: "perfume_open_photot_2.jpg",
				galPicPh: "perfume_open_photot_ph2.jpg",
				galYear: "2023",
				galDetail:
					"冒険は心地よい木の香りの中で始まる。朝日と共に明らかになるのは、麝香の清新な活力。紳士に、静けさと優雅さをもたらします。",
				picPosition: "30%"
			},
			{
				galId: 3,
				setMaxW: false,
				galName: "アシッドモリー",
				galPhoto: "perfume_name_photot_3.png",
				galPic: "perfume_open_photot_3.jpg",
				galPicPh: "perfume_open_photot_ph3.jpg",
				galYear: "2023",
				galDetail:
					"リラックスさせる化学物質が広がり、人々に快適な怠惰な気分をもたらします。まるでパーティーのような雰囲気で、現実世界から離れたひとときを楽しんでください。",
				picPosition: "center"
			},
			{
				galId: 4,
				setMaxW: false,
				galName: "ヴィーナスフライトラップ",
				galPhoto: "perfume_name_photot_4.png",
				galPic: "perfume_open_photot_4.jpg",
				galPicPh: "perfume_open_photot_ph4.jpg",
				galYear: "2023",
				galDetail:
					"緻密に飾り付けられたエデンガーデン。漂うのは、静かに魅惑的な甘い香り。獲物を静かに待つ、攻撃性を纏って。",
				picPosition: "center"
			},
			{
				galId: 5,
				setMaxW: false,
				galName: "ロイヤルオーク",
				galPhoto: "perfume_name_photot_5.png",
				galPic: "perfume_open_photot_5.jpg",
				galPicPh: "perfume_open_photot_ph5.jpg",
				galYear: "2022",
				galDetail: "大いなる自信が、貴族の香りから生まれます。島の植物と果物の香りが融合し、王室の魅力を放っています。",
				picPosition: "42%"
			},
			{
				galId: 6,
				setMaxW: false,
				galName: "キンダブギー",
				galPhoto: "perfume_name_photot_6.png",
				galPic: "perfume_open_photot_6.jpg",
				galPicPh: "perfume_open_photot_ph6.jpg",
				galYear: "2022",
				galDetail:
					"橘の香りが、ジャングルの始まりを予感させる。空間に広がるのは、野性的なタバコの香り。王者はもうすぐ凱旋帰還します。",
				picPosition: "52%"
			},
			{
				galId: 7,
				setMaxW: false,
				galName: "エナジームスク",
				galPhoto: "perfume_name_photot_7.png",
				galPic: "perfume_open_photot_7.jpg",
				galPicPh: "perfume_open_photot_ph7.jpg",
				galYear: "2022",
				galDetail:
					"冒険は心地よい木の香りの中で始まる。朝日と共に明らかになるのは、麝香の清新な活力。紳士に、静けさと優雅さをもたらします。",
				picPosition: "82%"
			},
			{
				galId: 8,
				setMaxW: false,
				galName: "アシッドモリー",
				galPhoto: "perfume_name_photot_8.png",
				galPic: "perfume_open_photot_8.jpg",
				galPicPh: "perfume_open_photot_ph1.jpg",
				galYear: "2021",
				galDetail:
					"リラックスさせる化学物質が広がり、人々に快適な怠惰な気分をもたらします。まるでパーティーのような雰囲気で、現実世界から離れたひとときを楽しんでください。",
				picPosition: "97%"
			},
			{
				galId: 9,
				setMaxW: false,
				galName: "ヴィーナスフライトラップ",
				galPhoto: "perfume_name_photot_9.png",
				galPic: "perfume_open_photot_9.jpg",
				galPicPh: "perfume_open_photot_ph9.jpg",
				galYear: "2021",
				galDetail:
					"緻密に飾り付けられたエデンガーデン。漂うのは、静かに魅惑的な甘い香り。獲物を静かに待つ、攻撃性を纏って。",
				picPosition: "28%"
			},
			{
				galId: 10,
				setMaxW: false,
				galName: "ロイヤルオーク",
				galPhoto: "perfume_name_photot_10.png",
				galPic: "perfume_open_photot_10.jpg",
				galPicPh: "perfume_open_photot_ph10.jpg",
				galYear: "2020",
				galDetail: "大いなる自信が、貴族の香りから生まれます。島の植物と果物の香りが融合し、王室の魅力を放っています。",
				picPosition: "28%"
			},
			{
				galId: 11,
				setMaxW: false,
				galName: "キンダブギー",
				galPhoto: "perfume_name_photot_11.png",
				galPic: "perfume_open_photot_11.jpg",
				galPicPh: "perfume_open_photot_ph11.jpg",
				galYear: "2020",
				galDetail:
					"橘の香りが、ジャングルの始まりを予感させる。空間に広がるのは、野性的なタバコの香り。王者はもうすぐ凱旋帰還します。",
				galTxt:
					"Odors have a power of persuasion stronger than that of words, appearances or will.SHARECO, <br>  using the most direct odor tomake you feel the fine atmosphere."
			},
			{
				galId: 12,
				setMaxW: false,
				galName: "エナジームスク",
				galPhoto: "perfume_name_photot_12.png",
				galPic: "perfume_open_photot_12.jpg",
				galPicPh: "perfume_open_photot_ph12.jpg",
				galYear: "2018",
				galDetail:
					"冒険は心地よい木の香りの中で始まる。朝日と共に明らかになるのは、麝香の清新な活力。紳士に、静けさと優雅さをもたらします。",
				galTxt:
					"Odors have a power of persuasion stronger than that of words, appearances or will.SHARECO, <br>  using the most direct odor tomake you feel the fine atmosphere."
			},
			{
				galId: 13,
				setMaxW: false,
				galName: "アシッドモリー",
				galPhoto: "perfume_name_photot_13.png",
				galPic: "perfume_open_photot_13.jpg",
				galPicPh: "perfume_open_photot_ph13.jpg",
				galYear: "2018",
				galDetail:
					"リラックスさせる化学物質が広がり、人々に快適な怠惰な気分をもたらします。まるでパーティーのような雰囲気で、現実世界から離れたひとときを楽しんでください。",
				galTxt:
					"Odors have a power of persuasion stronger than that of words, appearances or will.SHARECO, <br>  using the most direct odor tomake you feel the fine atmosphere."
			},
			{
				galId: 14,
				setMaxW: false,
				galName: "ヴィーナスフライトラップ",
				galPhoto: "perfume_name_photot_14.png",
				galPic: "perfume_open_photot_14.jpg",
				galPicPh: "perfume_open_photot_ph14.jpg",
				galYear: "2018",
				galDetail:
					"緻密に飾り付けられたエデンガーデン。漂うのは、静かに魅惑的な甘い香り。獲物を静かに待つ、攻撃性を纏って。",
				galTxt:
					"Odors have a power of persuasion stronger than that of words, appearances or will.SHARECO, <br>  using the most direct odor tomake you feel the fine atmosphere."
			},
			{
				galId: 15,
				setMaxW: true,
				galName: "ロイヤルオーク",
				galPhoto: "bathing_name_1.png",
				galPic: "bathing_open_1.jpg",
				galPicPh: "bathing_open_1.jpg",
				galYear: "2023",
				galDetail: "大いなる自信が、貴族の香りから生まれます。島の植物と果物の香りが融合し、王室の魅力を放っています。",
				galTxt:
					"Odors have a power of persuasion stronger than that of words, appearances or will.SHARECO, <br>  using the most direct odor tomake you feel the fine atmosphere."
			},
			{
				galId: 16,
				setMaxW: true,
				galName: "キンダブギー",
				galPhoto: "bathing_name_2.png",
				galPic: "bathing_open_2.jpg",
				galPicPh: "bathing_open_2.jpg",
				galYear: "2023",
				galDetail:
					"橘の香りが、ジャングルの始まりを予感させる。空間に広がるのは、野性的なタバコの香り。王者はもうすぐ凱旋帰還します。",
				galTxt:
					"Odors have a power of persuasion stronger than that of words, appearances or will.SHARECO, <br>  using the most direct odor tomake you feel the fine atmosphere."
			},
			{
				galId: 17,
				setMaxW: true,
				galName: "エナジームスク",
				galPhoto: "bathing_name_3.png",
				galPic: "bathing_open_3.jpg",
				galPicPh: "bathing_open_3.jpg",
				galYear: "2023",
				galDetail:
					"冒険は心地よい木の香りの中で始まる。朝日と共に明らかになるのは、麝香の清新な活力。紳士に、静けさと優雅さをもたらします。",
				galTxt:
					"Odors have a power of persuasion stronger than that of words, appearances or will.SHARECO, <br>  using the most direct odor tomake you feel the fine atmosphere."
			},
			{
				galId: 18,
				setMaxW: true,
				galName: "アシッドモリー",
				galPhoto: "bathing_name_4.png",
				galPic: "bathing_open_4.jpg",
				galPicPh: "bathing_open_4.jpg",
				galYear: "2023",
				galDetail:
				"リラックスさせる化学物質が広がり、人々に快適な怠惰な気分をもたらします。まるでパーティーのような雰囲気で、現実世界から離れたひとときを楽しんでください。",
				galTxt:
					"Odors have a power of persuasion stronger than that of words, appearances or will.SHARECO, <br>  using the most direct odor tomake you feel the fine atmosphere."
			},
			{
				galId: 19,
				setMaxW: true,
				galName: "ヴィーナスフライトラップ",
				galPhoto: "",
				galPic: "clothing_open_photot_5.jpg",
				galPicPh: "clothing_open_photot_ph5.jpg",
				galYear: "2019",
				galDetail:
					"緻密に飾り付けられたエデンガーデン。漂うのは、静かに魅惑的な甘い香り。獲物を静かに待つ、攻撃性を纏って。",
				galTxt:
					"Odors have a power of persuasion stronger than that of words, appearances or will.SHARECO, <br>  using the most direct odor tomake you feel the fine atmosphere."
			}
		];
	}
})();
// 112.10.19 gallery.js 修改 end




function setAlert(id) {
	gal_year.innerHTML = "";
	gal_name.innerHTML = "";
	gal_detail.innerHTML = "";
	gal_photo.setAttribute("src", "");
	gal_pic.setAttribute("class", "");
	for (let i = 0; i < galData.length; i++) {
		if (galData[i].galId == id) {
			gal_year.innerHTML = galData[i].galYear;
			gal_name.innerHTML = galData[i].galName;
			gal_detail.innerHTML = galData[i].galDetail;
			if (galData[i].setMaxW) {
				gal_pic.setAttribute("class", "galMax");
			}
			if (galData[i].galPhoto == "") {
				show_photo.style.display = "none";
			} else {
				gal_photo.setAttribute(
					"src",
					"../images/gallery/" + galData[i].galPhoto
				);
			}
			// background-image:url(../images/gallery/" +
			// galData[i].galPic + ");background-position: " + galData[i].picPosition + "center

			gal_picOutside.setAttribute(
				"style",
				`
				background-image:url(../images/gallery/${galData[i].galPicPh});

				`
				// background-position: ${galData[i].picPosition} center;
			);
			gal_pic.setAttribute(
				"src",
				"../images/gallery/" + galData[i].galPic
			);
		}
	}
}

var storeBox = document.querySelector("#store");
var store_sel = document.querySelector("#store_sel");
var store_sel_group = document.querySelector("#store_sel_group");
var store_sel_item = document.querySelectorAll("#store_sel_group > li");
var store_sel_name = null;
var area = null;
var store = "store0";
var store_tab_item = document.querySelectorAll("#store_tab>li.normal_tab_item");
var store_tab_count = screen == "pc" ? 0 : null;
var store_show = document.querySelectorAll("[name='store_show']");
var store_ph_data1 = document.querySelector("#store_ph_data1");
var store_ph_data2 = document.querySelector("#store_ph_data2");
var normal_tab_btn = document.querySelector("#normal_tab_btn");
var ph_deal = document.querySelector("#ph_deal");

function getC() {
	fetch("https://ipinfo.io/json")
		.then(response => response.json())
		.then(data => {
			if (data.country) {
				set_store_sel(data.country);
			} else {
				set_store_sel("tw");
			}
		})
		.catch(error => {
			console.error("Error:", error);
		});
}
if (location.search) {
	let str = location.search.split("&");
	let getCountry = str[0].split("=")[1];
	let getContent = str[1].split("=")[1];
	set_store_sel(getCountry);
	store = getContent;
	setTab = getContent.split("store")[1];
	console.log("setTab", setTab);
	store_tab_item[setTab].classList.add("on");
} else {
	getC();
}
function set_store_sel(country) {
	if (country.toLowerCase() == "tw") {
		store_sel_name = document.querySelector("[name='tw']");
	} else if (country.toLowerCase() == "jp") {
		store_sel_name = document.querySelector("[name='jp']");
	} else if (country.toLowerCase() == "hk") {
		store_sel_name = document.querySelector("[name='hk']");
	} else if (country.toLowerCase() == "sg") {
		store_sel_name = document.querySelector("[name='sg']");
	} else if (country.toLowerCase() == "my") {
		store_sel_name = document.querySelector("[name='my']");
	}
	store_sel_name.classList.add("on");
	store_sel.innerHTML = store_sel_name.innerHTML;
	area = country.toLowerCase();
	storeBox.classList.add(area);
	if (screen == "ph") {
		setPhInfo();
	} else {
		storeShow();
	}
}

store_sel.onclick = function () {
	store_sel_group.classList.toggle("on");
};

function store_sel_clear() {
	for (let i = 0; i < store_sel_item.length; i++) {
		store_sel_item[i].classList.remove("on");
	}
}

for (let i = 0; i < store_sel_item.length; i++) {
	const element = store_sel_item[i];
	element.onclick = function () {
		store_sel_clear();
		element.classList.add("on");
		store_sel.innerHTML = element.innerHTML;
		area = element.getAttribute("name");
		store_sel_group.classList.remove("on");
		screen == "pc" ? storeShow() : setPhInfo();
		storeBox.setAttribute("class", "store " + area);
	};
}

for (let i = 0; i < store_tab_item.length; i++) {
	const element = store_tab_item[i];
	element.onclick = function () {
		if (screen == "pc") {
			if (i == 0) {
				store_tab_item[1].classList.remove("on");
			} else {
				store_tab_item[0].classList.remove("on");
			}
			element.classList.add("on");
			store = "store" + i;
			storeShow();
		} else {
			if (store_tab_count == null) {
				element.classList.add("on");
				store_tab_count = i;
			} else if (store_tab_count == i) {
				element.classList.remove("on");
				store_tab_count = null;
			} else {
				store_tab_item[store_tab_count].classList.remove("on");
				element.classList.add("on");
				store_tab_count = i;
			}
		}
	};
}
function storeShow() {
	var show = area + "_" + store;
	var showInfo = document.querySelector("#" + show);
	store_show_none();
	showInfo.style.display = "";
}

function store_show_none() {
	for (let i = 0; i < store_show.length; i++) {
		store_show[i].style.display = "none";
	}
}

function setPhInfo() {
	store_tab_count = null;
	store_tab_item[0].classList.remove("on");
	store_tab_item[1].classList.remove("on");
	var show = area + "_store0";
	var show1 = area + "_store1";
	var showInfo = document.querySelector("#" + show);
	var showInfo1 = document.querySelector("#" + show1);
	store_ph_data1.innerHTML = "";
	store_ph_data2.innerHTML = "";
	store_ph_data1.innerHTML = showInfo.innerHTML;
	store_ph_data2.innerHTML = showInfo1.innerHTML;
	if (area !== "tw") {
		normal_tab_btn.style.display = "block";
	} else {
		normal_tab_btn.style.display = "none";
	}
}

window.onresize = function () {
	if (screen == "pc" && window.innerWidth <= 1024) {
		screen = "ph";
		store_show_none();
		setPhInfo();
	} else if (screen == "ph" && window.innerWidth > 1024) {
		screen = "pc";
		store_tab_count = 0;
		store_tab_item[store_tab_count].classList.add("on");
		store_ph_data1.innerHTML = "";
		store_ph_data2.innerHTML = "";
		storeShow();
	}
};

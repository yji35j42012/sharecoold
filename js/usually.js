function getC() {
	fetch("https://ipinfo.io/json")
		.then(response => response.json())
		.then(data => {
			if (data.country) {
				set_usually_sel(data.country);
			} else {
				set_usually_sel("jp");
			}
		})
		.catch(error => {
			console.error("Error:", error);
		});
}
getC();

var usually_sel_txt = document.querySelector("#usually_sel_txt");
var usually_sel_group = document.querySelector("#usually_sel_group");
var usually_sel_item = document.querySelectorAll(
	"#usually_sel_group > .usually_sel_item"
);
var usually_area = document.querySelectorAll("[name='usually_area']");
var usually_sel_name = null;

function set_usually_sel(country) {
	if (country.toLowerCase() == "tw") {
		usually_sel_name = document.querySelector("[name='tw']");
	} else if (country.toLowerCase() == "jp") {
		usually_sel_name = document.querySelector("[name='jp']");
	} else if (country.toLowerCase() == "hk") {
		usually_sel_name = document.querySelector("[name='hk']");
	} else if (country.toLowerCase() == "sg") {
		usually_sel_name = document.querySelector("[name='sg']");
	} else if (country.toLowerCase() == "my") {
		usually_sel_name = document.querySelector("[name='my']");
    }
    setHref(country.toLowerCase())
	usually_sel_name.classList.add("on");
	usually_sel_txt.innerHTML = usually_sel_name.innerHTML;
	setArea(usually_sel_name.getAttribute("data-name"));
}
function setHref(str) {
	usually_area[0].setAttribute(
        "href",
        `./store.html?country=${str}&content=store1`
    );
    usually_area[1].setAttribute(
        "href",
        `./store.html?country=${str}&content=store0`
	);
}
usually_sel_txt.onclick = function() {
	usually_sel_group.classList.toggle("on");
};
function clearItemClass() {
	for (let i = 0; i < usually_sel_item.length; i++) {
		usually_sel_item[i].classList.remove("on");
	}
}
for (let i = 0; i < usually_sel_item.length; i++) {
	const element = usually_sel_item[i];
	element.onclick = function() {
		console.log("txt", element.innerHTML);
		usually_sel_txt.innerHTML = element.innerHTML;
        setArea(element.getAttribute("data-name"));
        setHref(element.getAttribute("name"))
		clearItemClass();
		usually_sel_group.classList.toggle("on");
		element.classList.add("on");
	};
}

function setArea(str) {
	for (let i = 0; i < usually_area.length; i++) {
		const element = usually_area[i];
		element.innerHTML = str;
	}
}

function yellowBackground(index) {
	var image = document.getElementsByTagName("img")[index];
	var potentialId = document.getElementsByClassName("button")[index];
	var trueId;

	if (document.getElementById("current") == "") {
		return;
	} else {
		trueId = document.getElementById("current");
	}

	if ((trueId.id != potentialId.id && window.innerWidth >= 985)) {
		image.style.transition = "all 0.5s";
		image.style.backgroundColor = "#FFF056";
	}
}

function whiteBackground(index) {
	var image = document.getElementsByTagName("img")[index];
	var potentialId = document.getElementsByClassName("button")[index];
	var trueId;

	if (document.getElementById("current") == "") {
		return;
	} else {
		trueId = document.getElementById("current");
	}

	if (trueId.id != potentialId.id && window.innerWidth >= 985) {
		image.style.transition = "all 0.01s";
		image.style.backgroundColor = "#DFE2DB";
	}
}

function showText(index) {
	var title = document.getElementsByTagName("h3")[index];
	var text = document.getElementsByTagName("p")[index];
	var box = document.getElementsByClassName("imageText")[index];
	var line = document.getElementsByTagName("hr")[index];

	if (text.className == "innerText") {
		line.className = "";
		title.className = "showInnerText";
		text.className = "showInnerText";
		box.style.padding = "0% 0% 1% 0%";
		box.style.backgroundColor = "#ecf0f1";
	} else {
		line.className = "innerText";
		title.className = "innerText";
		text.className = "innerText";
		box.style.padding = "0%";
		box.style.backgroundColor = "none";
	}
}

function changeList(index) {
	var list = document.getElementsByClassName("list")[index];
	var h3 = list.getElementsByTagName("h3")[0];
	var para = list.getElementsByTagName("p")[0];
	var line1 = list.getElementsByClassName("divider")[0];
	var line2 = list.getElementsByClassName("fixedLine")[0];

	var eecs = document.getElementById("eecs");
	var font = window.getComputedStyle(h3, null).getPropertyValue('font-size');

	h3.style.transition = "0.75s ease";
	para.style.transition = "0.75s ease";
	list.style.transition = "0.75s ease";
	line1.style.transition = "0.75s ease";
	line2.style.transition = "0.75s ease";

	// If it's minimized, maximize it:
	if (font == "24px" && window.innerWidth >= 985) {
		h3.style.fontSize = "28px";
		para.style.fontSize = "24px";

		h3.style.backgroundColor = "#DFE2DB";
		para.style.backgroundColor = "#DFE2DB"; 
		list.style.backgroundColor = "#DFE2DB";
		list.style.borderColor = "#191919";

		para.style.color = "#191919";
		h3.style.color = "#191919";

		list.style.position = "fixed";
		list.style.left = "4.8%";
		list.style.top = "30%";
		list.style.zIndex = "50000000";

		line1.style.display = "none";
		line2.style.display = "block";
	} 

	// If it's maximized, minimize it:
	if (font != "24px" && window.innerWidth >= 985) {
		h3.style.fontSize = "24px";
		para.style.fontSize = "18px";

		h3.style.backgroundColor = "#191919";
		para.style.backgroundColor = "#191919";
		list.style.backgroundColor = "#191919";
		list.style.borderColor = "#FFF056";

		para.style.color = "#DFE2DB";
		h3.style.color = "#DFE2DB";

		list.style.position = "relative";
		list.style.position = "4.8%";
		list.style.zIndex = "0";

		line1.style.display = "block";
		line2.style.display = "none";
	}

	if (index == 4 && window.innerWidth >= 985) {
		eecs.style.backgroundColor = list.style.backgroundColor;
		eecs.style.color = para.style.color;
		eecs.style.fontSize = para.style.fontSize;
		eecs.style.transition = "0.75s ease";
	}
}

function yellowBorder(index) {
	var list = document.getElementsByClassName("list")[index];

	if (window.innerWidth >= 985) {
		list.style.transition = "0s";
		list.style.borderColor = "#FFF056";
	}
}

function whiteBorder(index) {
	var list = document.getElementsByClassName("list")[index];

	if (window.innerWidth >= 985) {
		list.style.transition = "0s";
		list.style.borderColor = "#DFE2DB";
	}
}

function changeBanner(imageName) {
	document.getElementsByTagName("h1")[0].style.backgroundImage = "url("+imageName+")";
}

function checkEmail() {
	var firstEmail = document.getElementById("firstEmail");
	var confirmEmail = document.getElementById("confirmEmail");

	if (firstEmail.value != confirmEmail.value) {
		alert("Emails must match!");
		return false;
	}
}





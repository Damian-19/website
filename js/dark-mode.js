	function darkMode() {
		document.body.classList.toggle("dark-mode")
		document.getElementById("topnav").classList.toggle("nav-dark-mode");
	}

	function storeDarkMode() {
		if (localStorage.getItem(1) == 1) {
		localStorage.removeItem(1, 1);
		} else if (localStorage.getItem(1) != 1) {
			localStorage.setItem(1, 1);
		}
	}

	function setStoredDarkMode(id) {
		var value = localStorage.getItem(id);
		if(value != undefined) {
			document.getElementById("topnav").classList.add("nav-dark-mode");
			document.body.classList.add("dark-mode");
		}
    }

    /* Used to change dark mode image on switch, no longer in use
function changeImg() {
	if (localStorage.getItem(1) == 1) {
		document.getElementById("change-img").src = "icons/light.png";
	} else if (localStorage.getItem(1) == null) {
		document.getElementById("change-img").src = "icons/dark.png";
	}
}

function loadImg() {
	if (localStorage.getItem(1) == 1) {
		document.getElementById("change-img").src = "icons/light.png";
	}
}*/
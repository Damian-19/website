	function darkMode() {
		document.body.classList.toggle("dark-mode") // add dark-mode class to body
		document.getElementById("topnav").classList.toggle("nav-dark-mode"); // add dark mode class to nav
	}

	function storeDarkMode() {
		if (localStorage.getItem(1) == 1) { // check if key pair exists
		localStorage.removeItem(1, 1); // remove dark mode key pair
		} else if (localStorage.getItem(1) != 1) { // check if key pair doesn't exist
			localStorage.setItem(1, 1);	// add dark mode key pair
		}
	}

	function setStoredDarkMode(id) {
		var value = localStorage.getItem(id);
		if(value != undefined) { // check key pair exists
			document.getElementById("topnav").classList.add("nav-dark-mode");
			document.body.classList.add("dark-mode");
		}
    }

/* 
	**Used to change dark mode image on switch, no longer in use**
	
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
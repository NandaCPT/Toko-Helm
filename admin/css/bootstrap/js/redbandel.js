
window.onload = function(){


	var btn = document.getElementById("nav-btn");
	var navbar = document.getElementById("sidenav");
	var out = document.getElementById("out");

	
	btn.addEventListener("click", show);
	out.addEventListener("click", hide);

	function show(){
		navbar.style.width = 40+"%";
		navbar.style.left = 0+"px";
	}
	function hide(){
		navbar.style.width = 0+"%";
		navbar.style.left = -50+"px";
	}

};

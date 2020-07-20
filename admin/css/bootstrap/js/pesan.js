
window.onload = function(){


	var br = document.getElementById("baru");
	var kotakpesan = document.getElementById("new");
	var kel = document.getElementById("pane");


	br.addEventListener("click", open);
	kel.addEventListener("click", close);

	function open(){
		kotakpesan.style.display = "block";
	}
	function close(){
		kotakpesan.style.display = "none";
	}

};
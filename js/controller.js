window.addEventListener("load",bindEvents);

function bindEvents(){
	document.getElementById('register').addEventListener('click',register);
	document.getElementById('reset').addEventListener('click',reset);
	document.getElementById("register").addEventListener("click", saveLocal);
	// document.getElementById("fetchlocal").addEventListener("click", fetchLocal);
	console.log('hi');

}

function saveLocal() {
	if (window.localStorage) {
		localStorage.myitemslist = JSON.stringify(itemOperations.itemList);
		alert("Data Store...");
	}
	else {
		alert("Ur Browser Doesn't Support LocalStorage...");
	}
}

function fetchLocal() {
	if (window.localStorage) {
		if (localStorage.myitemslist) {
			itemOperations.itemList = JSON.parse(localStorage.myitemslist);
			printTable();
		}
		else {
			alert("Nothing to Load...");
		}
	}
	else {
		alert("Ur Browser Doesn't Support LocalStorage...");
	}

}

function register(){
	console.log('startx');
	
 	var name = document.getElementById("name").value;
	var mail = document.getElementById("mail").value;
	var pd = document.getElementById("pd").value;
	
	console.log("details is", name ,mail ,pd);
	itemOperations.addItem(name,mail,pd);

}

function reset(){
	document.getElementById("name").value="";
	document.getElementById("mail").value="";
	document.getElementById("pd").value="";

}




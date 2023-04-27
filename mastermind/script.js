
/**Scrip**/

/**Mode d'emploi**/
var btnPopup = document.getElementById("btnPopup");
var overlay = document.getElementById("overlay");
var btnClose = document.getElementById("btnClose");
 

btnPopup.addEventListener('click',openModal);

function openModal(){
	overlay.style.display = 'block';
}

btnClose.addEventListener('click',closePopup);

function closePopup(){
	overlay.style.display = 'none';
}
 

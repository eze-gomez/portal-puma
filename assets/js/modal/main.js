$(document).ready(function() {
// loads when document is ready ORIGINAL

if (document.cookie.indexOf('modal_shown=') >= 0) {
	//do nothing if modal_shown cookie is present
   } else {
	
$('#exampleModalCenter').modal('show'); // show modal pop up ORIGINAL

document.cookie = 'modal_shown=seen'; //set cookie modal_shown
  //cookie will expire when browser is closed
}	


	
})
/* Author: DavidMitchel.com

*/

$('#secret').submit(function() {
	var secretObj = sjcl.encrypt("password", document.secret.message.value);
	alert(secretObj);
	return false;
}







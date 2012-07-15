/* Author: DavidMitchel.com

*/

sjcl.random.startCollectors();

$('#secret').submit(function() {
	var secretKey = sjcl.codec.hex.fromBits(sjcl.hash.sha256.hash(sjcl.random.randomWords(4)));
	var secretObj = jQuery.parseJSON(sjcl.encrypt(secretKey, document.secret.message.value));
	var theSecret = [sjcl.codec.hex.fromBits(sjcl.hash.sha256.hash(secretObj.ct)),secretObj.ct];
	alert(theSecret);
	return false;
});

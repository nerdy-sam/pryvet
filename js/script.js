/* Author: DavidMitchel.com

*/

sjcl.random.startCollectors();

$('#message').focus(function () {
    $(this).animate({ height: "20em", width: "50em" }, 500);
});

$('#secret').submit(function() {
	var secretKey = sjcl.codec.hex.fromBits(sjcl.hash.sha256.hash(sjcl.random.randomWords(4)));
	var secretObj = jQuery.parseJSON(sjcl.encrypt(secretKey, document.secret.message.value));
	document.secret.hash.value = sjcl.codec.hex.fromBits(sjcl.hash.sha256.hash(secretObj.ct))
	document.secret.message.value = secretObj.ct;
	jQuery.post("index.php", $("#secret").serialize(),
		function(data) {
			alert(data);
		});
	var secretURL = "http://www.pryvet.com/" + document.secret.hash.value + "/" + secretKey;
	alert(secretURL);
	return false;
});


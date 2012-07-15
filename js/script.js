/* Author: DavidMitchel.com

*/

sjcl.random.startCollectors();

$('#message').focus(function () {
    $(this).animate({ height: "20em" }, 500);
});

$('#secret').submit(function() {
	var secretKey = sjcl.codec.hex.fromBits(sjcl.hash.sha256.hash(sjcl.random.randomWords(4))).substr(0,32);
	var secretObj = sjcl.encrypt(secretKey, document.secret.message.value);
	document.secret.hash.value = sjcl.codec.hex.fromBits(sjcl.hash.sha256.hash(secretObj.ct)).substr(0,10);
	document.secret.message.value = secretObj;
	jQuery.post("index.php", $("#secret").serialize(),
		function(data) {
			alert(data);
		});
	var secretURL = "http://www.pryvet.com/" + secretKey + "/" + document.secret.hash.value;
	alert(secretURL);
	return false;
});


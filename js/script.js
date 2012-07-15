/* Author: DavidMitchel.com

*/

sjcl.random.startCollectors();

$('#message').focus(function () {
    $(this).animate({ height: "20em" }, 500);
});

$('#secret').submit(function() {
	var secretKey = sjcl.codec.hex.fromBits(sjcl.hash.sha256.hash(sjcl.random.randomWords(4))).substr(0,32);
	var secretObj = sjcl.encrypt(secretKey, document.secret.message.value);
	document.secret.hash.value = sjcl.codec.hex.fromBits(sjcl.hash.sha256.hash(secretObj)).substr(0,10);
	document.secret.message.value = secretObj;
	jQuery.post("index.php", $("#secret").serialize(),
		function(data) {
			// error checking needed
		});
	var secretURL = "http://www.pryvet.com/" + secretKey + "/" + document.secret.hash.value;
	var success = '<h2>The URL to access your secret message:</h2><h3>' + secretURL + '</h3><p>Email the above link to your secret friend.</p> ';
	$('.hero-unit').empty();
	$('.hero-unit').append(success);
	$('.hero-unit').addClass('alert alert-success').removeClass('hero-unit');
	return false;
});


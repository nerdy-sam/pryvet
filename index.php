<?php
/**
 * Pryvet: for secret messages.
 *
 * A safe way to send private information through any medium
 * that can contain a hyperlink.
 *
 * @author DavidMitchel.com
 * @license MIT License http://opensource.org/licenses/mit-license.php
 */

$content = '';
$salt = 'wj]e=<>;,[.70!=K;4.I--+&;<7)<P'; // change this

function db() {
	$m = new MongoDB();
	return $m->pryvet->secrets
}

// router
$action = 

switch($action) {
	case:
		persist();
		break;
	case:
		retrieve();
		break;
	default:
		break;
}

// view/decrypt message
function retrieve() {
	$secrets = db();

        $content = '';
}

// save encrypted message to db
function persist() {
	$secrets = db();
	$mongoid = new MongoId();
	$secret = array(
		'_id' => $mongoid,
		'secret' => $ciphertext
		);
	if ($_POST['confirmation']) {
		$secret[confirmation] = $_POST['confirmation'];
	}
	$secrets->insert($secret);
	$content = '';
}
?>
<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Pryvet: for secret messages.</title>
	<meta name="description" content="">
	<meta name="author" content="DavidMitchel.com">
	<meta name="viewport" content="width=device-width">
</head>
<body>
<!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a 
href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
<header>



</header>
<div role="main">
	<form method="post" action="persist">

	</form>
<?=$content?>

</div>
<footer>



</footer>
</body>
</html>

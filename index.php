<?php
/**
 * Pryvet: for secret messages.
 *
 * A safe way to send private information through any medium
 * that is capable of conveying a hyperlink.
 *
 * @author DavidMitchel.com
 * @license MIT License http://opensource.org/licenses/mit-license.php
 */
 
spl_autoload_register();

$phpass = new PasswordHash(8,false);

$content = $phpass->get_random_bytes(24);


// router
$action = '';

switch($action) {
    case 'persist':
		persist();
		break;
	case 'retrieve':
		retrieve();
		break;
	default:
		break;
}

function getStorage() {
	$m = new MongoDB(); // edit to pass URL of MongoDB server
	return $m->pryvet->secrets
}

function hashId() {
    
}

// view/decrypt message
function retrieve() {
	$secrets = getStorage();

        $content = '';
}

// save encrypted message to db
function persist() {
	$secrets = getStorage();
	$secret = array(
        '_id' => $hash,
		'secret' => $ciphertext
		);
	if ($_POST['confirmation']) {
		$secret['confirmation'] = $_POST['confirmation'];
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

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
	return $m->pryvet->secrets;
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
	<meta name="description" content="A safe way to send private information through any medium that is capable of conveying a hyperlink.">
	<meta name="author" content="DavidMitchel.com">

	<meta name="viewport" content="width=device-width">

	<link rel="stylesheet/less" href="less/style.less">
	<script src="js/libs/less-1.3.0.min.js"></script>
	
	<!-- Use SimpLESS (Win/Linux/Mac) or LESS.app (Mac) to compile your .less files
	to style.css, and replace the 2 lines above by this one:

	<link rel="stylesheet" href="less/style.css">
	 -->

	<script src="js/libs/modernizr-2.5.3-respond-1.1.0.min.js"></script>
</head>
<body>
<!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->

    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">Pryvet: for secret messages.</a>
          <div class="nav-collapse">
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">

      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit">
        <h1>Create New Pryvet Message</h1>
        
      </div>

      <hr>

      <footer>
        <p>&copy; Pryvet.com <?php echo date('Y');?></p>
      </footer>

    </div> <!-- /container -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.2.min.js"><\/script>')</script>

<script src="js/libs/bootstrap/bootstrap.min.js"></script>

<script src="js/script.js"></script>
</body>
</html>


<?php
require_once '..\logic\router.php';
require_once '..\logic\utils.php';
?>

<head>	
	<title>AWWWWAAAAAAAAAAAAAAAAA</title>
	<link rel="icon" type="image/x-icon" href="favicon.ico">
	<meta charset="UTF-8">
	<meta http-equiv="expires" content="0"/>
</head>

<?php
require_once __DIR__ . '\..\app\pages\header.php';
(new Utils)->setDefaultCookies();
(new Router)->router();
require_once __DIR__ . '\..\app\pages\footer.php';

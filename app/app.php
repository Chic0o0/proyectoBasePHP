<?php
namespace App;
require_once '..\logic\router.php';
?>

<head>
	<title>AWWWWAAAAAAAAAAAAAAAAA</title>
	<meta charset="UTF-8">
	<meta http-equiv="expires" content="21600"/>
</head>

<?php
require_once __DIR__ . '\..\app\pages\header.php';

class App{
	public function routing(){
		$router = (new Router())->router();
		return $router;
	}
}

$routing = (new App())->routing();

require_once __DIR__ . '\..\app\pages\footer.php';

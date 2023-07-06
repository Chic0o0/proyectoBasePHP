<?php
require_once '..\logic\router.php';
?>
<body>
<?php
require_once __DIR__ . '\..\app\pages\head.php';
require_once __DIR__ . '\..\app\pages\header.php';
(new Router)->router();
require_once __DIR__ . '\..\app\pages\footer.php';
?>
</body>
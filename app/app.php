<?php
if (isset($_COOKIE["SESSIONID"])){
    session_id($_COOKIE["SESSIONID"]);
    session_start();
}
require_once __DIR__ . '\..\app\pages\head.php';
?>
<body>
<?php
require_once __DIR__ . '\..\app\pages\header.php';
require_once '..\logic\router.php';
require_once __DIR__ . '\..\app\pages\footer.php';
?>
</body>
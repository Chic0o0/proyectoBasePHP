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
    ?>
        <div class="p-4">
            <?php
            require_once '..\logic\router.php';
            ?>
        </div>
    <?php
    require_once __DIR__ . '\..\app\pages\footer.php';
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
<?php

require_once "..\logic\classes\picClass.php";
require_once "..\db\DBConnection.php";

$picture = new Picture(
    $_POST["title"],
    $_POST["text"],
    json_decode(html_entity_decode($_POST["pic"])),
    $_SESSION["email"]
);

(new DBConnection)->createPicture($picture);

unset($picture);

header('Location: pixelart ');
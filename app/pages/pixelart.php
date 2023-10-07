<?php
require_once "..\db\DBConnection.php";

$pictures=(new DBConnection)->readAllPictures();

?>
<div class="container">
    <div class="row">
        <?php
        foreach ($pictures as $picture) {
        ?>
            <div class="post col-xxl-4 col-lg-6 d-sm-flex" style="gap:5%;margin-bottom:2%;">
                <div class="border border-3 pic" style="width:240px">
        <?php
                foreach (json_decode($picture["grid"]) as $row) {
        ?> 
                    <div class="line" style="display:flex;">
        <?php
                    foreach ($row as $pixel) {
        ?>
                        <div class="pixel" style="background-color:<?php echo $pixel?>;width:15px;height:15px"></div>
        <?php
                    }
        ?>
                    </div>
        <?php
        }
        ?>
                </div>
                <div class="text">
                    <h2><?php echo $picture["title"]?></h2>
                    <p><?php echo $picture["text"]?></p>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</div>
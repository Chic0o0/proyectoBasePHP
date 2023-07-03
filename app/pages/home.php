<?php
session_id("user");
session_start();
?>
<div>
    <!--willDo Welcome *name*, have to manage sessions properly first-->
    <h1>Welcome 
        <?php 
            echo $_SESSION["name"]
        ?>
    </h1>
</div>
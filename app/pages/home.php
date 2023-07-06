<?php
if (isset($_COOKIE["SESSIONID"])){
    session_id($_COOKIE["SESSIONID"]);
    session_start();
}
?>
<div>
    <h1>Welcome 
        <?php
            if(isset($_SESSION)){
                echo $_SESSION["name"];
            } 
        ?>
    </h1>
</div>
<?php
// require_once "..\logic\cookies.php";
// (new Cookies)->setDefaultCookie();
if (isset($_COOKIE["SESSIONID"])){
    session_id($_COOKIE["SESSIONID"]);
    session_start();
}
?>
<div>
    <h1>Welcome 
        <?php
            if(isset($_SESSION["name"])){
                echo $_SESSION["name"];
            } 
        ?>
    </h1>
</div>
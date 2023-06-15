<?php
if(isset($_POST["submit"])==false){
    die("Complete the form first");
}

echo htmlspecialchars($_POST["email"]);
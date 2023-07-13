<?php

$email_regex="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$";
$phone_regex="[0-9]{9}";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(
        preg_match("/".$email_regex."/", $_POST["email"]) ||
        (empty(!$_POST["name"]) && gettype($_POST["name"])=="string") ||
        (empty(!$_POST["surname"]) && gettype($_POST["surname"])=="string") ||
        (empty(!$_POST["age"]) && gettype(intval($_POST["age"]))=="integer") ||
        preg_match("/".$phone_regex."/", $_POST["phone"]) 
    ){
        require_once "..\logic\pages\updateLogic.php";
    } else {
        echo("<h1>Complete at least one form input to create an account</h1>");
    }
}
?>

<div>
    <h1>Update your data carefully</h1>
    <form action="settings" method="POST">

        <label>Email: <input
            type="email"
            name="email"
            pattern=<?php echo $email_regex?>
            title="Please enter a valid email address"
            placeholder='<?php if(isset($_SESSION))echo $_SESSION["email"]?>'
            />
        </label></br>
        
        <label>Name: <input
            type="text"
            name="name"
            placeholder='<?php if(isset($_SESSION))echo $_SESSION["name"]?>'
            />
        </label></br>

        <label>Surname: <input
            type="text"
            name="surname"
            placeholder='<?php if(isset($_SESSION))echo $_SESSION["surname"]?>'
            />
        </label></br>

        <label>Age: <input
            type="number"
            name="age"
            placeholder='<?php if(isset($_SESSION))echo $_SESSION["age"]?>'
            />
        </label></br>

        <label>Phone: <input
            type="tel"
            name="phone"
            pattern=<?php echo $phone_regex?>
            title="Phone must be 9 digits exactly"
            placeholder='<?php if(isset($_SESSION))echo $_SESSION["phone"]?>'
            />
        </label></br>
        
        <label><input type="submit" name="submit" value="Submit me!"/></label>
    </form>
    <h1><a href="delete">Delete account forever and ever no rollback!!!</a></h1>
</div>
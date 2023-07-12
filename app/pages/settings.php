<?php

$email_regex="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$";
$phone_regex="[0-9]{9}";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(
        preg_match("/".$email_regex."/", $_POST["upEmail"]) ||
        (empty($_POST["upName"])==0 && gettype($_POST["upName"])=="string") ||
        (empty($_POST["upSurname"])==0 && gettype($_POST["upSurname"])=="string") ||
        (empty($_POST["upAge"])==0 && gettype(intval($_POST["upAge"]))=="integer") ||
        preg_match("/".$phone_regex."/", $_POST["upPhone"]) 
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
            name="upEmail"
            pattern=<?php echo $email_regex?>
            title="Please enter a valid email address"
            placeholder='<?php if(isset($_SESSION))echo $_SESSION["email"]?>'
            />
        </label></br>
        
        <label>Name: <input
            type="text"
            name="upName"
            placeholder='<?php if(isset($_SESSION))echo $_SESSION["name"]?>'
            />
        </label></br>

        <label>Surname: <input
            type="text"
            name="upSurname"
            placeholder='<?php if(isset($_SESSION))echo $_SESSION["surname"]?>'
            />
        </label></br>

        <label>Age: <input
            type="number"
            name="upAge"
            placeholder='<?php if(isset($_SESSION))echo $_SESSION["age"]?>'
            />
        </label></br>

        <label>Phone: <input
            type="tel"
            name="upPhone"
            pattern=<?php echo $phone_regex?>
            title="Phone must be 9 digits exactly"
            placeholder='<?php if(isset($_SESSION))echo $_SESSION["phone"]?>'
            />
        </label></br>
        
        <label><input type="submit" name="upSubmit" value="Submit me!"/></label>
    </form>
    <h1><a href="delete">Delete account</a></h1>
</div>
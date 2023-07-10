<?php
$email_regex="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$";
$password_regex=".{8,}";
$phone_regex="[0-9]{9}";

//willDo check if $_POST treatment is secure
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(
        preg_match("/".$email_regex."/", $_POST["upEmail"]) ||
        preg_match("/".$password_regex."/", $_POST["upPassword"]) ||
        (empty($_POST["upName"])==0 && gettype($_POST["upName"])=="string")||
        (empty($_POST["upSurname"])==0 && gettype($_POST["upSurname"])=="string")||
        (empty($_POST["upAge"])==0 && gettype(intval($_POST["upAge"]))=="integer")||
        preg_match("/".$phone_regex."/", $_POST["upPhone"])
    ){
        require_once "..\logic\pages\updateLogic.php";
    } else {
        echo("<h1>Complete every form input to create an account</h1>");
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
            title="Please enter a valid email address"/>
        </label></br>

        <label>Password: <input
            type="password"
            name="upPassword"
            pattern=<?php echo $password_regex?>
            title="Password must be eight or more characters"/>
        </label></br>
        
        <label>Name: <input
            type="text"
            name="upName"/>
        </label></br>

        <label>Surname: <input
            type="text"
            name="upSurname"/>
        </label></br>

        <label>Age: <input
            type="number"
            name="upAge"/>
        </label></br>

        <label>Phone: <input
            type="tel"
            name="upPhone"
            pattern=<?php echo $phone_regex?>
            title="Phone must be 9 digits exactly"/>
        </label></br>
        
        <label><input type="submit" name="submitSignUp" value="Submit me!"/></label>
    </form>
    <h1><a href="delete">Delete account</a></h1>
</div>
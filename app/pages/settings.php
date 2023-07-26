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

<h1>Update your data carefully</h1>
<form action="settings" method="POST">
    <div class="container-fluid m-0 mt-4 mb-3">
        <div class="row mb-3">
            <div class="col-6">
                <label class="form-label" for="email">Email: <br></label>
                <input
                    class="container-fluid"
                    type="email"
                    name="email"
                    pattern=<?php echo $email_regex?>
                    title="Please enter a valid email address"
                    placeholder='<?php if(isset($_SESSION))echo $_SESSION["email"]?>'
                />
            </div>        
            <div class="col-6">
                <label class="form-label" for="name">Name: <br></label>
                <input
                    class="container-fluid"
                    type="text"
                    name="name"
                    placeholder='<?php if(isset($_SESSION))echo $_SESSION["name"]?>'
                />
            </div>
        </div>
        <div class="row  mb-3">
            <div class="col-4">
                <label class="form-label" for="surname">Surname: <br></label>
                <input
                    class="container-fluid"
                    type="text"
                    name="surname"
                    placeholder='<?php if(isset($_SESSION))echo $_SESSION["surname"]?>'
                />
            </div>
            <div class="col-4">
                <label class="form-label" for="age">Age: <br></label>
                <input
                    class="container-fluid"
                    type="number"
                    name="age"
                    placeholder='<?php if(isset($_SESSION))echo $_SESSION["age"]?>'
                />
            </div>
            <div class="col-4">
                <label class="form-label" for="phone">Phone: <br></label>
                <input
                    class="container-fluid"
                    type="tel"
                    name="phone"
                    pattern=<?php echo $phone_regex?>
                    title="Phone must be 9 digits exactly"
                    placeholder='<?php if(isset($_SESSION))echo $_SESSION["phone"]?>'
                />
            </div>
        </div>
        <div class="row text-center p-2">
            <input class="container-fluid bg-primary-subtle" type="submit" name="submit" value="Submit me!"/>
        </div>
</form>
<h1><a href="delete">Delete account forever and ever no rollback!!!</a></h1>
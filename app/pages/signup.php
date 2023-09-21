<?php
require_once "..\config.php";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(
        preg_match("/".Config::EMAIL_REGEX."/", $_POST["email"]) &&
        preg_match("/".Config::PASSWORD_REGEX."/", $_POST["password"]) &&
        (empty(!$_POST["name"]) && gettype($_POST["name"])=="string") &&
        (empty(!$_POST["surname"]) && gettype($_POST["surname"])=="string") &&
        (empty(!$_POST["age"]) && gettype(intval($_POST["age"]))=="integer") &&
        preg_match("/".Config::PHONE_REGEX."/", $_POST["phone"])
    ){
        require_once "..\logic\pages\signupLogic.php";
    } else {
        echo("<h1>Complete every form input to create an account</h1>");
    }
}
?>
<h1>Sign up your body aquí mismo</h1>
<form action="signup" method="POST">
    <div class="container-fluid m-0 mt-4 mb-3">
        <div class="row mb-3">
            <div class="col-4">
                <label class="form-label" for="email">Email: <br></label>
                <input
                    class="container-fluid"
                    type="email"
                    name="email"
                    pattern=<?php echo Config::EMAIL_REGEX?>
                    title="Please enter a valid email address"
                    required
                />
            </div>        
            <div class="col-4">
                <label class="form-label" for="password">Password: <br></label>
                <input
                    class="container-fluid"
                    type="password"
                    name="password"
                    pattern=<?php echo Config::PASSWORD_REGEX?>
                    title="Password must be eight or more characters"
                    required
                />
            </div>
            <div class="col-4">
                <label class="form-label" for="name">Name: <br></label>
                <input
                    class="container-fluid"
                    type="text"
                    name="name"
                    required
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
                    required
                />
            </div>
            <div class="col-4">
                <label class="form-label" for="age">Age: <br></label>
                <input
                    class="container-fluid"
                    type="number"
                    name="age"
                    required
                />
            </div>
            <div class="col-4">
                <label class="form-label" for="phone">Phone: <br></label>
                <input
                    class="container-fluid"
                    type="tel"
                    name="phone"
                    pattern=<?php echo Config::PHONE_REGEX?>
                    title="Phone must be 9 digits exactly"
                    required
                />
            </div>
        </div>
        <div class="row text-center p-2">
            <input class="container-fluid" style="background-color:#19BFE0" type="submit" name="submit" value="Submit me!"/>
        </div>
</form>
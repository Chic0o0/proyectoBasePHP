<?php
require_once "..\config.php";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(
        preg_match("/".Config::EMAIL_REGEX."/", $_POST["email"]) &&
        preg_match("/".Config::PASSWORD_REGEX."/", $_POST["password"])
    ){
        require_once "..\logic\pages\loginLogic.php";
    } else {
        echo("<h1>Complete every form input correctly to log into your account</h1>");
    }
}
?>
<h1>Log in your body aquí mismo</h1>
<form action="login" method="POST">
    <div class="container-fluid m-0 mt-4 mb-3">
        <div class="row mb-3">
            <div class="col-sm-6 col-12">
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
            <div class="col-sm-6 col-12">
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
        </div>
        <div class="row text-center p-2">
            <input class="container-fluid text-white" style="background-color:#19BFE0" type="submit" name="submit" value="Submit me!"/>
        </div>
    </div>
</form>
<?php
$email_regex="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$";
$password_regex=".{8,}";

//willDo check if $_GET treatment is secure (multifile)
if(isset($_GET['email'], $_GET['password'])){
    if(
        preg_match("/".$email_regex."/", $_GET["email"]) &&
        preg_match("/".$password_regex."/", $_GET["password"])
    ){
        require_once "..\logic\pages\loginLogic.php";
    } else {
        echo("<h1>Complete every form input correctly to log into your account</h1>");
    }
}
?>
<h1>Log in your body aquí mismo</h1>
<form action="login" method="GET">
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
                    required
                />
            </div>        
            <div class="col-6">
                <label class="form-label" for="password">Password: <br></label>
                <input
                    class="container-fluid"
                    type="password"
                    name="password"
                    pattern=<?php echo $password_regex?>
                    title="Password must be eight or more characters"
                    required
                />
            </div>
        </div>
        <div class="row text-center p-2">
            <input class="container-fluid bg-primary-subtle" type="submit" name="submit" value="Submit me!"/>
        </div>
    </div>
</form>
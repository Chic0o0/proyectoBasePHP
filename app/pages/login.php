<?php
$email_regex="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$";
$password_regex=".{8,}";

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

<div>
    <h1>Log in your body aquí mismo</h1>
    <form action="login" method="GET">

        <label>Email: <input
            type="email"
            name="email"
            pattern=<?php echo $email_regex?>
            title="Please enter a valid email address"
            required/>
        </label></br>

        <label>Password: <input
            type="password"
            name="password"
            pattern=<?php echo $password_regex?>
            title="Password must be eight or more characters"
            required/>
        </label></br>

        <label><input type="submit" name="submit" value="Submit me!"/></label>
    </form>
</div>
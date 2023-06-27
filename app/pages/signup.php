<?php
$email_regex="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$";
$password_regex=".{8,}";
$phone_regex="[0-9]{9}";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(
        preg_match("/".$email_regex."/", $_POST["email"]) &&
        preg_match("/".$password_regex."/", $_POST["password"]) &&
        (empty($_POST["name"])==0 && gettype($_POST["name"])=="string")&&
        (empty($_POST["surname"])==0 && gettype($_POST["surname"])=="string")&&
        (empty($_POST["age"])==0 && gettype(intval($_POST["age"]))=="integer")&&
        preg_match("/".$phone_regex."/", $_POST["phone"])
        ){
        require_once "..\logic\pages\signupLogic.php";
    } else {
        echo("<h1>Complete every form input to create an account, you faggot</h1>");
    }
}
?>

<div>
    <h1>Sign up your body aquí mismo</h1>
    <form action="signup" method="POST">

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
        
        <label>Name: <input
            type="text"
            name="name"
            required/>
        </label></br>

        <label>Surname: <input
            type="text"
            name="surname"
            required/>
        </label></br>

        <label>Age: <input
            type="number"
            name="age"
            required/>
        </label></br>

        <label>Phone: <input
            type="tel"
            name="phone"
            pattern=<?php echo $phone_regex?>
            title="Phone must be 9 digits exactly"
            required/>
        </label></br>
        
        <label><input type="submit" name="submitSignUp" value="Submit me!"/></label></br>
    </form>
</div>
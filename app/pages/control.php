<?php
require_once __DIR__."\..\..\db\DBConnection.php";

$email_regex="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$";
$password_regex=".{8,}";
$phone_regex="[0-9]{9}";

$users=(new DBConnection)->readAllUsers();

foreach ($users as $user) {
    if ($user["super"]!=1) {
?>
        <h1>Modify <?php echo $user["name"] ." ".$user["surname"]?>'s account</h1>
        <form action="modify" method="POST">
            <div class="container-fluid m-0 mt-4 mb-3">
                <div class="row mb-3">
                    <div class="col-4">
                        <label class="form-label" for="email">Email: <br></label>
                        <input
                            class="container-fluid"
                            type="email"
                            name="email"
                            pattern=<?php echo $email_regex?>
                            title="Please enter a valid email address"
                            placeholder='<?php echo $user["email"]?>'
                        />
                    </div>        
                    <div class="col-4">
                        <label class="form-label" for="password">Password: <br></label>
                        <input
                            class="container-fluid"
                            type="password"
                            name="password"
                            pattern=<?php echo $password_regex?>
                            title="Please enter a valid passsword"
                        />
                    </div>        
                    <div class="col-4">
                        <label class="form-label" for="name">Name: <br></label>
                        <input
                            class="container-fluid"
                            type="text"
                            name="name"
                            placeholder='<?php echo $user["name"]?>'
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
                            placeholder='<?php echo $user["surname"]?>'
                        />
                    </div>
                    <div class="col-4">
                        <label class="form-label" for="age">Age: <br></label>
                        <input
                            class="container-fluid"
                            type="number"
                            name="age"
                            placeholder='<?php echo $user["age"]?>'
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
                            placeholder='<?php echo $user["phone"]?>'
                        />
                    </div>
                </div>
                <div class="row text-center p-2">
                    <input class="container-fluid" style="background-color:#19BFE0" type="submit" name=<?php echo $user["email"]?> value="Modify account!!"/>
                </div>
            </div>
        </form>
        <form action="destroy" method="POST">
            <div class="row text-center p-2">
                <input class="container-fluid" style="background-color:#19BFE0" type="submit" name="<?php echo $user["email"]?>" value="Delete account (danger)!!"/>
            </div>
        </form>
<?php
    }
?>
<?php
}
?>
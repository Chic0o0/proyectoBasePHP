<?php
require_once __DIR__."\..\..\db\SQLiteConnection.php";

$users=(new SQLiteConnection)->readAllUsers();

//willDo form to send user id via $_GET so destroyLogic knows which user to delete
// if(isset($_GET['email'], $_GET['password'])){
//     if(
//         preg_match("/".$email_regex."/", $_GET["email"]) &&
//         preg_match("/".$password_regex."/", $_GET["password"])
//     ){
//         require_once "..\logic\pages\loginLogic.php";
//     } else {
//         echo("<h1>Complete every form input correctly to log into your account</h1>");
//     }
// }
?>
<table class="table">
    <tr>
        <th>Email</th>
        <th>Name</th>
        <th>Surname</th>
        <th>Age</th>
        <th>Phone</th>
        <th>Super</th>
        <th>Modify</th>
        <th>Delete</th>
    </tr>
<?php
foreach ($users as $user) {
?>
    <tr>
        <td>
            <?php echo $user["email"]?>
        </td>
        <td>
            <?php echo $user["name"]?>
        </td>
        <td>
            <?php echo $user["surname"]?>
        </td>
        <td>
            <?php echo $user["age"]?>
        </td>
        <td>
            <?php echo $user["phone"]?>
        </td>
        <td>
            <?php echo $user["super"]?>
        </td>
        <td>
            <a href="modify">Modify account!!</a>
        </td>
        <td>
            <a href="destroy">Delete account!!</a>
        </td>
    </tr>
<?php
}
?>
</table>

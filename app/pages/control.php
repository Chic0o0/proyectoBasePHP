<?php
require_once __DIR__."\..\..\db\SQLiteConnection.php";

$users=(new SQLiteConnection)->readAllUsers();

//willDo form to send user id via $_GET so destroyLogic knows which user to delete
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
$_SESSION[$user["email"]]=$user["email"];
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
            <form action="modify" method="GET">
                <input type="submit" name='<?php echo $user["email"]?>' value="Modify account">
            </form>
        </td>
        <td>
            <form action="destroy" method="GET">
                <input type="submit" name='<?php echo $user["email"]?>' value="Delete account (danger)!!">
            </form>
        </td>
    </tr>
<?php
}
?>
</table>

<?php

require_once __DIR__."\..\..\db\SQLiteConnection.php";

$users=(new SQLiteConnection)->readAllUsers();

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
                <a href="m">Modify account!!</a>
            </td>
            <td>
                <a href="d">Delete account!!</a>
            </td>
        </tr>
    <?php
}
?>
    </table>

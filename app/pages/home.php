<div>
    <h1>Welcome 
        <?php
            if(isset($_SESSION)){
                echo $_SESSION["name"];
            } 
        ?>
    </h1>
</div>
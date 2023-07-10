<header>
    <nav class="menu">
        <ul>
            <li><a href="/">Inicio</a></li>
            <li><a href="/about">Sobre nosotros</a></li>
            <li><a href="#">Contacto</a></li>
        </ul>
        <ul>
            <?php
                if(isset($_COOKIE["SESSIONID"])){
            ?>
                    <li><a href="logout">Log out</a></li>
                    <li><a href="settings">Manage account</a></li>
            <?php
                } else {
            ?>
                    <li><a href="signup">Sign up</a></li>
                    <li><a href="login">Log in</a></li>
            <?php
                }
            ?>
        </ul>
    </nav>
</header>
<!-- willDo logo and improve hamburger -->
<header class="bg-primary-subtle p-1">
    <div class="container-fluid m-0">
        <div class="row">
            <div class="col-4">
                <h1>
                    <a class="nav-link active" aria-current="page" href="/">Basic PHP skeleton</a>
                </h1>
            </div>
            <div class="col-8">
                <nav class="navbar navbar-expand-lg">
                    <div class="container-fluid">
                        <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="about">About us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Contact</a>
                                </li>
                                <?php
                                    if(isset($_COOKIE["SESSIONID"])){
                                ?>
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="logout">Logout</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="settings">Manage Account</a>
                                    </li>
                                <?php
                                            if($_SESSION['super']==true){
                                                ?>
                                                <li class="nav-item">
                                                    <a class="nav-link active" aria-current="page" href="control">Control station</a>
                                                </li>
                                <?php
                                            }
                                ?>
                                <?php
                                    } else {
                                ?>
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="signup">Signup</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="login">Login</a>
                                    </li>
                                <?php
                                    }
                                ?>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
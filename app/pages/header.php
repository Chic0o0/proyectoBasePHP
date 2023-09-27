<header class="p-2" style="background-color:#19BFE0">
    <div class="container-fluid m-0">
        <div class="row">
            <div class="col-sm-8 text-center my-auto">
                <a class="nav-link active" aria-current="page" href="/">
                    <h1 class="text-center">Basic PHP Skeleton</h1>
                </a>
            </div>
            <div class="col-sm-4 my-auto">
                <span class="d-inline">
                    <img src="media/images/favicon.png" class="rounded mx-auto d-block" alt="logo">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-sm">
                    <div class="container-fluid">
                        <button class="navbar-toggler mx-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav mx-auto">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="pixelart">Pixelart</a>
                                </li>   
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="atelier">Atelier</a>
                                </li>   
                                <?php
                                    if(isset($_COOKIE["SESSIONID"])){
                                ?>
                                    <!-- <li class="nav-item">
                                        <a class="nav-link" aria-current="page" href="atelier">Atelier</a>
                                    </li>    -->
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
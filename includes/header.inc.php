

<?php session_start();
?>
<nav class="navbar navbar-expand-lg navbar-dark  bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="home.php"> <img src="img/logo.jpg" alt="logo" class="rounded-circle" style="width:40px;">Story teller</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link " href="<?=$_SERVER['PHP_SELF'];?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Our Initiatives
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Mira Channel</a></li>
                        <li><a class="dropdown-item" href="#">FreedomTB</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="team.php">our team</a>
                </li>
            </ul>



            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            <?php 
            if(isset($_SESSION["userid"])){
                echo '.$_SESSION["userid"].';
                echo'<a class="btn btn-success mx-2" href="profile.php" ><i class="fas fa-sign-in-alt"></i> profile</a>';
                echo'<a class="btn btn-success mx-2" href="includes/logout.inc.php" ><i class="fas fa-user-plus"></i> logout</a>';


            }
            else{
                echo'<a class="btn btn-success mx-2" href="login.php" ><i class="fas fa-sign-in-alt"></i> Login</a>';
                echo'<a class="btn btn-success mx-2" href="signup.php" ><i class="fas fa-user-plus"></i> signup</a>';

            }
            ?>
   
        </div>
    </div>
</nav>
<div class="container-fluid">


    <hr />
</div>


<?php
include(".././server.php");

$email = $_SESSION['email'];
$query = $db->query("SELECT * FROM users WHERE email='$email'");
$row = $query->fetch_array();
$username = $row['username'];
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid align-items-start">
        <a class="navbar-brand" >LOGO</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="./index.php">Home</a>
                </li>
                <li class="nav-item">
                <form class="d-flex" role="search" action="./search.php" method="Post">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="term">
                    <button class="btn btn-outline-success" type="submit" name="search">Search</button>
                </form>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><strong>
                                <?php echo $username; ?>
                            </strong></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="./users.php">ALL users</a></li>
                    <li><a class="dropdown-item" href="../logout.php">lOGOUT</a></li>
                      
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

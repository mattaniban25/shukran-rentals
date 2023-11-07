<?php
    echo'
        <div class="header bg-white sticky-top">
            <nav class="navbar navbar-expand-lg ">
                <div class="container-fluid ">
                    <a href="#" class="navbar-brand">
                    <img src="../IMAGES/Logo.png"  width="120" height="auto" alt="" class=" border-end border-2 border-danger">
                    </a>
                    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">

                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a href="#" class="nav-item page-header nav-link">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-item page-header nav-link">Accommodations</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-item page-header nav-link">Events</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-item page-header nav-link">Leisure</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-item page-header nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Engage
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="nav-item page-header nav-link dropdown-item" href="#">Gallery</a></li>
                                    <li><a class="nav-item page-header nav-link dropdown-item" href="#">About us</a></li>
                                    <li><a class="nav-item page-header nav-link dropdown-item" href="#">Contact us</a></li>
                                    <li><a class="nav-item page-header nav-link dropdown-item" href="#">Terms & Conditions</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div class="d-flex">
                            <hr class="w-100  text-dark">
                        </div>
                        <div class="d-flex">
                            <div class="navbar-nav">
                                <div class="navbar-nav">
                                    <div class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle text-dark" href="#" role="button" data-bs-toggle="dropdown">';?>
                                        
                                        <?php echo $user['firstName'] . ' ' . $user['lastName']; ?>
                                        
                                        <?php 
                                        
                                        echo'&nbsp;&nbsp;
                                        <i class="fa-solid fa-user"></i></a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </nav>

            <nav class="navbar bg-body-tertiary shukran-navbar">
                <div class="container-fluid" id="shukran-navbar">
                    <a class="navbar-brand">SHUKRAN RENTALS OPC</a>
                    <div class="d-flex">
                        <a href="../index.php#location" class="nav-link me-4"><i class="fa-solid fa-location-dot fa-xl me-2 ms-2" style="color: #aa2400;"></i>Locate Us</a>
                        <a href="" class="nav-link me-4" style="cursor:alias">
                        <i class="fa-solid fa-phone fa-xl me-2 ms-2" style="color: #aa2400;"></i>099191919191</a>
                    </div>
                </div>
            </nav>
        </div>
    ';
?>

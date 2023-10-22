<?php
    echo'
        <div class="header">
            <nav class="navbar navbar-expand-lg" style="box-shadow: black 0px 0px 10px 0px;">
                <div class="container-fluid">
                    <a href="#" class="navbar-brand">
                        <img src="../IMAGES/Logo.png"  width="80" height="40" alt="" class=" border-end border-2 border-danger">
                    </a>
                    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav">
                            <a href="#" class="nav-item page-header nav-link">Home</a>
                            <a href="#" class="nav-item page-header nav-link">Accommodations</a>
                            <a href="#" class="nav-item page-header nav-link">Events</a>
                            <a href="#" class="nav-item page-header nav-link">Leisure</a>
                            <a href="#" class="nav-item page-header nav-link">About Us</a>
                            <a href="#" class="nav-item page-header nav-link">Terms & Conditions</a>
                        </div>

                        <div class="navbar-nav ms-auto">
                            <div class="navbar-nav">
                                <div class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle text-dark" href="#" role="button" data-bs-toggle="dropdown">
                                    
                                    ';
                                    ?>
                                    
                                    <?php echo $user['firstName'] . ' ' . $user['lastName']; ?>
                                    
                                    <?php
                                    echo'
                                    
                                    &nbsp;&nbsp;
                                    <i class="fa-solid fa-user"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                                    </ul>
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
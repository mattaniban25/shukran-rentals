<?php 
    echo '
        <header>
        <div class="staff-header">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom border-2 border-danger" style="box-shadow: black 0px 0px 10px 0px;">
            <div class="container-fluid">
                <a href="#" class="navbar-brand">
                <img class="logo-icon" src="../IMAGES/smallLogo.png" alt="" style="width:3rem; height:3rem;">
                </a>

                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <a href="admin-index.php" class="nav-item nav-link text-light">Home</a>
                    <a href="#" class="nav-item nav-link text-light">Calendar</a>
                    <a href="room-list-adm.php" class="nav-item nav-link text-light">Rooms</a>
                    <a href="#" class="nav-item nav-link text-light">Payments</a>
                    <a href="employee-list.php" class="nav-item nav-link text-light">Employees</a>
                    <a href="promo.php" class="nav-item nav-link text-light">Promos</a>
                    <hr class="border border-light border-1">
                    <div class="navbar-nav">
                        <div class="navbar-nav">
                        <div class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown"><i class="fa-solid fa-user"></i> Profile</a>
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
        </div>

        <div class="sidebar bg-white">
            <aside>
            <header class="sidebar-header">
                <img class="logo-img" src="../IMAGES/adminLogo.png" alt="">
            </header>
            <nav>
            <ul>
                <a href="admin-index.php" class="nav-item nav-link">
                    <button>
                        <span>
                            <li><i class="fi fi-rs-home pe-3 fs-5 align-middle"></i>Home</li> 
                        </span>
                    </button>
                </a>

                <a href="#" class="nav-item nav-link">
                    <button>
                        <span>
                            <li><i class="fi fi-rs-calendar-days pe-3 fs-5 align-middle"></i>Calendar</li> 
                        </span>
                    </button>
                </a>

                
                <a href="room-list-adm.php" class="nav-item nav-link">
                    <button>
                        <span>
                            <li><i class="fi fi-rs-bed-alt pe-3 fs-5 align-middle"></i>Rooms</li> 
                        </span>
                    </button>
                </a>

                <a href="#" class="nav-item nav-link">
                    <button>
                        <span>
                            <li><i class="fi fi-rs-coins pe-3 fs-5 align-middle"></i>Payments</li> 
                        </span>
                    </button>
                </a>

                <a href="employee-list.php" class="nav-item nav-link">
                    <button>
                        <span>
                                <li><i class="fi fi-rs-people pe-3 fs-5 align-middle"></i>Employees</li> 
                        </span>
                    </button>
                </a>

                <a href="promo.php" class="nav-item nav-link">
                    <button>
                        <span>
                            <li><i class="fi fi-rs-receipt pe-3 fs-5 align-middle"></i>Promos</li> 
                        </span>
                    </button>
                </a>
                <hr class = "p-1">
                
                <button>
                    <span>
                            <div class="navbar-nav ms-auto">
                                <div class="navbar-nav">
                                    <div class="dropdown">
                                    <li><img src="../Images/Employee.jfif" class="" alt="">
                                        <a class="dropdown-toggle text-dark" href="#" role="button" data-bs-toggle="dropdown"><span>Account</span></a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="logout.php">Logout</a>
                                        </div>
                                    </li>
                                    </div>
                                </div>
                            </div>
                        
                    </span>
                </button>
            </ul>
            </nav>
            </aside>

        </div>  
        </header>
    ';
?>
<?php
    echo '
        <header>
        <div class="staff-header">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom border-2 border-danger" style="box-shadow: black 0px 0px 10px 0px;">
            <div class="container-fluid">
                <a href="#" class="navbar-brand">
                <img class="logo-icon" src="../IMAGES/smallLogo.png" alt="">
                </a>

                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <a href="#" class="nav-item nav-link">Home</a>
                    <a href="#" class="nav-item nav-link">Calendar</a>
                    <a href="#" class="nav-item nav-link">Active Rooms</a>
                    <a href="#" class="nav-item nav-link">Payments</a>
                    <a href="#" class="nav-item nav-link">Profile</a>
                    <div class="navbar-nav">
                        <div class="navbar-nav">
                        <div class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown"><i class="fa-solid fa-user"></i></a>
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
                <button>
                    <span>
                        <a href="admin-index.php" class="nav-item nav-link">
                            <i class="fa-solid fa-house"></i>
                            <span>Home</span>
                        </a>
                    </span>
                </button>

                <button>
                    <span>
                        <i class="fa-regular fa-calendar"></i>
                        <span>Calendar</span>
                    </span>
                </button>

                <button>
                    <span>
                        <i class="fa-solid fa-door-open"></i>
                        <span>Active Rooms</span>
                    </span>
                </button>

                <button>
                    <span>
                        <i class="fa-solid fa-peso-sign"></i>
                        <span>Payments</span>
                    </span>
                </button>

                <button>
                    <span>
                    <a href="promo.php" class="nav-item nav-link">
                        <i class="fa-solid fa-receipt"></i>
                        <span>Promos</span>
                    </a>
                    </span>
                </button>

                <button>
                <span>
                    <img src="../Images/Employee.jfif" alt="">
                    <div class="navbar-nav ms-auto">
                    <div class="navbar-nav">
                        <div class="dropdown">
                        <a class="dropdown-toggle text-dark" href="#" role="button" data-bs-toggle="dropdown"><span>Account</span></a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="logout.php">Logout</a>
                        </div>
                        </div>
                    </div>
                    </div>
                </span>
                </button>
            </nav>
            </aside>
        </div>  
        </header>
    ';
?>
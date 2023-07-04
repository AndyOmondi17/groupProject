<?php session_start(); ?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">AfriVolts</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="aboutUs.php">About Us</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="ourCarsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Our Cars
                    </a>
                    <div class="dropdown-menu" aria-labelledby="ourCarsDropdown">
                        <a class="dropdown-item" href="carDetails.php">Car Details</a>
                        <a class="dropdown-item" href="bookTestDrive.php">Book a Test Drive</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Services
                    </a>
                    <div class="dropdown-menu" aria-labelledby="servicesDropdown">
                        <a class="dropdown-item" href="financing.php">Financing</a>
                        <a class="dropdown-item" href="serviceCentres.html">Service Centers</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="blogDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Blog
                    </a>
                    <div class="dropdown-menu" aria-labelledby="blogDropdown">
                        <a class="dropdown-item" href="viewBlog.php">View Blog</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="careers.php">Careers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contactUs.php">Contact Us</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="accountDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Account
                    </a>
                    <div class="dropdown-menu" aria-labelledby="accountDropdown">
                        <?php if (!isset($_SESSION["username"])) {?>
                        <a class="dropdown-item" href="signIn.php">Sign In</a>
                        <a class="dropdown-item" href="signUp.php">Sign Up</a>
                        <?php } else { ?>
                            <a class="dropdown-item" href="processes/signout_process.php">Sign Out</a>

                            <?php } ?>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
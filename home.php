<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MEDI_ASTRA</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header class="header">

        <div class="menu__wrapper">
            <div title="Home" aria-label="home" class="logo">
                <img src="assets/logoicon.svg" alt="logo">
                <div class="text">
                    MEDI_ASTRA
                </div>
            </div>
            <div class="menu__bar">

                <nav>
                    <ul class="navigation">
                        <li>
                            <a href="home.php" title="HOME">
                                HOME
                            </a>
                        </li>
                        <li>
                            <a href="about.php" title="ABOUT_US">
                                ABOUT
                            </a>
                        </li>

                        <li>
                            <a href="consultation.php" title="CONSULTATION">
                                CONSULTATION
                            </a>
                        </li>
                        <li>
                            <a href="patient.php" title="PATIENTS">
                                PATIENTS
                            </a>
                        </li>
                        
                        <li>
                            <a href="settings.php" title="SETTINGS">
                                SETTINGS
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <span class="navigation__group">
                <img class="profile" src="assets/profile2.png" alt="Joe Doe Picture">
            </span>
            <div class="dropdown__wrapper hide dropdown__wrapper--fade-in none">
                <div class="dropdown__group">
                    <div class="email">
                        <?php session_start();
                            include("connection.php");
                            echo  $_SESSION['email'] 
                            ?></div>
                </div>
                <hr class="divider">
                <nav>
                    <ul>
                        <li>
                            <img src="assets/profile2.png" alt="Profile">
                            <a class="axe" href="settings.php" title="PROFILE">
                                MY PROFILE
                            </a>
                        </li>
                        <li>
                            <img src="assets/settings.svg" alt="Settings">
                            <a class="axe" href="settings.php" title="SETTINGS">
                                SETTINGS
                            </a>
                        </li>
                    </ul>
                    <hr class="divider">
                    <ul>
                        <li>
                            <img src="assets/log-out2.jpeg" alt="Log Out">
                            <a class="axe" style="color: red" href="login page.php" title="LOG OUT">
                                LOG OUT
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>

        </div>

    </header>



    <main>
        <div class="main-content">
            <div class="main-content__text">

                <h3>YOUR CLINIC MEDI_ASTRA</h3>
                <h1> Welcome to a place where healing starts.</h1>
                <p>Discover exceptional care at [MEDI_ASTRA]. <br>
                    With skilled physicians, advanced facilities,
                    and a commitment to your well-being,
                    we're here to provide the highest quality healthcare.
                </p>

            </div>
            <div class="main-content__image">
                <img src="assets/welcom-page-removebg.png">
            </div>
        </div>


    </main>





    <footer>
        <div class="footer-bottom">
            <div class="footer-bottom-wrapper">
                <small>© <span id="year"></span> FIRAS BEN ATTIA || ID : 13504579 || GROUPE : 1.1 </small>
                <ul class="footer-bottom-links">
                    <li>
                        <a href="#" title="Terms">Terms</a>
                    </li>
                    <li>
                        <a href="#" title="Privacy">Privacy</a>
                    </li>
                    <li>
                        <a href="#" title="Security">Contact Us</a>
                    </li>
                    <li>
                        <a href="#" title="Security">Support</a>
                    </li>
                </ul>
                <div class="social-wrapper">
                    <div class='social-links'>
                        <ul>
                            <li>
                                <a href="#" title="Facebook">
                                    <img src="assets/facebook.svg" alt='Facebook'>
                                </a>
                            </li>
                            <li>
                                <a href="#" title="Instagram">
                                    <img src="assets/instagram.svg" alt='Instagram'>
                                </a></a>
                            </li>
                            <li>
                                <a href="#" title="Linkedin">
                                    <img src="assets/linkedin.svg" alt='Linkedin'>
                                </a>
                            </li>
                            <li>
                                <a href="#" title="Twitter">
                                    <img src="assets/twitter.svg" alt='Twitter'>
                                </a>
                            </li>
                            <li>
                                <a href="#" title="Youtube">
                                    <img src="assets/youtube.svg" alt='YouTube'>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>


    </footer>
    <script src="script2.js"></script>
</body>

</html>
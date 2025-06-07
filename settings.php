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



    <main class="mainaxe">
        <div class="consultation">

            <div class="btnconsultation">
                <button id="addconsultation"> <img src="assets/settings.svg" alt="View" width="25" height="25" style="margin-right: 13px;">
                    <span style="font-size: 20px;">Modifie</span>
                </button>
                <button id="seeconsultation">
                    <img src="assets/add-eye-svgrepo-com.svg" alt="View" width="25" height="25" style="margin-right: 13px;">
                    <span style="font-size: 20px;">ALL</span>
                </button>
            </div>

            <div class="addconsultation">
                <form action="settingsconnect.php" method="post">

                    <input type="text" id="nompatient" name="nom" placeholder="nom" required>
                    <input type="text" id="nompatient" name="prenom" placeholder="prenom" required>
                    <input type="date" id="nomdoctor" name="date" required>
                    <input type="email" id="nompatient" name="email" placeholder="email" required>
                    <input type="password" id="nompatient" name="password" placeholder="pass" required>
                    <input type="tel" id="nompatient" name="tel" placeholder="tel" required>
                    <button type="submit">Enregistrer</button>
                </form>
                
            </div>

            <div class="listconsultation">

                <div class="tableconsultation">
                    <table id="tableconsultation">
                        <tr>
                            <th>NOM </th>
                            <th>PRENOM</th>
                            <th>DATTE</th>
                            <th>PASSWORD</th>
                            <th>EMAIL</th>
                            <th>TELEPHONE</th>
                        </tr>

                        <?php
                        
                        include("connection.php");
                
                        
                        if ($_SESSION['type'] == "DOCTOR") {
                            $req_id = "SELECT id_doc FROM doctors WHERE email_doc = '" . $_SESSION['email'] . "'";
                            $req = "SELECT * FROM doctors WHERE id_doc = ($req_id)";
                        } else {
                            $req_id = "SELECT id_patient FROM patient WHERE email_pat = '" . $_SESSION['email'] . "'";
                            $req = "SELECT * FROM patient WHERE id_patient = ($req_id)";
                        }

                    
                        
                        $result = mysqli_query($conn, $req);

                        // Vérifier s'il y a des résultats
                        if (mysqli_num_rows($result) > 0) {
                            // Parcourir les résultats
                            while ($row = mysqli_fetch_assoc($result)) {
                                if ($_SESSION['type'] == "DOCTOR") {
                                    echo "<tr>";
                                    echo "<td>" . $row["nom_doc"] . "</td>";
                                    echo "<td>" . $row["prenom_doc"] . "</td>";
                                    echo "<td>" . $row["datte_doc"] . "</td>";
                                    echo "<td>" . $row["pass_doc"] . "</td>";
                                    echo "<td>" . $row["email_doc"] . "</td>";
                                    echo "<td>" . $row["tel_doc"] . "</td>";
                                } else {
                                    echo "<tr>";
                                    echo "<td>" . $row["nom_pat"] . "</td>";
                                    echo "<td>" . $row["prenom_pat"] . "</td>";
                                    echo "<td>" . $row["date_pat"] . "</td>";
                                    echo "<td>" . $row["pass_pat"] . "</td>";
                                    echo "<td>" . $row["email_pat"] . "</td>";
                                    echo "<td>" . $row["tel_pat"] . "</td>";
                                }
                                echo "</tr>";
                            }
                        } else {
                            // Si aucun patient trouvé, affichez un message
                            echo "<tr><td colspan='6'>Aucun resultat</td></tr>";
                        }

                        
                        
                        ?>
                    </table>
                </div>

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
    <script src="script4.js"></script>
</body>

</html>
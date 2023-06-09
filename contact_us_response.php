<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" type= "/image/svg" href="/Bilder/Logo/Logo.svg">

    <script src="script.js" async></script>
    <title>The Way- Contact us</title>
</head>
<body>
    <!--
        Logo + Nav
    -->
    <header>
        <a href="index.html">
            <img src="Bilder/Logo/Logo_2.svg" alt="logo von der Website the Way" id="logo">
        </a>
        <div class="toogle">
            <!-- mit Css erstellen-->
            <span class= "toogle one"></span>
            <span class="toogle two"></span>
            <span class="toogle three"></span>
        </div>
       
    </header>    
    <nav>      
        <ul class="menu">

                <a href="index.html">
                    <li>
                    Home Seite
                    </li>
                </a>
                <a href="login.html">
                    <li>
                        Log in
                    </li>
                </a>
                <a href="mittelstufe_startSeite.html">
                    <li>
                        Stufe
                    </li>
                </a>  
        </ul>
    </nav>
    <section>
        <p>
        Liebe  <?php echo $_POST["name"]; ?>, <br>
        danke für Ihre Kommentar
        </p>
        <p id="commentar_php">
            <?php echo  $_POST["comment"]; ?>
        </p>
    </section>
   
    <footer>
            <p>
                © 2022 Hochschule Worms
            </p>
            <p>
                <a href="contact_us.html">kontakt</a>
            </p>
    
    </footer>
</body>
</html>
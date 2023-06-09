<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- 
        On-Page SEO - Best Practices: Meta Keywords
        Genau 4 mit komma getrennte Meta-Keywords 
    -->
    <meta name="keywords" content="Umkehrfunktion, Oberstufe, Mathe, Beispiele">
    <!-- 
        On-Page SEO - Best Practices: Meta Description 
        Genau 75 Zeichen für die Meta Description 
    -->
    <meta name="description" content="Die Umkehrfunktion aus der Oberstufe wird mit konkreten Beispiele erklärkt.">
    <!-- 
        On-Page SEO - Best Practices: Title Tag 
        der Titel hat genau 58 Zeichen. Die zeichen [] sind nicht mitgezält
        sie sind da nur für das Sonderzeichen & 
    -->
    <link rel="stylesheet" href="style.css">
    <!-- <script src="/script.js" async></script> -->
    <script src="my_script.js" async></script>
    <!-- for icons -->
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"> -->
    <script src="https://kit.fontawesome.com/be9662e6a2.js" crossorigin="anonymous"></script>
    <!-- for google fonts -->
    
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Cookie&family=Inspiration&family=Courgette&family=Kurale">
    <title>
        Umkehrfunktion: Definition, Beispiele, Lösungen &amp; Korrektur
    </title>
    <!-- favicon of the website --> 
    <link rel="icon" type="image/x-icon" href="/Bilder/Logo/favicon2.ico">
  </head>
  <!-- show the content of the start tab when the page load -->
  <body>

    <!-- php code for the formular -->
    <?php
        // define variables and set to empty values
        $q1Err = $q2Err = $q3Err = $q4Err = $q5Err = $q6Err = $q7Err = $q8Err = $q9Err = "";
        $question1_j = $question2_j = $question3_j = $q41_j = $q42_j = $q43_j = $q44_j = $q51_j =
        $q52_j = $q53_j = $q54_j = $q61_j = $q62_j = $q63_j = $q64_j = $q71_j = $q72_j = $q73_j 
        = $q81_j = $q82_j = $q83_j = $q84_j = $q91_j = $q92_j = "";

        // start control
        // question 1
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            echo '<style type="text/css">
                        #q1_error_f_j {
                            color: red; 
                        }
                    </style>';
            if (empty($_POST["question1_j"])) {
                $q1Err = "Du must mindestens eine Option wählen";
            }else {
                $question1_j = control_input($_POST["question1_j"]);
                if($question1_j == "Ja"){
                    // change color for true answer
                    echo '<style type="text/css">
                            #q1_error_f_j {
                                color: green; 
                            }
                        </style>';
                    $q1Err = "Deine antwort ist richtig";
                }else{
                    $q1Err = "Deine antwort ist falsch";
                }
            }
        }
        // question 2
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            echo '<style type="text/css">
                        #q2_error_f_j {
                            color: red; 
                        }
                    </style>';
            if (empty($_POST["question2_j"])) {
                $q2Err = "Du must mindestens eine Option wählen";
            } else {
                $question2_j = control_input($_POST["question2_j"]);
                if($question2_j == "Nein"){
                    // change color for true answer
                    echo '<style type="text/css">
                            #q2_error_f_j {
                                color: green; 
                            }
                        </style>';
                    $q2Err = "Deine antwort ist richtig";
                }else{
                    $q2Err = "Deine antwort ist falsch";
                }
            }
            
        }
        // question 3
        if ($_SERVER["REQUEST_METHOD"] == "POST") {  
            echo '<style type="text/css">
                    #q3_error_f_j {
                        color: red; 
                    }
                </style>';
            if (empty($_POST["question3_j"])) {
                $q3Err = "Du must mindestens eine Option wählen";
            }else {
                $question3_j = control_input($_POST["question3_j"]);
                if($question3_j != ""){
                    // change color for true answer
                    echo '<style type="text/css">
                            #q3_error_f_j {
                                color: green; 
                            }
                        </style>';
                    $q3Err = "Deine antwort ist richtig";
                }else{
                    $q3Err = "Deine antwort ist falsch";
                }
            } 
            
        }
        // question 4
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            echo '<style type="text/css">
                        #q4_error_f_j {
                            color: red; 
                        }
                    </style>';
            if (!empty($_POST["q41_j"])){
                $q41_j = control_input($_POST["q41_j"]);
            } if (!empty($_POST["q42_j"])){
                $q42_j = control_input($_POST["q42_j"]);
            } if (!empty($_POST["q43_j"])){
                $q43_j = control_input($_POST["q43_j"]);
            } if (!empty($_POST["q44_j"])){
                $q44_j = control_input($_POST["q44_j"]);
            }
            if (empty($_POST["q41_j"]) && empty($_POST["q42_j"])
            && empty($_POST["q43_j"]) && empty($_POST["q44_j"])) {
                $q4Err = "Du must mindestens eine Option wählen";
            } else{
                if($q41_j == "" && $q42_j != "" && $q43_j == "" && $q44_j == ""){
                    // change color for true answer
                    echo '<style type="text/css">
                            #q4_error_f_j {
                                color: green; 
                            }
                        </style>';
                    $q4Err = "Deine antwort ist richtig";
                }else{
                    $q4Err = "Deine antwort ist falsch";
                }  
            } 
                
        }
        // question 5
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            echo '<style type="text/css">
                            #q5_error_f_j {
                                color: red; 
                            }
                        </style>';
            if (!empty($_POST["q51_j"])){
                $q51_j = control_input($_POST["q51_j"]);
            } if (!empty($_POST["q52_j"])){
                $q52_j = control_input($_POST["q52_j"]);
            } if (!empty($_POST["q53_j"])){
                $q53_j = control_input($_POST["q53_j"]);
            } if (!empty($_POST["q54_j"])){
                $q54_j = control_input($_POST["q54_j"]);
            }
            if (empty($_POST["q51_j"]) && empty($_POST["q52_j"])
            && empty($_POST["q53_j"]) && empty($_POST["q54_j"])) {
                $q5Err = "Du must mindestens eine Option wählen";
            }  else{
                if($q51_j == "" && $q52_j == "" && $q53_j == "" && $q54_j != ""){
                    // change color for true answer
                    echo '<style type="text/css">
                            #q5_error_f_j {
                                color: green; 
                            }
                        </style>';
                    $q5Err = "Deine antwort ist richtig";
                }else{
                    $q5Err = "Deine antwort ist falsch";
                } 
            }
            
        }
        // question 6
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            echo '<style type="text/css">
                            #q6_error_f_j {
                                color: red; 
                            }
                        </style>';
            if (!empty($_POST["q61_j"])){
                $q61_j = control_input($_POST["q61_j"]);
            } if (!empty($_POST["q62_j"])){
                $q62_j = control_input($_POST["q62_j"]);
            } if (!empty($_POST["q63_j"])){
                $q63_j = control_input($_POST["q63_j"]);
            } if (!empty($_POST["q64_j"])){
                $q64_j = control_input($_POST["q64_j"]);
            } 
            if (empty($_POST["q61_j"]) && empty($_POST["q62_j"])
            && empty($_POST["q63_j"]) && empty($_POST["q64_j"])) {  
                $q6Err = "Du must mindestens eine Option wählen";
            } else{
                if($q61_j != "" && $q62_j != "" && $q63_j != "" && $q64_j == ""){
                    // change color for true answer
                    echo '<style type="text/css">
                            #q6_error_f_j {
                                color: green; 
                            }
                        </style>';
                    $q6Err = "Deine antwort ist richtig";
                }else{
                    $q6Err = "Deine antwort ist falsch";
                } 
            }
            
        }
        // question 7
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            echo '<style type="text/css">
                        #q7_error_f_j {
                            color: red; 
                        }
                    </style>';
            if (!empty($_POST["q71_j"])){
                $q71_j = control_input($_POST["q71_j"]);
            } 
            if (!empty($_POST["q72_j"])){
                $q72_j = control_input($_POST["q72_j"]);
            }    
            if (!empty($_POST["q73_j"])){
                $q73_j = control_input($_POST["q73_j"]);
            } 
            if (empty($_POST["q71_j"]) || empty($_POST["q72_j"])
            || empty($_POST["q73_j"])) {
                $q7Err = "Du must alle box füllen";
            } else {
                // check if name only contains letters and whitespace
                if (!preg_match("/^[0-9-+\*\/\(\)x]*$/", $q71_j) 
                || !preg_match("/^[0-9-+\*\/\(\)x]*$/", $q72_j) 
                || !preg_match("/^[0-9-+\*\/\(\)x]*$/", $q73_j)) {
                    $q7Err = "Nur Zahlen, -, +, *, /, (, ) und x sind erlaubt!";
                } else{
                    if($q71_j == "(" && $q72_j == "-" && $q73_j == "/"){
                        // change color for true answer
                        echo '<style type="text/css">
                                #q7_error_f_j {
                                    color: green; 
                                }
                            </style>';
                        $q7Err = "Deine antwort ist richtig";
                    }else{
                        $q7Err = "Deine antwort ist falsch";
                    } 
                }
            }
            
        }
        // question 8
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            echo '<style type="text/css">
                        #q8_error_f_j {
                            color: red; 
                        }
                    </style>';
            if (!empty($_POST["q81_j"])){
                $q81_j = control_input($_POST["q81_j"]);
            } 
            if (!empty($_POST["q82_j"])){
                $q82_j = control_input($_POST["q82_j"]);
            }  
            if (!empty($_POST["q83_j"])){
                $q83_j = control_input($_POST["q83_j"]);
            } 
            if (!empty($_POST["q84_j"])){
                $q84_j = control_input($_POST["q84_j"]);
            }
            if (empty($_POST["q81_j"]) || empty($_POST["q82_j"])
            || empty($_POST["q83_j"])  || empty($_POST["q84_j"])) {
                $q8Err = "Du must alle box füllen";
            } else {
                // check if name only contains letters and whitespace
                if (!preg_match("/^[0-9-+\*\/\(\)x]*$/", $q81_j) 
                || !preg_match("/^[0-9-+\*\/\(\)x]*$/", $q82_j) 
                || !preg_match("/^[0-9-+\*\/\(\)x]*$/", $q83_j)
                || !preg_match("/^[0-9-+\*\/\(\)x]*$/", $q84_j)) {
                    $q8Err = "Nur Zahlen, -, +, *, /, (, ) und x sind erlaubt!";
                } else{
                    if(($q81_j == "-" && $q82_j == "(" && $q83_j == "+" && $q84_j == "/")
                    || ($q81_j == "(" && $q82_j == "-" && $q83_j == "-" && $q84_j == "/")){
                        // change color for true answer
                        echo '<style type="text/css">
                                #q8_error_f_j {
                                    color: green; 
                                }
                            </style>';
                        $q8Err = "Deine antwort ist richtig";
                    }else{
                        $q8Err = "Deine antwort ist falsch";
                    } 
                }
            }
            
        }
        // question 9
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            echo '<style type="text/css">
                        #q9_error_f_j {
                            color: red; 
                        }
                    </style>';
            if (!empty($_POST["q91_j"])){
                $q91_j = control_input($_POST["q91_j"]);
            }
            if (!empty($_POST["q92_j"])){
                $q92_j = control_input($_POST["q92_j"]);
            }
            if (empty($_POST["q91_j"]) || empty($_POST["q92_j"])) {
                $q9Err = "Du must alle box füllen";
            } else {
                // check if name only contains letters and whitespace
                if (!preg_match("/^[0-9-+\*\/\(\)x]*$/", $q91_j) 
                || !preg_match("/^[0-9-+\*\/\(\)x]*$/", $q92_j)) {
                    $q9Err = "Nur Zahlen, -, +, *, /, (, ) und x sind erlaubt!";
                } else{
                    if($q91_j == "7" && $q92_j == "/"){
                        // change color for true answer
                        echo '<style type="text/css">
                                #q9_error_f_j {
                                    color: green; 
                                }
                            </style>';
                        $q9Err = "Deine antwort ist richtig";
                    }else{
                        $q9Err = "Deine antwort ist falsch";
                    } 
                }
            }   
        }

        // remove too much space, tab, special caracters from input
        function control_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    ?>
    <!-- Logo + Nav -->

    <!-- Header for the step overview -->
    <div id="header_step_overview">
        <!-- 
            Usage google icons
            <i class="material-icons">cloud</i>
        -->
        <div>
            <a href="../index.html"><b>Startseite</b></a>
            <i class="fa-solid fa-chevron-right" style="font-size:10px;"></i>
            <a href="../oberstufe_startSeite.html"><b>Oberstufe</b></a>
            <i class="fa-solid fa-chevron-right" style="font-size:10px;"></i>
            <span class="current_lektion_j">Umkehrfunktion</span> 
        </div>

        <div>
            <p class="lektion_titel_j">Umkehrfunktion für die Oberstufe</p>
        </div>

        <div class="contain_tooltip_j">
            <span class="tooltip">Du brauchst ungefähr 5 Stunden für diese Lektion</span> 
            <i class="fa-regular fa-clock"></i>
            5 Stunden
        </div>
    </div>

    <!-- Content of the page, for big screen 2 colums  -->
    <div class="main_page_j">
        <!-- main on the left side -->
        <main>
            <div id="sticky1">
                <button id="Start_onLoad" onclick='window.location.href="index.php"'>Start</button>
                <button id="Start_Kurs" onclick='window.location.href="kurs.php"'>Kurs</button>
                <button id="Start_Übung" onclick='window.location.href="ubung.php"'
                style="background-color: #b397b3;">Übung</button>
                <button id="Start_Lösung" onclick='window.location.href="losung.php"'>Lösung</button>
            </div>
            
            <div id="Übung" class="tabcontent">
                <div>
                    <p>
                        Da unten findst du ein paar 
                        Übungen, die dir helfen werden die 
                        Umkehrfunktion noch <b>besser</b> zu verstehen.
                    </p>
                </div>
                <!-- secure sending informations to the formular -->
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <ol>
                        <li>
                            <div class="titel_q_j">Ist die Funktion <code>f(x) = 3x + 2</code> umkehrbar?
                        <!-- error message when element is empty or invalid-->
                        <span class="error_f_j" id="q1_error_f_j">* <?php echo $q1Err;?></span></div>
                        </li>
                        <div class="radio_deco_j">
                            <input type="radio" id="q1_ja_j" name="question1_j" 
                            <?php if (isset($question1_j) && $question1_j=="Ja") echo "checked";?>
                            value="Ja">
                            <label for="ja">Ja</label>
                        </div><br>
                        <input type="radio" id="q1_nein_j" name="question1_j" 
                        <?php if (isset($question1_j) && $question1_j=="Nein") echo "checked";?>
                        value="Nein">
                        <label for="nein">Nein</label><br>
                        <input type="radio" id="q1_noclear_j" name="question1_j" 
                        <?php if (isset($question1_j) && $question1_j=="Nur in einem 
                        bestimmten Wertebereich") echo "checked";?>
                        value="Nur in einem bestimmten Wertebereich">
                        <label for="nicht komplett">Nur in einem bestimmten Wertebereich</label><br>
                        
                        
                        <li>
                            <div class="titel_q_j">Ist die Funktion <code>f(x) = x<sup>2</sup> + 4</code> umkehrbar?
                        <!-- error message when element is empty or invalid-->
                        <span class="error_f_j" id="q2_error_f_j">* <?php echo $q2Err;?></span></div>
                        </li>
                        
                        <!-- Antwort: Nur in einem bestimmten 
                            Definitionsbereich or nein 
                            x has to be positif -->
                        <input type="radio" id="q2_ja_j" name="question2_j" 
                        <?php if (isset($question2_j) && $question2_j=="Ja") echo "checked";?>
                        value="Ja">
                        <label for="ja">Ja</label><br>
                        <input type="radio" id="q2_nein_j" name="question2_j" 
                        <?php if (isset($question2_j) && $question2_j== "Nein") echo "checked";?>
                        value="Nein">
                        <label for="nein">Nein</label><br>
                        <input type="radio" id="q2_noclear_j" name="question2_j" 
                        <?php if (isset($question2_j) && $question2_j=="Nur 
                        in einem bestimmten Wertebereich") echo "checked";?>
                        value="Nur 
                        in einem bestimmten Wertebereich">
                        <label for="nicht komplett">Nur in einem bestimmten Wertebereich</label><br>
                        

                        <li>
                            <div class="titel_q_j">Ist die Funktion <code>f(x) = e<sup>x</sup></code> umkehrbar?
                        <!-- error message when element is empty or invalid-->
                        <span class="error_f_j" id="q3_error_f_j">* <?php echo $q3Err;?></span></div>
                        </li>
                        
                        <!-- Antwort: Nur in einem bestimmten 
                            Wertebereich or nein 
                            y has to be positif -->
                        <input type="radio" id="q3_ja_j" name="question3_j" 
                        <?php if (isset($question3_j) && $question3_j== "Ja") echo "checked";?>
                        value="Ja">
                        <label for="ja">Ja</label><br>
                        <input type="radio" id="q3_nein_j" name="question3_j" 
                        <?php if (isset($question3_j) && $question3_j== "Nein") echo "checked";?>
                        value="Nein">
                        <label for="nein">Nein</label><br>
                        <input type="radio" id="q3_noclear_j" name="question3_j" 
                        <?php if (isset($question3_j) && $question3_j== "Nur 
                        in einem bestimmten Wertebereich") echo "checked";?>
                        value="Nur 
                        in einem bestimmten Wertebereich">
                        <label for="nicht komplett">Nur in einem bestimmten Wertebereich</label><br>

                        <li>
                            <div class="titel_q_j">Welche Eingenschaften hat diese Funktion?
                                <!-- error message when element is empty or invalid-->
                        <span class="error_f_j" id="q4_error_f_j">* <?php echo $q4Err;?></span></div>
                        </li>
                        <cite>Es kann mehrere Antworten haben</cite><br>
                        <figure class="illustration_bild_j">
                            <img src="/umkehrfunktion/beispiel_menge_4.png" alt="nicht bijektive function">
                            <figcaption><cite>Was ist mein type?</cite></figcaption>
                        </figure>
                        <input type="checkbox" id="q41_j" name="q41_j" 
                        <?php if (isset($q41_j) && $q41_j== "Injektiv") echo "checked";?>
                        value="Injektiv">
                        <label for="injektiv">Injektiv</label><br>
                        <input type="checkbox" id="q42_j" name="q42_j" 
                        <?php if (isset($q42_j) && $q42_j== "Surjektiv") echo "checked";?>
                        value="Surjektiv">
                        <label for="surjektiv">Surjektiv</label><br>
                        <input type="checkbox" id="q43_j" name="q43_j" 
                        <?php if (isset($q43_j) && $q43_j== "Bijektiv") echo "checked";?>
                        value="Bijektiv">
                        <label for="bijektiv">Bijektiv</label><br>
                        <input type="checkbox" id="q44_j" name="q44_j" 
                        <?php if (isset($q44_j) && $q44_j== "Alles ist falsch") echo "checked";?>
                        value="Alles ist falsch">
                        <label for="no answer">Alles ist falsch</label><br>
                        

                        <li>
                            <div class="titel_q_j">Welche Eingenschaften hat diese Funktion?
                                <!-- error message when element is empty or invalid-->
                        <span class="error_f_j" id="q5_error_f_j">* <?php echo $q5Err;?></span></div>
                        </li>
                        <cite>Es kann mehrere Antworten haben</cite><br>
                        <figure class="illustration_bild_j">
                        <img src="/umkehrfunktion/beispiel_menge_1.png" alt="nicht bijektive function">
                        <figcaption><cite>Was ist mein type?</cite></figcaption>
                        </figure>
                        <input type="checkbox" id="q51_j" name="q51_j" 
                        <?php if (isset($q51_j) && $q51_j== "Injektiv") echo "checked";?>
                        value="Injektiv">
                        <label for="injektiv">Injektiv</label><br>
                        <input type="checkbox" id="q52_j" name="q52_j" 
                        <?php if (isset($q52_j) && $q52_j== "Surjektiv") echo "checked";?>
                        value="Surjektiv">
                        <label for="surjektiv">Surjektiv</label><br>
                        <input type="checkbox" id="q53_j" name="q53_j" 
                        <?php if (isset($q53_j) && $q53_j== "Bijektiv") echo "checked";?>
                        value="Bijektiv">
                        <label for="bijektiv">Bijektiv</label><br>
                        <input type="checkbox" id="q54_j" name="q54_j" 
                        <?php if (isset($q54_j) && $q54_j== "Alles ist falsch") echo "checked";?>
                        value="Alles ist falsch">
                        <label for="no answer">Alles ist falsch</label><br>
                        

                        <li>
                            <div class="titel_q_j">Welche Eingenschaften hat diese Funktion?
                                <!-- error message when element is empty or invalid-->
                        <span class="error_f_j" id="q6_error_f_j">* <?php echo $q6Err;?></span></div>
                        </li>
                        <cite>Es kann mehrere Antworten haben</cite><br>
                        <figure class="illustration_bild_j">
                        <img src="/umkehrfunktion/beispiel_menge_3.png" alt="nicht bijektive function">
                        <figcaption><cite>Was ist mein type?</cite></figcaption>
                        </figure>
                        <input type="checkbox" id="q61_j" name="q61_j" 
                        <?php if (isset($q61_j) && $q61_j== "Injektiv") echo "checked";?>
                        value="Injektiv">
                        <label for="injektiv">Injektiv</label><br>
                        <input type="checkbox" id="q62_j" name="q62_j" 
                        <?php if (isset($q62_j) && $q62_j== "Surjektiv") echo "checked";?>
                        value="Surjektiv">
                        <label for="surjektiv">Surjektiv</label><br>
                        <input type="checkbox" id="q63_j" name="q63_j" 
                        <?php if (isset($q63_j) && $q63_j== "Bijektiv") echo "checked";?>
                        value="Bijektiv">
                        <label for="bijektiv">Bijektiv</label><br>
                        <input type="checkbox" id="q64_j" name="q64_j" 
                        <?php if (isset($q64_j) && $q64_j== "Alles ist falsch") echo "checked";?>
                        value="Alles ist falsch">
                        <label for="no answer">Alles ist falsch</label><br>
                        

                        <li>
                                <div class="titel_q_j">Die Umkehrfunktion der Funktion
                                <code>f(x) = 3x + 7</code> ist ?
                            <!-- error message when element is empty or invalid-->
                                <span class="error_f_j" id="q7_error_f_j">* <?php echo $q7Err;?></span></div>
                        </li>
                        <code>
                            <label for="bloc1">f<sup>-1</sup>(x) = </label>
                            <input type="text" id="q71_j" name="q71_j" 
                            maxlength="1" value="<?php echo $q71_j;?>">
                            <label for="bloc2">x</label>
                            <input type="text" id="q72_j" name="q72_j" 
                            maxlength="1" value="<?php echo $q72_j;?>">
                            <label for="bloc3">7)</label>
                            <input type="text" id="q73_j" name="q73_j" 
                            maxlength="1" value="<?php echo $q73_j;?>">
                            <label for="bloc4">3</label>
                        </code><br>
                        
                        <li>
                                <div class="titel_q_j">Die Umkehrfunktion der Funktion
                                <code>f(x) = -2x - 5</code> ist ?
                            <!-- error message when element is empty or invalid-->
                            <span class="error_f_j" id="q8_error_f_j">* <?php echo $q8Err;?></span></div>
                        </li>
                        <code>
                            <label for="bloc1">f<sup>-1</sup>(x) = </label>
                            <input type="text" id="q81_j" name="q81_j" 
                            maxlength="1" value="<?php echo $q81_j;?>">
                            <input type="text" id="q82_j" name="q82_j" 
                            maxlength="1" value="<?php echo $q82_j;?>">
                            <label for="bloc2">x</label>
                            <input type="text" id="q83_j" name="q83_j" 
                            maxlength="1" value="<?php echo $q83_j;?>">
                            <label for="bloc3">5)</label>
                            <input type="text" id="q84_j" name="q84_j" 
                            maxlength="1" value="<?php echo $q84_j;?>">
                            <label for="bloc4">2</label>
                        </code>
                        <br>

                        <li>
                                <div class="titel_q_j">Die Umkehrfunktion der Funktion
                                <code>f(x) = 3x / 7</code> ist ?
                            <!-- error message when element is empty or invalid-->
                        <span class="error_f_j" id="q9_error_f_j">* <?php echo $q9Err;?></span></div>
                        </li>
                        <code>
                            <label for="bloc1">f<sup>-1</sup>(x) = </label>
                            <input type="text" id="q91_j" name="q91_j" 
                            maxlength="1" value="<?php echo $q91_j;?>">
                            <label for="bloc2">x</label>
                            <input type="text" id="q92_j" name="q92_j" 
                            maxlength="1" value="<?php echo $q92_j;?>">
                            <label for="bloc3">3</label>
                        </code>
                        <br>
                        
                    </ol>
                    <br>
                    <div class="animated_b_container_j">
                        <input class="animated_bottom_j" type="submit" value="Absenden">
                    </div>
                </form>   
                <div class="titel_q_j">Speciale Übung <br>
                    Drag and drop die Bilder, um die Umkehrfunktion
                    der Funktion <code>f(x) = (28x + 4)/4</code>
                    zu erhalten </div>
                <cite id="test2000">Denk an den ggt :)</cite>
                    
                <div class="drag_drop_j">
                    <div class="dr_dr_1">
                        <div class="dr_dr_1_left">
                            <div class="math">f<sup>-1</sup>(x) =</div>
                        </div>
                        <div class="dr_dr_1_right">
                            <div class="dr_dr_1_right_top">
                                <div id="dr_dr_dest1" class="last_case"  ondrop="drop(event)"
                                    ondragover="allowDrop(event)">

                                </div>
                                <div id="dr_dr_dest2" class="last_case"  ondrop="drop(event)"
                                ondragover="allowDrop(event)">
                                    
                                </div>
                                <div id="dr_dr_dest3" class="last_case"  ondrop="drop(event)"
                                ondragover="allowDrop(event)">
                                    
                                </div>
                            </div>
                            <div class="dr_dr_1_right_middle">

                            </div>
                            <div class="dr_dr_1_right_bottom">
                                <!-- fictive div only for center the denomitor -->
                                <div></div>
                                <div id="dr_dr_dest4" class="last_child_2"  ondrop="drop(event)"
                                ondragover="allowDrop(event)"></div>
                                <div></div>
                            </div>
                        </div>
                    </div>
                    <div class="dr_dr_2">
                        <div id="dr_dr_source_1" class="last_case"  ondrop="drop(event)"
                                    ondragover="allowDrop(event)">
                            <img src="last_q_1.png" draggable="true" ondragstart="drag(event)" 
                            id="drag1" width="30" height="30">
                        </div>
                        <div id="dr_dr_source_2" class="last_case"  ondrop="drop(event)"
                                    ondragover="allowDrop(event)">
                            <img src="last_q_2.png" draggable="true" ondragstart="drag(event)" 
                            id="drag2" width="30" height="30">
                        </div>
                        <div id="dr_dr_source_3" class="last_case"  ondrop="drop(event)"
                                    ondragover="allowDrop(event)">
                            <img src="last_q_3.png" draggable="true" ondragstart="drag(event)" 
                            id="drag3" width="30" height="30">
                        </div>
                        <div id="dr_dr_source_4" class="last_case"  ondrop="drop(event)"
                                    ondragover="allowDrop(event)">
                            <img src="last_q_4.png" draggable="true" ondragstart="drag(event)" 
                            id="drag4" width="30" height="30">
                        </div>
                        <div id="dr_dr_source_5" class="last_case"  ondrop="drop(event)"
                                    ondragover="allowDrop(event)">
                            <img src="last_q_5.png" draggable="true" ondragstart="drag(event)" 
                            id="drag5" width="30" height="30">
                        </div>
                        <div id="dr_dr_source_6" class="last_case"  ondrop="drop(event)"
                                    ondragover="allowDrop(event)">
                            <img src="last_q_6.png" draggable="true" ondragstart="drag(event)" 
                            id="drag6" width="30" height="30">
                        </div>
                        <div id="dr_dr_source_7" class="last_case"  ondrop="drop(event)"
                                    ondragover="allowDrop(event)">
                            <img src="last_q_7.png" draggable="true" ondragstart="drag(event)" 
                            id="drag7" width="30" height="30">
                        </div>
                        <div id="dr_dr_source_8" class="last_case"  ondrop="drop(event)"
                                    ondragover="allowDrop(event)">
                            <img src="last_q_8.png" draggable="true" ondragstart="drag(event)" 
                            id="drag8" width="30" height="30">
                        </div>
                    
                    </div>
                </div> 
                <h5 id="answer_special_question" style="display: none;">
                    <cite>Es ist leider falsch! Dend an den ggt!</cite>
                </h5>
                <div class="animated_b_container_j">
                    <button class="animated_bottom_j" onclick="check_last_question()">Testen</button>
                </div>    
                <!-- Sart the correction button -->
                <div class="container_button_j">
                    <!-- <a href="../oberstufe_startSeite.html"><button class="button_move_j" type="button">Lektion  Starten</button></a> -->
                    <button class="button_move_j" onclick='window.location.href="losung.php"'>Lösung sehen</button>
                </div>  
            </div>  
        </main>

        <!-- Aside on the right side -->
        <aside>

        </aside>

    </div>

    <!-- foooter for the informations about the teachers -->
    <div class="footer_lehrer_infos">
        <div class="footer_first_colonne">
            <div class="footer_titel">
                <p class="footer_titel_style"> Die Lehrer</p> 
                <div class="author author_1">
                    <div class="author_name">Junior Pablito</div>
                    <div class="author_bescreibung">Student in <a href="https://www.hs-worms.de/ai/beschreibung/" target="_blank" rel="noopener noreferrer">Angewandte Informatik</a> und Tutor an der <a href="https://www.hs-worms.de/" target="_blank" rel="noopener noreferrer">Hochschule Worms</a>.</div>
                    <div class="author_image">
                        <img src="/Bilder/Lehrer/junior_1.jpeg" alt="Passbild von Junior Pablito" width="80" height="80" usemap="#profil_pablito">
                        <map name="profil_pablito">
                            <area shape="rect" coords="0,0,100,100" alt="Icon von PDF" href="/Profil/pablito.html">
                        </map>
                    </div>
                </div>
                <div class="author author_2">
                    <div class="author_name">Lise Delmonte</div>
                    <div class="author_bescreibung">Studentin in Medezin und Tutorin an der Hochschule Mannheim.</div>
                    <div class="author_image"><img src="/Bilder/Lehrer/junior_2.jpeg" alt="Passbild von Lise Delmonte" width="80" height="80"></div>
                </div>
            </div> 
        </div>
        <div class="footer_second_colonne">
            <div class="footer_titel">
                <p class="footer_titel_style footer_titel_style_second">Schauen Sie auch mal das</p>
                <!-- we use map to make the image clickable -->
                <map name="download_pdf">
                    <area shape="rect" coords="0,0,100,100" alt="Icon von PDF" href="css_kurs.pdf" download="umkehrfunktion.pdf">
                </map>
                <!-- for the second image on the bottom -->
                <map name="download_pdf2">
                    <area shape="rect" coords="0,0,100,100" alt="Icon von PDF" href="css_kurs.pdf" download="umkehrfunktion.pdf">
                </map>
                <figure class="footer_link footer_image_link_first">
                    <img src="/Bilder/Icon/pdf.png" alt="Icon von a pdf file" usemap="#download_pdf" width="60" height="60">
                    <span class="tooltiptext">Click drauf um die pdf-Datei dieses Kurses herunterzuladen</span>
                    <figcaption class="footer_figcaption">PDF</figcaption>
                    
                </figure>
                <figure class="footer_link footer_image_link_second">
                    <img src="/Bilder/Icon/pdf.png" alt="Icon von a what file" usemap="#download_pdf2" width="60" height="60">
                    <figcaption class="footer_figcaption">WHAT?</figcaption>
                </figure> 
            </div> 
        </div>
    </div>
  </body>
</html>
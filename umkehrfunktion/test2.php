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
                if($question3_j == "Nur in einem 
                bestimmten Wertebereich"){
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
                <button class="tablinks" id="Start_onLoad" onclick="openModule(event, 'Start')">Start</button>
                <button class="tablinks" id="Start_Kurs" onclick="openModule(event, 'Kurs')">Kurs</button>
                <button class="tablinks" id="Start_Übung" onclick="openModule(event, 'Übung')">Übung</button>
                <button class="tablinks" id="Start_Lösung" onclick="openModule(event, 'Lösung')">Lösung</button>
            </div>
            
            <div class="content_after_sticky_tab_j">
                <div id="Start" class="tabcontent">
                    <!-- Video Recap on top -->
                    <video controls>
                        <source src="start_umkehrfunktion.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <!-- Intro Start course -->
                    <div>
                        <p>Die Umkehrfunktion wird, wie alle mathematischen Konzepte, 
                            <b>im täglichen Leben</b> ständig angewendet. Die Umkehrfunktion wird oft 
                            unbemerkt angewendet. In dieser Lektion werden wir auf die einfachste Art 
                             und Weise erklären, was <b>eine Umkehrfunktion</b> ist.
                        </p>
                    </div>
                    <!-- Bloc info standard -->
                    <div class="bloc_info_j">
                        <i class="fa-sharp fa-solid fa-circle-exclamation"></i>
                        <div>
                            <b>Voraussetzungen</b> <br>
                            <ul>
                                <li>
                                    <b>Wissen:</b> <br>
                                    Für dieses Kapitel ist es notwendig zu wissen,
                                    was eine Funktion ist. Hier finden Sie einen 
                                    ausführlichen Kurs über den Begriff der Funktion. <br>
                                </li>
                                <li>
                                    <b>Matheriel:</b> <br>
                                    Für den Übungsteil ist es ratsam, einen <b>Taschenrechner</b>
                                    zur Hand zu haben, um einige Berechnungen zu beschleunigen.
                                </li>
                            </ul>               
                        </div>   
                    </div>  
    
                    <!-- Bloc tipps -->
                    <div class="bloc_tipp_j">
                        <i class="fa-sharp fa-solid fa-circle-info"></i>
                        <div>                      
                            <b>Ratschlag</b> <br>
                            <ul>
                                <li>
                                    Schau dir die Korrektur einer Übung <b>nur dann an</b>, 
                                    wenn du zumindest die Ankündigung gelesen hast und 
                                    versuche, sie selbstständig zu bearbeiten. 
                                </li>
                            </ul>                        
                        </div> 
                    </div> 
    
                    <!-- Goal of the lection -->
                    <div class="bloc_goal_j">
                        <i class="fa-solid fa-circle-check"></i>
                        <div>                     
                            <b>Ziele diser Lektion</b> <br>
                            <ul>
                                <li>
                                    Die Umkehrfunktion mit deinen <b>einigen Wörter </b>erklären<br>
                                </li>
                                <li>
                                    Beispiele Umsetzung von Umkehrfunktion aus dem Alltag nennen <br>
                                </li>
                                <li>
                                    Überprüfen ob eine Funktion <b>bijektiv</b> ist<br>
                                </li>
                                <li>
                                    Die Umkehrfunktion einer Funktion ermitteln<br>
                                </li>
                                <li>
                                    Den Graph einer Umkehrfunktion einer Funktion zeischen<br>
                                </li>
                            </ul>    
                        </div>   
                    </div> 
    
                    <!-- Sart the lection button -->
                    <div class="container_button_j">
                        <!-- <a href="../oberstufe_startSeite.html"><button class="button_move_j" type="button">Lektion  Starten</button></a> -->
                        <button class="button_move_j" onclick="onload_set('Start_Kurs')">Lektion  Starten</button>
                    </div>
    
                    <!-- Do you to be help at home for your lessons -->
                    <details class="details_first_j">
                        <summary>Nachhilfenkurs?
                        </summary>
                        <div>
                            <p>Wir helfen dir gern egal ob <span style="color: #00d527;">online</span>  
                            oder <span style="color: #00d527;">offline</span> die Mathematik und 
                            Physik zu verstehen bzw. meisten. Klick einfach auf diesem
                            <a href="../arbeitmoeglichkeit.html">Link</a>, um alle Informationen 
                            darüber zu haben.
                            </p>
                        </div>
                    </details>
    
                    <!-- Glossair -->
                    <details class="details_first_j">
                        <summary>Inhaltsverzeichnis
                        </summary>
                        <div class="list_tab_j">
                            <ol>
                                <li>
                                    <!-- ---- Kurs ---- -->
                                    <details class="details_second_j">
                                        <summary>Kurs
                                        </summary>
                                        <div class="list_second_j">
                                            <ol>
                                                <li>
                                                    <!-- ------ -->
                                                    <details class="details_third_j">
                                                        <summary>Beispiel aus dem Alltag
                                                        </summary>
                                                        <div>
                                                            <ul class="under_group_1_j">
                                                                <li><a href="">Die Konversation über Zeitzonen</a></li>
                                                            </ul>
                                                        </div>
                                                    </details>
                                                </li>
                                                <li>
                                                    <details class="details_third_j">
                                                        <summary>Definition
                                                        </summary>
                                                        <div>
                                                            <ol class="under_group_j">
                                                                <li><a href="">Mathemathische Definition</a></li>
                                                                <li><a href="">Erklärung</a></li>
                                                            </ol>
                                                        </div>
                                                    </details>
                                                </li>
                                                <li>
                                                    <details class="details_third_j">
                                                        <summary>Die Umkehrbarkeit einer Funktion überprüfen.
                                                        </summary>
                                                        <div>
                                                            <ol class="under_group_j">
                                                                <li><a href="">Methode 1</a></li>
                                                                <li><a href="">Methode 2</a></li>
                                                                <li><a href="">Methode 3</a></li>
                                                            </ol>
                                                        </div>
                                                    </details>
                                                </li>
                                                <li>
                                                    <details class="details_third_j">
                                                        <summary>Zusammenfassung
                                                        </summary>
                                                        <div>
                                                            <ol class="under_group_j">
                                                                <li><a href="">War alles klar?</a></li>
                                                                <li><a href="">Weiter zur Übungen</a></li>
                                                            </ol>
                                                        </div>
                                                    </details>
                                                </li>
                                            </ol>
                                        </div>
                                    </details>
                                    <!-- --- Ende Kurs--- -->
                                </li>
                                <li>
                                    <!-- ----- Übung --- -->
                                    <details class="details_second_j">
                                        <summary>Übung
                                        </summary>
                                        
                                    </details>
                                    <!-- ---- Ende Übung -- -->
                                </li>
                                <li>
                                    <!-- ----- Lösung --- -->
                                    <details class="details_second_j">
                                    <summary>Lösung
                                    </summary>
                                    
                                    </details>
                                    <!-- ------Lösung -------->
                                </li>
                            </ol>
                        </div>
                    </details>

                    <!-- Do you want to work with us? -->
                    <details class="details_first_j">
                        <summary>Wir suchen dich!
                        </summary>
                        <div>
                            <ul>
                                <li>
                                    Du verstehst die mathematischen und physischen 
                                    Themen aus der <span style="color: #00d527;">
                                    Ober- und/oder Mittelstufe</span>.
                                </li>
                                <li>
                                    Kannst du zusätzlich diese Themen  
                                    <span style="color: #00d527;">einfach erklären</span>,
                                    damit andere Schüler sie auch beehrschen?
                                </li>
                                <li>
                                    <b>Willst du</b> am Ende deine Kenntnissen teilen? 
                                </li>
                            </ul>
                            Wenn du alle diese Kriterien erfüllt, dann bist du bei 
                            uns <b>Willkommen</b>!<br> Folge einfach diesen
                            <a href="../arbeitmoeglichkeit.html">Link</a>,
                            um weitere Informationen darüber zu haben.
                        </div>
                    </details>
                </div>
    
                <div id="Kurs" class="tabcontent">
                    <div class="list_second_j">
                        <ol>
                            <!-- Example -->
                            <li>
                                <details class="details_third_j">
                                    <summary>Beispiel aus dem Alltag
                                    </summary>
                                    <div>
                                        <p>
                                            Ein Wort, das einem in den Sinn kommen muss,
                                            wenn man von der Umkehrfunktion spricht, 
                                            ist das Wort<b>einzigartig</b>. Es gibt viele 
                                            verschiedene Fälle, in denen der Begriff 
                                            der Umkehrfunktion <b>im Alltag</b> vorkommt.<br>
                                            <b>Die Konversation über Zeitzonen</b> ist eine 
                                            Umkehrfunktion. 
                                        </p>
                                        <!-- Bloc question -->
                                        <div class="bloc_question_j">
                                            <i class="fa-solid fa-circle-question"></i>
                                            <div>                      
                                                <p>Warum ist das so?</p>                      
                                            </div>
                                        </div> 
                                        <p>
                                            Die deutsche Zeitzone ist im Sommer <span class="math2">+2</span> und 
                                            die kanadische Zeitzone ist <span class="math2">-4</span>. Wenn es in 
                                            Deutschland <span class="math3">12 Uhr</span> ist, ist es in Kanada 
                                            <span class="math3">6 Uhr</span>.
                                            Wir sind also in der Lage, eine Funktion <span class="math">f</span> zu
                                            definieren, mit der wir die kanadische Zeit <span class="math">y</span> 
                                            bestimmen können, wenn wir die deutsche Zeit <span class="math">x</span> kennen.<br>
                                            <span class="math4">f: X &#10141; Y</span><br>
                                            <span class="math4">f(x) = y + 6</span><br>
                                        </p>
                                        <!-- Bloc tipps -->
                                        <div class="bloc_tipp_j">
                                            <i class="fa-sharp fa-solid fa-circle-info"></i>
                                            <div class="math">                      
                                                X und Y sind die deutsche bzw. die kanadische Zeit.
                                            </div> 
                                        </div>
                                        <p>
                                            Wenn ein Kanadier nun die Zeit in Deutschland anhand der Zeit in seinem Heimatland ermitteln möchte.
                                            macht er: <br><code>y = x - 6</code><br>
                                            Wir erhalten also eine zweite Funktion <span class="math"> f<sup>&nbsp;-1</sup></span> aus <span class="math">f</span>,
                                            nachdem wir den Wert von <span class="math">y</span> (Element der Ankunftsmenge) in Kenntnis von
                                            <span class="math">x</span> (Element der Abfahrtsmenge) ermittelt haben.
                                        </p> 
                                        <!-- Bloc tipps -->
                                        <div class="bloc_tipp_j">
                                            <i class="fa-sharp fa-solid fa-circle-info"></i>
                                            <div class="math">                      
                                                Wenn du richtig bemerkst, hat die kanadische Zeit nur eine und nur eine Entsprechung in der deutschen Zeit. 
                                            </div> 
                                        </div>
                                        <p>
                                            <span class="math"> f<sup>&nbsp;-1</sup></span> wird daher als Gegenfunktion von <span class="math">f</span> bezeichnet.<br>
                                        </p>
                                    </div>
                                </details>
                            </li>

                            <!-- Definition-->
                            <li>
                                <details class="details_third_j">
                                    <summary>Definition
                                    </summary>
                                    <div>
                                        <ol class="under_group_j">
                                            <li>
                                                <details>
                                                    <summary>Mathemathische Definition
                                                    </summary>
                                                    <p>
                                                        <b>Eine Umkehrfunktion</b> ist eine Funktion, bei der 
                                                        jedes Element in der <span class="special_words">Ankunftsmenge*</span>
                                                        nur einen und nur einen Vorgänger in der <span class="special_words">Ausgangsmenge*</span> hat.
                                                        <br>Die Funktion <span class="math"> f </span> ist definiert durch: <br>
                                                        <span class="math4">f: X &#10141; Y</span><br>
                                                        <span class="math4">f(x) = y</span><br>
                                                        Die <b>Gegenfunktion</b> zu <span class="math">f</span> wird
                                                         <span class="math">f<sub>&nbsp;-1 </sub></span> 
                                                        genannt und ist definiert durch:<br>
                                                        <span class="math4">f<sup>&nbsp;-1</sup>: Y &#10141; X</span><br>
                                                        <span class="math4">y = f<sup>&nbsp;-1</sup>(x)</span><br>

                                                        Beispiel: Die Funktion <br><code>f(x) = 3x</code> hat <code>f<sup>&nbsp;-1</sup>
                                                            (x) = <sup>x</sup>/<sub>3</sub></code> als Umkehrfunktion.
                                                    </p>
                                                </details>
                                            </li>
                                            <li>
                                                <details>
                                                    <summary>Erklärung
                                                    </summary>
                                                        Wir haben oben ein Beispiel genommen;
                                                        Die Funktion <br><code>f(x) = 3x</code> hat <code>f<sup>&nbsp;-1</sup>
                                                        (x) = <sup>x</sup>/<sub>3</sub></code> als Umkehrfunktion.
                                                        <!-- Bloc question -->
                                                        <div class="bloc_question_j">
                                                            <i class="fa-solid fa-circle-question"></i>
                                                            <div>                      
                                                                <p>Wie habe das gemacht?</p>                      
                                                            </div>
                                                        </div> 
                                                        Die richtige frage ist: Wie kann man x in Abhängigkeit
                                                         von y ausdrücken? <br>
                                                        <h3>Erklärung</h3>
                                                        Wir haben <code>f(x) = 3x</code>. <br>
                                                        Man kann das auch schreiben: 
                                                        <br><code>y = 3x</code> | geteilt durch 3 <br>
                                                        <code><sup>y</sup>/<sub>3</sub> = x</code> | richtige Anordnung <br>
                                                        <code>x = <sup>y</sup>/<sub>3</sub></code>  
                                                        <!-- Bloc tipps -->
                                                        <div class="bloc_tipp_j">
                                                            <i class="fa-sharp fa-solid fa-circle-info"></i>
                                                            <div class="math">                      
                                                                y ist nur ein Wert, den ein Element der Umkehrfunktion
                                                                annehmen kann. 
                                                            </div> 
                                                        </div>        
                                                        Die Umkehrfunktion ist also <code>f<sup>&nbsp;-1</sup>(x) 
                                                            = <sup>y</sup>/<sub>3</sub></code>  
                                                </details>
                                            </li>
                                        </ol>
                                    </div>
                                </details>
                            </li>

                            <!-- Third Chapter -->
                            <li>
                
                                <details class="details_third_j">
                                    <summary>Die Umkehrbarkeit einer Funktion überprüfen.
                                    </summary>
                                    <div>
                                        <p>
                                            Es gibt <b>3 Möglichkeiten</b>, um zu bestimmen, ob eine Funktion
                                            invertierbar ist oder nicht.
                                        </p>
                                        <ol class="under_group_j">
                                            <li>
                                                <details>
                                                    <summary>Methode 1
                                                    </summary>
                                                    <p>
                                                        <h3>Injektivität und surjektivität</h3>
                                                        Wenn eine Funktion <b>injektiv</b> und <b>surjektiv</b> ist,
                                                        dann ist sie auch <b>bijektiv</b>.
                                                        Und jede bijektive Funktion ist auch <b>invertierbar</b>.
                                                    </p>
                                                    <!-- Bloc tipps -->
                                                    <div class="bloc_tipp_j">
                                                        <i class="fa-sharp fa-solid fa-circle-info"></i>
                                                        <div class="math">                      
                                                            Injektivitat und Surjektivitat werden in der Lerneinheit
                                                            zu <a href="">Funktionen</a> erklart.
                                                        </div> 
                                                    </div>
                                                    <h4>Kurze Wiedeholung</h4>
                                                    <p>
                                                        Sei die Funktion <span class="math">f&nbsp;</span> definiert durch: <br>
                                                        <span class="math4">f: X &#10141; Y</span><br>
                                                        <span class="math4">f(x) = y</span><br>
                                                        Die Funktion <span class="math">f&nbsp;</span> ist 
                                                        <span style="color: #00d527;">injektiv</span>, wenn <cite>Element 
                                                        <span class="math">x</span> in <span class="math">X</span> maximal 
                                                        einem Element <span class="math">y</span> in der Menge 
                                                        <span class="math">Y</span> entspricht. </cite> <br>
                                                        Die Funktion <span class="math">f&nbsp;</span> ist 
                                                        <span style="color: #00d527;">surjektiv</span>, wenn <cite>Element 
                                                        <span class="math">x</span> in <span class="math">X</span> minimal 
                                                        einem Element <span class="math">y</span> in der Menge 
                                                        <span class="math">Y</span> entspricht. </cite> <br>
                                                        Da unten sie ein paar Beispiel, wie 
                                                    </p>
                                                    <h4>
                                                        Beispiel mit Menges-Bildern
                                                    </h4>
                                                    <h4>Beispiel 1</h4>
                                                    <figure class="illustration_bild_j">
                                                        <img src="/umkehrfunktion/beispiel_menge_1.png" alt="nicht bijektive function">
                                                        <figcaption><cite>Beispiel 1: Bijektivität</cite></figcaption>
                                                    </figure>
                                                    <p>
                                                        Die Funktion <span class="math">f&nbsp;</span> ist nicht injektiv,
                                                        da die Element <span class="math">c</span> und <span class="math">d</span>
                                                        im Definitionsbereich
                                                        auf dem selben Element (<span class="math">g</span>) im Wertebereich zuweisen. <br>
                                                        Die Funktion <span class="math">f&nbsp;</span> ist nicht surjektiv,
                                                        da der Element <span class="math">b</span> 
                                                        auf dem keinem Element im Wertebereich zuweist. <br>
                                                        <b>Das heißt</b><br>
                                                        Die Funktion <span class="math">f&nbsp;</span> ist also <b>nicht bijektiv</b>
                                                        bwz. <b>hat keine Umkehrfunktion</b>. 

                                                    </p>
                                                    <h4>Beispiel 2</h4>
                                                    <figure class="illustration_bild_j">
                                                        <img src="/umkehrfunktion/beispiel_menge_2.png" alt="nicht bijektive function">
                                                        <figcaption><cite>Beispiel 2: Bijektivität</cite></figcaption>
                                                    </figure>
                                                    <p>
                                                        Die Funktion <span class="math">f&nbsp;</span> ist nicht injektiv,
                                                        da die Element <span class="math">c</span> und <span class="math">d</span>
                                                        im Definitionsbereich
                                                        auf dem selben Element (<span class="math">g</span>) im Wertebereich zuweisen. <br>
                                                        Die Funktion <span class="math">f&nbsp;</span> ist surjektiv,
                                                        da jeder Element mindestens 
                                                        auf dem einem Element im Wertebereich zuweist. <br>
                                                        <b>Das heißt</b><br>
                                                        Die Funktion <span class="math">f&nbsp;</span> ist also <b>nicht bijektiv</b>
                                                        , obwohl sie <b>surjektiv</b> ist.
                                                    </p>
                                                    <h4>Beispiel 3</h4>
                                                    <figure class="illustration_bild_j">
                                                        <img src="/umkehrfunktion/beispiel_menge_3.png" alt="nicht bijektive function">
                                                        <figcaption><cite>Beispiel 3: Bijektivität</cite></figcaption>
                                                    </figure>
                                                    <p>
                                                        Die Funktion <span class="math">f&nbsp;</span> ist injektiv,
                                                        da jeder Element im Definitionsbereich maximal
                                                        auf einem Element im Wertebereich zuweist. <br>
                                                        Die Funktion <span class="math">f&nbsp;</span> ist auch surjektiv,
                                                        da jeder Element mindestens 
                                                        auf dem einem Element im Wertebereich zuweist. <br>
                                                        <b>Das heißt</b><br>
                                                        Die Funktion <span class="math">f&nbsp;</span> ist also <b> bijektiv</b>
                                                        bzw. hat eine Umkehrfunktion, da sie <b>injektiv</b> und <b>surjektiv</b> ist.
                                                    </p>
                                                    <!-- Bloc tipps -->
                                                    <div class="bloc_tipp_j">
                                                        <i class="fa-sharp fa-solid fa-circle-info"></i>
                                                        <div class="math">                      
                                                            Injektivitat und Surjektivitat werden in der Lerneinheit
                                                            zu <a href="">Funktionen</a> mehr erklärt.
                                                        </div> 
                                                    </div>
                                                                                                                                                          
                                                </details>
                                            </li>
                                            <li>
                                                <details>
                                                    <summary>Methode 2
                                                    </summary>
                                                    
                                                        <h3>Mit dem Graphen der Funktion</h3>
                                                        <p>
                                                            Man kann auch die Umkehbarkeit einer Funktion
                                                            mithilfe seiner graphischen Darstellung prüfen.
                                                        </p>
                                                        <figure class="illustration_bild_j">
                                                            <img src="/umkehrfunktion/graph_fonction.png" alt="graph von www.alloprof.qc.ca">
                                                            <figcaption><cite>Graph: Umkehrfuntion von www.alloprof.qc.ca</cite></figcaption>
                                                        </figure>
                                                        <p>
                                                            <span class="math">f&nbsp;</span> und <span class="math">g&nbsp;</span>
                                                            sind zwei Funktionen, die in diesem Graphen
                                                            abgebildet sind. Wenn man alle Punkte, an denen <span class="math">f&nbsp;</span>
                                                            und <span class="math">g&nbsp;</span> sichaufeinandertreffen,
                                                            erhält man die Funktionsgerade, die durch <code>f(x) = x</code>
                                                            definiert ist, was bedeutet, dass <span class="math">f&nbsp;</span>
                                                             und <span class="math">g&nbsp;</span> <b>symmetrisch</b>
                                                            zu dieser Achse sind. Und folglich ist <span class="math">g&nbsp;</span> <b>die Umkehrfunktion</b> 
                                                            von <span class="math">f&nbsp;</span> und umgekehrt.
                                                        </p>
                                                </details>
                                            </li>
                                            <li>
                                                <details>
                                                    <summary>Methode 3
                                                    </summary>
                                                    <h3>Durch Berechnung</h3>
                                                    <p>
                                                        
                                                        Ein andere Möglichkeit wäre den <b>arithmetischen
                                                        Ausdruck</b> der Funktion zu benutzen.
                                                        Sei <span class="math">f&nbsp;</span> eine Funktion
                                                        definiert durch: <br><code>y = 4x + 1</code><br>
                                                        Das Ziel ist es, den arithmetischen Ausdruck der Funktion
                                                        zu verwenden. Wenn es uns gelingt, den Ausdruck von <span class="math">x</span> in 
                                                        Bezug auf <span class="math">y</span> zu bestimmen, dann ist <span class="math">f&nbsp;</span>
                                                        <span style="color: #00d527;">invertierbar</span>.

                                                        <br>In unserem Beispiel gilt <br>
                                                        <code>y = 4x + 1</code> | - 1 <br>
                                                        <code>y - 1 = 4x</code> &nbsp;| dividiert durch 4<br>
                                                        <code><sup>y - 1</sup>/<sub>4</sub> = x</code> &nbsp;| Änderung der Positionierung<br>
                                                        <code>x = <sup>y - 1</sup>/<sub>4</sub></code><br>

                                                        Wir konnten den Ausdruck für <span class="math">x</span> 
                                                        aus dem Ausdruck für <span class="math">y</span> ableiten. 
                                                        Daher ist <span class="math">f&nbsp;</span> <b>invertierbar</b> und 
                                                        der Ausdruck seiner Umkehrfunktion:
                                                        <code>f&nbsp;<sup>-1</sup>(x) = y - <sup>1</sup>/<sub>4</sub></code>
                                                    </p>
                                                    <h4>Ausnahme</h4>
                                                    <p>
                                                        <code>f(x) = x<sup>2</sup></code> ist <b>keine bijektive</b> Funktion, denn 
                                                        wenn <code>y = x<sup>2</sup></code>
                                                        dann heißt <code>x = &#8730;y</code>.<br>
                                                        Das Problem ist, dass eine Zahl unbedingt positiv sein muss, 
                                                        um ihre Quadratwurzel zu bestimmen. Wir müssen also das Intervall
                                                        der Ergebnismenge verkleinern, um die Umkehrfunktion zu erhalten. 
                                                        Das bedeutet, dass man nicht sagen kann, dass die Wurzelfunktion 
                                                        <b>vollständig bijektiv</b> ist.                                                        
                                                    </p>
                                                    <!-- Bloc question -->
                                                    <div class="bloc_question_j">
                                                        <i class="fa-solid fa-circle-question"></i>
                                                        <div>                      
                                                            <p>Ist das Bezahlen eines Produkts mit Geld eine
                                                                 bijektive Funktion? </p>                      
                                                        </div>
                                                    </div> 
                                                </details>
                                            </li>
                                        </ol>
                                    </div>
                                </details>
                            </li>
                            <!-- Recap -->
                            <li>
                                <details class="details_third_j">
                                    <summary>Zusammenfassung
                                    </summary>
                                    <div>
                                        <ol class="under_group_j">
                                            <li>
                                                <details>
                                                    <summary>War allles klar?
                                                    </summary>
                                                    <p>
                                                        Wie wir gesehen haben, gibt es viele Beispiele
                                                        für die Anwendung der Umkehrfunktion im täglichen
                                                        Leben. 
                                                        Hier sind noch einmal die <b>Ziele</b>, die du in dieser 
                                                        Lektion erreichen musstest. 
                                                    </p>  
                                                    <!-- Goal of the lection -->
                                                    <div class="bloc_goal_j">
                                                        <i class="fa-solid fa-circle-check"></i>
                                                        <div>                     
                                                            <b>Ziele diser Lektion</b> <br>
                                                            <ul>
                                                                <li>
                                                                    Die Umkehrfunktion mit deinen <b>einigen Wörter </b>erklären<br>
                                                                </li>
                                                                <li>
                                                                    Beispiele Umsetzung von Umkehrfunktion aus dem Alltag nennen <br>
                                                                </li>
                                                                <li>
                                                                    Überprüfen ob eine Funktion <b>bijektiv</b> ist<br>
                                                                </li>
                                                                <li>
                                                                    Die Umkehrfunktion einer Funktion ermitteln<br>
                                                                </li>
                                                                <li>
                                                                    Den Graph einer Umkehrfunktion einer Funktion zeischen<br>
                                                                </li>
                                                            </ul>    
                                                        </div>   
                                                    </div>  
                                                        
                                                    <h4>Welche konntest du bis jetzt erreichen?</h4>

                                                    <h4>Wie hat dir der Unterricht gefallen?</h4>
                                                    <p>
                                                        Gib deine Meinung <a href="">hier</a> ab.
                                                    </p>
                                                </details>
                                            </li>
                                            <li>
                                                <details>
                                                    <summary>Weiter zur Übungen
                                                    </summary>
                                                    
                                                    <h4>Herzlichen Glückwunsch!</h4>
                                                    <p>
                                                        Du hast da geschafft diese Lektion bis hier 
                                                        zu lesen. Ich hoffe sie war wirklich leicht
                                                        zu verstehen.
                                                    </p>
                                                    <!-- Sart the lection button -->
                                                    <div class="container_button_j">
                                                        <!-- <a href="../oberstufe_startSeite.html"><button class="button_move_j" type="button">Lektion  Starten</button></a> -->
                                                        <button class="button_move_j" onclick="onload_set('Start_Übung')">Übung Starten</button>
                                                    </div>
                                                </details>
                                            </li>
                                        </ol>
                                    </div>
                                </details>
                            </li>
                        </ol>
                    </div>
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
                            
                            <input type="radio" id="q1_ja_j" name="question1_j" 
                            <?php if (isset($question1_j) && $question1_j=="Ja") echo "checked";?>
                            value="Ja">
                            <label for="ja">Ja</label><br>
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
                                <img src="/umkehrfunktion/beispiel_menge_2.png" alt="nicht bijektive function">
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
                        <button class="button_move_j" onclick="onload_set('Start_Lösung')">Lösung sehen</button>
                    </div>  
                </div>

                <div id="Lösung" class="tabcontent">
                    <div class="list_second_j">
                    </div>
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
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
                <button id="Start_Kurs" onclick='window.location.href="kurs.php"'
                style="background-color: #b397b3;">Kurs</button>
                <button id="Start_Übung" onclick='window.location.href="ubung.php"'>Übung</button>
                <button id="Start_Lösung" onclick='window.location.href="losung.php"'>Lösung</button>
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
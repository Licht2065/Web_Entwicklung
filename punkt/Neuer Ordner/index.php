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
  <body onload = onload_j()>
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
    
    <div class = "left">
        <h2 style="text-align: center;">Die Umkehrfunktion</h2>
        <img class="aside_img_j" src="../Bilder/Bilder_Arbeit/bewerbe_bei_uns.jpg" 
        alt="nachhilfekurs">
        <!-- Glossair -->
        <details id="open_inhalt_verzeichis" class="details_first_j">
            <summary>Inhaltsverzeichnis
            </summary>
            <div class="list_tab_j">
                <ol>
                    <li>
                        <!-- ---- Kurs ---- -->
                        <details id="open_inhalt_kurs" class="details_second_j">
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
    </div>

    <!-- main on the left side -->
    <main>
        <div id="sticky1">
            <button id="Start_onLoad" onclick='window.location.href="index.php"'
            style="background-color: #b397b3;">Start</button>
            <button id="Start_Kurs" onclick='window.location.href="kurs.php"'>Kurs</button>
            <button id="Start_Übung" onclick='window.location.href="ubung.php"'>Übung</button>
            <button id="Start_Lösung" onclick='window.location.href="losung.php"'>Lösung</button>
        </div>
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

        <!-- Glossair -->
        <div class="inhaltverzeichnis_j">
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
        </div>
        
        

        <!-- Do you to be help at home for your lessons -->
        <div class="nachhilfekurs_j">
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
        </div>

        <!-- Do you want to work with us? -->
        <div class="wirsuchendich_j">
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
 
    </main>   

    <!-- Aside on the right side !!!--> 
    <aside>
        <h2 style="text-align: center;">Nachhilfekurs gesucht?</h2>
        <img class="aside_img_j" src="../Bilder/Bilder_Arbeit/bewerbe_bei_uns.jpg" alt="nachhilfekurs">
        <p>Wir helfen dir gern egal ob <span style="color: #00d527;">online</span>  
                oder <span style="color: #00d527;">offline</span> die Mathematik und 
                Physik zu verstehen bzw. meisten. Klick einfach auf diesem
                <a href="../arbeitmoeglichkeit.html">Link</a>, um alle Informationen 
                darüber zu haben.
        </p>
        <h2 style="text-align: center;">Wir suchen dich!</h2>
        <img class="aside_img_j" src="../Bilder/Bilder_Arbeit/bewerbe_bei_uns.jpg" alt="nachhilfekurs">
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
    </aside>

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
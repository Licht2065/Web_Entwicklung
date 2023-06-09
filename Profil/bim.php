<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8" />
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- 
        On-Page SEO - Best Practices: Meta Keywords
        Genau 4 mit komma getrennte Meta-Keywords 
    -->
    <meta name="keywords" content="Junior Pablito, The Way, CV, About" />
    <!-- 
        On-Page SEO - Best Practices: Meta Description 
        Genau 75 Zeichen für die Meta Description 
    -->
    <meta name="description" content="Juior Pablito ist ein Webmaster tätig bei The Way: eine wachsende Firma" />
    <!-- 
        On-Page SEO - Best Practices: Title Tag 
        der Titel hat genau 58 Zeichen. Die zeichen [] sind nicht mitgezält
        sie sind da nur für das Sonderzeichen & 
    -->
    <link rel="stylesheet" href="../umkehrfunktion/style.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sansita" />
    <script src="../umkehrfunktion/my_script.js" async></script>
    <title>Junior Pablito: Profil, CV bei The Way</title>
</head>

  <body>
    
    <div class="footer_j_j">
        <span id="update_teacher_j">
                    
                  
                    <form class="formular_teacher_update" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">   
                    <h3 id="jump_hier_on_open">Update or Add Teacher</h3> 
                    <div>
                    <h4>Basic Infos</h4>    
                    <span class="grid_teacher">
                            
                            <label for="vorname">Vorname*</label>
                            <input type="text" name="t_fn" 
                            maxlength="20" required value="<?php echo $t_fn;?>">
                        
                            <label for="nachname">Nachname</label>
                            <input type="text" name="t_ln" 
                            maxlength="20" required value="<?php echo $t_ln;?>">
                        
                            <label for="email">Email</label>
                            <input type="email" name="t_e" 
                            maxlength="25" required value="<?php echo $t_e;?>">
                        
                            <label for="webseite">Webseite</label>
                            <input type="url" name="t_w" 
                            maxlength="25" value="<?php echo $t_w;?>">
                        
                            <label for="Tätigkeit">Tätigkeit</label>
                            <input type="text" name="t_t" 
                            maxlength="25" required value="<?php echo $t_t;?>">
                            
                            <label for="Tel">Tel</label>
                            <input type="tel" name="t_p" placeholder="0 156 89 32529" 
                            pattern="0 [0-9]{3} [0-9]{2} [0-9]{5}"
                            maxlength="25" required value="<?php echo $t_p;?>">
                        </span>
                        
                    </div>
    
                    <div>
                    <h4>Addresse</h4>
        
        <span class="grid_teacher">
            <label for="Straße">Straße</label>
                <input type="text" name="t_str" 
                maxlength="25" required value="<?php echo $t_str;?>">
            
            <label for="Straße Nummer">Straße Nr.</label>
                <input type="text" name="t_str_nr" 
                maxlength="10" required value="<?php echo $t_str_nr;?>">
            
            <label for="Postleizahl">PLZ</label>
                <input type="text" name="t_plz" placeholder="2529" 
                            pattern="[0-9]{5}"
                maxlength="10" required value="<?php echo $t_plz;?>">
            
            <label for="Stadt">Stadt</label>
                <input type="text" name="t_sdt" 
                maxlength="25" required value="<?php echo $t_sdt;?>">
            
            <label for="Land">Land</label>
                <input type="text" name="t_land" 
                maxlength="25" required value="<?php echo $t_land;?>">
        </span>
    
                    </div>
                    
                   <div class="radio_teacher_j">
                   <h4>Gender</h4>
                        <label for="Mann">
                            <input type="radio" name="t_gdr"
                                <?php if (isset($t_gdr) && $t_gdr=="Mann") echo "checked";?> required value="Mann">
                            Mann</label><br>
                        
                        <label for="Frau">
                        <input type="radio" name="t_gdr"
                            <?php if (isset($t_gdr) && $t_gdr=="Frau") echo "checked";?> value="Frau">
                            Frau</label><br>
        
                        <label for="Nicht eingeben">
                        <input type="radio" name="t_gdr"
                            <?php if (isset($t_gdr) && $t_gdr=="Nicht eingeben") echo "checked";?> value="Nicht eingeben">
                            Nicht eingeben</label><br>
        
    
                   </div>     
        
                     <div class="radio_teacher_j">
                        <h4>Familienstand</h4>
                        <label for="Ledig">
                            <input type="radio" name="t_fsdt"
                                <?php if (isset($t_fsdt) && $t_fsdt=="Ledig") echo "checked";?> required value="Ledig">
                            Ledig</label><br>
                        
                        <label for="Verheiratet">
                        <input type="radio" name="t_fsdt"
                            <?php if (isset($t_fsdt) && $t_fsdt=="Verheiratet") echo "checked";?> value="Verheiratet">
                            Verheiratet</label><br>
        
                        <label for="Geschieden">
                        <input type="radio" name="t_fsdt"
                            <?php if (isset($t_fsdt) && $t_fsdt=="Geschieden") echo "checked";?> value="Geschieden">
                            Geschieden</label><br>
        
                        <label for="Verliebt">
                        <input type="radio" name="t_fsdt"
                            <?php if (isset($t_fsdt) && $t_fsdt=="Verliebt") echo "checked";?> value="Verliebt">
                            Verliebt</label><br>
                     </div>  
                     <div class="radio_teacher_j">
                        <h4>Profil photo</h4>
                        <label for="photo 1">
                            <input type="radio" name="t_ph"
                                <?php if (isset($t_ph) && $t_ph=="photo1.jpeg") echo "checked";?> required value="photo1.jpeg">
                            Photo 1</label><br>
                        
                        <label for="photo 2">
                        <input type="radio" name="t_ph"
                            <?php if (isset($t_ph) && $t_ph=="photo2.jpeg") echo "checked";?> value="photo2.jpeg">
                            Photo 2</label><br>
        
                        <label for="photo 3">
                        <input type="radio" name="t_ph"
                            <?php if (isset($t_ph) && $t_ph=="photo3.jpeg") echo "checked";?> value="photo3.jpeg">
                            Photo 3</label><br>
        
                        <label for="photo 4">
                        <input type="radio" name="t_ph"
                            <?php if (isset($t_ph) && $t_ph=="photo4.jpeg") echo "checked";?> value="photo4.jpeg">
                            Photo 4</label><br>
                     </div>   
    
                     <div>
                        <h4>Hobbys <span id="max_hobby" style="color: red;"></span>
                            <button type="button" onclick="add_hobby()">
                                +
                            </button>
                        </h4>
                        <span class="grid_teacher">
                            <label for="Hobby Name">Name</label>
                                <input type="text" name="h_n" 
                                maxlength="25" required value="<?php echo $h_n;?>">
                        </span>
                        Beschreibung        
                        <textarea placeholder="Gibt was ein.." 
                        value="<?php echo $h_b;?>" name="h_b"></textarea>
    
                        <span id="hobby_j_1">
                            <h4>Hobby 2
                                <button type="button" onclick='close_hobby("hobby_j_1")'>
                                    -
                                </button>
                            </h4>
                            <span class="grid_teacher">
                                <label for="Hobby Name">Name</label>
                                    <input type="text" id="h_n1" name="h_n1" 
                                    maxlength="25" value="<?php echo $h_n1;?>">
                            </span>
                            Beschreibung        
                            <textarea placeholder="Gibt was ein.." id="h_b1" 
                            value="<?php echo $h_b1;?>" name="h_b1"></textarea>
                        </span>
                        <span id="hobby_j_2">
                            <h4>Hobby 3
                                <button type="button" onclick='close_hobby("hobby_j_2")'>
                                    -
                                </button>
                            </h4>
                            <span class="grid_teacher">
                                <label for="Hobby Name">Name</label>
                                    <input type="text" id="h_n2" name="h_n2" 
                                    maxlength="25" value="<?php echo $h_n2;?>">
                            </span>
                            Beschreibung        
                            <textarea placeholder="Gibt was ein.." id="h_b2" 
                            value="<?php echo $h_b2;?>" name="h_b2"></textarea>
                        </span>
                        <span id="hobby_j_3">
                            <h4>Hobby 4
                                <button type="button" onclick='close_hobby("hobby_j_3")'>
                                    -
                                </button>
                            </h4>
                            <span class="grid_teacher">
                                <label for="Hobby Name">Name</label>
                                    <input type="text" id="h_n3" name="h_n3" 
                                    maxlength="25" value="<?php echo $h_n3;?>">
                            </span>
                            Beschreibung        
                            <textarea placeholder="Gibt was ein.." id="h_b3" 
                            name="h_b3" value="<?php echo $h_b3;?>"></textarea>
                        </span>
                     </div>
    
                     <div>
                     <h4>Beruf <span id="max_beruf" style="color: red;"></span>
                            <button type="button" onclick="add_beruf()">
                                +
                            </button>
                        </h4>
                        <span class="grid_teacher">
                            <label for="Beruf Name">Name</label>
                                <input type="text" name="b_n" 
                                maxlength="25" required value="<?php echo $b_n;?>">
                        </span>
    
                        <b>Addresse</b>        
                        <span class="grid_teacher">
                            <label for="Straße">Straße</label>
                                <input type="text" name="b_str" 
                                maxlength="25" required value="<?php echo $b_str;?>">
                            
                            <label for="Straße Nummer">Straße Nr.</label>
                                <input type="text" name="b_str_nr" 
                                maxlength="10" required value="<?php echo $b_str_nr;?>">
                            
                            <label for="Postleizahl">PLZ</label>
                                <input type="text" name="b_plz" placeholder="2529" 
                            pattern="[0-9]{5}"
                                maxlength="10" required value="<?php echo $b_plz;?>">
                            
                            <label for="Stadt">Stadt</label>
                                <input type="text" name="b_sdt" 
                                maxlength="25" required value="<?php echo $b_sdt;?>">
                            
                            <label for="Land">Land</label>
                                <input type="text" name="b_land" 
                                maxlength="25" required value="<?php echo $b_land;?>">
                        </span>
    
                        <span id="beruf_j_1">
                            <h4>Beruf 2
                                <button type="button" onclick='close_beruf("beruf_j_1")'>
                                    -
                                </button>
                            </h4>
                            <span class="grid_teacher">
                                <label for="Beruf Name">Name</label>
                                    <input type="text" id="b_n1" name="b_n1" 
                                    maxlength="25" value="<?php echo $b_n1;?>">
                            </span>
    
                            <b>Addresse</b>     
                            <span class="grid_teacher">
                                <label for="Straße">Straße</label>
                                    <input type="text" id="b_str1" name="b_str1" 
                                    maxlength="25" value="<?php echo $b_str1;?>">
                                
                                <label for="Straße Nummer">Straße Nr.</label>
                                    <input type="text" name="b_str_nr1" id="b_str_nr1" 
                                    maxlength="10" value="<?php echo $b_str_nr1;?>">
                                
                                <label for="Postleizahl">PLZ</label>
                                    <input type="text" name="b_plz1" id="b_plz1" placeholder="2529" 
                            pattern="[0-9]{5}"
                                    maxlength="10" value="<?php echo $b_plz1;?>">
                                
                                <label for="Stadt">Stadt</label>
                                    <input type="text" name="b_sdt1" id="b_sdt1"
                                    maxlength="25" value="<?php echo $b_sdt1;?>">
                                
                                <label for="Land">Land</label>
                                    <input type="text" name="b_land1" id="b_land1"
                                    maxlength="25" value="<?php echo $b_land1;?>">
                            </span>
                        </span>
    
                        <span id="beruf_j_2">
                            <h4>Beruf 3
                                <button type="button" onclick='close_beruf("beruf_j_2")'>
                                    -
                                </button>
                            </h4>
                            <span class="grid_teacher">
                                <label for="Beruf Name">Name</label>
                                    <input type="text" name="b_n2"  id="b_n2"
                                    maxlength="25" value="<?php echo $b_n2;?>">
                            </span>
    
                            <b>Addresse</b>       
                            <span class="grid_teacher">
                                <label for="Straße">Straße</label>
                                    <input type="text" name="b_str2" id="b_str2"
                                    maxlength="25" value="<?php echo $b_str2;?>">
                                
                                <label for="Straße Nummer">Straße Nr.</label>
                                    <input type="text" name="b_str_nr2" id="b_str_nr2"  
                                    maxlength="10" value="<?php echo $b_str_nr2;?>">
                                
                                <label for="Postleizahl">PLZ</label>
                                    <input type="text" name="b_plz2" id="b_plz2" placeholder="2529" 
                            pattern="[0-9]{5}"
                                    maxlength="10" value="<?php echo $b_plz2;?>">
                                
                                <label for="Stadt">Stadt</label>
                                    <input type="text" name="b_sdt2" id="b_sdt2" 
                                    maxlength="25" value="<?php echo $b_sdt2;?>">
                                
                                <label for="Land">Land</label>
                                    <input type="text" name="b_land2" id="b_land2" 
                                    maxlength="25" value="<?php echo $b_land2;?>">
                            </span>
                        </span>
    
                        
                        <span id="beruf_j_3">
                            <h4>Beruf 4
                                <button type="button" onclick='close_beruf("beruf_j_3")'>
                                    -
                                </button>
                            </h4>
                            <span class="grid_teacher">
                                <label for="Beruf Name">Name</label>
                                    <input type="text" name="b_n3" id="b_n3" 
                                    maxlength="25" value="<?php echo $b_n3;?>">
                            </span>
    
                            <b>Addresse</b>       
                            <span class="grid_teacher">
                                <label for="Straße">Straße</label>
                                    <input type="text" name="b_str3" id="b_str3" 
                                    maxlength="25" value="<?php echo $b_str3;?>">
                                
                                <label for="Straße Nummer">Straße Nr.</label>
                                    <input type="text" name="b_str_nr3" id="b_str_nr3" 
                                    maxlength="10" value="<?php echo $b_str_nr3;?>">
                                
                                <label for="Postleizahl">PLZ</label>
                                    <input type="text" name="b_plz3" id="b_plz3" placeholder="2529" 
                            pattern="[0-9]{5}"
                                    maxlength="10" value="<?php echo $b_plz3;?>">
                                
                                <label for="Stadt">Stadt</label>
                                    <input type="text" name="b_sdt3" id="b_sdt3" 
                                    maxlength="25" value="<?php echo $b_sdt3;?>">
                                
                                <label for="Land">Land</label>
                                    <input type="text" name="b_land3" id="b_land3" 
                                    maxlength="25" value="<?php echo $b_land3;?>">
                            </span>
                        </span>
    
    
                     </div>
    
                     <div>
                        <h4>Contributions <span id="max_ctr" style="color: red;"></span>
                            <button type="button" onclick="add_ctr()">
                                +
                            </button>
                        </h4>
                        <span class="grid_teacher">
                            <label for="Contribution Name">Name</label>
                                <input type="text" name="ctr_n" 
                                maxlength="25" required value="<?php echo $ctr_n;?>">
                        </span>
                        Beschreibung        
                        <textarea placeholder="Gibt was ein.." 
                        value="<?php echo $ctr_b;?>" name="ctr_b"></textarea>
    
                        <span id="ctr_j_1">
                            <h4>Contribution 2
                                <button type="button" onclick='close_ctr("ctr_j_1")'>
                                    -
                                </button>
                            </h4>
                            <span class="grid_teacher">
                                <label for="Contribution Name">Name</label>
                                    <input type="text" id="ctr_n1" name="ctr_n1" 
                                    maxlength="25" value="<?php echo $ctr_n1;?>">
                            </span>
                            Beschreibung        
                            <textarea placeholder="Gibt was ein.." id="ctr_b1" 
                            value="<?php echo $ctr_b1;?>" name="ctr_b1"></textarea>
                        </span>
                        <span id="ctr_j_2">
                            <h4>Contribution 3
                                <button type="button" onclick='close_ctr("ctr_j_2")'>
                                    -
                                </button>
                            </h4>
                            <span class="grid_teacher">
                                <label for="Contribution Name">Name</label>
                                    <input type="text" id="ctr_n2" name="ctr_n2" 
                                    maxlength="25" value="<?php echo $ctr_n2;?>">
                            </span>
                            Beschreibung        
                            <textarea placeholder="Gibt was ein.." id="ctr_b2" 
                            value="<?php echo $ctr_b2;?>" name="ctr_b2"></textarea>
                        </span>
                        <span id="ctr_j_3">
                            <h4>Contribution 4
                                <button type="button" onclick='close_ctr("ctr_j_3")'>
                                    -
                                </button>
                            </h4>
                            <span class="grid_teacher">
                                <label for="Contribution Name">Name</label>
                                    <input type="text" id="ctr_n3" name="ctr_n3" 
                                    maxlength="25" value="<?php echo $ctr_n3;?>">
                            </span>
                            Beschreibung        
                            <textarea placeholder="Gibt was ein.." id="ctr_b3" 
                            name="ctr_b3" value="<?php echo $ctr_b3;?>"></textarea>
                        </span>
                     </div>
    
        
                    <br>
                    <div class="animated_b_container_j">
                        <input class="animated_bottom_j" type="submit" value="Absenden">
                        <br>
                        <button type="button" class="animated_bottom_j" onclick="close_formular()">
                        Cancel</button>
                    </div>
                    </form>
                
                    </span>
            <div class="footer_general_j">
                <section>
                    <img src="../Bilder/Logo/Logo_2.svg" alt="Logo the The Way" />
                    <p>China Town 16<br />80791 Newyork<br />USA</p>
                </section>
                <section>
                    <h4>Contact</h4>
                    <a href="">Schreib uns</a><br />
                    <a href="">Contact 2</a>
                </section>
                <section>
                    <h4>Service</h4>
                    <a href="">Nachhilfekurs</a><br />
                    <a href="">Arbeitmöglichkeiten</a>
                </section>
                <section>
                    <h4>About us</h4>
                    <a href="">Wer sind wir?</a><br />
                    <a href="">Junior Pablito's profil page</a><br />
                    <a href="">Lise Delmonte's profil page</a><br />
                    <a href="">Suzy Lirandra's profil page</a>
                </section>
            </div>
        </div>
    </body>
    
    </html>
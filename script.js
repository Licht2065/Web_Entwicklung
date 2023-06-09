/*Herstellung von Variablen*/
let toggle_var = document.getElementsByClassName("toogle");
let nav_var = document.getElementsByTagName("nav");
let aside_kurs = document.getElementById("aside_id_kurs");

// Für die Bewegung von Bilder Text und Div
let bool = true;
let bool_0 = true;
console.log(toggle_var);
//Beweg den Toggle wenn der User darauf geklickt hast
toggle_var[0].addEventListener("click", function () {
  if (bool) {
    bool = false;
    toggle_var[1].style.transition = "all 0.5s";
    toggle_var[1].style.transform = "translateX(-10px)";
    toggle_var[2].style.transition = "all 0.5s";

    toggle_var[2].style.transform = "translateX(-30px)";
    toggle_var[3].style.transition = "all 0.5s";

    toggle_var[3].style.transform = "translateX(-10px)";
    nav_var[0].style.transition = "all 1s";
    nav_var[0].style.display = "inline";
  } else {
    toggle_var[1].style.transform = "translateX(0px)";
    toggle_var[2].style.transform = "translateX(0px)";
    toggle_var[3].style.transform = "translateX(0px)";
    nav_var[0].style.display = "none";
    bool = true;
  }
});
// Zweite Toogle
window.addEventListener("resize", function () {
  if (window.matchMedia("(min-width: 500px)").matches) {
    nav_var[0].style.display = "flex";
    aside_kurs.style.display = "flex";
  } else {
    nav_var[0].style.display = "none";
    aside_kurs.style.display = "none";
  }
});

try {
  let array = document.getElementsByClassName("Zeugnis_bilder");
  let next_prev = document.getElementsByClassName("next_prev");
  let first_bild = array[1].innerHTML;
  let second_bild = array[2].innerHTML;
  let first_text = array[3].innerHTML;
  let second_text = array[4].innerHTML;

  // Für die Bewegung von der Bilder und Text

  next_prev[1].addEventListener("click", function () {
    array[1].innerHTML = first_bild;
    array[3].innerHTML = first_text;
    next_prev[1].style.backgroundColor = "rgb(205, 66, 66)";
    next_prev[2].style.backgroundColor = "rgb(225, 190, 190)";
  });

  next_prev[2].addEventListener("click", function () {
    array[1].innerHTML = second_bild;
    array[3].innerHTML = second_text;
    next_prev[1].style.backgroundColor = "rgb(225, 190, 190)";
    next_prev[2].style.backgroundColor = "rgb(205, 66, 66)";
  });
} catch {}

// wenn der Benutzer ein Kommentar geschickt hat, nehmen alle Informationen der Benutzer und bekommen wir es per Email

try {
  let form = document.getElementsByName("contact_form");

  form[0].addEventListener("submit", function (event) {
    event.preventDefault();
    let vorname = document.getElementById("vorname");
    let nachname = document.getElementById("name");
    let email = document.getElementById("email");
    let commented = document.getElementById("comment");
    if (commented.value == "") {
      commented.style.borderLeftColor = "red";
    } else {
      let comment = {
        name_: nachname.value,
        second_name: vorname.value,
        email_: email.value,
        kommentar: commented.value
      };
      commented.style.borderLeftColor = "black";
      //Mit der API smtjs.com sind wir dabei die Smtp.elasticemail tu nutzen um eine MAil zu schicken
      Email.send({
        Host: "smtp.elasticemail.com",
        Username: "emafinanz@gmail.com",
        Password: "7D9BC1C61A08D12293150D6E82C7F9B5A32D",
        To: "emafinanz@gmail.com",
        From: "emafinanz@gmail.com",
        Subject: "Bewerbung",
        Body:
          "Name: " +
          comment.name_ +
          " " +
          "Vorname:" +
          comment.second_name +
          "<br> Email:" +
          " " +
          comment.email_ +
          "<br> Kommentar:" +
          comment.kommentar,
      }).then((message) => alert(message));
      alert("Danke schön dein Kommentar wurde gesendet");
    }
  });
} catch {}

// Formular Arbeitmöglicjkeit

try {
  let change = document.getElementsByName("Höchste_Bildung_liste")[0];
  change.addEventListener("change", function (event) {
    event.preventDefault();
    let choice = [].filter
      .call(change.options, (Option) => Option.selected)
      .map((Option) => Option.text);
    let feld_anderes = document.getElementById("anderes");
    if (choice[0] == "etwas anderes") {
      feld_anderes.style.display = "inline";
    } else {
      feld_anderes.style.display = "none";
    }
  });
  // Wenn der Benutzer das Formular für die Stelle ausfühl sind wir dabei die Inforation in einer Objekt zu speicher und ein Mail zu schicken
  let arbeit_form = document.getElementsByClassName("forme_");
  arbeit_form[0].addEventListener("submit", function (event) {
    event.preventDefault();
    let vorname = document.getElementsByName("vorname_input")[0].value;
    let nachname = document.getElementsByName("name_input")[0].value;
    let geburt = document.getElementsByName("date_input")[0].value;
    let email = document.getElementsByName("email")[0].value;
    let tel = document.getElementsByName("telephone_nummer")[0].value;
    let adresse =
      document.getElementsByName("strasse")[0].value +
      " " +
      document.getElementsByName("hausnummer")[0].value +
      " " +
      document.getElementsByName("plz")[0].value +
      " " +
      document.getElementsByName("stadt")[0].value;
    let fach = [].filter
      .call(
        document.getElementsByName("Fächer_liste")[0].options,
        (Option) => Option.selected
      )
      .map((Option) => Option.text);
    let bildung = [].filter
      .call(
        document.getElementsByName("Höchste_Bildung_liste")[0].options,
        (Option) => Option.selected
      )
      .map((Option) => Option.text);
    let recruit = {
      Second_name: vorname,
      First_name: nachname,
      Geburtstag: geburt,
      Email: email,
      telefonnummer: tel,
      adress: adresse,
      facher: fach[0],
      bildungs: bildung[0],
    };
    Email.send({
      Host: "smtp.elasticemail.com",
      Username: "emafinanz@gmail.com",
      Password: "7D9BC1C61A08D12293150D6E82C7F9B5A32D",
      To: "emafinanz@gmail.com",
      From: recruit.Email,
      Subject: "Bewerbung",
      Body:
        "Name: " +
        recruit.First_name +
        " " +
        "Vorname:" +
        recruit.Second_name +
        "<br> Email:" +
        " " +
        recruit.Email +
        "<br> Geburtstag:" +
        recruit.Geburtstag +
        "<br>  Tel:" +
        recruit.telefonnummer +
        "<br> Adress: " +
        recruit.adress +
        "<br> Fach:" +
        recruit.facher +
        "<br> Bildungs: " +
        recruit.bildungs,
    }).then((message) => alert(message));

    alert("Ihre Bewerbung wurde geschickt");
  });
} catch {}

/*---------------------------------------------------------------------------------- JS von der Nav und Botto des Vorlesung ------------------------------------------------------------------*/

try {
  let nav_botton = document.getElementById("main_id_kurs");
  let plus_minus = true;
  let first_span_minus = document.getElementById("span_1");
  let aside_kurs = document.getElementById("aside_id_kurs");
  console.log(nav_botton);
  nav_botton.addEventListener("click", function (event) {
    event.preventDefault();

    if (plus_minus) {
      console.log(plus_minus);
      nav_botton.style.right = "80%";
      first_span_minus.style.display = "none";
      aside_kurs.style.display = "flex";
      plus_minus = false;
    } else {
      console.log(plus_minus);
      nav_botton.style.right = "1%";
      first_span_minus.style.display = "block";
      aside_kurs.style.display = "none";
      plus_minus = true;
    }
  });
} catch {}

/*---------------------------------------------------------------------------------- J von der Übung------------------------------------------------------------------*/
let  punkte = 0;
try{
  let note = document.getElementById("meine_note")
  let frage_1 = document.getElementsByName("frage_1_Uebung3");
  let frage_2 = document.getElementsByName("frage_2")
  let frage_3 = document.getElementsByName("frage_3")
  let sure = document.getElementsByName("verification")
  let fehler_bemerkung = document.getElementById("Antwort_feh")
  console.log(frage_2);
  let true_flase = true
  let reponse = [0,0,0];
  for(respons of frage_1){
      respons.addEventListener("change",function (event) {
          event.preventDefault()
          if( this.checked){
              if(this.id == "Frage_3_answer1"){
                  console.log(this.id);
                  punkte+=30;
                 
                  note.innerHTML = punkte.toString()
                  

                  true_flase = true;
              }
              else{
                  if(this.id != "Frage_3_answer1" && true_flase){
                    console.log(note.innerHTML)
                    true_flase = false;

                      punkte-=30;
                      note.innerHTML = punkte.toString()
                  }  
                }
          }
      }) 
    }                
  for (respons of frage_2) {
    respons.addEventListener("change", function (event) {
      event.preventDefault();
      if (this.checked) {
        if (this.id == "answer1" || this.id == "answer4") {
          punkte += 20;
          note.innerHTML = punkte
     
          
        }
        reponse[1]++;
        console.log(reponse);
      } else {
        if (this.id == "answer1" || this.id == "answer4") {
          punkte -= 20;
          note.innerHTML = punkte

        }
        reponse[1]--;
        console.log(reponse);
      }
    });
  }

  for (respons of frage_3) {
    respons.addEventListener("change", function (event) {
      event.preventDefault();
      if (this.checked) {
        if (this.id == "answer2_1" || this.id == "answer3_1") {
          punkte += 20;
          note.innerHTML = punkte

        }
        reponse[2]++;
      } else {
        if (this.id == "answer2_1" || this.id == "answer3_1") {
          punkte -= 20;
          note.innerHTML = punkte

        }
        reponse[2]--;
      }
    });
  }
} catch{}
   

/*------------------------------ JS Lösung von der Übung ----------------------------------- */
try{
  let vutton_er= document.getElementById("button_124")
  let note =document.getElementById("meine_note")
  let p_resultat = document.getElementById("resultat_prozent");
    //  Progress_Bar
  let background_circle = document.getElementsByClassName("circle_1_1")[0];
  let progress_Circle = document.getElementsByClassName("circle_2_2")[0];
  let radius = progress_Circle.r.baseVal.value;
  let flaeche  = radius* 2 * Math.PI;
  progress_Circle.style.strokeDasharray = flaeche;
  console.log(background_circle);
  console.log(progress_Circle);
  vutton_er.addEventListener("click",function(event){
    event.preventDefault(); 
    console.log(note.innerHTML)
    set_prozess(parseInt(note.innerHTML));
  })
 
  function set_prozess(pro){
            progress_Circle.style.strokeDashoffset = flaeche -(pro/100)*flaeche
        }
        if(punkte > 80){
            background_circle.style.fill= "#43cea2";
        }
        else if( punkte < 40){
            background_circle.style.fill= "#f83600";
        }
        else{
            background_circle.style.fill = "#ffd194";
        }
        p_resultat.innerHTML = punkte +"%";
        if (punkte > 80) {
          background_circle.style.fill = "#43cea2";
        } else if (punkte < 40) {
          background_circle.style.fill = "#f83600";
        } else {
          background_circle.style.fill = "#ffd194";
        }
        
        p_resultat.innerHTML =  note.innerHTML + "%";
        
}
catch{}


try{
  let true_false = true ;
  let v_1 = document.getElementById("pseudo");
  let v_2 = document.getElementById("email");
  let v_3 = document.getElementById("passwort");
  let v_4 = document.getElementsByName("stufe");
  let v_5 = document.getElementById("checkbox_remember_me");
  let v_6 = document.getElementById("libre");
  let v_7 =  document.getElementById("passwort_wiederholen")
  let fehler = document.getElementsByClassName("fehler passwort_wiedeholung")
  v_5.addEventListener("change",function (event) {
      event.preventDefault()
      if(true_false){
        
        if (v_3.value  == v_7.value && v_3.value !=" " && v_7.value != " "){
          v_6.disabled = false;
          true_false = false;
        }
       else{
        
        fehler[0].style.display = "block";
        fehler[0].style.color = "red";
        v_5.checked = false;
        v_6.disabled = true;
        true_false = false;
       }

      }
      else{
        v_6.disabled = true;
        true_false = true;
      }
      
  })
  if(true_false){
    v_6.addEventListener("click",function  (event) {
        event.preventDefault();
        Email.send({
          Host: "smtp.elasticemail.com",
          Username: "emafinanz@gmail.com",
          Password: "7D9BC1C61A08D12293150D6E82C7F9B5A32D",
          To: "emafinanz@gmail.com",
          From: v_2.value,
          Subject: "Bewerbung",
          Body:
            "Danke für Ihre Anmeldung <br> können Sie von der Ünterstützung von unseren Tutoren"
        }).then((message) => alert(message));
    
        alert("Sie wurden angemeldet");
    });
  }
  }catch{}
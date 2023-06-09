// jump to this place
function jump_to_that(dest) {
  window.location.href = dest;
}

// navbar
function openNav() {
  document.getElementById("mySidenav").style.width = "265px";
  document.getElementById("btn_nav_left_j").style.display = "none";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("btn_nav_left_j").style.display = "block";
}

// change image and link for other courses
var img_lection_list = ["../umkehrfunktion/beispiel_menge_3.png", "background_lesson.png"];
var titel_lection_list = ["Umkehrfunktion", "Kurs vorschlagen"];
var link_lection_list = ["index.html", "../contact_us.html"];

var titel_lection_list2 = ["Punkt", "Gravitationskraft"];
var img_lection_list2 = [
  "../punkt/Gruppe 1.png",
  "../Bilder/Bilder_Arbeit/gravitationskraft_Bilder/Gravitationsgesetz.png",
];
var link_lection_list2 = [
  "../punkt/index.html",
  "../Gravitationskraft/gravitation.html",
];

var i_lection = 1;
var i_lection2 = 1;
// const img_lection = document.getElementById("img_lection_j");
function change_img_lection() {
  document.getElementById("img_lection_jk").src = img_lection_list[i_lection];
  document.getElementById("titel_lection_jk").innerHTML =
    titel_lection_list[i_lection];
  if (
    location.pathname == "/umkehrfunktion/index.html" ||
    location.pathname == "/ampharos/umkehrfunktion/index.html" ||
    location.pathname == "ampharos/umkehrfunktion/index.html"
  ) {
    link_lection_list[0] = "index.html#sticky1";
  }
  document.getElementById("link_lection_jk").href =
    link_lection_list[i_lection];
  i_lection == 1 ? (i_lection = 0) : i_lection++;

  // link don't work if we are in the current page
  // ________________ //
  document.getElementById("img_lection_jk2").src =
    img_lection_list2[i_lection2];
  document.getElementById("titel_lection_jk2").innerHTML =
    titel_lection_list2[i_lection2];
  document.getElementById("link_lection_jk2").href =
    link_lection_list2[i_lection2];
  i_lection2 == 1 ? (i_lection2 = 0) : i_lection2++;
}
setInterval(change_img_lection, 5000);

function allowDrop(ev) {
  ev.preventDefault();
}

function drag(ev) {
  ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
  ev.preventDefault();
  var data = ev.dataTransfer.getData("text");
  if (ev.currentTarget.querySelectorAll("img").length > 0) {
    alert("Es gibt schon ein Zeischen hier");
  } else {
    var data = ev.dataTransfer.getData("text");
    ev.target.appendChild(document.getElementById(data));
  }
}
// check the answer of the question 10

function check_last_question() {
  var q1 = document.getElementById("dr_dr_dest1");
  var a1 = document.getElementById("drag3");
  var q2 = document.getElementById("dr_dr_dest2");
  var a2 = document.getElementById("drag7");
  var q3 = document.getElementById("dr_dr_dest3");
  var a3 = document.getElementById("drag8");
  var q4 = document.getElementById("dr_dr_dest4");
  var a4 = document.getElementById("drag2");
  var text = document.getElementById("answer_special_question");
  answer_special_question;
  text.style.display = "block";
  if (
    q1.contains(a1) &&
    q2.contains(a2) &&
    q3.contains(a3) &&
    q4.contains(a4)
  ) {
    text.style.color = "green";
    text.innerHTML = "Gut gemacht. Geschafft!!";
  } else {
    text.style.color = "red";
    text.innerHTML = "Es ist leider falsch! Denk an den ggt!";
  }
}
// check question 10
// Anforderung: eventlistener
document
  .getElementById("q10_testen")
  .addEventListener("click", check_last_question);

function open_details_tag(id) {
  document.getElementById(id).open = true;
}

function onload_j() {
  open_details_tag("open_inhalt_verzeichis");
  open_details_tag("open_inhalt_verzeichis2");
  open_details_tag("open_inhalt_kurs");
  open_details_tag("open_inhalt_kurs2");
}

function on_load_kurs() {
  open_details_tag("open_inhalt_kurs");
  open_details_tag("open_inhalt_kurs_1");
  open_details_tag("open_inhalt_kurs_2");
}

function open_formular() {
  var help = document.getElementById("update_teacher_j");
  var help2 = document.getElementById("close_it_teacher");
  var dest = "jump_to_hier_j";
  help.style.display = "block";
  window.location.hash = dest;
  help2.style.display = "none";
}

function close_formular() {
  var help = document.getElementById("update_teacher_j");
  var help2 = document.getElementById("close_it_teacher");
  help.style.display = "none";
  help2.style.display = "block";
}

function add_hobby() {
  var help = document.getElementById("hobby_j_1");
  var dest = "hobby_j_1";
  document.getElementById("max_hobby").innerHTML = "";
  if (window.getComputedStyle(help).display === "block") {
    help = document.getElementById("hobby_j_2");
    dest = "hobby_j_2";
    if (window.getComputedStyle(help).display === "block") {
      dest = "hobby_j_3";
      help = document.getElementById("hobby_j_3");
      if (window.getComputedStyle(help).display === "block") {
        dest = "max_hobby";
        document.getElementById("max_hobby").innerHTML = "Max 4 Hobbys";
      }
    }
  }
  window.location.hash = dest;
  help.style.display = "block";
}

function close_hobby(hobby_id) {
  if (hobby_id == "hobby_j_1") {
    document.getElementById("hobby_j_1").style.display = "none";
    document.getElementById("hobby_j_2").style.display = "none";
    document.getElementById("hobby_j_3").style.display = "none";
    document.getElementById("h_n1").value = "";
    document.getElementById("h_b1").value = "";
    document.getElementById("h_n2").value = "";
    document.getElementById("h_b2").value = "";
    document.getElementById("h_n3").value = "";
    document.getElementById("h_b3").value = "";
  }
  if (hobby_id == "hobby_j_2") {
    document.getElementById("hobby_j_2").style.display = "none";
    document.getElementById("hobby_j_3").style.display = "none";
    document.getElementById("h_n2").value = "";
    document.getElementById("h_b2").value = "";
    document.getElementById("h_n3").value = "";
    document.getElementById("h_b3").value = "";
  }
  if (hobby_id == "hobby_j_3") {
    document.getElementById("hobby_j_3").style.display = "none";
    document.getElementById("h_n3").value = "";
    document.getElementById("h_b3").value = "";
  }
}

function add_beruf() {
  var help = document.getElementById("beruf_j_1");
  var dest = "beruf_j_1";
  document.getElementById("max_beruf").innerHTML = "";
  if (window.getComputedStyle(help).display === "block") {
    help = document.getElementById("beruf_j_2");
    dest = "beruf_j_2";
    if (window.getComputedStyle(help).display === "block") {
      dest = "beruf_j_3";
      help = document.getElementById("beruf_j_3");
      if (window.getComputedStyle(help).display === "block") {
        dest = "max_beruf";
        document.getElementById("max_beruf").innerHTML = "Max 4 Berufe";
      }
    }
  }
  window.location.hash = dest;
  help.style.display = "block";
}

function close_beruf(hobby_id) {
  if (hobby_id == "beruf_j_1") {
    document.getElementById("beruf_j_1").style.display = "none";
    document.getElementById("beruf_j_2").style.display = "none";
    document.getElementById("beruf_j_3").style.display = "none";
    document.getElementById("b_n1").value = "";
    document.getElementById("b_str1").value = "";
    document.getElementById("b_str_nr1").value = "";
    document.getElementById("b_plz1").value = "";
    document.getElementById("b_sdt1").value = "";
    document.getElementById("b_land1").value = "";
    document.getElementById("b_n2").value = "";
    document.getElementById("b_str2").value = "";
    document.getElementById("b_str_nr2").value = "";
    document.getElementById("b_plz2").value = "";
    document.getElementById("b_sdt2").value = "";
    document.getElementById("b_land2").value = "";
    document.getElementById("b_n3").value = "";
    document.getElementById("b_str3").value = "";
    document.getElementById("b_str_nr3").value = "";
    document.getElementById("b_plz3").value = "";
    document.getElementById("b_sdt3").value = "";
    document.getElementById("b_land3").value = "";
  }
  if (hobby_id == "beruf_j_2") {
    document.getElementById("beruf_j_2").style.display = "none";
    document.getElementById("beruf_j_3").style.display = "none";
    document.getElementById("b_n2").value = "";
    document.getElementById("b_str2").value = "";
    document.getElementById("b_str_nr2").value = "";
    document.getElementById("b_plz2").value = "";
    document.getElementById("b_sdt2").value = "";
    document.getElementById("b_land2").value = "";
    document.getElementById("b_n3").value = "";
    document.getElementById("b_str3").value = "";
    document.getElementById("b_str_nr3").value = "";
    document.getElementById("b_plz3").value = "";
    document.getElementById("b_sdt3").value = "";
    document.getElementById("b_land3").value = "";
  }
  if (hobby_id == "beruf_j_3") {
    document.getElementById("beruf_j_3").style.display = "none";
    document.getElementById("b_n3").value = "";
    document.getElementById("b_str3").value = "";
    document.getElementById("b_str_nr3").value = "";
    document.getElementById("b_plz3").value = "";
    document.getElementById("b_sdt3").value = "";
    document.getElementById("b_land3").value = "";
  }
}

function add_ctr() {
  var help = document.getElementById("ctr_j_1");
  var dest = "ctr_j_1";
  document.getElementById("max_ctr").innerHTML = "";
  if (window.getComputedStyle(help).display === "block") {
    help = document.getElementById("ctr_j_2");
    dest = "ctr_j_2";
    if (window.getComputedStyle(help).display === "block") {
      dest = "ctr_j_3";
      help = document.getElementById("ctr_j_3");
      if (window.getComputedStyle(help).display === "block") {
        dest = "max_ctr";
        document.getElementById("max_ctr").innerHTML = "Max 4 Hobbys";
      }
    }
  }
  window.location.hash = dest;
  help.style.display = "block";
}

function close_ctr(ctr_id) {
  if (ctr_id == "ctr_j_1") {
    document.getElementById("ctr_j_1").style.display = "none";
    document.getElementById("ctr_j_2").style.display = "none";
    document.getElementById("ctr_j_3").style.display = "none";
    document.getElementById("ctr_n1").value = "";
    document.getElementById("ctr_b1").value = "";
    document.getElementById("ctr_n2").value = "";
    document.getElementById("ctr_b2").value = "";
    document.getElementById("ctr_n3").value = "";
    document.getElementById("ctr_b3").value = "";
  }
  if (ctr_id == "ctr_j_2") {
    document.getElementById("ctr_j_2").style.display = "none";
    document.getElementById("ctr_j_3").style.display = "none";
    document.getElementById("ctr_n2").value = "";
    document.getElementById("ctr_b2").value = "";
    document.getElementById("ctr_n3").value = "";
    document.getElementById("ctr_b3").value = "";
  }
  if (ctr_id == "ctr_j_3") {
    document.getElementById("ctr_j_3").style.display = "none";
    document.getElementById("ctr_n3").value = "";
    document.getElementById("ctr_b3").value = "";
  }
}

/* click automatic the start button on laod */
// function onload_set(cityName){
//     // openModule(event, 'Start');
//     document.getElementById(cityName).click();
// }
/* open a specific tab: start, krs, Übung, Lösung*/
// function openModule(evt, cityName) {
//     var i, tabcontent, tablinks;
//     tabcontent = document.getElementsByClassName("tabcontent");
//     for (i = 0; i < tabcontent.length; i++) {
//     tabcontent[i].style.display = "none";
//     }
//     tablinks = document.getElementsByClassName("tablinks");
//     for (i = 0; i < tablinks.length; i++) {
//     tablinks[i].className = tablinks[i].className.replace(" active", "");
//     }
//     document.getElementById(cityName).style.display = "block";
//     evt.currentTarget.className += " active";
//     document.getElementById("header_step_overview").scrollIntoView({behavior: 'smooth'});
//}

//Frage1
function ergebnis_grav1(){
 
  document.getElementById("true_grav1").checked = true;

 coloration_1();
 label_uncheck1();
 decoloration_1(); 
}

function coloration_1(){
  document.getElementById("label_true_grav1").style.color = "green";
}

function label_uncheck1(){
  const co_1=document.getElementsByClassName("false_grav1");
  for(let i = 0; i < co_1.length; i++){
  co_1[i].checked = false;
  }
}

function decoloration_1(){
  const co_2= document.getElementsByClassName("label_false_grav1");
  for(let i = 0; i < co_2.length; i++){
    co_2[i].style.color = "red"
  }
}

function ergebnis_grav2(){
 
  document.getElementById("true_grav2").checked = true;

 coloration_2();
 label_uncheck2();
 decoloration_2(); 
}

function coloration_2(){
  document.getElementById("label_true_grav2").style.color = "green";
}

function label_uncheck2(){
  const co_1=document.getElementsByClassName("false_grav2");
  for(let i = 0; i < co_12.length; i++){
  co_12[i].checked = false;
  }
}

/*function decoloration_2(){
  const co_22= document.getElementsByClassName("label_false_grav2");
  for(let i = 0; i < co_22.length; i++){
    co_22[i].style.color = "red"
  }
}*/





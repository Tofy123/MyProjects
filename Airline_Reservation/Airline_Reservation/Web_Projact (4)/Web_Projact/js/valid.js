/*****************js for the top button To move between login form and Register form *****************/
var vis = document.getElementById('login');
var but = document.getElementById('btn1');
var vis2 = document.getElementById('Reg');
function reg(){
  vis.style.left = "-700px";
  vis2.style.left = "50px";
  but.style.left = "110px";
}
function login(){
  vis.style.left = "50px";
  vis2.style.left ="700px";
  but.style.left = "0px";
}
function visbl(){
  var form = document.getElementsByClassName('form');
  for (var i = 0; i < form.length; i++) {

    form[i].style.visibility = "visible"
  }

}
/******************END of the js for the top button To move between login form and Register form **************/
/*******************js for the validation for the login form***********************/
function validate(){
  var fnam = document.login_form.funame1;
  var passord = document.login_form.pass1;

  var err = document.getElementsByClassName('err');
  if (fnam.value == "") {
    err[0].style.visibility = "visible";
  } else {
    err[0].style.visibility= "hidden";
  }

  if (passord.value == "") {
    err[1].style.visibility = "visible";
  } else {
    err[1].style.visibility = "hidden";
  }
  
}
/*******************END of the js for the validation for the login form***********************/
/*******************js for the validation for the Register form***********************/
function validate2(){
  var fnam = document.Reg_form.funame;
  var passord = document.Reg_form.pass;
  var gnd = document.Reg_form.gender;
  var brday = document.Reg_form.Dateb;
  var rgnd;
  for (var i = 0; i <gnd.length; i++) {
    rgnd = gnd.value;
  }

  var err = document.getElementsByClassName('err');
  if (fnam.value == "") {
    err[2].style.visibility = "visible";
  } else {
    err[2].style.visibility= "hidden";
  }
  if (passord.value == "") {
    err[3].style.visibility = "visible";
  } else {
    err[3].style.visibility = "hidden";
  }
  if (rgnd == "") {
    err[5].style.visibility = "visible";
  } else {
    err[5].style.visibility = "hidden";
  }
  if(brday.value == ""){
    err[4].style.visibility = "visible";
  }
  else{
    err[4].style.visibility = "hidden";
  }
}
/*******************END of the js for the validation for the Register form***********************/
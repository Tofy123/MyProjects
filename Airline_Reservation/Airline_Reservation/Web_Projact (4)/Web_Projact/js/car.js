



function displayFunction() {
   var checkBox = document.getElementById("checkLocation");
   var text = document.getElementById("drop");
   if (checkBox.checked == true){
     drop.style.display = "block";
   } else {
      drop.style.display = "none";
   }
 }
 function validate(){
 
 var err= document.getElementsByClassName("errorMsg");
 
  var loc= document.rent.location.value;
  var piUp = document.rent.PickUp.value;
  var retDate = document.rent.returnDate.value;
 
 
  if (loc == "") {
    err[0].style.visibility = "visible";
    rent.location.style.borderColor= "red";}
   
     else{
        err[0].style.visibility = "hidden";
        }
         if (piUp == "") {
    err[1].style.visibility = "visible";
        }
     else{
        err[1].style.visibility = "hidden";
        }
         if (retDate == "") {
    err[2].style.visibility = "visible";
        }
     else{
        err[2].style.visibility = "hidden";
        }
 
 }
 
 
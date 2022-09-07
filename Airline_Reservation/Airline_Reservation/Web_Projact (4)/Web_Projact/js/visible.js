/*function for determining destination if one way return date faild will disappear */
function destination(){
  var rd= document.flight.round;
  var delet=document.getElementsByClassName("delete");
  /* rt is the variablefor return input date faild  */
  var rt= document.flight.return.value;
  var error = document.getElementsByClassName("err");
  var Rtype;
  /*for loop to save variable that have been checked*/
  for(i=0; i<rd.length; i++){
     if(rd[i].checked){
       Rtype= rd[i].value;}
  }
  /*
  two if conditions
  the first one to display return date faild if the (Rtype)= Round trip
the second one to hide the return date faild because the (Rtype)=One way  so no need to determine return date
  */
  if(Rtype == rd[0].value){
     delet[0].style.visibility = "visible";
  }else{
 if((Rtype == rd[1].value)){
          error[4].style.visibility = "hidden";
           delet[0].style.visibility = "hidden";
         }
       }
     }


function send() {
/* declear variables for return the value of inputs insaid the form */
/* each variables machine to input name */
  var round= document.flight.round.value;
  var from= document.flight.from.value;
  var to= document.flight.to.value;
  var depart= document.flight.depart.value;
  var adults= document.flight.adults.value;
  var children= document.flight.children.value;
  var infants= document.flight.infants.value;
  var cabin= document.flight.cabin.value;
  /* rt is the variablefor return input date faild  */
  var rt= document.flight.return.value;
    var error = document.getElementsByClassName("err");
/* Function have if condition for Validation ((Error Message)) to display  or hidden the content */

    if(round == "") {
       error[0].style.visibility = "visible";
       }
    else{
       error[0].style.visibility = "hidden";
       }

  if(from == "") {
     error[1].style.visibility = "visible";
     }
  else{
     error[1].style.visibility = "hidden";
     }
     if(to == "") {
        error[2].style.visibility = "visible";
        }
     else{
        error[2].style.visibility = "hidden";
        }
        if(depart == "") {
           error[3].style.visibility = "visible";
           }
        else{
           error[3].style.visibility = "hidden";
         }
         /*****************************************/
         var rd= document.flight.round;
         var Rtype;
         /*for loop to save variable that have been checked*/
         for(i=0; i<rd.length; i++){
            if(rd[i].checked){
              Rtype= rd[i].value;}
         }
         if(rt == "" ){
           if(Rtype == rd[0].value || round == ""){
            error[4].style.visibility = "visible";
          }}
          else {
             error[4].style.visibility = "hidden";
           }

            if(adults == "") {
               error[5].style.visibility = "visible";
               }
            else{
               error[5].style.visibility = "hidden";
               }
               if(children == "") {
                  error[6].style.visibility = "visible";
                  }
               else{
                  error[6].style.visibility = "hidden";
                  }
                  if(infants == "") {
                     error[7].style.visibility = "visible";
                     }
                  else{
                     error[7].style.visibility = "hidden";
                     }
                     if(cabin == "") {
                        error[8].style.visibility = "visible";
                        }
                     else{
                        error[8].style.visibility = "hidden";
                        }




}

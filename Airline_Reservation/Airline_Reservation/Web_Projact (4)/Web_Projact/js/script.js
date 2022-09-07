function validate_d()
            {                  
                var error = document.getElementsByClassName("error_d");
                var fName= document.Reserve.fname;  
                var number = document.Reserve.fnum;
                var chekin= document.Reserve.chkin;         
                var chekout= document.Reserve.chkout;
                 var bedsnum= document.Reserve.beds;
                 var roomsnum= document.Reserve.rooms;     

                   if(fName.value == "") {
                      error[0].style.visibility = "visible";
                      fName.style.borderColor= "red";}
                   else{
                      error[0].style.visibility = "hidden";
                      fName.style.borderColor= "green";}

                   if(number.value == ""){ 
                      error[1].style.visibility = "visible";
                      number.style.borderColor= "red";}
                   else{
                      error[1].style.visibility = "hidden";
                      number.style.borderColor= "green";}


              alert("Hello " + fName.value + " your nymber: " + number.value + " your checked in is:" + chekin.value + "and your checked out is:"+ chekout.value+ 
                "the number of beds you have selected are:"+bedsnum.value+"rooms you have selected are:"+roomsnum.value);
             }


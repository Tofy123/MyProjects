
/******************************** latifah and fatimah *********************************/
var counter = 1;
        setInterval(function(){
          document.getElementById('radio'+ counter).checked = true;
          counter++;
          if (counter > 7) {
            counter = 1;
          }
        },5000);
/******************************slider2****************************/
var counter2 = 1;
        setInterval(function(){
          document.getElementById('radio'+counter2+'2').checked = true;
          counter2++;
          if (counter2 > 7) {
            counter2 = 1;
          }
        },5000);
/************************** END latifah and fatimah *****************************/
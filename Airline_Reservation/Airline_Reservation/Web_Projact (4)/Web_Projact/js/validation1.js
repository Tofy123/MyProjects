function error() {
  Event.preventDefault();
   var name = document.getElementsByClassName("fname")[0].value;
   console.log(name);
   var email = document.getElementsByClassName("email")[0].value;
   var message = document.getElementsByClassName("message")[0].value;
   var error = document.getElementsByClassName("err");
   console.log(error);
 
   if (name === "") {
     error[0].style.visibility = "visible";
   } else {
     error[0].style.visibility = "hidden";
   }
 
   if (email === "") {
     error[1].style.visibility = "visible";
   } else {
     error[1].style.visibility = "hidden";
   }
 
   if (message === "") {
     error[2].style.visibility = "visible";
   } else {
     error[2].style.visibility = "hidden";
   }
 }
 function send(){
  emailjs.send("service_piv6hni","template_vgbcsca",{
    from_name: document.querySelector(".fname").value,
    message: document.querySelector(".message").value,
  }).then(response=>{
    console.log("success",response.status);
  },(error)=>{
    console.log(error);
  })
}

document.querySelector(".send").addEventListener("click",send)
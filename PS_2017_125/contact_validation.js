var email = document.getElementById("eid");
var msg   = document.getElementById("mid");
$(".bty").on("click",function n(){
  $(".youmain").toggle().slideup();
})

form.addEventListener("submit",e =>{
  e.preventDefault();
  check();
})

function check(){
         var e = email.value.trim();
         var m = msg.value.trim();
         var format = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/;


         if(e == ""){
          document.getElementById("emaileroor").innerHTML = "Please input a email!";
         }
         if(!e.match(format)){
          document.getElementById("emaileroor").innerHTML = "Please input a valid email!";
         }

         if(m == ""){
            document.getElementById("msgeroor").innerHTML = "Please input message!";
            email.value = "";
            
           }
         


}
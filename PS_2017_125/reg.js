function m(){
    var p1 = document.getElementById("p1");
    var p2 = document.getElementById("p2");

    if(p1.value === p2.value){
        alert("Created Your Account");
    }else{
        alert("please recheck your password!")
    }
}
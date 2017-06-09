var emailList = [];
//console.log(emailList);
function validateForm() {
    var x = document.forms["myForm"]["email"].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");

    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
       console.log("Not a valid e-mail address");
        return false;
    }else{
       alert("yes");
       alert(x);



    }
}



$('#anim').fadeIn(1500) //wait3 1.5 s.
    .show(1000);
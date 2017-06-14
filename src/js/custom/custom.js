///animation text
$('#anim').fadeIn(1500) //wait3 1.5 s.
    .show(1000);


//////validation email front-end
function validateForm() {
    var x = document.forms["myForm"]["email"].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");

    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
       console.log("Not a valid e-mail address");
        return false;
    }else{

        var email =  document.getElementsByTagName("input")[0].value;
        var emails = [];
        email.push(emails);
        alert(emails);

        document.writeln("color:mediumblue">"Mail send");


    }
}

////lang swicher
$(function(){
$( document ).ready(function() {
$(function() {
    $( ".switch" ).click(function(){
        $( ".text-on" ).switchClass( "text-on", "text-off", 10 );
        $( ".text-off" ).switchClass( "text-off", "text-on", 10 );
    });
});



$(function() {
    $( "#language-toggle" ).click(function(){
        $( ".text-on" ).switchClass( "text-on", "text-off", 10 );
        $( ".text-off" ).switchClass( "text-off", "text-on", 10 );
    });
});

});
});
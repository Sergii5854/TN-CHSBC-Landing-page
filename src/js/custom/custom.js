
$('#anim').fadeIn(1500) //wait3 1.5 s.
    .show(1000);

function readTextFile(file)
{
    var rawFile = new XMLHttpRequest();
    rawFile.open("GET", file, false);
    rawFile.onreadystatechange = function ()
    {
        if(rawFile.readyState === 4)
        {
            if(rawFile.status === 200 || rawFile.status == 0)
            {
                var allText = rawFile.responseText;
               // alert(allText);
            }
        }
    }
    rawFile.send(null);
}
var emailList =  readTextFile("emailList.txt");
//alert(ss);


var emails = [];
console.log(emails);
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
        emails.push(email);
        console.log(emails);
        alert(email);
        alert(emails);


    }
}



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

//////languech swicher
$( document ).ready(function() {
$('.switch input').on('change', function() {
   var selectedLanguage = $('input[name=switch]:checked', '.switch').val();

    if ((selectedLanguage == 'english') || (selectedLanguage == 'ukrain')) {
        $(".language select").val(selectedLanguage);
        var sel = $(".language select").val(selectedLanguage);

        if (selectedLanguage == 'english') {
            $(".english").css("display", "inline");
            $(".ukrain").css("display", "none");

        }else if (selectedLanguage =='ukrain') {
            $(".english").css("display", "none");
            $(".ukrain").css("display", "inline");

        }
    }
});
});
/////menu
var anchor
$('#menu li').on('click', function() {
    //alert($(this).attr('data-a'));
    anchor= $(this).attr('data-a');
    $("html, body").animate({ scrollTop: $("#" + anchor).offset().top }, 2000);
    return false;
});

$('.topo').on('click', function() {
    // if you want to other something
    $("html, body").animate({ scrollTop: 0 }, 'slow');
    // if you want to go to id or class and not the top of page use: $("#top").offset().top instead of 0
    return false;
});

var selector = '.menu-wrap, .toggle-bttn, #navbar ';

$(selector).on('click', function(){
    $(selector).toggleClass("active");
});



// SET BACKGROUNDS FOR IPHONE


// function setImageBackground() {
//
//     $('[data-background-image]').each(function () {
//
//         $(this).css('background-image', 'url(' + $(this).data('background-image') + ')');
//     })
// }
//
// if (isIphone) {
//     setImageBackground();
// }



// AUTO PLAY VIDEO ON HOME



// if (!isIphone) {
//
//     if ($('.background-video').length > 0) {
//
//         $('video').each(function () {
//             $(this).get(0).play();
//         })
//     }
// }






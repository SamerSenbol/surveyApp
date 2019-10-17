$(document).ready(function() {

    //Popup
    $('.show-popup').click(function(){
        $($(this).data('popup')).fadeIn();
    });

    $('.popup').click(function(){
        $(this).fadeOut();
    });

  /*   $('.popup .inner').click(function(e){
       e.stopPropagation();
    });

    $('.popup .close').click(function(e){
        e.preventDefault();
       $(this).parentsUntil('.popup').parent().fadeOut();
    });

    $(document).keydown(function(e){
        if(e.keyCode == 27){
            $('.popup').fadeOut();
        } */
    });
   
    var isMobile = {
    Android: function() {
    return navigator.userAgent.match(/Android/i);
    },
    BlackBerry: function() {
    return navigator.userAgent.match(/BlackBerry/i);
    },
    iOS: function() {
    return navigator.userAgent.match(/iPhone|iPad|iPod/i);
    },
    Opera: function() {
    return navigator.userAgent.match(/Opera Mini/i);
    },
    Windows: function() {
    return navigator.userAgent.match(/IEMobile/i);
    },
    any: function() {
    return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
    }
    };
    $(document).on("click", '.whatsapp', function() {
    if( isMobile.any() ) {
    var text = $(this).attr("data-text");
    var url = $(this).attr("data-link");
    var message = encodeURIComponent(text) + " - " + encodeURIComponent(url);
    var whatsapp_url = "whatsapp://send?text=" + message;
    window.location.href = whatsapp_url;
    } else {
    alert("يرجى مشاركة هذا التصويت عبر الواتس أب في الجهاز المحمول");
    }
    });

    });
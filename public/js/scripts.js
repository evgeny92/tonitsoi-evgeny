// Modal popup$(function () {
$('.portfolio-item').magnificPopup({
    type: 'inline',
    preloader: false,
    focus: '#username',
    modal: true
});

$(document).on('click', '.portfolio-modal-dismiss', function(e) {
    e.preventDefault();
    $.magnificPopup.close();
});

// Modal ajax feedback
$(document).ready(function() {
    $(".btn-send-message").click(function(e){
        e.preventDefault();

        $.ajax({
            url: '/contact',
            type:'POST',
            data: $('#contact-form').serialize(),
            beforeSend: function() {
                $("#loading").show();
                $(".fa-paper-plane").hide();
            },
            complete: function() {
                $("#loading").hide();
                $(".fa-paper-plane").show();

            },
            success: function(data) {
                if($.isEmptyObject(data.error)){
                    printSuccessMsg();
                }else{
                    printErrorMsg(data.error);
                }
            }
        });
    });

    var $success_msg = $(".print-success-msg");
    var $error_msg = $(".print-error-msg");

    function printSuccessMsg() {
        $success_msg.html('Message sent successfully!');
        $success_msg.css('display','block');
        $success_msg.delay(5000).fadeOut(350);
        $('#contact-form')[0].reset();
    }

    function printErrorMsg (msg) {
        $error_msg.find("ul").html('');
        $error_msg.css('display','block');
        $.each( msg, function( key, value ) {
            $error_msg.find("ul").append('<li>'+value+'</li>');
        });
        $error_msg.delay(5000).fadeOut(350);
    }
});

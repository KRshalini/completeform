$(document).ready(function(){
    $("#email").keyup(function(e){
        var email = $("#email").val();

        $.ajax({
            type: "POST",
            url: "check_email.php",
            data: { email: email },
            success: function(response){
                if(response === 'exists'){
                    $('#email-error').html('');
                } else {
                    $('#email-error').html('Email does not exist');
                }
            }
        });
    });
});

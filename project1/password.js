$(document).ready(function () {
    $("#password").keyup(function () {
        validatePassword();
    });

    $("#formvalidation").submit(function () {
        e.preventDefault();
        if (validatePassword()) {
            
            $("#password-message").html("Password is valid!");
           // $('#formvalidation').bind('submit').submit();
        } else {
            $("#password-message").html("Password is invalid!");
        }
    });

    function validatePassword() {
        var password = $("#password").val();
        var passwordError = $("#password-error");

        // Reset error message
       // passwordError.html('');

        
        var passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/;

        if (passwordRegex.test(password)) {
            return true;
        } else {
           // passwordError.html('Password must be at least 8 characters long and contain at least one lowercase letter, one uppercase letter, and one digit.');
            //return false;
        }
    }
});

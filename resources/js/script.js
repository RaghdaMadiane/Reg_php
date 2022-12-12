$(document).ready(function() {
    $('#username').on('input', function() {

        checkuser();
    });
    $('#email').on('input', function() {
        checkemail();
    });
    $('#password').on('input', function() {
        checkpass();
    });
    $('#email1').on('input', function() {
        checkemail1();
    });
    $('#password1').on('input', function() {
        checkpass1();
    });

})
$("#reg").click(function(e) {

    if (!checkuser() || !checkemail() || !checkpass()) {
        console.log("error");
        return false;
    } else {
        return true;
    }
})
$("#login").click(function(e) {

    if (!checkemail1() || !checkpass1()) {
        console.log("error");
        return false;
    } else {
        return true;
    }
})

function checkemail() {
    var email = $("#email").val();
    var testEmail = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if (email == "") {

        $('#email_err').html("email required");
        return false;
    } else if (!testEmail.test(email)) {

        $('#email_err').html("email invalid");
        return false;
    } else {

        $('#email_err').html("");
        return true;
    }


}



function checkpass() {
    var pattern2 = /^(?=.*\d)(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
    var pass = $('#password').val();
    var validpass = pattern2.test(pass);

    if (pass == "") {
        $('#password_err').html('password can not be empty');
        return false;

    } else if (!validpass) {
        $('#password_err').html('Minimum 5 and up to 15 characters, at least one uppercase letter, one lowercase letter, one number and one special character:');
        return false;

    } else {
        $('#password_err').html("");
        return true;
    }


}

function checkuser() {
    var pattern = /^[A-Za-z0-9]+$/;
    var user = $('#username').val();
    var validuser = pattern.test(user);
    if ($('#username').val() == '') {
        $('#username_err').html('username required');
        return false;

    } else if ($('#username').val().length < 2) {
        $('#username_err').html('username length is too short');

        return false;
    } else if (!validuser) {
        $('#username_err').html('username should be a-z ,A-Z only');
        return false;

    } else {
        $('#username_err').html('');
        return true;
    }

}

function checkemail1() {
    var email = $("#email1").val();
    var testEmail = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if (email == "") {

        $('#email_err1').html("email required");
        return false;
    } else if (!testEmail.test(email)) {

        $('#email_err1').html("email invalid");
        return false;
    } else {

        $('#email_err1').html("");
        return true;
    }


}



function checkpass1() {
    var pattern2 = /^(?=.*\d)(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
    var pass = $('#password1').val();
    var validpass = pattern2.test(pass);

    if (pass == "") {
        $('#password_err1').html('password can not be empty');
        return false;

    } else if (!validpass) {
        $('#password_err1').html('Minimum 5 and up to 15 characters, at least one uppercase letter, one lowercase letter, one number and one special character:');
        return false;

    } else {
        $('#password_err1').html("");
        return true;
    }


}
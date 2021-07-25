$(document).ready(function() {
    console.log('Register ok kro');
    $(".toggle-password").on('click', function() {

        $(this).toggleClass("fa-eye fa-eye-slash");
        var x = $('#password');
        if (x.attr("type") == "password") {
            x.attr("type", "text");;
        } else if (x.attr("type") == "text") {
            x.attr("type", "password");;
        }
    });
    $(".toggle-cpassword").on('click', function() {

        $(this).toggleClass("fa-eye fa-eye-slash");
        var x = $('#c_password');
        if (x.attr("type") == "password") {
            x.attr("type", "text");;
        } else if (x.attr("type") == "text") {
            x.attr("type", "password");;
        }
    });
    //var submit = ('#R_submit');
    $('#R_submit').click(function(e) {
        var Mail = $('#mail').val();
        var password = $('#password').val();
        var c_password = $('#c_password').val();
        console.log(Mail);
        if (IsEmail(Mail) == false) {

            alert('invalid email!!!!');
        }
        if (password != c_password || password == '' || c_password == '') {
            alert('password are not same !!!!');

        } else {
            $.ajax({
                url: "rdb.php",
                method: "POST",
                data: {
                    e_mail: Mail,
                    Password: password,
                    submitFlag: 1,
                },
                success: function(data) {
                    console.log(data);
                    if (data == "OK") {
                        alert("YOUR ACCOUNT RIGERTER......");
                        window.location.href = 'login.php';
                    } else {
                        alert("YOUR ACCOUNT IS NOT  RIGERTER DUE TO TECHNINCAL PROBLEMS .......");
                    }
                }
            })
        }
    })

    function IsEmail(email) {
        var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if (!regex.test(email)) {
            return false;
        } else {
            return true;
        }
    }

})
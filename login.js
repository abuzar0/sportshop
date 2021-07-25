$(document).ready(function() {
    $('#login').click(function() {

        var Mail = $('#mail').val();
        var password = $('#password').val();
        console.log(Mail);
        if (IsEmail(Mail) == false) {

            alert('invalid email!!!!');
        }
        if (password == '') {
            alert('ENTER PASSWORD ');

        } else {
            $.ajax({
                url: "rdb.php",
                method: "POST",
                data: {
                    e_mail: Mail,
                    Password: password,
                    loginFlag: 1,
                },
                success: function(data) {
                    // console.log(data);
                    if (data == "Success") {
                        // console.log(data);
                        alert('welcom here ..');
                        window.location.href = "index.php"
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
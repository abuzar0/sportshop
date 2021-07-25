<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <script src="scripts.js"></script>
    <script src="login.js"></script>
</head>
<style>
input {
    border-radius: 9px;
    border: 1px solid black;
    text-align: center;
    /* width: 30%; */
}

body {
    background-color: rgb(214, 241, 241);

}

.card {}

.card-header {
    background-color: rgb(123, 143, 143);
    text-align: center;
    border: 5px solid rgb(133, 127, 119);
}

.card-body {
    background-color: rgb(174, 182, 182);
    text-align: left;
    border: 5px solid rgb(243, 208, 162);
}

.card-footer {
    background-color: rgb(104, 128, 128);
    text-align: center;
    border: 5px solid rgb(133, 127, 119);
}

.container {
    margin-top: 100px;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 80%;
}

.field-icon {
    float: right;
    margin-left: -46px;
    margin-top: 5px;
    position: relative;
    z-index: 2;
}
</style>

<body>
    <a href="register.php">
        <button type="button" class="btn btn-outline-danger btn-lg"
            style="position:fixed;top:5px;left:20px; border-radius:4px;">
            <i class="fa fa-arrow-circle-left" style="font-size:24px"></i> Back </button> </a>
    <div class="container">
        <div class="form-group">
            <div class="form-col-5">
                <div class="card">
                    <div class="card-header">
                        <h4>Login</h4>
                    </div>
                    <div class="card-body">
                        <form action="">
                            <label for="mail">Mail</label><br>
                            <input type="text" placeholder="mail" size="35" id="mail"><br>
                            <label for="password">Password</label><br>
                            <input type="password" size="35" placeholder="password" id="password">
                            <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            <br>
                            <input type="checkbox"><label for="" style="font-size:16px;"> &nbsp Remember me
                            </label><br>
                            <a href="register.php">
                            <button type="button" class="btn btn-outline-dark btn-sm" >Register</button>
                            </a>
                            <button type="button" class="btn btn-outline-primary btn-sm" id="login">Login</button><br>
                        </form>
                    </div>
                    <div class="card-footer">
                        @copyright ButtShop
                    </div>
                </div>
            </div>
        </div>
        <script>
        $(".toggle-password").on('click', function() {

            $(this).toggleClass("fa-eye fa-eye-slash");
            var x = $('#password');
            if (x.attr("type") == "password") {
                x.attr("type", "text");;
            } else if (x.attr("type") == "text") {
                x.attr("type", "password");;
            }
        });
        </script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
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
    <title>Account Register</title>
    <link rel="stylesheet" href="style.css">
    <script src="scripts.js"></script>
    <script src="reg_Script.js" ></script>
    <style>
    input {
        border-radius: 9px;
        border: 1px solid black;
        text-align: center;
    }

    body {
        background-color: rgb(214, 241, 241);
    }

    .card {}

    .card-header {
        text-align: center;
        background-color: rgb(123, 143, 143);
        border: 5px solid rgb(133, 127, 119);
    }

    .card-body {
        text-align: left;
        background-color: rgb(174, 182, 182);
        border: 5px solid rgb(243, 208, 162);
    }

    .card-footer {
        text-align: center;
        background-color: rgb(104, 128, 128);
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
        margin-top: -25px;
        position: relative;
        z-index: 2;
    }
    </style>
</head>

<body>
    <a href="login.php">
        <button type="button" class="btn btn-outline-dark btn-lg"
            style="position:fixed;top:5px;left:20px; border-radius:4px;">
            <i class="fa fa-arrow-circle-left" style="font-size:24px"></i> Back </button></a>
    <div class="container">
        <div class="form-group">
            <div class="form-col-5">
                <div class="card">
                    <div class="card-header">
                        <h4>Register</h4>
                    </div>
                    <div class="card-body">
                        <form action="">
                            <label for="mail">Mail</label><br>
                            <input type="text" placeholder="mail" size="35" id="mail"><br>
                            <label for="password">Password</label><br>
                            <input type="password" size="35" placeholder="password" id="password"><br>
                            <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            <label for="password">ConfrimPassword</label><br>
                            <input type="password" size="35" placeholder="ConfrimPassword" id="c_password"><br>
                            <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-cpassword"></span>
                            <input type="checkbox"> <label for=""> &nbsp Remember me
                            </label><br>
                            <button type="button" class="btn btn-outline-primary btn-sm" id="R_submit">Register</button><br>
                        </form>
                    </div>
                    <div class="card-footer">
                        @copyright ButtShop
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
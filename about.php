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
    <title>AboutUs-ButtShop</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header>
        <div class="container-fluid">
            <div class="row " style="background-color:rgb(238, 238, 196);">
                <div class="col-md-3">
                    <img src="image/pic.jpg" alt="logo">
                </div>
                <div class="col-md-6">
                    <h3>ButtShop</h3>
                </div>
                <div class="col-md-3">
                    <div class="btn">
                        <button class="btn btn-outline-secondary text-dark" id="login" data-toggle="modal"
                            data-target="#myModal">
                            <i class='far fa-user-circle' style='font-size:19px'></i></button>
                        <div id="myModal" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Wel Come ButtShop</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p>Register Your Deatial Then Buy Same Things
                                            Press Login Button Account Exist OtherWise Register Your Account
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-outline-info">
                                            <a href="login.php">Login</button></a>
                                        <button type="button" class="btn btn-outline-secondary text-dark">
                                            <a href="register.php">Register</button></a>
                                        <button type="button" class="btn btn-outline-danger"
                                            data-dismiss="modal">Close</button>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <!--  -->
                        <button class="btn btn-outline-secondary  text-dark">
                            <i class='far fa-bell'></i>
                        </button>
                        <button class="btn btn-outline-secondary  text-dark" id="select" data-toggle="modal"
                            data-target="#myModal2">
                            <i class="bi bi-cart-fill"><input type="text" style="height: 13px;width: 4px;" hidden></i>
                        </button>
                        <div id="myModal2" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header" style="background-color:rgb(70, 90, 90)">
                                        <h4 class="modal-title" style="text-align:center;">Wel Come ButtShop</h4>
                                    </div>
                                    <div class="table">
                                        <br>
                                        <h4 style="text-align:center;">Your Cart</h4>
                                        <div class="modal-body">

                                            <table>
                                                <thead>
                                                    <th>No</th>
                                                    <th>Item_Name</th>
                                                    <th>Quantity</th>
                                                    <th>Amount</th>
                                                    <th>Total</th>
                                                    <th>Action</th>
                                                </thead>
                                                <tbody>
                                                    <!-- <tr>
                                                        <td>pop</td>
                                                        <td>pop</td>
                                                        <td>pop</td>
                                                        <td>pop</td>
                                                        <td>pop</td>
                                                        <td>pop</td>
                                                    </tr>
                                                    <tr>
                                                        <td>pop</td>
                                                        <td>pop</td>
                                                        <td>pop</td>
                                                        <td>pop</td>
                                                        <td>pop</td>
                                                        <td>pop</td>
                                                    </tr>
                                                    <tr>
                                                        <td>pop</td>
                                                        <td>pop</td>
                                                        <td>pop</td>
                                                        <td>pop</td>
                                                        <td>pop</td>
                                                        <td>pop</td>
                                                    </tr> -->
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-outline-danger"
                                            data-dismiss="modal">Close</button>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <!--  -->
                        <button class="btn btn-outline-secondary  text-dark" id="" data-toggle="modal"
                            data-target="#myModal3"><i class='fas fa-bullhorn'></i>
                            <input type="text" style="height: 13px;width: 4px;" hidden>
                        </button>
                        <div id="myModal3" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Wel Come ButtShop</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p>No Annousment Today <i class="bi bi-emoji-smile"></i></p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-outline-danger"
                                            data-dismiss="modal">Close</button>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <!--  -->
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section>
        <nav class="navbar navbar-expand-sm  navbar-dark" style=" background-color:rgb(179, 180, 164);">
            <!-- <hr style="height:2px;color:gray;background-color:gray"> -->
            <!-- Brand -->
            <a class="navbar-brand" href="#" style="color:black;">ButtSport</a>

            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <div class="dropdown ">
                            <ul>
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"
                                    style="color:black;;">Sport Ket</a>
                                <div class="dropdown-menu" style="background-color:rgb(184, 189, 125)">
                                    <li><a class="dropdown-item" href="#" style="color:black">Cricket ket</a></li>
                                    <li><a class="dropdown-item" href="#" style="color:black">Hockey Ket</a></li>
                                    <li> <a class="dropdown-item" href="#" style="color:black">Football Ket</a></li>
                                    <li> <a class="dropdown-item" href="#" style="color:black">Swimming Ket</a></li>
                                </div>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown">
                            <ul>
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"
                                    style="color:black;">TOYS </a>
                                <div class="dropdown-menu" style="background-color:rgb(184, 189, 125)">
                                    <li><a class="dropdown-item" href="#" style="color:black">Game</a></li>
                                    <li><a class="dropdown-item" href="#" style="color:black">Remote Car</a></li>
                                    <li><a class="dropdown-item" href="#" style="color:black">DOLL </a></li>
                                </div>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown">
                            <ul>
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"
                                    style="color:black;">About us </a>
                                <div class="dropdown-menu" style="background-color:rgb(184, 189, 125)">
                                    <li><a class="dropdown-item" href="#" style="color:black">Contact</a></li>
                                    <li><a class="dropdown-item" href="#" style="color:black">Location</a></li>
                                </div>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </section>
    <section>
        <br><br>
        <div class="container">
            <h5 style="font-size:23px ; text:bold">ABOUT US</h5>
            <p>
            <h3 style="font-size:23px">Welcome to ButtShop</h3><br>

            Our parent company ‘The Closet’ started its operations in the year 2010 with opening Adidas exclusive
            retail
            stores in Islamabad. Over years our retail portfolio and territories of our operations expanded to other
            cities namely Lahore & Sialkot.
            </p>
            <p>
                ButtShop was launched as a trademark of The Closet for strengthening its retail position in
                Pakistan.
                ButtShop main focus is on Sports and Fashion apparel & Fitness/Sporting Goods.
            </p>

            <p>
                We are combining world’s leading sports and fitness brands together at one place. At present,
                our
                brands’ Portfolio includes Adidas, Asics, Puma, Reebok and Sketchers. We are working to bring in
                more
                global brands for the consumers in Pakistan.
            </p>
            <p>
                Our core principle is to provide the customers with efficient consumer services both at our
                Retail
                Stores and our online platform.
            </p>
        </div>
        <br>
    </section>
    <footer>
        <div class="footer" style="background-color:rgb(179, 180, 164);">
            <section>
                <br><br>
                <div class="container">
                    <h6 style="color:black; margin-right:174px; text-style:iattalic;">Language</h6>
                    <SELECT NAME="language" id="language" style="color:black;font-size:14px;">
                        <OPTION VALUE="English" SELECTED>Engilsh
                            <!-- <OPTION VALUE="English">Engilsh -->
                    </SELECT>
                </div>
                <p>Footer <i class="fas fa-thumbs-up"></i></p>
            </section>
            <hr style="height:1px;border-width:0;color:gray;background-color:gray">
            <div class="App">
                <div class="row">
                    <div class="col-sm-3">
                        <p>
                            <i class="fa fa-lock" style="font-size:24px"></i> Secure online payment
                        </p>
                    </div>
                    <div class="col-sm-2">
                    </div>
                    <div class="col-md-7">
                        <p>
                            <i class="fa fa-tablet" style="font-size:36px"><i class="fas fa-mobile-alt "
                                    style="font-size:24px"></i></i>
                            Buttstore App
                            <button type="button" class="btn btn-outline-secondary"
                                style="background-color:black;padding-right:25px;padding-left:25px"><i
                                    class="fa fa-apple" style="font-size:24px"></i> AppleStore</button>
                            <button type="button" class="btn btn-outline-secondary"
                                style="background-color:black;padding-right:25px;padding-left:25px"><i
                                    class='fab fa-google-play' style='font-size:24px'></i> GoogleStore</button>
                        </p>
                        <!-- <br> -->
                        <ul>
                            <li>
                                <h6 style="color:black">Follow us on</h6>
                            </li>
                        </ul>
                        <ul>
                            <a href="">
                                <li> <i class="fa fa-facebook" style="font-size:44px" aria-hidden="true"></i>
                                </li>
                            </a>
                        </ul>
                        <ul>
                            <a href="">
                                <li> <i class="fa fa-twitter" style="font-size:44px" aria-hidden="true"></i>
                                </li>
                            </a>
                        </ul>
                        <ul>
                            <a href="">
                                <li><i class="fa fa-instagram" aria-hidden="true" style="font-size:44px"></i>
                                </li>
                            </a>
                        </ul>
                        <ul>

                            <a href="">
                                <li>
                                    <i class="fa fa-snapchat" style="font-size:44px"></i>
                                </li>
                            </a>

                        </ul>

                    </div>
                </div>

            </div>
            </section>
            <hr style="height:1px;border-width:0;color:gray;background-color:gray">
            <section>
                <div class="row">
                    <div class="col-3">
                        <p styple="margin-left:4px;">
                            © 2020 ButtStore
                        </p>
                    </div>
                    <div class="col-3">
                    </div>
                    <div class="col-6">
                        <p>
                        <ul>
                            <a href="">
                                <li>
                                    Terms and conditions of purchase
                                </li>
                            </a>
                        </ul>
                        <ul>
                            <a href="">
                                <li>
                                    Delivery
                                </li>
                            </a>
                        </ul>
                        <ul>
                            <a href="">
                                <li>
                                    Privacy policy
                                </li>
                            </a>
                        </ul>
                        </p>
                    </div>
                </div>
                <button type="button" class="btn btn-outline-secondary" style="position:fixed;right: 16px;bottom: 16px;"
                    data-toggle="modal" data-target="#myModal90">? HELP</button>
                <div id="myModal90" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content" style=" width:40%;position:fixed;right:26px;bottom:26px;">
                            <div class="modal-header">
                                <h6 class="modal-title" style="font-size:18px;">Leave us a message
                                </h6>
                                <button data-dismiss="modal" class="btn btn-outline-secondary btn-sm">
                                    <i class="fas fa-window-minimize"></i></button>
                            </div>
                            <div class="modal-body">
                                <label for=" name" style="color:black;font-size:17px;">Your name (optional)</label><br>
                                <input type="text" size="15" style="border:1px solid black;border-radius:3px;"><br>
                                <label for="email" style="color:black;font-size:17px; ">Email address</label><br>
                                <input type="mail" size="15" style="border:1px solid black;border-radius:3px;"><br>
                                <label for="text" style="color:black;font-size:17px;">How can we help you?</label><br>
                                <textarea name="text" style="border:1px solid black;border-radius:3px;" id="text"
                                    cols="15" rows="6"></textarea><br>
                                <!-- <label for="attchmebt" style="color:black;font-size:17px;">Attachments</label><br>
                                <input type="file"> -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-primary" data-dismiss="modal"
                                        style="right: 16px;bottom: 16px;">send</button>

                                </div>
                            </div>

                        </div>
                    </div>
            </section>
        </div>
    </footer>


</body>

</html>
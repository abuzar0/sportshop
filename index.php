<?php

session_start();
   if (isset($_SESSION['email'])){}else{session_destroy();header("location:login.php");}
   if(isset($_GET['remove'])){
    $id=$_GET['remove'];
    // echo $id;
    foreach($_SESSION["Cart"] as $k=> $item) {
        if($item['UniqueID'] == $id){
            unset($_SESSION['Cart'][$k]);
        }}
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
        integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
        integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
        crossorigin="anonymous" />
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"
        integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg=="
        crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="card.css">
    <title>Butt Shop</title>
    <script src="https://js.stripe.com/v3/"></script>
    <script src="slider.js"></script>
    <script src="chart.js"></script>
    <script src="purchase.js"></script>
    <script src="scripts.js"></script>
</head>

<body>
    <header>
        <div class="container-fluid">
            <div class="row " style="background-color:rgb(238, 238, 196)">
                <div class="col-md-3" id="img">
                    <img src="https://www.designhill.com/resize_img.php?atyp=page_file&pth=ft_ca_ct||131||contestfile_1&flp=1586591339-8048208035e91766bcb2704-12835355.jpg" alt="logo">
                </div>
                <div class="col-md-6">
                    <h3 style="margin-top:16px">ButtShop</h3>
                </div>
                <div class="col-md-3">
                    <div class="btn">
                        <button class="btn btn-outline-secondary text-dark" id="login" data-toggle="modal"
                            data-target="#myModal">
                            <i class='fa fa-user-circle' style='font-size:19px'></i></button>
                        <div id="myModal" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content -->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Wel Come to <?php echo $_SESSION['email'];?> In ButtShop</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p>
                                            about the text what you write in this box.....
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-outline-secondary text-dark">
                                            <a href="">Account Info</button></a>
                                        <button type="button" class="btn btn-outline-danger"
                                            data-dismiss="modal">Close</button>

                                    </div>
                                </div>

                            </div>
                        </div>

                        <button class="btn btn-outline-secondary  text-dark">
                            <i class='fa fa-bell'></i>
                        </button>
                        <button class="btn btn-outline-secondary  text-dark" id="select" data-toggle="modal"
                            data-target="#myModal2">
                            <i class="fa fa-shopping-cart" style="font-size:20px"></i><input type="text"
                                style="height: 13px;width: 4px;" hidden></i>
                        </button>
                        <div id="myModal2" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                                Modal content
                                <div class="modal-content">
                                    <div class="modal-header" style="background-color:rgb(70, 90, 90)">
                                        <h4 class="modal-title" style="text-align:center;">Wel Come ButtShop</h4>
                                    </div>
                                    <div class="table">
                                        <br>
                                        <h4 style="text-align:center;">Your Cart <?php echo $_SESSION['email'];?></h4>
                                        <div class="modal-body">

                                            <table id='table'>
                                                <thead>
                                                    <th>Item_Name</th>
                                                    <th>Quantity</th>
                                                    <th>Amount</th>
                                                    <th>Total</th>
                                                    <th>Action</th>
                                                </thead>
                                                <tbody>
                                                <?php 
                                                if(isset($_SESSION["Cart"])){?>
                                                <?php foreach($_SESSION["Cart"] as $k=> $item) {?>
                                                     <tr>
                                                     <td><?php echo  $item['Name'] ?></td>
                                                     <td><?php echo   $item['Quantity'] ?></td>
                                                     <td><?php echo   $item['Price'] ?></td>
                                                     <td><?php  echo  $item['Total'] ?></td>
                                                     <td ><a href="index.php?remove=<?php echo $item['UniqueID']?>"><i class="fa fa-times"  style="color:red" ></i></a></td>
                                                     </tr>
                                                        
                                                   <?php }?>
                                                    <?php }else {?>
                                                       
                                                        <tr><td colspan="7">No-Data</td></tr>

                                                   <?php } ?>
                                                    
                                                
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                    <input type="text" id="sessionmail" value="<?php echo $_SESSION['email'];?>" hidden/>
                                        <button type="button" class="btn btn-outline-danger"
                                            data-dismiss="modal">Close</button> 
                                            <button type="button" class="btn btn-outline-primary" id="purchase" 
                                            >Purchase</button>
                                            
                                    </div>
                                </div>

                            </div>
                        </div>

                        <button class="btn btn-outline-secondary  text-dark" id="" data-toggle="modal"
                            data-target="#myModal3"><i class='fa fa-bullhorn'></i>
                            <!-- <input type="text" style="height: 13px;width: 4px;" hidden> -->
                        </button>
                        <div id="myModal3" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                                Modal content
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
                        <button class="btn btn-outline-secondary  text-dark" id="logout">
                        <i class="fa fa-sign-out"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section>
        <nav class="navbar navbar-expand-sm  navbar-dark" style=" background-color:rgb(179, 180, 164);">
            <!-- <hr style="height:2px;color:gray;background-color:gray">
              Brand -->
            <a class="navbar-brand" href="index.php" style="color:black;">ButtSport</a>

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
                                    <li><a class="dropdown-item" href="cricketKet.php" style="color:black">Cricket ket</a></li>
                                    <li><a class="dropdown-item" href="hockey.php" style="color:black">Hockey Ket</a></li>
                                    <li> <a class="dropdown-item" href="footBall.php" style="color:black">Football Ket</a></li>
                                    <li> <a class="dropdown-item" href="Swimming.php" style="color:black">Swimming Ket</a></li>
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
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="about.php"
                                    style="color:black;">About us </a>
                                <div class="dropdown-menu" style="background-color:rgb(184, 189, 125)">
                                    <li><a class="dropdown-item" href="about.php" style="color:black">Contact</a></li>
                                    <li><a class="dropdown-item" href="about.php" style="color:black">Location</a></li>
                                </div>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </section>
    <section>
        <div class="main-bg" style="background-color:rgb(238, 238, 196)">
            <div class="d-flex align-item-center " style="min-height:20vh">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- <h1 class="mb-3">Brand </h1> -->
                            <div class="slick-slider-for">
                                <div class="slick-slider-item">
                                    <img src="image/conv.png" alt="New York" style="width:50%;height:20%">
                                </div>
                                <div class="slick-slider-item">
                                    <img src="image/dreebok.png" alt="New York" style="width:50%;height:20%">
                                </div>
                                <div class="slick-slider-item">
                                    <img src="image/conv.png" alt="New York" style="width:50%;height:20%">
                                </div>
                                <div class="slick-slider-item">
                                    <img src="image/conv.png" alt="New York" style="width:50%;height:20%">
                                </div>
                                <div class="slick-slider-item">
                                    <img src="image/conv.png" alt="New York" style="width:50%;height:20%">
                                </div>
                                <div class="slick-slider-item">
                                    <img src="image/conv.png" alt="New York" style="width:50%;height:20%">
                                </div>
                                <div class="slick-slider-item">
                                    <img src="image/conv.png" alt="New York" style="width:50%;height:20%">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <!-- kopi -->
        <div class="slider">
            <div id="demo" class="carousel slide" data-ride="carousel">
                <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                    <li data-target="#demo" data-slide-to="2"></li>
                    <li data-target="#demo" data-slide-to="3"></li>
                </ul>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="image/image3.jpg" alt="Los Angeles">
                        <div class="carousel-caption">
                            <!-- <h3>Los Angeles</h3>
                            <p>We had such a great time in LA!</p> -->
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="image/image2.jpg" alt="oop`s">
                        <div class="carousel-caption">
                            <!-- <h3>Chicago</h3> 
                              <p>Thank you, Chicago!</p> -->
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="image/image1.jpg" alt="New York">
                        <div class="carousel-caption">
                            <!-- <h3>New York</h3> 
                            <p>We love the Big Apple!</p> -->
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="image/image4.jpg" alt="New York">
                        <div class="carousel-caption">
                            <!-- <h3>New York</h3> -->
                            <!-- <p>We love the Big Apple!</p> -->
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        </div>
    </section>
<!-- CARD SECTION START -->
<!-- 1 CARD SECTION -->
    <Section>
        <br>
        <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4"> 
        <div class="col">
            <div class="card">
                <img src="image/image1.jpg" class="card-img-top" alt="oo`ps">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <div class="btn">
                        <button class="btn btn-outline-danger" data-toggle="modal" data-target="#myModal7">
                                <i class="fa fa-shopping-cart" style="font-size:20px"></i>
                            </button>
                        <button class="btn btn-outline-danger">
                                <i class="fa fa-heart"></i>
                            </button>
                        <div id="myModal7" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Wel Come ButtShop</h4>
                                    </div>
                                    <div class="modal-body">
                                        <h6 style="text-align:center,font-size:19px">RS :500 Foot Ball</h6>
                                        <label for="">Enter Quantity</label>
                                        <input type="text" placeholder="0" class="buy" size="8px"><br>
                                        <!-- <label for=""> Amount </label> -->
                                        <input type="text" value="500" class="price" size="8px" hidden>
                                        <input type="text" value="FootBall" class="name" size="8px" hidden>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-dark"  id="shop">
                                        Shop </button>
                                    <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="image/image1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">FootBall</h5>
                    <p class="card-text">Details About it </p>
                    <div class="btn">
                        <button class="btn btn-outline-danger" data-toggle="modal" data-target="#myModal5">
                                <i class="fa fa-shopping-cart" style="font-size:20px"></i>
                            </button>
                        <button class="btn btn-outline-danger">
                                <i class="fa fa-heart"></i>
                            </button>
                        <div id="myModal5" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Wel Come ButtShop</h4>
                                    </div>
                                    <div class="modal-body">
                                        <h6 style="text-align:center,font-size:19px">RS :1500  Cricket ket</h6>
                                        <label for="">Enter Quantity</label>
                                        <input type="text" placeholder="0" class="buy2" size="8px"><br>
                                        <!-- <label for=""> Amount </label> -->
                                        <input type="text" value="1500" class="price2" size="8px" hidden>
                                        <input type="text" value="Cricket ket" class="name2" size="8px" hidden>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-dark"  id="shop2">
                                        Shop </button>
                                    <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- end card model -->
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="image/image1.jpg" class="card-img-top" alt="oo`ps">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                    <div class="btn">
                        <button class="btn btn-outline-danger" data-toggle="modal" data-target="#myModal6">
                                <i class="fa fa-shopping-cart" style="font-size:20px"></i>
                            </button>
                        <button class="btn btn-outline-danger">
                                <i class="fa fa-heart"></i>
                            </button>
                        <div id="myModal6" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Wel Come ButtShop</h4>
                                    </div>
                                    <div class="modal-body">
                                        <h6 style="text-align:center,font-size:19px">RS :1900  Hockey ket</h6>
                                        <label for="">Enter Quantity</label>
                                        <input type="text" placeholder="0" class="buy1" size="8px"><br>
                                        <!-- <label for=""> Amount </label> -->
                                        <input type="text" value="1900" class="price1" size="8px" hidden>
                                        <input type="text" value="Hockey ket" class="name1" size="8px" hidden>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-dark"  id="shop1">
                                        Shop </button>
                                    <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>

                                    </div>
                                    
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        </div>
        </div>
        <br>
</Section>
<!-- Section 2 -->
<Section>
        <br>
        <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4"> 
        <div class="col">
            <div class="card">
                <img src="image/image1.jpg" class="card-img-top" alt="oo`ps">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <div class="btn">
                        <button class="btn btn-outline-danger" data-toggle="modal" data-target="#myModal22">
                                <i class="fa fa-shopping-cart" style="font-size:20px"></i>
                            </button>
                        <button class="btn btn-outline-danger">
                                <i class="fa fa-heart"></i>
                            </button>
                        <div id="myModal22" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Wel Come ButtShop</h4>
                                    </div>
                                    <div class="modal-body">
                                        <h6 style="text-align:center,font-size:19px">RS :1800 BAT </h6>
                                        <label for="">Enter Quantity</label>
                                        <input type="text" placeholder="0" class="buy3" size="8px"><br>
                                        <!-- <label for=""> Amount </label> -->
                                        <input type="text" value="1800" class="price3" size="8px" hidden>
                                        <input type="text" value="BAT" class="name3" size="8px" hidden>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-dark"  id="shop3">
                                        Shop </button>
                                    <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="image/image1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">FootBall</h5>
                    <p class="card-text">Details About it </p>
                    <div class="btn">
                        <button class="btn btn-outline-danger" data-toggle="modal" data-target="#myModal21">
                                <i class="fa fa-shopping-cart" style="font-size:20px"></i>
                            </button>
                        <button class="btn btn-outline-danger">
                                <i class="fa fa-heart"></i>
                            </button>
                        <div id="myModal21" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Wel Come ButtShop</h4>
                                    </div>
                                    <div class="modal-body">
                                        <h6 style="text-align:center,font-size:19px">RS :20 Ball</h6>
                                        <label for="">Enter Quantity</label>
                                        <input type="text" placeholder="0" class="buy4" size="8px"><br>
                                        <!-- <label for=""> Amount </label> -->
                                        <input type="text" value="20" class="price4" size="8px" hidden>
                                        <input type="text" value="Ball" class="name4" size="8px" hidden>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-dark"  id="shop4">
                                        Shop </button>
                                    <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- end card model -->
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="image/image1.jpg" class="card-img-top" alt="oo`ps">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                    <div class="btn">
                        <button class="btn btn-outline-danger" data-toggle="modal" data-target="#myModal20">
                                <i class="fa fa-shopping-cart" style="font-size:20px"></i>
                            </button>
                        <button class="btn btn-outline-danger">
                                <i class="fa fa-heart"></i>
                            </button>
                        <div id="myModal20" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Wel Come ButtShop</h4>
                                    </div>
                                    <div class="modal-body">
                                        <h6 style="text-align:center,font-size:19px">RS :300 Ludo</h6>
                                        <label for="">Enter Quantity</label>
                                        <input type="text" placeholder="0" class="buy5" size="8px"><br>
                                        <!-- <label for=""> Amount </label> -->
                                        <input type="text" value="300" class="price5" size="8px" hidden>
                                        <input type="text" value="LUDO" class="name5" size="8px" hidden>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-dark"  id="shop5">
                                        Shop </button>
                                    <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        </div>
        </div>
        <br>
</Section>



<!-- section 3 -->
<Section>
        <br>
        <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4"> 
        <div class="col">
            <div class="card">
                <img src="image/image1.jpg" class="card-img-top" alt="oo`ps">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <div class="btn">
                        <button class="btn btn-outline-danger" data-toggle="modal" data-target="#myModal17">
                                <i class="fa fa-shopping-cart" style="font-size:20px"></i>
                            </button>
                        <button class="btn btn-outline-danger">
                                <i class="fa fa-heart"></i>
                            </button>
                        <div id="myModal17" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Wel Come ButtShop</h4>
                                    </div>
                                    <div class="modal-body">
                                        <h6 style="text-align:center,font-size:19px">RS :800 BAT </h6>
                                        <label for="">Enter Quantity</label>
                                        <input type="text" placeholder="0" class="buy7" size="8px"><br>
                                        <!-- <label for=""> Amount </label> -->
                                        <input type="text" value="800" class="price7" size="8px" hidden>
                                        <input type="text" value="BAT" class="name7" size="8px" hidden>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-dark"  id="shop7">
                                        Shop </button>
                                    <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="image/image1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">FootBall</h5>
                    <p class="card-text">Details About it </p>
                    <div class="btn">
                        <button class="btn btn-outline-danger" data-toggle="modal" data-target="#myModal15">
                                <i class="fa fa-shopping-cart" style="font-size:20px"></i>
                            </button>
                        <button class="btn btn-outline-danger">
                                <i class="fa fa-heart"></i>
                            </button>
                        <div id="myModal15" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Wel Come ButtShop</h4>
                                    </div>
                                    <div class="modal-body">
                                        <h6 style="text-align:center,font-size:19px">RS :200 Ball</h6>
                                        <label for="">Enter Quantity</label>
                                        <input type="text" placeholder="0" class="buy8" size="8px"><br>
                                        <!-- <label for=""> Amount </label> -->
                                        <input type="text" value="200" class="price8" size="8px" hidden>
                                        <input type="text" value="Ball" class="name8" size="8px" hidden>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-dark"  id="shop8">
                                        Shop </button>
                                    <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- end card model -->
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="image/image1.jpg" class="card-img-top" alt="oo`ps">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                    <div class="btn">
                        <button class="btn btn-outline-danger" data-toggle="modal" data-target="#myModal16">
                                <i class="fa fa-shopping-cart" style="font-size:20px"></i>
                            </button>
                        <button class="btn btn-outline-danger">
                                <i class="fa fa-heart"></i>
                            </button>
                        <div id="myModal16" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Wel Come ButtShop</h4>
                                    </div>
                                    <div class="modal-body">
                                        <h6 style="text-align:center,font-size:19px">RS :600 Bottle</h6>
                                        <label for="">Enter Quantity</label>
                                        <input type="text" placeholder="0" class="buy9" size="8px"><br>
                                        <!-- <label for=""> Amount </label> -->
                                        <input type="text" value="600" class="price9" size="8px" hidden>
                                        <input type="text" value="Bottle" class="name9" size="8px" hidden>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-dark"  id="shop9">
                                        Shop </button>
                                    <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        </div>
        </div>
        <br>
</Section>


    <!-- FOOTER SATART -->
    <footer>
        <div class="footer">
            <section>
                <div class="container" id="screen-size">
                    <div class="row">
                        <div class="col-sm-3">
                            <br>
                            <h5 style="color:black">Need Helps ?</h5>
                            <button type="button" class="btn btn-outline-dark"
                                style="padding-right:50px;padding-left:50px">
                                Contact Us
                            </button><br><br>
                            <h5 style="font-size:16px;color:black"><i class="fa fa-phone-square " aria-hidden="true"
                                    style="font-size:24px"></i> UAN:042 111-11-6387</h5>
                            <h6 style="font-size:16px;color:black">Mon-Fri 9.00 to 3.30 PST</h6>
                        </div>
                        <div class="col-sm-3">
                            <br>
                            <ul class="list">
                                <h3 style="color:black">FAQ`S</h3>
                                <a href="">
                                    <li>FAQ's</li>
                                </a>
                                <a href="">
                                    <li>How to Buy</li>
                                </a>
                                <a href="">
                                    <li>Item Availability</li>
                                </a>
                                <a href="">
                                    <li>Payment</li>
                                </a>
                                <a href="">
                                    <li>Shipping & Deliveries</li>
                                </a>
                                <a href="">
                                    <li>Exchanges & Returns</li>
                                </a>
                                <a href="">
                                    <li>Discounts/Promotional Codes</li>
                                </a>
                                <a href="">
                                    <li>Modification of Info & Orders</li>
                                </a>

                            </ul>

                        </div>
                        <div class="col-sm-3">
                            <br>
                            <ul class="list">
                                <h3 style="color:black">About ButtShop</h3>
                                <a href="about.php">
                                    <li>About us</li>
                                </a>
                                <a href="">
                                    <li>Blog</li>
                                </a>

                                <a href="">
                                    <li>Stores</li>
                                </a>
                                <a href="">
                                    <li>Contact us</li>
                                </a>
                                <a href="">
                                    <li>Track Your Order</li>
                                </a>
                                <a href="">
                                    <li>Customer Feedback / Complaint Form</li>
                                </a>
                                <a href="">
                                    <li>News</li>
                                </a>

                            </ul>

                        </div>
                        <div class="col-sm-3">
                            <br>
                            <ul class="list">
                                <h3 style="color:black">Get To Know Us</h3>
                                <a href="">
                                    <li>Careers</li>
                                </a>
                                <a href="">
                                    <li>Blog</li>
                                </a>
                                <a href="">
                                    <li>About ButtShop</li>
                                </a>
                                <a href="">
                                    <li>Invester Relation</li>
                                </a>
                                <a href="">
                                    <li>Butt Tours</li>
                                </a>

                            </ul>

                        </div>
                    </div>
                </div>
            </section>
            <hr style="height:1px;border-width:0;color:gray;background-color:gray">
            <section>
                <br><br>
                <div class="container">
                    <h6 style="color:black; margin-right:174px; text-style:iattalic;">Language</h6>
                    <SELECT NAME="language" id="language">
                        <OPTION VALUE="English" SELECTED>Engilsh
                            <!-- <OPTION VALUE="English">Engilsh -->
                    </SELECT>
                </div>
                <!-- <p>Footer <i class="fas fa-thumbs-up"></i></p> -->
            </section>
            <hr style="height:1px;border-width:0;color:gray;background-color:gray">
            <section>
                <div class="App">
                    <div class="row">
                        <div class="col-sm-3">
                            <p>
                                <i class="fa fa-lock" style="font-size:24px"></i>&nbsp Secure online payment
                            </p>
                        </div>
                        <div class="col-sm-3">
                        </div>
                        <div class="col-sm-6">
                            <p>
                                <i class="fa fa-tablet" style="font-size:30px"><i class="fas fa-mobile-alt "
                                        style="font-size:24px"></i></i>
                                Buttstore App
                                <button type="button" class="btn btn-outline-secondary"
                                    style="background-color:black;padding-right:10px;padding-left:10px"><i
                                        class="fa fa-apple" style="font-size:17px"></i> AppleStore</button>
                                <button type="button" class="btn btn-outline-secondary"
                                    style="background-color:black;padding-right:10px;padding-left:10px"><i
                                        class='fab fa-google-play' style='font-size:16px;'></i>
                                    GoogleStore</button>
                            </p>
                            <!-- <br> -->
                            <ul>
                                <li>
                                    <h6 style="color:black">Follow us on</h6>
                                </li>
                            </ul>
                            <ul>
                                <a href="">
                                    <li> <i class="fa fa-facebook" style="font-size:24px" aria-hidden="true"></i>
                                    </li>
                                </a>
                            </ul>
                            <ul>
                                <a href="">
                                    <li> <i class="fa fa-twitter" style="font-size:24px" aria-hidden="true"></i>
                                    </li>
                                </a>
                            </ul>
                            <ul>
                                <a href="">
                                    <li><i class="fa fa-instagram" aria-hidden="true" style="font-size:24px"></i>
                                    </li>
                                </a>
                            </ul>
                            <ul>

                                <a href="">
                                    <li>
                                        <i class="fa fa-snapchat" style="font-size:24px"></i>
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
                    data-toggle="modal" data-target="#myModal90">?
                    HELP</button>
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
                                <label for=" name" style="color:black;font-size:17px;">Your name
                                    (optional)</label><br>
                                <input type="text" size="15" style="border:1px solid black;border-radius:3px;"><br>
                                <label for="email" style="color:black;font-size:17px; ">Email address</label><br>
                                <input type="mail" size="15" style="border:1px solid black;border-radius:3px;"><br>
                                <label for="text" style="color:black;font-size:17px;">How can we help
                                    you?</label><br>
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
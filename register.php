
<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        body{
            padding-top:10px !important;
        }
    </style>
    <meta charset="utf-8">
    <title>techno store</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">


<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
<script src="mail/jqBootstrapValidation.min.js"></script>
<script src="mail/contact.js"></script>
    <!-- Template Javascript -->
<script src="js/main.js"></script>
</head>

<body>
<!-- Navbar Start -->
<div class="container-fluid">
    <div class="row border-top px-xl-5">
        <div class="col-lg-3 d-none d-lg-block">
                <a href="" class="text-decoration-none">
                    <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-info font-weight-bold border px-3 mr-1">T</span>Store</h1>
                </a>
            </div>
            <div class="col-lg-6 col-6 text-left">
                <form action="<?php echo $_SERVER['PHP_SELF'] ; ?>" method="GET">
                    <div class="input-group">
                        <input type="search"name="search" class="form-control" placeholder="Search for products">
                        <div class="input-group-append">
                            <span class="input-group-text bg-transparent text-primary">
                                <i class="fa fa-search text-info"></i>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3 col-6 text-right">
            <a href="" class="btn border">
                    <i class="fas fa-heart text-info"></i>
                    <span class="badge text-black">0</span>
                </a>
                <a href="" class="btn border">
                    <i class="fas fa-shopping-cart text-info"></i>
                    <span class="badge text-black">0</span>
                </a>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid mb-5">
        <div class="row border-top px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a class="btn shadow-none d-flex align-items-center justify-content-between bg-info text-white w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; margin-top: -1px; padding: 0 30px; transition: 1s;">
                    <h6 class="m-0">Products</h6>
                    <i class="fa fa-angle-down text-dark"></i>
                </a>
                <nav class="collapse show navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0" id="navbar-vertical">
                    <div class="navbar-nav w-100 overflow-hidden" style="height: 410px">
                        <a href="" class="nav-item nav-link">loptop</a>
                        <a href="" class="nav-item nav-link">mobile</a>
                        <a href="" class="nav-item nav-link">tablet</a>
                        <a href="" class="nav-item nav-link">TV</a>
                    </div>
                </nav>
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">E</span>Shopper</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="index.php" class="nav-item nav-link active text-black">Home</a>
                            <div class="nav-item dropdown">
                                <!-- <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a> -->
                                <div class="dropdown-menu rounded-0 m-0">
                                    <!-- <a href="cart.php" class="dropdown-item">Shopping Cart</a>
                                    <a href="checkout.php" class="dropdown-item">Checkout</a> -->
                                </div>
                            </div>
                            <a href="contact.php" class="nav-item nav-link">Contact</a>
                        </div>
                        <div class="navbar-nav ml-auto py-0">
                        <?php  if(isset($_SESSION['admin'])){
                                echo '<a href="?logout" class="nav-item nav-link text-danger">Logout</a>';
                            } ?>
                            <a href="login.php" class="nav-item nav-link">Login</a>
                            <a href="register.php" class="nav-item nav-link active text-info">Register</a>
                        </div>
                    </div>
                </nav>
                                                            <!-- Navbar End -->

<?php
include 'includes/config.php';


?>





<div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px;background-color:#EDF1FF;">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Register</h1>
        </div>
        <div class="container-fluid pt-5 text-center">
        <div class="row px-xl-5">
            <div class="col-lg-7 mb-5">
                <div class="contact-form">
                    <form name="register" method="POST"class="">

                        <div class="control-group p-2">
                            <input type="text" class="form-control" id="username" placeholder="Username" name="username" required>
                            
                        </div>

                        <div class="control-group p-2">
                            <input type="password" class="form-control" id="password" placeholder="Password" name="password"required >
                            
                        </div>
                        
                        <div class="control-group p-2">
                            <input type="password" class="form-control" id="password" placeholder="Confirm Password"name="cpassword" required>
                           
                        </div>
                        
                        <div class="control-group p-2">
                            <input type="text" class="form-control" id="numberr" placeholder="Phone Number" name="numberr"required>
                           
                        </div>
                        <div>
                            <button class="btn btn-info py-2 px-4 m-3"name="submit" type="submit" id="submit">SUBMIT</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>       


    </body>
</html>
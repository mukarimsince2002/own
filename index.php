<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e-commerce</title>
    <link href="fa/css/svg-with-js.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">    
    <link rel="stylesheet" href="css/owl.theme.default.min.css">   
        <link rel="stylesheet" href="css/jquery.bxslider.min.css"> 
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<div class="wrapper">
    <div class="navigation-bar">
        <div class="container">
            <!--insert a logo-->
            <div class="logo">
                <img src="images/logo.png" alt="cart" >
            </div>
            <!-- search box-->
            <div class="search-area">
            <form action="" method="post">
                <input type="text" name="search_box" class="search_box" placeholder="Search all items...">
                <button class="search_btn btn btn-success"><i class="fas fa-search"></i></button>
            </form>
            </div>
            <!-- user menu-->
            <div class="user-menu">
                <ul>
                    <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user "></i>My Account</a>
                    <!--dropdown box-->
                    <div class="dropdown-menu dropdown-menu-right bg-dark" style="width: 250px;">
                        <a href="#"><button type="button" class="dropdown-item"><i class="fas fa-user "></i>&nbsp; your account</button></a>
                        <a href="#"><button type="button" class="dropdown-item"><i class="fas fa-cube "></i> &nbsp; your order</button></a>
                        <a href="#"><button type="button" class="dropdown-item"><i class="fas fa-heart "></i> &nbsp; wishist</button></a>
                        <div class="dropdown-divider">
                            <p class="text-center text-white" style="height:15px;line: height 20px;"><small>if you are a new user</small></p>
                            <a href="#"><button type="button" class="dropdown-item text-center"><i class="fas fa-user "></i> &nbsp; Register </button></a>
                            <a href="#"><button type="button" class="dropdown-item text-center bg-danger"><i class="fas fa-user "></i> &nbsp; Login </button></a>
                        </div>
                    </div>
                </li>
                    <li><a href="#"><i class="fas fa-shopping-cart"></i>cart</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.bxslider.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="fa/js/all.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
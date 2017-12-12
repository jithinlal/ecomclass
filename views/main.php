<html>
    <head>
        <meta charset="utf-8">
        <title>e-Commerce</title>
        <link rel="stylesheet" href="<?php echo ROOT_URL; ?>assets/css/styles.css">
        <link rel="stylesheet" href="<?php echo ROOT_URL; ?>assets/css/mystyles.css">        
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    </head>
    <body>
        <div class="main_wrapper">
            <div class="header_wrapper">
                <a href="index.php">
                    <img src="<?php echo ROOT_URL; ?>assets/images/logo.png" id="logo">
                </a>
                <img src="<?php echo ROOT_URL; ?>assets/images/banner.png" id="banner">
            </div>
            <div class="menubar">
                <ul id="menu">
                    <li><a href="">Home</a></li>
                    <li><a href="">All Products</a></li>
                    <li><a href="">My Account</a></li>
                    <li><a href="">Sign Up</a></li>
                    <li><a href="">Shopping Cart</a></li>
                    <li><a href="">Contact Us</a></li>
                </ul>

                <div id="form">
                    <form action="" method="get" enctype="multipart/form-data">
                        <input type="text" name="user_query" placeholder="Search a Product">
                        <input type="submit" name="search" value="Search">
                    </form>
                </div>  
            </div>
            <?php require $view; ?>
            <div id="content_area">                    
                    <div id="shopping_cart">
                        <span style="float:right;font-size:18px;padding:5px;line-height:40px;">                            
                            Welcome <b>USER</b> <b style="color:yellow">Shopping Cart</b>                     
                             Items:0 Price:0 <a href="" class="btn btn-outline-primary">Goto Cart</a>                            
                             <a class="btn btn-success" role="button" href="">Login</a>                            
                             <a href="" class="btn btn-danger" role="button">Logout</a>
                        </span>
                    </div>
                    <div class="products_box">
                        Here the products list comes in
                    </div>
                    <div id="footer">
                        <h2 style="text-align:center;padding-top:30px;">&copy;</h2>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

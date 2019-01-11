<?php
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Paysmosmo</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="bootstrap-4.1.3-dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <link href='https://fonts.googleapis.com/css?family=Source Sans Pro' rel='stylesheet'>
        <link rel="stylesheet" href="style/style.css">
    </head>
    <body>
        <header>
            <div class="upper-nav row">
                <div class="container">
                    <div class="upper-nav-right-menu">
                        <ul class="nav justify-content-end grey lighten-4 py-4">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">How it Works</a>
                            </li>
                            <li class="nav-item" style="border-right: 1px solid #ccc;
                            padding: 0 10px;">
                                <a class="nav-link" href="#">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" style="color:#4FA748;">Sign Up</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <br>
            <div class= "container">
                <div class="row">
                    <div class="col-md-2 logo-wrapper">
                        <a href=# class="logo"><img src="images/logo.jpg"></a>
                    </div>
                    <div class="col-md-7 search-wrapper">
                        <br>
                        <form class="form-inline">
                            <input type="text" placeholder="Search for products" name="search">
                            <button type="submit">SEARCH</button>
                        </form>
                    </div>
                    <div class="col-md-3 shopping-icons">
                        <br>
                        <ul class="list-inline">
                            <li class="list-inline-item"><i class="fas fa-shopping-cart"></i></a><br>Cart</li>
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <li class="list-inline-item"><i class="fas fa-heart"></i></a><br>Wishlist</li>
                            &nbsp;&nbsp;
                            <li class="list-inline-item"><i class="far fa-bell"></i></a><br>Notifications</li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <br>
        <?php
        include buy.php;
        ?>
        <br>
        <div class="container">
            <div class="card">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">EXPLORE POPULAR CATEGORIES</li>
                    <?php
                    include item.php;
                    ?>
                </ul>
            </div>
        </div>
        <br>
        <div class="container">
            <div class="card">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">EXPLORE NEW STUFFS</li>
                    <?php
                    include item.php;
                    ?>
                </ul>
            </div>
        </div>
        <br><br><br><br>
        <?php
        include footer.php;
        ?>
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/main.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
    </body>
    </html>
?>
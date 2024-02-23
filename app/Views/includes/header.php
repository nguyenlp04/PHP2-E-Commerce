<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- molla/about.html  22 Nov 2019 10:03:51 GMT -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Molla - Bootstrap eCommerce Template</title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Molla - Bootstrap eCommerce Template">
    <meta name="author" content="p-themes">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?= BASE_PATH ?>/public/images/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= BASE_PATH ?>/public/images/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= BASE_PATH ?>/public/images/icons/favicon-16x16.png">
    <link rel="manifest" href="<?= BASE_PATH ?>/public/images/icons/site.html">
    <link rel="mask-icon" href="<?= BASE_PATH ?>/public/images/icons/safari-pinned-tab.svg" color="#666666">
    <link rel="shortcut icon" href="<?= BASE_PATH ?>/public/images/icons/favicon.ico">
    <meta name="apple-mobile-web-app-title" content="Molla">
    <meta name="application-name" content="Molla">
    <meta name="msapplication-TileColor" content="#cc9966">
    <meta name="msapplication-config" content="<?= BASE_PATH ?>/public/images/icons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="<?= BASE_PATH ?>/public/vendor/line-awesome/line-awesome/line-awesome/css/line-awesome.min.css">

    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="<?= BASE_PATH ?>/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= BASE_PATH ?>/public/css/plugins/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="<?= BASE_PATH ?>/public/css/plugins/magnific-popup/magnific-popup.css">
    <link rel="stylesheet" href="<?= BASE_PATH ?>/public/css/plugins/jquery.countdown.css">

    <!-- Main CSS File -->
    <link rel="stylesheet" href="<?= BASE_PATH ?>/public/css/style.css">
    <link rel="stylesheet" href="<?= BASE_PATH ?>/public/css/skins/skin-demo-4.css">
    <link rel="stylesheet" href="<?= BASE_PATH ?>/public/css/demos/demo-4.css">
    <link rel="stylesheet" href="<?= BASE_PATH ?>/public/css/plugins/nouislider/nouislider.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


</head>

<body>
    <div class="page-wrapper">
        <header class="header header-intro-clearance header-4">
            <div class="header-top">
                <div class="container">
                    <div class="header-left">
                        <a href="tel:#"><i class="icon-phone"></i>Call: +0123 456 789</a>
                    </div><!-- End .header-left -->

                    <div class="header-right">

                        <ul class="top-menu">
                            <li>
                                <a href="#">Links</a>
                                <ul>
                                    <li>
                                        <div class="header-dropdown">
                                            <a href="#">USD</a>
                                            <div class="header-menu">
                                                <ul>
                                                    <li><a href="#">Eur</a></li>
                                                    <li><a href="#">Usd</a></li>
                                                </ul>
                                            </div><!-- End .header-menu -->
                                        </div>
                                    </li>
                                    <li>
                                        <div class="header-dropdown">
                                            <a href="#">English</a>
                                            <div class="header-menu">
                                                <ul>
                                                    <li><a href="#">English</a></li>
                                                    <li><a href="#">French</a></li>
                                                    <li><a href="#">Spanish</a></li>
                                                </ul>
                                            </div><!-- End .header-menu -->
                                        </div>
                                    </li>
                                    
                                    <?php
                                    if (isset($_SESSION['customer'])) {
                                        echo '<li>
                                        <div class="header-dropdown">
                                        <a href="#">' . $_SESSION["customer"]["fullname"] . '</a>
                                        <div class="header-menu">
                                            <ul>
                                                <li><a href="admin">Dashboard</a></li>
                                                <li><a href="#">Item2</a></li>
                                                <li><a href="#">Item3</a></li>
                                                <li><a href="logout">Logout</a></li>
                                            </ul>
                                        </div>
                                     </div></li>';
                                    } else {
                                        echo '<li><a href="#signin-modal" data-toggle="modal">Sign in / Sign up</a></li>';
                                    }
                                    ?>
                                </ul>
                            </li>
                        </ul><!-- End .top-menu -->
                    </div><!-- End .header-right -->

                </div><!-- End .container -->
            </div><!-- End .header-top -->

            <div class="header-middle">
                <div class="container">
                    <div class="header-left">
                        <button class="mobile-menu-toggler">
                            <span class="sr-only">Toggle mobile menu</span>
                            <i class="icon-bars"></i>
                        </button>

                        <a href="home" class="logo">
                            <img src="<?= BASE_PATH ?>/public/images/logo.png" alt="Molla Logo" width="105" height="25">
                        </a>
                    </div><!-- End .header-left -->

                    <div class="header-center">
                        <div class="header-search header-search-extended header-search-visible d-none d-lg-block">
                            <a href="#" class="search-toggle" role="button"><i class="icon-search"></i></a>
                            <form action="#" method="get">
                                <div class="header-search-wrapper search-wrapper-wide">
                                    <label for="q" class="sr-only">Search</label>
                                    <button class="btn" type="submit"><i class="icon-search"></i></button>
                                    <input type="search" class="form-control" name="q" id="q" placeholder="Search product ..." required>
                                </div><!-- End .header-search-wrapper -->
                            </form>
                        </div><!-- End .header-search -->
                    </div>
                    <div class="header-right">
                        <div class="dropdown cart-dropdown">
                            <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                <div class="icon">
                                    <i class="icon-shopping-cart"></i>
                                    <span class="cart-count">2</span>
                                </div>
                                <p>Cart</p>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="dropdown-cart-products">
                                    <?php

                                    use App\Models\CartModel;
                                    if(isset($_SESSION['customer'])){
                                    $CartModel = new CartModel();
                                    $viewCart = $CartModel->viewCart();
                                    foreach ($viewCart as $product) : ?>
                                        <div class="product">
                                            <div class="product-cart-details">
                                                <h4 class="product-title">
                                                    <a href="product?id=<?= $product['id_product'] ?>"><?= $product['product_name'] ?></a>
                                                </h4>
                                                <p>Color: <?= $product['color'] ?></p>
                                                <p>Size: <?= $product['size'] ?></p>
                                                <span class="cart-product-info">
                                                    <span class="cart-product-qty"><?= $product['quantity'] ?></span>
                                                    x $<?= $product['price'] ?>
                                                </span>
                                            </div><!-- End .product-cart-details -->

                                            <figure class="product-image-container">
                                                <a href="product?id=<?= $product['id_product'] ?>" class="product-image">
                                                    <img src="<?= BASE_PATH ?>/public/images/products/<?= $product['image_url'] ?>" alt="product">
                                                </a>
                                            </figure>
                                            <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                        </div><!-- End .product -->
                                    <?php endforeach; 
                                    }
                                    ?>
                                </div><!-- End .cart-product -->

                                <div class="dropdown-cart-total">
                                    <?php
                                    if(isset($_SESSION['customer'])){
                                    
                                    $totalPrice = 0;
                                    foreach ($viewCart as $product) {
                                        $totalPrice += $product['total'];
                                    }
                                
                                    ?>
                                    <span class="cart-total-price">$<?php echo '<span>Total</span>'. $totalPrice ?></span>
                                    <?php }?>
                                    <!-- <span class="cart-total-price">$<?= $viewCart['total_price'] ?></span> -->
                                </div><!-- End .dropdown-cart-total -->

                                <div class="dropdown-cart-action">
                                    <a href="cart" class="btn btn-primary">View Cart</a>
                                    <a href="checkout" class="btn btn-outline-primary-2"><span>Checkout</span><i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .dropdown-cart-total -->
                            </div><!-- End .dropdown-menu -->
                        </div><!-- End .cart-dropdown -->
                    </div><!-- End .header-right -->
                </div><!-- End .container -->
            </div><!-- End .header-middle -->

            <div class="header-bottom sticky-header">
                <div class="container">

                    <div class="header-center">
                        <nav class="main-nav">
                            <ul class="menu sf-arrows">
                                <li>
                                    <a href="home" class="sf-with-ul">Home</a>
                                </li>
                                <li>
                                    <a href="category" class="sf-with-ul">Shop</a>
                                </li>
                                <li>
                                    <a href="product" class="sf-with-ul">Product</a>

                                </li>
                                <li>
                                    <a href="about" class="sf-with-ul">About</a>
                                </li>
                                <li>
                                    <a href="blog" class="sf-with-ul">Blog</a>
                                </li>
                            </ul><!-- End .menu -->
                        </nav><!-- End .main-nav -->
                    </div><!-- End .header-center -->

                </div><!-- End .container -->
            </div><!-- End .header-bottom -->
        </header><!-- End .header -->
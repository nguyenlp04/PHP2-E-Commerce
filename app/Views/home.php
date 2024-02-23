
        <main class="main">
            <div class="intro-slider-container mb-5">
                <div class="intro-slider owl-carousel owl-theme owl-nav-inside owl-light" data-toggle="owl" data-owl-options='{
                        "dots": true,
                        "nav": false, 
                        "responsive": {
                            "1200": {
                                "nav": true,
                                "dots": false
                            }
                        }
                    }'>
                    <div class="intro-slide" style="background-image: url(assets/images/demos/demo-4/slider/slide-1.png);">
                        <div class="container intro-content">
                            <div class="row justify-content-end">
                                <div class="col-auto col-sm-7 col-md-6 col-lg-5">
                                    <h3 class="intro-subtitle text-third">Deals and Promotions</h3>
                                    <!-- End .h3 intro-subtitle -->
                                    <h1 class="intro-title">Beats by</h1>
                                    <h1 class="intro-title">Dre Studio 3</h1><!-- End .intro-title -->

                                    <div class="intro-price">
                                        <sup class="intro-old-price">$349,95</sup>
                                        <span class="text-third">
                                            $279<sup>.99</sup>
                                        </span>
                                    </div><!-- End .intro-price -->

                                    <a href="category" class="btn btn-primary btn-round">
                                        <span>Shop More</span>
                                        <i class="icon-long-arrow-right"></i>
                                    </a>
                                </div><!-- End .col-lg-11 offset-lg-1 -->
                            </div><!-- End .row -->
                        </div><!-- End .intro-content -->
                    </div><!-- End .intro-slide -->

                    <div class="intro-slide" style="background-image: url(assets/images/demos/demo-4/slider/slide-2.png);">
                        <div class="container intro-content">
                            <div class="row justify-content-end">
                                <div class="col-auto col-sm-7 col-md-6 col-lg-5">
                                    <h3 class="intro-subtitle text-primary">New Arrival</h3>
                                    <!-- End .h3 intro-subtitle -->
                                    <h1 class="intro-title">Apple iPad Pro <br>12.9 Inch, 64GB </h1>
                                    <!-- End .intro-title -->

                                    <div class="intro-price">
                                        <sup>Today:</sup>
                                        <span class="text-primary">
                                            $999<sup>.99</sup>
                                        </span>
                                    </div><!-- End .intro-price -->

                                    <a href="category" class="btn btn-primary btn-round">
                                        <span>Shop More</span>
                                        <i class="icon-long-arrow-right"></i>
                                    </a>
                                </div><!-- End .col-md-6 offset-md-6 -->
                            </div><!-- End .row -->
                        </div><!-- End .intro-content -->
                    </div><!-- End .intro-slide -->
                </div><!-- End .intro-slider owl-carousel owl-simple -->

                <span class="slider-loader"></span><!-- End .slider-loader -->
            </div><!-- End .intro-slider-container -->


            <div class="mb-4"></div><!-- End .mb-4 -->

            <div class="mb-3"></div><!-- End .mb-5 -->

            <div class="container new-arrivals">
                <div class="heading heading-flex mb-3">
                    <div class="heading-left">
                        <h2 class="title">New Arrivals</h2><!-- End .title -->
                    </div><!-- End .heading-left -->

                </div><!-- End .heading -->

                <div class="tab-content tab-content-carousel just-action-icons-sm">
                    <div class="tab-pane p-0 fade show active" id="new-all-tab" role="tabpanel" aria-labelledby="new-all-link">
                        <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl" data-owl-options='{
                                "nav": true, 
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1200": {
                                        "items":5
                                    }
                                }
                            }'>

                            <?php foreach ($getProductNewArrivals as $product) : ?>
                                <div class="product product-<?= $product['id_product'] ?>">
                                    <figure class="product-media">
                                        <span class="product-label label-circle label-new">New</span>
                                        <a href="product?id=<?= $product['id_product'] ?>">
                                            <img src="<?= BASE_PATH ?>/public/images/products/<?= $product['image'] ?>" alt="Product image" class="product-image">
                                        </a>
                                        <div class="product-action">
                                            <a href="product?id=<?= $product['id_product'] ?>" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                            <a href="popup/quickView?id=<?= $product['id_product'] ?>" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                        </div><!-- End .product-action -->
                                    </figure><!-- End .product-media -->
                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a href="#"><?= $product['category_title'] ?></a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="product?id=<?= $product['id_product'] ?>"><?= $product['name_products'] ?></a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            $<?= $product['price'] ?>
                                        </div><!-- End .product-price -->
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <span class="ratings-text">( <?= $product['total_reviews'] ?> Reviews )</span>
                                        </div><!-- End .rating-container -->
                                        <div class="product-nav product-nav-dots">
                                            <a href="#" style="background: #D2B48C;"><span class="sr-only">Color name</span></a>
                                            <a href="#" style="background: #000000;"><span class="sr-only">Color
                                                    name</span></a>
                                            <a href="#" style="background: #808080;"><span class="sr-only">Color
                                                    name</span></a>
                                            <a href="#" style="background: #000080;"><span class="sr-only">Color
                                                    name</span></a>
                                            <a href="#" style="background: #008000;"><span class="sr-only">Color
                                                    name</span></a>
                                        </div><!-- End .product-nav -->
                                    </div><!-- End .product-body -->
                                </div>
                            <?php endforeach; ?>

                        </div><!-- End .owl-carousel -->
                    </div><!-- .End .tab-pane -->
                </div><!-- End .tab-content -->
            </div><!-- End .container -->

            <div class="mb-6"></div><!-- End .mb-6 -->

            <div class="container">
                <div class="cta cta-border mb-5" style="background-image: url(assets/images/demos/demo-4/bg-1.jpg);">
                    <img src="<?= BASE_PATH ?>/public/images/demos/demo-4/camera.png" alt="camera" class="cta-img">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="cta-content">
                                <div class="cta-text text-right text-white">
                                    <p>Shop Today’s Deals <br><strong>Awesome Made Easy. HERO7 Black</strong></p>
                                </div><!-- End .cta-text -->
                                <a href="#" class="btn btn-primary btn-round"><span>Shop Now - $429.99</span><i class="icon-long-arrow-right"></i></a>
                            </div><!-- End .cta-content -->
                        </div><!-- End .col-md-12 -->
                    </div><!-- End .row -->
                </div><!-- End .cta -->
            </div><!-- End .container -->

            <div class="bg-light pt-5 pb-6">
                <div class="container trending-products">
                    <div class="heading heading-flex mb-3">
                        <div class="heading-left">
                            <h2 class="title">Trending Products</h2><!-- End .title -->
                        </div><!-- End .heading-left -->

                        <div class="heading-right">
                            <ul class="nav nav-pills nav-border-anim justify-content-center" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="trending-top-link" data-toggle="tab" href="#trending-top-tab" role="tab" aria-controls="trending-top-tab" aria-selected="true">Top Rated</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="trending-best-link" data-toggle="tab" href="#trending-best-tab" role="tab" aria-controls="trending-best-tab" aria-selected="false">Best Selling</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="trending-sale-link" data-toggle="tab" href="#trending-sale-tab" role="tab" aria-controls="trending-sale-tab" aria-selected="false">On Sale</a>
                                </li>
                            </ul>
                        </div><!-- End .heading-right -->
                    </div><!-- End .heading -->

                    <div class="row">

                        <div class="col-xl-12">
                            <div class="tab-content tab-content-carousel just-action-icons-sm">
                                <div class="tab-pane p-0 fade show active" id="trending-top-tab" role="tabpanel" aria-labelledby="trending-top-link">
                                    <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl" data-owl-options='{
                                            "nav": true, 
                                            "dots": false,
                                            "margin": 20,
                                            "loop": false,
                                            "responsive": {
                                                "0": {
                                                    "items":2
                                                },
                                                "480": {
                                                    "items":2
                                                },
                                                "768": {
                                                    "items":3
                                                },
                                                "992": {
                                                    "items":4
                                                }
                                            }
                                        }'>
                                        <?php foreach ($getProductTopRated as $product) : ?>
                                            <div class="product product-2">
                                                <figure class="product-media">
                                                    <span class="product-label label-circle label-top">Top</span>
                                                    <a href="product?id=<?= $product['id_product'] ?>">
                                                        <img src="<?= BASE_PATH ?>/public/images/products/<?= $product['image'] ?>" alt="Product image" class="product-image">
                                                    </a>
                                                    <div class="product-action">
                                                        <a href="product?id=<?= $product['id_product'] ?>" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                                        <a href="popup/quickView?id=<?= $product['id_product'] ?>" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                                    </div><!-- End .product-action -->
                                                </figure><!-- End .product-media -->
                                                <div class="product-body">
                                                    <div class="product-cat">
                                                        <a href="#"><?= $product['category_title'] ?></a>
                                                    </div><!-- End .product-cat -->
                                                    <h3 class="product-title"><a href="product?id=<?= $product['id_product'] ?>"><?= $product['name_products'] ?></a></h3><!-- End .product-title -->
                                                    <div class="product-price">
                                                        $<?= $product['price'] ?>
                                                    </div><!-- End .product-price -->
                                                    <div class="ratings-container">
                                                        <div class="ratings">
                                                            <div class="ratings-val" style="width: 100%;"></div>
                                                            <!-- End .ratings-val -->
                                                        </div><!-- End .ratings -->
                                                        <span class="ratings-text">( <?= $product['total_reviews'] ?> Reviews )</span>
                                                    </div><!-- End .rating-container -->
                                                    <div class="product-nav product-nav-dots">
                                                        <a href="#" style="background: #D2B48C;"><span class="sr-only">Color name</span></a>
                                                        <a href="#" style="background: #000000;"><span class="sr-only">Color
                                                                name</span></a>
                                                        <a href="#" style="background: #808080;"><span class="sr-only">Color
                                                                name</span></a>
                                                        <a href="#" style="background: #000080;"><span class="sr-only">Color
                                                                name</span></a>
                                                        <a href="#" style="background: #008000;"><span class="sr-only">Color
                                                                name</span></a>
                                                    </div><!-- End .product-nav -->
                                                </div><!-- End .product-body -->
                                            </div><!-- End .product -->
                                        <?php endforeach; ?>

                                        <div class="product product-2">
                                            <figure class="product-media">
                                                <a href="product?id=<?= $product['id_product'] ?>">
                                                    <img src="<?= BASE_PATH ?>/public/images/demos/demo-4/products/product-7.jpg" alt="Product image" class="product-image">
                                                </a>

                                                <div class="product-action">
                                                    <a href="product?id=<?= $product['id_product'] ?>" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                                    <a href="popup/quickView?id=<?= $product['id_product'] ?>" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                                </div><!-- End .product-action -->
                                            </figure><!-- End .product-media -->

                                            <div class="product-body">
                                                <div class="product-cat">
                                                    <a href="#">Video Games</a>
                                                </div><!-- End .product-cat -->
                                                <h3 class="product-title"><a href="product?id=<?= $product['id_product'] ?>">Microsoft - Refurbish
                                                        Xbox One S 500GB</a></h3><!-- End .product-title -->
                                                <div class="product-price">
                                                    $279.99
                                                </div><!-- End .product-price -->
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-val" style="width: 60%;"></div>
                                                        <!-- End .ratings-val -->
                                                    </div><!-- End .ratings -->
                                                    <span class="ratings-text">( 6 Reviews )</span>
                                                </div><!-- End .rating-container -->
                                            </div><!-- End .product-body -->
                                        </div><!-- End .product -->

                                    </div><!-- End .owl-carousel -->
                                </div><!-- .End .tab-pane -->
                                <div class="tab-pane p-0 fade" id="trending-best-tab" role="tabpanel" aria-labelledby="trending-best-link">
                                    <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl" data-owl-options='{
                                            "nav": true, 
                                            "dots": false,
                                            "margin": 20,
                                            "loop": false,
                                            "responsive": {
                                                "0": {
                                                    "items":2
                                                },
                                                "480": {
                                                    "items":2
                                                },
                                                "768": {
                                                    "items":3
                                                },
                                                "992": {
                                                    "items":4
                                                }
                                            }
                                        }'>

                                        <?php foreach ($getProductBestSelling as $product) : ?>
                                            <div class="product product-2">
                                                <figure class="product-media">
                                                    <span class="product-label label-circle label-bestselling">Best Seller</span>
                                                    <a href="product?id=<?= $product['id_product'] ?>">
                                                        <img src="<?= BASE_PATH ?>/public/images/products/<?= $product['image'] ?>" alt="Product image" class="product-image">
                                                    </a>

                                                    <div class="product-action">
                                                        <a href="product?id=<?= $product['id_product'] ?>" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                                        <a href="popup/quickView?id=<?= $product['id_product'] ?>" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                                    </div><!-- End .product-action -->
                                                </figure><!-- End .product-media -->

                                                <div class="product-body">
                                                    <div class="product-cat">
                                                        <a href="#"><?= $product['category_title'] ?></a>
                                                    </div><!-- End .product-cat -->
                                                    <h3 class="product-title"><a href="product?id=<?= $product['id_product'] ?>"><?= $product['name_products'] ?> </a></h3><!-- End .product-title -->
                                                    <div class="product-price">
                                                        $<?= $product['price'] ?>
                                                    </div><!-- End .product-price -->
                                                    <div class="ratings-container">
                                                        <div class="ratings">
                                                            <div class="ratings-val" style="width: 80%;"></div>
                                                            <!-- End .ratings-val -->
                                                        </div><!-- End .ratings -->
                                                        <span class="ratings-text">( <?= $product['total_reviews'] ?> Reviews )</span>
                                                    </div><!-- End .rating-container -->

                                                    <div class="product-nav product-nav-dots">
                                                        <a href="#" style="background: #D2B48C;"><span class="sr-only">Color name</span></a>
                                                        <a href="#" style="background: #000000;"><span class="sr-only">Color
                                                                name</span></a>
                                                        <a href="#" style="background: #808080;"><span class="sr-only">Color
                                                                name</span></a>
                                                        <a href="#" style="background: #000080;"><span class="sr-only">Color
                                                                name</span></a>
                                                        <a href="#" style="background: #008000;"><span class="sr-only">Color
                                                                name</span></a>
                                                    </div><!-- End .product-nav -->
                                                </div><!-- End .product-body -->
                                            </div><!-- End .product -->
                                        <?php endforeach; ?>

                                        <div class="product product-2">
                                            <figure class="product-media">
                                                <span class="product-label label-circle label-top">Top</span>
                                                <a href="product?id=<?= $product['id_product'] ?>">
                                                    <img src="<?= BASE_PATH ?>/public/images/demos/demo-4/products/product-1.jpg" alt="Product image" class="product-image">
                                                </a>

                                                <div class="product-action">
                                                    <a href="product?id=<?= $product['id_product'] ?>" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                                    <a href="popup/quickView?id=<?= $product['id_product'] ?>" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                                </div><!-- End .product-action -->
                                            </figure><!-- End .product-media -->

                                            <div class="product-body">
                                                <div class="product-cat">
                                                    <a href="#">Laptops</a>
                                                </div><!-- End .product-cat -->
                                                <h3 class="product-title"><a href="product?id=<?= $product['id_product'] ?>">MacBook Pro 13"
                                                        Display, i5</a></h3><!-- End .product-title -->
                                                <div class="product-price">
                                                    $1,199.99
                                                </div><!-- End .product-price -->
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-val" style="width: 100%;"></div>
                                                        <!-- End .ratings-val -->
                                                    </div><!-- End .ratings -->
                                                    <span class="ratings-text">( 4 Reviews )</span>
                                                </div><!-- End .rating-container -->
                                            </div><!-- End .product-body -->
                                        </div><!-- End .product -->
                                    </div><!-- End .owl-carousel -->
                                </div><!-- .End .tab-pane -->
                                <div class="tab-pane p-0 fade" id="trending-sale-tab" role="tabpanel" aria-labelledby="trending-sale-link">
                                    <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl" data-owl-options='{
                                            "nav": true, 
                                            "dots": false,
                                            "margin": 20,
                                            "loop": false,
                                            "responsive": {
                                                "0": {
                                                    "items":2
                                                },
                                                "480": {
                                                    "items":2
                                                },
                                                "768": {
                                                    "items":3
                                                },
                                                "992": {
                                                    "items":4
                                                }
                                            }
                                        }'>

                                        <?php foreach ($getProductOnSale as $product) : ?>
                                            <div class="product product-2">
                                                <figure class="product-media">
                                                    <span class="product-label label-circle label-sale">Sale</span>
                                                    <a href="product?id=<?= $product['id_product'] ?>">
                                                        <img src="<?= BASE_PATH ?>/public/images/products/<?= $product['image'] ?>" alt="Product image" class="product-image">
                                                    </a>

                                                    <div class="product-action">
                                                        <a href="product?id=<?= $product['id_product'] ?>" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                                        <a href="popup/quickView?id=<?= $product['id_product'] ?>" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                                    </div><!-- End .product-action -->
                                                </figure><!-- End .product-media -->

                                                <div class="product-body">
                                                    <div class="product-cat">
                                                        <a href="#"><?= $product['category_title'] ?></a>
                                                    </div><!-- End .product-cat -->
                                                    <h3 class="product-title"><a href="product?id=<?= $product['id_product'] ?>"><?= $product['name_products'] ?> </a></h3><!-- End .product-title -->
                                                    <div class="product-price">
                                                        <del> <span class="old-price"> $<?= $product['price'] ?></span></del>&nbsp;
                                                        $<?= $product['price'] ?>
                                                    </div><!-- End .product-price -->
                                                    <div class="ratings-container">
                                                        <div class="ratings">
                                                            <div class="ratings-val" style="width: 80%;"></div>
                                                            <!-- End .ratings-val -->
                                                        </div><!-- End .ratings -->
                                                        <span class="ratings-text">( <?= $product['total_reviews'] ?> Reviews )</span>
                                                    </div><!-- End .rating-container -->
                                                    <div class="product-nav product-nav-dots">
                                                        <a href="#" style="background: #D2B48C;"><span class="sr-only">Color name</span></a>
                                                        <a href="#" style="background: #000000;"><span class="sr-only">Color
                                                                name</span></a>
                                                        <a href="#" style="background: #808080;"><span class="sr-only">Color
                                                                name</span></a>
                                                        <a href="#" style="background: #000080;"><span class="sr-only">Color
                                                                name</span></a>
                                                        <a href="#" style="background: #008000;"><span class="sr-only">Color
                                                                name</span></a>
                                                    </div><!-- End .product-nav -->
                                                </div><!-- End .product-body -->
                                            </div><!-- End .product -->
                                        <?php endforeach; ?>
                                    </div><!-- End .owl-carousel -->
                                </div><!-- .End .tab-pane -->
                            </div><!-- End .tab-content -->
                        </div><!-- End .col-xl-4-5col -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .bg-light pt-5 pb-6 -->

            <div class="mb-5"></div><!-- End .mb-5 -->

            <div class="container for-you">
                <div class="heading heading-flex mb-3">
                    <div class="heading-left">
                        <h2 class="title">Recommendation For You</h2><!-- End .title -->
                    </div><!-- End .heading-left -->

                    <div class="heading-right">
                        <a href="#" class="title-link">View All Recommendadion <i class="icon-long-arrow-right"></i></a>
                    </div><!-- End .heading-right -->
                </div><!-- End .heading -->

                <div class="products">
                    <div class="row justify-content-center">
                        <?php foreach ($getProductRecommend as $product) : ?>
                            <div class="col-6 col-md-4 col-lg-3">
                                <div class="product product-2">
                                    <figure class="product-media">
                                        <!-- <span class="product-label label-circle label-top">Top</span> -->
                                        <a href="product?id=<?= $product['id_product'] ?>">
                                            <img src="<?= BASE_PATH ?>/public/images/products/<?= $product['image'] ?>" alt="Product image" class="product-image">
                                        </a>

                                        <div class="product-action">
                                            <a href="product?id=<?= $product['id_product'] ?>" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                            <a href="popup/quickView?id=<?= $product['id_product'] ?>" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                        </div><!-- End .product-action -->
                                    </figure><!-- End .product-media -->
                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a href="#"><?= $product['category_title'] ?></a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="product?id=<?= $product['id_product'] ?>"><?= $product['name_products'] ?></a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            $<?= $product['price'] ?>
                                        </div><!-- End .product-price -->
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 100%;"></div>
                                                <!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <span class="ratings-text">( <?= $product['total_reviews'] ?> Reviews )</span>
                                        </div><!-- End .rating-container -->
                                        <div class="product-nav product-nav-dots">
                                            <a href="#" style="background: #D2B48C;"><span class="sr-only">Color name</span></a>
                                            <a href="#" style="background: #000000;"><span class="sr-only">Color
                                                    name</span></a>
                                            <a href="#" style="background: #808080;"><span class="sr-only">Color
                                                    name</span></a>
                                            <a href="#" style="background: #000080;"><span class="sr-only">Color
                                                    name</span></a>
                                            <a href="#" style="background: #008000;"><span class="sr-only">Color
                                                    name</span></a>
                                        </div><!-- End .product-nav -->
                                    </div><!-- End .product-body -->
                                </div><!-- End .product -->
                            </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                        <?php endforeach; ?>
                    </div><!-- End .row -->
                </div><!-- End .products -->
            </div><!-- End .container -->

            <!-- <div class="mb-4"></div>End .mb-4 -->
            <div class="container">
                <div class="col-md-12">

                    <!-- <div class="section-header d-flex flex-wrap justify-content-between my-5">
                        <h2 class="section-title">How to create an individualized Gift</h2>
                    </div> -->
                    <div class="heading heading-flex mb-3">
                        <div class="heading-left">
                            <h2 class="title">Blogs</h2><!-- End .title -->
                        </div><!-- End .heading-left -->
                        <div class="heading-right">
                            <a href="#" class="title-link">View All Blogs <i class="icon-long-arrow-right"></i></a>
                        </div><!-- End .heading-right -->
                    </div><!-- End .heading -->

                </div>
                <div class="row">
                    <?php foreach ($getBlogForHomePage as $blog) : ?>
                        <div class="col-md-4">
                            <article class="post-item card border-0 shadow-sm p-3">
                                <div class="image-holder zoom-effect">
                                    <a href="#">
                                        <img src="<?= BASE_PATH ?>/public/images/blog<?= $blog['image'] ?>" alt="post" class="card-img-top">
                                    </a>
                                </div>
                                <div class="card-body">
                                    <div class="post-meta d-flex text-uppercase gap-3 my-2 align-items-center">
                                        <div class="meta-date" style="display: flex; align-items: center"><svg width="16" height="16">
                                                <use xlink:href="#calendar"></use>
                                            </svg>&nbsp;<?= date('d M Y', strtotime($blog['date'])) ?></div>
                                    </div>
                                    <div class="post-header">
                                        <h5 class="post-title">
                                            <a href="#" class="text-decoration-none"><?= $blog['title'] ?></a>
                                        </h5>
                                        <div class="post-content">
                                            <p><?= $blog['description'] ?></p>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="container">
                <hr class="mb-0">
            </div>

            <div class="icon-boxes-container bg-transparent">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-lg-3">
                            <div class="icon-box icon-box-side">
                                <span class="icon-box-icon text-dark">
                                    <i class="icon-rocket"></i>
                                </span>
                                <div class="icon-box-content">
                                    <h3 class="icon-box-title">Free Shipping</h3><!-- End .icon-box-title -->
                                    <p>Orders $50 or more</p>
                                </div><!-- End .icon-box-content -->
                            </div><!-- End .icon-box -->
                        </div><!-- End .col-sm-6 col-lg-3 -->

                        <div class="col-sm-6 col-lg-3">
                            <div class="icon-box icon-box-side">
                                <span class="icon-box-icon text-dark">
                                    <i class="icon-rotate-left"></i>
                                </span>

                                <div class="icon-box-content">
                                    <h3 class="icon-box-title">Free Returns</h3><!-- End .icon-box-title -->
                                    <p>Within 30 days</p>
                                </div><!-- End .icon-box-content -->
                            </div><!-- End .icon-box -->
                        </div><!-- End .col-sm-6 col-lg-3 -->

                        <div class="col-sm-6 col-lg-3">
                            <div class="icon-box icon-box-side">
                                <span class="icon-box-icon text-dark">
                                    <i class="icon-info-circle"></i>
                                </span>

                                <div class="icon-box-content">
                                    <h3 class="icon-box-title">Get 20% Off 1 Item</h3><!-- End .icon-box-title -->
                                    <p>when you sign up</p>
                                </div><!-- End .icon-box-content -->
                            </div><!-- End .icon-box -->
                        </div><!-- End .col-sm-6 col-lg-3 -->

                        <div class="col-sm-6 col-lg-3">
                            <div class="icon-box icon-box-side">
                                <span class="icon-box-icon text-dark">
                                    <i class="icon-life-ring"></i>
                                </span>

                                <div class="icon-box-content">
                                    <h3 class="icon-box-title">We Support</h3><!-- End .icon-box-title -->
                                    <p>24/7 amazing services</p>
                                </div><!-- End .icon-box-content -->
                            </div><!-- End .icon-box -->
                        </div><!-- End .col-sm-6 col-lg-3 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .icon-boxes-container -->
        </main><!-- End .main -->

        


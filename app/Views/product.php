<?php

echo "<pre>";
// var_dump($getProductDetail);
echo "</pre>";

?>

<!-- End .header -->
<main class="main">
    <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
        <div class="container d-flex align-items-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Products</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?= $getProductDetail['item']['name_products'] ?></li>
            </ol>

            <nav class="product-pager ml-auto" aria-label="Product">
                <a class="product-pager-link product-pager-prev" href="#" aria-label="Previous" tabindex="-1">
                    <i class="icon-angle-left"></i>
                    <span>Prev</span>
                </a>

                <a class="product-pager-link product-pager-next" href="#" aria-label="Next" tabindex="-1">
                    <span>Next</span>
                    <i class="icon-angle-right"></i>
                </a>
            </nav><!-- End .pager-nav -->
        </div><!-- End .container -->
    </nav><!-- End .breadcrumb-nav -->

    <div class="page-content">
        <div class="container">
            <form action="addToCart" method="POST">
                <div class="product-details-top">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="product-gallery product-gallery-vertical">
                                <div class="row">
                                    <figure class="product-main-image">
                                        <img id="product-zoom" src="<?= BASE_PATH ?>/public/images/products/<?= $getProductDetail['images'][0] ?>" data-zoom-image="<?= BASE_PATH ?>/public/images/products/<?= $getProductDetail['images'][0] ?>" alt="product image">

                                        <a href="#" id="btn-product-gallery" class="btn-product-gallery">
                                            <i class="icon-arrows"></i>
                                        </a>
                                    </figure><!-- End .product-main-image -->

                                    <div id="product-zoom-gallery" class="product-image-gallery">
                                        <?php foreach ($getProductDetail['images'] as $imageProduct) : ?>
                                            <a class="product-gallery-item active" href="#" data-image="<?= BASE_PATH ?>/public/images/products/<?= $imageProduct ?>" data-zoom-image="<?= BASE_PATH ?>/public/images/products/<?= $imageProduct ?>">
                                                <img src="<?= BASE_PATH ?>/public/images/products/<?= $imageProduct ?>" alt="product side">
                                            </a>
                                        <?php endforeach; ?>
                                    </div><!-- End .product-image-gallery -->
                                </div><!-- End .row -->
                            </div><!-- End .product-gallery -->
                        </div><!-- End .col-md-6 -->

                        <div class="col-md-6">
                            <div class="product-details">
                                <h1 class="product-title"><?= $getProductDetail['item']['name_products'] ?></h1><!-- End .product-title -->

                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <a class="ratings-text" href="#product-review-link" id="review-link">( <?= $getProductDetail['item']['total_reviews'] ?> Reviews )</a>&nbsp; <i style="font-size: 22px" class="icon-shopping-cart"></i><span class="text-muted"><?= $getProductDetail['item']['quantity'] ?> sản phẩm trong kho</span>
                                </div><!-- End .rating-container -->

                                <div class="product-price">
                                    $<?= $getProductDetail['item']['price'] ?>
                                </div><!-- End .product-price -->

                                <div class="product-content">
                                    <p><?= $getProductDetail['item']['description'] ?> </p>
                                </div><!-- End .product-content -->

                                <div class="details-filter-row details-row-size">
                                    <label>Color: </label>
                                    <div class="product-nav product-nav-dots">
                                        <a href="#" class="color-box" style="width: 30px; height: 30px; background: #D2B48C;" value="Light Brown"><span class="sr-only">Color
                                                name</span></a>
                                        <a href="#" class="color-box" style="width: 30px; height: 30px; background: #000000;" value="Black"><span class="sr-only">Color
                                                name</span></a>
                                        <a href="#" class="color-box" style="width: 30px; height: 30px; background: #808080;" value="Gray"><span class="sr-only">Color
                                                name</span></a>
                                        <a href="#" class="color-box" style="width: 30px; height: 30px; background: #000080;" value="Navy Blue"><span class="sr-only">Color
                                                name</span></a>
                                        <a href="#" class="color-box" style="width: 30px; height: 30px; background: #008000;" value="Green"><span class="sr-only">Color
                                                name</span></a>
                                        <input type="hidden" name="color" id="selectedColor">
                                    </div><!-- End .product-nav -->
                                    <span class="text-color"></span>
                                </div><!-- End .details-filter-row -->

                                <div class="details-filter-row details-row-size">
                                    <label for="size">Size:</label>
                                    <div class="select-custom">
                                        <select name="size" id="size" class="form-control">
                                            <option value="#" selected="selected">Select a size</option>
                                            <option value="S">Small</option>
                                            <option value="M">Medium</option>
                                            <option value="L">Large</option>
                                            <option value="XL">Extra Large</option>
                                        </select>
                                        <input type="hidden" name="size" id="selectedSize">

                                    </div><!-- End .select-custom -->

                                    <a href="#" class="size-guide"><i class="icon-th-list"></i>size guide</a>
                                </div><!-- End .details-filter-row -->

                                <div class="details-filter-row details-row-size">
                                    <label for="qty">Quantity:</label>
                                    <div class="product-details-quantity">
                                        <input type="number" id="qty" class="form-control" value="1" min="1" max="10" step="1" data-decimals="0" required>
                                        <input type="hidden" name="qty" id="selectedQty" value="1">
                                    </div><!-- End .product-details-quantity -->
                                </div><!-- End .details-filter-row -->
                                <div id="error-message" style="display: none; color: red;">Vui lòng chọn kích thước và màu sắc trước khi thêm vào giỏ hàng.</div>

                                <div class="product-details-action">
                                    <div type="button" id="addToCartButton" class="btn-product btn-cart"><span>add to cart</span></div>
                                    <div class="details-action-wrapper">
                                    </div><!-- End .details-action-wrapper -->
                                </div><!-- End .product-details-action -->

                                <div class="product-details-footer">
                                    <div class="product-cat">
                                        <span>Category:</span>
                                        <a href="#"><?= $getProductDetail['item']['category_title'] ?></a>
                                    </div><!-- End .product-cat -->

                                    <div class="social-icons social-icons-sm">
                                        <span class="social-label">Share:</span>
                                        <a href="#" class="social-icon" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                                        <a href="#" class="social-icon" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                                        <a href="#" class="social-icon" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
                                        <a href="#" class="social-icon" title="Pinterest" target="_blank"><i class="icon-pinterest"></i></a>
                                    </div>
                                </div><!-- End .product-details-footer -->
                            </div><!-- End .product-details -->
                        </div><!-- End .col-md-6 -->
                    </div><!-- End .row -->
                </div><!-- End .product-details-top -->

                <div class="product-details-tab">
                    <ul class="nav nav-pills justify-content-center" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="product-desc-link" data-toggle="tab" href="#product-desc-tab" role="tab" aria-controls="product-desc-tab" aria-selected="true">Description</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="product-info-link" data-toggle="tab" href="#product-info-tab" role="tab" aria-controls="product-info-tab" aria-selected="false">Additional information</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="product-shipping-link" data-toggle="tab" href="#product-shipping-tab" role="tab" aria-controls="product-shipping-tab" aria-selected="false">Shipping & Returns</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="product-review-link" data-toggle="tab" href="#product-review-tab" role="tab" aria-controls="product-review-tab" aria-selected="false">Reviews (<?= $getProductDetail['item']['total_reviews'] ?>)</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="product-desc-tab" role="tabpanel" aria-labelledby="product-desc-link">
                            <div class="product-desc-content">
                                <h3>Product Information</h3>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. </p>
                                <ul>
                                    <li>Nunc nec porttitor turpis. In eu risus enim. In vitae mollis elit. </li>
                                    <li>Vivamus finibus vel mauris ut vehicula.</li>
                                    <li>Nullam a magna porttitor, dictum risus nec, faucibus sapien.</li>
                                </ul>

                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. </p>
                            </div><!-- End .product-desc-content -->
                        </div><!-- .End .tab-pane -->
                        <div class="tab-pane fade" id="product-info-tab" role="tabpanel" aria-labelledby="product-info-link">
                            <div class="product-desc-content">
                                <h3>Information</h3>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. </p>

                                <h3>Fabric & care</h3>
                                <ul>
                                    <li>Faux suede fabric</li>
                                    <li>Gold tone metal hoop handles.</li>
                                    <li>RI branding</li>
                                    <li>Snake print trim interior </li>
                                    <li>Adjustable cross body strap</li>
                                    <li> Height: 31cm; Width: 32cm; Depth: 12cm; Handle Drop: 61cm</li>
                                </ul>

                                <h3>Size</h3>
                                <p>one size</p>
                            </div><!-- End .product-desc-content -->
                        </div><!-- .End .tab-pane -->
                        <div class="tab-pane fade" id="product-shipping-tab" role="tabpanel" aria-labelledby="product-shipping-link">
                            <div class="product-desc-content">
                                <h3>Delivery & returns</h3>
                                <p>We deliver to over 100 countries around the world. For full details of the delivery options we offer, please view our <a href="#">Delivery information</a><br>
                                    We hope you’ll love every purchase, but if you ever need to return an item you can do so within a month of receipt. For full details of how to make a return, please view our <a href="#">Returns information</a></p>
                            </div><!-- End .product-desc-content -->
                        </div><!-- .End .tab-pane -->
                        <div class="tab-pane fade" id="product-review-tab" role="tabpanel" aria-labelledby="product-review-link">
                            <div class="reviews">
                                <h3>Reviews (<?= $getProductDetail['item']['total_reviews'] ?>)</h3>

                                <?php foreach ($getReviewProduct as $review) : ?>
                                    <div class="review">
                                        <div class="row no-gutters">
                                            <div class="col-auto">
                                                <h4><a href="#"><?= $review['fullname'] ?></a></h4>
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                                    </div><!-- End .ratings -->
                                                </div><!-- End .rating-container -->
                                                <span class="review-date"><?= date('M d, Y', strtotime($review['date_review'])) ?></span>
                                            </div><!-- End .col -->
                                            <div class="col">
                                                <!-- <h4>Very good</h4> -->

                                                <div class="review-content">
                                                    <p><?= $review['review'] ?></p>
                                                </div><!-- End .review-content -->

                                                <div class="review-action">
                                                    <a href="#"><i class="icon-thumbs-up"></i>Helpful (0)</a>
                                                    <a href="#"><i class="icon-thumbs-down"></i>Unhelpful (0)</a>
                                                </div><!-- End .review-action -->
                                            </div><!-- End .col-auto -->
                                        </div><!-- End .row -->
                                    </div><!-- End .review -->
                                <?php endforeach; ?>

                            </div><!-- End .reviews -->
                        </div><!-- .End .tab-pane -->
                    </div><!-- End .tab-content -->
                </div><!-- End .product-details-tab -->

                <h2 class="title text-center mb-4">You May Also Like</h2><!-- End .title text-center -->

                <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl" data-owl-options='{
                            "nav": false, 
                            "dots": true,
                            "margin": 20,
                            "loop": false,
                            "responsive": {
                                "0": {
                                    "items":1
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
                                    "items":4,
                                    "nav": true,
                                    "dots": false
                                }
                            }
                        }'>
                    <?php foreach ($getRelatedProducts as $product) : ?>
                        <div class="product product-7 text-center">
                            <figure class="product-media">
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
                                    <a href="#" class="color-box" style="background: #D2B48C;" value="Light Brown"><span class="sr-only">Color
                                            name</span></a>
                                    <a href="#" class="color-box" style="background: #000000;" value="Black"><span class="sr-only">Color
                                            name</span></a>
                                    <a href="#" class="color-box" style="background: #808080;" value="Gray"><span class="sr-only">Color
                                            name</span></a>
                                    <a href="#" class="color-box" style="background: #000080;" value="Navy Blue"><span class="sr-only">Color
                                            name</span></a>
                                    <a href="#" class="color-box" style="background: #008000;" value="Green"><span class="sr-only">Color
                                            name</span></a>
                                    <!-- <input type="hidden" name="color" id="selectedColor"> -->

                                    <script>
                                        // Lắng nghe sự kiện click trên nút "add to cart"
                                        document.getElementById('addToCartButton').addEventListener('click', function() {
                                            var selectedColor = document.getElementById('selectedColor').value;
                                            var selectedSize = document.getElementById('size').value;
                                            var selectedQty = document.getElementById('qty').value;
                                            var flatColor = true;
                                            var flatSize = true;
                                            console.log(document.getElementById('selectedColor'));
                                            if (selectedColor === '') flatColor = false;
                                            if (selectedSize === '#') flatSize = false;
                                            if (flatColor && flatSize) {
                                                Swal.fire({
                                                    title: 'Thành công!',
                                                    text: 'Sản phẩm đã được thêm vào giỏ hàng!',
                                                    icon: 'success'
                                                });
                                                var addToCartURL = "addToCart?id=<?= $getProductDetail['item']['id_product'] ?>&color=" + selectedColor + "&size=" + selectedSize + "&qty=" + selectedQty;
                                                window.location.href = addToCartURL;
                                            } else {
                                                document.getElementById('error-message').style.display = 'block';
                                            }
                                        });

                                        var colorBoxes = document.querySelectorAll('.color-box');
                                        colorBoxes.forEach(function(colorBox) {
                                            colorBox.addEventListener('click', function() {
                                                colorBoxes.forEach(function(box) {
                                                    box.classList.remove('active');
                                                });
                                                this.classList.add('active');
                                                var colorActive = document.querySelector('.color-box.active');
                                                var selectedColorValue = colorActive.getAttribute('value');
                                                console.log(selectedColorValue);
                                                document.getElementById('selectedColor').value = selectedColorValue;
                                                document.querySelector('.text-color').innerHTML = selectedColorValue;

                                            });
                                        });

                                        var selectElement = document.getElementById('size');
                                        selectElement.addEventListener('change', function() {
                                            var selectedValue = selectElement.value;
                                            console.log(selectedValue);
                                            document.getElementById('selectedSize').value = selectedValue;
                                        });

                                        var inputElement = document.getElementById('qty');
                                        inputElement.addEventListener('input', function() {
                                            var selectedValue = inputElement.value;
                                            console.log(selectedValue);
                                            document.getElementById('selectedQty').value = selectedValue;
                                        });
                                    </script>
                                </div><!-- End .product-nav -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    <?php endforeach; ?>
                </div><!-- End .owl-carousel -->
            </form>
        </div><!-- End .container -->
    </div><!-- End .page-content -->
</main><!-- End .main -->
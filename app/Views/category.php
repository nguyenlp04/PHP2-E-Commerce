<!-- End .header -->

<main class="main">
    <nav aria-label="breadcrumb" class="breadcrumb-nav mb-2">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Shop</a></li>
            </ol>
        </div><!-- End .container -->
    </nav><!-- End .breadcrumb-nav -->

    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="toolbox">
                        <div class="toolbox-left">
                            <div class="toolbox-info">
                                Showing <span>9 of 56</span> Products
                            </div><!-- End .toolbox-info -->
                        </div><!-- End .toolbox-left -->
                    </div><!-- End .toolbox -->

                    <div class="products mb-3">
                        <div class="row">
                            <?php foreach ($getAllProducts as $product) : ?>

                                <div class="col-6 col-md-4 col-lg-4 col-xl-3 product-item">
                                    <div class="product product-7 text-center">
                                        <figure class="product-media">
                                            <a href="product?id=<?= $product['id_product'] ?>">
                                                <img src="<?= BASE_PATH ?>/public/images/products/<?= $product['image'] ?>" alt="Product image" class="product-image">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="popup/quickView?id=<?= $product['id_product'] ?>" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                            </div><!-- End .product-action-vertical -->

                                            <div class="product-action">
                                                <a href="product?id=<?= $product['id_product'] ?>" class="btn-product btn-cart"><span>add to cart</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat category_title">
                                                <a href="#"><?= $product['category_title'] ?></a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product?id=<?= $product['id_product'] ?>"><?= $product['name_products'] ?></a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                $<?= $product['price'] ?>
                                            </div><!-- End .product-price -->
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                                <span class="ratings-text">( <?= $product['total_reviews'] ?> Reviews )</span>
                                            </div><!-- End .rating-container -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-sm-6 col-lg-4 col-xl-3 -->
                            <?php endforeach; ?>

                        </div><!-- End .row -->
                    </div><!-- End .products -->


                    <!-- <nav aria-label="Page navigation">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
                                <a class="page-link page-link-prev" href="#" aria-label="Previous" tabindex="-1" aria-disabled="true">
                                    <span aria-hidden="true"><i class="icon-long-arrow-left"></i></span>Prev
                                </a>
                            </li>
                            <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item-total">of 6</li>
                            <li class="page-item">
                                <a class="page-link page-link-next" href="#" aria-label="Next">
                                    Next <span aria-hidden="true"><i class="icon-long-arrow-right"></i></span>
                                </a>
                            </li>
                        </ul>
                    </nav> -->


                    <nav aria-label="Page navigation" id="pagination">
                        <ul class="pagination justify-content-center">
                            <!-- Các nút phân trang sẽ được thêm vào đây bằng JavaScript -->
                        </ul>
                    </nav>


                </div><!-- End .col-lg-9 -->
                <aside class="col-lg-3 order-lg-first">
                    <div class="sidebar sidebar-shop">
                        <div class="widget widget-clean">
                            <label>Filters:</label>
                            <a href="#" class="sidebar-filter-clear">Clean All</a>
                        </div><!-- End .widget widget-clean -->

                        <div class="widget widget-collapsible">
                            <h3 class="widget-title">
                                <a data-toggle="collapse" href="#widget-1" role="button" aria-expanded="true" aria-controls="widget-1">
                                    Category
                                </a>
                            </h3><!-- End .widget-title -->

                            <div class="collapse show" id="widget-1">
                                <div class="widget-body">
                                    <div class="filter-items filter-items-count">

                                        <?php foreach ($getCategoryProductCounts as $category) : ?>
                                            <div class="filter-item">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="<?= $category['id_category'] ?>">
                                                    <label class="custom-control-label title_category" for="<?= $category['id_category'] ?>"><?= $category['title'] ?></label>
                                                </div><!-- End .custom-checkbox -->
                                                <span class="item-count"><?= $category['product_count'] ?></span>
                                            </div><!-- End .filter-item -->
                                        <?php endforeach; ?>

                                    </div><!-- End .filter-items -->
                                </div><!-- End .widget-body -->
                            </div><!-- End .collapse -->
                        </div><!-- End .widget -->
                        
                        <div class="widget widget-collapsible">
                            <h3 class="widget-title">
                                <a data-toggle="collapse" href="#widget-5" role="button" aria-expanded="true" aria-controls="widget-5">
                                    Price
                                </a>
                            </h3><!-- End .widget-title -->

                            <div class="collapse show" id="widget-5">
                                <div class="widget-body">
                                    <div class="filter-price">
                                        <div class="filter-price-text">
                                            Price Range:
                                            <span id="filter-price-range"></span>
                                        </div><!-- End .filter-price-text -->

                                        <div id="price-slider"></div><!-- End #price-slider -->
                                    </div><!-- End .filter-price -->
                                </div><!-- End .widget-body -->
                            </div><!-- End .collapse -->
                        </div><!-- End .widget -->
                    </div><!-- End .sidebar sidebar-shop -->
                </aside><!-- End .col-lg-3 -->
            </div><!-- End .row -->
        </div><!-- End .container -->
    </div><!-- End .page-content -->
</main><!-- End .main -->
<script src="<?= BASE_PATH ?>/public/js/wNumb.js"></script>
<script src="<?= BASE_PATH ?>/public/js/bootstrap-input-spinner.js"></script>
<script src="<?= BASE_PATH ?>/public/js/jquery.magnific-popup.min.js"></script>
<script src="<?= BASE_PATH ?>/public/js/nouislider.min.js"></script>
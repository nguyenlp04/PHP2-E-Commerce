<div class="container quickView-container">
	<div class="quickView-content">
		<div class="row">
			<div class="col-lg-7 col-md-6">
				<div class="row">
					<div class="product-left">
						<a href="#one" class="carousel-dot active">
							<img src="<?= BASE_PATH ?>/public/images/products/<?= $getProductDetail['images'][0] ?>">
						</a>
						<a href="#two" class="carousel-dot">
							<img src="<?= BASE_PATH ?>/public/images/products/<?= $getProductDetail['images'][1] ?>">
						</a>
						<a href="#three" class="carousel-dot">
							<img src="<?= BASE_PATH ?>/public/images/products/<?= $getProductDetail['images'][2] ?>">
						</a>
						<a href="#four" class="carousel-dot">
							<img src="<?= BASE_PATH ?>/public/images/products/<?= $getProductDetail['images'][3] ?>">
						</a>
					</div>
					<div class="product-right">
						<div class="owl-carousel owl-theme owl-nav-inside owl-light mb-0" data-toggle="owl" data-owl-options='{
	                        "dots": false,
	                        "nav": false, 
	                        "URLhashListener": true,
	                        "responsive": {
	                            "900": {
	                                "nav": true,
	                                "dots": true
	                            }
	                        }
	                    }'>
							<div class="intro-slide" data-hash="one">
								<img src="<?= BASE_PATH ?>/public/images/products/<?= $getProductDetail['images'][0] ?>" alt="Image Desc">
								<a href="https://www.portotheme.com/html/molla/popup/popup/fullscreen.html" class="btn-fullscreen">
									<i class="icon-arrows"></i>
								</a>
							</div><!-- End .intro-slide -->

							<div class="intro-slide" data-hash="two">
								<img src="<?= BASE_PATH ?>/public/images/products/<?= $getProductDetail['images'][1] ?>" alt="Image Desc">
								<a href="https://www.portotheme.com/html/molla/popup/popup/fullscreen.html" class="btn-fullscreen">
									<i class="icon-arrows"></i>
								</a>
							</div><!-- End .intro-slide -->

							<div class="intro-slide" data-hash="three">
								<img src="<?= BASE_PATH ?>/public/images/products/<?= $getProductDetail['images'][2] ?>" alt="Image Desc">
								<a href="https://www.portotheme.com/html/molla/popup/popup/fullscreen.html" class="btn-fullscreen">
									<i class="icon-arrows"></i>
								</a>
							</div><!-- End .intro-slide -->

							<div class="intro-slide" data-hash="four">
								<img src="<?= BASE_PATH ?>/public/images/products/<?= $getProductDetail['images'][3] ?>" alt="Image Desc">
								<a href="https://www.portotheme.com/html/molla/popup/popup/fullscreen.html" class="btn-fullscreen">
									<i class="icon-arrows"></i>
								</a>
							</div><!-- End .intro-slide -->
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-5 col-md-6">
				<h2 class="product-title"><?= $getProductDetail['item']['name_products'] ?></h2>
				<h3 class="product-price">$<?= $getProductDetail['item']['price'] ?></h3>

				<div class="ratings-container">
					<div class="ratings">
						<div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
					</div><!-- End .ratings -->
					<span class="ratings-text">( <?= $getProductDetail['item']['total_reviews'] ?> Reviews )</span>
				</div><!-- End .rating-container -->

				<!-- <p class="product-txt"><?= $getProductDetail['item']['description'] ?></p> -->
				<div class="details-filter-row product-nav product-nav-thumbs">
					<label for="size">color:</label>
					<div class="product-nav product-nav-dots">
                                    <a href="#" style="width: 30px; height: 30px; background: #D2B48C;"><span class="sr-only">Color 
                                            name</span></a>
                                    <a href="#" style="width: 30px; height: 30px; background: #000000;"><span class="sr-only">Color
                                            name</span></a>
                                    <a href="#" style="width: 30px; height: 30px; background: #808080;"><span class="sr-only">Color
                                            name</span></a>
                                    <a href="#" style="width: 30px; height: 30px; background: #000080;"><span class="sr-only">Color
                                            name</span></a>
                                    <a href="#" style="width: 30px; height: 30px; background: #008000;"><span class="sr-only">Color
                                            name</span></a>
                                </div><!-- End .product-nav -->
				</div><!-- End .product-nav -->

				<div class="details-filter-row details-row-size">
					<label for="size">Size:</label>
					<div class="select-custom">
						<select name="size" id="size" class="form-control">
							<option value="#" selected="selected">Select a size</option>
							<option value="s">Small</option>
							<option value="m">Medium</option>
							<option value="l">Large</option>
							<option value="xl">Extra Large</option>
						</select>
					</div><!-- End .select-custom -->
				</div>


				<div class="details-filter-row details-row-size">
					<label for="qty">Qty:</label>
					<div class="product-details-quantity">
						<input type="number" id="qty" class="form-control" value="1" min="1" max="10" step="1" data-decimals="0" required>
					</div><!-- End .product-details-quantity -->
				</div><!-- End .details-filter-row -->

				<div class="product-details-action">
					<div class="details-action-wrapper">
						<!-- <a href="#" class="btn-product btn-wishlist" title="Wishlist"><span>Add to Wishlist</span></a>
						<a href="#" class="btn-product btn-compare" title="Compare"><span>Add to Compare</span></a> -->
					</div><!-- End .details-action-wrapper -->
					<a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
				</div>

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
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End .header -->
<main class="main">
	<div class="page-header text-center" style="background-image: url('<?= BASE_PATH ?>/public/images/page-header-bg.jpg')">
		<div class="container">
			<h1 class="page-title">Shopping Cart<span>Shop</span></h1>
		</div><!-- End .container -->
	</div><!-- End .page-header -->
	<nav aria-label="breadcrumb" class="breadcrumb-nav">
		<div class="container">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.html">Home</a></li>
				<li class="breadcrumb-item"><a href="#">Shop</a></li>
				<li class="breadcrumb-item active" aria-current="page">Shopping Cart</li>
			</ol>
		</div><!-- End .container -->
	</nav><!-- End .breadcrumb-nav -->

	<div class="page-content">
		<div class="cart">
			<div class="container">
				<div class="row">
					<div class="col-lg-9">
						<table class="table table-cart table-mobile">
							<thead>
								<tr>
									<th>Product</th>
									<th>Price</th>
									<th>Size</th>
									<th>Quantity</th>
									<th>Total</th>
									<th></th>
								</tr>
							</thead>

							<tbody>
								<?php
								// echo "<pre>";
								// var_dump($viewCart);
								// echo "</pre>";
								// 
								?>
								<?php if(isset($_SESSION['customer'])){ foreach ($viewCart as $product) : ?>

									<tr>
										<td class="product-col">
											<div class="product">
												<figure class="product-media">
													<a href="">
														<img src="<?= BASE_PATH ?>/public/images/products/<?= $product['image_url'] ?>" alt="Product image">
													</a>
												</figure>

												<h3 class="product-title">
													<a href="product?id=<?= $product['id_product'] ?>"><?= $product['product_name'] ?></a>
													<p>Color: <?= $product['color'] ?></p>
													<p>Size: <?= $product['size'] ?></p>
												</h3><!-- End .product-title -->
											</div><!-- End .product -->
										</td>
										<td class="price-col">$<?= $product['price'] ?></td>
										<td class="price-col"><?= $product['size'] ?></td>
										<td class="price-col"><?= $product['quantity'] ?></td>
										<td class="total-col">$<?= $product['total'] ?></td>
										<td class="remove-col"><button class="btn-remove"><i class="icon-close"></i></button></td>
									</tr>
								<?php endforeach; }?>


							</tbody>
						</table><!-- End .table table-wishlist -->

						<div class="cart-bottom">
							<div class="cart-discount">
								<form action="#">
									<div class="input-group">
										<input type="text" class="form-control" id="inputCoupon" required placeholder="coupon code">
										<div class="input-group-append">
											<button class="apply-coupon btn btn-outline-primary-2" type="submit"><i class="icon-long-arrow-right"></i></button>
										</div><!-- .End .input-group-append -->
									</div><!-- End .input-group -->
								</form>
							</div><!-- End .cart-discount -->

						</div><!-- End .cart-bottom -->
					</div><!-- End .col-lg-9 -->
					<aside class="col-lg-3">
						<div class="summary summary-cart">
							<h3 class="summary-title">Cart Total</h3><!-- End .summary-title -->

							<table class="table table-summary">
								<tbody>
									<tr class="summary-subtotal">
										<?php
										if(isset($_SESSION['customer'])){
										$totalPrice = 0;
										foreach ($viewCart as $product) {
											$totalPrice += $product['total'];
										}
										?>
										<td>Subtotal:</td>
										<td>$<?= $totalPrice ?></td>
									</tr>
									<tr class="summary-subtotal">
										<?php
										$totalPrice = 0;
										foreach ($viewCart as $product) {
											$totalPrice += $product['total'];
										}
										?>
										<td>Shipping:</td>
										<td>$4.99</td>
									</tr><!-- End .summary-subtotal -->
									<tr class="summary-subtotal">
										<td>Coupon:</td>
										<td style="color: red;">-$4.99</td>
									</tr><!-- End .summary-subtotal -->
									<!-- <tr class="summary-shipping">
										<td>Shipping:</td>
										<td>&nbsp;</td>
									</tr> -->

									<!-- <tr class="summary-shipping-row">
										<td>
											<div class="custom-control custom-radio">
												<input type="radio" id="free-shipping" name="shipping" class="custom-control-input">
												<label class="custom-control-label" for="free-shipping">Free Shipping</label>
											</div>
										</td>
										<td>$0.00</td>
									</tr>

									<tr class="summary-shipping-row">
										<td>
											<div class="custom-control custom-radio">
												<input type="radio" id="standart-shipping" name="shipping" class="custom-control-input">
												<label class="custom-control-label" for="standart-shipping">Standart:</label>
											</div>
										</td>
										<td>$10.00</td>
									</tr>

									<tr class="summary-shipping-row">
										<td>
											<div class="custom-control custom-radio">
												<input type="radio" id="express-shipping" name="shipping" class="custom-control-input">
												<label class="custom-control-label" for="express-shipping">Express:</label>
											</div>
										</td>
										<td>$20.00</td>
									</tr> -->
									<!-- End .summary-shipping-row -->

									<tr class="summary-total">
										<td>Total:</td>
										<td>$<?= $totalPrice + 4.99 ?><?php }?></td>
									</tr><!-- End .summary-total -->
								</tbody>
							</table><!-- End .table table-summary -->

							<a href="checkout" class="btn btn-outline-primary-2 btn-order btn-block">PROCEED TO CHECKOUT</a>
						</div><!-- End .summary -->

						<a href="category" class="btn btn-outline-dark-2 btn-block mb-3"><span>CONTINUE SHOPPING</span><i class="icon-refresh"></i></a>
					</aside><!-- End .col-lg-3 -->
				</div><!-- End .row -->
			</div><!-- End .container -->
		</div><!-- End .cart -->
	</div><!-- End .page-content -->
</main><!-- End .main -->

<script>
	let couponApplied = false;
	document.querySelector(".apply-coupon").addEventListener('click', function(event) {
		event.preventDefault();
		console.log(1);
		const listCoupon = 
			<?php
			echo $getCoupons;
			?>
		;
		console.log(listCoupon);
		const inputCoupon = document.getElementById("inputCoupon").value;
		if (inputCoupon.trim() === '') {
			alert('Vui lòng nhập mã giảm giá.');
			return; // Dừng tính toán nếu không có mã giảm giá
		}
		if (!listCoupon[inputCoupon]) {
			alert('Mã giảm giá không hợp lệ.');
			return; // Dừng tính toán nếu mã giảm giá không hợp lệ
		}
		// Lưu trữ giá trị mã giảm giá vào biến couponDiscount
		let couponDiscount = 0;
		for (const coupon in listCoupon) {
			if (inputCoupon === coupon) {
				couponDiscount = listCoupon[coupon];
				console.log(listCoupon[coupon]);
				break; // Dừng khi tìm thấy mã giảm giá
			}
		}
	})
</script>
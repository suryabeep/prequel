<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

	<title>eCommerce Template</title>

	<meta name="keywords" content="HTML5 Template" />
	<meta name="description" content="eCommerce Template">
	<meta name="author" content="D-THEMES">

	<!-- Favicon -->
	<link rel="icon" type="image/png" href="images/icons/favicon.png">

	<script>
		WebFontConfig = {
			google: { families: ['Open+Sans:400,600,700', 'Poppins:400,500,600,700'] }
		};
		(function (d) {
			var wf = d.createElement('script'), s = d.scripts[0];
			wf.src = 'js/webfont.js';
			wf.async = true;
			s.parentNode.insertBefore(wf, s);
		})(document);
	</script>


	<link rel="stylesheet" type="text/css" href="vendor/fontawesome-free/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.min.css">

	<!-- Plugins CSS File -->
	<link rel="stylesheet" type="text/css" href="vendor/magnific-popup/magnific-popup.min.css">

	<!-- Main CSS File -->
	<link rel="stylesheet" type="text/css" href="css/style.min.css">

	<!-- header & footer -->
    <link rel="stylesheet" type="text/css" href="css/demo14.min.css">
</head>

<body>
	<div class="loading-overlay">
		<div class="bounce-loader">
			<div class="bounce1"></div>
			<div class="bounce2"></div>
			<div class="bounce3"></div>
			<div class="bounce4"></div>
		</div>
	</div>
	<div class="page-wrapper">
		<?php include "./share/header.php" ?>
		<!-- End Header -->
		<main class="main compare-wrap">
			<div class="container">
				<!-- Feature -->
				<div class="feature-head">General Feature</div>
				<table>
					<tr>
						<th>Product</th>
						<td><img src="images/NewFolder/product2.jpeg" alt="product 1" style="width:150px;"/></td>
						<td><img src="images/NewFolder/product4.jpeg" alt="product 2" style="width:150px;"/></td>
						<td><img src="images/NewFolder/product3.jpeg" alt="product 3" style="width:150px;"/></td>
					</tr>
					<tr>
						<th>Product Name</th>
						<td>Termeric Tea</td>
						<td>Black Tea</td>
						<td>White Tea</td>
					</tr>
					<tr>
						<th>Ratings & Reviews</th>
						<td>
							<div class="ratings-full">
								<span class="ratings" style="width:80%"></span>
								<span class="tooltiptext tooltip-top"></span>
							</div>
							<a href="javascript:void(0)" class="link-to-tab rating-reviews">
								( 6 reviews )
							</a>
						</td>
						<td>
							<div class="ratings-full">
								<span class="ratings" style="width:80%"></span>
								<span class="tooltiptext tooltip-top"></span>
							</div>
							<a href="javascript:void(0)" class="link-to-tab rating-reviews">( 6 reviews )
							</a>
						</td>
						<td>
							<div class="ratings-full">
								<span class="ratings" style="width:80%"></span>
								<span class="tooltiptext tooltip-top"></span>
							</div>
							<a href="javascript:void(0)" class="link-to-tab rating-reviews">( 6 reviews )
							</a>
						</td>
					</tr>
					<tr>
						<th>Highlights</th>
						<td>The spice has been used for its medicinal, antioxidant, and anti-inflammatory properties for thousands of years. Turmeric tea is one popular form of consuming turmeric. It has a unique but subtle flavor. The tea is also great way to reap the following health benefits of turmeric.
						</td>
						<td>
						Black tea is a true tea that comes from the Camellia sinensis plant. Black tea leaves are allowed to fully oxidize before being processed and dried, which makes the leaves dark brown and gives the tea its signature flavor profile. Black teas tend to be bold and brisk, and they are often described as astringent.
						</td>
						<td>
						White tea is a type of tea that has a delicate flavor and is naturally low in caffeine. It is harvested at the start of the season, and is comprised of buds and new leaves. White tea gets its name from the white fuzz on the young leaves that helps protect the tea plant's new growth from insects.
						</td>
					</tr>
					<tr>
						<th>Net Weight</th>
						<td>4.4 oz./125g</td>
						<td>4.4 oz./125g</td>
						<td>4.4 oz./125g</td>
					</tr>
					
					<tr>
						<th>Instructions</th>
						<td>For every cup, add 1 rounded tsp. of leaves to pot. Add freshly boiled water and brew for 3–5 minutes. Place strainer over cup and pour.</td>
						<td>For every cup, add 1 rounded tsp. of leaves to pot. Add freshly boiled water and brew for 3–5 minutes. Place strainer over cup and pour.</td>
						<td>For every cup, add 1 rounded tsp. of leaves to pot. Add freshly boiled water and brew for 3–5 minutes. Place strainer over cup and pour.</td>
					</tr>

				</table>


				<!-- Feature 2-->
				<div class="feature-head d-none">Feature 2</div>
				<table class="d-none">
					<tr>
						<th>SIM Size</th>
						<td>Nano Sim</td>
						<td>Micro Sim</td>
						<td>Hybrid Sim</td>
					</tr>
					<tr>
						<th>Network type</th>
						<td>
							3G, 4G
						</td>
						<td>
							2G, 3G
						</td>
						<td>
							4G, 5G
						</td>
					</tr>
					<tr>
						<th>RAM</th>
						<td>3 GB RAM</td>
						<td>6 GB RAM </td>
						<td>8 GB RAM </td>
					</tr>
					<tr>
						<th>Flash</th>
						<td>Yes</td>
						<td>No</td>
						<td>Yes</td>
					</tr>
					
					<tr>
						<th>Wifi</th>
						<td>No</td>
						<td>Yes</td>
						<td>Yes</td>
					</tr>
					<tr>
						<th>Action</th>
						<td><a class="buy-now-btn">BUY NOW</a></td>
						<td><a class="buy-now-btn">BUY NOW</a></td>
						<td><a class="buy-now-btn">BUY NOW</a></td>
					</tr>

				</table>
			</div>
		</main>
		<!-- End Main -->
		
		<?php include "./share/footer.php" ?>
		<!-- End Footer -->
	</div>
	<!-- Sticky Footer -->
	<div class="sticky-footer sticky-content fix-bottom">
		<a href="demo1.html" class="sticky-link">
			<i class="d-icon-home"></i>
			<span>Home</span>
		</a>
		<a href="shop.html" class="sticky-link">
			<i class="d-icon-volume"></i>
			<span>Categories</span>
		</a>
		<a href="wishlist.html" class="sticky-link">
			<i class="d-icon-heart"></i>
			<span>Wishlist</span>
		</a>
		<a href="account.html" class="sticky-link">
			<i class="d-icon-user"></i>
			<span>Account</span>
		</a>
		<div class="dropdown cart-dropdown dir-up">
			<a href="cart.html" class="sticky-link cart-toggle">
				<i class="d-icon-bag"></i>
				<span>Cart</span>
			</a>
			<!-- End of Cart Toggle -->
			<div class="dropdown-box">
				<div class="products scrollable">
					<div class="product product-cart">
						<figure class="product-media">
							<a href="#">
								<img src="images/cart/product-1.jpg" alt="product" width="90" height="90" />
							</a>
						</figure>
						<div class="product-detail">
							<a href="product.html" class="product-name">Coast Pool Comfort Jacket</a>
							<div class="price-box">
								<span class="product-quantity">1</span>
								<span class="product-price">$21.00</span>
							</div>
						</div>
						<button class="btn btn-link btn-close">
							<i class="d-icon-cancel"></i>
						</button>
					</div>
					<!-- End of Cart Product -->
					<div class="product product-cart">
						<figure class="product-media">
							<a href="product.html">
								<img src="images/cart/product-2.jpg" alt="product" width="90" height="90" />
							</a>
						</figure>
						<div class="product-detail">
							<a href="product.html" class="product-name">Fashion Cowboy Hat</a>
							<div class="price-box">
								<span class="product-quantity">1</span>
								<span class="product-price">$21.00</span>
							</div>
						</div>
						<button class="btn btn-link btn-close">
							<i class="d-icon-cancel"></i>
						</button>
					</div>
					<!-- End of Cart Product -->
				</div>
				<!-- End of Products  -->
				<div class="cart-total">
					<label>Subtotal:</label>
					<span class="price">$42.00</span>
				</div>
				<!-- End of Cart Total -->
				<div class="cart-action">
					<a href="cart.html" class="btn btn-primary btn-cart">View Cart</a>
					<a href="checkout.html" class="btn btn-secondary btn-checkout">Checkout</a>
				</div>
				<!-- End of Cart Action -->
			</div>
			<!-- End of Dropdown Box -->
		</div>
	</div>
	<!-- Scroll Top -->
	<a id="scroll-top" href="#top" title="Top" role="button" class="scroll-top"><i class="d-icon-angle-up"></i></a>

	<!-- MobileMenu -->
	<div class="mobile-menu-wrapper">
		<div class="mobile-menu-overlay">
		</div>
		<!-- End Overlay -->
		<a class="mobile-menu-close" href="#"><i class="d-icon-times"></i></a>
		<!-- End CloseButton -->
		<div class="mobile-menu-container scrollable">
			<form action="#" class="input-wrapper">
				<input type="text" class="form-control" name="search" autocomplete="off"
					placeholder="Search your keyword..." required />
				<button class="btn btn-search" type="submit">
					<i class="d-icon-search"></i>
				</button>
			</form>
			<!-- End Search Form -->
			<ul class="mobile-menu mmenu-anim">
				<li>
					<a href="demo1.html">Home</a>
				</li>
				<li>
					<a href="#" class="active">Categories</a>
					<ul>
						<li>
							<a href="#">
								Variations 1
							</a>
							<ul>
								<li><a href="shop-banner-sidebar.html">Banner With Sidebar</a></li>
								<li><a href="shop-boxed-banner.html">Boxed Banner</a></li>
								<li><a href="shop-infinite-scroll.html">Infinite Ajaxscroll</a></li>
								<li><a href="shop-horizontal-filter.html">Horizontal Filter</a></li>
								<li><a href="#">Navigation Filter<span class="tip tip-hot">Hot</span></a></li>

								<li><a href="shop-off-canvas.html">Off-Canvas Filter</a></li>
								<li><a href="shop-right-sidebar.html">Right Toggle Sidebar</a></li>
							</ul>
						</li>
						<li>
							<a href="#">
								Variations 2
							</a>
							<ul>

								<li><a href="shop-grid-3cols.html">3 Columns Mode<span
											class="tip tip-new">New</span></a></li>
								<li><a href="shop-grid-4cols.html">4 Columns Mode</a></li>
								<li><a href="shop-grid-5cols.html">5 Columns Mode</a></li>
								<li><a href="shop-grid-6cols.html">6 Columns Mode</a></li>
								<li><a href="shop-grid-7cols.html">7 Columns Mode</a></li>
								<li><a href="shop-grid-8cols.html">8 Columns Mode</a></li>
								<li><a href="shop-list.html">List Mode</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li>
					<a href="product.html">Products</a>
					<ul>
						<li>
							<a href="#">Product Pages</a>
							<ul>
								<li><a href="product-simple.html">Simple Product</a></li>
								<li><a href="product.html">Variable Product</a></li>
								<li><a href="product-sale.html">Sale Product</a></li>
								<li><a href="product-featured.html">Featured &amp; On Sale</a></li>

								<li><a href="shop-off-canvas.html">Off-Canvas Filter</a></li>
								<li><a href="shop-right-sidebar.html">Right Toggle Sidebar</a></li>
								<li><a href="product-sticky-cart.html">Add Cart Sticky<span
											class="tip tip-hot">Hot</span></a></li>
								<li><a href="product-tabinside.html">Tab Inside</a></li>
							</ul>
						</li>
						<li>
							<a href="#">Product Layouts</a>
							<ul>
								<li><a href="product-grid.html">Grid Images<span class="tip tip-new">New</span></a></li>
								<li><a href="product-masonry.html">Masonry</a></li>
								<li><a href="product-gallery.html">Gallery Type</a></li>
								<li><a href="product-full.html">Full Width Layout</a></li>
								<li><a href="product-sticky.html">Sticky Info</a></li>
								<li><a href="product-sticky-both.html">Left &amp; Right Sticky</a></li>
								<li><a href="product-horizontal.html">Horizontal Thumb</a></li>
								<li><a href="product-left-sidebar">Left Sidebar</a></li>
								<li><a href="#">Build Your Own</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li>
					<a href="#">Pages</a>
					<ul>
						<li><a href="about-us.html">About</a></li>
						<li><a href="contact-us.html">Contact Us</a></li>
						<li><a href="account.html">Login</a></li>
						<li><a href="#">FAQs</a></li>
						<li><a href="error-404.html">Error 404</a></li>
						<li><a href="coming-soon.html">Coming Soon</a></li>
					</ul>
				</li>
				<li>
					<a href="#">Blog</a>
					<ul>
						<li><a href="blog-classic.html">Classic</a></li>
						<li><a href="blog-listing.html">Listing</a></li>
						<li>
							<a href="#">Grid</a>
							<ul>
								<li><a href="blog-grid-2col.html">Grid 2 columns</a></li>
								<li><a href="blog-grid-3col.html">Grid 3 columns</a></li>
								<li><a href="blog-grid-4col.html">Grid 4 columns</a></li>
								<li><a href="blog-grid-sidebar.html">Grid sidebar</a></li>
							</ul>
						</li>
						<li>
							<a href="#">Masonry</a>
							<ul>
								<li><a href="blog-masonry-2col.html">Masonry 2 columns</a></li>
								<li><a href="blog-masonry-3col.html">Masonry 3 columns</a></li>
								<li><a href="blog-masonry-4col.html">Masonry 4 columns</a></li>
								<li><a href="blog-masonry-sidebar.html">Masonry sidebar</a></li>
							</ul>
						</li>
						<li>
							<a href="#">Mask</a>
							<ul>
								<li><a href="blog-mask-grid.html">Blog mask grid</a></li>
								<li><a href="blog-mask-masonry.html">Blog mask masonry</a></li>
							</ul>
						</li>
						<li>
							<a href="post-single.html">Single Post</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#">ELements</a>
					<ul>
						<li><a href="element-products.html">Products</a></li>
						<li><a href="element-typography.html">Typography</a></li>
						<li><a href="element-titles.html">Titles</a></li>
						<li><a href="element-categories.html">Product Category</a></li>
						<li><a href="element-buttons.html">Buttons</a></li>
						<li><a href="element-accordions.html">Accordions</a></li>
						<li><a href="element-alerts.html">Alert &amp; Notification</a></li>
						<li><a href="element-tabs.html">Tabs</a></li>
						<li><a href="element-testimonials.html">Testimonials</a></li>
						<li><a href="element-blog-posts.html">Blog Posts</a></li>
						<li><a href="element-instagrams.html">Instagrams</a></li>
						<li><a href="element-cta.html">Call to Action</a></li>
						<li><a href="element-icon-boxes.html">Icon Boxes</a></li>
						<li><a href="element-icons.html">Icons</a></li>
					</ul>
				</li>
				<li><a href="#">Buy!</a></li>
			</ul>
			<!-- End MobileMenu -->
		</div>
	</div>
	<!-- Plugins JS File -->
	<script src="vendor/jquery/jquery.min.js"></script>
	<script src="vendor/sticky/sticky.min.js"></script>
	<script src="vendor/elevatezoom/jquery.elevatezoom.min.js"></script>
	<script src="vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
	<script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
	<!-- Main JS File -->
	<script src="js/main.js"></script>
</body>

</html>
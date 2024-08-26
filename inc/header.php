<?php
$activePage = basename($_SERVER['PHP_SELF'], ".php");
$isHomePage = ($activePage == 'index');
?>
<!--Header-->
<header class="header d-flex align-items-center header-10 header-fixed mih-75 header-fixed">
    <div class="container-fluid">
        <div class="row">
            <!--Logo-->
            <div class="logo col-4 col-sm-4 col-md-4 col-lg-3 align-self-center">
                <a class="logoImg" href="index.html"><img src="assets/images/logo/Logo.png" alt="Hema Multipurpose Html Template" title="Hema Multipurpose Html Template" width="149" height="60" /></a>
            </div>
            <!--End Logo-->
            <!--Menu-->
            <div class="col-1 col-sm-1 col-md-1 col-lg-6 align-self-center d-menu-col">
                <nav class="navigation" id="AccessibleNav">
                    <ul id="siteNav" class="site-nav medium center">
                        <li class="lvl1 parent dropdown"><a href="#">Home </a>
                            <!-- <ul class="dropdown">
                                <li><a href="index.html" class="site-nav lvl-2">Home 01 - Fashion</a></li>
                                <li><a href="index2-footwear.html" class="site-nav lvl-2">Home 02 - Footwear</a></li>
                                <li><a href="index3-bags.html" class="site-nav lvl-2">Home 03 - Bags</a></li>
                                <li><a href="index4-electronic.html" class="site-nav lvl-2">Home 04 - Electronic</a></li>
                                <li><a href="index5-tools-parts.html" class="site-nav lvl-2">Home 05 - Tools &amp; Parts</a></li>
                                <li><a href="index6-jewelry.html" class="site-nav lvl-2">Home 06 - Jewelry</a></li>
                                <li><a href="index7-organic-food.html" class="site-nav lvl-2">Home 07 - Organic Food</a></li>
                                <li><a href="index8-cosmetics.html" class="site-nav lvl-2">Home 08 - Cosmetics</a></li>
                                <li><a href="index9-furniture.html" class="site-nav lvl-2">Home 09 - Furniture</a></li>
                                <li><a href="index10-sunglasses.html" class="site-nav lvl-2">Home 10 - Sunglasses</a></li>
                                <li><a href="index11-medical.html" class="site-nav lvl-2">Home 11 - Medical</a></li>
                                <li><a href="index12-christmas.html" class="site-nav lvl-2">Home 12 - Christmas</a></li>
                            </ul> -->
                        </li>
                        <!-- <li class="lvl1 parent megamenu"><a href="#">Shop <i class="icon anm anm-angle-down-l"></i></a>
                            <div class="megamenu style1">
                                <ul class="row grid--uniform mmWrapper">
                                    <li class="lvl-1 col-md-3 col-lg-3 w-22"><a href="#;" class="site-nav lvl-1 menu-title">Collection Page</a>
                                        <ul class="subLinks">
                                            <li class="lvl-2"><a href="collection-style1.html" class="site-nav lvl-2">Collection style1</a></li>
                                            <li class="lvl-2"><a href="collection-style2.html" class="site-nav lvl-2">Collection style2</a></li>
                                            <li class="lvl-2"><a href="collection-style3.html" class="site-nav lvl-2">Collection style3</a></li>
                                            <li class="lvl-2"><a href="collection-style4.html" class="site-nav lvl-2">Collection style4</a></li>
                                            <li class="lvl-2"><a href="sub-collection-style1.html" class="site-nav lvl-2">Sub Collection style1</a></li>
                                            <li class="lvl-2"><a href="sub-collection-style2.html" class="site-nav lvl-2">Sub Collection style2</a></li>
                                            <li class="lvl-2"><a href="collection-empty.html" class="site-nav lvl-2">Collection Empty</a></li>
                                            <li class="lvl-2"><a href="shop-search-results.html" class="site-nav lvl-2">Shop Search Results</a></li>
                                            <li class="lvl-2"><a href="shop-swatches-style.html" class="site-nav lvl-2">Shop Swatches style</a></li>
                                        </ul>
                                    </li>
                                    <li class="lvl-1 col-md-3 col-lg-3 w-22"><a href="#;" class="site-nav lvl-1 menu-title">Shop Page</a>
                                        <ul class="subLinks">
                                            <li class="lvl-2"><a href="shop-grid-view.html" class="site-nav lvl-2">Shop Grid View</a></li>
                                            <li class="lvl-2"><a href="shop-list-view.html" class="site-nav lvl-2">Shop List View</a></li>
                                            <li class="lvl-2"><a href="shop-left-sidebar.html" class="site-nav lvl-2">Shop Left Sidebar</a></li>
                                            <li class="lvl-2"><a href="shop-right-sidebar.html" class="site-nav lvl-2">Shop Right Sidebar</a></li>
                                            <li class="lvl-2"><a href="shop-top-filter.html" class="site-nav lvl-2">Shop Top Filter</a></li>
                                            <li class="lvl-2"><a href="shop-masonry-grid.html" class="site-nav lvl-2">Shop Masonry Grid</a></li>
                                            <li class="lvl-2"><a href="shop-with-category.html" class="site-nav lvl-2">Shop With Category</a></li>
                                            <li class="lvl-2"><a href="shop-grid-view.html" class="site-nav lvl-2">Classic Pagination</a></li>
                                            <li class="lvl-2"><a href="shop-right-sidebar.html" class="site-nav lvl-2">Infinite Scrolling</a></li>
                                        </ul>
                                    </li>
                                    <li class="lvl-1 col-md-3 col-lg-3 w-22"><a href="#;" class="site-nav lvl-1 menu-title">Shop Other Page</a>
                                        <ul class="subLinks">
                                            <li class="lvl-2"><a href="wishlist-style1.html" class="site-nav lvl-2">Wishlist Style1</a></li>
                                            <li class="lvl-2"><a href="wishlist-style2.html" class="site-nav lvl-2">Wishlist Style2</a></li>
                                            <li class="lvl-2"><a href="compare-style1.html" class="site-nav lvl-2">Compare Style1</a></li>
                                            <li class="lvl-2"><a href="compare-style2.html" class="site-nav lvl-2">Compare Style2</a></li>
                                            <li class="lvl-2"><a href="cart-style1.html" class="site-nav lvl-2">Cart Style1</a></li>
                                            <li class="lvl-2"><a href="cart-style2.html" class="site-nav lvl-2">Cart Style2</a></li>
                                            <li class="lvl-2"><a href="checkout-style1.html" class="site-nav lvl-2">Checkout Style1</a></li>
                                            <li class="lvl-2"><a href="checkout-style2.html" class="site-nav lvl-2">Checkout Style2</a></li>
                                            <li class="lvl-2"><a href="order-success.html" class="site-nav lvl-2">Order Success</a></li>
                                        </ul>
                                    </li>
                                    <li class="lvl-1 col-md-3 col-lg-3 w-34 banner-col">
                                        <div class="banner-wrap">
                                            <a href="shop-left-sidebar.html"><img class="blur-up lazyload" data-src="assets/images/megamenu/banner-menu.jpg" src="assets/images/megamenu/banner-menu.jpg" alt="banner" width="600" height="440" /></a>
                                            <div class="banner-content">
                                                <h4>Hot deals</h4>
                                                <h3>Don't miss <br>Trending</h3>
                                                <div class="banner-save text-primary">Save to 50%</div>
                                                <div class="banner-btn"><a href="shop-left-sidebar.html" class="btn btn-primary">Shop now</a></div>
                                            </div>
                                            <div class="banner-discount">
                                                <h3><span>50%</span> Off</h3>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li> -->
                        <li class="lvl1 parent megamenu"><a href="#">Product </a>
                            <div class="megamenu style2">
                                <ul class="row mmWrapper">
                                    <li class="lvl-1 col-md-3 col-lg-3"><a href="#;" class="site-nav lvl-1 menu-title">Product Page</a>
                                        <ul class="subLinks">
                                            <li class="lvl-2"><a href="product-layout1.html" class="site-nav lvl-2">Product Layout1</a></li>
                                            <li class="lvl-2"><a href="product-layout2.html" class="site-nav lvl-2">Product Layout2</a></li>
                                            <li class="lvl-2"><a href="product-layout3.html" class="site-nav lvl-2">Product Layout3</a></li>
                                            <li class="lvl-2"><a href="product-layout4.html" class="site-nav lvl-2">Product Layout4</a></li>
                                            <li class="lvl-2"><a href="product-layout5.html" class="site-nav lvl-2">Product Layout5</a></li>
                                            <li class="lvl-2"><a href="product-layout6.html" class="site-nav lvl-2">Product Layout6</a></li>
                                            <li class="lvl-2"><a href="product-layout7.html" class="site-nav lvl-2">Product Layout7</a></li>
                                            <li class="lvl-2"><a href="product-3d-ar-models.html" class="site-nav lvl-2">Product 3D, AR models</a></li>
                                        </ul>
                                    </li>
                                    <li class="lvl-1 col-md-3 col-lg-3"><a href="#;" class="site-nav lvl-1 menu-title">Product Page Types</a>
                                        <ul class="subLinks">
                                            <li class="lvl-2"><a href="product-standard.html" class="site-nav lvl-2">Standard Product</a></li>
                                            <li class="lvl-2"><a href="product-variable.html" class="site-nav lvl-2">Variable Product</a></li>
                                            <li class="lvl-2"><a href="product-grouped.html" class="site-nav lvl-2">Grouped Product</a></li>
                                            <li class="lvl-2"><a href="product-layout4.html" class="site-nav lvl-2">Product Back in stock</a></li>
                                            <li class="lvl-2"><a href="product-layout6.html" class="site-nav lvl-2">Product Accordion</a></li>
                                            <li class="lvl-2"><a href="product-layout7.html" class="site-nav lvl-2">Product Tabs Left</a></li>
                                            <li class="lvl-2"><a href="product-layout6.html" class="site-nav lvl-2">Product Bundle</a></li>
                                            <li class="lvl-2"><a href="prodcut-360-view.html" class="site-nav lvl-2">Product 360 View</a></li>
                                        </ul>
                                    </li>
                                    <li class="lvl-1 col-md-3 col-lg-6 product-col"><a href="#;" class="site-nav lvl-1 menu-title">Weekly Bestsellers</a>
                                        <div class="grid-products weekly-product gp10 mt-1">
                                            <div class="item">
                                                <div class="product-wrap position-relative">
                                                    <!-- Start Product Image -->
                                                    <div class="product-image mb-0">
                                                        <a href="product-layout1.html" class="product-img"><img class="blur-up lazyload" data-src="assets/images/products/sunglasses-product1.jpg" src="assets/images/products/sunglasses-product1.jpg" alt="product" title="Product" width="500" height="500" /></a>
                                                        <div class="product-labels round-pill"><span class="lbl on-sale">Sale</span></div>
                                                    </div>
                                                    <!-- End Product Image -->
                                                    <!-- Start Product Details -->
                                                    <div class="product-details text-center">
                                                        <div class="product-name"><a class="fw-normal" href="product-layout1.html">Gentle Monster Gold Red</a></div>
                                                        <div class="product-price">
                                                            <span class="price old-price">$114.00</span><span class="price">$99.00</span>
                                                        </div>
                                                        <div class="product-review">
                                                            <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i>
                                                            <span class="caption hidden ms-1">3 Reviews</span>
                                                        </div>
                                                    </div>
                                                    <!-- End product details -->
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="product-wrap position-relative">
                                                    <!-- Start Product Image -->
                                                    <div class="product-image mb-0">
                                                        <a href="product-layout1.html" class="product-img"><img class="blur-up lazyload" data-src="assets/images/products/sunglasses-product2.jpg" src="assets/images/products/sunglasses-product2.jpg" alt="product" title="Product" width="500" height="500" /></a>
                                                    </div>
                                                    <!-- End Product Image -->
                                                    <!-- Start Product Details -->
                                                    <div class="product-details text-center">
                                                        <div class="product-name"><a class="fw-normal" href="product-layout1.html">Gentle Monster Silver Stripe</a></div>
                                                        <div class="product-price">
                                                            <span class="price">$165.00</span>
                                                        </div>
                                                        <div class="product-review">
                                                            <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i>
                                                            <span class="caption hidden ms-1">13 Reviews</span>
                                                        </div>
                                                    </div>
                                                    <!-- End product details -->
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="product-wrap position-relative">
                                                    <!-- Start Product Image -->
                                                    <div class="product-image mb-0">
                                                        <a href="product-layout1.html" class="product-img"><img class="blur-up lazyload" data-src="assets/images/products/sunglasses-product3.jpg" src="assets/images/products/sunglasses-product3.jpg" alt="product" title="Product" width="500" height="500" /></a>
                                                    </div>
                                                    <!-- End Product Image -->
                                                    <!-- Start Product Details -->
                                                    <div class="product-details text-center">
                                                        <div class="product-name"><a class="fw-normal" href="product-layout1.html">Gucci Beige Thick Acetate</a></div>
                                                        <div class="product-price">
                                                            <span class="price">$153.00</span>
                                                        </div>
                                                        <div class="product-review">
                                                            <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i>
                                                            <span class="caption hidden ms-1">17 Reviews</span>
                                                        </div>
                                                    </div>
                                                    <!-- End product details -->
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="lvl1 parent dropdown"><a href="#">About us <i class="icon anm anm-angle-down-l"></i></a>
                            <ul class="dropdown">
                                <li><a href="blog-grid.html" class="site-nav">Term & Condition </a></li>

                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
            <!--End Menu-->
            <!--Right Icon-->
            <div class="col-8 col-sm-8 col-md-8 col-lg-3 align-self-center icons-col text-right">
                <!--Search-->
               
                <!--End Search-->

                <!--Account-->

                <!--End Account-->
                <!--Wishlist-->
                <div class="wishlist-link iconset" title="contact">
                    <a href="tel:03310215272">
                        <div class="" style="width: 30px;">

                            <img src="./assets/images/icons/whatsapp.png" class="img-fluid" alt="">
                        </div>

                    </a>
                </div>

                <!--End Wishlist-->

                <!--Mobile Toggle-->
                <button type="button" class="iconset pe-0 menu-icon js-mobile-nav-toggle mobile-nav--open d-lg-none" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Menu"><i class="hdr-icon icon anm anm-times-l"></i><i class="hdr-icon icon anm anm-bars-r"></i></button>
                <!--End Mobile Toggle-->
            </div>
            <!--End Right Icon-->
        </div>
    </div>
</header>
<!--End Header-->


<!--Mobile Menu-->
<div class="mobile-nav-wrapper mobileMenu-bg-black" role="navigation">
    <div class="closemobileMenu">Close Menu <i class="icon anm anm-times-l"></i></div>
    <ul id="MobileNav" class="mobile-nav">
        <li class="lvl1 parent dropdown"><a href="index.html">Home <i class="icon anm anm-angle-down-l"></i></a>
            <ul class="lvl-2">
                <li><a href="index.html" class="site-nav">Home 01 - Fashion</a></li>
                <li><a href="index2-footwear.html" class="site-nav">Home 02 - Footwear</a></li>
                <li><a href="index3-bags.html" class="site-nav">Home 03 - Bags</a></li>
                <li><a href="index4-electronic.html" class="site-nav">Home 04 - Electronic</a></li>
                <li><a href="index5-tools-parts.html" class="site-nav">Home 05 - Tools &amp; Parts</a></li>
                <li><a href="index6-jewelry.html" class="site-nav">Home 06 - Jewelry</a></li>
                <li><a href="index7-organic-food.html" class="site-nav">Home 07 - Organic Food</a></li>
                <li><a href="index8-cosmetics.html" class="site-nav">Home 08 - Cosmetics</a></li>
                <li><a href="index9-furniture.html" class="site-nav">Home 09 - Furniture</a></li>
                <li><a href="index10-sunglasses.html" class="site-nav">Home 10 - Sunglasses</a></li>
                <li><a href="index11-medical.html" class="site-nav">Home 11 - Medical</a></li>
                <li><a href="index12-christmas.html" class="site-nav last">Home 12 - Christmas</a></li>
            </ul>
        </li>
        <li class="lvl1 parent megamenu"><a href="#">Shop <i class="icon anm anm-angle-down-l"></i></a>
            <ul class="lvl-2">
                <li><a href="#;" class="site-nav">Collection Page <i class="icon anm anm-angle-down-l"></i></a>
                    <ul class="lvl-3">
                        <li><a href="collection-style1.html" class="site-nav">Collection style1</a></li>
                        <li><a href="collection-style2.html" class="site-nav">Collection style2</a></li>
                        <li><a href="collection-style3.html" class="site-nav">Collection style3</a></li>
                        <li><a href="collection-style4.html" class="site-nav">Collection style4</a></li>
                        <li><a href="sub-collection-style1.html" class="site-nav">Sub Collection style1</a></li>
                        <li><a href="sub-collection-style2.html" class="site-nav">Sub Collection style2</a></li>
                        <li><a href="collection-empty.html" class="site-nav">Collection Empty</a></li>
                        <li><a href="shop-search-results.html" class="site-nav">Shop Search Results</a></li>
                        <li><a href="shop-swatches-style.html" class="site-nav last">Shop Swatches style</a></li>
                    </ul>
                </li>
                <li><a href="#;" class="site-nav">Shop Page <i class="icon anm anm-angle-down-l"></i></a>
                    <ul class="lvl-3">
                        <li><a href="shop-grid-view.html" class="site-nav">Shop Grid View</a></li>
                        <li><a href="shop-list-view.html" class="site-nav">Shop List View</a></li>
                        <li><a href="shop-left-sidebar.html" class="site-nav">Shop Left Sidebar</a></li>
                        <li><a href="shop-right-sidebar.html" class="site-nav">Shop Right Sidebar</a></li>
                        <li><a href="shop-top-filter.html" class="site-nav">Shop Top Filter</a></li>
                        <li><a href="shop-masonry-grid.html" class="site-nav">Shop Masonry Grid</a></li>
                        <li><a href="shop-with-category.html" class="site-nav">Shop With Category</a></li>
                        <li><a href="shop-grid-view.html" class="site-nav">Classic Pagination</a></li>
                        <li><a href="shop-right-sidebar.html" class="site-nav last">Infinite Scrolling</a></li>
                    </ul>
                </li>
                <li><a href="#;" class="site-nav">Shop Other Page <i class="icon anm anm-angle-down-l"></i></a>
                    <ul class="lvl-3">
                        <li><a href="wishlist-style1.html" class="site-nav">Wishlist Style1</a></li>
                        <li><a href="wishlist-style2.html" class="site-nav">Wishlist Style2</a></li>
                        <li><a href="compare-style1.html" class="site-nav">Compare Style1</a></li>
                        <li><a href="compare-style2.html" class="site-nav">Compare Style2</a></li>
                        <li><a href="cart-style1.html" class="site-nav">Cart Style1</a></li>
                        <li><a href="cart-style2.html" class="site-nav">Cart Style2</a></li>
                        <li><a href="checkout-style1.html" class="site-nav">Checkout Style1</a></li>
                        <li><a href="checkout-style2.html" class="site-nav">Checkout Style2</a></li>
                        <li><a href="order-success.html" class="site-nav last">Order Success</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class="lvl1 parent megamenu"><a href="product-layout1.html">Product <i class="icon anm anm-angle-down-l"></i></a>
            <ul class="lvl-2">
                <li><a href="product-layout1.html" class="site-nav">Product Page <i class="icon anm anm-angle-down-l"></i></a>
                    <ul class="lvl-3">
                        <li><a href="product-layout1.html" class="site-nav">Product Layout1</a></li>
                        <li><a href="product-layout2.html" class="site-nav">Product Layout2</a></li>
                        <li><a href="product-layout3.html" class="site-nav">Product Layout3</a></li>
                        <li><a href="product-layout4.html" class="site-nav">Product Layout4</a></li>
                        <li><a href="product-layout5.html" class="site-nav">Product Layout5</a></li>
                        <li><a href="product-layout6.html" class="site-nav">Product Layout6</a></li>
                        <li><a href="product-layout7.html" class="site-nav">Product Layout7</a></li>
                        <li><a href="product-3d-ar-models.html" class="site-nav last">Product 3D, AR models</a></li>
                    </ul>
                </li>
                <li><a href="product-standard.html" class="site-nav">Product Page Types <i class="icon anm anm-angle-down-l"></i></a>
                    <ul class="lvl-3">
                        <li><a href="product-standard.html" class="site-nav">Standard Product</a></li>
                        <li><a href="product-variable.html" class="site-nav">Variable Product</a></li>
                        <li><a href="product-grouped.html" class="site-nav">Grouped Product</a></li>
                        <li><a href="product-layout4.html" class="site-nav">Product Back in stock</a></li>
                        <li><a href="product-layout6.html" class="site-nav">Product Accordion</a></li>
                        <li><a href="product-layout7.html" class="site-nav">Product Tabs Left</a></li>
                        <li><a href="product-layout6.html" class="site-nav">Product Bundle</a></li>
                        <li><a href="prodcut-360-view.html" class="site-nav last">Product 360 View</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class="lvl1 parent dropdown"><a href="#;">Pages <i class="icon anm anm-angle-down-l"></i></a>
            <ul class="lvl-2">
                <li><a href="aboutus-style1.html" class="site-nav">About Us <i class="icon anm anm-angle-down-l"></i></a>
                    <ul class="lvl-3 dropdown">
                        <li><a href="aboutus-style1.html" class="site-nav">About Us Style1</a></li>
                        <li><a href="aboutus-style2.html" class="site-nav">About Us Style2</a></li>
                    </ul>
                </li>
                <li><a href="contact-style1.html" class="site-nav">Contact Us <i class="icon anm anm-angle-down-l"></i></a>
                    <ul class="lvl-3 dropdown">
                        <li><a href="contact-style1.html" class="site-nav">Contact Us Style1</a></li>
                        <li><a href="contact-style2.html" class="site-nav">Contact Us Style2</a></li>
                    </ul>
                </li>
                <li><a href="my-account.html" class="site-nav">My Account <i class="icon anm anm-angle-down-l"></i></a>
                    <ul class="lvl-3 dropdown">
                        <li><a href="my-account.html" class="site-nav">My Account</a></li>
                        <li><a href="login.html" class="site-nav">Login</a></li>
                        <li><a href="register.html" class="site-nav">Register</a></li>
                        <li><a href="forgot-password.html" class="site-nav">Forgot Password</a></li>
                    </ul>
                </li>
                <li><a href="lookbook-grid.html" class="site-nav">Lookbook <i class="icon anm anm-angle-down-l"></i></a>
                    <ul class="lvl-3 dropdown">
                        <li><a href="lookbook-grid.html" class="site-nav">Lookbook Grid</a></li>
                        <li><a href="lookbook-masonry.html" class="site-nav">Lookbook Masonry</a></li>
                        <li><a href="lookbook-shop.html" class="site-nav">Lookbook Shop</a></li>
                    </ul>
                </li>
                <li><a href="portfolio-page.html" class="site-nav">Portfolio Page</a></li>
                <li><a href="faqs-page.html" class="site-nav">FAQs Page</a></li>
                <li><a href="brands-page.html" class="site-nav">Brands Page</a></li>
                <li><a href="cms-page.html" class="site-nav">CMS Page</a></li>
                <li><a href="elements-icons.html" class="site-nav">Icons</a></li>
                <li><a href="error-404.html" class="site-nav">Error 404</a></li>
                <li><a href="coming-soon.html" class="site-nav">Coming soon <span class="lbl nm_label2">New</span></a></li>
            </ul>
        </li>
        <li class="lvl1 parent dropdown"><a href="blog-grid.html">Blog <i class="icon anm anm-angle-down-l"></i></a>
            <ul class="lvl-2">
                <li><a href="blog-grid.html" class="site-nav">Grid View</a></li>
                <li><a href="blog-list.html" class="site-nav">List View</a></li>
                <li><a href="blog-grid-sidebar.html" class="site-nav">Left Sidebar</a></li>
                <li><a href="blog-list-sidebar.html" class="site-nav">Right Sidebar</a></li>
                <li><a href="blog-masonry.html" class="site-nav">Masonry Grid</a></li>
                <li><a href="blog-details.html" class="site-nav">Blog Details</a></li>
            </ul>
        </li>

        <li class="mobile-menu-bottom">
            <div class="mobile-links">
                <ul class="list-inline d-inline-flex flex-column w-100">
                    <li><a href="login.html" class="d-flex align-items-center"><i class="icon anm anm-sign-in-al"></i>Sign In</a></li>
                    <li><a href="register.html" class="d-flex align-items-center"><i class="icon anm anm-user-al"></i>Register</a></li>
                    <li><a href="my-account.html" class="d-flex align-items-center"><i class="icon anm anm-user-cil"></i>My Account</a></li>
                    <li class="title h5">Need Help?</li>
                    <li><a href="tel:401234567890" class="d-flex align-items-center"><i class="icon anm anm-phone-l"></i> (+40) 123 456 7890</a></li>
                    <li><a href="mailto:info@example.com" class="d-flex align-items-center"><i class="icon anm anm-envelope-l"></i> info@example.com</a></li>
                </ul>
            </div>
            <div class="mobile-follow mt-2">
                <h5 class="title">Follow Us</h5>
                <ul class="list-inline social-icons d-inline-flex mt-1">
                    <li class="list-inline-item"><a href="#" title="Facebook"><i class="icon anm anm-facebook-f"></i></a></li>
                    <li class="list-inline-item"><a href="#" title="Twitter"><i class="icon anm anm-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="#" title="Pinterest"><i class="icon anm anm-pinterest-p"></i></a></li>
                    <li class="list-inline-item"><a href="#" title="Linkedin"><i class="icon anm anm-linkedin-in"></i></a></li>
                    <li class="list-inline-item"><a href="#" title="Instagram"><i class="icon anm anm-instagram"></i></a></li>
                    <li class="list-inline-item"><a href="#" title="Youtube"><i class="icon anm anm-youtube"></i></a></li>
                </ul>
            </div>
        </li>
    </ul>
</div>
<!--End Mobile Menu-->
<?php
$activePage = basename($_SERVER['PHP_SELF'], ".php");
$isHomePage = ($activePage == 'index');
?>
<!--Header-->
<div class="page-wrapper">
    <header class="header d-flex align-items-center header-10 header-fixed mih-75 header-fixed">
        <div class="container">
            <div class="row">
                <!--Logo-->
                <div class="logo col-4 col-sm-4 col-md-4 col-lg-3 align-self-center">
                    <a class="logoImg" href="index.php"><img src="assets/images/logo/Logo.png" alt="Hema Multipurpose Html Template" title="Hema Multipurpose Html Template" width="149" height="60" /></a>
                </div>
                <!--End Logo-->
                <!--Menu-->
                <div class="col-1 col-sm-1 col-md-1 col-lg-6 align-self-center d-menu-col">
                    <nav class="navigation" id="AccessibleNav">
                        <ul id="siteNav" class="site-nav medium center">
                            <li class="lvl1 parent dropdown"><a href="index">Home </a>

                            </li>

                            <li class="lvl1 parent megamenu"><a href="products">Product </a>

                            </li>

                            <li class="lvl1 parent dropdown"><a href="#">About us </a>
                                <ul class="dropdown">
                                    <li><a href="#" class="site-nav">Term & Condition </a></li>

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
                        <a href="tel:+923333002133">
                            <div class="" style="width: 30px;">

                                <img src="./assets/images/icons/whatsapp.png" class="img-fluid" alt="">
                            </div>

                        </a>
                    </div>

                    <!--End Wishlist-->

                    <!--Mobile Toggle-->
                    <button type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" class="iconset pe-0 menu-icon js-mobile-nav-toggle mobile-nav--open d-lg-none" title="Menu"><i class="fa fa-times icon" aria-hidden="true"></i>
                        <i class="fa-solid fa-bars"></i></button>
                    <!--End Mobile Toggle-->
                </div>
                <!--End Right Icon-->
            </div>
        </div>
    </header>
    <!--End Header-->


    <!--Mobile Menu-->

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">


            <div class="wishlist-link iconset" title="contact">
                <a href="tel:+923333002133">
                    <div class="" style="width: 30px;">

                        <img src="./assets/images/icons/whatsapp.png" class="img-fluid" alt="">
                    </div>

                </a>
            </div>
            <div class="">
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
        </div>
        <div class="offcanvas-body">
            <ul class="menu-mobile">
                <li class="lvl1 parent dropdown" data-bs-dismiss="offcanvas" aria-label="Close"><a href="index">Home </a>

                </li>

                <li class="lvl1 parent megamenu" data-bs-dismiss="offcanvas" aria-label="Close"><a href="products">Product </a>

                </li>

                <li class="lvl1 parent dropdown" data-bs-dismiss="offcanvas" aria-label="Close"><a href="#">About us </a>
                    <ul class="dropdown">
                        <li><a href="#" class="site-nav">Term & Condition </a></li>

                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<!--End Mobile Menu-->
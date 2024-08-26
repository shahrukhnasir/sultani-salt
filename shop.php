<!-- App Include Here -->
<?php include 'inc/app.php'; ?>
<link rel="stylesheet" href="css/shop.css">
<!-- App Include Here -->
<style>
    .form-select {
        border: 1px solid black;
        padding: 14px;
    }
</style>
<?php
$pagename = 'OUR SHOP';
include './inc/breadcrumbs.php';
?>


<!-- Shop -->
<section>
    <div class="container py-lg-5 py-3 ">
        <div class="row">
            <div class="col-md-3 p-0">
                <div class="side_bar_shop_cat">
                    <div class="list-group-item  light-color primary-bold-font dark-bg uppercase text-lg-start text-center py-4 px-5">
                        <h1 class="out_categories">Our Categories</h1>
                    </div>
                    <a href="#" class="list-group-item level-5 light-color secondary-light-font dark-bg text-capitalize text-start  py-2 px-lg-5" aria-current="true">
                        <h6 class="out_list_item"> Posters</h6>
                    </a>

                    <a href="#" class="list-group-item level-5 light-color secondary-light-font dark-bg text-capitalize text-start  py-2 px-lg-5" aria-current="true">
                        <h6 class="out_list_item"> Tshirts</h6>
                    </a>
                    <a href="#" class="list-group-item level-5 light-color secondary-light-font dark-bg text-capitalize text-start  py-2 px-lg-5" aria-current="true">
                        <h6 class="out_list_item"> Sculptures</h6>
                    </a>
                    <a href="#" class="list-group-item level-5 light-color secondary-light-font dark-bg text-capitalize text-start  py-2 px-lg-5" aria-current="true">
                        <h6 class="out_list_item"> Puzzles & Toys</h6>
                    </a>

                    <a href="#" class="list-group-item level-5 light-color secondary-light-font dark-bg text-capitalize text-start  py-2 px-lg-5" aria-current="true">
                        <h6 class="out_list_item"> Clocks & Watches</h6>
                    </a>


                    <a href="#" class="list-group-item level-5 light-color secondary-light-font dark-bg text-capitalize text-start  py-2 px-lg-5" aria-current="true">
                        <h6 class="out_list_item">Stationery</h6>
                    </a>

                    <a href="#" class="list-group-item level-5 light-color secondary-light-font dark-bg text-capitalize text-start  py-2 px-lg-5 pb-lg-5" aria-current="true">
                        <h6 class="out_list_item">Miscellaneous</h6>
                    </a>

                </div>


            </div>
            <div class="col-md-1 p-0">
            </div>

            <div class="col-md-8 p-0">

                <!-- searchIcon -->
                <!-- <div class="row">
                    <div class="col-lg-9 py-lg-0 py-3">
                        <div class="icon-input">
                            <input class="icon-input__text-field form-control" placeholder="Search here" type="text">
                            <i class="icon-input__icon material-icons">
                                <i class="fa fa-search"></i>
                            </i>
                        </div>
                    </div>
                    <div class="col-lg-3 ">
                        <select class="form-select form-select-md" aria-label="Large select example">
                            <option selected class="level-5 dark-color secondary-regular-font">Sort By Name</option>
                            <option value="1" class="level-5 dark-color secondary-regular-font">Product</option>
                            <option value="2" class="level-5 dark-color secondary-regular-font">Categories</option>
                            <option value="3" class="level-5 dark-color secondary-regular-font">Custom search</option>
                        </select>
                    </div>
                </div> -->

                <div class="row py-4 me-lg-1 px-lg-0 px-3">
                    <div class="col-lg-9">
                        <div class="icon-input">
                            <input class="icon-input__text-field form-control" type="text" placeholder="Search here">
                            <i class="icon-input__icon material-icons">
                                <!-- <i ></i> -->
                                <img src="./img/seach_icon.png" alt="" class="fa fa-search">
                            </i>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <select class="form-select form-select-md" aria-label="Large select example">
                            <option selected class="level-7 dark-color secondary-bold-font">Sort By New</option>
                            <option value="1" class="level-7 dark-color secondary-bold-font">Sort By New</option>

                        </select>
                    </div>
                </div>
                <!-- products card -->

                <div class="row my-lg-3">
                    <div class="col-md-4">
                        <div class="single-product wow animate__ animate__fadeInUp animate__delay-1s animated" style="visibility: visible; animation-name: fadeInUp;">
                            <div class="product-img-wrap border-0 rounded-0">
                                <a href="shop-detail">
                                </a>
                                <figure class="product-image position-relative"><a href="shop-detail">
                                        <img src="./img/t-shirt-1.png" class="img-fluid object-cover w-100" alt="">
                                    </a>
                                    <!-- <div class="position-absolute top-0 right-0 m-3"><a href="shop-detail">
                                        </a><a href="wishlist" class="product-icon"><i class="fa-regular fa-heart"></i>
                                        </a>
                                    </div> -->
                                    <div class="new-status position-absolute top-0 left-0  extra-color-3-bg p-2 m-3 d-flex align-items-center justify-content-center">
                                        <span class="level-6 text-white primary-bold-font">NEW</span>
                                    </div>
                                </figure>

                            </div>
                            <div class="product-desc-main pt-3">

                                <h6 class="dark-color level-4 primary-medium-font line-clamp-1 uppercase">
                                    T-Shirt Relativity
                                </h6>
                                <div class="text-center">
                                    <h6 class="level-4 primary-bold-font dark-color mb-0">$ 19.00 <s class="level-4 primary-regular-font dark-color mb-0">$ 29.00</s></h6>
                                </div>


                                <div class="product-desc d-flex align-items-center justify-content-between">
                                    <button class="btn-light w-100 my-3">
                                        <div class="btn text-uppercase level-5 py-lg-3">
                                            View
                                        </div>
                                    </button>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-product wow animate__ animate__fadeInUp animate__delay-1s animated" style="visibility: visible; animation-name: fadeInUp;">
                            <div class="product-img-wrap border-0 rounded-0">
                                <a href="shop-detail">
                                </a>
                                <figure class="product-image position-relative"><a href="shop-detail">
                                        <img src="./img/t-shirt-1.png" class="img-fluid object-cover w-100" alt="">
                                    </a>


                                </figure>

                            </div>
                            <div class="product-desc-main pt-3">

                                <h6 class="dark-color level-4 primary-medium-font line-clamp-1 uppercase">
                                    T-Shirt Relativity
                                </h6>
                                <div class="text-center">
                                    <h6 class="level-4 primary-bold-font dark-color mb-0">$ 19.00 <s class="level-5 primary-regular-font dark-color mb-0">$ 29.00</s></h6>
                                </div>


                                <div class="product-desc d-flex align-items-center justify-content-between">
                                    <button class="btn-light w-100 my-3">
                                        <div class="btn text-uppercase level-5 py-lg-3">
                                            View
                                        </div>
                                    </button>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="single-product wow animate__ animate__fadeInUp animate__delay-1s animated" style="visibility: visible; animation-name: fadeInUp;">
                            <div class="product-img-wrap border-0 rounded-0">
                                <a href="shop-detail">
                                </a>
                                <figure class="product-image position-relative"><a href="shop-detail">
                                        <img src="./img/t-shirt-2.png" class="img-fluid object-cover w-100" alt="">
                                    </a>
                                </figure>

                            </div>
                            <div class="product-desc-main pt-3">

                                <h6 class="dark-color level-4 primary-medium-font line-clamp-1 uppercase">
                                    T-Shirt Relativity
                                </h6>
                                <div class="text-center">
                                    <h6 class="level-4 primary-bold-font dark-color mb-0">$ 19.00 <s class="level-5 primary-regular-font dark-color mb-0">$ 29.00</s></h6>
                                </div>


                                <div class="product-desc d-flex align-items-center justify-content-between">
                                    <button class="btn-light w-100 my-3">
                                        <div class="btn text-uppercase level-5 py-lg-3">
                                            View
                                        </div>
                                    </button>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row my-lg-3">
                    <div class="col-md-4">
                        <div class="single-product wow animate__ animate__fadeInUp animate__delay-1s animated" style="visibility: visible; animation-name: fadeInUp;">
                            <div class="product-img-wrap border-0 rounded-0">
                                <a href="shop-detail">
                                </a>
                                <figure class="product-image position-relative"><a href="shop-detail">
                                        <img src="./img/t-shirt-1.png" class="img-fluid object-cover w-100" alt="">
                                    </a>

                                    <div class="new-status position-absolute top-0 left-0  extra-color-3-bg p-2 m-3 d-flex align-items-center justify-content-center">
                                        <span class="level-6 text-white primary-bold-font">NEW</span>
                                    </div>
                                </figure>

                            </div>
                            <div class="product-desc-main pt-3">

                                <h6 class="dark-color level-4 primary-medium-font line-clamp-1 uppercase">
                                    T-Shirt Relativity
                                </h6>
                                <div class="text-center">
                                    <h6 class="level-4 primary-bold-font dark-color mb-0">$ 19.00 <s class="level-5 primary-regular-font dark-color mb-0">$ 29.00</s></h6>
                                </div>


                                <div class="product-desc d-flex align-items-center justify-content-between">
                                    <button class="btn-light w-100 my-3">
                                        <div class="btn text-uppercase level-5 py-lg-3">
                                            View
                                        </div>
                                    </button>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-product wow animate__ animate__fadeInUp animate__delay-1s animated" style="visibility: visible; animation-name: fadeInUp;">
                            <div class="product-img-wrap border-0 rounded-0">
                                <a href="shop-detail">
                                </a>
                                <figure class="product-image position-relative"><a href="shop-detail">
                                        <img src="./img/t-shirt-1.png" class="img-fluid object-cover w-100" alt="">
                                    </a>


                                </figure>

                            </div>
                            <div class="product-desc-main pt-3">

                                <h6 class="dark-color level-4 primary-medium-font line-clamp-1 uppercase">
                                    T-Shirt Relativity
                                </h6>
                                <div class="text-center">
                                    <h6 class="level-4 primary-bold-font dark-color mb-0">$ 19.00 <s class="level-5 primary-regular-font dark-color mb-0">$ 29.00</s></h6>
                                </div>


                                <div class="product-desc d-flex align-items-center justify-content-between">
                                    <button class="btn-light w-100 my-3">
                                        <div class="btn text-uppercase level-5 py-lg-3">
                                            View
                                        </div>
                                    </button>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="single-product wow animate__ animate__fadeInUp animate__delay-1s animated" style="visibility: visible; animation-name: fadeInUp;">
                            <div class="product-img-wrap border-0 rounded-0">
                                <a href="shop-detail">
                                </a>
                                <figure class="product-image position-relative"><a href="shop-detail">
                                        <img src="./img/t-shirt-2.png" class="img-fluid object-cover w-100" alt="">
                                    </a>
                                </figure>

                            </div>
                            <div class="product-desc-main pt-3">

                                <h6 class="dark-color level-4 primary-medium-font line-clamp-1 uppercase">
                                    T-Shirt Relativity
                                </h6>
                                <div class="text-center">
                                    <h6 class="level-4 primary-bold-font dark-color mb-0">$ 19.00 <s class="level-5 primary-regular-font dark-color mb-0">$ 29.00</s></h6>
                                </div>


                                <div class="product-desc d-flex align-items-center justify-content-between">
                                    <button class="btn-light w-100 my-3">
                                        <div class="btn text-uppercase level-5 py-lg-3">
                                            View
                                        </div>
                                    </button>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="row my-lg-3">
                    <div class="col-md-4">
                        <div class="single-product wow animate__ animate__fadeInUp animate__delay-1s animated" style="visibility: visible; animation-name: fadeInUp;">
                            <div class="product-img-wrap border-0 rounded-0">
                                <a href="shop-detail">
                                </a>
                                <figure class="product-image position-relative"><a href="shop-detail">
                                        <img src="./img/t-shirt-1.png" class="img-fluid object-cover w-100" alt="">
                                    </a>
                                    <!-- <div class="position-absolute top-0 right-0 m-3"><a href="shop-detail">
                                        </a><a href="wishlist" class="product-icon"><i class="fa-regular fa-heart"></i>
                                        </a>
                                    </div> -->
                                    <div class="new-status position-absolute top-0 left-0  extra-color-3-bg p-2 m-3 d-flex align-items-center justify-content-center">
                                        <span class="level-6 text-white primary-bold-font">NEW</span>
                                    </div>
                                </figure>

                            </div>
                            <div class="product-desc-main pt-3">

                                <h6 class="dark-color level-4 primary-medium-font line-clamp-1 uppercase">
                                    T-Shirt Relativity
                                </h6>
                                <div class="text-center">
                                    <h6 class="level-4 primary-bold-font dark-color mb-0">$ 19.00 <s class="level-5 primary-regular-font dark-color mb-0">$ 29.00</s></h6>
                                </div>


                                <div class="product-desc d-flex align-items-center justify-content-between">
                                    <button class="btn-light w-100 my-3">
                                        <div class="btn text-uppercase level-5 py-lg-3">
                                            View
                                        </div>
                                    </button>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-product wow animate__ animate__fadeInUp animate__delay-1s animated" style="visibility: visible; animation-name: fadeInUp;">
                            <div class="product-img-wrap border-0 rounded-0">
                                <a href="shop-detail">
                                </a>
                                <figure class="product-image position-relative"><a href="shop-detail">
                                        <img src="./img/t-shirt-1.png" class="img-fluid object-cover w-100" alt="">
                                    </a>


                                </figure>

                            </div>
                            <div class="product-desc-main pt-3">

                                <h6 class="dark-color level-4 primary-medium-font line-clamp-1 uppercase">
                                    T-Shirt Relativity
                                </h6>
                                <div class="text-center">
                                    <h6 class="level-4 primary-bold-font dark-color mb-0">$ 19.00 <s class="level-5 primary-regular-font dark-color mb-0">$ 29.00</s></h6>
                                </div>


                                <div class="product-desc d-flex align-items-center justify-content-between">
                                    <button class="btn-light w-100 my-3">
                                        <div class="btn text-uppercase level-5 py-lg-3">
                                            View
                                        </div>
                                    </button>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="single-product wow animate__ animate__fadeInUp animate__delay-1s animated" style="visibility: visible; animation-name: fadeInUp;">
                            <div class="product-img-wrap border-0 rounded-0">
                                <a href="shop-detail">
                                </a>
                                <figure class="product-image position-relative"><a href="shop-detail">
                                        <img src="./img/t-shirt-2.png" class="img-fluid object-cover w-100" alt="">
                                    </a>
                                </figure>

                            </div>
                            <div class="product-desc-main pt-3">

                                <h6 class="dark-color level-4 primary-medium-font line-clamp-1 uppercase">
                                    T-Shirt Relativity
                                </h6>
                                <div class="text-center">
                                    <h6 class="level-4 primary-bold-font dark-color mb-0">$ 19.00 <s class="level-5 primary-regular-font dark-color mb-0">$ 29.00</s></h6>
                                </div>


                                <div class="product-desc d-flex align-items-center justify-content-between">
                                    <button class="btn-light w-100 my-3">
                                        <div class="btn text-uppercase level-5 py-lg-3">
                                            View
                                        </div>
                                    </button>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--<<<<<< pagination -->
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true" class="level-4 secondary-bold-font dark-color">&#x3C;</span>
                            </a>
                        </li>
                        <li class="page-item level-4 secondary-regular-font dark-color"><a class="page-link" href="#">1</a></li>
                        <li class="page-item level-4 secondary-regular-font dark-color"><a class="page-link" href="#">2</a></li>
                        <li class="page-item level-4 secondary-regular-font dark-color"><a class="page-link" href="#">3</a></li>
                        <li class="page-item level-4 secondary-regular-font dark-color"><a class="page-link" href="#">4</a></li>

                        <li class="page-item level-4 secondary-regular-font dark-color"><a class="page-link" href="#">5</a></li>

                        <li class="page-item level-4 secondary-regular-font dark-color"><a class="page-link" href="#">6</a></li>
                        <li class="page-item level-4 secondary-regular-font dark-color"><a class="page-link" href="#">7</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true" class="level-4 secondary-bold-font dark-color">&#x3E;</span>
                            </a>
                        </li>
                    </ul>
                </nav>

                <!-- pagination>>>> -->
            </div>
        </div>


    </div>
</section>








<!-- Body Contnet Starts End  -->

<!-- Footer Include Here -->
<?php include 'inc/footer.php'; ?>
<!-- Footer Include Here -->
<!-- App Include Here -->
<?php include 'inc/app.php'; ?>
<link rel="stylesheet" href="css/shop.css">
<!-- App Include Here -->
<style>
    .color-radio {
        display: none;
    }

    .color-label {
        width: 20px;
        height: 20px;
        display: inline-block;
        cursor: pointer;
        border: 2px solid transparent;

        border-radius: 30px;
    }

    .color-label.selected {
        border: 4px solid #000;
    }

    .size_Picker .col {
        cursor: pointer;
        padding: 10px;
        border: 1px solid black;
        margin-right: 5px;
    }

    .size_Picker .col.selected {
        background-color: #B0B0B0;
        border-color: #000;
    }
</style>
<?php
$pagename = 'OUR SHOP';
$pageSubName = "home / our shop / tshirts";
include './inc/breadcrumbs.php';
?>






<section>
    <div class="container py-lg-5 py-3">
        <div class="row">
            <div class="col-md-5">
                <div class="main_product_details">
                    <div class="slider slider-for">
                        <div>
                            <div id="product_image_show">
                                <img src="./img/t-shirt-1.png" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div>
                            <div id="product_image_show">
                                <img src="./img/t-shirt-2.png" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div>
                            <div id="product_image_show">
                                <img src="./img/t-shirt-1.png" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div>
                            <div id="product_image_show">
                                <img src="./img/t-shirt-2.png" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div>
                            <div id="product_image_show">
                                <img src="./img/t-shirt-1.png" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="slider slider-nav">
                        <div>
                            <div class="product_image">
                                <img src="./img/t-shirt-1.png" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div>
                            <div class="product_image">
                                <img src="./img/t-shirt-2.png" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div>
                            <div class="product_image">
                                <img src="./img/t-shirt-1.png" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div>
                            <div class="product_image">
                                <img src="./img/t-shirt-2.png" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div>
                            <div class="product_image">
                                <img src="./img/t-shirt-1.png" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-7">

                <h1 class="level-2 primary-regular-font dark-color uppercase">T-Shirt Relativity</h1>
                <div class="d-flex ">
                    <div class="product_code level-7 secondary-regular-font dark-color p-1">
                        SKU <span class="level-7 secondary-bold-font dark-color"> | 456879 |</span>
                    </div>

                    <div class="stock_available p-1">
                        <span class="level-7 secondary-regular-font light-color">Out Of Stock</span>
                    </div>
                </div>

                <div class="py-3">
                    <p class="level-5 secondary-regular-font dark-color">Etiam scelerisque, tortor eget lobortis feugiat, neque tortor sodales ipsum, eget molestie massa leo vel ipsum. c lectus. Etiam scelerisqEtiam scelerisque, tortor eget lobortis feugiat, nequ</p>
                </div>
                <!-- <div class="color_Picker mb-3">
                    <h2 class="level-4 Grotesk-font dark-color italic">Color</h2>

                    <input type="color" id="colorPicker" name="colorPicker" value="#FAA2A2">
                    <input type="color" id="colorPicker" name="colorPicker" value="#520202">
                    <input type="color" id="colorPicker" name="colorPicker" value="#1A5F75">
                    <input type="color" id="colorPicker" name="colorPicker" value="#4644C6">

                </div> -->

                <div class="color_Picker mb-3">
                    <h2 class="level-4 Grotesk-font dark-color italic">Color</h2>

                    <input type="radio" id="colorPicker1" name="colorPicker" value="#FAA2A2" class="color-radio">
                    <label for="colorPicker1" class="color-label" style="background-color: #FAA2A2;"></label>

                    <input type="radio" id="colorPicker2" name="colorPicker" value="#520202" class="color-radio">
                    <label for="colorPicker2" class="color-label" style="background-color: #520202;"></label>

                    <input type="radio" id="colorPicker3" name="colorPicker" value="#1A5F75" class="color-radio">
                    <label for="colorPicker3" class="color-label" style="background-color: #1A5F75;"></label>

                    <input type="radio" id="colorPicker4" name="colorPicker" value="#4644C6" class="color-radio">
                    <label for="colorPicker4" class="color-label" style="background-color: #4644C6;"></label>
                </div>
                <!-- selected color hashCOde is here -->
                <!-- <p id="selectedColorDisplay">Selected Color: None</p> -->




                <h2 class="level-4 Grotesk-font dark-color italic">Size</h2>
                <div class="size_Picker">
                    <input type="radio" name="size" id="size_S" value="S" hidden>
                    <input type="radio" name="size" id="size_M" value="M" hidden>
                    <input type="radio" name="size" id="size_L" value="L" hidden>
                    <input type="radio" name="size" id="size_XL" value="XL" hidden>

                    <div class="col level-6 primary-bold-font light-color ms-0" onclick="selectSize('S')">S</div>
                    <div class="col level-6 primary-bold-font light-color" onclick="selectSize('M')">M</div>
                    <div class="col level-6 primary-bold-font light-color" onclick="selectSize('L')">L</div>
                    <div class="col level-6 primary-bold-font light-color" onclick="selectSize('XL')">XL</div>
                </div>




                <div class="d-flex">
                    <div>
                        <div class="counter d-flex align-items-center">
                            <button class="minus border-0 bg-transparent" onclick="decrementCounter()">
                                <i class="fas fa-minus"></i>
                            </button>
                            <input type="number" value="4" class="primary-regular-font counter-value level-6 dark-color border-0 text-center number-input" id="counter" readonly>
                            <button class="plus border-0 bg-transparent" onclick="incrementCounter()">
                                <i class="fas fa-plus"></i>
                            </button>
                        </div>
                    </div>

                    <div class="px-5 d-flex align-items-center">
                        <h6 class="level-4 primary-bold-font dark-color mb-0">$ 19.00 <s class="level-5 primary-regular-font dark-color mb-0">$ 29.00</s></h6>
                    </div>
                </div>

                <div class="button-container-1">
                    <span class="mas">ADD TO CART</span>
                    <button id='work' type="button" name="Hover"> <a href="cart" class="btn">
                            ADD TO CART
                        </a></button>
                </div>



            </div>
        </div>




    </div>
</section>

<!-- Additional Information -->
<section class="mb-5">
    <div class="container light-gray-bg p-0  ">
        <div class="px-4 pt-4">
            <h2 class="level-3 primary-regular-font dark-color uppercase">Additional <span class="level-3 primary-bold-font dark-color uppercase">Information</span></h2>

        </div>
        <div class="plane_line_black"></div>
        <div class="p-4">
            <p class="level-5 secondary-regular-font dark-color ">
                Nunc pellentesque libero et lorem rutrum, sit amet ullamcorper urna tempor. Donec ut condimentum risus, quis egestas dolor. Etiam vitae pellentesque felis. Sed imperdiet lectus nulla, quis accumsan sapien porta ut. Proin at vulputate orci, eu maximus sem. Nam lobortis imperdiet eros, sed varius elit venenatis sed. Fusce nec tincidunt risus. Phasellus vitae arcu rhoncus, sodales magna ac, rutrum purus. Fusce malesuada lectus ex, id facilisis velit fringilla pellentesque.
            </p>
            <p class="level-5 secondary-regular-font dark-color ">
                Cras posuere felis vitae tellus vestibulum mattis vel ac ipsum. Aliquam pellentesque diam non eros ornare accumsan. Mauris facilisis nibh ligula, id luctus magna consectetur sit amet. Sed ac rutrum tortor. Sed vulputate aliquet dolor. Sed a urna est. Etiam s
            </p>
        </div>
    </div>

</section>


<section>
    <div class="container">
        <h2 class="level-3 primary-regular-font dark-color uppercase">featured <span class="level-3 primary-bold-font dark-color uppercase">products</span></h2>

        <div class="featured-slider">

            <div class="">
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
            

            <div class="">
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
            

            <div class="">
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
            

            <div class="">
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
            


            <div class="">
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
            

            <div class="">
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
            

        </div>
    </div>
</section>
<!-- Footer Include Here -->
<script>
    document.querySelectorAll('.color-radio').forEach(radio => {
        radio.addEventListener('change', function() {
            // Remove selected class from all labels
            document.querySelectorAll('.color-label').forEach(label => {
                label.classList.remove('selected');
            });

            // Add selected class to the corresponding label
            const selectedLabel = document.querySelector(`label[for="${this.id}"]`);
            selectedLabel.classList.add('selected');

            // Update the selected color display
            document.getElementById('selectedColorDisplay').textContent = `Selected Color: ${this.value}`;
        });
    });
    // 

    function selectSize(size) {
        // Uncheck all radio buttons
        document.querySelectorAll('.size_Picker input[type="radio"]').forEach(radio => {
            radio.checked = false;
        });

        // Check the selected radio button
        document.getElementById(`size_${size}`).checked = true;

        // Remove the selected class from all size divs
        document.querySelectorAll('.size_Picker .col').forEach(div => {
            div.classList.remove('selected');
        });

        // Add the selected class to the clicked size div
        document.querySelector(`.size_Picker .col[onclick="selectSize('${size}')"]`).classList.add('selected');
    }
</script>
<?php include 'inc/footer.php'; ?>
<!-- Footer Include Here -->
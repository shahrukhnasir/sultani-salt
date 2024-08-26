<!-- Bootstrap CDN -->
<!-- <script src="js/jquery.min.js" type="text/javascript"></script> -->
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script src="js/popper.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<!-- Bootstrap CDN -->
<!-- Fancybox CDN  -->
<script src='https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js'></script>
<!-- Fancybox CDN  -->

<!-- gsap CDN  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.2/TimelineMax.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js"></script>
<!-- gsap CDN  -->
<script src="js/plugins.js"></script>
<script src="js/ajax_sendmail.js"></script>
<!-- Main JS -->
<script src="js/main-2.js"></script>
<!--Newsletter Modal Cookies-->
<script>
    $(window).ready(function() {
        setTimeout(function() {
            $('#newsletter_modal').modal("show");
        }, 7000);
    });
</script>
<!-- Slick Slider CDN -->
<script src="slick/slick.min.js"></script>
<!-- Slick Slider CDN -->

<!-- Main Js -->
<script src="js/main.js"></script>
<!-- Main Js -->
<!-- Wow Js CDN -->
<script src="js/wow.min.js"></script>
<!-- AOS ANIMTAION CDN -->
<script>
    new WOW().init();
    AOS.init();
</script>
<!-- Eye show hide pasword-->
<script>
    function toggleVisibility(element) {
        const inputField = element.previousElementSibling;
        const icon = element.firstElementChild;

        if (inputField.type === 'password') {
            inputField.type = 'text';
            icon.classList.remove('fa-eye');
            icon.classList.add('fa-eye-slash');
        } else {
            inputField.type = 'password';
            icon.classList.remove('fa-eye-slash');
            icon.classList.add('fa-eye');
        }
    }


    // Stepper //////////////////////////


    var currentStep = 1;
    var numSteps = 4;

    function nextStep() {
        currentStep++;
        if (currentStep > numSteps) {
            currentStep = 1;
        }
        var stepper = document.getElementById('stepper1');
        var steps = stepper.getElementsByClassName('step');

        Array.from(steps).forEach((step, index) => {
            let stepNum = index + 1;
            if (stepNum === currentStep) {
                addClass(step, 'editing');
            } else {
                removeClass(step, 'editing');
            }
            if (stepNum < currentStep) {
                addClass(step, 'done');
            } else {
                removeClass(step, 'done');
            }
        })
    }

    function hasClass(elem, className) {
        return new RegExp(' ' + className + ' ').test(' ' + elem.className + ' ');
    }

    function addClass(elem, className) {
        if (!hasClass(elem, className)) {
            elem.className += ' ' + className;
        }
    }

    function removeClass(elem, className) {
        var newClass = ' ' + elem.className.replace(/[\t\r\n]/g, ' ') + ' ';
        if (hasClass(elem, className)) {
            while (newClass.indexOf(' ' + className + ' ') >= 0) {
                newClass = newClass.replace(' ' + className + ' ', ' ');
            }
            elem.className = newClass.replace(/^\s+|\s+$/g, '');
        }
    }
</script>
<script>
    // Navbar active 
    document.addEventListener('DOMContentLoaded', () => {
        const links = document.querySelectorAll('.header-link, .single-item a');
        links.forEach(link => {
            if (link.href === window.location.href) {
                link.classList.add('active');
            }
        });
    });
</script>

<!--  -->
<script>
    function toggleAddressDetails() {
        const savedAddressDetails = document.getElementById('savedAddressDetails');
        const newAddressForm = document.getElementById('newAddressForm');
        const useSavedAddress = document.getElementById('flexRadioDefault2').checked;

        if (useSavedAddress) {
            savedAddressDetails.style.display = 'block';
            newAddressForm.style.display = 'none';
        } else {
            savedAddressDetails.style.display = 'none';
            newAddressForm.style.display = 'block';
        }
    }
</script>

<!-- Fancybox CDN  -->
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0.0/dist/fancybox.umd.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        Fancybox.bind("[data-fancybox='gallery']", {
            Thumbs: {
                showOnStart: false,
            },
        });
    });
</script>
<!-- Fancybox CDN  -->
<!--  -->

<!-- <script>
    document.addEventListener('DOMContentLoaded', () => {
        const dropdownToggle = document.querySelector('.dropdown-toggle');
        const dropdownMenu = document.querySelector('.dropdown-menu');

        dropdownToggle.addEventListener('click', () => {
            // Toggle the display of the dropdown menu
            dropdownMenu.style.display = dropdownMenu.style.display === 'block' ? 'none' : 'block';
        });

        // Close the dropdown if the user clicks outside of it
        window.addEventListener('click', (event) => {
            if (!event.target.matches('.dropdown-toggle')) {
                if (dropdownMenu.style.display === 'block') {
                    dropdownMenu.style.display = 'none';
                }
            }
        });
    });
</script> -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Get all dropdowns
        const dropdowns = document.querySelectorAll('.dropdown');

        dropdowns.forEach(dropdown => {
            const dropdownToggle = dropdown.querySelector('.dropdown-toggle');
            const dropdownMenu = dropdown.querySelector('.dropdown-menu');

            dropdownToggle.addEventListener('click', (event) => {
                // Toggle the display of the dropdown menu
                const isVisible = dropdownMenu.style.display === 'block';

                // Hide all other dropdowns
                dropdowns.forEach(d => {
                    if (d !== dropdown) {
                        d.querySelector('.dropdown-menu').style.display = 'none';
                    }
                });

                // Toggle the clicked dropdown
                dropdownMenu.style.display = isVisible ? 'none' : 'block';

                // Prevent the click event from propagating to the window click handler
                event.stopPropagation();
            });
        });

        // Close the dropdowns if the user clicks outside of them
        window.addEventListener('click', (event) => {
            if (!event.target.matches('.dropdown-toggle')) {
                dropdowns.forEach(dropdown => {
                    dropdown.querySelector('.dropdown-menu').style.display = 'none';
                });
            }
        });
    });
</script>
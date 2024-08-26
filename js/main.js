// Loader JS
$(window).on("load", function () {
	console.log("test");
	$(".loader").fadeOut(1500);
});
// Loader JS

var video = document.getElementById("myVideo");
if (video) {
	var playPauseButton = document.getElementById("playPause");
	playPauseButton.addEventListener("click", function () {
		if (video.paused) {
			video.play();
			playPauseButton.innerHTML = '<i class="fa fa-pause"></i>';
		} else {
			video.pause();
			playPauseButton.innerHTML = '<i class="fa fa-play"></i>';
		}
	});
}
function sameHeight() {
	let getAllPics = document.getElementsByClassName("same-height");
	for (let i = 0; i < getAllPics.length; i++) {
		let width = window.getComputedStyle(getAllPics[i]).width;
		getAllPics[i].style.height = width;
	}
}

sameHeight();
$(window).resize(function () {
	sameHeight();
});

$(document).ready(function () {
    $(".art-slider-main").slick({
        dots: false,
        arrows: true,
        infinite: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        cssEase: "linear",
        initialSlide: 1,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                },
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                },
            },
        ],
    });
});

$(document).ready(function () {
    $(".art-slider").slick({
        dots: false,
        arrows: true,
        infinite: false,
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplay: true,
        cssEase: "linear",
        initialSlide: 1,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                },
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                },
            },
        ],
    });
});

// testimonials-slider

// video testimonials
$(document).ready(function () {
    $(".video-slider").slick({
        dots: false,
        arrows: true,
        infinite: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        cssEase: "linear",
        initialSlide: 1,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                },
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                },
            },
        ],
    });
});



// testimonial testimonials
$(document).ready(function () {
    $(".testimonial-slider").slick({
        dots: true,
        arrows: false,
        infinite: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        cssEase: "linear",
        initialSlide: 1,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                },
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                },
            },
        ],
    });
});
// 
// exhibition slider
$(document).ready(function () {
  $(".exhibition-slider").slick({
      dots: false,
      arrows: true,
      infinite: true,
      slidesToShow: 3,
      slidesToScroll: 1,
      autoplay: true,
      cssEase: "linear",
      initialSlide: 1,
      responsive: [
          {
              breakpoint: 992,
              settings: {
                  slidesToShow: 2,
              },
          },
          {
              breakpoint: 768,
              settings: {
                  slidesToShow: 1,
              },
          },
      ],
  });
});
// slider-for product details slider here
  $(document).ready(function(){
    $('.slider-for').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: true,
      dots:false,
      fade: true,
      asNavFor: '.slider-nav'
    });
    $('.slider-nav').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      asNavFor: '.slider-for',
      arrows: false,
      dots:false,
      focusOnSelect: true
    });

    $('a[data-slide]').click(function(e) {
      e.preventDefault();
      var slideno = $(this).data('slide');
      $('.slider-nav').slick('slickGoTo', slideno - 1);
    });
  });


  // featured Slider for product details
$(document).ready(function () {
    $(".featured-slider").slick({
        dots: false,
        arrows: true,
        infinite: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        cssEase: "linear",
        initialSlide: 1,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                },
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                },
            },
        ],
    });
});
// homepaeg video togglers
const vidActionToggler = document.querySelector(".video-play-icon");
const homeVid = document.querySelector(".video-div video");
const homeVidIco = document.querySelector(".video-play-icon i");

vidActionToggler?.addEventListener("click", () => {
  if (homeVid.paused) {
    homeVid.play();
    homeVidIco.classList.remove("fa-play");
    homeVidIco.classList.add("fa-pause");
  } else {
    homeVid.pause(); // Corrected variable name
    homeVidIco.classList.add("fa-play");
    homeVidIco.classList.remove("fa-pause");
  }
});
// homepaeg video togglers

// toggler for video
const vidAction = document.querySelector(".vid__actions");
const vidIco = document.querySelector(".vid__actions i");
const vidText = document.querySelector(".vid__actions p");
const vidElem = document.querySelector(".full__vid");

// console.log(vidIco.classList.remove('fa-play'))
vidAction?.addEventListener("click", () => {
  if (vidElem.paused) {
    vidElem.play();
    vidIco.classList.remove("fa-play");
    vidIco.classList.add("fa-pause");
    vidText.innerHTML = "P A U S E V I D E O";
  } else {
    vidElem.pause();
    vidIco.classList.add("fa-play");
    vidIco.classList.remove("fa-pause");
    vidText.innerHTML = "P L A Y V I D E O";
  }
});
// vidElem.onwaiting = function () {
//   console.log("logind");
// };

// Size detector
// const vidWrapper = document.querySelector(".vid__text-wrapp");
// if (vidWrapper) {
//   function screenDetector() {
//     if (window.innerWidth <= 575) {
//       vidWrapper.classList.remove("position-absolute");
//     } else {
//       vidWrapper.classList.add("position-absolute");
//     }
//   }
//   screenDetector();
//   window?.addEventListener("resize", screenDetector);
// }


function moveToNext(currentInput, nextInputId) {
	var maxLength = parseInt(currentInput.getAttribute("maxlength"));
	var currentLength = currentInput.value.length;

	currentInput.addEventListener("focus", function () {
		this.value = "";
	});

	if (currentLength >= maxLength) {
		if (nextInputId) {
			document.getElementById(nextInputId).focus();
		} else {
			currentInput.value = "";
		}
	}
}

$(".shop-password").click(function () {
	let currentType = $(this).siblings("input").attr("type");
	if (currentType == "password") {
		$(this).siblings("input").attr("type", "text");
		$(this).children("i").addClass("fa-eye-slash");
		$(this).children("i").removeClass("fa-eye");
	} else {
		$(this).siblings("input").attr("type", "password");
		$(this).children("i").removeClass("fa-eye-slash");
		$(this).children("i").addClass("fa-eye");
	}
});

// Dashboard function
$(".toggler-btn").click(function () {
	let toHide = $(this).attr("to-hide");
	let toShow = $(this).attr("to-show");
	$(toHide).addClass("d-none");
	$(toShow).removeClass("d-none");
});

// counter JS

$(".plus").click(function () {
	let currentval = $(this).siblings(".counter-value").val();
	currentval++;
	console.log(currentval);
	$(this).siblings(".counter-value").val(currentval);
});

$(".minus").click(function () {
	let currentval = $(this).siblings(".counter-value").val();
	if (currentval > 1) {
		currentval--;
		$(this).siblings(".counter-value").val(currentval);
	}
});

$(".counter-plus").click(function () {
	let currentval = $(".input-value").val();
	currentval++;
	$(".input-value").val(currentval);
});
$(".counter-minus").click(function () {
	let currentval = $(".input-value").val();
	if (currentval > 1) {
		currentval--;
		$(".input-value").val(currentval);
	}
});

// counter JS

// radio JS
$(document).ready(function () {
	$(".payment-radio").change(function () {
		if ($(this).attr("id") == "card") {
			$("#card-details").removeClass("d-none");
		} else {
			$("#card-details").addClass("d-none");
		}
	});
});
// radio JS

var tween = new TimelineMax({repeat: -1});

	// Bob
var bob = new TimelineMax();
		bob.staggerTo('.wheel, .trails', 0.8, { y: -6, ease: Linear.easeNone }, 0.3 );
		bob.staggerTo('.wheel, .trails', 0.5, { y: 0, ease: Linear.easeNone }, 0.3 );
		bob.duration(1);
		bob.pause();

	// Spin
var spin = new TimelineMax();
		spin.to('.wheel', 3, { rotation: 360, transformOrigin:'50% 50%', ease: Linear.easeNone });

// Trails
var trails = new TimelineLite();
		trails.duration(0.5);

// Trails Major (long)
var trails_major = new TimelineMax();
$('.trails .trail-major').each(function(i){

	var trail_timeline = new TimelineLite();

	var original_x = parseInt($(this).attr('x'));
	var original_width = parseInt($(this).attr('width'));

	$(this).data('originalx', original_x);

	trail_timeline.set(this, { opacity: 0, attr:{ width: 0, x: (original_x + original_width) } } );
	trail_timeline.to(this, 0.35, { opacity: 1, attr:{ width: original_width, x: original_x }, ease: Linear.easeNone } );
	trail_timeline.to(this, 0.35, { opacity: 0, attr:{ width: 0, x: 0 }, ease: Linear.easeNone } );

	trails_major.add(trail_timeline, 0.4*i);
});
trails.add(trails_major, 0);

// Trails Minor (short)
var trails_minor = new TimelineMax();
$('.trails .trail-minor').each(function(i){

	var trail_timeline = new TimelineLite();

	var original_x = parseInt($(this).attr('x'));
	var start_xMajor = parseInt($(this).prev('.trail-major').attr('x'));
	var original_xMajor = parseInt($(this).prev('.trail-major').data('originalx'));
	var original_width = parseInt($(this).attr('width'));
	var original_widthMajor = parseInt($(this).prev('.trail-major').attr('width'));
	var gap = 10;

	trail_timeline.set(this, { opacity: 0, attr:{ width: 0, x: (start_xMajor - original_width - gap) } } );
	trail_timeline.to(this, 0.35, { opacity: 0.5, attr:{ width: original_width, x: (original_xMajor - original_width - gap) }, ease: Linear.easeNone } );
	trail_timeline.to(this, 0.35, { opacity: 0, attr:{ width: 0, x: (0 - gap) }, ease: Linear.easeNone } );

	trails_minor.add(trail_timeline, 0.4*i);
});
trails.add(trails_minor, 0);

// Master Timeline
tween.add(spin, 0);
tween.add(bob, 0);
tween.add(trails, 0);
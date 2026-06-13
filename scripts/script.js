// Header

var scrollTop = $(window).scrollTop();

if (scrollTop > 10) {
    $(".header").addClass('bg-white');
} else {
    $(".header").removeClass('bg-white');
}

$(window).on('scroll', function () {
    scrollTop = $(window).scrollTop();
    if (scrollTop > 10) {
        $(".header").addClass('bg-white');
    } else {
        $(".header").removeClass('bg-white');
    }
});

$("#openMenu").on("click", function () {
    $(".header-mobile-menu").addClass("active");
});

$("#closeMenu").on("click", function () {
    $(".header-mobile-menu").removeClass("active");
});

$(".header-mobile-links-item a").on("click", function () {
    $(".header-mobile-menu").removeClass("active");
});

$("#copy").on("click", function () {
    var key = $("#chave").val();

    navigator.clipboard.writeText(key)
        .then(function () {
            showAlert("Chave copiada para a área de transferência!");
        })
        .catch(function (err) {
            alert("Failed to copy key. Please try again.");
        });
});

// Swiper

var swiperCommunites = new Swiper('.swiper-communities .swiper', {
    slidesPerView: 1,
    loop: true,
    variableWidth: false,
    breakpoints: {
        1024: {
            slidesPerView: 4,
        },
        768: {
            slidesPerView: 2,
        }
    },
    navigation: {
        nextEl: '.swiper-button-communities-next',
        prevEl: '.swiper-button-communities-prev',
    }, on: {
        init: function (swiper) {
            toggleArrows(swiper, '.swiper-communities');
        },
        resize: function (swiper) {
            toggleArrows(swiper, '.swiper-communities');
        },
    }
});

var swiperArticles = new Swiper('.swiper-home-articles.swiper', {
    slidesPerView: 1,
    loop: true,
    spaceBetween: 40,
    variableWidth: false,
    height: "auto",
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    pagination: {
        el: '.swiper-pagination'
    },
    breakpoints: {
        1024: {
            slidesPerView: 3,
        },
        768: {
            slidesPerView: 2
        }
    }, on: {
        init: function (swiper) {
            toggleArrows(swiper, '.home-articles');
        },
        resize: function (swiper) {
            toggleArrows(swiper, '.home-articles');
        },
    }
});

var swiperArticles = new Swiper('.swiper-home-gallery.swiper', {
    slidesPerView: 1,
    loop: true,
    spaceBetween: 40,
    variableWidth: false,
    height: "auto",
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    pagination: {
        el: '.swiper-pagination'
    },
    breakpoints: {
        1024: {
            slidesPerView: 3,
        },
        768: {
            slidesPerView: 2
        }
    }, on: {
        init: function (swiper) {
            toggleArrows(swiper, '.home-gallery');
        },
        resize: function (swiper) {
            toggleArrows(swiper, '.home-gallery');
        },
    }
});


var swiperWebsites = new Swiper('.swiper-websites.swiper', {
    slidesPerView: 2,
    loop: true,
    spaceBetween: 0,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    }, breakpoints: {
        768: {
            slidesPerView: 6,
        },
        520: {
            slidesPerView: 4,
            spaceBetween: 40
        }
    }
});

var swiperArticlesBanner = new Swiper(".swiper-articles-banner.swiper", {
    slidesPerView: 1,
    loop: true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    }
});

var swiperGallery = new Swiper(".swiper-gallery.swiper", {
    slidesPerView: 1,
    spaceBetween: 40,
    loop: true,
    navigation: {
        nextEl: '.swiper-button-gallery-next',
        prevEl: '.swiper-button-gallery-prev',
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    breakpoints: {
        992: {
            slidesPerView: 2,
        }
    }
});


function toggleArrows(swiper, className) {
    var slidesPerView = swiper.params.slidesPerView;
    if (typeof slidesPerView === 'object') {
        slidesPerView = swiper.params.breakpoints[swiper.currentBreakpoint]
            ? swiper.params.breakpoints[swiper.currentBreakpoint].slidesPerView
            : 1;
    }

    var totalSlides = swiper.originalSlides ? swiper.originalSlides.length : swiper.slides.length;

    if (totalSlides <= slidesPerView) {
        $(className + " .swiper-button-next").css("display", "none");
        $(className + " .swiper-button-prev").css("display", "none");
        $(className + " .swiper-pagination").css("display", "none");
    } else {
        $(className + " .swiper-button-next").css("display", "block");
        $(className + " .swiper-button-prev").css("display", "block");
        $(className + " .swiper-pagination").css("display", "flex");

    }
}


function showAlert(text) {
    $(".sc-alert").remove();

    var alert = "<div class='sc-alert'><h2 class='sc-alert-title'>" + text + "</h2></div>";

    $("body").append(alert);

    setTimeout(function () {
        $(".sc-alert").addClass("active");
    }, 10);

    setTimeout(function () {
        setTimeout(function () {
            $(".sc-alert").removeClass("active");
        }, 100);

        $(".sc-alert").remove();
    }, 3000);
}
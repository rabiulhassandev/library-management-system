$(document).ready(function () {
    $("#carousel-slider").owlCarousel({
      dots: true,
      nav: false,
      loop: true,
      animateOut: 'fadeOut',
      autoplay:true,
      items: 1,
      responsiveClass: true,
    });

    // Recent Books

    $("#recent-books").owlCarousel({
        dots: false,
        nav: false,
        loop: true,
        margin: 15,
        responsiveClass: true,
        responsive: {
            0: {
            items: 1,
            },
            400: {
            items: 2,
            },
            700: {
            items: 3,
            },
            800: {
            items: 4,
            },
            1000: {
            items: 6,
            },
        },
    });
    $("#recent-books-next").click(function () {
        $("#recent-books").trigger("next.owl.carousel");
    });
    // Go to the previous item
    $("#recent-books-prev").click(function () {
        $("#recent-books").trigger("prev.owl.carousel", [300]);
    });

    // Categories

    $("#categories").owlCarousel({
        dots: false,
        nav: false,
        loop: true,
        margin: 20,
        responsiveClass: true,
        responsive: {
            0: {
            items: 1,
            },
            400: {
            items: 2,
            },
            700: {
            items: 3,
            },
            800: {
            items: 5,
            },
            1000: {
            items: 7,
            },
        },
    });
    $("#category-next").click(function () {
        $("#categories").trigger("next.owl.carousel");
    });
    // Go to the previous item
    $("#category-prev").click(function () {
        $("#categories").trigger("prev.owl.carousel", [300]);
    });



    // Members

    $("#members").owlCarousel({
        dots: false,
        nav: false,
        loop: true,
        margin: 20,
        responsiveClass: true,
        responsive: {
            0: {
            items: 1,
            },
            400: {
            items: 2,
            },
            700: {
            items: 3,
            },
            1000: {
            items: 4,
            },
        },
    });
    $("#member-next").click(function () {
        $("#members").trigger("next.owl.carousel");
    });
    // Go to the previous item
    $("#member-prev").click(function () {
        $("#members").trigger("prev.owl.carousel", [300]);
    });
});

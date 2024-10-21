import "./bootstrap";

$(document).ready(function () {
    $(".responsive").slick({
        dots: true,
        infinite: true,
        // speed: 100,
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: false,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false,
                    arrows: false,
                },
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    dots: false,
                    arrows: true,
                },
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    dots: false,
                    arrows: false,
                },
            },
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ],
    });
});

const firstCard = document.getElementById("card-1");
const otherCards = document.querySelectorAll(
    "#card-container > div:not(#card-1)"
);

// Add hover event listeners to other cards
otherCards.forEach((card) => {
    card.addEventListener("mouseenter", () => {
        // Shrink the first card when hovering over another card
        firstCard.classList.replace("w-[30vw]", "w-[10vw]");

        // Expand the hovered card
        card.classList.replace("w-[10vw]", "w-[30vw]");
    });

    card.addEventListener("mouseleave", () => {
        // Reset the first card to expanded
        firstCard.classList.replace("w-[10vw]", "w-[30vw]");

        // Shrink the other card back to normal
        card.classList.replace("w-[30vw]", "w-[10vw]");
    });
});

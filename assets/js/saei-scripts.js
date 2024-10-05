// SCRIPT FOR OWL CAROUSEL
jQuery('.owl-carousel').owlCarousel({
    rtl:false,
    loop:true,
    nav: true,
    dots: false,
    center:true,
    stagePadding: 100,
    margin:10,
    autoplay:true,
    autoplayTimeout:5000,
    autoplayHoverPause:true,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:1,
            nav:false
        },
        1000:{
            items:3,
            nav:true,
            loop:false
        }
    }
})

// TAB SCRIPT
document.addEventListener("DOMContentLoaded", function () {
    const tabs = document.querySelectorAll(".tab");
    const prevArrow = document.getElementById("prev-arrow");
    const nextArrow = document.getElementById("next-arrow");
    
    let activeIndex = 0;

    function updateActiveTab(index) {
        tabs[activeIndex].classList.remove("active");
        document
            .querySelector(tabs[activeIndex].dataset.target)
            .classList.remove("active");
        activeIndex = index;
        tabs[activeIndex].classList.add("active");
        document
            .querySelector(tabs[activeIndex].dataset.target)
            .classList.add("active");
        tabs[activeIndex].scrollIntoView({
            behavior: "smooth",
            block: "nearest",
            inline: "center",
        });
        updateArrows();
    }

    function updateArrows() {
        if (activeIndex === 0) {
            prevArrow.classList.add("hidden");
        } else {
            prevArrow.classList.remove("hidden");
        }
        if (activeIndex === tabs.length - 1) {
            nextArrow.classList.add("hidden");
        } else {
            nextArrow.classList.remove("hidden");
        }
    }

    prevArrow.addEventListener("click", function () {
        if (activeIndex > 0) {
            updateActiveTab(activeIndex - 1);
        }
    });

    nextArrow.addEventListener("click", function () {
        if (activeIndex < tabs.length - 1) {
            updateActiveTab(activeIndex + 1);
        }
    });

    tabs.forEach((tab, index) => {
        tab.addEventListener("click", function (event) {
            event.preventDefault();
            event.stopPropagation();
            updateActiveTab(index);
        });
    });

    updateArrows();
});


// SCROLLSPY SCRIPT
document.addEventListener("DOMContentLoaded", function () {
    const navbarLinks = document.querySelectorAll(".sticky-navbar a");

    function onScroll() {
        let currentSection = "";
        document
            .querySelectorAll(".section-scroll")
            .forEach((section) => {
                const sectionTop = section.offsetTop;
                if (pageYOffset >= sectionTop - 50) {
                    currentSection = section.getAttribute("id");
                }
            });

        navbarLinks.forEach((link) => {
            link.classList.remove("active");
            if (
                link.getAttribute("data-target") ===
                `#${currentSection}`
            ) {
                link.classList.add("active");
            }
        });
    }

    window.addEventListener("scroll", onScroll);

    navbarLinks.forEach((link) => {
        link.addEventListener("click", function (event) {
            event.preventDefault();
            const targetId = this.getAttribute("data-target");
            document
                .querySelector(targetId)
                .scrollIntoView({ behavior: "smooth" });
        });
    });
});
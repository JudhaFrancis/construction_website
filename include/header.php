<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>
        Mining Future
    </title>
    <script src="https://cdn.tailwindcss.com">
    </script>
    <!-- Include Font Awesome -->
    <script src="https://kit.fontawesome.com/YOUR_KIT_CODE.js" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet" />
    <style>
        .scroll-container {
            scroll-snap-type: x mandatory;
            overflow-x: hidden;
            display: flex;
            width: 100%;
            height: 100%;
            scroll-behavior: smooth;
        }

        .scroll-container::-webkit-scrollbar {
            display: none;
        }

        .scroll-item {
            min-width: 100%;
            height: 100%;
            scroll-snap-align: center;
        }

        .container {
            width: 80%;
        }

        @media (min-width: 768px) {
            .section-padding {
                padding-top: 8rem;
                padding-bottom: 8rem;
            }

            .container {
                max-width: 90%;
            }
        }

        .sticky-header {
            transition: background-color 0.3s ease;
        }

        .sticky-header.sticky {
            background-color: white;
        }

        .testimonial-slider {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }

        .testimonial-slide {
            min-width: 100%;
            box-sizing: border-box;
        }

        .parallax {
            transform: translateY(var(--scroll));
            transition: transform 0.2s ease-out;
        }

        .blur-left,
        .blur-right,
        .blur-up,
        .blur-down {
            opacity: 0;
            filter: blur(10px);
            transition: opacity 0.8s ease-out, filter 0.8s ease-out, transform 0.8s ease-out;
            will-change: opacity, transform;
        }

        .blur-left {
            transform: translateX(-50px);
        }

        .blur-right {
            transform: translateX(50px);
        }

        .blur-up {
            transform: translateY(-50px);
        }

        .blur-down {
            transform: translateY(50px);
        }

        .show {
            opacity: 1 !important;
            filter: blur(0);
            transform: translateX(0) translateY(0);
        }
    </style>
</head>

<body class="font-roboto">
    <header class="bg-transparent py-4 sticky top-0 z-50 sticky-header shadow">
        <div class="max-w-7xl mx-auto flex justify-between items-center px-4">
            <!-- Logo on the left -->
            <div class="flex items-center">
                <img alt="Comural logo" class="rounded-full" height="40" src="assets/img/home/logo.png" width="20%" />
            </div>

            <!-- Desktop Navigation (Centered) -->
            <nav class="hidden md:flex space-x-4 absolute left-1/2 transform -translate-x-1/2">
                <a class="text-[#642974] hover:text-[#f7ae18] px-3 py-2 rounded-md text-sm font-medium" href="home">
                    HOME
                </a>
                <a class="text-[#642974] hover:text-[#f7ae18] px-3 py-2 rounded-md text-sm font-medium" href="about">
                    ABOUT US
                </a>
                <a class="text-[#642974] hover:text-[#f7ae18] px-3 py-2 rounded-md text-sm font-medium" href="products">
                    PRODUCTS
                </a>
                <a class="text-[#642974] hover:text-[#f7ae18] px-3 py-2 rounded-md text-sm font-medium" href="contact">
                    CONTACT US
                </a>
            </nav>

            <!-- Mobile Menu Button -->
            <button id="mobile-menu-btn" class="md:hidden text-[#642974] focus:outline-none">
                <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </button>

            <!-- Right Side Button -->
            <div class="hidden md:flex">
                <a class="bg-[#f7ae18] text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-[#642974]" href="#">
                    GET STARTED
                </a>
            </div>
        </div>

        <!-- Mobile Navigation Menu (Hidden by Default) -->
        <nav id="mobile-menu" class="hidden md:hidden absolute top-16 left-0 w-full bg-white shadow-md">
            <div class="flex flex-col items-center space-y-2 py-4">
                <a class="text-[#642974] hover:text-[#f7ae18] px-3 py-2 rounded-md text-sm font-medium" href="home">
                    HOME
                </a>
                <a class="text-[#642974] hover:text-[#f7ae18] px-3 py-2 rounded-md text-sm font-medium" href="about">
                    ABOUT US
                </a>
                <a class="text-[#642974] hover:text-[#f7ae18] px-3 py-2 rounded-md text-sm font-medium" href="products">
                    PRODUCTS
                </a>
                <a class="text-[#642974] hover:text-[#f7ae18] px-3 py-2 rounded-md text-sm font-medium" href="contact">
                    CONTACT US
                </a>
            </div>
        </nav>

        <!-- JavaScript to Toggle Mobile Menu -->
        <script>
            document.getElementById('mobile-menu-btn').addEventListener('click', function() {
                document.getElementById('mobile-menu').classList.toggle('hidden');
            });
        </script>
    </header>

</body>

</html>

<script>
    window.addEventListener('scroll', () => {
        const header = document.querySelector('.sticky-header');
        if (window.scrollY > 0) {
            header.classList.add('sticky');
        } else {
            header.classList.remove('sticky');
        }
    });
    document.addEventListener("scroll", function() {
        let scrollPosition = window.scrollY;
        document.querySelectorAll(".parallax").forEach(el => {
            let speed = parseFloat(el.style.getPropertyValue("--scroll"));
            el.style.transform = `translateY(${scrollPosition * speed / 100}px)`;
        });
    });
    document.addEventListener("DOMContentLoaded", function() {
        const links = document.querySelectorAll(".hidden.md\\:flex a");
        const currentPath = window.location.pathname.split("/").pop(); // Get current page

        links.forEach((link) => {
            if (link.getAttribute("href") === currentPath || (currentPath === "" && link.getAttribute("href") === "home")) {
                link.classList.add("text-[#f7ae18]");
            }
        });
    });
    document.addEventListener("DOMContentLoaded", function () {
    let elements = document.querySelectorAll(".blur-left, .blur-right, .blur-up, .blur-down");
    let lastScrollY = window.scrollY;

    let observer = new IntersectionObserver((entries) => {
        let currentScrollY = window.scrollY;
        let scrollingDown = currentScrollY > lastScrollY; // Detect scrolling direction

        entries.forEach(entry => {
            if (entry.intersectionRatio >= 0.5 && scrollingDown) { // Trigger at 50% visibility
                entry.target.classList.add("show");
            }
        });

        lastScrollY = currentScrollY; // Update scroll position
    }, {
        threshold: 0.5 // Trigger when 50% of the element is visible
    });

    elements.forEach(element => {
        observer.observe(element);

        // If element is already 50% visible on load, trigger animation
        if (isElement50PercentVisible(element)) {
            element.classList.add("show");
        }
    });

    function isElement50PercentVisible(el) {
        let rect = el.getBoundingClientRect();
        let elementHeight = rect.height;
        let visibleHeight = Math.min(window.innerHeight, rect.bottom) - Math.max(0, rect.top);
        return visibleHeight >= elementHeight * 0.5;
    }
});

</script>
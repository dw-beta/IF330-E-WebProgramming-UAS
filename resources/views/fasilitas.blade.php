<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SDIT Ar Ridho Tangerang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://fonts.cdnfonts.com/css/poetsen-one" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet">
    <link href="https://unpkg.com/swiper@8/swiper-bundle.min.css" rel="stylesheet">
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Styles -->
    <style>
        ::-webkit-scrollbar {
            width: 12px;
        }

        ::-webkit-scrollbar-track {
            background-color: #f1f1f1;
        }

        /* warna handle (bagian yang dapat di-drag) scrollbar */
        ::-webkit-scrollbar-thumb {
            background-color: #ffa123;
            border-radius: 6px;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background: linear-gradient(90deg, rgba(215, 197, 168, 1) 0%, rgba(250, 207, 149, 1) 25%, rgba(255, 227, 132, 0.4066001400560224) 100%);
        }

        .content {
            flex: 1;
        }

        .fasilitas {
            display: flex;
            justify-content: center;
            margin-top: 200px;
        }

        .fasilitas .title {
            font-family: 'Poetsen One', sans-serif;
            font-size: 24px;
            margin-bottom: 60px;
            border-bottom: 5px solid #ffa123; 
            padding-bottom: 5px; 
            display: inline-block;
        }

        .container {
            max-width: 1200px;
            width: 95%;
            margin-bottom: 60px;
        }

        .slider-wrapper {
            position: relative;
        }

        .slider-wrapper .slide-button {
            position: absolute;
            top: 50%;
            outline: none;
            border: none;
            height: 50px;
            width: 50px;
            z-index: 5;
            color: #fff;
            display: flex;
            cursor: pointer;
            font-size: 2.2rem;
            background: #FFD875;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            transform: translateY(-50%);
        }

        .slider-wrapper .slide-button:hover {
            background: #FFFACD;
            color: #FFD875;
        }

        .slider-wrapper .slide-button#prev-slide {
            left: -25px;
            display: none;
        }

        .slider-wrapper .slide-button#next-slide {
            right: -25px;
        }

        .slider-wrapper .image-list {
            display: grid;
            grid-template-columns: repeat(10, 1fr);
            gap: 18px;
            font-size: 0;
            list-style: none;
            margin-bottom: 30px;
            overflow-x: hidden;
            scrollbar-width: none;
        }

        .slider-wrapper .image-list::-webkit-scrollbar {
            display: none;
        }

        .slider-wrapper .image-list .image-item {
            width: 325px;
            height: 300px;
            object-fit: cover;
        }

        .container .slider-scrollbar {
            height: 24px;
            width: 100%;
            display: flex;
            align-items: center;
        }

        .slider-scrollbar .scrollbar-track {
            background: #FFD875;
            width: 100%;
            height: 2px;
            display: flex;
            align-items: center;
            border-radius: 4px;
            position: relative;
        }

        .slider-scrollbar:hover .scrollbar-track {
            height: 4px;
        }

        .slider-scrollbar .scrollbar-thumb {
            position: absolute;
            background: #FFFACD;
            top: 0;
            bottom: 0;
            width: 50%;
            height: 100%;
            cursor: grab;
            border-radius: inherit;
        }

        .slider-scrollbar .scrollbar-thumb:active {
            cursor: grabbing;
            height: 8px;
            top: -2px;
        }

        .slider-scrollbar .scrollbar-thumb::after {
            content: "";
            position: absolute;
            left: 0;
            right: 0;
            top: -10px;
            bottom: -10px;
        }

        .footer {
            background-color: #333;
            color: white;
            padding: 20px;
            text-align: center;
        }

        /* RESPONSIVE PHONE */
        @media (max-width: 767px) {
            .fasilitas .title {
                margin-top: 100px; /* Adjust title margin on smaller screens */
            }

            .slider-wrapper .image-list {
                grid-template-columns: repeat(2, 1fr); /* Display fewer images in 2 columns for phones */
                gap: 10px; /* Adjust gap between images */
            }

            .slider-wrapper .image-list .image-item {
                width: 100%; /* Full width for images on phones */
                height: auto; /* Adjust height to maintain aspect ratio */
                border-radius: 15px; /* Slightly reduce border radius for better presentation */
            }

            .container .slider-scrollbar {
                display: none; /* Hide scrollbar on phones */
            }

            .slider-wrapper .slide-button {
                display: none; /* Hide slide buttons on phones */
            }
        }

        /* RESPONSIVE TABLET */
        @media (min-width: 768px) and (max-width: 1024px) {
            .fasilitas {
                margin-top: 150px; /* Adjust top margin for tablets */
            }

            .slider-wrapper .image-list {
                display: grid;
                grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); /* Keep a minimum width of 300px for each image */
                gap: 15px; /* Adjust gap between images */
            }

            .slider-wrapper .image-list .image-item {
                width: 100%; /* Occupy full width within the grid */
                height: auto; /* Adjust height to maintain aspect ratio */
                border-radius: 20px; /* Adjust border radius for tablets */
            }

            .container .slider-scrollbar {
                display: block; /* Show scrollbar on tablets */
            }

            .slider-wrapper .slide-button {
                display: flex; /* Display slide buttons on tablets */
            }
        }


    </style>
</head>

<body>

    @include ('header')

    <div class="content">
        <div class="fasilitas" data-aos="zoom-in-up">
            <div class="title">FASILITAS</div>
        </div>
        <div class="container" data-aos="zoom-in-up">
            <div class="slider-wrapper">
                <button id="prev-slide" class="slide-button material-symbols-rounded">
                    < </button>
                        <ul class="image-list">
                            <img class="image-item" src="{{ asset('images/fasilitas/Ruang_Kelas_1.jpeg') }}" style="border-radius: 40px;" alt="img-1" />
                            <img class="image-item" src="{{ asset('images/fasilitas/Ridho_Mart.jpeg') }}" style="border-radius: 40px;" alt="img-2" />
                            <img class="image-item" src="{{ asset('images/fasilitas/Perpustakaan.jpeg') }}" style="border-radius: 40px;" alt="img-3" />
                            <img class="image-item" src="{{ asset('images/fasilitas/Lapangan.jpeg') }}" style="border-radius: 40px;" alt="img-4" />
                            <img class="image-item" src="{{ asset('images/fasilitas/Ruang_Komputer.jpeg') }}" style="border-radius: 40px;" alt="img-5" />
                            <img class="image-item" src="{{ asset('images/fasilitas/Musholla.jpeg') }}" style="border-radius: 40px;" alt="img-6" />
                            <img class="image-item" src="{{ asset('images/fasilitas/UKS.jpeg') }}" style="border-radius: 40px;" alt="img-7" />
                            <img class="image-item" src="{{ asset('images/fasilitas/Tata_Usaha.jpeg') }}" style="border-radius: 40px;" alt="img-8" />
                            <img class="image-item" src="{{ asset('images/fasilitas/Gudang_Penyimpanan.jpeg') }}" style="border-radius: 40px;" alt="img-9" />
                            <img class="image-item" src="{{ asset('images/fasilitas/Aula_2.jpeg') }}" style="border-radius: 40px;" alt="img-10" />
                        </ul>
                        <button id="next-slide" class="slide-button material-symbols-rounded">
                            >
                        </button>
            </div>
            <div class="slider-scrollbar">
                <div class="scrollbar-track">
                    <div class="scrollbar-thumb"></div>
                </div>
            </div>
        </div>
    </div>

    @include ('footer')


    <script>
        const initSlider = () => {
            const imageList = document.querySelector(".slider-wrapper .image-list");
            const slideButtons = document.querySelectorAll(".slider-wrapper .slide-button");
            const sliderScrollbar = document.querySelector(".container .slider-scrollbar");
            const scrollbarThumb = sliderScrollbar.querySelector(".scrollbar-thumb");
            const maxScrollLeft = imageList.scrollWidth - imageList.clientWidth;

            // Handle scrollbar thumb drag
            scrollbarThumb.addEventListener("mousedown", (e) => {
                const startX = e.clientX;
                const thumbPosition = scrollbarThumb.offsetLeft;
                const maxThumbPosition = sliderScrollbar.getBoundingClientRect().width - scrollbarThumb
                    .offsetWidth;

                // Update thumb position on mouse move
                const handleMouseMove = (e) => {
                    const deltaX = e.clientX - startX;
                    const newThumbPosition = thumbPosition + deltaX;
                    // Ensure the scrollbar thumb stays within bounds
                    const boundedPosition = Math.max(0, Math.min(maxThumbPosition, newThumbPosition));
                    const scrollPosition = (boundedPosition / maxThumbPosition) * maxScrollLeft;

                    scrollbarThumb.style.left = `${boundedPosition}px`;
                    imageList.scrollLeft = scrollPosition;
                }
                // Remove event listeners on mouse up
                const handleMouseUp = () => {
                    document.removeEventListener("mousemove", handleMouseMove);
                    document.removeEventListener("mouseup", handleMouseUp);
                }
                // Add event listeners for drag interaction
                document.addEventListener("mousemove", handleMouseMove);
                document.addEventListener("mouseup", handleMouseUp);
            });
            // Slide images according to the slide button clicks
            slideButtons.forEach(button => {
                button.addEventListener("click", () => {
                    const direction = button.id === "prev-slide" ? -1 : 1;
                    const scrollAmount = imageList.clientWidth * direction;
                    imageList.scrollBy({
                        left: scrollAmount,
                        behavior: "smooth"
                    });
                });
            });
            // Show or hide slide buttons based on scroll position
            const handleSlideButtons = () => {
                slideButtons[0].style.display = imageList.scrollLeft <= 0 ? "none" : "flex";
                slideButtons[1].style.display = imageList.scrollLeft >= maxScrollLeft ? "none" : "flex";
            }
            // Update scrollbar thumb position based on image scroll
            const updateScrollThumbPosition = () => {
                const scrollPosition = imageList.scrollLeft;
                const thumbPosition = (scrollPosition / maxScrollLeft) * (sliderScrollbar.clientWidth -
                    scrollbarThumb.offsetWidth);
                scrollbarThumb.style.left = `${thumbPosition}px`;
            }
            // Call these two functions when image list scrolls
            imageList.addEventListener("scroll", () => {
                updateScrollThumbPosition();
                handleSlideButtons();
            });
        }
        window.addEventListener("resize", initSlider);
        window.addEventListener("load", initSlider);

        AOS.init();
    </script>
</body>

</html>

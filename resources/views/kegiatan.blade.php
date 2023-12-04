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
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }

        .keagamaan {
            display: flex;
            justify-content: space-around;
            margin-top: 200px;
        }

        .keagamaan .title {
            font-family: 'Poetsen One', sans-serif;
            font-size: 24px;
            margin-bottom: 60px;
        }

        .kegiatan{
            display: flex;
            justify-content: space-around;
            padding: 30px;
        }

        .card-title{
            font-family: 'Poppins', sans-serif;
                font-weight: 500;
        }

        .container {
            max-width: 1200px;
            width: 95%;
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

        .ekstra {
            display: flex;
            justify-content: space-around;
            margin-top: 100px;
        }

        .ekstra .title {
            font-family: 'Poetsen One', sans-serif;
            font-size: 24px;
            margin-bottom: 60px;
        }


        /* RESPONSIVE HANDPHONE */
        @media (max-width: 767px) and (min-width: 320px) {}
    </style>
</head>

<body>

    @include ('header')

    <div class="keagamaan" data-aos="zoom-in-up">
        <div class="title">KEGIATAN KEAGAMAAN</div>
    </div>
<div class="kegiatan" data-aos="zoom-in-up">
    <div class="row row-cols-1 row-cols-md-4 g-4">
        <div class="col">
            <div class="card h-100" style="border-radius: 30px;">
                <img src="{{ asset('images/keagamaan/Rutinitas_Sholat.jpeg') }}" style="height: 205px;" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Rutinitas Sholat</h5>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100" style="border-radius: 30px;">
                <img src="{{ asset('images/keagamaan/Rutinitas_Sholat_2.jpeg') }}"  style="height: 205px;" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Rutinitas Sholat</h5>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100" style="border-radius: 30px;">
                <img src="{{ asset('images/keagamaan/Rutinitas_Sholat_3.jpeg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Rutinitas Sholat</h5>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100" style="border-radius: 30px;">
                <img src="{{ asset('images/keagamaan/Murojaah_Al-Quran.jpeg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Murojaah Al-Quraan</h5>
                </div>
            </div>
        </div>
    </div>
</div>   

    <div class="ekstra" data-aos="zoom-in-up">
        <div class="title">KEGIATAN EKSTRAKURIKULER</div>
    </div>
    <div class="container" data-aos="zoom-in-up">
        <div class="slider-wrapper">
            <button id="prev-slide" class="slide-button material-symbols-rounded">
                < </button>
                    <ul class="image-list">
                        <img class="image-item" src="{{ asset('images/ekskul/Bahasa_Jerman.jpeg') }}" style="border-radius: 40px;" alt="img-1" />
                        <img class="image-item" src="{{ asset('images/ekskul/Kaligrafi.jpeg') }}" style="border-radius: 40px;" alt="img-2" />
                        <img class="image-item" src="{{ asset('images/ekskul/Marawis_Hadroh.jpeg') }}" style="border-radius: 40px;" alt="img-3" />
                        <img class="image-item" src="{{ asset('images/ekskul/Pengembangan_Literasi.jpeg') }}" style="border-radius: 40px;" alt="img-4" />
                        <img class="image-item" src="{{ asset('images/ekskul/Seni_Lukis.jpeg') }}" style="border-radius: 40px;" alt="img-5" />
                        <img class="image-item" src="{{ asset('images/ekskul/Pramuka.jpeg') }}" style="border-radius: 40px;" alt="img-6" />
                        <img class="image-item" src="{{ asset('images/ekskul/Pencak_Silat.jpeg') }}" style="border-radius: 40px;" alt="img-7" />
                        <img class="image-item" src="{{ asset('images/ekskul/Taekwondo.jpeg') }}" style="border-radius: 40px;" alt="img-8" />
                        <img class="image-item" src="{{ asset('images/ekskul/Panahan.jpeg') }}" style="border-radius: 40px;" alt="img-9" />
                        <img class="image-item" src="{{ asset('images/ekskul/Renang.jpeg') }}" style="border-radius: 40px;" alt="img-10" />
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
                const maxThumbPosition = sliderScrollbar.getBoundingClientRect().width - scrollbarThumb.offsetWidth;

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
                const thumbPosition = (scrollPosition / maxScrollLeft) * (sliderScrollbar.clientWidth - scrollbarThumb.offsetWidth);
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

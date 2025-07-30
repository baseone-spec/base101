<?php
include('./customer_header.php');

if (!isset($_SESSION['email_address'])) {
    header("location: ../signup.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../src/styles/output.css" rel="stylesheet">
</head>

<body>

    <!-- upper button -->
    <button onclick="topFunction()" id="myBtn" title="Go to top">^</button>
    <!-- for content -->
    <div class="container mx-auto h-full w-full bg-[#fff] text-white bg-no-repeat bg-cover bg-center"
        style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('../src/img/bgbaseone.jpg'); background-size: cover;">
        <div
            class="grid grid-cols-1 md:align-content md:text-center xl:p-24 xl:px-40 md:max-w-6xl md:mx-auto sm:max-w-2xl sm:mx-auto  sm:py-20 py-20 ">

            <div class="p-4">
                <p class="text-4xl font-semibold font-open-sans mb-4">Build the future of industrial
                    <br> Sales and Services
                </p>
                <p class="text-lg font-open-sans mb-8">
                    <br>
                    We are a team of passionate individuals dedicated to providing top-notch <br>
                    industrial sales and services. Our mission is to deliver innovative solutions <br>
                    that meet the needs of our clients.
                </p>
                <br>
                <button class="rounded-full bg-[#D00000] text-white px-6 py-2 font-open-sans button-hover ">
                    Request a Quote
                </button>
            </div>
        </div>
    </div>


    <div class="container w-full h-78 md:mx-auto p-20 xl:p-24 xl:px-40  down-rounded-lg bg-[#171717] text-white shadow-lg"
        style="box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);">
        <div class="grid grid-rows-1 gap-10 w-full text-center sm:max-w-2xl sm:mx-auto">
            <h2 class="text-4xl font-semibold mb-2">OUR SERVICES</h2>
            <p class="text-lg font-base mb-8">Seamless Transaction &nbsp;&nbsp;&nbsp;| &nbsp;&nbsp;&nbsp;Sourcing
                Adeptness
                &nbsp;&nbsp;&nbsp;|
                &nbsp;&nbsp;&nbsp;Anchored On Integrity &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
                Strong Alliances &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp; Efficiency Driven <br>
        </div>
    </div>

    <!-- product -->

    <div class="container w-full lg:grid-cols-4 h-auto text-[#2D2D2D] text-center">

        <p class="text-4xl font-semibold mb-2 mt-20">OUR TOP SELLING PRODUCT</p>
        <p class="text-lg font-base mb-5">Can seamer's machines</p>
        <!-- 
        <button class="button1 bg-[#171717] text-white px-6 py-2 mt-4 mb-10 font-open-sans button-hover w-32 "> -->

        <!-- </button> -->
        <a href="/services.php"
            class="button1 bg-[#171717] text-white px-6 py-2 mt-4 inline-block mb-20 font-open-sans button-hover w-32 text-center align-content justify-center ">
            View Shop
        </a>


        <div
            class="grid grid-cols-1 xl:grid-cols-4 lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 xl:px-30 xl:py-20 lg:px-20 lg:py-20 md:p-20 md:gap-8 w-full h-auto justify-center place-items-center gap-4">

            <div class="group relative shadow-xl p-6 justify-center align-content place-items-center max-w-6xl h-full">
                <div class="image-container grid grid-cols-1 gap-4 h-80 w-70 mb-10">
                    <img src="../src/img//product//seamers/Angelus Legacy Series Can Seamer- Model 10P.jpg"
                        alt="Image 1" class=" object-contain">
                </div>
                <div class="text-center max-w-6xl">
                    <h2 class="text-lg font-bold">Angelus Legacy Series Can Seamer</h2>
                    <p class="text-gray-600">Model 10P</p>
                    <p>The Model 10P Angelus seamer incorporates a free-standing stainless-steel machine enclosure, with
                        door interlocks. Built for easy maintenance and operation, this machine is rated for speeds up
                        to 80 CPM.F</p>


                    <!-- <button class="button1 bg-[#171717] text-white mt-8 font-open-sans button-hover">
                        View Details
                    </button> -->
                </div>
            </div>

            <div class="group relative shadow-xl p-6 justify-center align-content place-items-center max-w-6xl h-full">
                <div class="image-container grid grid-cols-1 gap-4 h-80 w-70 mb-10">
                    <img src="../src/img//product//seamers/Angelus Legacy Series Can Seamer- Model 121L.jpg"
                        alt="Image 2" class=" object-cover">
                </div>
                <div class="text-center max-w-6xl">
                    <h2 class="text-lg font-bold">Angelus Legacy Series Can Seamer</h2>
                    <p class="text-gray-600">Model 121L</p>
                    <p>The Model 121L Angelus seamer incorporates a base-mounted stainless-steel machine enclosure, with
                        door interlocks. This machine is rated for speeds up to 1600 CPM.</p>
                </div>
                <!-- <button class="button1 bg-[#171717] text-white px-6 py-2 mt-8 font-open-sans button-hover ">
                    View Details
                </button> -->
            </div>

            <div class="group relative shadow-xl p-6 justify-center align-content place-items-center max-w-6xl h-full">
                <div class="image-container grid grid-cols-1 gap-4 h-80 w-70 mb-10">
                    <img src="../src/img//product//seamers/Angelus Legacy Series Can Seamer- Model 140S.jpg"
                        alt="Image 3" class="object-cover">
                </div>
                <div class="text-center max-w-6xl">
                    <h2 class="text-lg font-bold">Angelus Legacy Series Can Seamer</h2>
                    <p class="text-gray-600">Model 140S</p>
                    <p>Angelus Legacy Series Can Seamer: Model 140S
                        The Model 140S Angelus seamer incorporates a base-mounted stainless-steel machine enclosure,
                        with door interlocks. This machine is rated for speeds up to 1750 CPM.</p>
                    <!-- <button class="button1 bg-[#171717] text-white px-6 py-2 mt-8 font-open-sans button-hover ">
                    View Details
                </button> -->
                </div>
            </div>
            <div class="group relative shadow-xl p-6 justify-center align-content place-items-center max-w-6xl h-full">
                <div class="image-container grid grid-cols-1 gap-4 h-80 w-70 mb-10 ">
                    <img src="../src/img//product//seamers/Angelus Legacy Series Can Seamer- Model 181S.jpg"
                        alt="Image 1" class="object-cover">
                </div>
                <div class="text-center max-w-6xl">
                    <h2 class="text-lg font-bold">Angelus Legacy Series Can Seamer</h2>
                    <p class="text-gray-600">Model 181S</p>
                    <p>The Model 181S Angelus seamer incorporates a base-mounted stainless-steel machine enclosure, with
                        door interlocks. This machine is rated for speeds up to 2500 CPM.</p>
                    <!-- <button class="button1 bg-[#171717] text-white px-6 py-2 mt-8 font-open-sans button-hover ">
                    View Details
                </button> -->
                </div>
            </div>
        </div>
        <!-- second column -->

        <div
            class="grid grid-cols-1 xl:grid-cols-4 lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 xl:px-30 xl:py-20 lg:px-20 lg:py-20 md:p-20 md:gap-8 h-auto justify-center place-items-center gap-4">
            <div class="group relative shadow-xl p-6 justify-center align-content place-items-center max-w-6xl h-full">
                <div class="image-container grid grid-cols-1 gap-4 h-80 w-70 mb-10 ">
                    <img src="../src/img//product//seamers/Angelus Legacy Series Can Seamer- Model 63H.jpg"
                        alt="Image 1" class="object-cover">
                </div>
                <div class="text-center max-w-6xl">
                    <h2 class="text-lg font-bold">Angelus Legacy Series Can Seamer</h2>
                    <p class="text-gray-600">Model 63H</p>
                    <p>The Model 63H Angelus seamer incorporates a base-mounted stainless-steel machine enclosure, with
                        door interlocks. This machine is rated for speeds up to 700 CPM.</p>
                </div>
                <!-- <button class="button1 bg-[#171717] text-white px-6 py-2 mt-8 font-open-sans button-hover ">
                    View Details
                </button> -->

            </div>

            <div class="group relative shadow-xl p-6 justify-center align-content place-items-center max-w-6xl h-full">
                <div class="image-container grid grid-cols-1 gap-4 h-80 w-70 mb-10">
                    <img src="../src/img//product//seamers/Angelus Legacy Series Can Seamer- Model 62H.jpg"
                        alt="Image 2" class=" object-cover">
                </div>
                <div class="text-center max-w-6xl">
                    <h2 class="text-lg font-bold">Angelus Legacy Can Seamer</h2>
                    <p class="text-gray-600">Model 62H</p>
                    <p>The Model 62H Angelus seamer incorporates a base-mounted stainless-steel machine enclosure, with
                        door interlocks. This machine is rated for speeds up to 700 CPM.</p>
                </div>
                <!-- <button class="button1 bg-[#171717] text-white px-6 py-2 mt-8 font-open-sans button-hover ">
                    View Details
                </button> -->
            </div>

            <div class="group relative shadow-xl p-6 justify-center align-content place-items-center max-w-6xl h-full">
                <div class="image-container grid grid-cols-1 gap-4 h-80 w-70 mb-10 ">
                    <img src="../src/img//product//seamers/Angelus Legacy Series Can Seamer- Model 40P.0.jpg"
                        alt="Image 3" class=" object-cover">
                </div>
                <div class="text-center max-w-6xl">
                    <h2 class="text-lg font-bold">Angelus Legacy Series Can Seamer</h2>
                    <p class="text-gray-600">Model 40P</p>
                    <p>The Model 40P Angelus seamer incorporates a free-standing stainless-steel machine enclosure, with
                        door interlocks. This machine is rated for speeds up to 275 CPM.</p>
                    <!-- <button class="button1 bg-[#171717] text-white px-6 py-2 mt-8 font-open-sans button-hover ">
                    View Details
                </button> -->
                </div>
            </div>
            <div class="group relative shadow-xl p-6 justify-center align-content place-items-center max-w-6xl h-full">
                <div class="image-container grid grid-cols-1 h-80 w-70 mb-10">
                    <img src="../src/img//product//seamers/Angelus Legacy Series Can Seamer- Model 56P.jpg"
                        alt="Image 1" class=" object-cover">
                </div>
                <div class="text-center max-w-6xl">
                    <h2 class="text-lg font-bold ">Angelus Legacy Series Can Seamer</h2>
                    <p class="text-gray-600">Model 56P</p>
                    <p>The Model 56P Angelus seamer incorporates a free-standing stainless-steel machine enclosure, with
                        door interlocks, and a seaming turret safety clutch. This machine is rated for speeds up to 300
                        CPM.</p>
                    <!-- <button class="button1 bg-[#171717] text-white px-6 py-2 mt-8 font-open-sans button-hover ">
                    View Details 
                </button> -->
                </div>
            </div>

        </div>
    </div>


    <!-- Other Products -->

    <div class="container w-full lg:grid-cols-4 h-auto text-[#2D2D2D] text-center pb-30">

        <p class="text-4xl font-semibold mb-2 mt-20">OTHER PRODUCTS</p>
        <p class="text-lg font-base mb-8 ">Explore our other products </p>
        <!-- 
        <button class="button1 bg-[#171717] text-white px-6 py-2 mt-4 mb-10 font-open-sans button-hover w-32 "> -->

        <!-- </button> -->
        <!-- <a href="./services.php"
            class="button1 bg-[#171717] text-white px-6 py-2 mt-4 inline-block mb-20 font-open-sans button-hover w-32 text-center align-content justify-center ">
            View Shop
        </a> -->


        <div
            class="grid grid-cols-1 xl:grid-cols-4 lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 xl:px-30 xl:py-20 lg:px-20 lg:py-20 md:p-20 md:gap-8 h-auto justify-center place-items-center gap-4">

            <div class="group relative shadow-xl p-6 justify-center align-content place-items-center max-w-6xl h-full">
                <div class="image-container h-80 w-60 flex items-center justify-center">
                    <img src="../src/img//other products/24.jpg" alt="Image 1" class="object-cover h-72 w-56">
                </div>
                <div class="text-left max-w-6xl">
                    <h2 class="text-lg font-bold">Economy Dial Plunger Indicator</h2>
                    <p class="text-sm font-normal">0 mm to 10 mm Measuring Range MC Master No.: 20715A83 System of
                        Measurement:
                        Metric Dial Indicator Type: Plunger</p>
                </div>
            </div>

            <div class="group relative shadow-xl p-6 justify-center align-content place-items-center max-w-6xl h-full">
                <div class="image-container h-80 w-60 flex items-center justify-center">
                    <img src="../src/img//other products/25.jpg" alt="Image 2" class="object-cover h-72 w-56">
                </div>
                <div class="text-left max-w-6xl">
                    <h2 class="text-lg font-bold">SMC AMC520-04 Exhaust Cleaner</h2>
                    <p class="text-sm font-normal"> A 1/2" Rc port, 95% filtration efficiency for 0.3 µm particles, and
                        operates at pressures up to 0.1 MPa, ensuring clean and quiet air exhaust.</p>

                </div>
            </div>

            <div class="group relative shadow-xl p-6 justify-center align-content place-items-center max-w-6xl h-full">
                <div class="image-container h-80 w-60 flex items-center justify-center">
                    <img src="../src/img//other products/26.jpg" alt="Image 3" class="object-cover h-72 w-56">
                </div>
                <div class="text-left max-w-6xl">
                    <h2 class="text-lg font-bold">Reelcraft Grounding Reels</h2>
                    <p class="text-gray-600">A Heavy duty Spring Retractable Hose Reels, Ideal for Grounding and
                        Bonding Applications. It is designed to provide a reliable and efficient solution for grounding
                        and bonding needs in various industrial settings.</p>
                </div>
            </div>
            <div class="group relative shadow-xl p-6 justify-center align-content place-items-center max-w-6xl h-full">
                <div class="image-container h-80 w-60 flex items-center justify-center">
                    <img src="../src/img//other products/23.jpg" alt="Image 1" class="object-cover h-72 w-56">
                </div>
                <div class="text-left max-w-6xl">
                    <h2 class="text-lg font-bold">Ridgid Copper Pipe Reamer 1/2"-2"</h2>
                    <p class="text-gray-600">FEATURES: Hardened Steel Construction Inner-Outer Reamer includes 45
                        cutting sedges on interior cone allow for fast, clean, inner reaming and outer
                        deburring/beveling of copper and stainless steel tubing.</p>
                </div>
            </div>
        </div>
        <!-- second column -->

        <div
            class="grid grid-cols-1 xl:grid-cols-4 lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 xl:px-30 xl:py-20 lg:px-20 lg:py-20 md:p-20 md:gap-8 h-auto justify-center place-items-center gap-4">
            <div class="group relative shadow-xl p-6 justify-center align-content place-items-center max-w-6xl h-full">
                <div class="image-container grid grid-cols-1 gap-4 h-80 w-70">
                    <img src="../src/img//other products/4.jpg" alt="Image 1" class="object-cover">
                </div>
                <div class="text-left max-w-6xl">
                    <h2 class="text-lg font-bold">Refrigerant Freon 407C 11.30KG</h2>
                    <p class="text-gray-600"> Weight : 11.30 kg <br>
                        Chemical Formula : CHF2CF3 / CH2FCF3 / CH2F2
                        CAS Number : 354-33-6 / 811-97-2 / 75-10-5
                        Boiling Point : -43.9°C (-47°F) Average</p>

                    </p>
                </div>
                <!-- <button class="button1 bg-[#171717] text-white px-6 py-2 mt-8 font-open-sans button-hover ">
                    View Details
                </button> -->

            </div>

            <div class="group relative shadow-xl p-6 justify-center align-content place-items-center max-w-6xl h-full">
                <div class="image-container grid grid-cols-1 gap-4 h-80 w-70 ">
                    <img src="../src/img//other products/5.jpg" alt="Image 2" class=" object-cover">
                </div>
                <div class="text-left max-w-6xl">
                    <h2 class="text-lg font-bold">Proximity Sensor PF125-8DN</h2>
                    <p class="text-gray-600">Proximity Sensor PF125-8DN is a non-contact sensor that detects the
                        presence of objects without physical contact. It uses electromagnetic fields to sense the
                        proximity of objects, making it ideal for applications where contact is not possible or
                        desirable.</p>
                </div>
                <!-- <button class="button1 bg-[#171717] text-white px-6 py-2 mt-8 font-open-sans button-hover ">
                    View Details
                </button> -->
            </div>

            <div class="group relative shadow-xl p-6 justify-center align-content place-items-center max-w-6xl h-full">
                <div class="image-container grid grid-cols-1 gap-4 h-80 w-70 ">
                    <img src="../src/img//other products/6.jpg" alt="Image 3" class=" object-cover">
                </div>
                <div class="text-left max-w-6xl">
                    <h2 class="text-lg font-bold">LSE Lighting GPH303T5L/4 Ultraviolet UV Lamp Bulb 4-pins
                        Base 12</h2>
                    <p class="text-gray-600"> Type: UV Lamp - Wavelength: 254nm <br>
                        Base Type: 4pin (4pins on one END) <br>
                        Wattage: 15W <br>
                        Length: 303mm (12 inches) <br>
                        Operating Current: 425mA Standard output <br>
                        Warning: Please Use safety gear during installation.</p>
                    <!-- <button class="button1 bg-[#171717] text-white px-6 py-2 mt-8 font-open-sans button-hover ">
                    View Details
                </button> -->
                </div>
            </div>
            <div class="group relative shadow-xl p-6 justify-center align-content place-items-center max-w-6xl h-full">
                <div class="image-container grid grid-cols-1 gap-4 h-80 w-70 ">
                    <img src="../src/img//other products/7.jpg" alt="Image 1" class=" object-cover">
                </div>
                <div class="text-left max-w-6xl">
                    <h2 class="text-lg font-bold ">Proximity Sensor PS12-4DN</h2>
                    <p class="text-gray-600">Proximity Sensor PS12-4DN is a non-contact sensor that detects the
                        presence of objects without physical contact. It uses electromagnetic fields to sense the
                        proximity of objects, making it ideal for applications where contact is not possible or
                        desirable.</p>
                    <!-- <button class="button1 bg-[#171717] text-white px-6 py-2 mt-8 font-open-sans button-hover ">
                    View Details 
                </button> -->
                </div>
            </div>

        </div>
    </div>


    <script src="../src/js/ap-button.js"> </script>

    <?php
    include('./cust_footer.php');
    ?>

</body>

</html>
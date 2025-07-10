<?php
include('header.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./src/styles/output.css" rel="stylesheet">
</head>

<body>

    <!-- upper button -->
    <button onclick="topFunction()" id="myBtn" title="Go to top">^</button>
    <!-- for content -->
    <div class="container mx-auto h-full w-full bg-[#fff] text-white bg-no-repeat bg-cover bg-center"
        style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('./src/img/bgbaseone.jpg'); background-size: cover;">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 p-24 pl-48">
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


    <div class="container w-full h-78 p-20 px-48 rounded-lg bg-[#171717] text-white shadow-lg"
        style="box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);">
        <div class="grid grid-rows-1 gap-10 w-full text-center">
            <h2 class="text-4xl font-semibold mb-2">OUR SERVICES</h2>
            <p class="text-lg font-base mb-8">Seamless Transaction &nbsp;&nbsp;&nbsp;| &nbsp;&nbsp;&nbsp;Sourcing
                Adeptness
                &nbsp;&nbsp;&nbsp;|
                &nbsp;&nbsp;&nbsp;Anchored On Integrity &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
                Strong Alliances &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp; Efficiency Driven <br>

        </div>
    </div>

    <!-- product -->

    <div class="container w-full h-auto p-32 px-48 text-[#2D2D2D] text-center">

        <p class="text-4xl font-semibold mb-2">OUR TOP SELLING PRODUCT</p>
        <p class="text-lg font-base mb-5">Can seamer's machines</p>
        <!-- 
        <button class="button1 bg-[#171717] text-white px-6 py-2 mt-4 mb-10 font-open-sans button-hover w-32 "> -->

        <!-- </button> -->
        <a href="./services.php"
            class="button1 bg-[#171717] text-white px-6 py-2 mt-4 inline-block mb-20 font-open-sans button-hover w-32 text-center align-content justify-center ">
            View Shop
        </a>



        <div class="grid grid-flow-col grid-rows-1 w-full h-auto gap-2">

            <div class="bg-white rounded-lg shadow-md grid place-items-center w-90 h-55vh">
                <div class="image-wrapper w-full h-full">
                    <img src="./src/img//product//seamers/Angelus Legacy Series Can Seamer- Model 10P.jpg" alt="Image 1"
                        class=" object-contain">
                </div>
                <div class="text-center p-4">
                    <h2 class="text-lg font-bold">Angelus Legacy Series Can Seamer</h2>
                    <p class="text-gray-600">Model 10P</p>

                    <!-- <button class="button1 bg-[#171717] text-white mt-8 font-open-sans button-hover">
                        View Details
                    </button> -->
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-md grid place-items-center w-90 h-55vh">
                <div class="image-wrapper w-full h-full">
                    <img src="./src/img//product//seamers/Angelus Legacy Series Can Seamer- Model 121L.jpg"
                        alt="Image 2" class=" object-cover">
                </div>
                <div class="text-center p-4">
                    <h2 class="text-lg font-bold">Angelus Legacy Series Can Seamer</h2>
                    <p class="text-gray-600">Model 121L</p>
                </div>
                <!-- <button class="button1 bg-[#171717] text-white px-6 py-2 mt-8 font-open-sans button-hover ">
                    View Details
                </button> -->
            </div>

            <div class="bg-white rounded-lg shadow-md grid place-items-center w-90 h-55vh ">
                <div class="image-wrapper w-full h-full">
                    <img src="./src/img//product//seamers/Angelus Legacy Series Can Seamer- Model 140S.jpg"
                        alt="Image 3" class="object-cover">
                </div>
                <div class="text-center p-4">
                    <h2 class="text-lg font-bold">Angelus Legacy Series Can Seamer</h2>
                    <p class="text-gray-600">Model 140S</p>
                    <!-- <button class="button1 bg-[#171717] text-white px-6 py-2 mt-8 font-open-sans button-hover ">
                    View Details
                </button> -->
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-md grid place-items-center w-90 h-55vh ">
                <div class="image-wrapper w-full h-full">
                    <img src="./src/img//product//seamers/Angelus Legacy Series Can Seamer- Model 181S.jpg"
                        alt="Image 1" class="object-cover">
                </div>
                <div class="text-center p-4">
                    <h2 class="text-lg font-bold">Angelus Legacy Series Can Seamer</h2>
                    <p class="text-gray-600">Model 1815</p>
                    <!-- <button class="button1 bg-[#171717] text-white px-6 py-2 mt-8 font-open-sans button-hover ">
                    View Details
                </button> -->
                </div>
            </div>
        </div>
        <!-- second column -->

        <div class="grid grid-flow-col grid-rows-1 gap-2 w-full mt-12 ">
            <div class="bg-white rounded-lg shadow-md grid place-items-center w-90 h-55vh ">
                <div class="image-wrapper w-full h-full">
                    <img src="./src/img//product//seamers/Angelus Legacy Series Can Seamer- Model 63H.jpg" alt="Image 1"
                        class="object-cover">
                </div>
                <div class="text-center p-4">
                    <h2 class="text-lg font-bold">Angelus Legacy Series Can Seamer</h2>
                    <p class="text-gray-600">Model 63H</p>
                </div>
                <!-- <button class="button1 bg-[#171717] text-white px-6 py-2 mt-8 font-open-sans button-hover ">
                    View Details
                </button> -->

            </div>

            <div class="bg-white rounded-lg shadow-md grid place-items-center w-90 h-55vh">
                <div class="image-wrapper w-full h-full">
                    <img src="./src/img//product//seamers/Angelus Legacy Series Can Seamer- Model 62H.jpg" alt="Image 2"
                        class=" object-cover">
                </div>
                <div class="text-center p-4">
                    <h2 class="text-lg font-bold">Angelus Legacy Can Seamer</h2>
                    <p class="text-gray-600">Model 63H</p>
                </div>
                <!-- <button class="button1 bg-[#171717] text-white px-6 py-2 mt-8 font-open-sans button-hover ">
                    View Details
                </button> -->
            </div>

            <div class="bg-white rounded-lg shadow-md grid place-items-center w-90 h-55vh">
                <div class="image-wrapper w-full h-full">
                    <img src="./src/img//product/seamers/Angelus Legacy Series Can Seamer- Model 40P.0.jpg"
                        alt="Image 3" class=" object-cover">
                </div>
                <div class="text-center p-4">
                    <h2 class="text-lg font-bold">Angelus Legacy Series Can Seamer</h2>
                    <p class="text-gray-600">Model 40P</p>
                    <!-- <button class="button1 bg-[#171717] text-white px-6 py-2 mt-8 font-open-sans button-hover ">
                    View Details
                </button> -->
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-md grid place-items-center w-90 h-55vh ">
                <div class="image-wrapper w-full h-full">
                    <img src="./src/img//product//seamers/Angelus Legacy Series Can Seamer- Model 56P.jpg" alt="Image 1"
                        class=" object-cover">
                </div>
                <div class="text-center p-4">
                    <h2 class="text-lg font-bold ">Angelus Legacy Series Can Seamer</h2>
                    <p class="text-gray-600">Model 56P</p>
                    <!-- <button class="button1 bg-[#171717] text-white px-6 py-2 mt-8 font-open-sans button-hover ">
                    View Details 
                </button> -->
                </div>
            </div>

        </div>
    </div>


    <!-- Other Products -->

    <!-- thirds column -->
    <div class="container w-full h-auto p-32 px-48  text-[#2D2D2D] text-center mt-6">
        <p class="text-4xl font-semibold mb-2">OTHER PRODUCTS</p>
        <p class="text-lg font-base mb-8 ">Explore our other products </p>


        <div class="grid grid-flow-col grid-rows-1 w-full h-auto gap-2">
            <div class="bg-white rounded-lg shadow-md grid place-items-center w-90 h-60vh">
                <div class="image-wrapper w-full h-full ">
                    <img src="./src/img//other products/24.jpg" alt="Image 1" class="object-cover">
                </div>
                <div class="text-left p-5">
                    <h2 class="text-lg font-bold ">Economy Dial Plunger Indicator</h2>
                    <p class="text-sm font-normal">0 mm to 10 mm Measuring Range MC Master No.: 20715A83 System of
                        Measurement:
                        Metric Dial Indicator Type: Plunger</p>
                </div>
                <!-- <button class="button1 bg-[#171717] text-white mt-8 font-open-sans button-hover">
                    View Details
                </button> -->

            </div>

            <div class="bg-white rounded-lg shadow-md grid place-items-center w-90 h-60vh ">
                <div class="image-wrapper w-full h-full">
                    <img src="./src/img//other products/25.jpg" alt="Image 2" class="object-cover">
                </div>
                <div class="text-left p-5">
                    <h2 class="text-lg font-bold ">SMC AMC520-04 Exhaust Cleaner</h2>
                    <p class="text-sm font-normal"> A 1/2" Rc port, 95% filtration efficiency for 0.3 µm particles, and
                        operates at pressures up to 0.1 MPa, ensuring clean and quiet air exhaust.</p>
                    <!-- 
                <button class="button1 bg-[#171717] text-white px-6 py-2 mt-8 font-open-sans button-hover ">
                    View Details
                </button> -->
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-md grid place-items-center w-90 h-60vh">
                <div class="image-wrapper w-full h-full">
                    <img src="./src/img//other products/26.jpg" alt="Image 3" class=" object-cover">
                </div>
                <div class="text-left p-5">
                    <h2 class="text-lg font-bold">Reelcraft Grounding Reels</h2>
                    <p class="text-sm font-normal">A Heavy duty Spring Retractable Hose Reels, Ideal for Grounding and
                        Bonding Applications. It is designed to provide a reliable and efficient solution for grounding
                        and bonding needs in various industrial settings.</p>

                    <!-- <button class="button1 bg-[#171717] text-white px-6 py-2 mt-8 font-open-sans button-hover ">
                    View Details
                </button> -->
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-md grid place-items-center w-90 h-60vh">
                <div class="image-wrapper w-full h-full">
                    <img src="./src/img//other products/23.jpg" alt="Image 1" class="object-cover">
                </div>
                <div class="text-left p-5">
                    <h2 class="text-lg font-bold">Ridgid Copper Pipe Reamer 1/2"-2"</h2>
                    <p class="text-sm font-normal">FEATURES: Hardened Steel Construction Inner-Outer Reamer includes 45
                        cutting sedges on interior cone allow for fast, clean, inner reaming and outer
                        deburring/beveling of copper and stainless steel tubing.</p>
                    <!-- <button class="button1 bg-[#171717] text-white px-6 py-2 mt-8 font-open-sans button-hover ">
                    View Details
                </button> -->
                </div>
            </div>
        </div>
        <!-- Fourth column -->

        <div class="grid grid-flow-col grid-rows-1 gap-2 w-full h-auto mt-12">
            <div class="bg-white rounded-lg shadow-md grid place-items-center w-90 h-60vh ">
                <div class="image-wrapper w-full h-full">
                    <img src="./src/img//other products/4.jpg" alt="Image 1" class="object-cover">
                </div>
                <div class="text-left p-5">
                    <h2 class="text-lg font-bold">Refrigerant Freon 407C 11.30KG</h2>
                    <p class="text-sm font-normal">
                        Weight : 11.30 kg <br>
                        Chemical Formula : CHF2CF3 / CH2FCF3 / CH2F2
                        CAS Number : 354-33-6 / 811-97-2 / 75-10-5
                        Boiling Point : -43.9°C (-47°F) Average</p>

                    <!-- <button class="button1 bg-[#171717] text-white px-6 py-2 mt-8 font-open-sans button-hover ">
                    View Details
                </button> -->
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-md grid place-items-center w-90 h-60vh">
                <div class="image-wrapper w-full h-full">
                    <img src="./src/img//other products/5.jpg" alt="Image 2" class="object-cover">
                </div>
                <div class="text-left p-5">
                    <h2 class="text-lg font-bold">Proximity Sensor PF125-8DN</h2>
                    <p class="text-sm font-normal">Proximity Sensor PF125-8DN is a non-contact sensor that detects the
                        presence of objects without physical contact. It uses electromagnetic fields to sense the
                        proximity of objects, making it ideal for applications where contact is not possible or
                        desirable.</p>
                    <!-- <button class="button1 bg-[#171717] text-white px-6 py-2 mt-8 font-open-sans button-hover ">
                    View Details
                </button> -->
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-md grid place-items-center w-90 h-60vh ">
                <div class="image-wrapper w-full h-full">
                    <img src="./src/img//other products/6.jpg" alt="Image 3" class="object-cover">
                </div>
                <div class="text-left p-5">
                    <h2 class="text-lg font-bold">LSE Lighting GPH303T5L/4 Ultraviolet UV Lamp Bulb 4-pins
                        Base 12"</h2>
                    <p class="text-sm font-normal">
                        Type: UV Lamp - Wavelength: 254nm <br>
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
            <div class="bg-white rounded-lg shadow-md grid place-items-center w-90 h-60vh">
                <div class="image-wrapper w-full h-full">
                    <img src="./src/img//other products/7.jpg" alt="Image 1" class="object-cover">
                </div>
                <div class="text-left p-5">
                    <h2 class="text-lg font-bold">Proximity Sensor PS12-4DN</h2>
                    <p class="text-gray-600">Model 63H</p>
                    <p class="text-sm font-normal">Proximity Sensor PS12-4DN is a non-contact sensor that detects the
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



    <script src="./src/js/ap-button.js"> </script>

    <?php
    include('footer.php');
    ?>

</body>

</html>
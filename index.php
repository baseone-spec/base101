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
    <!-- for content -->
    <div class="container mx-auto h-100vh w-full bg-[#171717] text-white">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 p-24 pl-48">
            <div class="p-4">
                <p class="text-4xl font-semibold font-open-sans mb-4">Build the future of industrial
                    <br> Sales and Services
                </p>
                <p class="text-lg font-open-sans mb-8">
                    <br>
                    We are a team of passionate individuals dedicated to providing top-notch <br>
                    industrial sales and services. Our mission is to deliver innovative solutions <br>
                    that me the needs of our clients.
                </p>
                <br>
                <button class="rounded-full bg-[#D00000] text-white px-6 py-2 font-open-sans button-hover ">
                    Request a Quote
                </button>
            </div>
        </div>
    </div>


    <div class="container w-full p-10 px-48">
        <div class="grid grid-flow-col grid-rows-1 gap-10 w-full">
            <div class="bg-white rounded-lg shadow-md p-4 grid place-items-center ">
                <img src="./src/img//product//21.jpg" alt="Image 1" class="h-32 object-cover">
                <h2 class="text-lg font-bold mt-4">Product name</h2>
                <p class="text-gray-600">This is some text for card 1.</p>
            </div>

            <div class="bg-white rounded-lg shadow-md p-4 grid place-items-center ">
                <img src="./src/img//product//25.jpg" alt="Image 2" class="h-32 object-cover">
                <h2 class="text-lg font-bold mt-4">Product name</h2>
                <p class="text-gray-600">This is some text for card 2.</p>
            </div>
            <div class="bg-white rounded-lg shadow-md p-4 grid place-items-center ">
                <img src="./src/img//product//23.jpg" alt="Image 3" class="h-32 object-cover">
                <h2 class="text-lg font-bold mt-4">Product name</h2>
                <p class="text-gray-600">This is some text for card 3.</p>
            </div>
            <div class="bg-white rounded-lg shadow-md p-4 grid place-items-center ">
                <img src="./src/img//product//21.jpg" alt="Image 1" class="h-32 object-cover">
                <h2 class="text-lg font-bold mt-4">Product name</h2>
                <p class="text-gray-600">This is some text for card 1.</p>
            </div>
        </div>
    </div>



    <!-- footer -->
    <footer class="container w-full h-full bg-[#171717] text-white p-32 px-48">
        <div class="text-center mb-8 font-open-sans">
            <p class="text-center mb-5 text-white font-medium">
                Get Started with Us Today!
            </p>
            <p class="text-center text-4xl mb-5 font-semibold ">
                Boost your business with our innovative <br>
                solutions and expert services. <br>
            </p>
            <p class="text-center mb-8">
                Whether you need a custom solution or expert advice, we are here to help you succeed. <br>
                Contact us today to learn more about our services and how we can help your business grow.
            </p>
            <button class="rounded-full bg-[#D00000] text-white px-6 py-2 font-open-sans button-hover">
                Register Now </button>
        </div>

    </footer>

    <footer class="bg-[#fff] md:px-20 h-auto">
        <div class="grid grid-flow-col grid-rows-4 px-48 md:px-20 py-4 md:py-10 h-auto p-32">
            <div class="text m-0 p-0 flex flex-col justify-center items-center">
                <img class="image block" src="./src/img/base1 logo.png" alt="Base1 Logo" width="150" height="100">
            </div>
            <div class="text text-center text-[#2D2D2D]">
                <p class="text-lg font-semibold mb-5">Contact Info</p>
                <p class="text-lg mb-3">
                    906 OMM-Citra Bldg San Miguel Avenue, Pasig City <br>
                    Metro Manila, Philippines <br>
                    <span class="font-semibold">Phone: </span>+63 2 8633 8888 <br>
                    <span class="font-semibold">Email: </span> <a
                        href="mailto: buyerbaseoneindustrial@gmail.com">buyerbaseoneindustrial@gmail.com</a>
                </p>
            </div>
            <div class="text text-center w-full text-[#2D2D2D]">
                <p class="text-lg flex flex-col justify-center font-semibold mb-5 text-[#2D2D2D]"> Website <br>
                <div class="flex flex-col justify-center ">
                    <p class="text-lg text-[#2D2D2D]">
                        <a href="#">Home</a><br>
                        <a href="#">About Us</a><br>
                        <a href="#">Services</a><br>
                        <a href="#">Contact us</a><br>
                    </p>
                </div>
            </div>
        </div>

        <div style="height: 1px; background-color: #848484; margin: 0 200px;">
        </div>


        <div class="text-center text-[#848484]  text-lg p-20">
            <p class="mb-2 ">© 2023 Baseone Industrial Sales and Services. All rights reserved.</p>
            <p>Privacy Policy | Terms of Service</p>
        </div>
    </footer>



</body>

</html>
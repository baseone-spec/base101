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

        <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 h-full">
            <div class="underline min-h-[220px] bg-white mb-4">
                <p class="text-2xl font-semibold mb-4"></p>
            </div>
        </div>

    </footer>



</body>

</html>
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
    <!-- button -->
    <button onclick="topFunction()" id="myBtn" title="Go to top">^</button>


    <div class="w-full h-96 text-center justify-center items-center content-center bg-no-repeat bg-cover bg-center"
        style="background-image: url('./src/img/bg-product.jpg'); background-size: cover; background-blend-mode: overlay; background-color: rgba(255,255,255,0.5);">
        <p class="text-6xl font-bold text-[#171717] mb-5">Get 25% off during our one-time sale</p>
        <p class="text-2xl text-[#2D2D2D]">Most of our products are limited releases that won't come back. <br>
            Get your favorite items while they're in stock.</p>
        <button class="rounded-full bg-[#D00000] text-white px-6 py-2 mt-8 font-open-sans button-hover"
            data-ripple-light="true">Request a Quote</button>
    </div>

    <!-- product list -->


    <div class="bg-white h-100vh w-full p-40 content-center items-center  ">
        <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
            <h2 class="text-2xl font-bold tracking-tight text-gray-900">Customers also purchased</h2>

            <div class="mt-8 grid grid-flow-col grid-rows-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                <div class="group relative">
                    <img src="https://tailwindcss.com/plus-assets/img/ecommerce-images/product-page-01-related-product-01.jpg"
                        alt="Front of men&#039;s Basic Tee in black."
                        class="aspect-square w-36 rounded-md bg-gray-200 object-cover group-hover:opacity-75 lg:aspect-auto lg:h-80" />
                    <div class="mt-4 flex justify-between">
                        <div>
                            <h3 class="text-sm text-gray-700">
                                <a href="#">
                                    <span aria-hidden="true" class="absolute inset-0"></span>
                                    Basic Tee
                                </a>
                            </h3>
                            <p class="mt-1 text-sm text-gray-500">Black</p>

                        </div>
                        <p class="text-sm font-medium text-gray-900">$35</p>
                    </div>
                </div>

                <!-- More products... -->
                <div class="group relative">
                    <img src="https://tailwindcss.com/plus-assets/img/ecommerce-images/product-page-01-related-product-01.jpg"
                        alt="Front of men&#039;s Basic Tee in black."
                        class="aspect-square w-36 rounded-md bg-gray-200 object-cover group-hover:opacity-75 lg:aspect-auto lg:h-80" />
                    <div class="mt-4 flex justify-between">
                        <div>
                            <h3 class="text-sm text-gray-700">
                                <a href="#">
                                    <span aria-hidden="true" class="absolute inset-0"></span>
                                    Basic Tee
                                </a>
                            </h3>
                            <p class="mt-1 text-sm text-gray-500">Black</p>
                        </div>
                        <p class="text-sm font-medium text-gray-900">$35</p>
                    </div>
                </div>

                <div class="group relative">
                    <img src="https://tailwindcss.com/plus-assets/img/ecommerce-images/product-page-01-related-product-01.jpg"
                        alt="Front of men&#039;s Basic Tee in black."
                        class="aspect-square w-36 rounded-md bg-gray-200 object-cover group-hover:opacity-75 lg:aspect-auto lg:h-80" />
                    <div class="mt-4 flex justify-between">
                        <div>
                            <h3 class="text-sm text-gray-700">
                                <a href="#">
                                    <span aria-hidden="true" class="absolute inset-0"></span>
                                    Basic Tee
                                </a>
                            </h3>
                            <p class="mt-1 text-sm text-gray-500">Black</p>
                        </div>
                        <p class="text-sm font-medium text-gray-900">$35</p>
                    </div>
                </div>
                <div class="group relative">
                    <img src="https://tailwindcss.com/plus-assets/img/ecommerce-images/product-page-01-related-product-01.jpg"
                        alt="Front of men&#039;s Basic Tee in black."
                        class="aspect-square w-36 rounded-md bg-gray-200 object-cover group-hover:opacity-75 lg:aspect-auto lg:h-80" />
                    <div class="mt-4 flex justify-between">
                        <div>
                            <h3 class="text-sm text-gray-700">
                                <a href="#">
                                    <span aria-hidden="true" class="absolute inset-0"></span>
                                    Basic Tee
                                </a>
                            </h3>
                            <p class="mt-1 text-sm text-gray-500">Black</p>
                        </div>
                        <p class="text-sm font-medium text-gray-900">$35</p>
                    </div>
                </div>

            </div>
        </div>
    </div>




    <!-- footer -->
    <footer class="container w-full h-full bg-[#171717] text-white p-32 px-48 align-content ">
        <div class="text-center mb-8 font-open-sans">
            <p class="text-center mb-5 text-white font-medium">
                Get In touch with Us Today!
            </p>
            <p class="text-center text-4xl mb-5 font-semibold ">
                Reach out to us for any questions or inquiries. <br>
            </p>
            <p class="text-center mb-8">
                Whether you need a custom solution or expert advice, we are here to help you succeed. <br>
                Contact us today to learn more about our services and how we can help your business grow.
            </p>
            <button class="rounded-full bg-[#D00000] text-white px-6 py-2 font-open-sans button-hover">
                Contact us! </button>
        </div>

    </footer>

    <footer class="bg-[#fff] md:px-20 h-auto">
        <div class="grid grid-flow-col grid-rows-4 px-48 md:px-20 py-4 md:py-10 h-auto p-32">
            <div class="text m-0 p-0 flex flex-col justify-center items-center">
                <img class="image block" src="./src/img/base1 logo.png" alt="Base1 Logo" width="150" height="100">
            </div>
            <div class="text text-center text-[#2D2D2D]">
                <p class="text-lg font-semibold mb-5">Contact Info</p>
                <p class="text-lg mb-3"> <span class="font-semibold">Address: </span>
                    906 OMM-Citra Bldg San Miguel Avenue, Pasig City <br>
                    Metro Manila, Philippines <br>
                    <span class="font-semibold">Phone: </span>+63 2 8633 8888 <br>
                    <span class="font-semibold">Email: </span> <a
                        href="mailto: buyerbaseoneindustrial@gmail.com">buyerbaseoneindustrial@gmail.com</a>
                </p>
            </div>
            <div class="text text-center w-full text-[#2D2D2D]">
                <p class="text-lg flex flex-col justify-center font-semibold mb-5 text-[#2D2D2D]"> Website
                    <br>
                <div class="flex flex-col justify-center ">
                    <p class="text-lg text-[#2D2D2D]">
                        <a href="./index.php">Home</a><br>
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

    <!-- script button -->
    <script>
        let mybutton = document.getElementById("myBtn");

        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }

        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
</body>

</html>
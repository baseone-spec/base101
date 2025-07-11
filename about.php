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



    <!-- about us -->
    <div class="grid grid-flow-col px-48 p-24 grid-rows-2 md:px-20 py-4 md:py-10 h-70vh text-white bg-no-repeat bg-cover bg-center"
        style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('./src/img/Base1 Warehouse.jpg'); background-size: cover;">

        <div class="mt-24 text m-0 p-0 justify-center items-center">
            <p class="text-4xl font-semibold mb-5">We're a passionate group of people<br>
                building the future of industrial <br>
                sales and services. <br>
            </p>
            <p class="text-normal">
                Providing the Every Need of the manufacturing Sector <br>
            </p>
        </div>

    </div>

    <!-- mission and vision -->
    <div class="grid grid-flow-col grid-rows-4 gap-4 h-55vh text-center justify-center w-full">
        <div class="card w-full h-full flex justify-center items-center ">
            <div class="card-body shadow-md  text-[#2D2D2D] align-content p-20 h-55vh">
                <h2 class="card-title text-4xl font-semibold text-left">Mission</h2>
                <p class="text text-lg font-medium text-left">
                    Build a strong client relationship <br>
                    Meet client needs or demands on time <br>
                    Offer a competitive range of products and services. <br>
                    Sustain strong client relationships <br>
                    Continuously innovate and provide solutions <br>
                </p>
            </div>
        </div>

        <div class="card w-full h-full align-content justify-center">
            <div class="card-body shadow-md text-center text-[#2D2D2D] align-content p-20 h-55vh ">
                <h2 class="card-title text-4xl font-semibold text-left">Vision</h2>
                <p class="text text-lg font-medium text-left">
                    Base One’s vision is to be the most reliable<br>
                    reliable total solutions supply partner <br>
                    for local blue-chip and multinational <br>
                    conglomerates worldwide.
                </p>
            </div>
        </div>

        <div class="card w-full h-full align-content justify-center">
            <div class="card-body shadow-md text-center text-[#2D2D2D] align-content p-20 h-full">
                <h2 class="card-title text-4xl font-semibold text-left">Value</h2>
                <p class="text text-lg font-medium text-left">
                    Build a strong client relationship <br>
                    Meet client needs or demands on time <br>
                    Offer a competitive range of products and services. <br>
                    Sustain strong client relationships <br>
                    Continuously innovate and provide solutions <br>
                </p>
            </div>
        </div>
    </div>


    <!-- about us -->

    <div class="grid grid-flow-col h-70vh text-white bg-no-repeat bg-cover bg-center"
        style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('./src/img/Base1 Warehouse.jpg'); background-size: cover;">
        <div class=" p-24 align-content bg-[#171717] ">
            <p class="text-3xl font-semibold mb-5">
                About us
            </p>
            <p class="text-lg font-medium mb-5">
                Base One Industrial Sales, Inc. is a trusted trading company specializing in industrial machinery and

                equipment, with a strong focus on products such as Can Seamers, MRO Spare Parts, Bearings, and Pumps.

                Established in 2004, we have been serving the industry for nearly two decades.

                Our primary clients are businesses and corporations in the food manufacturing sector, particularly those

                utilizing canning machinery. We supply essential components like seaming chucks and seaming rolls to

                ensure the efficiency and reliability of their operations. <br> <br>



                We are proud to have built long-standing partnerships with industry leaders such as Unilever, Dole
                Philippines, San Miguel Corporation, GSK, and many more.<br>

            </p>
            <i class="fa-brands fa-facebook p-4"></i>
            <i class="fa-brands fa-shopify pr-4"></i>
            <i class="fa-solid fa-envelope pr-4"></i>
        </div>
        <div class="image">
            <img src="./src/img/Base1 Warehouse.jpg" class="w-full h-full object-cover rounded-lg">
        </div>
    </div>


    <script src="./src/js/ap-button.js"> </script>
    <?php
    include('footer.php');
    ?>


</body>

</html>
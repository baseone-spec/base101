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


    <div class="w-full h-96 text-center justify-center items-center align-content bg-no-repeat bg-cover bg-center"
        style="background-image: url('./src/img/bg-product.jpg'); background-size: cover; background-blend-mode: overlay; background-color: rgba(255,255,255,0.5);">
        <p class="text-6xl font-bold text-[#171717] mb-5">Official Distributor of Top Quality Psangelus Products
        </p>
        <p class="text-2xl text-[#2D2D2D]">Most of our products are limited releases that won't come back. <br>
            Get your favorite items while they're in stock.</p>
        <button class="rounded-full bg-[#D00000] text-white px-6 py-2 mt-8 font-open-sans button-hover"
            data-ripple-light="true">Request a Quote</button>
    </div>

    <!-- product list -->


    <div class="w-full h-auto md:p-20 p-32 ">
        <div class="mx-auto">
            <h2 class="text-3xl font-bold font-open-sans text-[#171717] ">Our Available Can Seamer's Products</h2>
            <p class="font-open-sans font-light">Reach out to us for any questions or inquiries.</p>
        </div>

        <div class="mt-12 grid grid-flow-col grid-cols-4 gap-10 item-center justify-center align-content ">

            <div class="group relative shadow-xl p-4 justify-center align-content">
                <div class=" image-container grid grid-cols-1 gap-4 h-80 w-70 place-items-center ">
                    <img src="./src/img/psangelus/ANGELUS Legacy Series - Model 120L - 121L.jpg" alt=""
                        class="image1" />
                    <img src="./src/img/psangelus/ANGELUS Legacy Series - Model 120L - 121L.0.jpg" alt=""
                        class="image2" />
                </div>
                <div class="mt-4 flex justify-between w-70 ">
                    <h3 class="text-lg font-bold text-[#171717]">

                        Angelus Legacy Series Can Seamer

                        <p class="text-sm font-light">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Labore nobis iure obcaecati pariatur. Officiis qui, enim cupiditate aliquam corporis
                            iste.
                        </p>
                    </h3>


                </div>

                <div class="mt-4 flex justify-between w-70 gap-2">
                    <button type="button"
                        class="openModalBtn product-btn bg-[#f3f4f6] text-[#171717] mt-4 font-open-sans button-hover"
                        data-modal-id="modal-2">Request a Quote</button>
                    <button class="product-btn bg-[#101828] text-white  mt-4 font-open-sans button-hover">add to
                        cart</button>
                </div>

                <!-- Modal -->

                <div id="modal-2"
                    class="modal hidden fixed inset-0 z-50 bg-gray-500/75 flex items-center justify-center"
                    role="dialog" aria-modal="true">
                    <!-- Modal Content -->
                    <div class="grid grid-cols-2 modal-size bg-white rounded-lg shadow-xl relative z-50 ">
                        <!-- Header -->
                        <div class="w-full justify-center align-content place-items-center p-12">
                            <div class=" image-container grid grid-cols-1">
                                <img src="./src/img/psangelus/ANGELUS Legacy Series - Model 120L - 121L.0.jpg" alt=""
                                    class="image1" />
                                <img src="./src/img/psangelus/ANGELUS Legacy Series - Model 120L - 121L.jpg" alt=""
                                    class="image2" />
                            </div>
                        </div>

                        <div class="w-full p-12 ">
                            <div class="container h-65vh">
                                <h2 id="dialog-title" class="text-lg font-medium text-[#171717] mb-4">ANGELUS Legacy
                                    Series - Model 120L / 121L
                                </h2>
                                <p class="text-sm text-gray-700 mb-4">
                                    <span class="font-semibold">ABOUT THIS MACHINE</span> <br><br>
                                    The Angelus Legacy Series of can seamers are rugged and reliable machines that
                                    have
                                    stood the test of time and have not only been an integral part of a wide array
                                    of
                                    seaming applications for decades, but are still relevant and trusted in today's
                                    demanding markets and applications.
                                    <br><br>
                                    The Angelus Legacy Series seamers, like the newer V-Series, incorporates a
                                    base-mounted stainless steel machine enclosure. The base-mounting provides
                                    precision
                                    and repeatability, while the stainless steel is durable and easy to clean. The
                                    Model
                                    121L has 12 seaming stations and runs at speeds from 400 to 1500 Cans Per Minute
                                    (CPM).
                                    <br><br>

                                    <span class="font-semibold">PRODUCT DETAILS</span> <br><br>

                                    • Runs at speeds of 400-1500 Containers Per Minute (CPM) <br>
                                    • 12 seaming stations<br>
                                    • Stainless steel base top plate, castings and components below-the-feed-line
                                    <br>
                                    • Single roll cover separator <br>
                                    • Driven lower lifter oil pump system <br>
                                    • Automatic oil lubrication recirculating and filtration system <br>
                                    • Second operation off-seam setting <br>
                                    • No can/no cover feed <br>
                                    •External warning safety horn and light <br>
                                    • Comes with a tool kit and operators manual
                            </div>
                            </p>


                            <div class="mt-6  gap-2">

                                <button type="button" class="product-checkout bg-[#171717] text-white text-sm rounded">
                                    Proceed to Quote
                                </button>
                                <button type="button" id="closeModalBtn"
                                    class="closeModalBtn product-checkout bg-[#171717] text-white text-sm rounded">
                                    Close
                                </button>

                            </div>
                        </div>
                    </div>
                </div>


            </div>

            <!-- other products -->
            <div class="group relative shadow-xl p-4 justify-center align-content">
                <div class=" image-container grid grid-cols-1 gap-4 h-80 w-70 place-items-center ">
                    <img src="./src/img/psangelus/ANGELUS Legacy Series - Model 181S.jpg" alt="" class="image1" />
                    <img src="./src/img/psangelus/ANGELUS Legacy Series - Model 181S.0.jpg" alt="" class="image2" />
                </div>
                <div class="mt-4 flex justify-between w-70 ">
                    <h3 class="text-lg font-bold text-[#171717]">

                        Angelus Legacy Series Can Seamer

                        <p class="text-sm font-light">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Labore nobis iure obcaecati pariatur. Officiis qui, enim cupiditate aliquam corporis
                            iste.
                        </p>
                    </h3>


                </div>

                <div class="mt-4 flex justify-between w-70 gap-2">
                    <button type="button"
                        class="openModalBtn product-btn bg-[#f3f4f6] text-[#171717] mt-4 font-open-sans button-hover"
                        data-modal-id="modal-3">Request a Quote</button>
                    <button class="product-btn bg-[#101828] text-white  mt-4 font-open-sans button-hover">add to
                        cart</button>
                </div>

                <!-- Modal -->

                <div id="modal-3"
                    class="modal hidden fixed inset-0 z-50 bg-gray-500/75 flex items-center justify-center"
                    role="dialog" aria-modal="true">
                    <!-- Modal Content -->
                    <div class="grid grid-cols-2 modal-size bg-white rounded-lg shadow-xl relative z-50 ">
                        <!-- Header -->
                        <div class="w-full justify-center align-content place-items-center p-12">
                            <div class=" image-container grid grid-cols-1">
                                <img src="./src/img/psangelus/ANGELUS Legacy Series - Model 181S.0.jpg" alt=""
                                    class="image1" />
                                <img src="./src/img/psangelus/ANGELUS Legacy Series - Model 181S.jpg" alt=""
                                    class="image2" />
                            </div>
                        </div>

                        <div class="w-full p-12">
                            <div class="container h-65vh">
                                <h2 id="dialog-title" class="text-lg font-medium text-[#171717] mb-4">ANGELUS Legacy
                                    Series - Model 181S
                                </h2>
                                <p class="text-sm text-gray-700 mb-4">
                                    <span class="font-semibold">ABOUT THIS MACHINE</span> <br><br>
                                    The Angelus Legacy Series of can seamers are rugged and reliable machines that
                                    have
                                    stood the test of time and have not only been an integral part of a wide array
                                    of
                                    seaming applications for decades, but are still relevant and trusted in today's
                                    demanding markets and applications.
                                    <br><br>
                                    The Angelus Legacy Series seamers, like the newer V-Series, incorporates a
                                    base-mounted stainless steel machine enclosure. The base-mounting provides
                                    precision
                                    and repeatability, while the stainless steel is durable and easy to clean. The
                                    Model
                                    181S has 18 seaming stations and runs at speeds up to 2500 Cans Per Minute
                                    (CPM).
                                    <br><br>

                                    <span class="font-semibold">PRODUCT DETAILS</span> <br><br>

                                    • Runs at speeds of up to 2500 Containers Per Minute (CPM) <br>
                                    • Eighteen seaming stations <br>
                                    • Stainless steel base top plate and castings and components below-the-feed-line
                                    <br>
                                    • Under cover gassing attachment <br>
                                    • Two-speed CO² gassing controls <br>
                                    • One set of can and end change parts<br>
                                    • Titanium Nitride-coated Angelloy® seaming chucks and seaming rolls, rolls have
                                    <br>
                                    • ceramic bearings <br>
                                    • Dual single roll cover separator<br>
                                    • Driven lower lifter oil pump system<br>
                                    • Automatic oil lubrication recirculating and filtration system<br>
                                    • Second operation off-seam setting<br>
                                    • Comes with a tool kit and operators manual
                            </div>
                            </p>


                            <div class="mt-6  gap-2">

                                <button type="button" class="product-checkout bg-[#171717] text-white text-sm rounded">
                                    Proceed to Quote
                                </button>
                                <button type="button" id="closeModalBtn"
                                    class="closeModalBtn product-checkout bg-[#171717] text-white text-sm rounded">
                                    Close
                                </button>

                            </div>
                        </div>
                    </div>
                </div>


            </div>

            <!-- other products -->
            <div class="group relative shadow-xl p-4 justify-center align-content">
                <div class=" image-container grid grid-cols-1 gap-4 h-80 w-70 place-items-center ">
                    <img src="./src/img/psangelus/ANGELUS Legacy Series - Model 60L.jpg" alt="" class="image1" />
                    <img src="./src/img/psangelus/ANGELUS Legacy Series - Model 60L.1.jpg" alt="" class="image2" />
                </div>
                <div class="mt-4 flex justify-between w-70 ">
                    <h3 class="text-lg font-bold text-[#171717]">

                        Angelus Legacy Series Can Seamer

                        <p class="text-sm font-light">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Labore nobis iure obcaecati pariatur. Officiis qui, enim cupiditate aliquam corporis
                            iste.
                        </p>
                    </h3>


                </div>

                <div class="mt-4 flex justify-between w-70 gap-2">
                    <button type="button"
                        class="openModalBtn product-btn bg-[#f3f4f6] text-[#171717] mt-4 font-open-sans button-hover"
                        data-modal-id="modal-4">Request a Quote</button>
                    <button class="product-btn bg-[#101828] text-white  mt-4 font-open-sans button-hover">add to
                        cart</button>
                </div>

                <!-- Modal -->

                <div id="modal-4"
                    class="modal hidden fixed inset-0 z-50 bg-gray-500/75 flex items-center justify-center"
                    role="dialog" aria-modal="true">
                    <!-- Modal Content -->
                    <div class="grid grid-cols-2 modal-size bg-white rounded-lg shadow-xl relative z-50 ">
                        <!-- Header -->
                        <div class="w-full justify-center align-content place-items-center p-12">
                            <div class=" image-container grid grid-cols-1">
                                <img src="./src/img/psangelus/ANGELUS Legacy Series - Model 60L.1.jpg" alt=""
                                    class="image1" />
                                <img src="./src/img/psangelus/ANGELUS Legacy Series - Model 60L.jpg" alt=""
                                    class="image2" />
                            </div>
                        </div>

                        <div class="w-full p-12">
                            <div class="container h-65vh">
                                <h2 id="dialog-title" class="text-lg font-medium text-[#171717] mb-4">ANGELUS Legacy
                                    Series - Model 60L
                                </h2>
                                <p class="text-sm text-gray-700 mb-4">
                                    <span class="font-semibold">ABOUT THIS MACHINE</span> <br><br>
                                    The Angelus Legacy Series of can seamers are rugged and reliable machines that
                                    have
                                    stood the test of time and have not only been an integral part of a wide array
                                    of
                                    seaming applications for decades, but are still relevant and trusted in today's
                                    demanding markets and applications.
                                    <br><br>
                                    The Angelus Legacy Series seamers, like the newer V-Series, incorporates a
                                    base-mounted stainless steel machine enclosure. The base-mounting provides
                                    precision
                                    and repeatability, while the stainless steel is durable and easy to clean. The
                                    Model
                                    60L has six seaming stations and runs at speeds from 175 to 500 Cans Per Minute
                                    (CPM).
                                    <br><br>

                                    <span class="font-semibold">PRODUCT DETAILS</span> <br><br>

                                    • Comes with a tool kit and operators manual<br>
                                    • Runs at speeds of 175-500 Containers Per Minute (CPM)<br>
                                    • Six seaming stations<br>
                                    • One set of can and end change parts<br>
                                    • Single roll cover separator<br>
                                    • Gear-driven lower lifters with seven point lubrication system<br>
                                    • Second operation off-seam setting<br>
                                    • Automatic stop control system<br>
                                    • Grease lubrication<br>
                                    • Leading industry PLC and touch screen control<br>
                                    • Pneumatic no can/no cover feed<br>
                                    • Variable speed motor drive<br>
                                    • Comes with a tool kit and operators manual
                            </div>
                            </p>


                            <div class="mt-6  gap-2">

                                <button type="button" class="product-checkout bg-[#171717] text-white text-sm rounded">
                                    Proceed to Quote
                                </button>
                                <button type="button" id="closeModalBtn"
                                    class="closeModalBtn product-checkout bg-[#171717] text-white text-sm rounded">
                                    Close
                                </button>

                            </div>
                        </div>
                    </div>
                </div>


            </div>

            <!-- other products -->
            <div class="group relative shadow-xl p-4 justify-center align-content">
                <div class=" image-container grid grid-cols-1 gap-4 h-80 w-70 place-items-center ">
                    <img src="./src/img/psangelus/ANGELUS Legacy Series - Models 61H - 62H -  63H.jpg" alt=""
                        class="image1" />
                    <img src="./src/img/psangelus/ANGELUS Legacy Series - Models 61H - 62H -  63H.0.jpg" alt=""
                        class="image2" />
                </div>
                <div class="mt-4 flex justify-between w-70 ">
                    <h3 class="text-lg font-bold text-[#171717]">

                        Angelus Legacy Series Can Seamer

                        <p class="text-sm font-light">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Labore nobis iure obcaecati pariatur. Officiis qui, enim cupiditate aliquam corporis
                            iste.
                        </p>
                    </h3>


                </div>

                <div class="mt-4 flex justify-between w-70 gap-2">
                    <button type="button"
                        class="openModalBtn product-btn bg-[#f3f4f6] text-[#171717] mt-4 font-open-sans button-hover"
                        data-modal-id="modal-1">Request a Quote</button>
                    <button class="product-btn bg-[#101828] text-white  mt-4 font-open-sans button-hover">add to
                        cart</button>
                </div>

                <!-- Modal -->

                <div id="modal-1"
                    class="modal hidden fixed inset-0 z-50 bg-gray-500/75 flex items-center justify-center"
                    role="dialog" aria-modal="true">
                    <!-- Modal Content -->
                    <div class="grid grid-cols-2 modal-size bg-white rounded-lg shadow-xl relative z-50 ">
                        <!-- Header -->
                        <div class="w-full justify-center align-content place-items-center p-12">
                            <div class=" image-container grid grid-cols-1">
                                <img src="./src/img/psangelus/ANGELUS Legacy Series - Models 61H - 62H -  63H.0.jpg"
                                    alt="" class="image1" />
                                <img src="./src/img/psangelus/ANGELUS Legacy Series - Models 61H - 62H -  63H.jpg"
                                    alt="" class="image2" />
                            </div>
                        </div>

                        <div class="w-full p-12">
                            <div class="container h-65vh">
                                <h2 id="dialog-title" class="text-lg font-medium text-[#171717] mb-4">ANGELUS Legacy
                                    Series - Models 61H / 62H / 63H
                                </h2>
                                <p class="text-sm text-gray-700 mb-4">
                                    <span class="font-semibold">ABOUT THIS MACHINE</span> <br><br>
                                    The Angelus Legacy Series of can seamers are rugged and reliable machines that
                                    have
                                    stood the test of time and have not only been an integral part of a wide array
                                    of
                                    seaming applications for decades, but are still relevant and trusted in today's
                                    demanding markets and applications.
                                    <br><br>
                                    The Angelus Legacy Series seamers, like the newer V-Series, incorporates a
                                    base-mounted stainless steel machine enclosure. The base-mounting provides
                                    precision
                                    and repeatability, while the stainless steel is durable and easy to clean. The
                                    Model
                                    63H has six seaming stations and runs at speeds from 225 to 700 Cans Per Minute
                                    (CPM).
                                    <br><br>

                                    <span class="font-semibold">PRODUCT DETAILS</span> <br><br>
                                    • Steam vacuum<br>
                                    • Under cover gassing<br>
                                    • Titanium Nitride-coated Angelloy® seaming chucks and seaming rolls, rolls
                                    have<br>
                                    • ceramic bearings<br>
                                    • Quick set seaming can<br>
                                    • Filler connecting parts<br>
                                    • Random infeed<br>
                                    • Cover feed chute with vibrator<br>
                                    • Nickel-plated machine<br>
                                    • Hot water automatic seamer washdown<br>
                                    • Recipe motorized turret height elevating mechanism<br>
                                    • Optional can heights are available for some applications
                            </div>
                            </p>


                            <div class="mt-6  gap-2">

                                <button type="button" class="product-checkout bg-[#171717] text-white text-sm rounded">
                                    Proceed to Quote
                                </button>
                                <button type="button" id="closeModalBtn"
                                    class="closeModalBtn product-checkout bg-[#171717] text-white text-sm rounded">
                                    Close
                                </button>

                            </div>
                        </div>
                    </div>
                </div>



            </div>

        </div>


        <!-- second Row products -->
        <div class="mt-12 grid grid-flow-col grid-cols-4 gap-10 item-center justify-center align-content ">

            <div class="group relative shadow-xl p-4 justify-center align-content">
                <div class=" image-container grid grid-cols-1 gap-4 h-80 w-70 place-items-center ">
                    <img src="./src/img/psangelus/ANGELUS Legacy Series - Model 120L - 121L.jpg" alt=""
                        class="image1" />
                    <img src="./src/img/psangelus/ANGELUS Legacy Series - Model 120L - 121L.0.jpg" alt=""
                        class="image2" />
                </div>
                <div class="mt-4 flex justify-between w-70 ">
                    <h3 class="text-lg font-bold text-[#171717]">

                        Angelus Legacy Series Can Seamer

                        <p class="text-sm font-light">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Labore nobis iure obcaecati pariatur. Officiis qui, enim cupiditate aliquam corporis
                            iste.
                        </p>
                    </h3>


                </div>

                <div class="mt-4 flex justify-between w-70 gap-2">
                    <button type="button"
                        class="openModalBtn product-btn bg-[#f3f4f6] text-[#171717] mt-4 font-open-sans button-hover"
                        data-modal-id="modal-2">Request a Quote</button>
                    <button class="product-btn bg-[#101828] text-white  mt-4 font-open-sans button-hover">add to
                        cart</button>
                </div>

                <!-- Modal -->

                <div id="modal-2"
                    class="modal hidden fixed inset-0 z-50 bg-gray-500/75 flex items-center justify-center"
                    role="dialog" aria-modal="true">
                    <!-- Modal Content -->
                    <div class="grid grid-cols-2 modal-size bg-white rounded-lg shadow-xl relative z-50 ">
                        <!-- Header -->
                        <div class="w-full justify-center align-content place-items-center p-12">
                            <div class=" image-container grid grid-cols-1">
                                <img src="./src/img/psangelus/ANGELUS Legacy Series - Model 120L - 121L.0.jpg" alt=""
                                    class="image1" />
                                <img src="./src/img/psangelus/ANGELUS Legacy Series - Model 120L - 121L.jpg" alt=""
                                    class="image2" />
                            </div>
                        </div>

                        <div class="w-full p-12 ">
                            <div class="container h-65vh">
                                <h2 id="dialog-title" class="text-lg font-medium text-[#171717] mb-4">ANGELUS Legacy
                                    Series - Model 120L / 121L
                                </h2>
                                <p class="text-sm text-gray-700 mb-4">
                                    <span class="font-semibold">ABOUT THIS MACHINE</span> <br><br>
                                    The Angelus Legacy Series of can seamers are rugged and reliable machines that
                                    have
                                    stood the test of time and have not only been an integral part of a wide array
                                    of
                                    seaming applications for decades, but are still relevant and trusted in today's
                                    demanding markets and applications.
                                    <br><br>
                                    The Angelus Legacy Series seamers, like the newer V-Series, incorporates a
                                    base-mounted stainless steel machine enclosure. The base-mounting provides
                                    precision
                                    and repeatability, while the stainless steel is durable and easy to clean. The
                                    Model
                                    121L has 12 seaming stations and runs at speeds from 400 to 1500 Cans Per Minute
                                    (CPM).
                                    <br><br>

                                    <span class="font-semibold">PRODUCT DETAILS</span> <br><br>

                                    • Runs at speeds of 400-1500 Containers Per Minute (CPM) <br>
                                    • 12 seaming stations<br>
                                    • Stainless steel base top plate, castings and components below-the-feed-line
                                    <br>
                                    • Single roll cover separator <br>
                                    • Driven lower lifter oil pump system <br>
                                    • Automatic oil lubrication recirculating and filtration system <br>
                                    • Second operation off-seam setting <br>
                                    • No can/no cover feed <br>
                                    •External warning safety horn and light <br>
                                    • Comes with a tool kit and operators manual
                            </div>
                            </p>


                            <div class="mt-6  gap-2">

                                <button type="button" class="product-checkout bg-[#171717] text-white text-sm rounded">
                                    Proceed to Quote
                                </button>
                                <button type="button" id="closeModalBtn"
                                    class="closeModalBtn product-checkout bg-[#171717] text-white text-sm rounded">
                                    Close
                                </button>

                            </div>
                        </div>
                    </div>
                </div>


            </div>

            <!-- other products -->
            <div class="group relative shadow-xl p-4 justify-center align-content">
                <div class=" image-container grid grid-cols-1 gap-4 h-80 w-70 place-items-center ">
                    <img src="./src/img/psangelus/ANGELUS Legacy Series - Model 181S.jpg" alt="" class="image1" />
                    <img src="./src/img/psangelus/ANGELUS Legacy Series - Model 181S.0.jpg" alt="" class="image2" />
                </div>
                <div class="mt-4 flex justify-between w-70 ">
                    <h3 class="text-lg font-bold text-[#171717]">

                        Angelus Legacy Series Can Seamer

                        <p class="text-sm font-light">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Labore nobis iure obcaecati pariatur. Officiis qui, enim cupiditate aliquam corporis
                            iste.
                        </p>
                    </h3>


                </div>

                <div class="mt-4 flex justify-between w-70 gap-2">
                    <button type="button"
                        class="openModalBtn product-btn bg-[#f3f4f6] text-[#171717] mt-4 font-open-sans button-hover"
                        data-modal-id="modal-3">Request a Quote</button>
                    <button class="product-btn bg-[#101828] text-white  mt-4 font-open-sans button-hover">add to
                        cart</button>
                </div>

                <!-- Modal -->

                <div id="modal-3"
                    class="modal hidden fixed inset-0 z-50 bg-gray-500/75 flex items-center justify-center"
                    role="dialog" aria-modal="true">
                    <!-- Modal Content -->
                    <div class="grid grid-cols-2 modal-size bg-white rounded-lg shadow-xl relative z-50 ">
                        <!-- Header -->
                        <div class="w-full justify-center align-content place-items-center p-12">
                            <div class=" image-container grid grid-cols-1">
                                <img src="./src/img/psangelus/ANGELUS Legacy Series - Model 181S.0.jpg" alt=""
                                    class="image1" />
                                <img src="./src/img/psangelus/ANGELUS Legacy Series - Model 181S.jpg" alt=""
                                    class="image2" />
                            </div>
                        </div>

                        <div class="w-full p-12">
                            <div class="container h-65vh">
                                <h2 id="dialog-title" class="text-lg font-medium text-[#171717] mb-4">ANGELUS Legacy
                                    Series - Model 181S
                                </h2>
                                <p class="text-sm text-gray-700 mb-4">
                                    <span class="font-semibold">ABOUT THIS MACHINE</span> <br><br>
                                    The Angelus Legacy Series of can seamers are rugged and reliable machines that
                                    have
                                    stood the test of time and have not only been an integral part of a wide array
                                    of
                                    seaming applications for decades, but are still relevant and trusted in today's
                                    demanding markets and applications.
                                    <br><br>
                                    The Angelus Legacy Series seamers, like the newer V-Series, incorporates a
                                    base-mounted stainless steel machine enclosure. The base-mounting provides
                                    precision
                                    and repeatability, while the stainless steel is durable and easy to clean. The
                                    Model
                                    181S has 18 seaming stations and runs at speeds up to 2500 Cans Per Minute
                                    (CPM).
                                    <br><br>

                                    <span class="font-semibold">PRODUCT DETAILS</span> <br><br>

                                    • Runs at speeds of up to 2500 Containers Per Minute (CPM) <br>
                                    • Eighteen seaming stations <br>
                                    • Stainless steel base top plate and castings and components below-the-feed-line
                                    <br>
                                    • Under cover gassing attachment <br>
                                    • Two-speed CO² gassing controls <br>
                                    • One set of can and end change parts<br>
                                    • Titanium Nitride-coated Angelloy® seaming chucks and seaming rolls, rolls have
                                    <br>
                                    • ceramic bearings <br>
                                    • Dual single roll cover separator<br>
                                    • Driven lower lifter oil pump system<br>
                                    • Automatic oil lubrication recirculating and filtration system<br>
                                    • Second operation off-seam setting<br>
                                    • Comes with a tool kit and operators manual
                            </div>
                            </p>


                            <div class="mt-6  gap-2">

                                <button type="button" class="product-checkout bg-[#171717] text-white text-sm rounded">
                                    Proceed to Quote
                                </button>
                                <button type="button" id="closeModalBtn"
                                    class="closeModalBtn product-checkout bg-[#171717] text-white text-sm rounded">
                                    Close
                                </button>

                            </div>
                        </div>
                    </div>
                </div>


            </div>

            <!-- other products -->
            <div class="group relative shadow-xl p-4 justify-center align-content">
                <div class=" image-container grid grid-cols-1 gap-4 h-80 w-70 place-items-center ">
                    <img src="./src/img/psangelus/ANGELUS Legacy Series - Model 60L.jpg" alt="" class="image1" />
                    <img src="./src/img/psangelus/ANGELUS Legacy Series - Model 60L.1.jpg" alt="" class="image2" />
                </div>
                <div class="mt-4 flex justify-between w-70 ">
                    <h3 class="text-lg font-bold text-[#171717]">

                        Angelus Legacy Series Can Seamer

                        <p class="text-sm font-light">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Labore nobis iure obcaecati pariatur. Officiis qui, enim cupiditate aliquam corporis
                            iste.
                        </p>
                    </h3>


                </div>

                <div class="mt-4 flex justify-between w-70 gap-2">
                    <button type="button"
                        class="openModalBtn product-btn bg-[#f3f4f6] text-[#171717] mt-4 font-open-sans button-hover"
                        data-modal-id="modal-4">Request a Quote</button>
                    <button class="product-btn bg-[#101828] text-white  mt-4 font-open-sans button-hover">add to
                        cart</button>
                </div>

                <!-- Modal -->

                <div id="modal-4"
                    class="modal hidden fixed inset-0 z-50 bg-gray-500/75 flex items-center justify-center"
                    role="dialog" aria-modal="true">
                    <!-- Modal Content -->
                    <div class="grid grid-cols-2 modal-size bg-white rounded-lg shadow-xl relative z-50 ">
                        <!-- Header -->
                        <div class="w-full justify-center align-content place-items-center p-12">
                            <div class=" image-container grid grid-cols-1">
                                <img src="./src/img/psangelus/ANGELUS Legacy Series - Model 60L.1.jpg" alt=""
                                    class="image1" />
                                <img src="./src/img/psangelus/ANGELUS Legacy Series - Model 60L.jpg" alt=""
                                    class="image2" />
                            </div>
                        </div>

                        <div class="w-full p-12">
                            <div class="container h-65vh">
                                <h2 id="dialog-title" class="text-lg font-medium text-[#171717] mb-4">ANGELUS Legacy
                                    Series - Model 60L
                                </h2>
                                <p class="text-sm text-gray-700 mb-4">
                                    <span class="font-semibold">ABOUT THIS MACHINE</span> <br><br>
                                    The Angelus Legacy Series of can seamers are rugged and reliable machines that
                                    have
                                    stood the test of time and have not only been an integral part of a wide array
                                    of
                                    seaming applications for decades, but are still relevant and trusted in today's
                                    demanding markets and applications.
                                    <br><br>
                                    The Angelus Legacy Series seamers, like the newer V-Series, incorporates a
                                    base-mounted stainless steel machine enclosure. The base-mounting provides
                                    precision
                                    and repeatability, while the stainless steel is durable and easy to clean. The
                                    Model
                                    60L has six seaming stations and runs at speeds from 175 to 500 Cans Per Minute
                                    (CPM).
                                    <br><br>

                                    <span class="font-semibold">PRODUCT DETAILS</span> <br><br>

                                    • Comes with a tool kit and operators manual<br>
                                    • Runs at speeds of 175-500 Containers Per Minute (CPM)<br>
                                    • Six seaming stations<br>
                                    • One set of can and end change parts<br>
                                    • Single roll cover separator<br>
                                    • Gear-driven lower lifters with seven point lubrication system<br>
                                    • Second operation off-seam setting<br>
                                    • Automatic stop control system<br>
                                    • Grease lubrication<br>
                                    • Leading industry PLC and touch screen control<br>
                                    • Pneumatic no can/no cover feed<br>
                                    • Variable speed motor drive<br>
                                    • Comes with a tool kit and operators manual
                            </div>
                            </p>


                            <div class="mt-6  gap-2">

                                <button type="button" class="product-checkout bg-[#171717] text-white text-sm rounded">
                                    Proceed to Quote
                                </button>
                                <button type="button" id="closeModalBtn"
                                    class="closeModalBtn product-checkout bg-[#171717] text-white text-sm rounded">
                                    Close
                                </button>

                            </div>
                        </div>
                    </div>
                </div>


            </div>

            <!-- other products -->
            <div class="group relative shadow-xl p-4 justify-center align-content">
                <div class=" image-container grid grid-cols-1 gap-4 h-80 w-70 place-items-center ">
                    <img src="./src/img/psangelus/ANGELUS Legacy Series - Models 61H - 62H -  63H.jpg" alt=""
                        class="image1" />
                    <img src="./src/img/psangelus/ANGELUS Legacy Series - Models 61H - 62H -  63H.0.jpg" alt=""
                        class="image2" />
                </div>
                <div class="mt-4 flex justify-between w-70 ">
                    <h3 class="text-lg font-bold text-[#171717]">

                        Angelus Legacy Series Can Seamer

                        <p class="text-sm font-light">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Labore nobis iure obcaecati pariatur. Officiis qui, enim cupiditate aliquam corporis
                            iste.
                        </p>
                    </h3>


                </div>

                <div class="mt-4 flex justify-between w-70 gap-2">
                    <button type="button"
                        class="openModalBtn product-btn bg-[#f3f4f6] text-[#171717] mt-4 font-open-sans button-hover"
                        data-modal-id="modal-1">Request a Quote</button>
                    <button class="product-btn bg-[#101828] text-white  mt-4 font-open-sans button-hover">add to
                        cart</button>
                </div>

                <!-- Modal -->

                <div id="modal-1"
                    class="modal hidden fixed inset-0 z-50 bg-gray-500/75 flex items-center justify-center"
                    role="dialog" aria-modal="true">
                    <!-- Modal Content -->
                    <div class="grid grid-cols-2 modal-size bg-white rounded-lg shadow-xl relative z-50 ">
                        <!-- Header -->
                        <div class="w-full justify-center align-content place-items-center p-12">
                            <div class=" image-container grid grid-cols-1">
                                <img src="./src/img/psangelus/ANGELUS Legacy Series - Models 61H - 62H -  63H.0.jpg"
                                    alt="" class="image1" />
                                <img src="./src/img/psangelus/ANGELUS Legacy Series - Models 61H - 62H -  63H.jpg"
                                    alt="" class="image2" />
                            </div>
                        </div>

                        <div class="w-full p-12">
                            <div class="container h-65vh">
                                <h2 id="dialog-title" class="text-lg font-medium text-[#171717] mb-4">ANGELUS Legacy
                                    Series - Models 61H / 62H / 63H
                                </h2>
                                <p class="text-sm text-gray-700 mb-4">
                                    <span class="font-semibold">ABOUT THIS MACHINE</span> <br><br>
                                    The Angelus Legacy Series of can seamers are rugged and reliable machines that
                                    have
                                    stood the test of time and have not only been an integral part of a wide array
                                    of
                                    seaming applications for decades, but are still relevant and trusted in today's
                                    demanding markets and applications.
                                    <br><br>
                                    The Angelus Legacy Series seamers, like the newer V-Series, incorporates a
                                    base-mounted stainless steel machine enclosure. The base-mounting provides
                                    precision
                                    and repeatability, while the stainless steel is durable and easy to clean. The
                                    Model
                                    63H has six seaming stations and runs at speeds from 225 to 700 Cans Per Minute
                                    (CPM).
                                    <br><br>

                                    <span class="font-semibold">PRODUCT DETAILS</span> <br><br>
                                    • Steam vacuum<br>
                                    • Under cover gassing<br>
                                    • Titanium Nitride-coated Angelloy® seaming chucks and seaming rolls, rolls
                                    have<br>
                                    • ceramic bearings<br>
                                    • Quick set seaming can<br>
                                    • Filler connecting parts<br>
                                    • Random infeed<br>
                                    • Cover feed chute with vibrator<br>
                                    • Nickel-plated machine<br>
                                    • Hot water automatic seamer washdown<br>
                                    • Recipe motorized turret height elevating mechanism<br>
                                    • Optional can heights are available for some applications
                            </div>
                            </p>


                            <div class="mt-6  gap-2">

                                <button type="button" class="product-checkout bg-[#171717] text-white text-sm rounded">
                                    Proceed to Quote
                                </button>
                                <button type="button" id="closeModalBtn"
                                    class="closeModalBtn product-checkout bg-[#171717] text-white text-sm rounded">
                                    Close
                                </button>

                            </div>
                        </div>
                    </div>
                </div>



            </div>

        </div>
    </div>










    <script src="./src/js/ap-button.js"> </script>
    <script src="./src/js/modal.js">
    </script>F


    <?php
    include('footer.php');
    ?>



    <!-- Script -->

</body>

</html>
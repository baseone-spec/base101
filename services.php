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


    <div class="p-20 w-full text-center justify-center items-center align-content bg-no-repeat bg-cover bg-center"
        style="background-image: url('./src/img/bg-product.jpg'); background-size: cover; background-blend-mode: overlay; background-color: rgba(255,255,255,0.5);">
        <p class="text-4xl font-bold text-[#171717] mb-5">Official Distributor of Top Quality Psangelus
            Products
        </p>
        <p class="text-2xl text-[#2D2D2D] max-w-4xl mx-auto text-center">Most of our products are limited releases that
            won't come back.
            Get your favorite items while they're in stock.</p>
        <button class="rounded-full bg-[#D00000] text-white px-6 py-2 mt-8 font-open-sans button-hover"
            data-ripple-light="true">Request a Quote</button>
    </div>

    <!-- product list -->

    <div class="w-full h-auto custom-padding pt-20 px-30 ">

        <div class="mx-auto lg:text-center">
            <h2 class="text-3xl font-bold font-open-sans text-[#171717] ">Our Available Can Seamer's Products</h2>
            <p class="font-open-sans font-light">ANGELUS V-Series Seamers</p>
        </div>
    </div>

    <div
        class="grid grid-cols-4 xl:grid-cols-4 lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 xl:px-30 xl:py-20 lg:px-20 lg:py-20 md:py-20 sm:py-20 h-auto w-full justify-center place-items-center">
        <div class="pb-10">
            <div class="group relative shadow-xl p-6 justify-center align-content">
                <div class=" image-container grid grid-cols-1 gap-4 h-80 w-70 place-items-center ">
                    <img src="./src/img/psangelus/ANGELUS V-Series - Model 3V.jpg" alt="" class="image1" />
                    <img src="./src/img/psangelus/ANGELUS V-Series - Model 3V.0.jpg" alt="" class="image2" />
                </div>
                <div class="mt-4 flex justify-between w-70 ">
                    <h3 class="text-lg font-bold text-[#171717]">

                        ALS Can Seamer V-Series - Model 3V

                        <p class="text-sm font-light">
                            The Angelus V-Series Model 3V seamer is ideal for running large 2- and 3-piece cans with
                            diameters from 211 to 603.With speeds from 75 to 350 Cans Per Minute (CPM) and 3 seaming
                            spindles, this machine is well suited for seaming powdered food ingredients, powdered
                            drinks, nutraceuticals, and powdered infant formula.
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
                                <img src="./src/img/psangelus/ANGELUS V-Series - Model 3V.jpg" alt="" class="image1" />
                                <img src="./src/img/psangelus/ANGELUS V-Series - Model 3V.0.jpg" alt=""
                                    class="image2" />
                            </div>
                        </div>

                        <div class="w-full p-12 ">
                            <div class="container h-65vh">
                                <h2 id="dialog-title" class="text-lg font-medium text-[#171717] mb-4">ANGELUS
                                    Can Seamer V-Series - Model 3V
                                </h2>
                                <p class="text-sm text-gray-700 mb-4">
                                    <span class="font-semibold">ABOUT THIS MACHINE</span> <br><br>
                                    The Angelus V-Series Model 3V seamer is ideal for running large 2- and 3-piece
                                    cans
                                    with diameters from 211 to 603. With speeds from 75 to 350 Cans Per Minute (CPM)
                                    and
                                    3 seaming spindles, this machine is well suited for seaming powdered food
                                    ingredients, powdered drinks, nutraceuticals, and powdered infant formula.
                                    Constructed of 304 stainless steel in all product contact areas, this machine
                                    offers
                                    a clean, sanitary design for food and beverage applications. This rotary machine
                                    can
                                    be configured for random infeed or filler connection

                                    <br><br>

                                    <span class="font-semibold">PRODUCT DETAILS</span> <br><br>

                                    • Runs at speeds from 75 to 350 Containers Per Minute (CPM) <br>
                                    • Provided with random infeed or filler connection, in either mechanical or
                                    servo
                                    synchro <br>
                                    • New and improved driven lower lifters <br>
                                    • Motorized turret height adjustment with digital readout <br>
                                    • TN-coated Angelloy® seaming rolls with ceramic bearings <br>
                                    • Easy-adjust chuck plate springs to minimize downtime <br>
                                    • Industry-standard PLC and HMI controls, pilot devices, and E-Stop (Non-OEM)
                                    <br>
                                    • NEMA 12 electrical enclosure (standalone), with lockable disconnect ensures
                                    operator
                                    safety <br>
                                    • NEMA 4X junction box is machine mounted and integrated into guarding <br>
                                    • Under cover gassing control with variable valve for use in seaming beverages
                                    <br>
                                    • Ancillary systems are integrated into the guarding enclosure <br>
                                    • Vibration isolation pads on seamer legs <br>
                                    • Comes with basic tool kit <br>
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
        <div class="pb-10">
            <div class="group relative shadow-xl p-6 justify-center align-content">
                <div class=" image-container grid grid-cols-1 gap-4 h-80 w-70 place-items-center ">
                    <img src="./src/img/psangelus/ANGELUS V-Series - Model 4V.0.jpg" alt="" class="image1" />
                    <img src="./src/img/psangelus/ANGELUS V-Series - Model 4V.jpg" alt="" class="image2" />
                </div>
                <div class="mt-4 flex justify-between w-70 ">
                    <h3 class="text-lg font-bold text-[#171717]">

                        ALS Can Seamer V-Series - Model 4V

                        <p class="text-sm font-light">
                            The Angelus V-Series Model 4V seamer is ideal for running metal and composite cans with
                            diameters from 200 to 401. With speeds from 100 to 450 Cans Per Minute (CPM) and 4
                            seaming
                            spindles, and constructed of 304 stainless steel in all product contact areas.this
                            machine
                            offers a clean, sanitary design.
                        </p>
                    </h3>


                </div>

                <div class="mt-4 flex justify-between w-70 gap-2">
                    <button type="button"
                        class="openModalBtn product-btn bg-[#f3f4f6] text-[#171717] mt-4 font-open-sans button-hover"
                        data-modal-id="modal-3">Request a Quote</button>
                    <button class="product-btn bg-[#101828] text-white mt-4 font-open-sans button-hover">add
                        to
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
                                <img src="./src/img/psangelus/ANGELUS V-Series - Model 4V.jpg" alt="" class="image1" />
                                <img src="./src/img/psangelus/ANGELUS V-Series - Model 4V.0.jpg" alt=""
                                    class="image2" />
                            </div>
                        </div>

                        <div class="w-full p-12">
                            <div class="container h-65vh">
                                <h2 id="dialog-title" class="text-lg font-medium text-[#171717] mb-4">ANGELUS
                                    Can Seamer V-Series - Model 4V
                                </h2>
                                <p class="text-sm text-gray-700 mb-4">
                                    <span class="font-semibold">ABOUT THIS MACHINE</span> <br><br>
                                    The Angelus V-Series Model 4V seamer is ideal for running metal and composite
                                    cans
                                    with diameters from 200 to 401. With speeds from 100 to 450 Cans Per Minute
                                    (CPM)
                                    and 4 seaming spindles, and constructed of 304 stainless steel in all product
                                    contact areas, this machine offers a clean, sanitary design, well suited for
                                    food
                                    and beverage applications. This rotary machine can be configured for random
                                    infeed
                                    or filler connection.

                                    <br><br>

                                    <span class="font-semibold">PRODUCT DETAILS</span> <br><br>

                                    • Runs at speeds up to 100 - 450 Cans Per Minute (CPM) <br>
                                    • Provided with random infeed or filler connection, in either mechanical or
                                    servo
                                    synchro <br>
                                    • New and improved driven lower lifters <br>
                                    • Motorized turret height adjustment with digital readout <br>
                                    • TN-coated Angelloy® seaming rolls with ceramic bearings <br>
                                    • Easy-adjust chuck plate springs keep downtime to a minimum <br>
                                    • Industry-standard PLC and HMI controls, pilot devices, and E-Stop (Non-OEM)
                                    <br>
                                    • NEMA 12 electrical enclosure (standalone), with lockable disconnect ensures
                                    operator
                                    safety <br>
                                    • NEMA 4X junction box is machine mounted and integrated into guarding <br>
                                    • Under cover gassing control with variable valve for use in seaming beverages
                                    <br>
                                    • Ancillary systems are integrated into the guarding enclosure <br>
                                    • Vibration isolation pads on seamer legs <br>
                                    • Comes with basic tool kit <br>
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
        <div class="pb-10">
            <div class="group relative shadow-xl p-6 justify-center align-content">
                <div class=" image-container grid grid-cols-1 gap-4 h-80 w-70 place-items-center ">
                    <img src="./src/img/psangelus/ANGELUS V-Series - Model 6V.0.jpg" alt="" class="image1" />
                    <img src="./src/img/psangelus/ANGELUS V-Series - Model 6V.jpg" alt="" class="image2" />
                </div>
                <div class="mt-4 flex justify-between w-70 ">
                    <h3 class="text-lg font-bold text-[#171717]">

                        ALS Can Seamer V-Series - Model 6V

                        <p class="text-sm font-light">
                            The Angelus V-Series Model 6V seamer is ideal for running metal and composite cans with
                            diameters from 200 to 401. With speeds from 175 to 700 Cans Per Minute (CPM) and 6
                            seaming
                            spindles, and constructed of 304 stainless steel in all product contact areas, this
                            machine
                            offers a clean, sanitary design.
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
                                <img src="./src/img/psangelus/ANGELUS V-Series - Model 6V.1.jpg" alt=""
                                    class="image1" />
                                <img src="./src/img/psangelus/ANGELUS V-Series - Model 6V.2.jpg" alt=""
                                    class="image2" />
                            </div>
                        </div>

                        <div class="w-full p-12">
                            <div class="container h-65vh">
                                <h2 id="dialog-title" class="text-lg font-medium text-[#171717] mb-4">ANGELUS
                                    Can Seamer V-Series - Model 6V
                                </h2>
                                <p class="text-sm text-gray-700 mb-4">
                                    <span class="font-semibold">ABOUT THIS MACHINE</span> <br><br>
                                    TThe Angelus V-Series Model 6V seamer is ideal for running metal and composite
                                    cans
                                    with diameters from 200 to 401. With speeds from 175 to 700 Cans Per Minute
                                    (CPM)
                                    and 6 seaming spindles, and constructed of 304 stainless steel in all product
                                    contact areas, this machine offers a clean, sanitary design, well suited for
                                    food
                                    and beverage applications. This rotary machine can be configured for random
                                    infeed
                                    or filler connection.

                                    <br><br>

                                    <span class="font-semibold">PRODUCT DETAILS</span> <br><br>

                                    • Runs at speeds up to 175 -700 Containers Per Minute (CPM) <br>
                                    • Provided with random infeed or filler connection, in either mechanical or
                                    servo
                                    synchro <br>
                                    • New and improved driven lower lifters <br>
                                    • Motorized turret height adjustment with digital readout <br>
                                    • TN-coated Angelloy® seaming rolls with ceramic bearings <br>
                                    • Easy-adjust chuck plate springs keep downtime to a minimum <br>
                                    • Industry-standard PLC and HMI controls, pilot devices, and E-Stop <br>
                                    • NEMA 12 electrical enclosure (standalone), with lockable disconnect ensures
                                    operator
                                    safety <br>
                                    • NEMA 4X junction box is machine mounted and integrated into guarding <br>
                                    • Under cover gassing control with variable valve for use in seaming beverages
                                    <br>
                                    • Ancillary systems are integrated into the guarding enclosure <br>
                                    • Vibration isolation pads on seamer legs <br>
                                    • Comes with basic tool kit <br>
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
        <div class="pb-10">
            <div class="group relative shadow-xl p-6 justify-center align-content">
                <div class=" image-container grid grid-cols-1 gap-4 h-80 w-70 place-items-center ">
                    <img src="./src/img/psangelus/ANGELUS V-Series - Model 8V.0.jpg" alt="" class="image1" />
                    <img src="./src/img/psangelus/ANGELUS V-Series - Model 8V.jpg" alt="" class="image2" />
                </div>
                <div class="mt-4 flex justify-between w-70 ">
                    <h3 class="text-lg font-bold text-[#171717]">

                        ALS Can Seamer V-Series - Model 8V

                        <p class="text-sm font-light">
                            The Angelus V-Series Model 6V seamer is ideal for running metal and composite cans with
                            diameters from 200 to 401. With speeds from 175 to 700 Cans Per Minute (CPM) and 6
                            seaming
                            spindles, and constructed of 304 stainless steel in all product contact areas, this
                            machine
                            offers a clean, sanitary design.
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
                                <img src="./src/img/psangelus/ANGELUS V-Series - Model 8V.1.jpg" alt=""
                                    class="image1" />
                                <img src="./src/img/psangelus/ANGELUS V-Series - Model 8V.jpg" alt="" class="image2" />
                            </div>
                        </div>

                        <div class="w-full p-12">
                            <div class="container h-65vh">
                                <h2 id="dialog-title" class="text-lg font-medium text-[#171717] mb-4">ANGELUS
                                    Can Seamer V-Series - Model 8V
                                </h2>
                                <p class="text-sm text-gray-700 mb-4">
                                    <span class="font-semibold">ABOUT THIS MACHINE</span> <br><br>
                                    The Angelus V-Series Model 8V seamer is ideal for running metal and composite
                                    cans
                                    with diameters from 200 to 300. With speeds from 250 to 1000 Cans Per Minute
                                    (CPM)
                                    and 8 seaming spindles, and constructed from 304 stainless steel in all product
                                    contact areas, this machine offers a clean, sanitary design, well suited for
                                    food
                                    and beverage applications. This rotary machine can be configured for random
                                    infeed
                                    or filler connection.
                                    <br><br>

                                    <span class="font-semibold">PRODUCT DETAILS</span> <br><br>

                                    • Runs at speeds up to 250 -1000 Containers Per Minute (CPM) <br>
                                    • Provided with random infeed or filler connection, in either mechanical or
                                    servo
                                    synchro <br>
                                    • New and improved driven lower lifters <br>
                                    • Motorized turret height adjustment with digital readout <br>
                                    • TN-coated Angelloy® seaming rolls with ceramic bearings <br>
                                    • Easy-adjust chuck plate springs keep downtime to a minimum <br>
                                    • Industry-standard PLC and HMI controls, pilot devices, and E-Stop (Non-OEM)
                                    <br>
                                    • NEMA 12 electrical enclosure (standalone), with lockable disconnect ensures
                                    <br>
                                    operator
                                    safety <br>
                                    • NEMA 4X junction box is machine mounted and integrated into guarding <br>
                                    • Under cover gassing control with variable valve for use in seaming beverages
                                    <br>
                                    • Ancillary systems are integrated into the guarding enclosure <br>
                                    • Vibration isolation pads on seamer legs <br>
                                    • Comes with basic tool kit <br>
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

        <!-- second row -->
        <div>
            <div class="group relative shadow-xl p-6 justify-center align-content">
                <div class=" image-container grid grid-cols-1 gap-4 h-80 w-70 place-items-center ">
                    <img src="./src/img/psangelus/ANGELUS V-Series - Model 9V.jpg" alt="" class="image1" />
                    <img src="./src/img/psangelus/ANGELUS V-Series - Model 9V.0.jpg" alt="" class="image2" />
                </div>
                <div class="mt-4 flex justify-between w-70 ">
                    <h3 class="text-lg font-bold text-[#171717]">

                        ALS Can Seamer V-Series - Model 9V

                        <p class="text-sm font-light">
                            The Angelus V-Series Model 9V seamer is ideal for running cans with diameters from 200
                            to
                            401. With speeds from 300 to 1200 Cans Per Minute (CPM) and 9 seaming spindles, this
                            machine
                            delivers high speed performance when needed. Constructed from 304 stainless steel in all
                            product contact areas.
                        </p>
                    </h3>


                </div>

                <div class="mt-4 flex justify-between w-70 gap-2">
                    <button type="button"
                        class="openModalBtn product-btn bg-[#f3f4f6] text-[#171717] mt-4 font-open-sans button-hover"
                        data-modal-id="modal-5">Request a Quote</button>
                    <button class="product-btn bg-[#101828] text-white  mt-4 font-open-sans button-hover">add to
                        cart</button>
                </div>


                <div id="modal-5"
                    class="modal hidden fixed inset-0 z-50 bg-gray-500/75 flex items-center justify-center"
                    role="dialog" aria-modal="true">

                    <div class="grid grid-cols-2 modal-size bg-white rounded-lg shadow-xl relative z-50 ">

                        <div class="w-full justify-center align-content place-items-center p-12">
                            <div class=" image-container grid grid-cols-1">
                                <img src="./src/img/psangelus/ANGELUS V-Series - Model 9V.jpg" alt="" class="image1" />
                                <img src="./src/img/psangelus/ANGELUS V-Series - Model 9V.0.jpg" alt=""
                                    class="image2" />
                            </div>
                        </div>

                        <div class="w-full p-12 ">
                            <div class="container h-65vh">
                                <h2 id="dialog-title" class="text-lg font-medium text-[#171717] mb-4">ANGELUS
                                    Can Seamer V-Series - Model 9V
                                </h2>
                                <p class="text-sm text-gray-700 mb-4">
                                    <span class="font-semibold">ABOUT THIS MACHINE</span> <br><br>
                                    The Angelus V-Series Model 9V seamer is ideal for running cans with diameters
                                    from
                                    200 to 401. With speeds from 300 to 1200 Cans Per Minute (CPM) and 9 seaming
                                    spindles, this machine delivers high speed performance when needed. Constructed
                                    from
                                    304 stainless steel in all product contact areas, this machine offers a clean,
                                    sanitary design, well suited for food applications. This rotary machine can be
                                    configured for random infeed or filler connection.

                                    <br><br>

                                    <span class="font-semibold">PRODUCT DETAILS</span> <br><br>

                                    • Runs at speeds up to 300 -1200 Containers Per Minute (CPM) <br>
                                    • Provided with random infeed or filler connection, in either mechanical or
                                    servo
                                    synchro <br>
                                    • New and improved driven lower lifters <br>
                                    • Motorized turret height adjustment with digital readout <br>
                                    • TN-coated Angelloy® seaming rolls with ceramic bearings <br>
                                    • Easy-adjust chuck plate springs keep downtime to a minimum <br>
                                    • Industry-standard PLC and HMI controls, pilot devices, and E-Stop (Non-OEM)
                                    <br>
                                    •NEMA 12 electrical enclosure (standalone), with lockable disconnect ensures
                                    operator
                                    safety <br>
                                    • NEMA 4X junction box is machine mounted and integrated into guarding <br>
                                    • Under cover gassing control with variable valve for use in seaming beverages
                                    <br>
                                    • Ancillary systems are integrated into the guarding enclosure <br>
                                    • Vibration isolation pads on seamer legs <br>
                                    • Comes with basic tool kit <br>
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
        <div>
            <div class="group relative shadow-xl p-6 justify-center align-content">
                <div class=" image-container grid grid-cols-1 gap-4 h-80 w-70 place-items-center ">
                    <img src="./src/img/psangelus/ANGELUS V-Series - Model 12V.jpg" alt="" class="image1" />
                    <img src="./src/img/psangelus/ANGELUS V-Series - Model 12V.0.jpg" alt="" class="image2" />
                </div>
                <div class="mt-4 flex justify-between w-70 ">
                    <h3 class="text-lg font-bold text-[#171717]">

                        ALS Can Seamer V-Series - Model 12V


                        <p class="text-sm font-light">

                            The Angelus V-Series Model 12V seamer is ideal for running cans with diameters from 200
                            to
                            300. With speeds from 400 to 1800 Cans Per Minute (CPM) and 12 seaming spindles, this
                            machine is optimized for high-speed beverage applications. Constructed from 304
                            stainless
                            steel in all.
                        </p>
                    </h3>


                </div>

                <div class="mt-4 flex justify-between w-70 gap-2">
                    <button type="button"
                        class="openModalBtn product-btn bg-[#f3f4f6] text-[#171717] mt-4 font-open-sans button-hover"
                        data-modal-id="modal-6">Request a Quote</button>
                    <button class="product-btn bg-[#101828] text-white  mt-4 font-open-sans button-hover">add to
                        cart</button>
                </div>



                <div id="modal-6"
                    class="modal hidden fixed inset-0 z-50 bg-gray-500/75 flex items-center justify-center"
                    role="dialog" aria-modal="true">

                    <div class="grid grid-cols-2 modal-size bg-white rounded-lg shadow-xl relative z-50 ">

                        <div class="w-full justify-center align-content place-items-center p-12">
                            <div class=" image-container grid grid-cols-1">
                                <img src="./src/img/psangelus/ANGELUS V-Series - Model 12V.jpg" alt="" class="image1" />
                                <img src="./src/img/psangelus/ANGELUS V-Series - Model 12V.0.jpg" alt=""
                                    class="image2" />
                            </div>
                        </div>

                        <div class="w-full p-12">
                            <div class="container h-65vh">
                                <h2 id="dialog-title" class="text-lg font-medium text-[#171717] mb-4">ANGELUS
                                    Can Seamer V-Series - Model 12V
                                </h2>
                                <p class="text-sm text-gray-700 mb-4">
                                    <span class="font-semibold">ABOUT THIS MACHINE</span> <br><br>
                                    The Angelus V-Series Model 12V seamer is ideal for running cans with diameters
                                    from
                                    200 to 300. With speeds from 400 to 1800 Cans Per Minute (CPM) and 12 seaming
                                    spindles, this machine is optimized for high-speed beverage applications.
                                    Constructed from 304 stainless steel in all product contact areas, this machine
                                    offers a clean, sanitary design, well suited for these projects. This rotary
                                    machine
                                    can be configured for random infeed or filler connection.

                                    <br><br>

                                    <span class="font-semibold">PRODUCT DETAILS</span> <br><br>

                                    • Runs at speeds from 400 to1800 Containers Per Minute (CPM) <br>
                                    • Provided with random infeed or filler connection, in either mechanical or
                                    servo
                                    synchro <br>
                                    • New and improved driven lower lifters <br>
                                    • Motorized turret height adjustment with digital readout <br>
                                    • TN-coated Angelloy® seaming rolls with ceramic bearings <br>
                                    • Easy-adjust chuck plate springs keep downtime to a minimum <br>
                                    • Industry-standard PLC and HMI controls, pilot devices, and E-Stop (Non-OEM)
                                    <br>
                                    • NEMA 12 electrical enclosure (standalone), with lockable disconnect ensures
                                    operator
                                    safety <br>
                                    • NEMA 4X junction box is machine mounted and integrated into guarding <br>
                                    • Under cover gassing control with variable valve for use in seaming beverages
                                    <br>
                                    • Ancillary systems are integrated into the guarding enclosure <br>
                                    • Vibration isolation pads on seamer legs <br>
                                    • Comes with basic tool kit <br>
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
        <div>
            <div class="group relative shadow-xl p-6 justify-center align-content">
                <div class=" image-container grid grid-cols-1 gap-4 h-80 w-70 place-items-center ">
                    <img src="./src/img/psangelus/ANGELUS Legacy Series - Model 60L.jpg" alt="" class="image1" />
                    <img src="./src/img/psangelus/ANGELUS Legacy Series - Model 60L.1.jpg" alt="" class="image2" />
                </div>
                <div class="mt-4 flex justify-between w-70 ">
                    <h3 class="text-lg font-bold text-[#171717]">

                        ALS Can Seamer V-Series - Model 18V

                        <p class="text-sm font-light">
                            The Angelus V-Series Model 18V seamer is ideal for running cans with diameters from 200
                            to
                            300. With speeds from 500 to 2500 Cans Per Minute (CPM) and 18 seaming spindles, this
                            machine is optimized for high-speed beverage applications. Ensuring a perfect transfer
                        </p>
                    </h3>


                </div>

                <div class="mt-4 flex justify-between w-70 gap-2">
                    <button type="button"
                        class="openModalBtn product-btn bg-[#f3f4f6] text-[#171717] mt-4 font-open-sans button-hover"
                        data-modal-id="modal-7">Request a Quote</button>
                    <button class="product-btn bg-[#101828] text-white  mt-4 font-open-sans button-hover">add to
                        cart</button>
                </div>



                <div id="modal-7"
                    class="modal hidden fixed inset-0 z-50 bg-gray-500/75 flex items-center justify-center"
                    role="dialog" aria-modal="true">

                    <div class="grid grid-cols-2 modal-size bg-white rounded-lg shadow-xl relative z-50 ">

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
                                <h2 id="dialog-title" class="text-lg font-medium text-[#171717] mb-4">ANGELUS
                                    Can Seamer V-Series - Model 18V
                                </h2>
                                <p class="text-sm text-gray-700 mb-4">
                                    <span class="font-semibold">ABOUT THIS MACHINE</span> <br><br>
                                    The Angelus V-Series Model 18V seamer is ideal for running cans with diameters
                                    from
                                    200 to 300. With speeds from 500 to 2500 Cans Per Minute (CPM) and 18 seaming
                                    spindles, this machine is optimized for high-speed beverage applications,
                                    ensuring a
                                    perfect transfer of the can from the filler turrent onto the can feed extension,
                                    without spilling product. Constructed from 304 stainless steel in all product
                                    contact areas, this machine offers a clean, sanitary design, well suited for
                                    these
                                    projects. This rotary machine can be configured for random infeed or filler
                                    connection.

                                    <br><br>

                                    <span class="font-semibold">PRODUCT DETAILS</span> <br><br>

                                    • Runs at speeds up to 500 -2500 Containers Per Minute (CPM) <br>
                                    • Provided with random infeed or filler connection, in either mechanical or
                                    servo
                                    synchro <br>
                                    • New and improved driven lower lifters <br>
                                    • Motorized turret height adjustment with digital readout <br>
                                    • TN-coated Angelloy® seaming rolls with ceramic bearings <br>
                                    • Easy-adjust chuck plate springs keep downtime to a minimum <br>
                                    • Industry-standard PLC and HMI controls, pilot devices, and E-Stop (Non-OEM)
                                    <br>
                                    • NEMA 12 electrical enclosure (standalone), with lockable disconnect ensures
                                    operator
                                    safety <br>
                                    • NEMA 4X junction box is machine mounted and integrated into guarding <br>
                                    • Under cover gassing control with variable valve for use in seaming beverages
                                    <br>
                                    • Ancillary systems are integrated into the guarding enclosure <br>
                                    • Vibration isolation pads on seamer legs <br>
                                    • Comes with basic tool kit <br>
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
        <div>
            <div class="group relative shadow-xl p-6 justify-center align-content">
                <div class=" image-container grid grid-cols-1 gap-4 h-80 w-70 place-items-center ">
                    <img src="./src/img/psangelus/ANGELUS Legacy Series - Model 60L.jpg" alt="" class="image1" />
                    <img src="./src/img/psangelus/ANGELUS Legacy Series - Model 60L.1.jpg" alt="" class="image2" />
                </div>
                <div class="mt-4 flex justify-between w-70 ">
                    <h3 class="text-lg font-bold text-[#171717]">

                        ALS Can Seamer V-Series - Model 18V

                        <p class="text-sm font-light">
                            The Angelus V-Series Model 18V seamer is ideal for running cans with diameters from 200
                            to
                            300. With speeds from 500 to 2500 Cans Per Minute (CPM) and 18 seaming spindles, this
                            machine is optimized for high-speed beverage applications. Ensuring a perfect transfer
                        </p>
                    </h3>


                </div>

                <div class="mt-4 flex justify-between w-70 gap-2">
                    <button type="button"
                        class="openModalBtn product-btn bg-[#f3f4f6] text-[#171717] mt-4 font-open-sans button-hover"
                        data-modal-id="modal-7">Request a Quote</button>
                    <button class="product-btn bg-[#101828] text-white  mt-4 font-open-sans button-hover">add to
                        cart</button>
                </div>



                <div id="modal-7"
                    class="modal hidden fixed inset-0 z-50 bg-gray-500/75 flex items-center justify-center"
                    role="dialog" aria-modal="true">

                    <div class="grid grid-cols-2 modal-size bg-white rounded-lg shadow-xl relative z-50 ">

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
                                <h2 id="dialog-title" class="text-lg font-medium text-[#171717] mb-4">ANGELUS
                                    Can Seamer V-Series - Model 18V
                                </h2>
                                <p class="text-sm text-gray-700 mb-4">
                                    <span class="font-semibold">ABOUT THIS MACHINE</span> <br><br>
                                    The Angelus V-Series Model 18V seamer is ideal for running cans with diameters
                                    from
                                    200 to 300. With speeds from 500 to 2500 Cans Per Minute (CPM) and 18 seaming
                                    spindles, this machine is optimized for high-speed beverage applications,
                                    ensuring a
                                    perfect transfer of the can from the filler turrent onto the can feed extension,
                                    without spilling product. Constructed from 304 stainless steel in all product
                                    contact areas, this machine offers a clean, sanitary design, well suited for
                                    these
                                    projects. This rotary machine can be configured for random infeed or filler
                                    connection.

                                    <br><br>

                                    <span class="font-semibold">PRODUCT DETAILS</span> <br><br>

                                    • Runs at speeds up to 500 -2500 Containers Per Minute (CPM) <br>
                                    • Provided with random infeed or filler connection, in either mechanical or
                                    servo
                                    synchro <br>
                                    • New and improved driven lower lifters <br>
                                    • Motorized turret height adjustment with digital readout <br>
                                    • TN-coated Angelloy® seaming rolls with ceramic bearings <br>
                                    • Easy-adjust chuck plate springs keep downtime to a minimum <br>
                                    • Industry-standard PLC and HMI controls, pilot devices, and E-Stop (Non-OEM)
                                    <br>
                                    • NEMA 12 electrical enclosure (standalone), with lockable disconnect ensures
                                    operator
                                    safety <br>
                                    • NEMA 4X junction box is machine mounted and integrated into guarding <br>
                                    • Under cover gassing control with variable valve for use in seaming beverages
                                    <br>
                                    • Ancillary systems are integrated into the guarding enclosure <br>
                                    • Vibration isolation pads on seamer legs <br>
                                    • Comes with basic tool kit <br>
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
    </script>


    <?php
    include('footer.php');
    ?>



    <!-- Script -->

</body>

</html>
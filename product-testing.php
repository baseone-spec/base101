<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="./src/styles/output.css" rel="stylesheet">
</head>

<body>

    <div class="w-full h-screen flex justify-center items-center">
        <div class="grid grid-cols-1 gap-4 h-96 w-80 shadow-xl place-items-center">
            <div class="image-wrapper">
                <img src="./src/img/product/seamers/Angelus Legacy Series Can Seamer- Model 10P.0.jpg" alt="">
            </div>
            <div class="text-center p-4">
                <h2 class="text-lg font-bold">Angelus Legacy Series Can Seamer</h2>
                <p class="text-gray-600">Model 10P</p>
            </div>
        </div>
    </div>

    <div class="w-full h-screen flex justify-center items-center">
        <div class=" image-container grid grid-cols-1 gap-4 h-96 w-80 shadow-xl place-items-center ">
            <img src="./src/img/product/seamers/Angelus Legacy Series Can Seamer- Model 10P.jpg" alt=""
                class="image1" />
            <img src="./src/img/product/seamers/Angelus Legacy Series Can Seamer- Model 10P.0.jpg" alt=""
                class="image2" />
        </div>
    </div>

    <!-- Trigger Button Wrapper -->
    <div class="w-full h-screen flex justify-center items-center">
        <div class="flex justify-center items-center w-half">
            <button id="openModalBtn" class="product-btn bg-[#f3f4f6] text-[#171717] text-sm font-semibold">
                Open Dialog
            </button>
        </div>

        <!-- Modal -->
        <div id="myModal" class="hidden fixed inset-0 z-10 bg-gray-500/75 flex items-center justify-center"
            role="dialog" aria-modal="true">
            <!-- Modal Content -->
            <div
                class="grid grid-flow-col grid-rows-1 modal-size bg-white rounded-lg shadow-xl max-w-md p-20 relative z-20 ">
                <!-- Header -->
                <div>
                    <h2 id="dialog-title" class="text-lg font-medium text-[#171717] mb-4">Modal Title</h2>
                    <p class="text-sm text-gray-700 mb-4">
                        This is a modal dialog. Click the button below to close it.
                    </p>
                </div>

                <div class="h-full w-full p-4">
                    <div class="container p-20">
                        <p class="text">
                            asdasd
                        </p>

                    </div>

                    <div class="mt-6 flex justify-center gap-2">

                        <button class="product-checkout bg-[#171717] text-white text-sm rounded">
                            Proceed to Quote
                        </button>
                        <button id="closeModalBtn" class="product-checkout bg-[#171717] text-white text-sm rounded">
                            Close
                        </button>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <div
        class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 px-48 custom-padding h-screen md:h-auto w-full justify-center place-items-center">
        <div>
            <!-- other products -->
            <div class="group relative shadow-xl p-4 justify-center align-content">
                <div class=" image-container grid grid-cols-1 gap-4 h-80 w-70 place-items-center ">
                    <img src="./src/img/psangelus/ANGELUS Legacy Series - Model 60L.jpg" alt="" class="image1" />
                    <img src="./src/img/psangelus/ANGELUS Legacy Series - Model 60L.1.jpg" alt="" class="image2" />
                </div>
                <div class="mt-4 flex justify-between w-70 ">
                    <h3 class="text-lg font-bold text-[#171717]">

                        ALS Can Seamer V-Series - Model 18V

                        <p class="text-sm font-light">
                            The Angelus V-Series Model 18V seamer is ideal for running cans with diameters from 200 to
                            300. With speeds from 500 to 2500 Cans Per Minute (CPM) and 18 seaming spindles, this
                            machine is optimized for high-speed beverage applications, ensuring a perfect transfer of
                            the can from the filler turrent onto the can feed extension.
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

                <!-- Modal -->

                <div id="modal-7"
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
                                <h2 id="dialog-title" class="text-lg font-medium text-[#171717] mb-4">ANGELUS
                                    Can Seamer V-Series - Model 18V
                                </h2>
                                <p class="text-sm text-gray-700 mb-4">
                                    <span class="font-semibold">ABOUT THIS MACHINE</span> <br><br>
                                    The Angelus V-Series Model 18V seamer is ideal for running cans with diameters from
                                    200 to 300. With speeds from 500 to 2500 Cans Per Minute (CPM) and 18 seaming
                                    spindles, this machine is optimized for high-speed beverage applications, ensuring a
                                    perfect transfer of the can from the filler turrent onto the can feed extension,
                                    without spilling product. Constructed from 304 stainless steel in all product
                                    contact areas, this machine offers a clean, sanitary design, well suited for these
                                    projects. This rotary machine can be configured for random infeed or filler
                                    connection.

                                    <br><br>

                                    <span class="font-semibold">PRODUCT DETAILS</span> <br><br>

                                    • Runs at speeds up to 500 -2500 Containers Per Minute (CPM) <br>
                                    • Provided with random infeed or filler connection, in either mechanical or servo
                                    synchro <br>
                                    • New and improved driven lower lifters <br>
                                    • Motorized turret height adjustment with digital readout <br>
                                    • TN-coated Angelloy® seaming rolls with ceramic bearings <br>
                                    • Easy-adjust chuck plate springs keep downtime to a minimum <br>
                                    • Industry-standard PLC and HMI controls, pilot devices, and E-Stop (Non-OEM) <br>
                                    • NEMA 12 electrical enclosure (standalone), with lockable disconnect ensures
                                    operator
                                    safety <br>
                                    • NEMA 4X junction box is machine mounted and integrated into guarding <br>
                                    • Under cover gassing control with variable valve for use in seaming beverages <br>
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
            <!-- other products -->
            <div class="group relative shadow-xl p-4 justify-center align-content">
                <div class=" image-container grid grid-cols-1 gap-4 h-80 w-70 place-items-center ">
                    <img src="./src/img/psangelus/ANGELUS Legacy Series - Model 60L.jpg" alt="" class="image1" />
                    <img src="./src/img/psangelus/ANGELUS Legacy Series - Model 60L.1.jpg" alt="" class="image2" />
                </div>
                <div class="mt-4 flex justify-between w-70 ">
                    <h3 class="text-lg font-bold text-[#171717]">

                        ALS Can Seamer V-Series - Model 18V

                        <p class="text-sm font-light">
                            The Angelus V-Series Model 18V seamer is ideal for running cans with diameters from 200 to
                            300. With speeds from 500 to 2500 Cans Per Minute (CPM) and 18 seaming spindles, this
                            machine is optimized for high-speed beverage applications, ensuring a perfect transfer of
                            the can from the filler turrent onto the can feed extension.
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

                <!-- Modal -->

                <div id="modal-7"
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
                                <h2 id="dialog-title" class="text-lg font-medium text-[#171717] mb-4">ANGELUS
                                    Can Seamer V-Series - Model 18V
                                </h2>
                                <p class="text-sm text-gray-700 mb-4">
                                    <span class="font-semibold">ABOUT THIS MACHINE</span> <br><br>
                                    The Angelus V-Series Model 18V seamer is ideal for running cans with diameters from
                                    200 to 300. With speeds from 500 to 2500 Cans Per Minute (CPM) and 18 seaming
                                    spindles, this machine is optimized for high-speed beverage applications, ensuring a
                                    perfect transfer of the can from the filler turrent onto the can feed extension,
                                    without spilling product. Constructed from 304 stainless steel in all product
                                    contact areas, this machine offers a clean, sanitary design, well suited for these
                                    projects. This rotary machine can be configured for random infeed or filler
                                    connection.

                                    <br><br>

                                    <span class="font-semibold">PRODUCT DETAILS</span> <br><br>

                                    • Runs at speeds up to 500 -2500 Containers Per Minute (CPM) <br>
                                    • Provided with random infeed or filler connection, in either mechanical or servo
                                    synchro <br>
                                    • New and improved driven lower lifters <br>
                                    • Motorized turret height adjustment with digital readout <br>
                                    • TN-coated Angelloy® seaming rolls with ceramic bearings <br>
                                    • Easy-adjust chuck plate springs keep downtime to a minimum <br>
                                    • Industry-standard PLC and HMI controls, pilot devices, and E-Stop (Non-OEM) <br>
                                    • NEMA 12 electrical enclosure (standalone), with lockable disconnect ensures
                                    operator
                                    safety <br>
                                    • NEMA 4X junction box is machine mounted and integrated into guarding <br>
                                    • Under cover gassing control with variable valve for use in seaming beverages <br>
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
            <!-- other products -->
            <div class="group relative shadow-xl p-4 justify-center align-content">
                <div class=" image-container grid grid-cols-1 gap-4 h-80 w-70 place-items-center ">
                    <img src="./src/img/psangelus/ANGELUS Legacy Series - Model 60L.jpg" alt="" class="image1" />
                    <img src="./src/img/psangelus/ANGELUS Legacy Series - Model 60L.1.jpg" alt="" class="image2" />
                </div>
                <div class="mt-4 flex justify-between w-70 ">
                    <h3 class="text-lg font-bold text-[#171717]">

                        ALS Can Seamer V-Series - Model 18V

                        <p class="text-sm font-light">
                            The Angelus V-Series Model 18V seamer is ideal for running cans with diameters from 200 to
                            300. With speeds from 500 to 2500 Cans Per Minute (CPM) and 18 seaming spindles, this
                            machine is optimized for high-speed beverage applications, ensuring a perfect transfer of
                            the can from the filler turrent onto the can feed extension.
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

                <!-- Modal -->

                <div id="modal-7"
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
                                <h2 id="dialog-title" class="text-lg font-medium text-[#171717] mb-4">ANGELUS
                                    Can Seamer V-Series - Model 18V
                                </h2>
                                <p class="text-sm text-gray-700 mb-4">
                                    <span class="font-semibold">ABOUT THIS MACHINE</span> <br><br>
                                    The Angelus V-Series Model 18V seamer is ideal for running cans with diameters from
                                    200 to 300. With speeds from 500 to 2500 Cans Per Minute (CPM) and 18 seaming
                                    spindles, this machine is optimized for high-speed beverage applications, ensuring a
                                    perfect transfer of the can from the filler turrent onto the can feed extension,
                                    without spilling product. Constructed from 304 stainless steel in all product
                                    contact areas, this machine offers a clean, sanitary design, well suited for these
                                    projects. This rotary machine can be configured for random infeed or filler
                                    connection.

                                    <br><br>

                                    <span class="font-semibold">PRODUCT DETAILS</span> <br><br>

                                    • Runs at speeds up to 500 -2500 Containers Per Minute (CPM) <br>
                                    • Provided with random infeed or filler connection, in either mechanical or servo
                                    synchro <br>
                                    • New and improved driven lower lifters <br>
                                    • Motorized turret height adjustment with digital readout <br>
                                    • TN-coated Angelloy® seaming rolls with ceramic bearings <br>
                                    • Easy-adjust chuck plate springs keep downtime to a minimum <br>
                                    • Industry-standard PLC and HMI controls, pilot devices, and E-Stop (Non-OEM) <br>
                                    • NEMA 12 electrical enclosure (standalone), with lockable disconnect ensures
                                    operator
                                    safety <br>
                                    • NEMA 4X junction box is machine mounted and integrated into guarding <br>
                                    • Under cover gassing control with variable valve for use in seaming beverages <br>
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
            <!-- other products -->
            <div class="group relative shadow-xl p-4 justify-center align-content">
                <div class=" image-container grid grid-cols-1 gap-4 h-80 w-70 place-items-center ">
                    <img src="./src/img/psangelus/ANGELUS Legacy Series - Model 60L.jpg" alt="" class="image1" />
                    <img src="./src/img/psangelus/ANGELUS Legacy Series - Model 60L.1.jpg" alt="" class="image2" />
                </div>
                <div class="mt-4 flex justify-between w-70 ">
                    <h3 class="text-lg font-bold text-[#171717]">

                        ALS Can Seamer V-Series - Model 18V

                        <p class="text-sm font-light">
                            The Angelus V-Series Model 18V seamer is ideal for running cans with diameters from 200 to
                            300. With speeds from 500 to 2500 Cans Per Minute (CPM) and 18 seaming spindles, this
                            machine is optimized for high-speed beverage applications, ensuring a perfect transfer of
                            the can from the filler turrent onto the can feed extension.
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

                <!-- Modal -->

                <div id="modal-7"
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
                                <h2 id="dialog-title" class="text-lg font-medium text-[#171717] mb-4">ANGELUS
                                    Can Seamer V-Series - Model 18V
                                </h2>
                                <p class="text-sm text-gray-700 mb-4">
                                    <span class="font-semibold">ABOUT THIS MACHINE</span> <br><br>
                                    The Angelus V-Series Model 18V seamer is ideal for running cans with diameters from
                                    200 to 300. With speeds from 500 to 2500 Cans Per Minute (CPM) and 18 seaming
                                    spindles, this machine is optimized for high-speed beverage applications, ensuring a
                                    perfect transfer of the can from the filler turrent onto the can feed extension,
                                    without spilling product. Constructed from 304 stainless steel in all product
                                    contact areas, this machine offers a clean, sanitary design, well suited for these
                                    projects. This rotary machine can be configured for random infeed or filler
                                    connection.

                                    <br><br>

                                    <span class="font-semibold">PRODUCT DETAILS</span> <br><br>

                                    • Runs at speeds up to 500 -2500 Containers Per Minute (CPM) <br>
                                    • Provided with random infeed or filler connection, in either mechanical or servo
                                    synchro <br>
                                    • New and improved driven lower lifters <br>
                                    • Motorized turret height adjustment with digital readout <br>
                                    • TN-coated Angelloy® seaming rolls with ceramic bearings <br>
                                    • Easy-adjust chuck plate springs keep downtime to a minimum <br>
                                    • Industry-standard PLC and HMI controls, pilot devices, and E-Stop (Non-OEM) <br>
                                    • NEMA 12 electrical enclosure (standalone), with lockable disconnect ensures
                                    operator
                                    safety <br>
                                    • NEMA 4X junction box is machine mounted and integrated into guarding <br>
                                    • Under cover gassing control with variable valve for use in seaming beverages <br>
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

    <!-- Script -->
    <script src="./src/js/modal.js"></script>

</body>

</html>
<?php

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="./src/styles/output.css" rel="stylesheet">
</head>

<body>

    <div class="w-full h-screen flex justify-center items-center">
        <div class="pb-10">
            <div class="group relative shadow-xl p-6 justify-center align-content ">
                <div class=" image-container grid grid-cols-1 gap-4 h-80 w-70 place-items-center ">
                    <img src="./src/img/psangelus/ANGELUS V-Series - Model 3V.jpg" alt="" class="image1" />
                    <img src="./src/img/psangelus/ANGELUS V-Series - Model 3V.0.jpg" alt="" class="image2" />
                </div>
                <div class="mt-4 flex justify-between w-70 ">
                    <h3 class="text-lg font-bold text-[#171717]">

                        ALS Can Seamer V-Series - Model 3V

                    </h3>


                </div>

                <div class="mt-4 flex justify-between w-70 gap-2">
                    <button type="button"
                        class="openModalBtn product-btn bg-[#101828] text-white mt-4 font-open-sans button-hover"
                        data-modal-id="modal-2">Request a Quote</button>
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

                        <div class="w-full p-12">
                            <form action="product-form.php" method="post">
                                <div class="container h-65vh">

                                    <h2 id="dialog-title" class=" text-lg font-medium text-[#171717] mb-4">
                                        ANGELUS
                                        Can Seamer V-Series - Model 3V
                                    </h2>

                                    <input type="hidden" name="product_name"
                                        value="ANGELUS Can Seamer V-Series - Model 3V">
                                    <input type="hidden" name="product_img"
                                        value="./src/img/psangelus/ANGELUS V-Series - Model 3V.jpg">
                                    <input type="hidden" name="product_desc" value=" The Angelus V-Series Model 3V seamer is ideal for running large 2- and 3-piece cans
                                        with diameters from 211 to 603. With speeds from 75 to 350 Cans Per Minute (CPM) and
                                        3 seaming spindles, this machine is well suited for seaming powdered food
                                        ingredients, powdered drinks, nutraceuticals, and powdered infant formula.
                                        Constructed of 304 stainless steel in all product contact areas, this machine
                                        offers a clean, sanitary design for food and beverage applications. This rotary machine
                                        can be configured for random infeed or filler connection.">

                                    <p id="product-description" class="text-sm text-gray-700 mb-2">
                                        <span class="font-semibold"> ABOUT THIS MACHINE </span>
                                        <select name="" id="" disabled="disabled"></select>
                                        <br>
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

                                    </p>

                                    <p class="text-sm text-gray-700 mb-4">
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
                                    </p>

                                </div>



                                <div class="mt-6  gap-2">

                                    <button type="submit"
                                        class="product-checkout bg-[#171717] text-white text-sm rounded">
                                        Proceed to Quotation
                                    </button>
                                    <button type="button" id="closeModalBtn"
                                        class="closeModalBtn product-checkout bg-[#171717] text-white text-sm rounded">
                                        Close
                                    </button>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>


    <div class="w-full h-screen flex justify-center items-center">
        <div class="pb-10">
            <div class="group relative shadow-xl p-6 justify-center align-content ">
                <div class=" image-container grid grid-cols-1 gap-4 h-80 w-70 place-items-center ">
                    <img src="./src/img/psangelus/ANGELUS V-Series - Model 4V.0.jpg" alt="" class="image1" />
                    <img src="./src/img/psangelus/ANGELUS V-Series - Model 4V.jpg" alt="" class="image2" />
                </div>
                <div class="mt-4 flex justify-between w-70 ">
                    <h3 class="text-lg font-bold text-[#171717]">

                        ALS Can Seamer V-Series - Model 4V

                    </h3>


                </div>

                <div class="mt-4 flex justify-between w-70 gap-2">
                    <button type="button"
                        class="openModalBtn product-btn bg-[#101828] text-white mt-4 font-open-sans button-hover"
                        data-modal-id="modal-3">Request a Quote</button>
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
                                <img src="./src/img/psangelus/ANGELUS V-Series - Model 4V.0.jpg" alt=""
                                    class="image1" />
                                <img src="./src/img/psangelus/ANGELUS V-Series - Model 4V.jpg" alt="" class="image2" />
                            </div>
                        </div>

                        <div class="w-full p-12">
                            <form action="product-form.php" method="post">
                                <div class="container h-65vh">

                                    <h2 id="dialog-title" class=" text-lg font-medium text-[#171717] mb-4">
                                        ANGELUS
                                        Can Seamer V-Series - Model 4V
                                    </h2>

                                    <input type="hidden" name="product_name"
                                        value="ANGELUS Can Seamer V-Series - Model 4V">
                                    <input type="hidden" name="product_img"
                                        value="./src/img/psangelus/ANGELUS V-Series - Model 4V.0.jpg">
                                    <input type="hidden" name="product_desc" value=" The Angelus V-Series Model 4V seamer is ideal for running large 2- and 3-piece cans
                                        with diameters from 211 to 603. With speeds from 75 to 350 Cans Per Minute (CPM) and
                                        3 seaming spindles, this machine is well suited for seaming powdered food
                                        ingredients, powdered drinks, nutraceuticals, and powdered infant formula.
                                        Constructed of 304 stainless steel in all product contact areas, this machine
                                        offers a clean, sanitary design for food and beverage applications. This rotary machine
                                        can be configured for random infeed or filler connection.">

                                    <p class="text-sm text-gray-700 mb-2">
                                        <span class="font-semibold"> ABOUT THIS MACHINE </span>
                                        <select name="" id="" disabled="disabled"></select>
                                        <br>
                                        The Angelus V-Series Model 4V seamer is ideal for running large 2- and 3-piece
                                        cans
                                        with diameters from 211 to 603. With speeds from 75 to 350 Cans Per Minute (CPM)
                                        and
                                        3 seaming spindles, this machine is well suited for seaming powdered food
                                        ingredients, powdered drinks, nutraceuticals, and powdered infant formula.
                                        Constructed of 304 stainless steel in all product contact areas, this machine
                                        offers a clean, sanitary design for food and beverage applications. This rotary
                                        machine
                                        can be configured for random infeed or filler connection.

                                        <br><br>

                                    </p>

                                    <p class="text-sm text-gray-700 mb-4">
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
                                    </p>

                                </div>



                                <div class="mt-6  gap-2">

                                    <button type="submit"
                                        class="product-checkout bg-[#171717] text-white text-sm rounded">
                                        Proceed to Quotation
                                    </button>
                                    <button type="button" id="closeModalBtn"
                                        class="closeModalBtn product-checkout bg-[#171717] text-white text-sm rounded">
                                        Close
                                    </button>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <!-- <div class="w-full h-screen flex justify-center items-center">
        <div class="grid grid-cols-1 gap-4 h-96 w-80 shadow-xl place-items-center">
            <div class="image-wrapper">
                <img src="./src/img/product/seamers/Angelus Legacy Series Can Seamer- Model 10P.0.jpg" alt="">
            </div>
            <div class="text-center p-4">
                <h2 class="text-lg font-bold">Angelus Legacy Series Can Seamer</h2>
                <p class="text-gray-600">Model 10P</p>
            </div>
        </div>
    </div> -->

    <!-- <div class="w-full h-screen flex justify-center items-center">
        <div class=" image-container grid grid-cols-1 gap-4 h-96 w-80 shadow-xl place-items-center ">
            <img src="./src/img/product/seamers/Angelus Legacy Series Can Seamer- Model 10P.jpg" alt=""
                class="image1" />
            <img src="./src/img/product/seamers/Angelus Legacy Series Can Seamer- Model 10P.0.jpg" alt=""
                class="image2" />
        </div>
    </div> -->

    <!-- Trigger Button Wrapper -->
    <!-- <div class="w-full h-screen flex justify-center items-center">
        <div class="flex justify-center items-center w-half">
            <button id="openModalBtn" class="product-btn bg-[#f3f4f6] text-[#171717] text-sm font-semibold">
                Open Dialog
            </button>
        </div>

       
        <div id="myModal" class="hidden fixed inset-0 z-10 bg-gray-500/75 flex items-center justify-center"
            role="dialog" aria-modal="true">
          
            <div
                class="grid grid-flow-col grid-rows-1 modal-size bg-white rounded-lg shadow-xl max-w-md p-20 relative z-20 ">
          
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
    </div> -->

    <!-- <div
        class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 px-48 custom-padding h-screen md:h-auto w-full justify-center place-items-center">
        <div>
           
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
    </div> -->

    <!-- <div class="w-full h-screen flex justify-center items-center">
        <div class="container-fluid" id="main">
            <div class="card" id="form-card">
                <div class="row g-0" id="form-row">
                    <div class="col" id="unang-col">
                        <form action="main-lcode.php" method="POST">
                            <p class="form-business-name"><span>DALINO</span>&nbsp;DENTAL CLINIC</p>
                            <p class="form-title">Login</p>
                            <?php
                            if (isset($_SESSION['status'])) {
                            ?>
                                <div class="alert alert-success"
                                    style="height: 2rem; padding: 5%; display: flex; align-items: center; justify-content:center;">
                                    <p class="verify" style="font-size:12px; margin: 0 auto; padding: 0;">
                                        <?= $_SESSION['status']; ?></p>
                                </div>
                            <?php
                                unset($_SESSION['status']);
                            }
                            ?>
                            <?php if (isset($_GET['error'])) { ?>
                                <div class="alert alert-danger"
                                    style="margin: 0 auto; padding: 2%; display: flex; justify-content: center; align-items: center;"
                                    role="alert">
                                    <?= htmlspecialchars($_GET['error']) ?>
                                </div>
                            <?php } ?>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Your email address" aria-describedby="emailHelp" autocomplete="off">
                            </div>
                            <div class="mb-4">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" id="password"
                                    placeholder="Enter password" autocomplete="off">

                            </div>
                            <button type="submit" id="form-btn" name="submit" value="Login" class="btn btn-primary">Log
                                in</button>

                            <p class="dh-acc mt-4"> Don't have an account? <span class="dh-accs"><a
                                        href="main-regis.php">Sign Up.</a></span> </p>

                        </form>
                    </div>

                    <div class="col-lg-6" id="pangalawang-col">

                        <div class="col1img">
                            <img src="./assets/image/dalino_logo.png"><span class="dalino">&nbsp;Dalino Dental
                                Clinic</span>
                        </div>
                        <p class="discover-power mt-4">Discover the power <br>
                            of healthy,
                            <br>beautiful smile with us!
                        </p>

                        <img src="./assets/image/dalino_logo.png">

                    </div>
                </div>
            </div>

            <svg id="background-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#a5c0e8" fill-opacity="1"
                    d="M0,96L48,133.3C96,171,192,245,288,256C384,267,480,213,576,192C672,171,768,181,864,186.7C960,192,1056,192,1152,170.7C1248,149,1344,107,1392,85.3L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
                </path>
            </svg>

        </div>
    </div> -->

    <!-- Script -->
    <script src="./src/js/modal.js"></script>

    <!-- <script>
        
        document.getElementById('productName').value =
            document.getElementById('dialog-title').innerText.trim();

     
        document.getElementById('productImg').value =
            document.querySelector('.image1').getAttribute('src');

       
        document.getElementById('productDesc').value =
            document.getElementById('product-description').innerHTML.trim();
    </script> -->

</body>

</html>
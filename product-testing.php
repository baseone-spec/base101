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

    <!-- Script -->
    <script src="./src/js/modal.js"></script>

</body>

</html>
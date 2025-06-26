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

    <!-- modal -->
    <div class="w-full h-screen flex justify-center items-center">
        <!-- Trigger button -->
        <button id="openModalBtn" class="product-btn bg-[#f3f4f6] text-[#171717] text-sm font-semibold">
            Open Dialog
        </button>

        <!-- Modal -->
        <div id="myModal" class="hidden fixed inset-0 z-10 overflow-y-auto" aria-labelledby="dialog-title" role="dialog"
            aria-modal="true">
            <!-- Overlay -->
            <div class="fixed inset-0 bg-gray-500/75 transition-opacity" aria-hidden="true"></div>

            <!-- Modal content wrapper -->
            <div class="flex items-center justify-center min-h-screen p-4 text-center">
                <div class="bg-white rounded-lg shadow-xl w-full max-w-md p-6 relative z-20">
                    <h2 id="dialog-title" class="text-lg font-medium text-gray-900 mb-4">Modal Title</h2>
                    <p class="text-sm text-gray-700 mb-4">This is a modal dialog. Click the button below to close it.
                    </p>
                    <button id="closeModalBtn" class="bg-red-500 text-white px-4 py-2 rounded">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Script -->
    <script src="./src/js/modal.js"></script>

</body>

</html>
<?php

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="./src/styles/output.css" rel="stylesheet">
</head>

<body>

    <div class="w-full h-screen flex items-center justify-center">
        <!-- Cart icon -->
        <i id="cart-icon" class="fa-solid fa-cart-shopping cursor-pointer text-3xl"></i>


        <!-- Sidebar -->
        <div id="cart-sidebar" class="fixed top-0 right-0 w-80 h-screen bg-white shadow-lg z-50 p-6 
               transition-transform duration-300 translate-x-full">

            <!-- Close button -->
            <button id="close-cart" class="absolute top-4 right-4 p-4 text-gray-600 hover:text-black text-2xl">
                <i class="fa-solid fa-xmark"></i>
            </button>

            <h2 class="text-xl font-bold mb-4 mt-10">Your Cart</h2>
            <p>No items in cart.</p>
        </div>
    </div>


    <script>
        const cartIcon = document.getElementById('cart-icon');
        const cartSidebar = document.getElementById('cart-sidebar');
        const closeCart = document.getElementById('close-cart');

        // open sidebar
        cartIcon.addEventListener('click', () => {
            cartSidebar.classList.remove('translate-x-full');
            cartSidebar.classList.add('translate-x-0');
        });

        // close sidebar
        closeCart.addEventListener('click', () => {
            cartSidebar.classList.remove('translate-x-0');
            cartSidebar.classList.add('translate-x-full');
        });
    </script>



</body>

</html>
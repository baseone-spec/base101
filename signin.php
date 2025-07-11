<?php
include('header.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./src/styles/output.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <div class="container h-85vh w-full align-items-center bg-no-repeat bg-cover bg-center"
        style="background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 10)), url('src/img/Base1 Warehouse.jpg'); background-size: cover;">
        <div class="h-full justify-center align-content place-items-center">

            <div
                class="card rounded-lg bg-white shadow-xl w-half h-50vh justify-center align-content place-items-center  ">
                <h2 class="text-center text-2xl font-bold">Sign in to your account</h2>

                <div class="mt-12 sm:mx-auto sm:w-full sm:max-w-sm justify-center align-content place-items-center  ">
                    <form class="space-y-6" action="#" method="POST">
                        <div class="">
                            <label for="email" class="block text-base font-sm">Email address</label>
                            <div class="mt-2 w-80">
                                <input type="email" name="email" id="email" autocomplete="email" required
                                    placeholder="Enter your email"
                                    class="block w-full rounded bg-white px-3 py-1.5 text-base sm:text-sm placeholder-black outline-1 outline-gray-300 focus:outline-2 focus:-outline-offset-2 " />

                            </div>
                        </div>

                        <div>
                            <div class="mt-4 w-80">
                                <div class="flex items-center justify-between ">
                                    <label for="password"
                                        class="block text-base font-sm  text-gray-900">Password</label>
                                    <div class="text-sm">
                                        <a href="#" class="font-semibold text-[#D00000]">Forgot
                                            password?</a>
                                    </div>
                                </div>
                                <div class="mt-2 w-80 relative">
                                    <!-- Password Input with padding to make space for icon -->
                                    <div class="flex items-center w-full gap-1">
                                        <input type="password" name="password" id="password"
                                            autocomplete="current-password" required placeholder="Enter your password"
                                            class="block w-full rounded bg-white px-3 py-1.5 text-base sm:text-sm placeholder-black outline-1 -outline-offset-1 outline-gray-300 focus:outline-2 focus:-outline-offset-2" />


                                        <a href="./signup.php" id="password-toggle"
                                            class="ml-2 text-gray-600 hover:text-[#D00000] transition-colors"
                                            aria-label="Toggle password visibility">
                                            <i class="fa-solid fa-eye" id="password-icon"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </form>
                </div>

                <div class="mt-8 w-80">
                    <button type="submit" class="product-btn py-2 px-4  button-hover bg-[#D00000] text-white">
                        Sign In
                    </button>
                </div>

                <div class="mt-4 text-center">
                    <p class="text-sm text-gray-600">
                        Don't have an account?
                        <a href="signup.php" class="font-semibold text-[#D00000]">Sign up</a>
                    </p>
                </div>
            </div>


            <script src="./src/js/pass-icon.js"></script>
</body>

</html>
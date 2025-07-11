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
                class="card rounded-lg bg-white shadow-xl w-half h-70vh justify-center align-content place-items-center  ">
                <h2 class="text-center text-3xl font-bold text-[#D00000] ">SIGN UP</h2>
                <p class="text-sm">Create your account </p>

                <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-sm justify-center align-content place-items-center">
                    <form class="space-y-6" action="#" method="POST">
                        <div>
                            <!-- <label for="firstname" class="block text-base font-sm">First Name</label> -->
                            <div class=" w-80">
                                <input type="text" name="firstname" id="firstname" required placeholder="First name"
                                    class="block w-full rounded bg-white px-3 py-1.5 text-base sm:text-sm placeholder-black outline-1 outline-gray-300 focus:outline-2 focus:-outline-offset-2" />
                            </div>
                        </div>
                        <div>
                            <!-- <label for="lastname" class="block text-base font-sm">Last Name</label> -->
                            <div class="mt-4 w-80">
                                <input type="text" name="lastname" id="lastname" required placeholder="Last Name"
                                    class="block w-full rounded bg-white px-3 py-1.5 text-base sm:text-sm placeholder-black outline-1 outline-gray-300 focus:outline-2 focus:-outline-offset-2" />
                            </div>
                        </div>
                        <div>
                            <!-- <label for="email" class="block text-base font-sm">Email Address</label> -->
                            <div class="mt-4 w-80">
                                <input type="email" name="email" id="email" autocomplete="email" required
                                    placeholder="Email"
                                    class="block w-full rounded bg-white px-3 py-1.5 text-base sm:text-sm placeholder-black outline-1 outline-gray-300 focus:outline-2 focus:-outline-offset-2" />
                            </div>
                        </div>
                        <div>
                            <!-- <label for="phone" class="block text-base font-sm">Phone Number</label> -->
                            <div class="mt-4 w-80">
                                <input type="tel" name="phone" id="phone" required placeholder="Phone Number"
                                    class="block w-full rounded bg-white px-3 py-1.5 text-base sm:text-sm placeholder-black outline-1 outline-gray-300 focus:outline-2 focus:-outline-offset-2" />
                            </div>
                        </div>
                        <div>
                            <!-- <label for="password" class="block text-base font-sm text-gray-900">Password</label> -->
                            <div class="mt-4 w-80 relative">
                                <div class="flex items-center w-full gap-1">
                                    <input type="password" name="password" id="password" autocomplete="new-password"
                                        required placeholder="Enter your password"
                                        class="block w-full rounded bg-white px-3 py-1.5 text-base sm:text-sm placeholder-black outline-1 -outline-offset-1 outline-gray-300 focus:outline-2 focus:-outline-offset-2" />
                                    <button type="button" id="password-toggle"
                                        class="ml-2 text-gray-600 hover:text-[#D00000] transition-colors"
                                        aria-label="Toggle password visibility">
                                        <i class="fa-solid fa-eye" id="password-icon"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div>
                            <!-- <label for="confirm_password" class="block text-base font-sm text-gray-900">Confirm
                                Password</label> -->
                            <div class="mt-4 w-80 relative">
                                <div class="flex items-center w-full gap-1">
                                    <input type="password" name="confirm_password" id="confirm_password"
                                        autocomplete="new-password" required placeholder="Confirm your password"
                                        class="block w-full rounded bg-white px-3 py-1.5 text-base sm:text-sm placeholder-black outline-1 -outline-offset-1 outline-gray-300 focus:outline-2 focus:-outline-offset-2" />
                                    <button type="button" id="confirm-password-toggle"
                                        class="ml-2 text-gray-600 hover:text-[#D00000] transition-colors"
                                        aria-label="Toggle confirm password visibility">
                                        <i class="fa-solid fa-eye" id="confirm-password-icon"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="mt-8 w-80">
                            <button type="submit"
                                class="product-btn py-2 px-4 button-hover bg-[#D00000] text-white w-full">
                                Register
                            </button>
                        </div>
                    </form>
                </div>



                <div class="mt-4 text-center">
                    <p class="text-sm text-gray-600">
                        Already have an account?
                        <a href="signin.php" class="font-semibold text-[#D00000]">Sign in</a>
                    </p>
                </div>
            </div>


            <script src="./src/js/pass-icon.js"></script>
</body>

</html>
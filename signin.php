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

    <div class="container h-85vh w-full align-items-center  p-20">
        <div class="grid grid-flow-col grid-rows-1 px-40 h-full">
            <div class="">background to dito</div>


            <div class="flex justify-center align-content place-items-center ">
                <div class="card bg-white rounded-lg  shadow-lg w-100 h-55vh p-20 ">
                    <h2 class="text-center text-2xl font-bold">Sign in to your account</h2>

                    <div
                        class="mt-12 sm:mx-auto sm:w-full sm:max-w-sm justify-center align-content place-items-center  ">
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
                                    <div class="mt-2 w-80">
                                        <input type="password" name="password" id="password"
                                            autocomplete="current-password" required placeholder="Enter your password"
                                            class="block w-full rounded bg-white px-3 py-1.5 text-base sm:text-sm placeholder-black outline-1 -outline-offset-1 outline-gray-300 focus:outline-2 focus:-outline-offset-2 " />
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

</body>

</html>
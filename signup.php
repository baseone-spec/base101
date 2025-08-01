<?php
include('header.php');

include('conn/dbcon.php');

session_start();

if (isset($_SESSION['first_name'])) {
    header("Location: ./client/customer_page.php"); // or dashboard
    exit();
}


if (isset($_POST['submit'])) {

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email_address = $_POST['email_address'];
    $phone_num = $_POST['phone_num'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    $check_query = mysqli_query($con, "SELECT * FROM user_registration WHERE email_address = '$email_address'");
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        if (empty($first_name) || empty($last_name) || empty($email_address) || empty($password) || empty($confirm_password)) {

            echo '<div class= "bg-[#ffe8e8] text-[#D00000] text-center px-4 py-3 p-5 role="alert">
                <strong class="font-bold">Error: All fields are required.</strong>
              </div>';
            // echo "<script>alert('All fields are required');</script>";
        } elseif (strlen($_POST['password']) < 6) { // check

            echo '<div class= "bg-[#ffe8e8] text-[#D00000] text-center px-4 py-3 p-5 role="alert">
                <strong class="font-bold">Error: Password must be at least 6 characters.</strong>
              </div>';
            // echo "<script>alert('Password must be at least 6 characters');</script>";
        } elseif ($password !== $confirm_password) {
            echo '<div class= "bg-[#ffe8e8] text-[#D00000] text-center px-4 py-3 p-5 role="alert">
                <strong class="font-bold">Error: Passwords do not match.</strong>
              </div>';
        } elseif (!filter_var($email_address, FILTER_VALIDATE_EMAIL)) { // check

            echo '<div class= "bg-[#ffe8e8] text-[#D00000] text-center px-4 py-3 p-5 role="alert">
                <strong class="font-bold">Error: Please enter a valid email address.</strong>
              </div>';
            // echo "<script>alert('Please enter a valid email address');</script>";
        } elseif (mysqli_num_rows($check_query) > 0) { // check

            echo '<div class= "bg-[#ffe8e8] text-[#D00000] text-center px-4 py-3 p-5 role="alert">
                <strong class="font-bold">Error: Email already exists.</strong>
              </div>';

            // echo "<script>alert('Email already exists');</script>";
        } elseif (strpos($email_address, '.com') === false) {

            echo '<div class= "bg-[#ffe8e8] text-[#D00000] text-center px-4 py-3 p-5 role="alert">
                <strong class="font-bold">Error: Please enter a valid email address.</strong>
              </div>';

            // echo "<script>alert('Please enter a valid email address');</script>";  // check
        } else {


            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            $sql = "INSERT INTO user_registration (first_name, last_name, email_address, phone_num, password)
                VALUES ('$first_name', '$last_name', '$email_address', '$phone_num', '$hashed_password')";

            $query_run = mysqli_query($con, $sql);

            // if ($query_run) {
            //     echo "<script>alert('Registration successful'); window.location.href='signin.php';</script";
            //     header("Location: signin.php");
            // } else {
            //     echo "<script>alert('Registration failed');</script>";
            // }
            // mysqli_close($con);

            if ($query_run) {
                echo "
                        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                        <script>
                            Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: 'Registration successful!',
                                showConfirmButton: false,
                                timer: 1500
                            }).then(() => {
                                window.location.href = 'signin.php';
                            });
                        </script>";
            } else {
                echo "
                        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                        <script>
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Registration failed. Please try again.'
                            });
                        </script>";
            }
        }
    }
}
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

    <!-- Include SweetAlert2 CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>

    <div class="container h-85vh w-full align-items-center bg-no-repeat bg-cover bg-center"
        style="background-image: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 10)), url('src/img/bg-billboard.jpg'); background-size: cover;">
        <div
            class="h-full flex justify-end items-center xl:px-48 lg:px-24 md:px-10 sm:px-6 px-4 lg:align-content lg:justify-center">
            <div
                class="card rounded-lg bg-white shadow-xl w-half h-70vh justify-center align-content place-items-center mr-16">
                <h2 class="text-center text-3xl font-bold text-[#D00000] ">SIGN UP</h2>
                <p class="text-sm">Create your account </p>

                <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-sm justify-center align-content place-items-center">
                    <form class="space-y-6" action="./signup.php" method="POST">
                        <div>
                            <div class=" w-80">
                                <input type="text" name="first_name" id="firstname" required placeholder="First name"
                                    class="block w-full rounded bg-white px-3 py-1.5 text-base sm:text-sm placeholder-black outline-1 outline-gray-300 focus:outline-2 focus:-outline-offset-2 "
                                    autocomplete="first_name" />
                            </div>
                        </div>
                        <div>
                            <div class="mt-4 w-80">
                                <input type="text" name="last_name" id="lastname" required placeholder="Last Name"
                                    class="block w-full rounded bg-white px-3 py-1.5 text-base sm:text-sm placeholder-black outline-1 outline-gray-300 focus:outline-2 focus:-outline-offset-2
                                    autocomplete=" last_name"" />
                            </div>
                        </div>
                        <div>
                            <div class="mt-4 w-80">
                                <input type="email" name="email_address" id="email_address" autocomplete="email"
                                    required placeholder="Email Address"
                                    class="block w-full rounded bg-white px-3 py-1.5 text-base sm:text-sm placeholder-black outline-1 outline-gray-300 focus:outline-2 focus:-outline-offset-2" />
                            </div>
                        </div>
                        <div>
                            <div class="mt-4 w-80">
                                <input type="tel" name="phone_num" id="phone_num" required placeholder="Phone Number"
                                    class="block w-full rounded bg-white px-3 py-1.5 text-base sm:text-sm placeholder-black outline-1 outline-gray-300 focus:outline-2 focus:-outline-offset-2" />
                            </div>
                        </div>
                        <div>
                            <!-- First Password -->
                            <div class="mt-4 flex items-center w-full gap-1">
                                <input type="password" name="password" id="password" autocomplete="new-password"
                                    required placeholder="Enter your password"
                                    class="block w-full rounded bg-white px-3 py-1.5 text-base sm:text-sm placeholder-black outline-1 outline-gray-300 focus:outline-2 focus:-outline-offset-2 mr-4" />
                                <button type="button" id="password-toggle" aria-label="Toggle password visibility">
                                    <i class="fa-solid fa-eye" id="password-icon"></i>
                                </button>
                            </div>


                            <!-- Confirm Password -->
                            <div class="mt-4 flex items-center w-full gap-1">
                                <input type="password" name="confirm_password" id="password1"
                                    autocomplete="new-password" required placeholder="Confirm your password"
                                    class="block w-full rounded bg-white px-3 py-1.5 text-base sm:text-sm placeholder-black outline-1 outline-gray-300 focus:outline-2 focus:-outline-offset-2 mr-4" />
                                <button type="button" id="password-toggle1" aria-label="Toggle password visibility">
                                    <i class="fa-solid fa-eye" id="password-icon1"></i>
                                </button>
                            </div>
                        </div>

                        <!-- <div>
                            <p class="text-sm max-w-6xl lg:max-w-6xl md:max-w-6xl sm:max-w-6xl">
                                By signing up, you agree to our
                                <a href="#" class="font-semibold text-[#D00000]">Terms of Service</a> and
                                <a href="#" class="font-semibold text-[#D00000]">Privacy Policy</a>.
                            </p>
                        </div> -->

                        <div class="mt-8 w-80">
                            <button type="submit" name="submit"
                                class="product-btn py-2 px-4 button-hover bg-[#D00000] text-white w-full">
                                Register
                            </button>
                            <div class="mt-4 text-center">
                                <p class="text-sm text-gray-600">
                                    Already have an account?
                                    <a href="signin.php" class="font-semibold text-[#D00000]">Sign in</a>
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="./src/js/pass-icon.js"></script>

</body>

</html>
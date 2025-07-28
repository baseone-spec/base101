<?php
include('header.php');
include('conn/dbcon.php');
session_start();

if (isset($_POST['submit'])) {

    $email_address = trim($_POST['email_address']);
    $password = trim($_POST['password']);

    if (!empty($email_address) && !empty($password)) {

        $stmt = $con->prepare("SELECT * FROM user_registration WHERE email_address = ?");
        $stmt->bind_param("s", $email_address);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($user = $result->fetch_assoc()) {
            // Verify hashed password
            if (password_verify($password, $user['password'])) {

                // Save user name in session
                $_SESSION['first_name'] = $user['first_name'];
                $_SESSION['last_name'] = $user['last_name'];

                // Log login event
                $status = "login";
                $date = date("Y-m-d");
                $time = date("h:i a");

                $name = $user['first_name'] . ' ' . $user['last_name'];
                $logStmt = $con->prepare("INSERT INTO user_logs (name, status, time, date) VALUES (?, ?, ?, ?)");
                $logStmt->bind_param("ssss", $name, $status, $time, $date);
                $logStmt->execute();

                // Success popup and redirect
                echo "
                <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                <script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Signed in successfully!',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(() => {
                        window.location.href = 'index.php';
                    });
                </script>";
                exit();
            } else {
                $_SESSION['status'] = "Incorrect password.";
                echo "<script>alert('Incorrect password.');</script>";
            }
        } else {
            $_SESSION['status'] = "User not found.";
            echo "<script>alert('User not found');</script>";
        }
    } else {
        $_SESSION['status'] = "All fields are required.";
        echo "<script>alert('All fields are required.');</script>";
    }

    // Redirect back if failed
    header("Location: index.php");
    exit();
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
</head>

<body>

    <div class="container h-85vh w-full align-items-center bg-no-repeat bg-cover bg-center"
        style="background-image: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 10)), url('src/img/bg-billboard.jpg'); background-size: cover;">
        <div
            class="h-full flex justify-end items-center xl:px-40 lg:px-24 md:px-10 sm:px-6 px-4 lg:align-content lg:justify-center">

            <div
                class="card rounded-lg bg-white shadow-xl max-w-2xl h-auto p-10 justify-center align-content place-items-center ">
                <h2 class="text-center text-3xl font-bold text-[#D00000] ">SIGN IN</h2>
                <p class="text-sm">Sign in to your account </p>

                <div class="mt-12 sm:mx-auto sm:w-full sm:max-w-sm justify-center align-content place-items-center  ">
                    <form class="space-y-6" action="./signin.php" method="POST">
                        <div class="">
                            <label for="email" class="block text-base font-sm">Email address</label>
                            <div class="mt-2 w-80">
                                <input type="email" name="email_address" id="email_address" autocomplete="email"
                                    required placeholder="Enter your email"
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

                                    <div class="flex items-center w-full gap-1">
                                        <input type="password" name="password" id="password2"
                                            autocomplete="current-password" required placeholder="Enter your password"
                                            class="block w-full rounded bg-white px-3 py-1.5 text-base sm:text-sm placeholder-black outline-1 -outline-offset-1 outline-gray-300 focus:outline-2 focus:-outline-offset-2" />


                                        <button type="button" id="password-toggle2"
                                            aria-label="Toggle password visibility">
                                            <i class="fa-solid fa-eye" id="password-icon2"></i>
                                        </button>
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

        </div>
    </div>


    <script src="./src/js/pass-icon.js"></script>
</body>

</html>
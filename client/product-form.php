<?php
include('../conn/dbcon.php');

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['back'])) {
    header("Location: ../client/customer_shop.php");
    exit();
}


$productName = $_POST['product_name'] ?? '';
$productImg  = $_POST['product_img'] ?? '';
$productDesc = $_POST['product_desc'] ?? '';

if (isset($_POST['sendQuote'])) {
    $productName = $_POST['product_name'];
    $companyName = $_POST['company-name'];
    $productQuantity = $_POST['product-quantity'];
    $country = $_POST['country'];
    $streetAddress = $_POST['street-address'];
    $city = $_POST['city'];
    $stateProvince = $_POST['state-province'];
    $zipPostalCode = $_POST['zip-postal-code'];
    $emailAddress = $_POST['email-address'];
    $phoneNumber = $_POST['contact'];
    $inquiry = $_POST['inquiry'];
    $date = date("Y-m-d");

    date_default_timezone_set("Asia/Manila");

    // Validate required fields
    if (
        empty($productName) || empty($companyName) || empty($productQuantity) ||
        empty($country) || empty($streetAddress) || empty($city) ||
        empty($stateProvince) || empty($zipPostalCode) || empty($emailAddress) || empty($phoneNumber)
    ) {
        echo "Please fill in all required fields.";
    } else {
        // Prepare and execute the SQL statement
        $stmt = $con->prepare("INSERT INTO rfq (product_name, company_name, product_quantity, inquiry, country, street_address, city, state_province, zip_postal_code, email_address, contact, date) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssssssss", $productName, $companyName, $productQuantity, $inquiry, $country, $streetAddress, $city, $stateProvince, $zipPostalCode, $emailAddress, $phoneNumber, $date);

        if ($stmt->execute()) {
            echo "Quotation submitted successfully.";
        } else {
            echo "Error submitting quotation.";
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../src/styles/output.css" rel="stylesheet">
    <!-- Include SweetAlert2 CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="bg-[#FAFAFA]">

    <nav class="shadow-md h-24 flex items-center justify-between px-20 bg-white">
        <div class="logo" style="width: 120px;">
            <img src="../src//img//base1 logo.png" alt="Baseone Industrial Sales Logo">
        </div>
    </nav>

    <div class="grid grid-cols-2 px-40 gap-20">
        <div class="col-span-1  py-16 ">
            <form method="POST" action="product-form.php" id="backForm" class=" w-full">

                <input type="hidden" name="product_name" value="<?php echo $productName; ?>">
                <input type="hidden" name="product_img" value="<?php echo $productImg; ?>">
                <input type="hidden" name="product_desc" value="<?php echo htmlspecialchars($productDesc); ?>">

                <p class="font-open-sans text-xl font-bold mb-2">Shipping Info</p>

                <label for="company-name" class="block text-sm/6 font-normal text-gray-900">Company Name:</label>
                <div class="mt-2">
                    <input id="company-name" type="text" name="company-name" autocomplete="none"
                        class=" rounded-lg block w-full bg-white px-3 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
                </div>


                <label for="product-quantity" class="mt-4 block text-sm/6 font-normal text-gray-900">Product
                    Quantity:</label>
                <div class="mt-2">
                    <input id="product-quantity" type="text" name="product-quantity" autocomplete="none"
                        class=" rounded-lg block w-full bg-white px-3 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
                </div>

                <p class="font-open-sans text-xl font-bold mt-6">Add Shipping Delivery address</p>
                <group class="grid grid-cols-2 gap-4">
                    <div>
                        <label for="country" class="block text-sm/6 font-normal text-gray-900 mt-2">Country</label>
                        <div class="mt-2 grid grid-cols-1">
                            <select id="country" name="country" autocomplete="none"
                                class="rounded-lg block w-full bg-white px-4 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                <option>Philippines</option>
                                <option>Canada</option>
                                <option>Mexico</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <label for="street-address" class="mt-2 block text-sm/6 font-normal text-gray-900">Street
                            Address:</label>
                        <div class="mt-2">
                            <input id="street-address" type="text" name="street-address" autocomplete="none"
                                class=" rounded-lg block w-full bg-white px-3 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
                        </div>
                    </div>
                </group>

                <group class="grid grid-cols-3 gap-4 mt-4">
                    <div>
                        <label for="city" class="block text-sm/6 font-normal text-gray-900">City:</label>
                        <div class="mt-2">
                            <input id="city" type="text" name="city" autocomplete="none"
                                class=" rounded-lg block w-full bg-white px-3 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
                        </div>
                    </div>
                    <div>
                        <label for="state-province" class="block text-sm/6 font-normal text-gray-900">State /
                            Province:</label>
                        <div class="mt-2">
                            <input id="state-province" type="text" name="state-province" autocomplete="none"
                                class=" rounded-lg block w-full bg-white px-3 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
                        </div>
                    </div>
                    <div>
                        <label for="zip-postal-code" class="block text-sm/6 font-normal text-gray-900">ZIP / Postal
                            Code:</label>
                        <div class="mt-2">
                            <input id="zip-postal-code" type="text" name="zip-postal-code" autocomplete="none"
                                class=" rounded-lg block w-full bg-white px-3 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
                        </div>
                    </div>
                </group>
                <group class="grid grid-cols-2 gap-4 mt-4">
                    <div>
                        <label for="email-address" class="block text-sm/6 font-normal text-gray-900 mt-4">Email
                            Address:</label>
                        <div class="mt-2">
                            <input id="email-address" type="text" name="email-address" autocomplete="none"
                                class="rounded-lg block w-full bg-white px-3 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
                        </div>
                    </div>

                    <div>
                        <label for="contact" class="block text-sm/6 font-normal text-gray-900 mt-4">Contact:
                        </label>
                        <div class="mt-2">
                            <input id="contact" type="text" name="contact" autocomplete="none"
                                class="rounded-lg block w-full bg-white px-3 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
                        </div>
                    </div>
                </group>

                <label for="inquiry" class="block text-sm/6 font-normal text-gray-900 mt-4">Leave an inquiry:
                </label>
                <div class="mt-2">
                    <input id="inquiry" type="text" name="inquiry" autocomplete="none"
                        class="rounded-lg block w-full bg-white px-3 py-8 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
                </div>


                <group class="grid grid-flow-col grid-rows-1 gap-4 justify-end">
                    <button type="button" id="backBtn"
                        class="mt-8 w-50 bg-[#2D2D2D] text-white font-normal py-2 px-4 rounded-lg hover:bg-[#1A1A1A] transition duration-300">
                        Back
                    </button>
                    <input type="hidden" name="back" value="1">

                    <button type="submit" name="sendQuote"
                        class="mt-8 w-50 bg-[#2D2D2D] text-white font-normal py-2 px-4 rounded-lg hover:bg-[#1A1A1A] transition duration-300">
                        Submit Quotation
                    </button>
                </group>


            </form>
        </div>

        <div class="col py-16">
            <div class="rounded-lg shadow-md w-full h-60vh  bg-white p-8">
                <p class="font-source-sans text-xl font-bold mb-4">Product for Quotation Summary</p>

                <!-- image -->

                <form method="post" action="submit.php">
                    <p><strong>Product Name:</strong> <?php echo htmlspecialchars($productName); ?></p>

                    <?php if ($productImg): ?>
                    <img src="<?php echo $productImg; ?>" class="mt-4 mb-5" alt="Product Image"
                        style="max-width:200px;">
                    <?php endif; ?>

                    <h3>Description:</h3>
                    <div style=""><?php echo $productDesc; ?></div>

                </form>
            </div>

        </div>
    </div>

    <script>
    document.getElementById("backBtn").addEventListener("click", function() {
        Swal.fire({
            title: "Are you sure?",
            // text: "You will be redirected to Customer Shop.",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#222222",
            cancelButtonColor: "#222222",
            confirmButtonText: "Yes, go back"
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById("backForm").requestSubmit();
            }
        });
    });
    </script>


</body>

</html>
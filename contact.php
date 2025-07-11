<?php
include('header.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>
    <!-- button -->
    <button onclick="topFunction()" id="myBtn" title="Go to top">^</button>

    <!-- contact us start's here  -->
    <div class="container h-auto w-full ">
        <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-2 px-40">
            <div class="align-content justify-center p-12">
                <h3 class="text-4xl font-bold text-[#D00000] mb-5">GET IN TOUCH</h3>
                <p class="text-base font-medium text-[#171717] mb-5">
                    USE OUR CONTACT FORM FOR ALL INFORMATION REQUESTS OR CONTACT US DIRECTLY USING THE <br>
                    CONTACT INFORMATION BELOW. FEEL FREE TO GET IN TOUCH WITH US VIA EMAIL OR PHONE.
                </p>


                <div class="contact-info mb-2">
                    <i class="fa-solid fa-phone"></i>
                    <span class="contact-text"> +632 398 5101 </span>
                </div>

                <div class="contact-info mb-2">
                    <i class="fa-solid fa-envelope"></i>
                    <span class="contact-text"> sales@baseoneindustrial.com </span>
                </div>

                <div class="contact-info mb-2">
                    <i class="fa-solid fa-location-dot"></i>
                    <span class="contact-text"> 743 Lot 2 Building 3, Good Harvest Complex, C. Raymundo Avenue,
                        Maybunga, Pasig, 1607, Philippines </span>
                </div>

                <div class="container rounded-lg p-5">
                    <div class="iframe mt-5 mb-5">

                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d287.0041566792365!2d121.08484655193944!3d14.573286183176338!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c70058488e9d%3A0xf2c424908711f2bf!2sBase%20one%20Industrial%20Sales%20Inc.!5e0!3m2!1sen!2sph!4v1752219793232!5m2!1sen!2sph"
                            width="600" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>

                    </div>
                </div>
            </div>
            <div>
                <div class="image">
                    <img src="./src/img/B1-container.jpg" class="object-cover rounded-lg w-full">
                </div>
            </div>
        </div>
    </div>







    <!-- script -->
    <script src="./src/js/ap-button.js">
    </script>
    <?php
    include('footer.php');
    ?>
</body>

</html>
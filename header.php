  <!DOCTYPE html>
  <html lang="en">

  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Baseone Industrial Sales</title>
      <link rel="stylesheet" href="./src/styles/main.css">
      <link href="./src/styles/output.css" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
          integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>

  <body>

      <sub-nav class="w-full h-12 bg-[#2D2D2D] text-white flex items-center justify-between px-40">
          <div class="grid grid-cols-2 sm:grid-cols-2 justify-between w-full ">
              <div class="w-full .lg\:w-1\/4 flex items-center gap-4 md:p-0 md:m-0 md:px-0 ">
                  <i class="fa-brands fa-square-facebook"></i>
                  <i class="fa-brands fa-shopify"></i>
              </div>
              <div
                  class="contact-info w-full .lg\:w-1\/4 flex items-center justify-end gap-4 text-sm font-serif md:p-0 md:m-0 md:px-0 .hide-on-small-screens">
                  <i class="fa-solid fa-envelope"></i> <span class="ml-auto">salesbaseoneindustrial@gmail.com</span>
                  <i class="fa-solid fa-phone"></i> <span class="ml-auto">+63 928 398 5101</span>
                  <i class="fa-solid fa-clock"></i> <span class="ml-auto">Mon - Sat: 9:00am to 6:00pm</span>
              </div>
          </div>
      </sub-nav>

      <nav class="shadow-md">
          <div class="logo">
              <img src="./src//img//base1 logo.png" alt="Baseone Industrial Sales Logo">
          </div>

          <ul id="menuList">
              <li><a href="./index.php">Home</a></li>
              <li><a href="./about.php">About</a></li>
              <li><a href="./services.php">Shop</a></li>
              <!-- <li><a href="">FAQS</a></li> -->
              <li><a href="./contact.php">Contact</a></li>
              <li><button class="button "><a href="./contact.php">Log in</a></button></li>

          </ul>
          <div class="menu-icon">
              <i class="fa-solid fa-bars-staggered" onclick="toggleMenu()"></i>
          </div>
      </nav>


      <script>
          let menuList = document.getElementById("menuList")
          menuList.style.maxHeight = "0px";

          function toggleMenu() {
              if (menuList.style.maxHeight == "0px") {
                  menuList.style.maxHeight = "300px";
                  F
              } else {
                  menuList.style.maxHeight = "0px";
              }
          }
      </script>

  </body>

  </html>
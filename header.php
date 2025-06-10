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

      <sub-nav class="w-full p-0 m-0 h-12 bg-[#2D2D2D] text-white flex items-center justify-between px-40 md:px-20">
          <div class="flex flex-wrap justify-between w-full ">
              <div class="w-full md:w-1/2 lg:w-1/4 md:p-8 flex items-center gap-4">
                  <i class="fa-brands fa-square-facebook"></i>
                  <i class="fa-brands fa-shopify"></i>
              </div>
              <div class="w-full md:w-1/2 lg:w-1/4 md:p-8 flex items-center justify-end gap-4 text-sm font-serif ">
                  <i class="fa-solid fa-envelope"></i> <span class="ml-auto">Salesbaseoneindustrial@gmail.com</span>
                  <i class="fa-solid fa-phone"></i> <span class="ml-auto">+63 928 398 5101</span>
                  <i class="fa-solid fa-clock"></i> <span class="ml-auto">Mon - Sat: 9:00am to 6:00pm</span>
              </div>
          </div>
      </sub-nav>

      <nav>
          <div class="logo">
              <h1>Logo</h1>
          </div>

          <ul id="menuList">
              <li><a href="">Home</a></li>
              <li><a href="">About</a></li>
              <li><a href="">Services</a></li>
              <li><a href="">Product</a></li>
              <li><a href="">Contact</a></li>
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
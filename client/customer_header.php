  <?php
    session_start();

    if (!isset($_SESSION['first_name'])) {
        header("Location: ../signin.php");
        exit();
    }

    ?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Baseone Industrial Sales</title>
      <link rel="stylesheet" href="../src/styles/main.css">
      <link href="../src/styles/output.css" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
          integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />

      <style>
          .user-menu {
              position: relative;
              display: inline-block;
          }

          .user-menu i {
              font-size: 24px;
              cursor: pointer;
              color: #333;
          }

          /* Dropdown menu */
          .dropdown {
              display: none;
              position: absolute;
              left: 0px;
              right: 10px;
              top: 25px;
              background-color: white;
              border: 1px solid #ccc;
              border-radius: 5px;
              box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
              z-index: 1000;
              min-width: 160px;
          }

          .dropdown a {
              display: block;
              padding: 10px 15px;
              color: #333;
              text-decoration: none;
          }

          .dropdown a:hover {
              background-color: #f0f0f0;
          }

          /* Show dropdown on hover */
          .user-menu:hover .dropdown {
              display: block;
          }

          .account-title {
              position: relative;
              display: inline-block;
              padding-bottom: 5px;
          }

          .account-title::after {
              content: "";
              position: absolute;
              left: 0;
              bottom: 0;
              height: 2px;
              width: 100%;
              background-color: #333;
              /* Change this to match your theme */
          }

          #cart-sidebar {
              height: 100vh;
              /* full screen height */
          }
      </style>

  </head>

  <body>

      <sub-nav class="flex w-full h-12 xl:px-40 lg:px-32 md:px-8 bg-[#2D2D2D] text-white">
          <div
              class="w-full grid grid-cols-2 xl:grid-cols-2 lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 justify-between ">
              <div class="w-auto flex items-center gap-4">
                  <i class="fa-brands fa-square-facebook"></i>
                  <i class="fa-brands fa-shopify"></i>
              </div>
              <div
                  class="flex items-center justify-end gap-4 text-sm font-serif md:p-0 md:m-0 md:px-0 lg:hidden md:hidden sm:hidden ">
                  <i class="fa-solid fa-envelope"></i> <span class="ml-auto">salesbaseoneindustrial@gmail.com</span>
                  <i class="fa-solid fa-phone"></i> <span class="ml-auto">+63 928 398 5101</span>
                  <i class="fa-solid fa-clock"></i> <span class="ml-auto">Mon - Sat: 9:00am to 6:00pm</span>
              </div>
          </div>
      </sub-nav>

      <nav class="shadow-md z-60">
          <div class="logo">
              <img src="../src//img//base1 logo.png" alt="Baseone Industrial Sales Logo">
          </div>


          <ul id="menuList">
              <li><a href="../client/customer_page.php">Home</a></li>
              <li><a href="../client/customer_about.php">About</a></li>
              <li><a href="../client/customer_shop.php">Shop</a></li>
              <!-- <li><a href="">FAQS</a></li> -->
              <li><a href="../client/customer_contact.php">Contact</a></li>
              <li class="user-menu"><i class="fa-solid fa-user"></i>
                  <div class="dropdown">
                      <div class="p-4 text-center">
                          <p class="account-title font-bold">ACCOUNT</p>
                          <p class="mt-4 font-base text-lg"><?php echo $_SESSION['first_name']; ?>
                              <?php echo $_SESSION['last_name']; ?></p>
                      </div>

                      <a href="/profile">Go to Profile</a>
                      <a href="/orders">Orders</a>
                      <form action="./logout.php" method="POST">
                          <a href=""><button type="submit">Logout</button></a>
                      </form>

                  </div>
              </li>
              <li>
                  <i id="cart-icon" class="fa-solid fa-cart-shopping cursor-pointer text-2xl"></i>
              </li>

          </ul>
          <div class=" menu-icon">
              <i class="fa-solid fa-bars-staggered" onclick="toggleMenu()"></i>
          </div>
      </nav>

      <div id="cart-sidebar" class="fixed top-0 right-0 w-80 h-screen bg-white shadow-lg z-50 p-6 
               transform transition-transform duration-300 translate-x-full">

          <!-- Close button -->
          <button id="close-cart" class="absolute top-4 right-4 p-4 text-gray-600 hover:text-black text-2xl">
              <i class="fa-solid fa-xmark"></i>
          </button>

          <h2 class="text-xl font-bold mb-4 mt-10">Your Cart</h2>
          <p>No items in cart.</p>
      </div>


      <script>
          let menuList = document.getElementById("menuList")
          menuList.style.maxHeight = "0px";

          function toggleMenu() {
              if (menuList.style.maxHeight == "0px") {
                  menuList.style.maxHeight = "300px";
                  menuList.style.transition = "max-height 0.5s ease-in-out";
                  menuList.style.overflow = "hidden";
                  menuList.style.padding = "50px 0";

              } else {
                  menuList.style.maxHeight = "0px";
              }
          }
      </script>


      <!-- sidebar  -->
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
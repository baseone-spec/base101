  <!DOCTYPE html>
  <html lang="en">

  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Baseone Industrial Sales</title>
      <link rel="stylesheet" href="./src/styles/main.css">
      <link href="./output.css" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
          integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>

  <body>
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
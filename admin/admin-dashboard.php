<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Base One Admin</title>

    <!-- css -->
    <link rel="stylesheet" href="./css/sidebar.css" />

    <!-- Boxicons css -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
</head>

<body>
    <nav class="sidebar">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="../src/img/b1 logo only.png" alt="logo" />
                </span>

                <div class="text header-text">
                    <span class="name">Base One</span>
                    <span class="profession">Industrial Sales</span>
                </div>
            </div>

            <i class="bx bx-chevron-right toggle"></i>
        </header>

        <div class="menu-bar">
            <div class="menu">
                <li class="nav-links">
                    <a href="./admin-dashboard.php">
                        <i class="bx bx-home-alt icon"></i>
                        <span class="text nav-text"> Dashboard </span>
                    </a>
                </li>
                <ul class="menu-links">
                    <li class="nav-links">
                        <a href="./admin-qps.php">
                            <i class="bx bxs-report icon"></i>
                            <span class="text nav-text"> QPS </span>
                        </a>
                    </li>

                    <li class="nav-links">
                        <a href="">
                            <i class="bx bx-package icon"></i>
                            <span class="text nav-text"> Product </span>
                        </a>
                    </li>

                    <li class="nav-links">
                        <a href="">
                            <i class="bx bxs-bar-chart-alt-2 icon"></i>
                            <span class="text nav-text"> Reviews </span>
                        </a>
                    </li>

                    <!-- <li class="nav-links">
                        <a href="">
                            <i class="bx bxl-product-hunt icon"></i>
                            <span class="text nav-text">Payment</span>
                        </a>
                    </li> -->
                </ul>
            </div>

            <div class="bottom-content">
                <p class="bottom-text">Options</p>
                <li class="">
                    <a href="">
                        <i class="bx bx-cog icon"></i>
                        <span class="text nav-text">Settings</span>
                    </a>
                </li>
                <li class="">
                    <a href="">
                        <i class="bx bx-log-out icon"></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>
            </div>
        </div>
    </nav>

    <section class="home">
        <div class="text">Welcome Admin!</div>
    </section>


    <!-- javascript -->
    <script src="./js/script.js"></script>
</body>

</html>
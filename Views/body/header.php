<header class="main-color fixed-top w-100 hype-shadow-white">
    <div class="container h-100">
        <nav class=" text-white h-100 d-flex align-items-center justify-content-between py-2">
            <a href="/php-hotel/index.php" class="h-100">
                <div class="img-container h-100">
                    <img class="img-fluid h-100" src="/php-hotel/src/img/Php-hotel-logo.png" alt="logo" width="100">
                </div>
            </a>
            <div class="d-flex align-items-center">
                <h1 class="text-center hype-text-shadow display-4 mb-0 fw-bold h-100">
                    php-Hotel
                </h1>
            </div>
            <div class="d-flex gap-3 align-items-center">
                <div class="d-flex flex-column align-items-center">
                    <div class="icon-container">
                        <i class="fa-solid fa-user fs-3"></i>
                    </div>
                    <p class="mb-0"><?php echo $_SESSION['name'] ?? 'effettua il login' ?></p>

                </div>
                <?php
                if (isset($_SESSION['userId'])) {
                    echo '<div class="icon-container">
                            <a href="/php-hotel/access/logout.php" class="text-white text-decoration-none yellow-hover">
                                <i class="fa-solid fa-right-from-bracket fs-3"></i>
                            </a>
                        </div>';
                }
                ?>
            </div>
        </nav>
    </div>
</header>
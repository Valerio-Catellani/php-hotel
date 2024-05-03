<header>
    <div class="container">
        <h1 class="text-center hype-text-shadow mb-5 display-4 fw-bold">
            Hotel PHP
        </h1>
        <div class="p-5 bg-dark mb-5 rounded-4 border border-black hype-shadow-white">
            <form action="index.php" method="GET" class="d-flex flex-column align-items-baseline gap-3">
                <select class="form-control me-2 w-25 hype-shadow-white hype-pointer" name="parking">
                    <option value="all" selected>Tutti gli Hotel</span></option>
                    <option value='true'>Solo quelli con parcheggio</option>
                    <option value='false'>Solo quelli senza parcheggio</option>
                </select>
                <div class="stars">
                    <?php
                    for ($i = 1; $i <= 5; $i++) {
                        echo "
                        <div class='form-check form-check-inline'>
                            <input class='form-check-input hype-pointer' type='radio' name='stars' id='stars-$i' value='$i'" . (!empty($_GET['stars']) && $_GET['stars'] === strval($i) ? ' checked' : '') .  ">
                            <label class='form-check-label' for='stars-$i'>$i<i class='fa-solid fa-star text-warning'></i></label>
                        </div>";
                    }
                    ?>
                    <div class='form-check form-check-inline'>
                        <input class='form-check-input' type='radio' name='stars' id='stars-all' value='all' <?php
                                                                                                                echo (empty($_GET['stars']) || $_GET['stars'] === 'all' ? ' checked' : '')
                                                                                                                ?>>
                        <label class='form-check-label' for='stars-all'>All<i class='fa-solid fa-star text-warning'></i></label>
                    </div>
                </div>
                <button type="submit" class="btn btn-outline-warning">Search</button>
            </form>
        </div>
    </div>
</header>
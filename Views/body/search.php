<div id='search' class="container">
    <div class="p-5 main-color mb-5 rounded-4 border border-black hype-shadow-white d-flex flex-wrap-reverse  ">
        <div class="w-50 search-right">
            <h2 class="mb-3">Trova il tuo Hotel</h2>
            <form action="index.php" method="GET" class="d-flex flex-column align-items-baseline gap-3">
                <select class="form-control me-2 w-50  hype-shadow-white hype-pointer" name="parking">
                    <option value="all" selected>Tutti gli Hotel &#x25BC;</option>
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
                <button type="submit" class="btn btn-outline-warning hype-hover-size">Search</button>
            </form>
        </div>
        <div class="w-50 position-relative search-left">
            <div class="img-container rotate-negative hype-shadow-white">
                <img class="img-fluid position-relative " src="src/img/hotel/hotel1.jpg" alt="logo">
            </div>
            <div class="img-container rotate-positive hype-shadow-white">
                <img class="img-fluid position-relative" src="src/img/hotel/hotel2.jpg" alt="logo">
            </div>
        </div>
    </div>
</div>
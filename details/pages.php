<?php
session_start(); //non serve solo per creare una sessione, ma anche se vogliamo accedere ai dati della sessione:
if (!isset($_SESSION['userId'])) {
    session_destroy();
    header('Location: login.php');
    die();
}

include_once __DIR__ . "/../Models/hotel.php";
$findedHotel = getHotels_by_id($hotels);
include __DIR__ . "/../Models/comments.php";
$comments = getComments($comments);

include __DIR__ . "/../Controllers/generateHotel.php";
$template = generateHotelTemplate($findedHotel);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include __DIR__ . "/../Views/head/head.php"; ?>
    <link rel="stylesheet" href="../style/hype_utility.css">
    <link rel="stylesheet" href="../style/main.css">
    <link rel="stylesheet" href="../style/media_query.css">
    <link rel="stylesheet" href="../style/animation.css">
    <title>Php Hotel: <?php echo $findedHotel['name'] ?></title>
</head>

<body class="py-5 text-white overflow-x-hidden">
    <?php include __DIR__ . "/../Views/body/header.php"; ?>
    <main class="container d-flex flex-column align-items-center justify-content-center ">
        <?php echo $template; ?>
        <div class="overflow-hidden hype-vw-100 d-flex">
            <div id='comment-container' class="container">

            </div>
        </div>
        <a id="back-to-home" href="../index.php" class="text-decoration-none">
            <button href="index.php" class="btn btn-warning w-100 py-2 w-25 border border-black mt-3">Torna alla Home</button>
        </a>

    </main>
</body>

<script defer>
    const comments = Object.values(<?php echo json_encode($comments); ?>); //array dei commenti
    const commentContainer = document.getElementById('comment-container');
    const test = document.getElementById('test');

    carusel(0);

    function carusel(index) {
        if (document.getElementById('active-comment')) {
            const activeComment = document.getElementById('active-comment');
            activeComment.classList.add('active-comment-slide-out');
            setTimeout(() => {
                activeComment.remove();
                index < comments.length - 1 ? index++ : index = 0;
                carusel(index);
            }, 600)
        } else {
            commentContainer.append(generateCommentTemplate(index));
            const activeComment = document.getElementById('active-comment');
            setTimeout(() => {
                activeComment.classList.add('active-comment-slide-in');
            }, 200)

            setTimeout(() => {
                carusel(index);
            }, 7000)
        }

    }


    function generateCommentTemplate(index) {
        const stars = starsGenerate(comments[index].rating);
        const container = document.createElement('div');
        container.setAttribute('id', "active-comment");
        container.classList.add('main-color-transparent', 'container', 'border', 'border-warning', 'rounded-4', 'px-5', 'w-75', 'py-3', 'hype-shadow-white', 'mt-3');
        const temp = `
                <div class=" d-flex ">
                    <div class="icon-container d-flex ">
                        <i class="fa-solid fa-user fs-3"></i>
                    </div>
                    <h4 class="username-comment">${comments[index].name}</h4>
                </div>
                <div class="comment-stars-container">
                    ${stars}
                </div>
                <h6>${comments[index].date}</h6>
                <p>${comments[index].text}</p>
        `
        container.innerHTML = temp;
        return container;
    };

    function starsGenerate(number) {
        let tmp = '';
        for (let i = 0; i < 5; i++) {
            if (i < number) {
                tmp += '<i class="fa-solid fa-star text-warning"></i>';
            } else {
                tmp += '<i class="fa-regular fa-star"></i>';
            }
        }
        return tmp;
    }
</script>


<?php include __DIR__ . "/../Views/body/footer.php" ?>

</html>
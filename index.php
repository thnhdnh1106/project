<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script src="./vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&amp;family=Poppins:wght@400;500;700&amp;display=swap">
    <script src="./vendor/choices.js/public/assets/scripts/choices.min.js"></script>
    </script>
    <script src="./vendor/sticky-js/dist/sticky.js"></script>
    <script src="./vendor/glightbox/dist/js/glightbox.js"></script>
    <link rel="stylesheet" href="./vendor/glightbox/dist/css/glightbox.css">
    <script src="./vendor/jquery/dist/jquery.min.js"></script>
    <script src="./vendor/flatpickr/dist/flatpickr.min.js"></script>
    <link rel="stylesheet" href="./vendor/flatpickr/dist/flatpickr.min.css">
    <script src="./assets/js/function.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <title>Document</title>
</head>
<?php 
        session_start();
        include('./admin/connect.php');
        if(!isset($_SESSION["user"])){
            header("location:./authentication/sign-in.php");
        }
    ?>

<body>
    <?php include('./header.php')?>
    <?php include('./body.php')?>
    <section class="bg-dark pt-5">
        <?php include('./footer.php')?>
    </section>
    <div class="back-top "></div>
    <?php include('./templates/header-mobile.php')?>

    <?php include('./templates/calender.php')?>

</body>

</html>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Crispy Kitchen - News Page</title>
    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-icons.css" rel="stylesheet">
    <link href="css/tooplate-crispy-kitchen.css" rel="stylesheet">
    <!--

    Tooplate 2129 Crispy Kitchen

    https://www.tooplate.com/view/2129-crispy-kitchen

    -->
</head>

<body>

<?php
require_once 'lib/database.php';
use lib\Database;

include_once "parts/navbar.php";
?>

<main>
    <header class="site-header site-news-detail-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Learning a fine dining experience</h2>
                </div>
            </div>
        </div>
    </header>
    <section class="news-detail section-padding pt-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12">
                    <img src="images/news/news-detail-header.jpg" class="img-fluid news-detail-image" alt="fine dining experience">
                    <div class="col-lg-10 col-10 mx-auto mt-5">
                        <h4 class="mb-3">The best fine-dining experience at Crispy Kitchen</h4>
                        <p>Phasellus in augue at quam ornare malesuada. Sed magna lorem, dapibus nec lorem sed, pretium vulputate ante. In porttitor sapien urna, eu vulputate arcu pharetra non. Vivamus nec nulla quis leo sodales semper. Quisque sed ultricies tortor. Fusce porta pretium tellus, sit amet vulputate orci.</p>
                        <ul class="list">
                            <li class="list-item">Pasta stats published in the International</li>
                            <li class="list-item">Rice flour, or legumes such as beans</li>
                            <li class="list-item">Belgian family developed major food poisoning symptoms</li>
                        </ul>
                        <p>Pasta is a type of food typically made from an unleavened dough of wheat flour mixed with water or eggs, and formed into sheets or other shapes, then cooked by boiling or baking. Rice flour, or legumes such as beans or lentils, are sometimes used in place of wheat flour to yield a different taste</p>
                        <div class="ratio ratio-16x9 my-5">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/6vebbDZxoKE?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <h5 class="mt-4 mb-3">Pasta with Cream Sauce Recipe</h5>
                        <p>Pasta is a type of food typically made from an unleavened dough of wheat flour mixed with water or eggs, and formed into sheets or other shapes, then cooked by boiling or baking. Rice flour, or legumes such as beans or lentils, are sometimes used in place of wheat flour to yield a different taste</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    // Create a database instance
    $db = new Database();
    $commentsData = $db->getComments();
    ?>
    <section class="comments section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h4 class="text-center mb-4">Comment Box</h4>
                </div>
                <div class="col-lg-7 col-12 mx-auto">
                    <form class="custom-form comment-form" action="lib/process_comments.php" method="post" role="form">
                        <input type="text" name="comment-name" id="comment-name" class="form-control" placeholder="Your Name" required>
                        <input type="email" name="comment-email" id="comment-email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Your Email" required="">
                        <textarea class="form-control" rows="5" id="comment" name="comment" placeholder="Write a comment" required></textarea>
                        <div class="col-lg-3 col-4 mx-auto">
                            <button type="submit" class="form-control" id="subscribe">Submit</button>
                        </div>
                    </form>
                    <!-- Fetch data from comments table -->
                    <?php foreach ($commentsData as $comment) : ?>
                    <div class="news-author d-flex flex-wrap align-items-center">
                        <div class="ms-4 w-50">
                            <p class="mb-2"><?php echo htmlspecialchars($comment['message']); ?></p>
                            <a href="#"><?php echo htmlspecialchars($comment['name']); ?></a>
                        </div>
                        <span class="ms-auto"><?php echo date('F j, Y, g:i a', strtotime($comment['time'])); ?></span>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
    <section class="related-news section-padding bg-white">
        <div class="container">
            <div class="row">
                <h2 class="text-center mb-lg-5 mb-4">Related News</h2>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="news-thumb mb-4">
                        <a href="news-detail.php">
                            <img src="images/news/gilles-lambert-S_LhjpfIdm4-unsplash.jpg" class="img-fluid news-image" alt="">
                        </a>
                        <div class="news-text-info">
                            <span class="category-tag me-3 bg-info">Promotions</span>
                            <strong>12 April 2022</strong>
                            <h5 class="news-title mt-2">
                                <a href="news-detail.php" class="news-title-link">Is Coconut good for your health?</a>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="news-thumb mb-4">
                        <a href="news-detail.php">
                            <img src="images/news/ella-olsson-mmnKI8kMxpc-unsplash.jpg" class="img-fluid news-image" alt="">
                        </a>
                        <div class="news-text-info">
                            <span class="category-tag me-3 bg-info">Career</span>
                            <strong>18 April 2022</strong>
                            <h5 class="news-title mt-2">
                                <a href="news-detail.php" class="news-title-link">How to run a sushi business?</a>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="news-thumb mb-4">
                        <a href="news-detail.php">
                            <img src="images/news/louis-hansel-GiIiRV0FjwU-unsplash.jpg" class="img-fluid news-image" alt="">
                        </a>
                        <div class="news-text-info">
                            <span class="category-tag me-3 bg-info">Meeting</span>
                            <strong>30 April 2022</strong>
                            <h5 class="news-title mt-2">
                                <a href="news-detail.php" class="news-title-link">Learning a fine dining experience</a>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="newsletter section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <img src="images/charles-deluvio-FdDkfYFHqe4-unsplash.jpg" class="img-fluid newsletter-image" alt="">
                </div>
                <div class="col-lg-6 col-12 d-flex align-items-center mt-5 mt-lg-0 mx-auto">
                    <div class="subscribe-form-wrap">
                        <h4 class="mb-0">Our Newsletter</h4>
                        <p>The food news every day</p>
                        <form class="custom-form subscribe-form mt-4" role="form">
                            <input type="email" name="subscribe-email" id="subscribe-email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Your email address" required="">
                            <button type="submit" class="form-control mb-3" id="subscribe">Subscribe</button>
                            <small>By signing up, you agree to our Privacy Notice and the data policy</small>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
    include_once "parts/footer.php";
    include_once "parts/modal.php";
?>

<!-- JAVASCRIPT FILES -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/custom.js"></script>
<script src="js/script.js"></script>
</body>
</html>

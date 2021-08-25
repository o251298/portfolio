<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<header id="header">
    <div class="container">

        <h1><a href="/">Oleg Khrokalo</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->
        <h2>I'm a passionate <span>web developer</span> from Kyiv</h2>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link active" href="#header">Home</a></li>
                <li><a class="nav-link" href="#about">About</a></li>
                <li><a class="nav-link" href="#resume">Resume</a></li>
                <li><a class="nav-link" href="#services">Services</a></li>
                <li><a class="nav-link" href="#portfolio">Portfolio</a></li>
                <li><a class="nav-link" href="#contact">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

        <div class="social-links">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>

    </div>
</header><!-- End Header -->


        <?= $content ?>
<div class="credits">
    <!-- All the links in the footer should remain intact. -->
    <!-- You can delete the links only if you purchased the pro version. -->
    <!-- Licensing information: https://bootstrapmade.com/license/ -->
    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/personal-free-resume-bootstrap-template/ -->
    <p class="float-left">&copy; My Company <?= date('Y') ?></p>
    <p class="float-right"><?= Yii::powered() ?></p>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

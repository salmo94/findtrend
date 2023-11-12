<?php

/** @var yii\web\View $this */

/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);

$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>" class="h-100">
    <head>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&family=Roboto&display=swap"
              rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500;700&family=Roboto&display=swap"
              rel="stylesheet">
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body class="d-flex flex-column h-100">
    <?php $this->beginBody() ?>
    <header id="header">
        <?php
        NavBar::begin([
            'brandLabel' => '<img src="/images/vector.svg">' . ' Findtrend',
            'brandUrl' => Yii::$app->homeUrl,
            'options' => ['class' => 'navbar-expand-md navbar-dark bg-dark fixed-top'],
        ]);
        ?>
        <div class="navbar-collapse justify-content-center">
            <?= Nav::widget([
                'options' => ['class' => 'navbar-nav'],
                'items' => [
                    ['label' => 'About','linkOptions' => ['class' => 'nav-items']],
                    ['label' => 'How it work','linkOptions' => ['class' => 'nav-items']],
                    ['label' => 'Pricing','linkOptions' => ['class' => 'nav-items']],
                    ['label' => 'Solution','linkOptions' => ['class' => 'nav-items']],
                    ['label' => 'Features','linkOptions' => ['class' => 'nav-items']],
                ]
            ]);
            ?>
        </div>
        <?= Nav::widget([
            'options' => ['class' => 'navbar-nav'],
            'items' => [
                ['label' => 'Login','linkOptions' => ['class' => 'nav-items']],
            ]
        ]);
        ?>
        <div class="d-flex justify-content-center center-btn">
            <button id="register-button" class="btn btn-light btn-rounded my-2 my-sm-0" type="submit">Register</button>
        </div>
        <?php
        NavBar::end();
        ?>
    </header>
    <main id="main" class="flex-shrink-0" role="main">
        <div class="container">
            <?= $content ?>
        </div>
    </main>
    <?php $this->endBody() ?>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    </body>
    </html>
<?php $this->endPage() ?>
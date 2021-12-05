<?php

/* @var $this \yii\web\View */
/* @var $content string */

use common\widgets\Alert;
use frontend\assets\AppAsset;
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

<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top shadow nav-my-bg">
        <div class="container-fluid">
            <div class="navbar-nav">
                <div class="dropdown" style="margin-right: 3px">
                    <button class="btn btn-primary shadow-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-grid-3x3-gap-fill"></i>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Tovarlar bo`yicha qidirish</a>
                        <a class="dropdown-item" href="#"></a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>

                <a href="/" class="btn btn-primary shadow-sm">
                    <i class="bi bi-house"></i>
                </a>


            </div>

            <div class="navbar-nav" id="navbarSupportedContent">

                <form class="d-flex text-center">
                    <div class="input-group my-search shadow-sm">
                        <input type="text" class="form-control" onkeyup="SearchOrg(this.value)" placeholder="STIR yoki korxona nomini kiriting..." aria-label="Recipient's username" aria-describedby="button-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-warning" type="button" id="button-addon2"><i class="bi bi-search"></i></button>
                        </div>
                    </div>
                </form>

            </div>
            <div class="navbar-nav" id="navbarSupportedContent">


                <a href="/site/signup" class="btn btn-primary shadow-sm" style="margin-right: 3px">
                    <i class="bi bi-person-plus"></i>
                </a>
                <a href="/site/login" class="btn btn-primary shadow-sm">
                    <i class="bi bi-box-arrow-in-right"></i>
                </a>
            </div>

        </div>
    </nav>
</header>

<main role="main" class="flex-shrink-0">
    <div class="container-dark">
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();

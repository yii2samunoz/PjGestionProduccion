<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>

<?php $this->beginBody() ?>
<div class="header-nav">
    <div class="infobar">
        <div class="container">
            <span>Tienes alguna pregunta?</span>
            <a href="tel:018000910270"><i class="fa fa-fw fa-phone"></i>01 8000 910270</a>
            <a href="mailto:redproduccionsena@gmail.com"><i class="fa fa-fw fa-envelope"></i>redproduccionsena@gmail.com</a>
        </div>
    </div>
    <?php
    NavBar::begin([
        'brandLabel' => Html::img('@web/images/secondLogoProyecto.svg', ['class' => 'logo-navbar-index', 'alt' => 'logo']),
        'brandUrl' => Yii::$app->homeUrl,
        'brandOptions' => ['class' => 'navbar-brand-index'],
        'options' => [
            'class' => 'navbar-default',
        ],
    ]);
    $menuItems = [
        ['label' => 'Inicio', 'url' => ['/site/index']],
        ['label' => 'Plan de acción', 'url' => ['/site/planaccion']],
        ['label' => 'Contáctenos', 'url' => ['/site/contact']],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Iniciar Sesión', 'url' => ['/site/login']];
    } else {
        $menuItems[] = '<li>'
        . Html::beginForm(['/site/logout'], 'post')
        . Html::submitButton(
            'Logout (' . Yii::$app->user->identity->username . ')',
            ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
        }
        echo Nav::widget([
            'options' => ['class' => 'navbar-nav navbar-right'],
            'items' => $menuItems,
        ]);
        NavBar::end();
        ?>

</div>


<?= Alert::widget() ?>

<?= $content ?>

<footer class="footer-index">
    <div class="container">
        <div class="row">

            <div class="col-md-7">
                <h4> INFORMACIÓN </h4>
                <ul class="list-unstyled">
                    <li>Servicio Nacional de Aprendizaje SENA</li>
                    <li>Regional Distrito Capital</li>
                    <li>
                        <i class="fa fa-fw fa-building-o"></i> Centro de Gestión Industrial
                    </li>
                    <li>
                        <i class="fa fa-fw fa-map-marker"></i> <address>Dirección: Calle 15 No 31 - 42</address>
                    </li>
                    <li>
                        <i class="fa fa-fw fa-globe"></i> <span>Ciudad: </span> Bogotá – Colombia
                    </li>
                    <li>
                        <i class="fa fa-fw fa-envelope-o"></i> <a href="mailto:redproduccionsena@gmail.com">Correo Electrónico: redproduccionsena@gmail.com</a>
                    </li>
                    <li>
                        <i class="fa fa-fw fa-phone"></i> <a href="tel:5925555">Líneas Gratuitas Atención al Ciudadano: Bogotá (57 1) 592 55 55</a>
                    </li>
                    <li>
                        <i class="fa fa-fw fa-phone"></i> <a href="tel:018000910270">Resto del país: 01 8000 910270</a>
                    </li>
                    <li>
                        <i class="fa fa-fw fa-phone"></i> <a href="tel:4049494">Líneas Gratuitas Atención al Empresario: Bogotá (57 1) 404 94 94</a>
                    </li>
                    <li>
                        <i class="fa fa-fw fa-phone"></i> <a href="tel:018000910682">Resto del país: 01 8000 910682</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-5 certificados">

                <?= Html::img('@web/images/icontecA.png', ['alt' => 'img-footer']) ?>
                <?= Html::img('@web/images/icontecB.png', ['alt' => 'img-footer']) ?>
                <?= Html::img('@web/images/icontecC.png', ['alt' => 'img-footer']) ?>
                <?= Html::img('@web/images/icontecD.png', ['alt' => 'img-footer']) ?>

            </div>
        </div>
        <a href="javascript:void(0)" class="back-to-top animated pull-right">
            <i class="fa fa-angle-up"></i>
        </a>
        <div class="fsocialn-container">
            <nav class="footer-social-networks">
                <a href="" title="Facebook" class="facebook-link"><i class="fa fa-fw fa-facebook fa-2x"></i></a>
                <a href="" title="Twitter" class="twitter-link"><i class="fa fa-fw fa-twitter fa-2x"></i></a>
                <a href="" title="Instagram" class="instagram-link"><i class="fa fa-fw fa-instagram fa-2x"></i></a>
                <a href="" title="Google +" class="google-plus-link"><i class="fa fa-fw fa-google-plus fa-2x"></i></a>
            </nav>
        </div>
        <!-- <p class="">&copy; Todos los derechos reservados <?= date('Y') ?></p> -->
    </div>

    <div class="footer">
        <div class="container">
            <p class="pull-left">&copy; Red de Conocimiento - Gestión de la Producción
                <?= date('Y') ?>
            </p>
        </div>
    </div>
</footer>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

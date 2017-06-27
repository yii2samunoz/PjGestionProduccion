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
<?php
NavBar::begin([
    'brandLabel' => Html::img('@web/images/secondLogoProyecto.svg', ['class' => 'logo-navbar-index', 'alt' => 'logo']),
    'brandUrl' => Yii::$app->homeUrl,
    'brandOptions' => ['class' => 'navbar-brand-index'],
    'options' => [
        'class' => 'navbar-default navbar-fixed-top',
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


<?= Alert::widget() ?>
<?= $content ?>



<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

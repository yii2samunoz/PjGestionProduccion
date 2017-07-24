<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
?>
<section class="site-login">
    <div class="container loginFormContainer">
        <div class="page-header">
            <?= Html::a(Html::img("@web/images/Sena_Colombia_logo.svg"), ['site/index'], ['class'=>'your_class']) ?>
        </div>
        <h2>Iniciar sesión</h2>
        <div class="loginMediaContainer">
            <!-- <?= Html::img('@web/images/logoProyectoGris.png', ['class' => 'loginLogo', 'alt' => 'Logo Red Conocimiento']) ?> -->
            <?= Html::a('', ['site/index'], ['class' => 'loginLogo']) ?>
        </div>

        <?php $form = ActiveForm::begin([
            'id' => 'login-form',
            'fieldConfig' => [
                'template' => "{label}\n<div>{input}</div>\n<div>{error}</div>",
                'labelOptions' => ['class' => 'control-label'],
            ],
        ]); ?>

            <?= $form->field($model, 'username')->input('email', ['class' => 'form-control', 'autofocus' => true, 'placeholder' => 'Dirección de correo electrónico'])->label(false) ?>

            <?= $form->field($model, 'password')->input('password', ['class' => 'form-control', 'placeholder' => 'Contraseña'])->label(false) ?>
            <div class="loginActions clearfix">
                <?= $form->field($model, 'rememberMe')->checkbox([
                    'template' => "<div>{input}{label}</div>\n<div>{error}</div>",
                    ]) ?>
                <div>
                    <?= Html::a('¿Has olvidado la contraseña?', ['site/request-password-reset'], ['class' => 'link']) ?>
                </div>
            </div>

            <div class="form-group loginFormButton">
                <?= Html::submitButton('Iniciar Sesión', ['class' => 'btn btn-primary login-button form-button', 'name' => 'login-button']) ?>
            </div>

        <?php ActiveForm::end(); ?>

        <!-- <div style="color:#999;">
            You may login with <strong>admin@yii.com/admin</strong> or <strong>demo@yii.com/demo</strong>.<br>
            To modify the username/password, please check out the code <code>app\models\User::$users</code>.
        </div> -->
    </div>

</section>

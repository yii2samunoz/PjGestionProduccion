<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\PasswordResetRequestForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Request password reset';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-request-password-reset">
    <div class="container resetFormContainer">
        <h4 class="resetPassTitle">¿Has olvidado la contraseña?</h4>

        <p>Please fill out your email. A link to reset password will be sent there.</p>

        <?php $form = ActiveForm::begin(['id' => 'request-password-reset-form']); ?>

        <?= $form->field($model, 'email')->input('email', ['autofocus' => true, 'placeholder' => 'Dirección de correo electrónico'])->label(false) ?>

        <div class="form-group">
            <?= Html::submitButton('Enviar', ['class' => 'btn btn-primary reset-button form-button']) ?>
        </div>

        <?php ActiveForm::end(); ?>

        <div>
            <?= Html::a('Volver al inicio de sesión', ['site/login'], ['class' => 'link']) ?>
        </div>
    </div>
</div>

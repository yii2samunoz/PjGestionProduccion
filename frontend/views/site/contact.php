<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contáctenos';
// $this->params['breadcrumbs'][] = $this->title;
?>
<section class="site-contact clearfix">
    <header class="jumbotron-pages jumbotron contact">
        <div class="container">
            <h1 class="text-center">Contáctenos</h1>
        </div>
    </header>
    <div class="container bodyContact">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <div>
                    <div class="contact-heading">
                        <h1 class="text-center">Envíanos un <br> <strong>Mensaje</strong></h1>
                    </div>
                    <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

                        <div class="alert alert-success">
                            Thank you for contacting us. We will respond to you as soon as possible.
                        </div>

                        <p>
                            Note that if you turn on the Yii debugger, you should be able
                            to view the mail message on the mail panel of the debugger.
                            <?php if (Yii::$app->mailer->useFileTransport): ?>
                                Because the application is in development mode, the email is not sent but saved as
                                a file under <code><?= Yii::getAlias(Yii::$app->mailer->fileTransportPath) ?></code>.
                                Please configure the <code>useFileTransport</code> property of the <code>mail</code>
                                application component to be false to enable email sending.
                            <?php endif; ?>
                        </p>

                    <?php else: ?>

                        <p>
                            Si tiene preguntas o consultas, rellene el siguiente formulario para ponerse en contácto con nosotros.
                            Gracias.
                        </p>
                </div>

                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
                <div class="row">
                    <div class="col-lg-6">
                        <?= $form->field($model, 'name')->input('text', ['class' => 'form-control', 'placeholder' => 'Nombre *'])->label(false) ?>
                    </div>
                    <div class="col-lg-6">
                        <?= $form->field($model, 'email')->input('email', ['class' => 'form-control', 'placeholder' => 'Correo Electrónico *'])->label(false) ?>
                    </div>
                </div>
                <?= $form->field($model, 'subject')->dropDownList(['consulta' => 'Consulta', 'queja' => 'Queja', 'sugerencia' => 'Sugerencia'], ['prompt'=>'Asunto', 'class' => 'form-control'])->label(false) ?>

                <?= $form->field($model, 'body')->textarea(['rows' => 7, 'class' => 'form-control', 'placeholder' => 'Mensaje *'])->label(false) ?>

                <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                    'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                    ]) ?>

                    <div class="form-group">
                        <?= Html::submitButton('Enviar', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                    </div>

                    <?php ActiveForm::end(); ?>

                </div>
            <?php endif; ?>
        </div>
    </div>
    <div class="map-section">
        <div class="infoContactContainer">
            <div>
                <i class="fa fa-map-marker"></i>
                <address class="text-center">
                    Calle 15 No 31 - 42, Bogotá D.C. <br>
                    Colombia
                </address>

            </div>
            <!-- <p>Teléfonos Línea Ciudadano</p>
            <p>Teléfonos Línea Empresarial</p>

            <ul class="list-unstyled">
            <li>
            Línea Gratuita Nacional 01 8000 910 270
        </li>
        <li>
        Línea Bogotá, D.C. (57 1) 592 55 55
    </li>
    <li>
    Línea Gratuita Nacional 01 8000 910 682
</li>
<li>
Línea Bogotá, D.C. (57 1) 404 94 94
</li>
</ul>
<p>Días hábiles de lunes a viernes de 7:00 a.m. - 7:00 p.m. y sábados de 8:00 a.m. - 1:00 p.m. en jornada continua.</p> -->
</div>
<div id="googleMap"></div>
</div>

</section>


<?php
    $this->registerJsFile(
        '@web/js/googlemaps.js',
        ['depends' => [\yii\web\JqueryAsset::className()]]
    );
?>

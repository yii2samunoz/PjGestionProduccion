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
<?php $this->beginBlock('jumbotron-pages'); ?>
<header class="jumbotron-pages jumbotron contact">
    <div class="container">

        <h1 class="text-center">Contáctenos</h1>

    </div>
</header>
<?php $this->endBlock(); ?>
<section class="site-contact">
    <div class="container">

        <div class="row">
            <div class="col-lg-6">
                <h1>Mensaje</h1>
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

                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                    <?= $form->field($model, 'name', ['template' => '{input}{beginLabel}Nombre{endLabel}<span class="focus-border"></span>'])->input('text', ['class' => 'form-control label-effect']) ?>

                    <?= $form->field($model, 'email', ['template' => '{input}{beginLabel}Correo Electrónico{endLabel}<span class="focus-border"></span>'])->input('email', ['class' => 'form-control label-effect']) ?>

                    <?= $form->field($model, 'subject', ['template' => '{beginLabel}Asunto{endLabel}{input}<span class="focus-border"></span>'])->dropDownList(['consulta' => 'Consulta', 'queja' => 'Queja', 'sugerencia' => 'Sugerencia'], ['prompt'=>'Seleccione una opción', 'class' => 'form-control label-effect'])->label('Asunto') ?>

                    <?= $form->field($model, 'body', ['template' => '{input}{beginLabel}Mensaje{endLabel}<span class="focus-border"></span>'])->textarea(['rows' => 3, 'class' => 'form-control label-effect']) ?>

                    <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                        'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                    ]) ?>

                    <div class="form-group">
                        <?= Html::submitButton('Enviar', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                    </div>

                <?php ActiveForm::end(); ?>

            </div>

            <div class="col-lg-6">
                <div class="container-map">
                    <div id="googleMap" style="height: 250px;"></div>        
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <p>
                            Teléfonos Línea Ciudadano
                        </p>
                        <p>
                            Teléfonos Línea Empresarial
                        </p>
                    </div>
                    <div class="col-lg-8">
                        
                        <ul class="list-unstyled">
                            <li>
                                Línea Gratuita Nacional 01 8000 910 270                    
                            </li>
                            <li style="margin-bottom: 1rem;">
                                Línea Bogotá, D.C. (57 1) 592 55 55                    
                            </li>
                            <li>
                                Línea Gratuita Nacional 01 8000 910 682                    
                            </li>
                            <li>
                                Línea Bogotá, D.C. (57 1) 404 94 94                    
                            </li>
                        </ul>
                    </div>
                    <p style="padding-left: 1rem;  ">
                        Días hábiles de lunes a viernes de 7:00 a.m. - 7:00 p.m. y sábados de 8:00 a.m. - 1:00 p.m. en jornada continua.
                    </p>

                </div>






            </div>
        </div>
        <?php endif; ?>


    </div>    
    
</section>


<?php 
    $this->registerJsFile(
        '@web/js/googlemaps.js',
        ['depends' => [\yii\web\JqueryAsset::className()]]
    );
?>
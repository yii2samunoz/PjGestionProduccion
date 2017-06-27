<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
?>
<section class="site-login">
    <div class="container">
        <div class="row">

            <div class="col-lg-8 col-lg-offset-2 form-wrap">
                <div class="form-container">
                    <header class="form-header">
                        <!-- <h2><strong>Red de Conocimiento <br> Gestión de la Producción</strong></h2> -->
                        <h2>Iniciar Sesión</h2>
                    </header>
                    
                    <div class="form-inner">                    
                        <?php $form = ActiveForm::begin([
                            'id' => 'login-form',
                            'fieldConfig' => [
                                'template' => "{label}\n<div>{input}</div>\n<div>{error}</div>",
                                'labelOptions' => ['class' => 'control-label'],
                            ],
                        ]); ?>

                            <?= $form->field($model, 'username', ['template' => '{input}<label class="control-label" for="loginform-username">Correo Electrónico</label><span class="focus-border"></span>'])->input('email', ['class' => 'form-control label-effect', 'autofocus' => true]) ?>

                            <?= $form->field($model, 'password', ['template' => '{input}{beginLabel}Contraseña{endLabel}<span class="focus-border"></span>'])->input('password', ['class' => 'form-control label-effect']) ?>

                            <?= $form->field($model, 'rememberMe')->checkbox([
                                'template' => "<div>{input}{label}</div>\n<div>{error}</div>",
                            ]) ?>

                            <div class="form-group">
                                <?= Html::submitButton('Inicia Sesión', ['class' => 'btn btn-primary login-button', 'name' => 'login-button']) ?>
                            </div>

                        <?php ActiveForm::end(); ?>

                        <!-- <div style="color:#999;">
                            You may login with <strong>admin@yii.com/admin</strong> or <strong>demo@yii.com/demo</strong>.<br>
                            To modify the username/password, please check out the code <code>app\models\User::$users</code>.
                        </div> -->
                    </div>
                    
                </div>

                
            </div>
        </div>

        <div class="text-center">
            <!-- <h3 class="text-center"><strong>Red de Conocimiento</strong></h3> -->
            <?= Html::img('@web/images/logoProyectoGris.png', ['class' => 'redConocimientoLogo-login', 'alt' => 'Logo Red Conocimiento']) ?>
            
        </div>

    </div>

</section>
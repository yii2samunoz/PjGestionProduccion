<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
$this->title = 'My Yii Application';
?>
<?php $this->beginBlock('navbar-index'); ?>
<?php $this->endBlock(); ?>
<div class="site-index">

    <div class="jumbotron jumbotron-index hero-index">
        <div class="container">
            <h1 class="jumbotron-title text-right">Red de Conocimiento<br>Gestión de la producción</h1>

            <p class="lead">You have successfully created your Yii-powered application.</p>

            <div class="mouse center-block">
                <span class="scroll-mouse"></span>
            </div>

            <nav class="social-networks-right">
                <a href="" class="facebook-link"><i class="fa fa-facebook fa-2x"></i></a>
                <a href="" class="twitter-link"><i class="fa fa-twitter fa-2x"></i></a>
                <a href="" class="instagram-link"><i class="fa fa-instagram fa-2x"></i></a>
                <a href="" class="google-plus-link"><i class="fa fa-google-plus fa-2x"></i></a>
            </nav>
            
        </div>
        <!-- <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p> -->
    </div>

    <div class="body-content">

        <section class="objectives-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <article class="text-center objectives-article">
                            <h1 class="objectives-title">Misión</h1>

                            <p>Articula la respuesta institucional en las áreas temáticas de gestión de operaciones industriales, 
                                propendiendo por el logro de estándares internacionales de productividad, garantizando calidad y pertinencia 
                                de la formación profesional.</p>                            
                        </article>
                        <article class="text-center objectives-article">
                            <h1 class="objectives-title">Visión</h1>
                            <p>Para el año 2020 la Red de Conocimiento de Gestión de la Producción será referente a nivel nacional y en el 
                            Sena, en la actualización de diseños curriculares, nuevos programas de formación, capacitación, transferencia 
                            tecnológica, innovación y modernización de ambientes. Para el beneficio de la población colombiana y el sector 
                            productivo.</p>
                        </article>
                        <article class="objectives-article">
                            <h1 class="text-center objectives-title">Objetivos Estratégicos</h1>
                            <ul class="text-justify">
                                <li>Estandarizar los elementos necesarios cambiantes, perfil de instructores, materiales y diseños que garanticen la calidad de la Formación Profesional Integral.</li>
                                <li>Fortalecer el relacionamiento con el sector productivo y gubernamental para diseño e implementación de políticas, estrategias y programas que dinamicen la competitividad y productividad empresarial.</li>
                                <li>Establecer alianzas a nivel internacional para fortalecer las capacidades del talento humano de la Red.</li>
                                <li>Desarrollar actividades que permitan definir las líneas temáticas de los semilleros de investigación para incursionar en la estrategia Sennova y el sector externo, apoyando los centros asociados a la red.</li>
                            </ul>
                        </article>
                    </div>
                    
                </div>            
            </div>            
        </section>
        <div class="big-section">           
        
            <section class="news-section">
                <div class="container news-section-content">
                    <div class="row">
                        
                        <div class="col-lg-4">
                            <div class="news-title-container">
                                <h1>Noticias de la red SENA</h1>
                                <span class="fa fa-fw fa-newspaper-o picture-icon"></span>

                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="owl-carousel">
                                <div class="news-container">
                                    <figure>
                                        <div class="news-image-container">
                                            <?= Html::img('@web/images/DAMyzo9UQAET6cY.jpg', ['class' => 'photo-news', 'alt' => 'photo-news']) ?>
                                        </div>
                                        <div class="news-description">
                                            <p>Consejo Directivo #SENA aprueba entrega de recursos del #FondoEmprenderSENA 
                                            por más de $38 mil millones. Más empresas y empleos para el país</p>
                                            <p class="news-date"><i class="fa fa-calendar"></i> 11/07/2017</p>

                                        </div>
                                    </figure>
                                    <?= Html::img('@web/images/news-background.svg', ['class' => 'bimagen', 'alt' => 'news-figure']) ?>
                                </div>
                                 <div class="news-container">
                                    <figure>
                                        <div class="news-image-container">
                                            <?= Html::img('@web/images/DC9KkXeWAAAhouU.jpg', ['class' => 'photo-news', 'alt' => 'photo-news']) ?>                                        
                                        </div>
                                        <div class="news-description">
                                            <p>#FondoEmprenderSENA será más ágil y moderno Infórmese ingresando al enlace 
                                            👉🏼  <a href="https://goo.gl/XDPoB5 ">https://goo.gl/XDPoB5</a></p>
                                            <p class="news-date"><i class="fa fa-calendar"></i> 23/07/2017</p>
                                        </div>
                                    </figure>
                                    <?= Html::img('@web/images/news-background.svg', ['class' => 'bimagen', 'alt' => 'news-figure']) ?>
                                </div>
                                 <div class="news-container">
                                    <figure>
                                        <div class="news-image-container">
                                            <?= Html::img('@web/images/DC83MefWAAAP94A.jpg', ['class' => 'photo-news', 'alt' => 'photo-news']) ?>
                                        </div>
                                        <div class="news-description">
                                            <p>Estamos #AlAire en #SENARadio por @RadNalCo con el equipo #SENA que produjo una serie animada 
                                            para niños en 3D.</p>
                                            <p class="news-date"><i class="fa fa-calendar"></i> 22/07/2017</p>
                                        </div>
                                    </figure>
                                    <?= Html::img('@web/images/news-background.svg', ['class' => 'bimagen', 'alt' => 'news-figure']) ?>

                                </div>
                            </div>                        
                        </div>
                    </div>
                </div>
            </section>

        </div>
        <section class="courses-section">
            <div class="container">
                <h1 class="text-center" style="font-size: 3.4rem;">Programas de Formación SENA</h1>
               <div class="row">
                    <div class="col-lg-8">


                       <div class="row course-card">
                           <div class="col-lg-5">
                                <h2 class="text-center" style="font-size: 3.4rem;">Técnicos</h2>
                                <span class="fa fa-fw fa-graduation-cap"></span>
                           </div>
                           <div class="col-lg-7">
                               <ul class="list-unstyled courses-list">
                                   <li>Salud Ocupacional</li>
                                   <li>Alistamiento y operación de maquinaria para la producción industrial</li>
                                   <li>Procesos de manufactura</li>
                               </ul>
                           </div>
                       </div>
                       <div class="row course-card">
                           <div class="col-lg-5">
                                <h2 class="text-center" style="font-size: 3.4rem;">Tecnólogos</h2>
                                <span class="fa fa-fw fa-graduation-cap"></span>
                           </div>
                           <div class="col-lg-7">
                               <ul class="list-unstyled courses-list">
                                   <li>Gestión integrada de la calidad, medio ambiente, seguridad y salud ocupacional</li>
                                   <li>Gestión de la producción industrial</li>
                                   <li>Gestión de recursos en plantas de producción</li>
                                   <li>Salud ocupacional</li>
                               </ul>
                           </div>
                       </div>
                       <div class="row course-card">
                           <div class="col-lg-5">
                                <h2 class="text-center" style="font-size: 3.4rem;">Especialización Tecnológica</h2>
                                <span class="fa fa-fw fa-graduation-cap"></span>
                           </div>
                           <div class="col-lg-7">
                               <ul class="list-unstyled courses-list">
                                   <li>Gestión en laboratorios de ensayo y calibración - Norma ISO/IEC 17025</li>
                                   <li>Supervisión de buenas prácticas de manufactura</li>
                               </ul>
                           </div>
                       </div>
                    </div>
                    <div class="col-lg-4">
                        <!--<?= Html::img('@web/images/student.png', ['alt' => 'student']) ?>-->                            
                    </div>
               </div> 
            </div>

        </section>
        <div class="second-big-section">
            <section class="survery-section">
                <div class="container survery-container">
                    <h1 class="survery-title">Encuestas de la red SENA</h1>
                    <div class="col-lg-3 text-right">
                        <div class="survery-title-container">
                            <h1></h1>
                            <i class="fa fa- fa-x2"></i>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <ul class="list-unstyled list-survery">
                            <li class="row">
                                    <p class="col-md-9 survery-description"><i class="fa fa-fw fa-circle"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                    <a href="" class="survery-link col-md-3"><i class="fa fa-external-link"></i> Ir a la encuesta</a>
                            </li>
                            <li class="row">
                                    <p class="col-md-9 survery-description"><i class="fa fa-fw fa-circle"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit,  amet, consectetur adipisicing amet, consectetur adipisicing  amet, consectetur adipisicing</p>
                                    <a href="" class="survery-link col-md-3"><i class="fa fa-external-link"></i> Ir a la encuesta</a>
                            </li>
                            <li class="row">
                                    <p class="col-md-9 survery-description"><i class="fa fa-fw fa-circle"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit, consectetur adipisicing elitconsectetur adipisicing elitconsectetur adipisicing elit</p>
                                    <a href="" class="survery-link col-md-3"><i class="fa fa-external-link"></i> Ir a la encuesta</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
            <section class="gallery-section clearfix">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <h1 class="gallery-title">Galería SENA</h1>
                            <p>loLorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur explicabo, molestiae deserunt.</p>
                            <span class="fa fa-fw fa-picture-o picture-icon"></span>
                        </div>
                        <div class="col-lg-6 galleryccol">
                            <div class="col-lg-6 galleryc-leftpadding">
                                <figure class="photo-gallery-container photo-gallery-container1 second-image-container"></figure>
                            </div>
                            <div class="col-lg-6 galleryc-rightpadding">
                                <figure class="photo-gallery-container photo-gallery-container2 second-image-container"></figure>
                            </div>
                            <div class="button-gallery-container">
                                <button class="gallerybox">Ver más</button>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="hidden">
                    <?= Html::img('@web/images/gallery/01.jpg', ['class' => 'gallerybox', 'alt' => 'photo-gallery', 'height' => '100%']) ?>
                    <?= Html::img('@web/images/gallery/02.jpg', ['class' => 'gallerybox', 'alt' => 'photo-gallery', 'height' => '100%']) ?>
                    <?= Html::img('@web/images/gallery/03.jpg', ['class' => 'gallerybox', 'alt' => 'photo-gallery', 'height' => '100%']) ?>
                    <?= Html::img('@web/images/gallery/04.jpg', ['class' => 'gallerybox', 'alt' => 'photo-gallery', 'height' => '100%']) ?>
                    <?= Html::img('@web/images/gallery/05.jpg', ['class' => 'gallerybox', 'alt' => 'photo-gallery', 'height' => '100%']) ?>
                    <?= Html::img('@web/images/gallery/06.jpg', ['class' => 'gallerybox', 'alt' => 'photo-gallery', 'height' => '100%']) ?>
                    <?= Html::img('@web/images/gallery/07.jpg', ['class' => 'gallerybox', 'alt' => 'photo-gallery', 'height' => '100%']) ?>
                    <?= Html::img('@web/images/gallery/08.jpg', ['class' => 'gallerybox', 'alt' => 'photo-gallery', 'height' => '100%']) ?>
                    <?= Html::img('@web/images/gallery/09.jpg', ['class' => 'gallerybox', 'alt' => 'photo-gallery', 'height' => '100%']) ?>
                    <?= Html::img('@web/images/gallery/10.jpg', ['class' => 'gallerybox', 'alt' => 'photo-gallery', 'height' => '100%']) ?>
                    <?= Html::img('@web/images/gallery/11.jpg', ['class' => 'gallerybox', 'alt' => 'photo-gallery', 'height' => '100%']) ?>
                    <?= Html::img('@web/images/gallery/12.jpg', ['class' => 'gallerybox', 'alt' => 'photo-gallery', 'height' => '100%']) ?>
                    <?= Html::img('@web/images/gallery/13.jpg', ['class' => 'gallerybox', 'alt' => 'photo-gallery', 'height' => '100%']) ?>
                    <?= Html::img('@web/images/gallery/14.jpg', ['class' => 'gallerybox', 'alt' => 'photo-gallery', 'height' => '100%']) ?>
                    <?= Html::img('@web/images/gallery/15.jpg', ['class' => 'gallerybox', 'alt' => 'photo-gallery', 'height' => '100%']) ?>
                    <?= Html::img('@web/images/gallery/16.jpg', ['class' => 'gallerybox', 'alt' => 'photo-gallery', 'height' => '100%']) ?>
                    <?= Html::img('@web/images/gallery/17.jpg', ['class' => 'gallerybox', 'alt' => 'photo-gallery', 'height' => '100%']) ?>
                    <?= Html::img('@web/images/gallery/18.png', ['class' => 'gallerybox', 'alt' => 'photo-gallery', 'height' => '100%']) ?>
                    <?= Html::img('@web/images/gallery/19.jpg', ['class' => 'gallerybox', 'alt' => 'photo-gallery', 'height' => '100%']) ?>
                    <?= Html::img('@web/images/gallery/20.jpg', ['class' => 'gallerybox', 'alt' => 'photo-gallery', 'height' => '100%']) ?>
                    <?= Html::img('@web/images/gallery/21.jpg', ['class' => 'gallerybox', 'alt' => 'photo-gallery', 'height' => '100%']) ?>
                    <?= Html::img('@web/images/gallery/22.jpg', ['class' => 'gallerybox', 'alt' => 'photo-gallery', 'height' => '100%']) ?>
                    <?= Html::img('@web/images/gallery/23.jpg', ['class' => 'gallerybox', 'alt' => 'photo-gallery', 'height' => '100%']) ?>
                    <?= Html::img('@web/images/gallery/24.jpg', ['class' => 'gallerybox', 'alt' => 'photo-gallery', 'height' => '100%']) ?>
                    <?= Html::img('@web/images/gallery/25.jpg', ['class' => 'gallerybox', 'alt' => 'photo-gallery', 'height' => '100%']) ?>
                    <?= Html::img('@web/images/gallery/26.jpg', ['class' => 'gallerybox', 'alt' => 'photo-gallery', 'height' => '100%']) ?>
                    <?= Html::img('@web/images/gallery/27.jpg', ['class' => 'gallerybox', 'alt' => 'photo-gallery', 'height' => '100%']) ?>
                    <?= Html::img('@web/images/gallery/28.jpg', ['class' => 'gallerybox', 'alt' => 'photo-gallery', 'height' => '100%']) ?>   
                </div>
            </section>

        </div>

    </div> <!-- /body-content -->

</div>
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
                        <i class="fa fa-fw fa-phone"></i> <a href="tel://5925555">Líneas Gratuitas Atención al Ciudadano: Bogotá (57 1) 592 55 55</a>
                    </li>
                    <li>
                        <i class="fa fa-fw fa-phone"></i> <a href="tel://018000910270">Resto del país: 01 8000 910270</a>
                    </li>
                    <li>
                        <i class="fa fa-fw fa-phone"></i> <a href="tel://4049494">Líneas Gratuitas Atención al Empresario: Bogotá (57 1) 404 94 94</a>
                    </li>
                    <li>
                        <i class="fa fa-fw fa-phone"></i> <a href="tel://018000910682">Resto del país: 01 8000 910682</a>
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
            <p class="pull-left">&copy; Red de Conocimiento - Gestión de la Producción <?= date('Y') ?></p>        
        </div>
    </div>
</footer>
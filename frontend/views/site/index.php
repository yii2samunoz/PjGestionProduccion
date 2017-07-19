<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
$this->title = 'My Yii Application';
?>
<div class="site-index">
    <header class="jumbotron jumbotron-index hero-index">
        <div class="owl-carousel" id="hCarousel">
            <div class="imageContainer">
                <?= Html::img('@web/images/hero.jpg', ['class' => 'featured-image', 'alt' => 'hero']) ?>
                <div class="jumbotron-container container">
                    <h1 class="jumbotron-title text-right">Red de Conocimiento<br>Gestión de la producción</h1>
                </div>
            </div>
            <div class="imageContainer">
                <?= Html::img('@web/images/CS_howdoi.jpg', ['class' => 'featured-image', 'alt' => 'hero']) ?>
                <div class="jumbotron-container">
                    <h1 class="jumbotron-title text-right">Estudia en nuestra <strong>institución</strong></h1>
                </div>
            </div>
        </div>
        <i class="arrow-header fa fa-chevron-down"></i>
        <div class="container">

            <!--<div class="mouse center-block">
            <span class="scroll-mouse"></span>
        </div>-->

            <nav class="social-networks-right">
                <a href="" class="facebook-link"><i class="fa fa-facebook fa-2x"></i></a>
                <a href="" class="twitter-link"><i class="fa fa-twitter fa-2x"></i></a>
                <a href="" class="instagram-link"><i class="fa fa-instagram fa-2x"></i></a>
                <a href="" class="google-plus-link"><i class="fa fa-google-plus fa-2x"></i></a>
            </nav>
        </div>
        <!-- <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p> -->
    </header>


    <div class="body-content">
        <section class="infoSection">
            <div class="container infoContainer">
                <div class="column-info">
                    <h3 class="text-uppercase">Nuestra Misión</h3>
                    <p class="info-project-text">Articula la respuesta institucional en las áreas temáticas de gestión de operaciones industriales,
                        propendiendo por el logro de estándares internacionales de <strong>productividad</strong>, garantizando <strong>calidad</strong> y pertinencia
                        de la formación profesional.</p>
                </div>
                <div class="column-info">
                    <h3 class="text-uppercase">Nuestra Visión</h3>
                    <p class="info-project-text"><strong>Para el año 2020</strong> la Red de Conocimiento de Gestión de la Producción será referente a nivel nacional y en el Sena,
                        en la actualización de diseños curriculares, nuevos programas de formación, capacitación, transferencia
                        tecnológica, innovación y modernización de ambientes. Para el beneficio de la población colombiana y el sector
                        productivo.</p>
                </div>
                <div class="column-info">
                    <h3 class="text-uppercase">Objetivos Estratégicos</h3>
                    <div class="info-text">
                        <ul>
                            <li>Estandarizar los elementos necesarios cambiantes, perfil de instructores, materiales y diseños que garanticen la calidad de la Formación Profesional Integral.</li>
                            <li>Fortalecer el relacionamiento con el sector productivo y gubernamental para diseño e implementación de políticas, estrategias y programas que dinamicen la competitividad y productividad empresarial.</li>
                            <li>Establecer alianzas a nivel internacional para fortalecer las capacidades del talento humano de la Red.</li>
                            <li>Desarrollar actividades que permitan definir las líneas temáticas de los semilleros de investigación para incursionar en la estrategia Sennova y el sector externo, apoyando los centros asociados a la red.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="coursesSection">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="owl-carousel" id="courseCarousel1">
                            <article class="courseItem">
                                <div class="imageContainer">
                                    <?= Html::img('@web/images/myhc_10072.jpg', ['class' => 'featured-image', 'alt' => 'Curso Imágen']) ?>
                                    <div class="imageInfo">
                                        <div class="imageInfoContainer">
                                            <!-- <h4 class="courseCategory">Técnico</h4> -->
                                            <?= Html::a('Salud Ocupacional', ['site/coursedetail'], ['class' => 'imageInfoTitle']) ?>
                                            <span><i class="fa fa-fw fa-calendar"></i>Inicio Clases: 15-abril-2018</span>
                                            <span><i class="fa fa-fw fa-clock-o"></i>Duración: 12 meses</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="courseDescription">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, maxime quaerat nam, saepe fugiat cumque at illo et quo
                                        autem recusandae deserunt magni aliquam hic.</p>
                                    <div>
                                        <?= Html::a('Leer más', ['site/coursedetail'], ['class' => 'link']) ?>
                                    </div>
                                </div>
                            </article>
                            <article class="courseItem">
                                <div class="imageContainer">
                                    <?= Html::img('@web/images/Female-engineering-students.jpg', ['class' => 'featured-image', 'alt' => 'Curso Imágen']) ?>
                                    <div class="imageInfo">
                                        <div class="imageInfoContainer">
                                            <?= Html::a('Alistamiento y operación de maquinaria para la producción industrial', ['site/coursedetail'], ['class' => 'imageInfoTitle']) ?>
                                            <span><i class="fa fa-fw fa-calendar"></i>Inicio Clases: 15-abril-2018</span>
                                            <span><i class="fa fa-fw fa-clock-o"></i>Duración: 12 meses</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="courseDescription">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, maxime quaerat nam, saepe fugiat cumque at illo et quo
                                        autem recusandae deserunt magni aliquam hic.</p>
                                    <?= Html::a('Leer más', ['site/coursedetail'], ['class' => 'link']) ?>
                                </div>
                            </article>
                            <article class="courseItem">
                                <div class="imageContainer">
                                    <?= Html::img('@web/images/Female-engineering-students.jpg', ['class' => 'featured-image', 'alt' => 'Curso Imágen']) ?>
                                    <div class="imageInfo">
                                        <div class="imageInfoContainer">
                                            <?= Html::a('Alistamiento y operación de maquinaria para la producción industrial', ['site/coursedetail'], ['class' => 'imageInfoTitle']) ?>
                                            <span><i class="fa fa-fw fa-calendar"></i>Inicio Clases: 15-abril-2018</span>
                                            <span><i class="fa fa-fw fa-clock-o"></i>Duración: 12 meses</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="courseDescription">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, maxime quaerat nam, saepe fugiat cumque at illo et quo
                                        autem recusandae deserunt magni aliquam hic.</p>
                                    <?= Html::a('Leer más', ['site/coursedetail'], ['class' => 'link']) ?>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="course2"></div>
            <div class="course3"></div> -->
        </section>
        <section class="clearfix newsSection">
            <div class="container">
                <div class="sectionDescription text-center">
                    <h1>Our Latest News Updates</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil optio at vel, a soluta consequatur.</p>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 col-xs-12">
                        <article class="newsCard">
                            <div class="imageContainer">
                                <div class="news-date">
                                    <div class="text-uppercase">JUL</div>
                                    <div>20</div>
                                </div>
                                <?= Html::img('@web/images/DAMyzo9UQAET6cY.jpg', ['class' => 'featured-image', 'alt' => 'Noticia Imágen']) ?>
                            </div>
                            <div class="newsBody">
                                <p>Consejo Directivo #SENA aprueba entrega de recursos del #FondoEmprenderSENA
                                por más de $38 mil millones. Más empresas y empleos para el país</p>
                            </div>
                        </article>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-xs-12">
                        <article class="newsCard">
                            <div class="imageContainer">
                                <div class="news-date">
                                    <div class="text-uppercase">JUL</div>
                                    <div>20</div>
                                </div>
                                <?= Html::img('@web/images/DC83MefWAAAP94A.jpg', ['class' => 'featured-image', 'alt' => 'Noticia Imágen']) ?>
                            </div>
                            <div class="newsBody">
                                <p>Estamos #AlAire en #SENARadio por @RadNalCo con el equipo #SENA que produjo una serie animada
                                para niños en 3D.</p>
                            </div>
                        </article>

                    </div>
                    <div class="col-lg-4 col-sm-6 col-xs-12">
                        <article class="newsCard">
                            <div class="imageContainer">
                                <div class="news-date">
                                    <div class="text-uppercase">JUL</div>
                                    <div>20</div>
                                </div>
                                <?= Html::img('@web/images/DC9KkXeWAAAhouU.jpg', ['class' => 'featured-image', 'alt' => 'Noticia Imágen']) ?>
                            </div>
                            <div class="newsBody">
                                <p>#FondoEmprenderSENA será más ágil y moderno Infórmese ingresando al enlace
                                👉🏼</p>
                            </div>
                        </article>
                    </div>
                </div>
            </div>

        </section>
        <section class="clearfix surverySection">
            <div class="container">
                <div class="sectionDescription text-center">
                    <h1>Our Surverys</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil optio at vel, a soluta consequatur.</p>
                </div>
                <div class="table-responsive">
                    <table class="survery-table">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Descripción</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>*</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis pariatur aliquid molestiae ex,
                                    culpa consequuntur recusandae accusantium, nostrum expedita temporibus quos velit dolorum ipsam beatae!</td>
                                <td><a href="https://goo.gl/forms/WkC2sucoJIRgocsg1">Ir a la encuesta</a></td>
                            </tr>
                            <tr>
                                <td>*</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis pariatur aliquid molestiae ex,
                                    culpa consequuntur recusandae accusantium, nostrum expedita temporibus quos velit dolorum ipsam beatae!</td>
                                <td><a href="https://goo.gl/forms/WkC2sucoJIRgocsg1">Ir a la encuesta</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        <section class="clearfix gallerySection">
            <div class="col-lg-6 imageContainer">
                <?= Html::img('@web/images/gallery/main-img2.jpg', ['class' => 'featured-image', 'alt' => 'photo-gallery', 'width' => '100%']) ?>
            </div>
            <div class="col-lg-6 imageContainer">
                <?= Html::img('@web/images/gallery/main-img1.jpg', ['class' => 'featured-image', 'alt' => 'photo-gallery', 'width' => '100%']) ?>
            </div>
            <div class="buttonGalleryContainer">
                <button type="button" class="gallerybox"><i class="fa fa-fw fa-picture-o"></i>Ver más fotos</button>
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
    </div><!-- /body-content -->

</div>

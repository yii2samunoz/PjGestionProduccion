<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Detalle del curso';
?>
<div class="site-course-detail">
    <!-- <header>
        <div class="projBackground">
            <div class="proj p0"></div>
        </div>
    </header> -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-sm-12">
                <div class="imageContainer">
                    <?= Html::img('@web/images/myhc_10072.jpg', ['class' => 'featured-image courseImage', 'alt' => 'Curso Imágen']) ?>
                </div>
                <div>
                    <div class="courseDetailNameContainer">
                        <h3 class="courseDetailName">Course Name</h3>
                    </div>
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab"><i class="fa fa-fw fa-graduation-cap"></i>Overview</a></li>
                        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa fa-fw fa-calendar"></i>Week Courses Schedule</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="home">
                            <div class="tab-details-area">
                                <p>Lorem Ipsum is simply dummy text of the printin and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</p>
                                <h4>Course Description</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                <h4>Certification</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                <p>Pellentesque lacus vamus lorem arcu semper duiac Cras ornare arcu avamus nda leo. Etiam ind arcu. Morbi justo mauri segtempus pharetra interdum congue semper purus. Lorem ipsum dolor sit amet sed consectetur adipisicing elit sed eiusmod tempor incididunt Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="profile">
                            <div class="tab-details-area">
								<div class="tab-details-info">
									<h3>WEEKLY COURSES SCHEDULE</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum officia unde quas dolorum inventore voluptatem fugiat neque! Sunt ad harum dolores voluptatem libero, tempore fugit perspiciatis commodi voluptas, nesciunt quibusdam voluptatibus, dolor minima inventore accusantium sed aliquam, sint nihil cumque consectetur. Optio exercitationem tempora deleniti. Laborum et distinctio voluptas, rerum.</p>
								</div>
								<div class="table-content table-responsive">
    								<table class="table table-course-detail table-hover table-bordered">
    									<thead>
    										<tr>
    											<td>Mon</td>
    											<td>Tues</td>
    											<td>Wed</td>
    											<td>Thurs</td>
    											<td>Friday</td>
    										</tr>
    									</thead>
    									<tbody>
    										<tr>
    											<td>8:30am - 10:45am</td>
    											<td>8:30am - 10:45am</td>
    											<td>8:30am - 10:45am</td>
    											<td>8:30am - 10:45am</td>
    											<td>9:30am - 10:45am</td>
    										</tr>
    										<tr>
    											<td>8:30am - 10:45am</td>
    											<td></td>
    											<td>8:30am - 10:45am</td>
    											<td></td>
    											<td>8:30am - 10:45am</td>
    										</tr>
    										<tr>
    											<td>8:30am - 10:45am</td>
    											<td>8:30am - 10:45am</td>
    											<td></td>
    											<td>8:30am - 10:45am</td>
    											<td></td>
    										</tr>
    										<tr>
    											<td>8:30am - 10:45am</td>
    											<td></td>
    											<td>8:30am - 10:45am</td>
    											<td>8:30am - 10:45am</td>
    											<td></td>
    										</tr>
    										<tr>
    											<td>8:30am - 10:45am</td>
    											<td>8:30am - 10:45am</td>
    											<td>8:30am - 10:45am</td>
    											<td>8:30am - 10:45am</td>
    											<td>8:30am - 10:45am</td>
    										</tr>
    									</tbody>
    								</table>
							    </div>
							    <p>Dolores, a magni nostrum deleniti voluptatem libero at, maiores nisi rem perspiciatis ipsa aliquam aspernatur. Totam mollitia perferendis veniam porro eligendi rem et laborum, corporis. Asperiores temporibus delectus aliquam aspernatur obcaecati laborum in officiis maxime ex, doloremque optio cumque</p>
							</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-12">

                <div class="courseInfoContainer">
                    <div class="courseInfoTitle">
                        <h3>Info Clases</h3>
                    </div>
                    <ul class="list-unstyled courseListInfo">
                        <li><i class="fa fa-fw fa-calendar"></i>Fecha de Inicio: Abril 11, 2018</li>
                        <li><i class="fa fa-fw fa-birthday-cake"></i>Edad mínima: 16 Años</li>
                        <li><i class="fa fa-fw fa-clock-o"></i>Duración Clase: 7:00 am - 1:00 pm</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

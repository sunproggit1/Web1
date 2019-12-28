<?php
use yii\helpers\Html;
$bgimg=Html::img('images/finance.jpeg',['width'=>"400px", 'height'=>'240px']);
$imgopt=Html::img('images/optimization.jpeg',['width'=>"400px", 'height'=>'240px']);
$imgnewprod= Html::img('images/newproduct.jpeg',['width'=>"400px", 'height'=>'240px']);
$imgmail=Html::img('images/mailservice.gif',['width'=>"400px", 'height'=>'240px']);
$imgfinance=Html::img('images/finance.jpeg',['width'=>"400px", 'height'=>'240px']);
$imgitsol= Html::img('images/itsolutions.jpeg',['width'=>"400px", 'height'=>'240px']);
$imgother=Html::img('images/other.jpeg',['width'=>"400px", 'height'=>'240px']);
$imgcourse=Html::img('images/courses.jpg',['width'=>"400px", 'height'=>'240px']);
/* @var $this yii\web\View */

$this->title = 'Идеи!';
?>
<div class="site-index">
    
        <p class="lead"><h1 align="center">Здесь находятся самые креативные идеи! Иди же, предложи свою идею!</h1></p>
    <br>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-6 col-md-6 col-xs-12">
                <h2 align="left">Оптимизация процессов</h2>
                <span align="center" class="btn btn-default imgcss"><?= Html::a($imgopt,['site/optimization']); ?></span>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-12">
                <h2 align="left">Новые продукты</h2>

                <span align="center" class="btn btn-default imgcss"><?= Html::a($imgnewprod,['site/newproduct']); ?></span>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-12">
                <h2 align="left">Почтовые услуги</h2>

                <span align="center" class="btn btn-default imgcss"><?= Html::a($imgmail,['site/mailservice']); ?></span>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-12">
                <h2 align="left">Финансовые и агентские услуги</h2>

                <span align="center" class="btn btn-default imgcss"><?= Html::a($imgfinance,['site/financy_agency']); ?></span>
            </div>
            <br><br>
            <div class="col-lg-6 col-md-6 col-xs-12">
                <h2 align="left">IT-решения</h2>

                <span align="center" class="btn btn-default imgcss"><?= Html::a($imgitsol,['site/it_solutions']); ?></span>          
          </div>
            <div class="col-lg-6 col-md-6 col-xs-12">
                <h2 align="left">Обучающие курсы</h2>

                <span align="center" class="btn btn-default imgcss"><?= Html::a($imgcourse,['site/courses']); ?></span>  </div>
        </div>
         <div class="col-lg-6 col-md-6 col-xs-12">
                <h2 align="left">Другие категории</h2>

                <span align="center" class="btn btn-default imgcss"><?= Html::a($imgother,['site/other_categories']); ?></span>  </div>
        </div>
        <div class="col-lg-6 col-md-6 col-xs-12"></div>

    </div>
</div>

<?php
use yii\helpers\Html;
$bgimg=Html::img('images/finance.jpeg',['class'=>'myImg']);
$imgopt=Html::img('images/optimization.jpeg',['width'=>"500px", 'height'=>'300px', 'class'=>'myImg']);
$imgnewprod= Html::img('images/newproduct.jpeg',['width'=>"500px", 'height'=>'300px']);
$imgmail=Html::img('images/mailservice.gif',['width'=>"500px", 'height'=>'300px']);
$imgfinance=Html::img('images/finance.jpeg',['width'=>"500px", 'height'=>'300px']);
$imgitsol= Html::img('images/itsolutions.jpeg',['width'=>"500px", 'height'=>'300px']);
$imgother=Html::img('images/other.jpeg',['width'=>"500px", 'height'=>'300px']);
/* @var $this yii\web\View */

$this->title = 'Ideas';
?>
<div class="site-index">
    <div class="jumbotron">
        <p class="lead"><h1 align="center">Most creative ideas places here!</h1></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-6">
                <h2 align="center">Process optimization</h2>
                <span align="center" class="btn btn-default"><?= Html::a($imgopt,['site/optimization']); ?></span>
            </div>
            <div class="col-lg-6">
                <h2 align="center">New product</h2>

                <span align="center" class="btn btn-default"><?= Html::a($imgnewprod,['site/optimization']); ?></span>
            </div>
            <br><br>
            <div class="col-lg-6">
                <h2 align="center">Mail service</h2>

                <span align="center" class="btn btn-default"><?= Html::a($imgmail,['site/optimization']); ?></span>
            </div>
            <div class="col-lg-6">
                <h2 align="center">Financial and agency service</h2>

                <span align="center" class="btn btn-default"><?= Html::a($imgfinance,['site/optimization']); ?></span>
            </div>
            <br><br>
            <div class="col-lg-6">
                <h2 align="center">IT-solutions</h2>

                <span align="center" class="btn btn-default"><?= Html::a($imgitsol,['site/optimization']); ?></span>          
          </div>
            <div class="col-lg-6">
                <h2 align="center">Other categories</h2>

                <span align="center" class="btn btn-default"><?= Html::a($imgother,['site/optimization']); ?></span>  </div>
        </div>

    </div>
</div>

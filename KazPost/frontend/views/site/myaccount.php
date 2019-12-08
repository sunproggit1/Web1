<?php
use yii\helpers\Html;
/* @var $this yii\web\View */

$this->title = 'My account';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Ideas</h1>

        <p class="lead">Most creatively ideas about process optimization places here.</p>

 <div class="col-lg-2">
     <div class="alert alert-info" role="alert">
        <?= Html::a('My ideas',['site/myideas']); ?>
</div>
    <div class="alert alert-warning" role="alert">
    <?= Html::a('Other Ideas',['site/otherideas']); ?>
</div>
        <div class="alert alert-success" role="alert">
    <?= Html::a('My data',['site/mydata']); ?>
</div>
<script type="text/javascript">
    var alerts=['My ideas','Other ideas','My data'];
        var bool=[true,true,true];var val=""; 
        function Boo1(){
            if(bool[0]==true || bool[1]==true || bool[2]==true){
            document.getElementsByClassName('surprise_alert')[0].innerHTML = alerts[0];
            document.getElementsByClassName('surprise_alert')[1].innerHTML = alerts[1];
            document.getElementsByClassName('surprise_alert')[2].innerHTML = alerts[2];
            bool[0]=false; bool[1]=false; bool[2]=false;}
            else if(bool[0]==false || bool[1]==false || bool[2]==false){
                val="";
            document.getElementsByClassName('surprise_alert')[0].innerHTML = val; 
            document.getElementsByClassName('surprise_alert')[1].innerHTML = val;
            document.getElementsByClassName('surprise_alert')[2].innerHTML = val;
            bool[0]=true; bool[1]=true; bool[2]=true;
            }
        }
</script>
 </div>
<div class="col-lg-10">
        <p class="lead"><h1 align="center">Most creative ideas places here!</h1></p>
        <p class="alert alert-danger">
        	

        </p>
</div>
    </div>

    <div class="body-content">

        <div class="row">
           
        </div>

    </div>
</div>

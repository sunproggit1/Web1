<?php

/* @var $this \yii\web\View */
/* @var $content string */
use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="wrap">
    <div class="cont">
        <?php
    $postimg = Html::img('images/logo_blue.24235eb1.svg',['width'=>"156", 'height'=>'18', 'class'=>'dd']);
    $postimg1 = Html::img('images/post.jpg',['width'=>"200px", 'height'=>'100px', 'class'=>'ss']);
   
    ?>
    <div id="postimg0" height="56" align="center" vertical-align="center">
    <?= Html::a($postimg,['/site/index']); ?>  
    </div>
    <?php
    NavBar::begin([
        
        'options' => [
            'class' => 'navbar-inverse dd',
        ],
    ]);
   
    $menuItems = [
        ['label' => 'Почтовые услуги', 'url' => 'https://post.kz/services/postal/all'],
        ['label' => 'Платежи', 'url' => 'https://post.kz/services/payments/all'],
        ['label' => 'Биржа идей', 'url' => ['/site/ideas']],
        ['label' => 'Мой Банк', 'url' => 'https://post.kz/bank'],
        ['label' => 'Переводы', 'url' => 'https://post.kz/card2card/'],
        ['label' => 'Путешествия', 'url' => 'https://ticket.post.kz/'],
        ['label' => 'Тарифы', 'url' => 'https://post.kz/rates/individual'],
        ['label' => 'E-commerce', 'url' => 'https://ff.post.kz'],
        ['label' => 'Аккаунт', 'url' => ['/site/myaccount']]
        ];
        ?> 

        <?php
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
    }
    ?></div>
    <?php
    echo Nav::widget([
        'options' => ['class' => 'dd navbar-nav navbar-left'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="dd">
<div class="footer__menu-container block">
    <ul class="footer__menu">
        <li class="footer__menu__item ">Услуги для Вас</li>
        <li class="footer__menu__item dd"><a href="/bank">Мой банк</a></li>
        <li class="footer__menu__item dd"><a href="/services/payments/all">Платежи</a></li>
        <li class="footer__menu__item dd"><a href="/card2card">Переводы</a></li>
        <li class="footer__menu__item dd"><a href="https://old.post.kz/currency">Курсы валют</a></li>
    </ul>
    <ul class="footer__menu">
        <li class="footer__menu__item ">Услуги для бизнеса</li>
        <li class="footer__menu__item dd"><a>Гибридная почта</a></li>
        <li class="footer__menu__item dd"><a href="/services/postal/all">Партионный трекинг</a></li>
        <li class="footer__menu__item dd"><a href="/prefills/ems">Заполнить почтовые бланки</a></li>
        <li class="footer__menu__item dd"><a href="/services/payments/all">Онлайн-платежи</a></li>
        <li class="footer__menu__item dd"><a href="/app/cabinet">Личный кабинет</a></li>
        <li class="footer__menu__item dd"><a href="https://api.post.kz">Открытые сервисы</a></li>
    </ul>
    <ul class="footer__menu">
        <li class="footer__menu__item ">О компании</li>
        <li class="footer__menu__item dd"><a href="https://post.kz/info/o-kompanii/o-nas">О нас</a></li>
        <li class="footer__menu__item dd"><a href="https://post.kz/info/o-kompanii/investoram-i-akcioneram">Инвесторам и акционерам</a></li>
        <li class="footer__menu__item dd"><a href="https://post.kz/info/o-kompanii/sovet-direktorov">Совет директоров</a></li>
        <li class="footer__menu__item dd"><a href="https://post.kz/info/o-kompanii/socialnaja-otvetstvennost">Устойчивое развитие</a></li>
        <li class="footer__menu__item dd"><a href="http://zakupki.kazpost.kz/">Закупки</a></li>
        <li class="footer__menu__item dd"><a href="https://post.kz/info/o-kompanii/vakansii">Вакансии</a></li>
        <li class="footer__menu__item dd"><a href="https://post.kz/info/press-centr/novosti">Новости</a></li>
    </ul>
    <ul class="footer__menu">
        <li class="footer__menu__item ">Помощь и поддержка</li>
        <li class="footer__menu__item dd"><a href="/departments/list">Карта сети</a></li>
        <li class="footer__menu__item dd"><a href="https://post.kz/help/faq">Часто задаваемые вопросы</a></li>
        <li class="footer__menu__item dd"><a href="/appeal">Электронные обращения</a></li>
    </ul>
</div>
</p>

            <hr> <p class="dd">
На сайте post.kz вы можете узнать индекс любых городов Казахстана. Почтовые индексы казахстанских городов Алматы, Астана, Актобе, Павлодар, Атырау, Уральск, Шымкента, Семея, Туркестана, Талдыкорган, Тараз, Кызылорда, Костанай, Экибастуз, Рудный, Кокшетау, Темиртау, Петропавловск, Усть-Каменогорск. Другие города, районы, поселки городского типа и деревни также имеют свои индекса, которые вы можете найти на сайте www.post.kz. Почтовый индекс Казпочты - последовательность букв или цифр, добавляемая к почтовому адресу с целью облегчения сортировки корреспонденции и посылок, в том числе автоматической. Его присваивает национальный почтовый оператор Республики Казахстан - АО "Казпочта". Вы можете найти индекс любого здания в Казахстане, просто введя в поле поиска название населенного пункта (город, район, поселок городского типа или деревня, например). Поиск индекса - удобный сервис. Ищите индексы на Post.kz!
</p>
<hr>
        <span class="pull-left"><?= $postimg1;?></span>

        <span class="pull-right dd">
    © АО «Казпочта», 2019. Все права защищены.&copy; <?= date('Y') ?>
</span>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

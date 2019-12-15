<?php
use yii\helpers\Html;
/* @var $this yii\web\View */

$this->title = 'Optimization process';
?>
<div class="site-index">

<!--main content start-->
<div class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <article class="post">
                    <div class="post-thumb">
                        
                            <div class="text-uppercase text-center"><?= Html::a('View Post',['site/blog']); ?></div>
                    </div>
                    <div class="post-content">
                        <header class="entry-header text-center text-uppercase">
                           
                            <h1 class="entry-title"><?= Html::a('New ideas for transfer optimization',['site/blog']); ?></a></h1>

                        </header>
                        <div class="entry-content">
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                tevidulabore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et
                                justo duo dolores rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem
                                ipsum dolor sit am Lorem ipsum dolor sitconsetetur sadipscing elitr, sed diam nonumy
                                eirmod tempor invidunt ut labore et dolore maliquyam erat, sed diam voluptua.
                            </p>

                            <div class="btn-continue-reading text-center text-uppercase">
                               <? Html::a('Continue reading','site/blog',['class'=>'more-link']); ?>
                            </div>
                        </div>
                        <div class="social-share">
                            <span class="social-share-title pull-left text-capitalize">By <a href="#">Rubel</a> On February 12, 2019</span>
                            <ul class="text-center pull-right">
                                <li><a class="s-facebook" href="#"><i class="fa fa-eye"></i></a></li>325
                            </ul>
                        </div>
                    </div>
                </article>
                <article class="post">
                    <div class="post-thumb">
                        <div class="text-uppercase text-center"><?= Html::a('View Post',['site/blog2']); ?></div>
                    </div>
                    <div class="post-content">
                        <header class="entry-header text-center text-uppercase">
                           
                            <h1 class="entry-title"><?= Html::a('New ideas for rollback optimization',['site/blog2']); ?></h1>


                        </header>
                        <div class="entry-content">
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                tevidulabore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et
                                justo duo dolores rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem
                                ipsum dolor sit am Lorem ipsum dolor sitconsetetur sadipscing elitr, sed diam nonumy
                                eirmod tempor invidunt ut labore et dolore maliquyam erat, sed diam voluptua.
                            </p>

                        </div>
                        <div class="social-share">
                            <span class="social-share-title pull-left text-capitalize">By <a href="#">Rubel</a> On February 12, 2016</span>
                            <ul class="text-center pull-right">
                                <li><a class="s-facebook" href="#"><i class="fa fa-eye"></i></a></li>325
                            </ul>
                        </div>
                    </div>
                </article>

                <ul class="pagination">
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                </ul>
            </div>
            <div class="col-md-4" data-sticky_column>
                <div class="primary-sidebar">
                    
                    <aside class="widget">
                        <h3 class="widget-title text-uppercase text-center">Popular Posts</h3>

                        <div class="popular-post">


                            <div class="text-uppercase text-center"><?= Html::a('New ideas for transfer optimization',['site/blog']); ?></div>

                            <div class="p-content">
                                <span class="p-date">February 15, 2016</span>

                            </div>
                        </div>
                         <div class="popular-post">


                            <div class="text-uppercase text-center"><?= Html::a('New ideas for rollback optimization',['site/blog2']); ?></div>

                            <div class="p-content">
                                <span class="p-date">February 15, 2016</span>

                            </div>
                        </div>
                    </aside>
                    <aside class="widget pos-padding">
                        <h3 class="widget-title text-uppercase text-center">Recent Posts</h3>

                         <div class="popular-post">


                            <div class="text-uppercase text-center"><?= Html::a('New ideas for transfer optimization',['site/blog']); ?></div>

                            <div class="p-content">
                                <span class="p-date">February 15, 2016</span>

                            </div>
                        </div>
                         <div class="popular-post">

                            <div class="text-uppercase text-center"><?= Html::a('New ideas for rollback optimization',['site/blog2']); ?></div>

                            <div class="p-content">
                                <span class="p-date">February 15, 2016</span>

                            </div>
                        </div>
                    </aside>
                    
                </div>
            </div>
        </div>
    </div>
</div>

    </div>

    <div class="body-content">

        <div class="row">
           
        </div>

    </div>
</div>

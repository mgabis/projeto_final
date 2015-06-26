<?php

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\helpers\BaseUrl as Url;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
        <div>
            <div class="row">
                <div class="col-md-3">
                    <img class="tam-lg" src="<?= Url::to(['img/logo1.png']); ?>">
                </div>
                <div class="col-md-6">
                    <form class="form-inline">
                        <div class="form-group">
                            <div class="form-group">

                                <input class="local-barra form-control" type="pesquisa" id="exampleInputEmail2" placeholder="Pesquisar Shows, Baladas, Teatro..." style="width: 550px">
                            </div>

                            <button class="local-boton btn btn-success" type="submit"  ><i class="glyphicon glyphicon-search"></i></button>
                    </form>
                </div>

            </div>
            <div class="col-md-3">
                <p class="pos-ola">Olá, Visitante</p>
                <a href="<?= Url::to(['site/login']); ?>">Entre</a>
                <a>Cadastre-se</a>
                <a>Carrinho</a><br>
            </div>
        </div>
        <?php $this->beginBody() ?>
        <div class="wrap">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="<?= Url::to(['site/index']); ?>">inicio</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="<?= Url::to(['site/show']); ?>">Shows<span class="sr-only">(current)</span></a></li>
                            <li><a href="<?= Url::to(['site/cinema']); ?>">Cinema</a></li>
                            <li><a href="<?= Url::to(['site/teatro']); ?>">Teatro</a></li>
                            <li><a href="<?= Url::to(['site/balada']); ?>">Balada</a></li>
                            <li><a href="<?= Url::to(['site/contact']); ?>">Contato</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
            <?php
            /* NavBar::begin([
              'brandLabel' => 'My Ticket.com',
              'brandUrl' => Yii::$app->homeUrl,
              'options' => [
              'class' => 'navbar-inverse navbar-fixed-top',
              ],
              ]);
              echo Nav::widget([
              'options' => ['class' => 'navbar-nav navbar-right'],
              'items' => [
              ['label' => 'Início', 'url' => ['/site/index']],
              ['label' => 'Sobre', 'url' => ['/site/about']],
              ['label' => 'Contato', 'url' => ['/site/contact']],
              ['label' => 'Pessoas', 'url' => ['/site/todas']],
              Yii::$app->user->isGuest ?
              ['label' => 'Login', 'url' => ['/site/login']] :
              ['label' => 'Logout (' . Yii::$app->user->identity->username . ')',
              'url' => ['/site/logout'],
              'linkOptions' => ['data-method' => 'post']],
              ],
              ]);
              NavBar::end(); */
            ?>

            <div class="container">
                <?=
                Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ])
                ?>
                <?= $content ?>
            </div>
        </div>

        <footer class="footer">
            <div class="container">
                <p class="pull-left">&copy; My Ticket <?= date('Y') ?></p>
                <p class="pull-right"><?= Yii::powered() ?></p>
            </div>
        </footer>

        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>

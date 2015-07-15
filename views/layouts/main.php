<?php

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\helpers\BaseUrl as Url;
use yii\web\View;

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
        <?php
        $this->head();
        view::registerJsFile('', '', '');
        ?>
    </head>
    <body>
        <div>
            <div class="row">
                <div class="col-md-3">
                    <a href="<?= Url::to(['site/index']); ?>" ><img class="tam-lg" src="<?= Url::to(['img/logo1.png']); ?>"></a>
                </div>
                <div class="col-md-6">
                    <form class="form-inline" action="<?= Url::to(['site/buscar']); ?>" method="GET">
                        <div class="form-group">
                            <div class="form-group">

                                <input class="local-barra form-control" type="text" id="exampleInputEmail2" name="termo" placeholder="Pesquisar Shows, Baladas, Teatro..." style="width: 550px">
                            </div>

                            <button class="local-boton btn btn-success" type="submit"  ><i class="glyphicon glyphicon-search"></i></button>
                        </div>
                    </form>


                </div>
                <div class="col-md-3">
                    <p class="pos-ola">Olá, Visitante</p>
                    <a href="<?= Url::to(['site/login']); ?>">Entre</a>
                    <a href="<?= Url::to(['person/create']); ?>">Cadastre-se</a>
                    <a>Carrinho</a><br>
                </div>
            </div>
            <?php $this->beginBody() ?>
            <div class="wrap">
                <nav class="navbar navbar-default">

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="icon-bar"><a href="<?= Url::to(['shows/show']); ?>">Shows</a></li>
                            <li class="icon-bar"><a href="<?= Url::to(['event-ballad/listar']); ?>">Balada</a></li>
                            <li class="icon-bar"><a href="<?= Url::to(['site/contact-form']); ?>">Contato</a></li>

                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <div class="insta"></div>
                        </ul>
                    </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <div class="container">



            <?php
//        Breadcrumbs::widget([
//            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
//        ])
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

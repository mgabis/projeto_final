<?php

use yii\helpers\Html;
use yii\helpers\BaseUrl as Url;

/* @var $this yii\web\View */
$this->title = 'Shows';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-show">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="row">
        <div class="col-lg-4">
            <a href="site/sonata"><img src="<?= Url::to(['img/images.jpg']); ?>" alt="..." class="img-rounded"></a>

            <a href="site/sonata"><h2>Sonata Arctica</h2></a>
            <p>Ainda que originária da gélida Finlândia, a banda Sonata Arctica desembarcará em Porto Alegre
                para aquecer ainda mais os corações metálicos da gauchada. Trabalhando na divulgação
                de seu mais recente disco, Pariah’s Child – sem deixar de fora do repertório belas composições
                dos álbuns anteriores –, o quinteto de power metal europeu se apresentará dia 27 de julho de 2015,
                às 20h, no Opinião (Rua José do Patrocínio, 834).</p>


        </div>
        <div class="col-lg-4">
            <img src="<?= Url::to(['img/reacao_cadeia.jpg']); ?>" alt="..." class="img-rounded">

            <h2>Reação em cadeia</h2>
            <p>A Reação em Cadeia está completando 15 anos em 2015! Para comemorar, a banda realizará nos dias 29 e 30 de julho
                um show acústico com os seus maiores sucessos para aquuecer os fãs neste inverno. O show será no Teatro CIEE
                às 21 horas, R. Dom Pedro II, 861 - Higienópolis, Porto Alegre - RS.</p>


        </div>

    </div>
</div>
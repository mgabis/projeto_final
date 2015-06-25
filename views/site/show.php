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
            <p>Ainda que origin�ria da g�lida Finl�ndia, a banda Sonata Arctica desembarcar� em Porto Alegre
                para aquecer ainda mais os cora��es met�licos da gauchada. Trabalhando na divulga��o
                de seu mais recente disco, Pariah�s Child � sem deixar de fora do repert�rio belas composi��es
                dos �lbuns anteriores �, o quinteto de power metal europeu se apresentar� dia 27 de julho de 2015,
                �s 20h, no Opini�o (Rua Jos� do Patroc�nio, 834).</p>


        </div>
        <div class="col-lg-4">
            <img src="<?= Url::to(['img/reacao_cadeia.jpg']); ?>" alt="..." class="img-rounded">

            <h2>Rea��o em cadeia</h2>
            <p>A Rea��o em Cadeia est� completando 15 anos em 2015! Para comemorar, a banda realizar� nos dias 29 e 30 de julho
                um show ac�stico com os seus maiores sucessos para aquuecer os f�s neste inverno. O show ser� no Teatro CIEE
                �s 21 horas, R. Dom Pedro II, 861 - Higien�polis, Porto Alegre - RS.</p>


        </div>

    </div>
</div>
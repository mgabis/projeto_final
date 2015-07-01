<?php

use yii\helpers\BaseUrl as Url;
use yii\bootstrap\Carousel;

/* @var $this yii\web\View */
$this->title = 'My Ticket';
?>
<div class="site-index">

    <div class="jumbotron">

        <div class="row">

            <img class="home" src="<?= Url::to(['img/logo1.png']); ?>">

            <?php
            echo Carousel::widget([
                'items' => [
                    // the item contains only the image
                    '<img class="img" src="' . Url::to(['img/sonata_arctica.jpg']) . '"/>',
                    '<img class="img" src="' . Url::to(['img/reacap.jpg']) . '"/>',
                    '<img class="img" src="' . Url::to(['img/neon1.jpg']) . '"/>',
                ]
            ]);
            ?>


        </div>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <a href="<?= Url::to(['site/sonata']); ?>"><img src="<?= Url::to(['img/images.jpg']); ?>" alt="..." class="img-rounded"></a>

                <a href="<?= Url::to(['site/sonata']); ?>" style="color: #000000"><h2>Sonata Arctica</h2></a>



            </div>
            <div class="col-lg-4">
                <img src="<?= Url::to(['img/reacao_cadeia.jpg']); ?>" alt="..." class="img-rounded">

                <h2>Rea��o em cadeia</h2>
                <p>A Rea��o em Cadeia est� completando 15 anos em 2015! Para comemorar, a banda realizar� nos dias 29 e 30 de julho
                    um show ac�stico com os seus maiores sucessos para aquuecer os f�s neste inverno. O show ser� no Teatro CIEE
                    �s 21 horas, R. Dom Pedro II, 861 - Higien�polis, Porto Alegre - RS.</p>


            </div>
            <div class="col-lg-4">
                <img src="<?= Url::to(['img/neon.jpg']); ?>" alt="..." class="img-rounded">
                <h2>Neon</h2>
                <p>Os DJs residentes Cevallos e Kahara apresentam mais uma NEON com o foco nos talentos locais!
                    O convidado da vez � um dos residentes da festa Wax, Henrique Casanova aka Apoena. Apoena � DJ/produtor ga�cho
                    com reconhecimento internacional, um dos poucos no pa�s inserido na ind�stria internacional do vinil, com discos
                    de Techno e Deep House lan�ados por diversos selo pelo mundo, inclusive o seu pr�prio Allnite Music.</p>


            </div>
        </div>

    </div>
</div>

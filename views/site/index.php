<?php

use yii\helpers\BaseUrl as Url;
use yii\bootstrap\Carousel;

/* @var $this yii\web\View */
$this->title = 'My Yii Application';
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
                <img src="<?= Url::to(['img/images.jpg']); ?>" alt="..." class="img-rounded">

                <h2>Sonata Arctica</h2>
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
            <div class="col-lg-4">
                <img src="<?= Url::to(['img/neon.jpg']); ?>" alt="..." class="img-rounded">
                <h2>Neon</h2>
                <p>Os DJs residentes Cevallos e Kahara apresentam mais uma NEON com o foco nos talentos locais!
                    O convidado da vez é um dos residentes da festa Wax, Henrique Casanova aka Apoena. Apoena é DJ/produtor gaúcho
                    com reconhecimento internacional, um dos poucos no país inserido na indústria internacional do vinil, com discos
                    de Techno e Deep House lançados por diversos selo pelo mundo, inclusive o seu próprio Allnite Music.</p>


            </div>
        </div>

    </div>
</div>

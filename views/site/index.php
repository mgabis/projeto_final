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

            </div>
            <div class="col-lg-4">
                <img src="<?= Url::to(['img/neon.jpg']); ?>" alt="..." class="img-rounded">
                <h2>Neon</h2>



            </div>
        </div>

    </div>
</div>

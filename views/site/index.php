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
                    '<img class="img"  src="' . Url::to(['img/thiaguinho.jpg']) . '"/>',
                    '<img class="img" src="' . Url::to(['img/rave.png']) . '"/>',
                    '<img class="img" src="' . Url::to(['img/vitor e leo.jpg']) . '"/>',
                ]
            ]);
            ?>


        </div>
    </div>

    <div class="body-content">

        <?php foreach($baladas as $balada){ ?>
        
        <div class="col-md-4">
            <img src="" class="img-rounded">
            <a href="" >Site oficial</a>
            <h2><?php echo $balada->name; ?></h2>
            <h2><?php echo $balada->neighborhood; ?></h2>
            <p><?php echo $balada->local; ?></p>
        </div>
        
        <?php } ?>
            
            <?php foreach($show as $shows){ ?>
        
        <div class="col-md-4">
            <img src="" class="img-rounded">
            <a href="" >Site oficial</a>
            <h2><?php echo $shows->name; ?></h2>
            <h2><?php echo $shows->neighborhood; ?></h2>
            <p><?php echo $shows->local; ?></p>
        </div>
        
        <?php } ?>

    </div>

</div>

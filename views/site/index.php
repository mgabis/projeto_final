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
 <div class="evento">
   <?php foreach ($baladas as $balada) { ?>

            <div class="col-md-4">
                <p><img  class="img-rounded"style="width: 200px; height: 200px" src="<?= Url::to(['uploads/images/'.$balada->avatar]); ?>"></p>
                <h2><?php echo $balada->name; ?></h2>
                <h2><?php echo $balada->local; ?></h2>
                
            </div>

        <?php } ?>
         <?php foreach ($shows as $show) { ?>

            <div class="col-md-4">
                <p><img  class="img-rounded"style="width: 200px; height: 200px" src="<?= Url::to(['uploads/images/'.$show->avatar]); ?>"></p>
                <h2><?php echo $show->name; ?></h2>
                <p><?php echo $show->local; ?></p>
                
            </div>

        <?php } ?>
    </div>
</div>
</div>
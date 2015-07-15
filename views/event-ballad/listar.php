<?php

use yii\helpers\Html;
use yii\helpers\BaseUrl as Url;

/* @var $this yii\web\View */
/* @var $model app\models\EventBallad */

$this->title = 'Balada';
$this->params['breadcrumbs'][] = ['label' => 'Event Ballads', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
//echo '<pre>';
//var_dump($baladas);
?>

<div class="site-balada">
    <h1><?= Html::encode($this->title) ?></h1>
    <div class="row">
        <div class="evento">

        <?php foreach ($baladas as $balada) { ?>

            <div class="col-md-4">
                <p><img  class="img-rounded"style="width: 200px; height: 200px" src="<?= Url::to(['uploads/images/'.$balada->avatar]); ?>"></p>
                <h2><?php echo $balada->name; ?></h2>
                <h2><?php echo $balada->local; ?></h2>
                
            </div>

        <?php } ?>


    </div>
</div>
</div>

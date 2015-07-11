<?php

use yii\helpers\Html;
use yii\helpers\BaseUrl as Url;

/* @var $this yii\web\View */
/* @var $model app\models\EventBallad */

$this->title = 'Create Event Ballad';
$this->params['breadcrumbs'][] = ['label' => 'Event Ballads', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
//echo '<pre>';
//var_dump($baladas);
?>

<div class="site-balada">
    <h1><?= Html::encode($this->title) ?></h1>
    <div class="row">

        <?php foreach ($baladas as $balada) { ?>

            <div class="col-md-4">
                <img src="" class="img-rounded">
                <a href="" >Site oficial</a>
                <h2><?php echo $balada->name; ?></h2>
                <h2><?php echo $balada->neighborhood; ?></h2>
                <p><?php echo $balada->local; ?></p>
            </div>

        <?php } ?>


    </div>

</div>

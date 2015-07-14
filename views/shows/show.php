<?php

use yii\helpers\Html;
use yii\helpers\BaseUrl as Url;

/* @var $this yii\web\View */
/* @var $model app\models\EventBallad */

$this->title = 'Shows';
$this->params['breadcrumbs'][] = ['label' => 'shows', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
//echo '<pre>';
//var_dump($shows);
?>

<div class="shows">
    <h1><?= Html::encode($this->title) ?></h1>
    <div class="row">
        <div class="evento">


        <?php foreach ($shows as $show) { ?>

            <div class="col-md-4">
                <p><img  class="img-rounded"style="width: 500px; height: 500px" src="<?= Url::to(['uploads/images/'.$show->avatar]); ?>"></p>
                <h2><?php echo $show->name; ?></h2>
                <p><?php echo $show->local; ?></p>
                
            </div>

        <?php } ?>

    </div>
</div>

</div>

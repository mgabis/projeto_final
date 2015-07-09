<?php

use yii\helpers\Html;
use yii\helpers\BaseUrl as Url;


/* @var $this yii\web\View */
/* @var $model app\models\EventBallad */

$this->title = 'Create Event Ballad';
$this->params['breadcrumbs'][] = ['label' => 'Event Ballads', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-balada">
    <h1><?= Html::encode($this->title) ?></h1>
    <div class="row">
        
        <?php foreach($eventos as $evento){ ?>
        
        <div class="col-md-4">
            <img src="" class="img-rounded">
            <a href="" >Site oficial</a>
            <h2><?php echo $evento->name; ?></h2>
            <h2><?php echo $evento->neighborhood; ?></h2>
            <p><?php echo $evento->local; ?></p>
        </div>
        
        <?php } ?>
    </div>

</div>

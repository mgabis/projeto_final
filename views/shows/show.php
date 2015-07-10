<?php

use yii\helpers\Html;
use yii\helpers\BaseUrl as Url;


/* @var $this yii\web\View */
/* @var $model app\models\EventBallad */

$this->title = 'Create show';
$this->params['breadcrumbs'][] = ['label' => 'Event Ballads', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
//echo '<pre>';
//var_dump($baladas);
?>

<div class="shows">
    <h1><?= Html::encode($this->title) ?></h1>
    <div class="row">
        
        <?php foreach($shows as $show){ ?>
        
        <div class="col-md-4">
            <img src="" class="img-rounded">
            <a href="" >Site oficial</a>
            <h2><?php echo $show->name; ?></h2>
            <h2><?php echo $show->neighborhood; ?></h2>
            <p><?php echo $show->local; ?></p>
        </div>
        
        <?php } ?>
        
     
    </div>

</div>

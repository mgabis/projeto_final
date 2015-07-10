<?php

use yii\helpers\Html;
use yii\helpers\BaseUrl as Url;


/* @var $this yii\web\View */
/* @var $model app\models\EventBallad */

$this->title = 'Create shows';
$this->params['breadcrumbs'][] = ['label' => 'shows', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
//echo '<pre>';
//var_dump($shows);
?>

<div class="shows">
    <h1><?= Html::encode($this->title) ?></h1>
    <div class="row">
        
    
           <?php foreach($shows as $show){ ?>
        
        <div class="col-md-4">
            <img src="<?php echo $show->avatar; ?>" class="img-rounded">
            <h2><?php echo $show->name; ?></h2>
            <h2><?php echo $show->neighborhood; ?></h2>
            <p><?php echo $show->local; ?></p>
        </div>
        
        <?php } ?>
     
    </div>

</div>

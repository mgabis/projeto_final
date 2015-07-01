<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\EventBallad */

$this->title = 'Create Event Ballad';
$this->params['breadcrumbs'][] = ['label' => 'Event Ballads', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="event-ballad-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\EventBallad */

$this->title = 'Update Event Ballad: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Event Ballads', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="event-ballad-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

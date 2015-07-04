<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\EventBallad */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Event Ballads', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="event-ballad-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    
    

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'local',
            'date',
            'address',
            'number',
            'neighborhood',
            'city',
            'state',
            'start_time:datetime',
            'final_hour',
            'number_of_tickets',
            'valor',
            'type_of_tickets',
        ],
    ]) ?>

</div>

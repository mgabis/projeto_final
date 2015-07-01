<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Event Ballads';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="event-ballad-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Event Ballad', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'local',
            'date',
            'address',
            // 'number',
            // 'neighborhood',
            // 'city',
            // 'state',
            // 'start_time:datetime',
            // 'final_hour',
            // 'number_of_tickets',
            // 'valor',
            // 'type_of_tickets',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>

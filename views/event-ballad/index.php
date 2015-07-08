<?php

use yii\helpers\Html;
use yii\grid\GridView;
use kartik\widgets\FileInput;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EventBalladSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Event Ballads';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="event-ballad-index">
<?php echo $form->field($model, 'avatar')->widget(FileInput::classname(), [
    'options' => ['accept' => 'image/*'],
]);?>
    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Event Ballad', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'name',
            'local',
            'date',
            //'address',
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

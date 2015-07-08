<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EventBalladSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="event-ballad-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'local') ?>

    <?= $form->field($model, 'date') ?>

    <?= $form->field($model, 'address') ?>

    <?php // echo $form->field($model, 'number') ?>

    <?php // echo $form->field($model, 'neighborhood') ?>

    <?php // echo $form->field($model, 'city') ?>

    <?php // echo $form->field($model, 'state') ?>

    <?php // echo $form->field($model, 'start_time') ?>

    <?php // echo $form->field($model, 'final_hour') ?>

    <?php // echo $form->field($model, 'number_of_tickets') ?>

    <?php // echo $form->field($model, 'valor') ?>

    <?php // echo $form->field($model, 'type_of_tickets') ?>

    
    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

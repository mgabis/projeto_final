<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$form = ActiveForm::begin(['layout' => 'horizontal']);

// Form field without label
echo $form->field($model, 'demo', [
    'inputOptions' => [
        'placeholder' => $model->getAttributeLabel('demo'),
    ],
])->label('Novo usuario');

// Inline radio list
echo $form->field($model, 'demo')->inline()->radioList($items);

// Control sizing in horizontal mode
echo $form->field($model, 'demo', [
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-2',
    ]
]);

// With 'default' layout you would use 'template' to size a specific field:
echo $form->field($model, 'demo', [
    'template' => '{label} <div class="row"><div class="col-sm-4">{input}{error}{hint}</div></div>'
]);

// Input group
echo $form->field($model, 'demo', [
    'inputTemplate' => '<div class="input-group"><span class="input-group-addon">@</span>{input}</div>',
]);

ActiveForm::end();
?>


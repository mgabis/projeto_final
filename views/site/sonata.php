<?php

use yii\helpers\Html;
use yii\helpers\BaseUrl as Url;
use yii\bootstrap\Tabs;

/* @var $this yii\web\View */
$this->title = 'Sonata Arctica';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-sonata">
    <h1><?= Html::encode($this->title) ?></h1>

    <img class="img_sonata"  src="<?= Url::to(['img/sonata_arctica.jpg']); ?>" >
    <?php
    echo Tabs::widget([
        'items' => [
            [
                'label' => 'One',
                'content' => 'Anim pariatur cliche...',
                'active' => true
            ],
            [
                'label' => 'Two',
                'content' => 'Anim pariatur cliche...',
                'headerOptions' => [],
                'options' => ['id' => 'myveryownID'],
            ],
            [
                'label' => 'Example',
                'url' => 'http://www.example.com',
            ],
            [
                'label' => 'Dropdown',
                'items' => [
                    [
                        'label' => 'DropdownA',
                        'content' => 'DropdownA, Anim pariatur cliche...',
                    ],
                    [
                        'label' => 'DropdownB',
                        'content' => 'DropdownB, Anim pariatur cliche...',
                    ],
                ],
            ],
        ],
    ]);
    /* echo Tabs::widget([
      'items' => [
      [
      'label' => 'descricao',
      'content' => 'blabala',
      'active' => true
      ],
      [
      'label' => 'Local',
      'content' => 'blabala',
      'active' => true
      ],
      [
      'label' => 'Example',
      'url' => 'http://www.example.com',
      ],
      ],
      ]); */
    ?>

</div>



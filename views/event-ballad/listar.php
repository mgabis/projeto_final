<?php

use yii\helpers\Html;
use yii\helpers\BaseUrl as Url;


/* @var $this yii\web\View */
/* @var $model app\models\EventBallad */

$this->title = 'Create Event Ballad';
$this->params['breadcrumbs'][] = ['label' => 'Event Ballads', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

var_dump($baladas);
?>

<div class="site-balada">
    <h1><?= Html::encode($this->title) ?></h1>
    <div class="row">
     <div class="col-lg-4">
                <img src="<?= Url::to(['img/neon.jpg']); ?>" alt="..." class="img-rounded">
                <h2>Neon</h2>
                <p>Os DJs residentes Cevallos e Kahara apresentam mais uma NEON com o foco nos talentos locais!
                    O convidado da vez � um dos residentes da festa Wax, Henrique Casanova aka Apoena. Apoena � DJ/produtor ga�cho
                    com reconhecimento internacional, um dos poucos no pa�s inserido na ind�stria internacional do vinil, com discos
                    de Techno e Deep House lan�ados por diversos selo pelo mundo, inclusive o seu pr�prio Allnite Music.</p>


            </div>
        </div>

</div>

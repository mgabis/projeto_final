<?php

use yii\helpers\Html;
use yii\helpers\BaseUrl as Url;

/* @var $this yii\web\View */
$this->title = 'Baladas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-balada">
    <h1><?= Html::encode($this->title) ?></h1>
    <div class="row">
     <div class="col-lg-4">
                <img src="<?= Url::to(['img/neon.jpg']); ?>" alt="..." class="img-rounded">
                <h2>Neon</h2>
                <p>Os DJs residentes Cevallos e Kahara apresentam mais uma NEON com o foco nos talentos locais!
                    O convidado da vez é um dos residentes da festa Wax, Henrique Casanova aka Apoena. Apoena é DJ/produtor gaúcho
                    com reconhecimento internacional, um dos poucos no país inserido na indústria internacional do vinil, com discos
                    de Techno e Deep House lançados por diversos selo pelo mundo, inclusive o seu próprio Allnite Music.</p>


            </div>
        </div>

</div>

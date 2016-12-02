<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Corredor */

$this->title = 'Criar Corredor';
$this->params['breadcrumbs'][] = ['label' => 'Corredores', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="corredor-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

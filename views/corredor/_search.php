<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\CorredorSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="corredor-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nome') ?>

    <?= $form->field($model, 'sexo') ?>

    <?= $form->field($model, 'naturalidade') ?>

    <?= $form->field($model, 'dataNascimento') ?>

    <?php // echo $form->field($model, 'rg') ?>

    <?php // echo $form->field($model, 'cpf') ?>

    <?php // echo $form->field($model, 'endereco') ?>

    <?php // echo $form->field($model, 'cep') ?>

    <?php // echo $form->field($model, 'telefone') ?>

    <?php // echo $form->field($model, 'temAlergia') ?>

    <?php // echo $form->field($model, 'qualAlergia') ?>

    <?php // echo $form->field($model, 'contatoEmergencia') ?>

    <?php // echo $form->field($model, 'telefoneEmergencia') ?>

    <?php // echo $form->field($model, 'cidade') ?>

    <?php // echo $form->field($model, 'estado') ?>

    <?php // echo $form->field($model, 'dataCriacao') ?>

    <?php // echo $form->field($model, 'vinculo') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'cadeirante') ?>

    <?php // echo $form->field($model, 'idUsuario') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Corredor */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="corredor-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nome')->textInput() ?>

    <?= $form->field($model, 'sexo')->textInput() ?>

    <?= $form->field($model, 'naturalidade')->textInput() ?>

    <?= $form->field($model, 'dataNascimento')->textInput() ?>

    <?= $form->field($model, 'rg')->textInput() ?>

    <?= $form->field($model, 'cpf')->textInput() ?>

    <?= $form->field($model, 'endereco')->textInput() ?>

    <?= $form->field($model, 'cep')->textInput() ?>

    <?= $form->field($model, 'telefone')->textInput() ?>

    <?= $form->field($model, 'temAlergia')->textInput() ?>

    <?= $form->field($model, 'qualAlergia')->textInput() ?>

    <?= $form->field($model, 'contatoEmergencia')->textInput() ?>

    <?= $form->field($model, 'telefoneEmergencia')->textInput() ?>

    <?= $form->field($model, 'cidade')->textInput() ?>

    <?= $form->field($model, 'estado')->textInput() ?>

    <?= $form->field($model, 'dataCriacao')->textInput() ?>

    <?= $form->field($model, 'vinculo')->textInput() ?>

    <?= $form->field($model, 'email')->textInput() ?>

    <?= $form->field($model, 'cadeirante')->textInput() ?>

    <?= $form->field($model, 'idUsuario')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

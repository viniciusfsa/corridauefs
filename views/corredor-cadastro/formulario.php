<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\widgets\DatePicker;
use yii\widgets\MaskedInput;


/* @var $this yii\web\View */
/* @var $model app\models\Corredor */
/* @var $form yii\widgets\ActiveForm */


$this->title = 'Formulário de Inscrição';
?>

<div>

    <?php $form = ActiveForm::begin(); ?>

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="row">
        <div class="col-sm-3 col-md-7">
            <?= $form->field($model, 'nome')->textInput(['maxlength' =>100]) ?> 
        </div>
    </div>

    <div class="row">


        
        <div class="col-sm-3 col-md-4">
            
            <?= $form->field($model, 'dataNascimento')->widget(
                    DatePicker::classname(), [
                    
                    'attribute' => 'dataNascimento',
                    'name' => 'dataNascimento',                    
                    //'removeButton' => false,
                    'options' => [
                        'placeholder' => 'Data', 
                        'style' => 'width: 150px',                    
                    ],
                    'pluginOptions' => [
                        'format' => 'dd/mm/yyyy',
                        //'endDate' => '0d',
                        'autoclose' => true,
                    ],
                ]);
            ?>             
        </div>

        <div class="col-sm-3 col-md-4">
            <?= $form->field($model, 'sexo')->radioList([
            1 => 'Masculino', 
            2 => 'Feminino'
            ]); ?>
        </div>

          

        <div class="col-sm-3 col-md-4">
            <?= $form->field($model, 'naturalidade')->textInput(['maxlength' =>100]) ?>
        </div>

    </div>      

    <div class="row">
        
    </div>

   

   

    <div class="row">


        <div class="col-sm-3 col-md-4">
            <?= $form->field($model, 'rg')->textInput(['maxlength' =>30,'style' =>'width: 100%' ]) 
            
            ?>
        </div>
        <div class="col-sm-3 col-md-4">
            <?= $form->field($model, 'cpf')->widget(
                MaskedInput::classname(), [                    
                    'model' =>$model,
                    'attribute' => 'cpf',
                    'name' => 'cpf',
                    'mask' => '999.999.999-99'
                ]);
            ?>           
        </div>
    </div>

    
    <div class="row">
        <div class="col-sm-3 col-md-7">
            <?= $form->field($model, 'endereco')->textInput(['maxlength' =>200]) ?>
        </div>
        <div class="col-sm-3 col-md-3">
            <?= $form->field($model, 'cep')->widget(
                MaskedInput::classname(), [                    
                    'model' =>$model,
                    'attribute' => 'cep',
                    'name' => 'cep',
                    'mask' => '99.999-999'
                ]);
            ?>             
        </div>
        <div class="col-sm-3 col-md-2">            
            <?= $form->field($model, 'telefone')->widget(
                MaskedInput::classname(), [                    
                    'model' =>$model,
                    'attribute' => 'cep',
                    'name' => 'cep',
                    'mask' => '(99) [9]-9999-9999'
                ]);
            ?>   
        </div>
    </div>

    <div class="row">
        <div class="col-sm-3 col-md-3">
            <?= $form->field($model, 'cidade')->textInput(['maxlength' =>100]) ?>
        </div>
        <div class="col-sm-3 col-md-3">
            <?= $form->field($model, 'estado')->textInput(['maxlength' =>30]) ?>
        </div>        
    </div>



    

    <div class="row">
        <div class="col-sm-3 col-md-2">
           <?= $form->field($model, 'cadeirante')->radioList([
                0 => 'Não', 
                1 => 'Sim',                
            ]); ?>
        </div>
        <div class="col-sm-3 col-md-2">
           <?= $form->field($model, 'temAlergia')->radioList([
                1 => 'Sim', 
                0 => 'Não'
            ]); ?>
        </div>
        <div class="col-sm-3 col-md-7">
            <?= $form->field($model, 'qualAlergia')->textInput(['maxlength' =>200]) ?>
        </div>
    </div>
        

    <div class="row">
        <div class="col-sm-3 col-md-4">
            <?= $form->field($model, 'contatoEmergencia')->textInput(['maxlength' =>100]) ?>
        </div>
        <div class="col-sm-3 col-md-2">
             <?= $form->field($model, 'telefoneEmergencia')->widget(
                MaskedInput::classname(), [                    
                    'model' =>$model,
                    'attribute' => 'cep',
                    'name' => 'cep',
                    'mask' => '(99) [9]-9999-9999'
                ]);
            ?>   
        </div>
    </div>

     <div class="row">
        <div class="col-sm-3 col-md-5">
           <?= $form->field($model, 'vinculo')->radioList([
                0 => 'Técnico', 
                1 => 'Docente',
                2 => 'Discente',
                3 => 'Comunidade Externa'
            ]); ?>
        </div>
        <div class="col-sm-3 col-md-4">
          <?= $form->field($model, 'email')->textInput(['maxlength' =>50]) ?>
        </div>

        
    </div>

    <?= $form->field($model, 'idUsuario')->textInput() ?>    

    <div class="form-group">
        <?= 
        //Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) 
        Html::submitButton('Create', ['class' => 'tn btn-primary'])
        ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

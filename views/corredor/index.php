<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\CorredorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Corredors';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="corredor-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Corredor', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nome',
            'sexo',
            'naturalidade',
            'dataNascimento',
            // 'rg',
            // 'cpf',
            // 'endereco',
            // 'cep',
            // 'telefone',
            // 'temAlergia',
            // 'qualAlergia',
            // 'contatoEmergencia',
            // 'telefoneEmergencia',
            // 'cidade',
            // 'estado',
            // 'dataCriacao',
            // 'vinculo',
            // 'email:email',
            // 'cadeirante',
            // 'idUsuario',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

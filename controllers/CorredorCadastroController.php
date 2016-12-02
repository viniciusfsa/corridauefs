<?php

namespace app\controllers;
use yii\web\Controller;
use app\models\CorredorCadastro;

class CorredorCadastroController extends Controller
{
	public function actionFormulario(){
		$cadastroModel = new CorredorCadastro;
		return $this->render('formulario', [
			'model' => $cadastroModel
		]);
	}

}
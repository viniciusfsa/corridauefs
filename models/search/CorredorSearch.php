<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Corredor;

/**
 * CorredorSearch represents the model behind the search form about `app\models\Corredor`.
 */
class CorredorSearch extends Corredor
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'sexo', 'temAlergia', 'vinculo', 'cadeirante', 'idUsuario'], 'integer'],
            [['nome', 'naturalidade', 'dataNascimento', 'rg', 'cpf', 'endereco', 'cep', 'telefone', 'qualAlergia', 'contatoEmergencia', 'telefoneEmergencia', 'cidade', 'estado', 'dataCriacao', 'email'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Corredor::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'sexo' => $this->sexo,
            'dataNascimento' => $this->dataNascimento,
            'temAlergia' => $this->temAlergia,
            'dataCriacao' => $this->dataCriacao,
            'vinculo' => $this->vinculo,
            'cadeirante' => $this->cadeirante,
            'idUsuario' => $this->idUsuario,
        ]);

        $query->andFilterWhere(['like', 'nome', $this->nome])
            ->andFilterWhere(['like', 'naturalidade', $this->naturalidade])
            ->andFilterWhere(['like', 'rg', $this->rg])
            ->andFilterWhere(['like', 'cpf', $this->cpf])
            ->andFilterWhere(['like', 'endereco', $this->endereco])
            ->andFilterWhere(['like', 'cep', $this->cep])
            ->andFilterWhere(['like', 'telefone', $this->telefone])
            ->andFilterWhere(['like', 'qualAlergia', $this->qualAlergia])
            ->andFilterWhere(['like', 'contatoEmergencia', $this->contatoEmergencia])
            ->andFilterWhere(['like', 'telefoneEmergencia', $this->telefoneEmergencia])
            ->andFilterWhere(['like', 'cidade', $this->cidade])
            ->andFilterWhere(['like', 'estado', $this->estado])
            ->andFilterWhere(['like', 'email', $this->email]);

        return $dataProvider;
    }
}

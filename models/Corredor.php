<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yiibr\brvalidator\CpfValidator;

/**
 * This is the model class for table "corredor".
 *
 * @property integer $id
 * @property string $nome
 * @property integer $sexo
 * @property string $naturalidade
 * @property string $dataNascimento
 * @property string $rg
 * @property string $cpf
 * @property string $endereco
 * @property string $cep
 * @property string $telefone
 * @property integer $temAlergia
 * @property string $qualAlergia
 * @property string $contatoEmergencia
 * @property string $telefoneEmergencia
 * @property string $cidade
 * @property string $estado
 * @property string $dataCriacao
 * @property integer $vinculo
 * @property string $email
 * @property integer $cadeirante
 * @property integer $idUsuario
 *
 * @property Usuario $idUsuario0
 * @property Inscricao[] $inscricaos
 */
class Corredor extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'corredor';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nome', 'sexo', 'naturalidade', 'dataNascimento', 'rg', 'cpf', 'endereco', 'cep', 'telefone', 'temAlergia', 'contatoEmergencia', 'telefoneEmergencia', 'cidade', 'estado', 'dataCriacao', 'vinculo', 'email', 'cadeirante', 'idUsuario'], 'required', 'message' => false,],
            [['nome', 'naturalidade', 'rg', 'cpf', 'endereco', 'cep', 'telefone', 'qualAlergia', 'contatoEmergencia', 'telefoneEmergencia', 'cidade', 'estado', 'email'], 'string'],
            [['sexo', 'temAlergia', 'vinculo', 'cadeirante', 'idUsuario'], 'integer'],
            [['dataNascimento', 'dataCriacao'], 'safe'],
            ['cpf', CpfValidator::className()],
            [['idUsuario'], 'exist', 'skipOnError' => true, 'targetClass' => Usuario::className(), 'targetAttribute' => ['idUsuario' => 'idUsuario']],
            ['email','email'],
            ['email', 'exist'],

        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome' => 'Nome',
            'sexo' => 'Sexo',
            'naturalidade' => 'Naturalidade',
            'dataNascimento' => 'Data Nascimento',
            'rg' => 'Rg',
            'cpf' => 'Cpf',
            'endereco' => 'Endereco',
            'cep' => 'Cep',
            'telefone' => 'Telefone',
            'temAlergia' => 'Tem Alergia',
            'qualAlergia' => 'Qual Alergia',
            'contatoEmergencia' => 'Contato Emergencia',
            'telefoneEmergencia' => 'Telefone Emergencia',
            'cidade' => 'Cidade',
            'estado' => 'Estado',
            'dataCriacao' => 'Data Criacao',
            'vinculo' => 'Vinculo',
            'email' => 'Email',
            'cadeirante' => 'Cadeirante',
            'idUsuario' => 'Id Usuario',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdUsuario0()
    {
        return $this->hasOne(Usuario::className(), ['idUsuario' => 'idUsuario']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInscricaos()
    {
        return $this->hasMany(Inscricao::className(), ['idCorredor' => 'id']);
    }
}

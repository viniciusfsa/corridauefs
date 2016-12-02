<?php

namespace app\models;
use yii\base\Model;
use yiibr\brvalidator\CpfValidator;

class CorredorCadastro extends Model{


	public $nome;
	public $sexo;
	public $naturalidade;
	public $dataNascimento;
	public $rg;
	public $cpf;
	public $endereco;
	public $cep;
	public $telefone;
	public $temAlergia;
	public $qualAlergia;
	public $contatoEmergencia;
	public $telefoneEmergencia;
	public $cidade;
	public $estado;
	public $dataCriacao;
	public $vinculo;
	public $email;
	public $cadeirante;
	public $idUsuario;
	

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

}


?>
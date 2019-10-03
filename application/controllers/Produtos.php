<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produtos extends CI_Controller {

	//Inicializador de Class no caso class Produtos
	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('produtos_model');
		$lista = $this->produtos_model->buscaTodos();
		$dados = array("produtos" => $lista);
		$this->load->view('Produtos/index', $dados);
	}

	public function formulario() 
	{
		$this->load->view('Produtos/formulario'); 
	}

	public function novo() 
	{

		$usuarioId = $this->session->userdata("usuario logado");

		$produtos = array (

			"nome"  		=> $this->input->post("nome"),
			"descricao" 	=> $this->input->post("descricao"),
			"quantidade" 	=> $this->input->post("quantidade"),
			"preco"			=> $this->input->post("preco"),
			"usuario_id" 	=> $usuarioId['id']
			
		);

		echo json_encode($produtos);
		exit;

		$this->load->model("produtos_model");
		
		$this->produtos_model->salva($produtos);

		$this->session->set_flashdata("success", "Produto Cadastrado com sucesso !!");

		redirect($uri = '/');
	}
}

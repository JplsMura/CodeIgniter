<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	public function novo() {
		$usuario = array (

			"nome"  => $this->input->post("nome"),
			"email" => $this->input->post("email"),
			"senha" => md5 ($this->input->post("senha"))
		);
		
		// echo json_encode($usuario);
		// exit;

		$this->load->model("usuarios_model");

		$this->usuarios_model->salva($usuario);

		//var_dump (salva);

		//echo "$usuario";

		//$this->load->view('Usuarios/novo');

 		$this->session->set_flashdata("success", "Cadastrado com sucesso !!");
		redirect($uri = '/');
	}
}
?>

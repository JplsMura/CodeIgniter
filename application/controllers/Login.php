<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function autenticar() {
        
        $this->load->model("usuarios_model");
        $email = $this->input->post("email_logar");
        $senha = md5 ($this->input->post("senha_logar"));

        $usuario = $this->usuarios_model->logarUsuarios($email, $senha);

        if($usuario){
            $this->session->set_userdata("usuario logado", $usuario);
            $this->session->set_flashdata("success", "Logado com Sucesso !!");
        }
        else{
            $this->session->set_flashdata("danger", "Usuário ou senha inválidos");
        }

        redirect($uri = '/');

    }

    public function logout() {
        $this->session->unset_userdata("usuario logado");
        $this->session->set_flashdata("success", "Deslogado com Sucesso");
        
        redirect($uri = '/');
    }
}

?>
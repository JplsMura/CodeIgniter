<?php
    class usuarios_model extends CI_Model{

        public function salva($usuario) {
           $this->db->insert("tb_usuarios", $usuario);  
        }

        public function logarUsuarios($email, $senha) {
            $this->db->where ("email", $email);
            $this->db->where ("senha", $senha);
            $usuario = $this->db->get("tb_usuarios")->row_array();
            return $usuario;
         }

    }
?>
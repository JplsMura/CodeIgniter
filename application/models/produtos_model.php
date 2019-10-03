<?php

    class Produtos_model extends CI_Model{

        public function buscaTodos() {
            return $this->db->get("tb_produtos")->result_array();
        }

        public function salva($produtos) {
            $this->db->insert("tb_produtos", $produtos);  
        }

    }

?>
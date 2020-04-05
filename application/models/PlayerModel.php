<?php

class PlayerModel extends CI_Model {
    const TABLE_NAME = 'players';

    public function create($player) {
        $this->db->insert($this::TABLE_NAME, $player);
    }

    public function getAll() {
        return $this->db->get($this::TABLE_NAME)->result_array();    
    }
}

?>
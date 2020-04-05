<?php
class Migration_players extends CI_Migration
{

    public function up()
    {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'name' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
            ),
            'club' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
            ),
            'price' => array(
                'type' => 'DECIMAL',
                'constraint' => '19,4',
            ),
            'attack' => array(
                'type' => 'INT',
            ),
            'defense' => array(
                'type' => 'INT',
            ),
            'stamina' => array(
                'type' => 'INT',
            ),
            'aggression' => array(
                'type' => 'INT',
            ),
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('players');
    }

    public function down()
    {
        $this->dbforge->drop_table('players');
    }
}

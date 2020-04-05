<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Player extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('PlayerModel');
		$this->load->library('WeightedProduct');
	}

	public function create() {
		$player = array(
			'name' => $this->input->post('name'),
			'club' => $this->input->post('club'),
			'price' => $this->input->post('price'),
			'attack' => $this->input->post('attack'),
			'defense' => $this->input->post('defense'),
			'stamina' => $this->input->post('stamina'),
			'aggression' => $this->input->post('aggression'),
		);
		$this->PlayerModel->create($player);
		redirect('/');
	}

	public function new() {
		$this->load->view('new');
	}

	public function reset() {
		$this->session->sess_destroy();
		redirect('/');
	}

	public function index() {
		$players = $this->PlayerModel->getAll();
		if($this->input->post('price')) {
			$weights = array(
				'price' => $this->input->post('price'),
				'attack' => $this->input->post('attack'),
				'defense' => $this->input->post('defense'),
				'stamina' => $this->input->post('stamina'),
				'aggression' => $this->input->post('aggression'),
			);
			$this->session->set_flashdata('price', $weights['price']);
			$this->session->set_flashdata('attack', $weights['attack']);
			$this->session->set_flashdata('defense', $weights['defense']);
			$this->session->set_flashdata('stamina', $weights['stamina']);
			$this->session->set_flashdata('aggression', $weights['aggression']);
			$isBenefit = array(
				'price' => FALSE,
				'attack' => TRUE,
				'defense' => TRUE,
				'stamina' => TRUE,
				'aggression' => FALSE,
			);
			$sortedPlayers = $this->weightedproduct->ranking($players, $weights, $isBenefit);
			$data['players'] = $sortedPlayers;
		}else {
			$data['players'] = $players;
		}
		
		$this->load->view('index', $data);
	}
}

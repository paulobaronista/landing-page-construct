<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller{

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$data['title'] = 'Construct - Reformas e Obras sob medida';
		$data['description'] = 'Fazemos desde a obra básica, com instalação de Forro Mineral, Forro de Gesso, Piso Elevado, Luminárias e equipamentos de ar condicionado split, ar condicionado dutado ou ar condicionado central até a instalação ou substituição de revestimentos, confeccao de mobiliario, projetos elaborados de iluminacao e refrigeracao, ajustes de sprinklers, detectores de fumaça, divis0rias em vidro, drywall, etc.';
		$data['keywords'] = 'eletrica, engenharia, hidraulica, obras, reformas';
		$menu['contato'] = 'active';
		$conteudo['pagina_view'] = 'home_view';
		$this->load->view('html_header', $data);
		$this->load->view('header');
		$this->load->view('menu', $menu);
		$this->load->view('conteudo', $conteudo);
		$this->load->view('rodape');
		$this->load->view('html_footer');
	}
	
}

/* Location: ./application/controllers/home.php */
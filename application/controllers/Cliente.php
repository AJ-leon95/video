<?php 

class Cliente extends CI_Controller{

    function __construct()
    {
        parent::__construct();
    }
    public function index(){

        $this->load->view('header'); 
        $this->load->view('clientes/index');
        $this->load->view('footer');
    }
    public function nuevo(){

        $this->load->view('header'); 
        $this->load->view('clientes/nuevo');
        $this->load->view('footer');
    }
    public function editar(){

        $this->load->view('header'); 
        $this->load->view('clientes/editar');
        $this->load->view('footer');
    }



}




?>
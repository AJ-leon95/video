<?php 

class Usuarios extends CI_Controller{

    function __construct()
    {
        parent::__construct();
    }
    public function index(){

        $this->load->view('header'); 
        $this->load->view('usuarios/index');
        $this->load->view('footer');
    }
    public function nuevo(){

        $this->load->view('header'); 
        $this->load->view('usuarios/nuevo');
        $this->load->view('footer');
    }
    public function editar(){

        $this->load->view('header'); 
        $this->load->view('usuarios/editar');
        $this->load->view('footer');
    }



}




?>
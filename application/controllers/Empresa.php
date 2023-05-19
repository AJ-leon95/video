<?php 

class Empresa extends CI_Controller{

    function __construct()
    {   
        parent::__construct();
    }
    public function index(){

        $this->load->view('header'); 
        $this->load->view('empresa/index');
        $this->load->view('footer');
    }
    public function nuevo(){

        $this->load->view('header'); 
        $this->load->view('empresa/nuevo');
        $this->load->view('footer');
    }
    public function editar(){

        $this->load->view('header'); 
        $this->load->view('empresa/editar');
        $this->load->view('footer');
    }


}




?>
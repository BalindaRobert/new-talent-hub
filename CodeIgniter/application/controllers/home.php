<?php
class home extends CI_controller{
    public function _construct(){
        parent:: _construct();
    }
    public function index(){
        $this->load->view('header');
    }
}
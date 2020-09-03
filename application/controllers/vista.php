<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class vista extends CI_Controller {

function __construct(){

    parent:: __constrct();
    $this->load->helper('url');

}

public function index(){
    
$this->load->view('index');
}

 public function verpro(){
    $this->load->('productos');
}

public function verpe(){
    
    $this->load->('pedidos');
}

public function vercon(){
    $this->load->view('contactanos');
} 
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class contac extends CI_Controller{

    function ___construct()
    {
    parent:: ___construct();
    $this->load->helper('url');
    }
    function contact()
    {
    $this->load->view('contactos');
    }

}
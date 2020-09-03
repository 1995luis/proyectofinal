
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class hotel extends CI_Controller{

        function ___construct()
        {
        parent:: ___construct();
        $this->load->helper('url');
        }
        public function index()
        {
            $this->load->view('index');
        }
        public function cargarS()
        {
        $this->load->view('sucursales');
        }
        function contact()
         {
        $this->load->view('contactos');
        }
        function registro()
         {
        $this->load->view('registrarse');
        }
        function habit(){
        $this->load-> view('habitacion');
        }
        
}
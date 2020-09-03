<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class guardar extends CI_Controller {

 function __construct(){

    parent:: __constrct();
    $this->load->model('huesped');

}
  public function guardar_hotel()
{
        $id=$this->input->post('id');
        $nombre=$this->input->post('nombre');
        $apellidos=$this->input->post('apellidos');
        $celular=$this->input->post('celular');
        $telefono=$this->input->post('telefono');
        $habitacion=$this->input->post('habitacion');
        
        $clientes=array(
            'identificacion'=>$id
            'nombre'=>$nombre,
            'apellidos'=>$apellidos,  
            'telefono'=>$telefono,
            'celular'=>$celular,
            'tipo_habitacion'=>$habitacion
        );
        if (!$this->clientes->almacenar($cliente))
        {
                $mensaje['msg']= 'ocurrio un error al registrarse';
                $this->load->view('contactenos',$mensaje);
        }


        $mensaje['msg']= 'el usuario se  registro bien';
        $this->load->view('contactenos',$mensaje);
}

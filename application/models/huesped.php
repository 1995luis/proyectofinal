<?php

   class huesped extends CI_model{

    public function __construct()
    {
        $this->load->database();
    }
    
  public function guardar($cliente){

    $cliente=array(
        
        'identificacion'=>$cliente['id'],
        'nombre'=>$cliente['nombre'],
        'apellidos'=>$cliente['apellidos'],
        'celular'=>$cliente['celular'],
        'telefono'=>$cliente['telelfono'],
        'tipo_habitacion'=>$cliente['habitacion']
    );

    if (!$this->db->insert('huesped',$cliente))
    {
        return false;
    }
    return true;
}

}

?>
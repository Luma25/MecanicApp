<?php
class clientebdd extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
        public function get_news($slug = FALSE)
{
        if ($slug === FALSE)
        {
                $query = $this->db->get('news');
                return $query->result_array();
        }

        $query = $this->db->get_where('news', array('slug' => $slug));
        return $query->row_array();
}
public function ingresar_usuario()
{
    $this->load->helper('url');

    $data = array(
        'id' => Null,
        'rut' => $this->input->post('rut'),
        'nombre' => $this->input->post('nombre'),
        'apellido' => $this->input->post('apellido'),
        'email' => $this->input->post('email'),
        'password' => $this->input->post('pass'),
        'acceso' => 'cliente'
    );

    return $this->db->insert('usuario', $data);
}
}
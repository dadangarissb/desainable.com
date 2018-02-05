<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class OpenCrew_model extends CI_Model
{

    public $_table_name = 'open_crew';
    public $id    = 'oc_id';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    function insert($data)
    {
        $this->db->insert($this->_table_name, $data);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;
    }
}

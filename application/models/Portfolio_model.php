<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Portfolio_model extends CI_Model
{

    public $_table_name = 'portfolio';
    public $id    = 'id_portfolio';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    //untuk menampilkan portfolio pada halaman home
    function get_portfolio_home()
    {
        $this->db->join('service_category','portfolio.id_service_category=service_category.id_service_category');
        $this->db->limit(6);
        $this->db->order_by('id_portfolio','DESC');
        return $this->db->get($this->_table_name)->result();
    }

    function get_all($number=NULL,$from=NULL)
    {
        $this->db->join('service_category','portfolio.id_service_category=service_category.id_service_category');
        $this->db->order_by('id_portfolio','DESC');
        return $this->db->get($this->_table_name,$number,$from)->result();
    }

    function insert($data)
    {
        $this->db->insert($this->_table_name, $data);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;
    }
}

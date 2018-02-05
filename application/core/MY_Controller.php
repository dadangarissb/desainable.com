<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model(array('Kategori_model','Produk_model','Subkategori_model','Tema_model'));
 		$this->load->library(array('pagination'));
 
        date_default_timezone_set('Asia/Jakarta');

        
    }

    function sidebar_kiri(){
    	$data_kategori 			= $this->Kategori_model->get_all_home();
    	$subkategori 			= $this->Subkategori_model->get_all();
        $tema                   = $this->Tema_model->get_all();

        $data['tema']           = $tema;
    	$data['kategori'] 		= $data_kategori;
    	$data['subkategori'] 	= $subkategori;

    	$this->load->view('fixed/sidebar_kiri',$data);
    }
}

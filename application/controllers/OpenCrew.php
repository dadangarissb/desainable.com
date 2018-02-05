<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OpenCrew extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model(array('OpenCrew_model'));
 		$this->load->library(array('pagination'));
 		$this->load->library('user_agent');
 
        date_default_timezone_set('Asia/Jakarta');
    }

	public function index()
	{
		$this->load->view('frontend/v_open_crew');
	}

	public function submit_form()
	{
		$post=$this->input->post();
		$oc_skill=$this->input->post('oc_skill');

		$data['oc_nama']		=	$post['oc_nama'];
		$data['oc_alamat']		=	$post['oc_alamat'];
		$data['oc_hp']			=	$post['oc_hp'];
		$data['oc_email']		=	$post['oc_email'];
		$data['oc_kategori_skill']		=	$post['oc_kategori_skill'];
		$data['oc_skill']		=	implode(', ', $oc_skill);
		$data['oc_software_skill']		=	$post['oc_software_skill'];
		$data['oc_gaji_per_project']	=	$post['oc_gaji_per_project'];
		$data['oc_waktu_pengerjaan']	=	$post['oc_waktu_pengerjaan'];
		$data['oc_kesibukan']		=	$post['oc_kesibukan'];
		$data['oc_kuantitas_per_hari']	=	$post['oc_kuantitas_per_hari'];
		$data['oc_jam_mengerjakan']		=	$post['oc_jam_mengerjakan'];
		$data['oc_link_portofolio']		=	$post['oc_link_portofolio'];

		if ($this->OpenCrew_model->insert($data))
		{
			$this->session->set_flashdata('message_oc_success', 'Terimakasih telah mendaftar, Semoga sukses!');
			redirect(base_url('OpenCrew'));
		}


	}
}
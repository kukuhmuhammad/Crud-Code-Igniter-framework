<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Master extends ci_controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('data_master');
		}

		function index()
		{
			$data['data']=$this->data_master->getAll();
			$this->load->view('data_master/tampil_data',$data);
		}
		
		function tambah_data()
		{
			$data['data']=$this->data_master->getAll();
			$this->load->view('data_master/tambah_data',$data);
		}

		function proses_tambah_data()
		{
			$data['kode']=$this->input->post('kode');
			$data['tipe']=$this->input->post('tipe');
			$data['luas_tanah']=$this->input->post('luas_tanah');
			$data['penghuni']=$this->input->post('penghuni');
			$data['sales']=$this->input->post('sales');
			$data['kode']=$this->input->post('kode');
			$data['status']=$this->input->post('status');
			$data['status_perumahan']=$this->input->post('status_perumahan');
			$this->data_master->add($data);
			redirect(site_url('master'));
		}
		
		function edit_data($id)
		{
			$data['data']=$this->data_master->getById($id)->row();
			$this->load->view('data_master/edit_data',$data);
		}

		function proses_edit_data($id)
		{
			$data['kode']=$this->input->post('kode');
			$data['tipe']=$this->input->post('tipe');
			$data['luas_tanah']=$this->input->post('luas_tanah');
			$data['penghuni']=$this->input->post('penghuni');
			$data['sales']=$this->input->post('sales');
			$data['kode']=$this->input->post('kode');
			$data['status']=$this->input->post('status');
			$data['status_perumahan']=$this->input->post('status_perumahan');
			$this->data_master->update($id,$data);
			redirect(site_url('master'));
		}
		function hapus_data($id)
		{
			$this->data_master->delete($id);
			redirect(site_url('master'));
		}
		
	}
?>
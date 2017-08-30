<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Customer extends ci_controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('data_customer');
		}

		function index()
		{
			$data['data']=$this->data_customer->getAll();
			$this->load->view('data_customer/tampil_data',$data);
		}
		
		function tambah_data()
		{
			$data['data']=$this->data_customer->getAll();
			$this->load->view('data_customer/tambah_data',$data);
		}

		function proses_tambah_data()
		{
			$data['nama']=$this->input->post('nama');
			$data['tanggal_lahir']=$this->input->post('tanggal_lahir');
			$data['tempat_lahir']=$this->input->post('tempat_lahir');
			$data['no_ktp']=$this->input->post('no_ktp');
			$data['pekerjaan']=$this->input->post('pekerjaan');
			$data['perusahaan']=$this->input->post('perusahaan');
			$data['jabatan']=$this->input->post('jabatan');
			$data['start_kerja']=$this->input->post('start_kerja');
			$this->data_customer->add($data);
			redirect(site_url('customer'));
		}
		
		function edit_data($id)
		{
			$data['data']=$this->data_customer->getById($id)->row();
			$this->load->view('data_customer/edit_data',$data);
		}

		function proses_edit_data($id)
		{
			$data['nama']=$this->input->post('nama');
			$data['tanggal_lahir']=$this->input->post('tanggal_lahir');
			$data['tempat_lahir']=$this->input->post('tempat_lahir');
			$data['no_ktp']=$this->input->post('no_ktp');
			$data['pekerjaan']=$this->input->post('pekerjaan');
			$data['perusahaan']=$this->input->post('perusahaan');
			$data['jabatan']=$this->input->post('jabatan');
			$data['start_kerja']=$this->input->post('start_kerja');
			$this->data_customer->update($id,$data);
			redirect(site_url('customer'));
		}
		function hapus_data($id)
		{
			$this->data_customer->delete($id);
			redirect(site_url('customer'));
		}
		
	}
?>
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Transaksi extends ci_controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('data_transaksi');
		}

		function index()
		{
			$data['data']=$this->data_transaksi->getAll();
			$this->load->view('data_transaksi/tampil_data',$data);
		}
		
		function tambah_data()
		{
			$data['data']=$this->data_transaksi->getAll();
			$this->load->view('data_transaksi/tambah_data',$data);
		}

		function proses_tambah_data()
		{
			$data['customer_id']=$this->input->post('customer_id');
			$data['status']=$this->input->post('status');
			$data['nominal']=$this->input->post('nominal');
				$config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 100;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;
                $this->load->library('upload', $config);
	                if ( ! $this->upload->do_upload('userfile'))
	                {
	                        $error = array('error' => $this->upload->display_errors());
	                        $this->load->view('data_transaksi/tambah_data',$error);
	                }
	                else
	                {
	                        $data['bukti']=$this->upload->data('file_name');  
	                }
			$this->data_transaksi->add($data);
			redirect(site_url('transaksi'));
		}
		
		function edit_data($id)
		{
			$data['data']=$this->data_transaksi->getById($id)->row();
			$this->load->view('data_transaksi/edit_data',$data);
		}

		function proses_edit_data($id)
		{
			$data['customer_id']=$this->input->post('customer_id');
			$data['status']=$this->input->post('status');
			$data['nominal']=$this->input->post('nominal');
			$data['bukti']=$this->input->post('bukti');
			$this->data_transaksi->update($id,$data);
			redirect(site_url('transaksi'));
		}
		function hapus_data($id)
		{
			$this->data_transaksi->delete($id);
			redirect(site_url('transaksi'));
		}
		
	}
?>
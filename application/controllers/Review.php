<?php
defined('BASEPATH') or exit ('No direct script access allowed');

class Review extends CI_Controller
{
 public function __construct()
 {
     parent::__construct();
     $this->load->model('Review_model');
 }

 public function index()
 {
     $this->form_validation->set_rules('nama', 'Nama Pembeli',
    'required', [
        'required' => 'Wajib di isi'
    ]);
     $this->form_validation->set_rules('nhp', 'Nomer HP',
    'required', [
        'required' => 'Wajib di isi'
    ]);

     if ($this->form_validation->run() != true) {
         $this->load->view('review/v_input');

        } else {
            $data = [
                'nama' =>$this->input->post('nama'),
                'nhp' =>$this->input->post('nhp'),
                'merk' =>$this->input->post('merk'),
                'ukuran' =>$this->input->post('ukuran'),
                'harga' =>$this->Review_model->proses()
            ];
            $this->load->view('review/v_output', $data);
        }
    }   
}


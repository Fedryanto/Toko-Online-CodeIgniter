<?php
class Kategori extends CI_Controller{
    public function sepatu_wanita(){
        $data['sepatu_wanita'] = $this->model_kategori->data_sepatu_wanita()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('sepatu_wanita', $data);
        $this->load->view('templates/footer');
    }
    public function sepatu_pria(){
        $data['sepatu_pria'] = $this->model_kategori->data_sepatu_pria()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('sepatu_pria', $data);
        $this->load->view('templates/footer');
    }
    public function pakaian_pria(){
        $data['pakaian_pria'] = $this->model_kategori->data_pakaian_pria()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pakaian_pria', $data);
        $this->load->view('templates/footer');
    }
    public function pakaian_wanita(){
        $data['pakaian_wanita'] = $this->model_kategori->data_pakaian_wanita()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pakaian_wanita', $data);
        $this->load->view('templates/footer');
    }
    public function other(){
        $data['other'] = $this->model_kategori->data_other()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('other', $data);
        $this->load->view('templates/footer');
    }
    
}
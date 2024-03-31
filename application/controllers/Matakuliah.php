<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matakuliah extends CI_Controller {

    public function index() {
		$this->load->library('form_validation');
        $this->load->view('form-matakuliah');
    }

    public function cetak() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('kode', 'Kode MTK', 'required|min_length[3]');
        $this->form_validation->set_rules('nama', 'Nama MTK', 'required|min_length[3]');
        $this->form_validation->set_rules('sks', 'SKS', 'required');

        if ($this->form_validation->run() == FALSE) {
            // Jika validasi gagal, kembalikan user ke halaman form dengan pesan error
            $this->load->view('form-matakuliah');
        } else {
            // Jika validasi berhasil, tampilkan view hasil
            $data = array(
                'kode' => $this->input->post('kode'),
                'nama' => $this->input->post('nama'),
                'sks' => $this->input->post('sks')
            );
            $this->load->view('view-form-matakuliah', $data);
        }
    }

}
?>

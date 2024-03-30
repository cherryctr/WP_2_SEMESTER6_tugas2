<?php
class Latihan1 extends CI_Controller
{
    public function index()
    {
        echo "Selamat Datang.. selamat belajar Web Programming";
        // $this->load->view('view-latihan1'); // Aktifkan baris ini jika ingin menggunakan view
    }

public function penjumlahan($n1 = null, $n2 = null)
{
    $this->load->model('Model_latihan1');
    $data['nilai1'] = $n1;
    $data['nilai2'] = $n2;
    $data['hasil'] = $this->Model_latihan1->jumlah($n1, $n2);
    $dir = '/codeigniter3';
    
    $base_url = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";
    $base_url .= "://".$_SERVER['HTTP_HOST'];
    
    // Menambahkan alert form
    if (empty($n1) || empty($n2)) {
        echo "<script>";
        echo "var n1 = parseInt(prompt('Masukkan angka 1:'));";
        echo "var n2 = parseInt(prompt('Masukkan angka 2:'));";
        echo "if (!isNaN(n1) && !isNaN(n2)) {"; // Pastikan n1 dan n2 adalah angka
        echo "  window.location.href = '".$base_url . $dir. "/Latihan1/penjumlahan/' + n1 + '/' + n2;";
        echo "} else {";
        echo "  alert('Masukkan angka yang valid.');";
        echo "}";
        echo "</script>";
    }

    $this->load->view('view-latihan1', $data);
}


}
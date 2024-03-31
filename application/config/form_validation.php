<?php
$config = array(
    // Aturan validasi untuk kode
    array(
        'field' => 'kode',
        'label' => 'Kode MTK',
        'rules' => 'required|min_length[3]',
        'errors' => array(
            'required' => 'Kode MTK harus diisi.',
            'min_length' => 'Kode MTK minimal harus 3 karakter.'
        )
    ),
    // Aturan validasi untuk nama
    array(
        'field' => 'nama',
        'label' => 'Nama MTK',
        'rules' => 'required|min_length[3]',
        'errors' => array(
            'required' => 'Nama MTK harus diisi.',
            'min_length' => 'Nama MTK minimal harus 3 karakter.'
        )
    ),
    // Aturan validasi untuk SKS
    array(
        'field' => 'sks',
        'label' => 'SKS',
        'rules' => 'required',
        'errors' => array(
            'required' => 'SKS harus dipilih.'
        )
    )
);

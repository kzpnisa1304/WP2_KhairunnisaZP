<?php
class DLemas extends CI_Controller
{
 public function index()
 {
    $data['judul'] = "Halaman Depan";
    $this->load->view('view_header_form',$data);
    $this->load->view('view_form_dlemas');
 }

 public function cetak()
 {
    $this->form_validation->set_rules('nama', 'Nama Siswa', 'required|min_length[3]', [
        'required' => 'Nama Siswa Harus diisi',
        'min_lenght' => 'Kode terlalu pendek'
    ]);

    $this->form_validation->set_rules('nis', 'NIS', 'required|min_length[3]', [
        'required' => 'NIS Harus diisi',
        'min_lenght' => 'NIS terlalu pendek'
    ]);

    $this->form_validation->set_rules('kls', 'Kelas', 'required|min_length[3]', [
        'required' => 'Kelas Harus diisi',
        'min_lenght' => 'Kelas terlalu pendek'
    ]);

    $this->form_validation->set_rules('tgllahir', 'Tanggal Lahir', 'required|min_length[3]', [
        'required' => 'Tanggal Lahir Harus diisi',
        'min_lenght' => 'Tanggal Lahir terlalu pendek'
    ]);

    $this->form_validation->set_rules('alamat', 'Alamat', 'required|min_length[3]', [
        'required' => 'Alamat Harus diisi',
        'min_lenght' => 'Alamat terlalu pendek'
    ]);

    if ($this->form_validation->run() != true) {
         $this->load->view('view_form_dlemas');
    } else {
        $data = [
            'nama' => $this->input->post('nama'),
            'nis' => $this->input->post('nis'),
            'kls' => $this->input->post('kls'),
            'tgllahir' => $this->input->post('tgllahir'),
            'alamat' => $this->input->post('alamat'),
            'Jenkel' => $this->input->post('Jenkel'),
            'agama' => $this->input->post('agama')
        ];

        $this->load->view('view_header_cetak',$data);
        $this->load->view('view_data_dlemas', $data);
    }
  }
}
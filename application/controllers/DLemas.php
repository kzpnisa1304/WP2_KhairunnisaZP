<?php
class DLemas extends CI_Controller
{
 public function index()
 {
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

    $this->form_validation->set_rules('kelas', 'Kelas', 'required|min_length[3]', [
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
            'kelas' => $this->input->post('kelas'),
            'tgllahir' => $this->input->post('tgllahir'),
            'alamat' => $this->input->post('alamat'),
            'Jenis_kelamin' => $this->input->post('Jenis_kelamin'),
            'agama' => $this->input->post('agama')
        ];

        $this->load->view('view_data_dlemas', $data);
    }
  }
}
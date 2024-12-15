<?php

class Mahasiswa extends Controller
{
    public function index() 
    {
        $data['tajuk'] = 'Daftar Mahasiswa';
        $data['mhs'] = $this->model('mahasiswa.model','MahasiswaUNPAS')->getAllMahasiswa();
        $this->view('templates/header' , $data);
        $this->view('mahasiswa/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id) 
    {
        $data['tajuk'] = 'Detail Mahasiswa';
        $data['mhs'] = $this->model('mahasiswa.model','MahasiswaUNPAS')->getMahasiswaByID($id);
        $this->view('templates/header' , $data);
        $this->view('mahasiswa/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah() 
    {
        if ($this->model('mahasiswa.model', 'MahasiswaUNPAS')->tambahDataMahasiswa($_POST) > 0) {
            Flasher::setFlash('berjaya', 'ditambahkan','success');
            header('Location: '. BASEURL .'/mahasiswa');
        } else {
            Flasher::setFlash('gagal', 'ditambahkan','danger');
            header('Location: '. BASEURL .'/mahasiswa');
        }
    }
}
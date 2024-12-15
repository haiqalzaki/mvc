<?php

class About extends Controller
{
    public function index($nama = 'Haiqal', $pekerjaan = 'Dosen', $umur = 32) 
    {
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;
        $data['tajuk'] = 'About Me';

        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }

    public function page() 
    {
        $data['tajuk'] = 'My Page';
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}
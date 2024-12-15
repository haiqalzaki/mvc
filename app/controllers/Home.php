<?php

class Home extends Controller
{
    public function index() 
    {
        $data['tajuk'] = 'Home';
        $data['nama'] = $this->model('user.model','User')->getUser();

        $this->view('templates/header' , $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}
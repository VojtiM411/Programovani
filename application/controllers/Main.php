<?php

class Main extends CI_Controller
{
    public function index()
    {
        $this->load->model('MainModel');
        $data["vypis"] = $this->MainModel->vypis();
        $this->load->view('jmena_zaku');
        $this->load->view('kurz_zaka');
        $this->load->view('hlavni_strana', $data);
    }
    public function vypsani()
    {
        $this->load->model('MainModel');
        $this->load->view('vypis_kurzu');
    }
}
<?php

class Main extends CI_Controller
{
    public function index()
    {
        $this->load->model('MainModel');
        
        $zaci = $this->MainModel->getUsernames();
        $data['zaci'] = $zaci;
        $this->load->view('user_view',$data);
        $data["vypis"] = $this->MainModel->vypis();
        $this->load->view('seznam_kurzu', $data);
    }

    public function userDetails(){
        $postData = $this->input->post();
    
        $data = $this->MainModel->getUserDetails($postData);
    
        echo json_encode($data);
      }
    
    /*public function vypsani()
    {
        $this->load->model('MainModel');
        $this->load->view('vypis_kurzu');
    }*/
}
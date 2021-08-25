<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainModel extends CI_Model
{
    public function __construct()
    {
        $this->load->database('arkana');
    }
    public function vypis()
    {
        $query = $this->db->query("SELECT idkurz, nazev, vyucujici, misto, pocet_mist FROM kurz");
        return $query;
    }
    function getUsernames()
    {
        $this->db->select('jmeno');
        $records = $this->db->get('zak');
        $zaci = $records->result_array();
        return $zaci;
    }
    function getUserDetails($postData = array())
    {
        $response = array();
 
        if(isset($postData['jmeno']) )
        {
          $this->db->select('*');
          $this->db->where('jmeno', $postData['jmeno']);
          $records = $this->db->get('zak');
          $response = $records->result_array();
        }
     
        return $response;
    }
}
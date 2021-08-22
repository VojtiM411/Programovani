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
        $query = $this->db->query("SELECT nazev, vyucujici, misto, pocet_mist FROM kurz");
        return $query;
    }
}
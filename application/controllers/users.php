<?php
if(!defined("BASEPATH")) exit("No direct script access allowed");
class Users extends CI_Controller
{
  function index()
{
    $this->load->model("status");
    $data['records'] = $this->status->getAllRecords();
    $this->load->view("status",$data);
}
}
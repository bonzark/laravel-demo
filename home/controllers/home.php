<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends MX_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("portfolio/portfolio_model");
    }

    public function index()
    {
        $data['title'] = "";
        $result['portfolio'] = $this->portfolio_model->get_project("startups", 4);
        $this->load->view("client_default/header", $data);
        $this->load->view("startup", $result);
        $this->load->view("client_default/footer");
    }
}

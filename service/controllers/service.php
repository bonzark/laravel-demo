<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Service extends MX_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("service_model");
        $this->load->model("portfolio/portfolio_model");
    }

    public function index()
    {
        echo "Wrong Path!!!";
    }

    public function startup()
    {
        $data['title'] = "STARTUP";
        $result['portfolio'] = $this->portfolio_model->get_project("startups", 4);
        $this->load->view("client_default/header", $data);
        $this->load->view("startup", $result);
        $this->load->view("client_default/footer");
    }

    public function designStudio()
    {
        $this->load->helper('array');
        $data['title'] = "DESIGN STUDIO";
        $portfolio = $this->portfolio_model->get_featured();
        $result['portfolio'] = array_column($portfolio, NULL, 'name');
        $this->load->view("client_default/header", $data);
        $this->load->view("designStudio", $result);
        $this->load->view("client_default/footer");
    }

    public function technology()
    {
        $data['title'] = "TECHNOLOGY";
        $this->load->view("client_default/header", $data);
        $this->load->view("technology");
        $this->load->view("client_default/footer");
    }

    public function customizedSolution()
    {
        $data['title'] = "Customized Solutions";
        //customized-solution
        $result['portfolio'] = $this->portfolio_model->get_project("", 4);
        $this->load->view("client_default/header", $data);
        $this->load->view("customizedSolution", $result);
        $this->load->view("client_default/footer");
    }
}

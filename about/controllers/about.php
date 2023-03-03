<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class About extends MX_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('mail');
        $this->load->model("portfolio/portfolio_model");
    }

    public function index() {
        $data['title'] = "About";
        $data['keywords']="About Bonzark";
        $this->load->helper('array');
        $portfolio = $this->portfolio_model->get_featured();
        $result['portfolio'] = array_column($portfolio, NULL, 'name');
        $this->load->view("client_default/header", $data);
        $this->load->view("about",$result);
        $this->load->view("client_default/footer");
    }
}

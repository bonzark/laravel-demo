<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Portfolio extends MX_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("portfolio_model");
    }

    public function index() {
        $data['title'] = "PORTFOLIO";
        
        $result['featured'] = $this->portfolio_model->get_featured();
        $result['category'] = $this->portfolio_model->get_category();
        
        $this->load->view("client_default/header", $data);
        $this->load->view('portfolio', $result);
        $this->load->view("client_default/footer");
    }

    public function selectProject($category = ""){
        $data = $this->portfolio_model->get_project($category);
        echo json_encode($data);
    }
    
    public function project($id, $slug) {
        $result['project'] = $this->portfolio_model->get_project_by_id($id);
        $data['title'] = $result['project']['name'];
        $this->load->view("client_default/header", $data);
        $this->load->view('project', $result);
        $this->load->view("client_default/footer");
    }
}

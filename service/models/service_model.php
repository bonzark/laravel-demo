<?php

class Service_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_startup() {
        $this->db->select('p.*,group_concat(distinct t.name) tag_name,pi.title,pi.url,pi.priority', FALSE);
        $this->db->from("project p");
        $this->db->join("project_image pi", "pi.project_id = p.id", "left");
        $this->db->join("project_category pc", "pc.project_id = p.id and pc.status = 0", "left");
        $this->db->join("category c", "c.id = pc.category_id", "left");
        $this->db->join("project_tag pt", "pt.project_id = p.id and pt.status = 0", "left");
        $this->db->join("tag t", "t.id = pt.tag_id", "left");
        $this->db->group_by("p.id");
        $this->db->where('c.name', 'Startups');
        $this->db->where('pi.priority', 1);
        $this->db->limit(4);
        $data = $this->db->get()->result_array();
        return $data;
    }
    
    public function get_customized_sol($c_id){
            $this->db->select('p.*,group_concat(distinct t.name) tag_name,pi.title,pi.url,pi.priority', FALSE);
        $this->db->from("project p");
        $this->db->join("project_image pi", "pi.project_id = p.id", "left");
        $this->db->join("project_category pc", "pc.project_id = p.id and pc.status = 0", "left");
        $this->db->join("category c", "c.id = pc.category_id", "left");
        $this->db->join("project_tag pt", "pt.project_id = p.id and pt.status = 0", "left");
        $this->db->join("tag t", "t.id = pt.tag_id", "left");
        $this->db->group_by("p.id");
        $this->db->where('c.id',$c_id);
        $this->db->where('pi.priority', 1);
        $this->db->limit(4);
        $data = $this->db->get()->result_array();
        return $data;
    }

}

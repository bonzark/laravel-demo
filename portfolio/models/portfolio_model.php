<?php

class Portfolio_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_featured() {
        $data = $this->db->select("COUNT(pc.id) as projectCount,c.name")
                        ->from("category c")
                        ->join("project_category pc", "pc.category_id = c.id", "left")
                        ->where("is_featured", 1)
                        ->group_by("c.id")
                        ->get()->result_array();
        return $data;
    }

    public function get_category() {
        $data = $this->db->select('c.*')
                        ->from('category c')
                        ->where('c.status', 0)
                        ->order_by("c.priority = 0 asc,c.priority asc")
                        ->get()->result_array();
        return $data;
    }

    public function get_project($category = "", $limit = '') {
        
        $this->db->select('p.*,group_concat(distinct t.name) tag_name, pi.title,pi.url', FALSE)
                 ->from("project p")
                 ->join("project_tag pt","pt.project_id = p.id","left")
                 ->join("tag t", "t.id = pt.tag_id", "left")
                 ->join("project_category pc", "pc.project_id = p.id", "left")
                 ->join("project_image pi", "pi.project_id = p.id and pi.priority=1", "left");
        if($category) {
            $this->db->join("category c", "pc.category_id = c.id and c.slug='".$category."'")
                     ->order_by("pc.priority = 0 asc, p.priority asc");
        } else {
            $this->db->order_by("p.priority = 0 asc, p.priority asc");
        }
        $this->db->where('p.status', 0)
                 ->group_by("p.id");
        if($limit)
            $this->db->limit($limit);
        
        $data = $this->db->get()->result_array();
        return $data;
    }

    public function get_project_by_id($id) {
        $this->db->select('p.*,group_concat(DISTINCT t.name SEPARATOR " | ") tag_name', FALSE);
        $this->db->from("project p");
        $this->db->join("project_tag pt", "pt.project_id = p.id and pt.status = 0", "left");
        $this->db->join("tag t", "t.id = pt.tag_id", "left");
        $this->db->where('p.id', $id);
        $data = $this->db->get()->row_array();
        if ($data) {
            $data['image'] = $this->db->select('pi.*', FALSE)
                            ->from('project_image pi')
                            ->order_by('pi.priority', 'asc')
                            ->where('pi.project_id', $id)
                            ->get()->result_array();
        }
        return $data;
    }
}

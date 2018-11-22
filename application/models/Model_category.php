<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Model_category extends CI_Model {
    function __construct()
    {
      parent::__construct();
      $this->load->library('session');

  }

    public function get_all_category() {
        $this->db->order_by("kategori", "ASC");
        $result = $this->db->get("category");
        return $result->result();
    }

    public function insert_category($params) {
        $this->db->insert("category", $params);
        return ($this->db->affected_rows() > 0) ? true : false;
    }

    public function update_category($id, $params) {
        $this->db->where("id", $id);
        return ($this->db->update("category", $params) === true) ? true : false;
    }

    public function delete_category($id) {
        $this->db->where("id", $id);
        $this->db->delete("category");
        return ($this->db->affected_rows() > 0) ? true : false;
    }

    public function ajax_get_all_category($params) {
        $data = array();
        $columns = array(
            1 => "kategori"
        );
        $where = "";
        $query = "SELECT CONCAT((@row_number:=@row_number + 1), '.') AS no, kategori, CONCAT(
                '<button class=\"btn btn-primary btn-xs no-border\" id=\"hide-option\" title=\"Update\" onclick=\"updatecategory(', id, ', \'', kategori, '\');\">
                    <i class=\"fa fa-pencil-square-o\"></i>
                </button>
                <button class=\"btn btn-danger btn-xs no-border\" id=\"show-option\" title=\"Delete\" onclick=\"deletecategory(', id, ');\">
                    <i class=\"fa fa-trash-o\"></i>
                </button>') AS action 
                    FROM category, (SELECT @row_number:=0) AS t ";
        if(!empty($params["search"]["value"])) {
            $where .="WHERE (kategori LIKE '%".$params["search"]["value"]."%') ";
        }
        if(isset($where) && $where != "") {
            $query .= $where;
        }
        $query .=  "ORDER BY " . $columns[$params["order"][0]["column"]] . " " . $params["order"][0]["dir"] . "  LIMIT " . $params["start"] . ", " . $params["length"];
        $result = $this->db->query($query);
        if ($result->num_rows() > 0) {
            foreach ($result->result() as $row) {
                $data[] = array(
                    $row->no,
                    $row->kategori,
                    $row->action
                );
            }
        }
        return $data;
    }

  public function ajax_get_all_total_category($params) {
        $total = 0;
        $where = "";
        $query = "SELECT COUNT(id) AS total 
                    FROM category ";
        if(!empty($params["search"]["value"])) {
            $where .="WHERE (kategori LIKE '%".$params["search"]["value"]."%') ";
        }
        if(isset($where) && $where != "") {
            $query .= $where;
        }
        $result = $this->db->query($query)->row();
        $total = $result->total;
        return $total;
    }    
}
?>
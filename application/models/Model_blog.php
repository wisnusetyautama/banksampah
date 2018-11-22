<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Model_blog extends CI_Model {
    function __construct()
    {
      parent::__construct();
      $this->load->library('session');

    }

    public function insert_blog($params) {
        $this->db->insert("blog", $params);
        return ($this->db->affected_rows() > 0) ? true : false;
    }

    public function get_blog($id) {
        $this->db->where("id", $id);
        return $this->db->get("blog")->row();
    }

    public function update_blog($id, $params) {
        $this->db->where("id", $id);
        return ($this->db->update("blog", $params) === true) ? true : false;
    }

    public function delete_blog($id) {
        $this->db->where("id", $id);
        $this->db->delete("blog");
        return ($this->db->affected_rows() > 0) ? true : false;
    }

    public function ajax_get_all_blog($params) {
        $data = array();
        $columns = array(
            1 => "judul",
            2 => "tanggal",
            3 => "penulis"
        );
        $where = "";
        $query = "SELECT CONCAT((@row_number:=@row_number + 1), '.') AS no, judul, DATE_FORMAT(tanggal, '%d-%m-%Y') AS tanggal, penulis, CONCAT(
                '<a href=\"" . base_url("") . "', id, '\"><button class=\"btn btn-success btn-xs no-border\" id=\"hide-option\" title=\"Update\">
                    <i class=\"fa fa-eye\"></i>
                </button></a>
                <a href=\"" . base_url("Blog/update1/") . "', id, '\"><button class=\"btn btn-primary btn-xs no-border\" id=\"hide-option\" title=\"Update\">
                    <i class=\"fa fa-pencil-square-o\"></i>
                </button></a>
                <button class=\"btn btn-danger btn-xs no-border\" id=\"show-option\" title=\"Delete\"  onclick=\"deleteblog(', id, ');\">
                    <i class=\"fa fa-trash-o\"></i>
                </button>') AS action 
                    FROM blog, (SELECT @row_number:=0) AS t ";
        if(!empty($params["search"]["value"])) {
            $where .="WHERE (judul LIKE '%".$params["search"]["value"]."%') ";
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
                    $row->judul,
                    $row->tanggal,
                    $row->penulis,
                    $row->action
                );
            }
        }
        return $data;
    }

    public function ajax_get_all_total_blog($params) {
        $total = 0;
        $where = "";
        $query = "SELECT COUNT(id) AS total 
                    FROM blog ";
        if(!empty($params["search"]["value"])) {
            $where .="WHERE (judul LIKE '%".$params["search"]["value"]."%') ";
        }
        if(isset($where) && $where != "") {
            $query .= $where;
        }
        $result = $this->db->query($query)->row();
        $total = $result->total;
        return $total;
    }

    public function png2jpg($file_path, $quality) {
        $image = imagecreatefrompng($file_path);
        $bg = imagecreatetruecolor(imagesx($image), imagesy($image));
        imagefill($bg, 0, 0, imagecolorallocate($bg, 255, 255, 255));
        imagealphablending($bg, TRUE);
        imagecopy($bg, $image, 0, 0, 0, 0, imagesx($image), imagesy($image));
        imagedestroy($image);
        imagejpeg($bg, $file_path . ".jpg", $quality);
        return $file_path . ".jpg";
    }
}
?>
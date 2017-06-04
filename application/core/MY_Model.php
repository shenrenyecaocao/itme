<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Model extends CI_Model
{
    public $table = '';
    public $flg_true;
    public $flg_false;

    public function __construct()
    {
        parent::__construct();
        $this->flg_true = 1;
        $this->flg_false = 0;
    }

    public function tablename($name = NULL)
    {
        if ($name === NULL) {
            if ($this->table != '') {
                $name = $this->table;
            } else {
                $class_name = get_class($this);
                $name = substr($class_name, strpos($class_name, '_') + 1);
            }
        }

        return $name;
    }

    public function insert($data)
    {
        $this->db->insert($this->tablename(), $data);
        return $this->db->insert_id();
    }

    public function update($data, $where)
    {
        return $this->db->update($this->tablename(), $data, $where);
    }

    public function delete($where)
    {
        return $this->db->delete($this->tablename(), $where);
    }

    public function soft_delete($where)
    {
        return $this->db->update($this->tablename(), array('delete_flg' => 1), $where);
    }

    public function find($where, $param = NULL, $delete_flg = FALSE)
    {
        $select = empty($param) ? '*' : $param;

        return $this->db->select($select)->where($where)->where('delete_flg', $delete_flg)
            ->get($this->tablename())->row_array();
    }

    public function get_list($param = NULL, $where = NULL, $limit = NULL, $offset = NULL, $order = NULL, $delete_flg = NULL)
    {
        if ($param !== NULL)
        {
            $this->db->select($param);
        }
        else
        {
            $this->db->select('*');
        }

        if (!empty($where))
        {
            $this->db->where($where);
        }

        if (!empty($limit))
        {
            if (!empty($offset))
            {
                $this->db->limit($limit, $offset);
            }
            else
            {
                $this->db->limit($limit);
            }
        }

        if ($order !== NULL)
        {
            $this->db->order_by($order);
        }

        if ($delete_flg === NULL)
        {
            $this->db->where('delete_flg = 0');
        }
        else
        {
            $this->db->where('delete_flg = 1');
        }

        $this->db->from($this->tablename());
        return $this->db->get()->result_array();
    }

    public function get_field()
    {
        return $this->db->list_fields($this->tablename());
    }

    public function get_count($where = [])
    {
        $this->db->select('COUNT(*) AS count');

        if(is_array($where) && ! empty($where))
        {
            $this->db->where($where);
        }

        $result = $this->db->get($this->tablename())->row_array();
        return $result['count'];
    }

    public function field_check($data)
    {
        $new_data = [];
        foreach ($data as $key => $value) {
            if ($this->db->field_exists($key, $this->table)) {
                $new_data[$key] = $value;
            }
        }
        return $new_data;
    }
}

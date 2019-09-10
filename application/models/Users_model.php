<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Users_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_list()
    {
        $this->db->select('users.id , users.first_name , users.last_name ,users.email , groups.name');
        $this->db->from('users');
        $this->db->join('users_groups', 'users.id = users_groups.user_id');
        $this->db->join('groups', 'users_groups.group_id = groups.id');
        $this->db->where('groups.id != 1');
        $query = $this->db->get();
        $data = $query->result();
        return $data;
    }

    public function get_groupbyid($id)
    {
        $this->db->select('groups.name');
        $this->db->from('users');
        $this->db->join('users_groups', 'users.id = users_groups.user_id');
        $this->db->join('groups', 'users_groups.group_id = groups.id');
        $this->db->where('users.id',$id);
        $query = $this->db->get();
        $data = $query->row();
        return $data;
    }

    public function check_email($email)
    {
        $this->db->where('email',$email);
        $query = $this->db->get('users');

        if ($query->num_rows() > 0){
            $ret = $query->row();
            return true;
        }
        else
        {
            return false;
        }
    }

    public function user_delete($id)
    {
        $this->db->where('id',$id);
        $query = $this->db->delete('users');
    }

    public function get_user_details($id)
    {
        $this->db->select('users.id , users.first_name , users.last_name ,users.email , groups.name');
        $this->db->from('users');
        $this->db->join('users_groups', 'users.id = users_groups.user_id');
        $this->db->join('groups', 'users_groups.group_id = groups.id');
        $this->db->where('users.id',$id);
        $query = $this->db->get();
        return $query->row();
    }

    public function update_user($data,$group)
    {
        $this->db->set($data);
        $this->db->where("id",$data["id"]);
        $this->db->update("users");
        $this->db->set("group_id", $group);
        $this->db->where("user_id",$data["id"]);
        $this->db->update("users_groups");
    }
}

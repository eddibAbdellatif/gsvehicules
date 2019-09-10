<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


    class Operations_model extends CI_Model
    {

      public function ajouter($data)
          {

              $this->db->insert('operation', $data);

          }

    public function get_list()
    {

        $this->db->select('operation.id, operation.date_debut, operation.date_fin, operation.sujet, operation.description, vehicule.num_matricule as id_vehicule, CONCAT(users.first_name," ", users.last_name) as id_user');
        $this->db->from('operation');
        $this->db->join(' users' , 'users.id = operation.id_user', "left");
        $this->db->join(' vehicule' , 'vehicule.id = operation.id_vehicule', "left");
        $query = $this->db->get();
        $data = $query->result();
        return $data;
    }


    public function get_details_oper($id)
    {
        $this->db->select('*');
        $this->db->from('operation');
        $this->db->where('id',$id);
        $query = $this->db->get();


        return $query->row();
    }



    public function oper_note_details($id)
    {


 // operation.id, notes.note, vehicule.num_matricule, vehicule.nom, users.first_name, users.last_name

        $this->db->select('operation.id, notes.note, vehicule.num_matricule, vehicule.nom, CONCAT(users.first_name," ", users.last_name) as nom_user');
        $this->db->from('operation');
        $this->db->join(' notes' , 'notes.id_operation = operation.id', "left");
        $this->db->join(' vehicule' , 'vehicule.id = operation.id_vehicule', "left");
        $this->db->join(' users' , 'users.id = operation.id_user', "left");
        $this->db->where('operation.id',$id);
        $query = $this->db->get();
        $data = $query->result();
        return $data;
    }



    public function confermer_edit_oper($data)
    {

        $this->db->set($data);
        $this->db->where("id",$data["id"]);
        $this->db->update("operation");
    }


    public function add_note($data)
        {
            $this->db->insert('notes', $data);
        }

}

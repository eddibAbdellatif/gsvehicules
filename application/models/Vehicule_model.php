<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


    class Vehicule_model extends CI_Model
    {

        public function ajouter($data)
            {

                $this->db->insert('vehicule', $data);
                return $this->db->insert_id();
            }


            public function get_list()
            {
                $this->db->select('* ');
                $this->db->from('vehicule');

                $query = $this->db->get();
                $data = $query->result();
                return $data;
            }

            public function vehic_delete($id)
            {
                $this->db->where('id',$id);
                $query = $this->db->delete('vehicule');
            }

            public function get_vehic_details($id)
            {
                $this->db->select('*');
                $this->db->from('vehicule');
                $this->db->where('id',$id);
                $query = $this->db->get();
                return $query->row();
            }


            public function confermer_edit_vehic($data)
            {

                $this->db->set($data);
                $this->db->where("id",$data["id"]);
                $this->db->update("vehicule");
            }


            public function vehic_oper_details($id)
            {


                $this->db->select('vehicule.id, vehicule.nom , vehicule.marque, vehicule.date_achat, operation.id as id_oper, operation.date_debut, operation.date_fin, operation.sujet, operation.description');
                $this->db->from('vehicule ');
                $this->db->join('operation', 'vehicule.id = operation.id_vehicule', "left");
                $this->db->where('vehicule.id',$id);
                $query = $this->db->get();
                $data = $query->result();
                // var_dump($data);
                // die();
                return $data;
            }


            public function get_vehic_type()
            {
                $this->db->select('*');
                $this->db->from('types_vehic');
                $query = $this->db->get();
                return $query->row();
            }

    }

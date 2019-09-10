<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once(dirname(__FILE__) . "/Auth.php");


  class Vehicule extends Auth
  {
      function __construct()
      {
        parent::__construct();
        $this->load->model('Users_model');
        $this->load->model('Vehicule_model');
        $this->load->model('Operations_model');


        if (!$this->ion_auth->logged_in()) {
            redirect("auth/index");
            die();
        }

      }

      public function index()
      {

          $data = $this->Vehicule_model->get_list();
          $page = $this->load->view('dashboard/vehicules/liste.php', array('data' => $data), true);
          $this->load->view('dashboard/layout/layout.php', array("page" => $page));
      }


      public function add_vehic()
      {

        $data = array(
            "nom" => $this->input->post("nom"),
            "marque" => $this->input->post("marque"),
            "date_achat" => $this->input->post("date_achat"),
            "carburant" => $this->input->post("carburant"),
            "num_matricule" => $this->input->post("num_matricule")
              );

          if ($data) {
            $id =  $this->Vehicule_model->ajouter($data);
            $data["id"] = $id;
              echo json_encode($data);
          }else {
            echo json_encode(["error"=>validation_errors()]);
            return false;
          }

      }

      public function vehic_delete()
      {
        $id=$this->input->post('id');
        $this->Vehicule_model->vehic_delete($id);
        echo true;
      }

      public function vehic_details()
      {
          $id=$this->input->post('id');
          $data=$this->Vehicule_model->get_vehic_details($id);
          echo json_encode($data);
      }


      public function confermer_edit_vehic()
      {

          $this->form_validation->set_error_delimiters('', '');
          $this->form_validation->set_rules('nom', '"nom"', 'required');
          $this->form_validation->set_rules('num_matricule', '"num_matricule"', 'required');
         if ($this->form_validation->run() == FALSE) {
              echo json_encode(["error"=>validation_errors()]);
              return false;
          } else {

          $data = array(
              "id" => $this->input->post("id"),
              "nom" => $this->input->post("nom"),
              "marque" => $this->input->post("marque"),
              "date_achat" => $this->input->post("date_achat"),
              "carburant" => $this->input->post("carburant"),
              "num_matricule" => $this->input->post("num_matricule")
                );

                if ($data) {
                  $this->Vehicule_model->confermer_edit_vehic($data);

                    echo json_encode($data);
                }else {
                  echo json_encode(["error"=>validation_errors()]);
                  return false;
                }

      }
      }



public function add_oper()
{
  $image = basename($_FILES["image"]["name"]);
  $data = array(

      "id_user" => $this->session->userdata("user_id"),
      "date_debut" => $this->input->post("date-debut"),
      "date_fin" => $this->input->post("date-fin"),
      "sujet" => $this->input->post("sujet"),
      "description" => $this->input->post("description"),
      "id_vehicule" => $this->input->post("id_vehicule"),
      "image" => $image
        );

        $target_dir = realpath(dirname(__FILE__) . '/../..').'\\uploads\\';
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
    if ($data) {
        $this->Operations_model->ajouter($data);
        echo true;
    }else {
      echo json_encode(["error"=>validation_errors()]);
      return false;
    }

}





    public function oper_details()
    {
        //$id=$this->input->post('id');
      $id = $this->uri->segment(3);


        $data = $this->Vehicule_model->vehic_oper_details($id);
        
        $page = $this->load->view('dashboard/vehicules/liste_vehic_oper.php', array('data' => $data), true);

      $this->load->view('dashboard/layout/layout.php', array("page" => $page));
    }



    public function vehic_type()
    {

        $data=$this->Vehicule_model->get_vehic_type();
        echo json_encode($data);
    }

}

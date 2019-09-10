<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once(dirname(__FILE__) . "/Auth.php");


  class Operations extends Auth
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

          $data = $this->Operations_model->get_list();
          $page = $this->load->view('dashboard/operation/operation.php', array('data' => $data), true);
          $this->load->view('dashboard/layout/layout.php', array("page" => $page));
      }


      public function details_oper()
      {
          $id=$this->input->post('id');
          $data=$this->Operations_model->get_details_oper($id);
          echo json_encode($data);
      }


      public function confermer_edit_oper()
      {

          $this->form_validation->set_error_delimiters('', '');
          $this->form_validation->set_rules('date_debut', '"date_debut"', 'required');
          $this->form_validation->set_rules('date_fin', '"date_debut"', 'required');
          $this->form_validation->set_rules('sujet', '"sujet"', 'required');

         if ($this->form_validation->run() == FALSE) {
              echo json_encode(["error"=>validation_errors()]);
              return false;
          } else {



          $data = array(
              "id" => $this->input->post("id"),
              "date_debut" => $this->input->post("date_debut"),
              "date_fin" => $this->input->post("date_fin"),
              "sujet" => $this->input->post("sujet"),
              "description" => $this->input->post("description"),

                );



                if ($data) {
                  $this->Operations_model->confermer_edit_oper($data);

                    echo json_encode($data);
                }else {
                  echo json_encode(["error"=>validation_errors()]);
                  return false;
                }

      }
      }

      public function add_note()
      {
        $data = array(
            "id_operation" => $this->input->post("id"),
            "note" => $this->input->post("note"),
            "id_user" => $this->session->userdata("user_id")
              );
        $this->Operations_model->add_note($data);

        echo  true;
      }



      public function oper_note_details()
      {
          //$id=$this->input->post('id');
        $id = $this->uri->segment(3);

          $data = $this->Operations_model->oper_note_details($id);

          $page = $this->load->view('dashboard/operation/liste_oper_note.php', array('data' => $data), true);

        $this->load->view('dashboard/layout/layout.php', array("page" => $page));
      }

}

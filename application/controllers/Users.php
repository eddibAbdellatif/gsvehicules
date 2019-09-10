<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once(dirname(__FILE__) . "/Auth.php");

class Users extends Auth
{
    function __construct()
    {
        parent::__construct();
        
        $this->load->model('Users_model');
        if (!$this->ion_auth->logged_in()) {
            redirect("auth/index");
            die();
        }
        if(!$this->ion_auth->is_admin())
        {


            redirect("auth/non_trouve");

            }

    }

    public function index()
    {
        $data = $this->Users_model->get_list();
        $page = $this->load->view('dashboard/utilisateur/list_users.php', array('data' => $data), true);
        $this->load->view('dashboard/layout/layout.php', array("page" => $page));
    }
    public function non_trouve()
    {
        $this->output->set_status_header(404);
        $this->load->view('errors/cli/error_404.php');
    }
    public function add_user()
    {
        $this->form_validation->set_error_delimiters('', '');
        $this->form_validation->set_rules('register1-firstname', '"Nom"', 'required|min_length[4]');
        $this->form_validation->set_rules('register1-lastname', '"Prénom"', 'required|min_length[4]');
        $this->form_validation->set_rules('register1-email', '"Email"', 'trim|required|valid_email');
        $this->form_validation->set_rules('register1-password', '"Mot de pass"', 'trim|required|min_length[6]|max_length[15]');
        $this->form_validation->set_rules('register1-password2', '"Confirm mot de pass"', 'required|matches[register1-password]');
       if ($this->form_validation->run() == FALSE) {
           echo json_encode(["error"=>validation_errors()]);
           return false;
        } else {
if($this->Users_model->check_email( $this->input->post("register1-email")))
{
    echo json_encode(["error"=>"Cette addresse email est déja utilisé"]);
    return false;
}

            $data = array(
                "first_name" => $this->input->post("register1-firstname"),
                "last_name" => $this->input->post("register1-lastname"),
                "email" => $this->input->post("register1-email"),
                "password" => $this->input->post("register1-password"),
                "passwordc" => $this->input->post("register1-password2"),
                "gestn" => $this->input->post("register1-gestionnaires")

            );


            $group = (($data["gestn"]) ? 2 : 3);
            $id = $this->ion_auth->register($data["email"], $data["password"], $data["email"], $data, array($group));
            $data["id"] = $id;
            $data["role"] = $this->Users_model->get_groupbyid($id)->name;
            echo json_encode($data);
        }
    }


    public function user_delete()
    {
        $id=$this->input->post('id');
        $this->Users_model->user_delete($id);
        echo true;
    }

    public function user_details()
    {
        $id=$this->input->post('id');
        $data=$this->Users_model->get_user_details($id);
        echo json_encode($data);
    }

    public function edit_user2()
    {

        $this->form_validation->set_error_delimiters('', '');
        $this->form_validation->set_rules('register1-firstname', '"Nom"', 'required|min_length[4]');
        $this->form_validation->set_rules('register1-lastname', '"Prénom"', 'required|min_length[4]');
        $this->form_validation->set_rules('register1-email', '"Email"', 'trim|required|valid_email');
       if ($this->form_validation->run() == FALSE) {
            echo json_encode(["error"=>validation_errors()]);
            return false;
        } else {
        $group = (($this->input->post("register1-terms")) ? 1 : 2);
        $data = array(
            "id" => $this->input->post("id"),
            "first_name" => $this->input->post("register1-firstname"),
            "last_name" => $this->input->post("register1-lastname"),
            "email" => $this->input->post("register1-email"),
        );
        $this->Users_model->update_user($data,$group);
        $data["role"] = $this->Users_model->get_groupbyid($data["id"])->name;
        echo json_encode($data);
    }
    }
}

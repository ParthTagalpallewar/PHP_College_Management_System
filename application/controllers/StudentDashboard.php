<?php
defined('BASEPATH') or exit('No direct script access allowed');

class studentDashboard extends CI_Controller
{

    public function index()
    {
        $user = $this->Auth_model->getUserById($this->session->userdata('user_id'));

        $userBranch = $user['branch'];
        $userYear = $user['year'];

        $events = $this->Event_model->getEvents($userYear, $userBranch);

        $this->load->view("Student/home", array('events' => $events));

    }

    //call this method from home to navigate to change password page
    public function changePassword()
    {
        $this->load->view("Student/change_password");
    }

    //call this method change password to update
    public function updatePassword()
    {
     
        $this->form_validation->set_rules('password', 'password', 'required');
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

        if ($this->form_validation->run() == false) {

            $this->load->view('Student/change_password');

        } else {
       
            $id = $this->session->userdata('user_id');
            $password = $this->input->post('password');

            $this->Auth_model->updatePassword($id, $password);
            
            $this->load->view('Student/home');
        }

    }

    public function profile(){
        $student = $this->Auth_model->getUserById($this->session->userdata('user_id'));
        $this->load->view('Student/Profile', array('student' => $student));
    }

}
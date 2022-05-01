<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_controller
{

    public function signup()
    {

        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('email', 'email', 'required|valid_email');
        $this->form_validation->set_rules('phone', 'phone', 'required|max_length[10]|min_length[10]|callback_unique_phone',
            array('unique_phone' => 'Your Account Already Exists'));
        $this->form_validation->set_rules('branch', 'branch', 'required');
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

        if ($this->form_validation->run() == false) {

            $this->load->view('student_register');


        } else {
            echo $this->session->userdata('user_id');
            ///save record to database
            $formArray = array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'phone' => $this->input->post('phone'),
                'branch' => $this->input->post('branch'),
                'year' => date('Y'),

            );

            $student = $this->Auth_model->signup($formArray);
            $this->session->set_flashdata('success', 'Record added successfully!');
            
            //save user data and name
            $this->session->set_userdata('user_id', $student['id']);
            $this->session->set_userdata('user_name', $student['name']);
            
            redirect(base_url() . 'studentDashboard/index');

           

        }
    }

    public function unique_phone($phone)
    {
        //if phone number already exits in database
        if ($this->Auth_model->checkPhoneAlreadyExits($phone)) {
            $this->form_validation->set_message('phone_check', 'Your Account Already Exists');
            return false;

        }
        return true;
    }

    public function login()
    {

        $this->form_validation->set_rules('idcode', 'ID', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');

        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

        if ($this->form_validation->run() == false) {

            $this->load->view('student_login');

        } else {
            ///save record to database
            $formArray = array(
                'idcode' => $this->input->post('idcode'),
                'password' => $this->input->post('password'),
            );

            $loginResponse = $this->Auth_model->loginUser($formArray);

            if ($loginResponse["result"]) {
                //save user name and password
                $this->session->set_userdata('user_id',  $loginResponse['data']['id']);
                $this->session->set_userdata('user_name',  $loginResponse['data']['name']);

                redirect(base_url().'studentDashboard/index');
              
            } else {
               
                $this->session->set_flashdata('error', $loginResponse['message']);
                $this->load->view('student_login');

            }
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('user_name');
        $this->session->unset_userdata('user_id');
        $this->session->set_flashdata('success', 'Record deleted successfully');
        redirect(base_url() . 'Welcome/homeNavigation/homeScreen');
    }

    public function adminAuth()
    {

       
        $this->form_validation->set_rules('password', 'password', 'required|callback_match_password',
                array('match_password' => 'Password Does Not Match'));

        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

        if ($this->form_validation->run() == false) {

            $this->load->view('admin/login');

        } else {
            
            redirect(base_url() . 'Admin/index');

          
        }
        

    }
    
    public function match_password($password){
        
        if($password == "admin"){
            return true;
        }
        
        return false;
    }
}
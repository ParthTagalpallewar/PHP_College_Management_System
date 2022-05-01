<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_controller
{
    public function index()
    {

        $departmentsArray = array(
            'CM' => 'Computer Science',
            'IT' => 'Information Technology',
            'XT' => 'Electronics',
            'EE' => 'Electrical',
            'ME' => 'Mechanical',
            'CE' => 'Civil',
        );
        $yearsArray = array('2017', '2018', '2019', '2020', '2021', '2022');

        $data = array(
            'query' => $this->input->post('search'),
            'year' => $this->input->post('year'),
            'branch' => $this->input->post('department'),
        );

        $passingData = array();
        $passingData['students'] = $this->Admin_model->getUsers($data);
        $passingData['dropDownDepartments'] = $departmentsArray;
        $passingData['dropDownYears'] = $yearsArray;

        //loading model and sending all students in database
        $this->load->view('admin/home', $passingData);
    }
    //call this function when click update btn in admin dashboard and
    //what to open update student page
    public function updateStudent($id)
    {
        $student = array('student' => $this->Admin_model->getStudent($id));

        $this->load->view('admin/update', $student);
    }

    public function updateStudentData($id)
    {
        $updateData = array(
            'name' => $this->input->post('name'),
            'password' => $this->input->post('password'),
            'phone' => $this->input->post('phone'),
            'email' => $this->input->post('email'),
        );

        $this->Admin_model->updateStudentData($id, $updateData);
        $this->session->set_flashdata('success', 'Data Updated successfully!');

        redirect(base_url() . '/Admin/index');

    }

    public function deleteUser($id)
    {
        $this->Admin_model->deleteStudent($id);
        $this->session->set_flashdata('success', 'Data Deleted successfully!');

        redirect(base_url() . '/Admin/index');

    }

    public function logout()
    {
        $this->load->view('homeScreen');
    }

    public function addEvent()
    {

        $data = array(
            'year' => $this->input->post('year'),
            'branch' => $this->input->post('department'),
            'event' => $this->input->post('event'),
            'description' => $this->input->post('description'),
        );

        $this->form_validation->set_rules('event', 'Event', 'required');
        $this->form_validation->set_rules('description', 'description', 'required');

        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

        //if any error in form validation
        if ($this->form_validation->run() == false) {

            $departmentsArray = array(
                'CM' => 'Computer Science',
                'IT' => 'Information Technology',
                'XT' => 'Electronics',
                'EE' => 'Electrical',
                'ME' => 'Mechanical',
                'CE' => 'Civil',
            );
            $yearsArray = array('2017', '2018', '2019', '2020', '2021', '2022');

            //just load the view again
            $this->load->view('admin/event', array(
                'departments' => $departmentsArray,
                'years' => $yearsArray,
            ));

        } else {
            //add event and move to admin home screen
            $this->Event_model->addEvent($data);
            redirect(base_url() . 'Admin/index');
        }

    }
}
<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Auth_model extends CI_Model
{

    public function signup($formArray)
    {
        $idCode = $this->getIdCode($formArray);
        $formArray['idcode'] = $idCode;
        $formArray['password'] = $idCode;

        $this->db->insert('students', $formArray);
        //get lastly inserted Id 
        $userId = $this->db->insert_id();
        $user = $this->db->where('id', $userId)->get("students")->row_array();

        return $user;
        
    }

    public function getIdCode($formArray)
    {
        $year = substr(date("Y"), 2);
        $department = $formArray['branch'];

        $cond = array(
            'branch' => $department,
            'year' => $formArray['year'],
        );
        $studentsId = $this->db->where($cond)->get('students')->num_rows() + 1;

        if (strlen($studentsId) == 1) {
            $studentsId = "00" . $studentsId;
        }
        if (strlen($studentsId) == 2) {
            $studentsId = "0" . $studentsId;
        }

        $finalId = $year . $department . $studentsId;
        return $finalId;
    }

    // return true if phone number does not exist in database
    public function checkPhoneAlreadyExits($phone)
    {

        return $this->db->where('phone', $phone)->get('students')->num_rows() != 0;
    }

    public function loginUser($formArray)
    {

        //if yes then check passoword and idcode is match
        //if yes navigate user to home Screen
        $cond = array(
            "idcode" => $formArray["idcode"],
            "password" => $formArray["password"]
        );
        //check that Id is present in database
        if ($this->db->where($cond)->get("students")->num_rows() == 1) {
            $user = $this->db->where($cond)->get("students")->row_array();
            return array(
                "result" => true,
                "data" => $user
              //  redirect(base_url() . 'Welcome/homeNavigation/student_dashboard');

            );
        }
        //if user not found
        else{
            return array(
                "result" => false,
                "message" => "Wrong Id-Code or password"
            );
        }
    }

    public function updatePassword($userId,$password){
        $this->db->where('id', $userId)->update('students', array('password' => $password));
    }

    public function getUserById($id){
        return $this->db->where('id', $id)->get('students')->row_array();
    }

}
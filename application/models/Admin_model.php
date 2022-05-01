<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Admin_model extends CI_Model
{

    public function getUsers($data){

        // if query is not null then add        
        if(isset($data['query']) & !empty($data['query'])){
            
            $this->db->like('name', $data['query']);
            
        }
        
        // if query is not null then add        
        if($data['year'] != null & $data['year'] != 'all'){
            
            $this->db->where('year', $data['year']);
            
        }
        // if query is not null then add        
        if($data['branch'] != null & $data['branch'] != 'all'){
            
            $this->db->where('branch', $data['branch']);
            
        }

        

        return $this->db->order_by('id', 'DESC')->get('students')->result_array();
    }

    public function getStudent($id){
        return $this->db->where('id', $id)->get('students')->row_array();
    }

    public function updateStudentData($id, $data){
        $this->db->where('id', $id)->update('students', $data);
    }

    public function deleteStudent($id){
        $this->db->where('id', $id)->delete('students');
    }
}
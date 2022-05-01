<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Event_model extends CI_Model
{
    
    public function addEvent($data){

        $data['date'] = date("d-m-y");
        
        $this->db->insert('events', $data);
        
    }

    public function getEvents($year, $branch){

       
        $sql = "SELECT * FROM events WHERE year LIKE '%$year' OR year LIKE '%all' AND branch LIKE '%$branch' OR branch LIKE '%all'";
        $this->db->order_by('id', 'DESC');

        $events = $this->db->query($sql)->result_array( );
        return $events;  
        
    }
}
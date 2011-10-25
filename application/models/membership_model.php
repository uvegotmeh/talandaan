<?php

class Membership_model extends CI_Model{
    //find the username and password in db
    function validate()
    {   
        $this->db->where('username', $this->input->post('username'));
        $this->db->where('password', md5($this->input->post('password')));
        $query = $this->db->get('users');
        if($query->num_rows == 1)
        {   
            return true;
        }
    }
    //insert all the data in db
    function create_member()
    {
        $new_member_insert_data = array(
            'first_name' => $this->input->post('first_name'),
            'last_name' => $this->input->post('last_name'),
            'email_address' => $this->input->post('email_address'),
            'username' => $this->input->post('username'),
            'password' => md5($this->input->post('password')),
        );  
        $insert = $this->db->insert('users' , $new_member_insert_data);
        return $insert;
    }
    //check if the username is not exists
    function check_exists_username($username)
    {
        $query_str = "SELECT username from users where username = ?";
        $result = $this->db->query($query_str, $username);
        if($result->num_rows() > 0)
        {
            //username exists
            return TRUE;
        }else
        {
            //username doesn't exists   
            return FALSE;
        }
        
    }
     //get events from table schedules
     function get_events() 
   {
       $this->db->where('user_id', $this->session->userdata('user_id'));
       $query = $this->db->get('schedules');
       if($query->num_rows() > 0 ) 
       {
           return $query->result();
       }else{
           return array();
       }
   }
   //update event on DB
   function update()
   {
        $data = array(
                'title' => $this->input->post('updatetitle', true),
                'description' => $this->input->post('description', true),
                'user_id'   => $this->session->userdata('user_id', true)  
        );
        $this->db->where('id', $this->input->post('event_id'));
        $this->db->update('schedules', $data);
   }
   //delete event on DB
   public function delete( $id )
   {
    $id = intval ($id);
    $this->db->where('id', $id);
    $this->db->delete('schedules');
    }//end delete
  
   public function add_event(){
       $new_event = array(
                'start' => $this->input->post('startdate'),	
                'end' => $this->input->post('enddate'),
                'title' => $this->input->post('title'),
                'description' => $this->input->post('desc'),
                'user_id'   => $this->session->userdata('user_id')
             );
            $insert = $this->db->insert('schedules', $new_event);
            return $insert; 
   } 
}
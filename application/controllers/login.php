<?php

class Login extends CI_Controller{
    
    function index()
    {
        $data['main_content'] = 'login_form';
        $this->load->view('includes/template', $data);
    }
    
    function validate_credentials()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username', 'trim|required|alpha_numeric|min_length[6]|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_lenght[4]|max_lenght[32]');
         if($this->form_validation->run() == FALSE)
                {
                     $this->index();
                }else{
                $this->load->model('membership_model');
                $query = $this->membership_model->validate();
                if($query) // if the user's credentials validated...
                {
                    $this->db->select('user_id');
                    $this->db->where('username',$this->input->post('username') );
                    $query = $this->db->get('users');

                    $row = $query->row();

                    $data = array(
                        'username' => $this->input->post('username'),
                        'is_logged_in' => true,
                        'user_id'   => $row->user_id
                    );

                    $this->session->set_userdata($data);
                    redirect('overview');
                }
        else
        {
            $this->index();
        }
        }
    }
    function signup()
    {
      $data['main_content'] = 'sign_up_form';
      $this->load->view('includes/template', $data);
    }
    
    function create_member()
    {
        
        $this->load->library('form_validation');
        //field name, error messages validation form
        
        $this->form_validation->set_rules('first_name', 'Name', 'trim|required');
        $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
        $this->form_validation->set_rules('email_address', 'Email Address', 'trim|required|valid_email');
        
        $this->form_validation->set_rules('username', 'Username', 'trim|required|alpha_numeric|min_length[6]|xss_clean|callback_username_not_exists');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_lenght[4]|max_lenght[32]');
        $this->form_validation->set_rules('password2', 'Password Confirm', 'trim|required|matches[password]');
   
        
       //if not valid,ridirect to signup() function
        if($this->form_validation->run() == FALSE)
        {
            $this->signup();
        }
        else
        {
            //if valid, this inserted the data
            $this->load->model('membership_model');
            if($query = $this->membership_model->create_member())
             {
                 $data['main_content'] = 'account_successful';
                  $this->load->view('includes/template', $data);
             
             }
            else
             {
                 $this->load->view('signup_form');
             }
        }
    }
    
    function username_not_exists($username)
    {
        //check if the username is already exists
        $this->form_validation->set_message('username_not_exists', 'That %s already exists. Please choose a different username and try again');
        $this->load->model('membership_model');
        if($this->membership_model->check_exists_username($username))
        {
            
            return FALSE;
        }
        else
        {
            return TRUE;
        }
    }
    
}

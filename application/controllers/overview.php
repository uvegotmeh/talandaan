<?php
class Overview extends CI_Controller{
    
    function __construct() 
    {
        parent::__construct();
        $this->is_logged_in();
        $this->load->model('membership_model');
        
        
    }
    function index()
    {
    
      $this->load->view('view_overview');
 
    }
    //if not logged, prevent the user to access the page
    function is_logged_in()
    
    {
      $is_logged_in = $this->session->userdata('is_logged_in');
        
      if(!isset($is_logged_in) || $is_logged_in !== true)
      {
        echo 'you dont have permission to access the page. <a href="../index.php/login">Login</a>';
            die();
      }
    }
    //this error, if daterange is invalid
    function add_event()
    {
        $errormsg = "";
	$start_date = new DateTime($_POST["startdate"]);
	$end_date = new DateTime($_POST["enddate"]);
        
	if ($start_date > $end_date)
        {
		$errormsg = "invalid";
            echo json_encode($errormsg);
        }else{
        
            $this->membership_model->add_event();
        }
    
    }
     
    //this function get all the events in db and post it in the calendar
    function event()
    {
        echo json_encode($this->membership_model->get_events());
    }
    
    function services()
    {
        if(IS_AJAX)
        { 
            $this->load->view('ajax/services');
        }  
    }
    
    function about()
    {
        if(IS_AJAX)
        {  
            $this->load->view('ajax/about');
        }
    }
    //loads the other calendar
    function calendar()
    {   
    if(IS_AJAX)
        {
            $this->load->view('ajax/calendar');
        }
    }
    //update events at the calendar
    public function update ()
    {
        echo json_encode( $this->membership_model->update());
    }
    //deletes the event in the calendar
     public function delete (  )
    {
       $id = $this->uri->segment(3);
       if(!empty ($id))
       {
          $this->membership_model->delete($id);
       }
    }

    
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();
		 
		 $this->load->helper(array('form', 'url'));
         
         $this->load->library('form_validation');

         $this->load->model('crud_model');
	}



	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function insert(){
		if($this->input->is_ajax_request()){
			// echo "ajax required";
			 $this->form_validation->set_rules('name', 'Name', 'required');
			  $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

			   if ($this->form_validation->run() == FALSE)
                {
                        $data = array('response' => 'error', 'message' => validation_errors());
                }
                else
                {
                	//start code data goto model
                	$ajax_data = $this->input->post();
                	if($this->crud_model->insert_entry($ajax_data)){
                		$data = array('response' => 'success', 'message' => 'Records Added Successfully');
                	}else
                	{
                		$data = array('response' => 'error', 'message' => 'failed');
                	}
                	//end code
                        // $data = array('response' => 'success', 'name' => $this->input->post('name'),'email'=> $this->input->post('email'));
                }
                echo json_encode($data);
		}else
		{
			echo "No direct script access allowed";
		}
	}


	public function fetch(){
		if($this->input->is_ajax_request()){
			if($posts = $this->crud_model->get_entries()){
				$data  = array('response' => 'success','posts' => $posts);
			}else
			{
				$data  = array('response' => 'error','message' => 'Failed to fetch data');
			}
			echo json_encode($data);
		}else
		{
			echo "No direct script access allowed";
		}
	}


	public function delete()
	{
		if($this->input->is_ajax_request()){
			$del_id = $this->input->post('del_id');
			// $data = array('del_id' => $del_id);
			if($this->crud_model->delete_entry($del_id)){
				$data = array('response' => 'success');
			}else{
				$data = array('response' => 'error');
			}
			echo json_encode($data);
		}else{
			echo "No direct script access allowed";
		}
	}
}

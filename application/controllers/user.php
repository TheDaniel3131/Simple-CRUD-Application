<?php
class user extends CI_controller{

	function index(){
		$this->load->model('user_model'); 
		$users = $this->user_model->all();
		$data = array();
		$data['users'] = $users;
		$this->load->view('list', $data);
	}

	function create(){
		$this->load->model('user_model');
		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('age','Age','required');
		$this->form_validation->set_rules('email','Email','required|valid_email'); //required|valid_email cannot be spaced.
		$this->form_validation->set_rules('address','Address','required');
		$this->form_validation->set_rules('phone','Phone','required');		

		if($this->form_validation->run() == false){
			$this->load->view('create');

		} else{
			
			//Save Record To Users Table.
			$formArray = array();

			$formArray['name'] = $this->input->post('name');
			$formArray['age'] = $this->input->post('age');
			$formArray['email'] = $this->input->post('email');
			$formArray['phone'] = $this->input->post('phone');
			$formArray['address'] = $this->input->post('address');
			$formArray['registered_date'] = date('Y-m-d');

			$this->user_model->create($formArray);
			$this->session->set_flashdata('success', 'Your Data Has Added Successfully!');
			redirect(base_url().'index.php/user/index');

		}
		
	} 

	function edit($userID){
		$this->load->model('user_model');
		$user = $this->user_model->getUser($userID);
		$data = array();
		$data['user'] = $user;

		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('age','Age','required');
		$this->form_validation->set_rules('email','Email','required|valid_email'); //required|valid_email cannot be spaced.
		$this->form_validation->set_rules('address','Address','required');
		$this->form_validation->set_rules('phone','Phone','required');		


		if($this->form_validation->run() == false){
			$this->load->view('edit', $data);

		} else{

			//Update Record
			$formArray = array();

			$formArray['name'] = $this->input->post('name');
			$formArray['age'] = $this->input->post('age');
			$formArray['email'] = $this->input->post('email');
			$formArray['phone'] = $this->input->post('phone');
			$formArray['address'] = $this->input->post('address');

			$this->user_model->updateUser($userID, $formArray);
			$this->session->set_flashdata('success', 'Your Data Has Updated Successfully!');
			redirect(base_url().'index.php/user/index');
		}

		
	}	


	function delete($userID){
		$this->load->model('user_model');
		$user = $this->user_model->getUser($userID);

		if(empty($user)){
			$this->session->set_flashdata('failure', 'Your Data Were Not Found In The Database!');
			redirect(base_url().'index.php/user/index');
		}

		$this->user_model->deleteUser($userID);
		$this->session->set_flashdata('success', 'Your Data Has Been Deleted Successfully!');
		redirect(base_url().'index.php/user/index');

	}



}
?>
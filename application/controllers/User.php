<?php

class User extends CI_Controller{
    public function register(){
        $this->load->view('create');
    }
    public function index(){
        $this->load->model('user_model');
        $users=$this->user_model->all();
        $data=array();
        $data['users']=$users;
        $this->load->view('list',$data);


    }
    public function edit($userid){
        $this->load->model('user_model');
        $user=$this->user_model->getuser($userid);
        $data=array();
        $data['user']=$user;
        $this->form_validation->set_rules('name', 'Name','required' );
        $this->form_validation->set_rules('due_date', 'due_date','required' );
        if($this->form_validation->run()){
          $formArray = array();
          $formArray['id']=$this->input->post('id');
          $formArray['name']=$this->input->post('name');
          $formArray['task']=$this->input->post('task');
          $formArray['due_date']=$this->input->post('due_date');
          $formArray['task_description']=$this->input->post('task_description');
          $this->user_model->updateuser($userid,$formArray);
          
         
          $this->session->set_flashdata('success','Record updated successfully');
          redirect(base_url().'user/index/');
        }
        else{
            $this->load->view('edit',$data);
        }
    }
    public function create(){
        $this->load->model('user_model');

        $this->form_validation->set_rules('name', 'Name','required' );
        $this->form_validation->set_rules('id', 'Employ Id','required' );

       if($this->form_validation->run()){
            $formArray=array();
            $formArray['id']=$this->input->post('id');
            $formArray['name']=$this->input->post('name');
            $formArray['task']=$this->input->post('task');
            $formArray['due_date']=$this->input->post('due_date');
            $formArray['created_at']=date('Y-m-d');
            $formArray['task_description']=$this->input->post('task_description');
            $this->user_model->create($formArray);

            
            $this->session->set_flashdata('success','Record saved successfully');
            
            redirect(base_url().'user/index/');
            
            
      }
      else{
            $this->register();
      }
        
       
    }

    public function delete($userid){
        $this->load->model('user_model');
        $user=$this->user_model->getuser($userid);
        if(empty($user)){
            $this->session->set_flashdata('failure','Record not exists.');
            
            redirect(base_url().'user/index/');
            
        }
        else{
            $this->user_model->deleteuser($userid);
            $this->session->set_flashdata('success','Record deleted successfully.');
            
            redirect(base_url().'user/index/');
            
        }
    }
    public function login(){
       
        
        $this->load->view('login');
   
}
    public function dashboard(){
      $this->load->view('dashboard');
    }
    public function description($id){
        $this->load->model('user_model');
        $data['users']=$this->user_model->getuser($id); 
        $this->load->view('task',$data);
    }
}

?>
<?php
Class Task extends CI_Controller{
 function __construct()
 {
  parent::__construct();
  $this->load->model('Model_Task');

}
public function index(){

  //view all task from db
  $task = $this->Model_Task->GetAll();

  $data = array(
    'task' => $task 
  );

//load task view
  $this->load->view('Task/view_todo_list',$data);
  
}

//create new todo list
public function create(){


  // Check is form submitted or not
  if ($_POST) {

      // Set validaiton rules
    $this->form_validation->set_rules('task', 'Task', 'required'); 
    $this->form_validation->set_rules('status', 'status', 'required');


    $valid = $this->form_validation->run();

    if ($valid == true) {
        // Save to database

        // Get post data and assign to data array
      $post_data = array(
       'task' => $this->input->post('task',TRUE),
       'status' => $this->input->post('status',TRUE),



     );
     //Save task in db
      $new_id = $this->Model_Task->Insert($post_data); 

        // set flash message
      $this->session->set_flashdata('success', "Collection Created Successfully! New collection ID: ". $new_id); 

        // redirect to all todo list page
      redirect('Task');


    }else{
        // show error message

      $this->form_validation->set_error_delimiters("<span class='error-message'>", "</span>");   

    }

  }

  $this->load->view("Task/create");

}

///delete task in todo list
public function delete($id){
  $exec = $this->Model_Task->Delete($id);
  if ($exec) {

    $this->session->set_flashdata('success','You deleted task');
    redirect(base_url('index.php/Task'));
  }

}

public function clear(){

  $clear_todo_list = $this->Model_Task->clear();

  redirect(base_url('index.php/Task'));

}





}		  
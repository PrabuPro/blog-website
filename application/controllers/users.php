<?php 

class Users extends CI_Controller{

    public function login() {
        // echo $_POST['username'];

        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('confrim_password', 'Confirm Password', 'trim|required|min_length[3]|matches[password]');

        if($this->form_validation->run() == FALSE) {
            $data = array(
                'errors' => validation_errors()
            );

            $this->session->set_flashdata($data);
            redirect('home');

        } else {

            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $this->user_model->login_user($username, $password); 
        }

        // echo $this->input->post('username');
    }


}




?>
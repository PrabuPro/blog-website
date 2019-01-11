<?php

class Texts extends CI_Controller{


    public function show(){
        // $this->load->model('test_model');
        $data['results'] = $this->test_model->get_users();

        $this->load->view('test_view',$data);

        // foreach ($result as $objects){
        //     echo $objects->id. "<br>";
        // }

    }

    // public function index(){
    //     echo "Hello World";
    // }

}

?>
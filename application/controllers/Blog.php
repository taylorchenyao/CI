<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Blog extends CI_Controller {

    public function process_index()
    {
        
        $data['title'] = "My Real Title";
        $data['heading'] = "My Real Heading";

        //$this->load->view('blogview', $data);
        $this->load->helper('array');
        $arr2 = random_element($data);
        print_r($arr2);exit;
        $string = $this->load->view('blogview', $data, TRUE);
        //echo $string;
    }
    
    public function comments()
    {
        echo 'Look at this!';
    }
    
    public function _remap($method, $params = array())
    {
        $method = 'process_'.$method;
        if (method_exists($this, $method))
        {
            return call_user_func_array(array($this, $method), $params);
        }
        show_404();
    }
    
    private function process_check()
    {
        echo "hi,Look at this!";
    }
    
    public function _output($output)
    {
        echo $output;
    }
}
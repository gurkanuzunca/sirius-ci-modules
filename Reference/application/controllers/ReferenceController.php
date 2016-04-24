<?php


class ReferenceController  extends CI_Controller
{

    public $module = 'reference';



    public function index()
    {
        $this->load->model('reference');

        $references = $this->reference->all();

        $this->load->view('master', array(
            'view' => 'reference/index',
            'references' => $references

        ));
    }



} 
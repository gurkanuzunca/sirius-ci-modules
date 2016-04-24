<?php


class FaqController  extends CI_Controller
{
    public $module = 'faq';

    public function index()
    {
        $this->load->model('faq');


        $this->load->view('master', array(
            'view' => 'faq/index',
            'faqs' => $this->faq->all()
        ));


    }



} 
<?php

use Sirius\Admin\Manager;

class FaqAdminController extends Manager
{
    public $moduleTitle = 'Sıkça Sorulan Sorular';
    public $module = 'faq';
    public $table = 'faqs';
    public $model = 'faq';
    public $type = 'public';
    public $menuPattern = array(
        'moduleLink' => true,
    );

    // Arama yapılacak kolonlar.
    public $search = array('question');


    // Filtreleme yapılacak querystring/kolonlar.
    // public $filter = array('type');

    public $actions = array(
        'records' => 'list',
        'insert' => 'insert',
        'update' => 'update',
        'delete' => 'delete',
    );


    protected function insertRequest()
    {
        $this->load->vars('public', array('js' => array(
            '../public/admin/plugin/ckeditor/ckeditor.js',
            '../public/admin/plugin/ckfinder/ckfinder.js'
        )));
    }

    protected function insertValidateRules()
    {
        $this->form_validation->set_rules('question', 'Lütfen Soru yazınız.', 'required');
        $this->form_validation->set_rules('answer', 'Lütfen Cevap yazınız.', 'required');
    }



    protected function updateRequest($record)
    {
        $this->load->vars('public', array('js' => array(
            '../public/admin/plugin/ckeditor/ckeditor.js',
            '../public/admin/plugin/ckfinder/ckfinder.js'
        )));
    }

    protected function updateValidateRules()
    {
        $this->form_validation->set_rules('question', 'Lütfen Soru yazınız.', 'required');
        $this->form_validation->set_rules('answer', 'Lütfen Cevap yazınız.', 'required');
    }
} 
<?php

use Sirius\Admin\Manager;

class RedirectAdminController extends Manager
{
    public $moduleTitle = 'Yönlendirme';
    public $module = 'redirect';
    public $table = 'redirects';
    public $model = 'redirect';


    // Arama yapılacak kolonlar.
    public $search = array('link');



    // Filtreleme yapılacak querystring/kolonlar.
    // public $filter = array('type');

    public $actions = array(
        'records' => 'list',
        'insert' => 'insert',
        'update' => 'update',
        'delete' => 'delete',
    );


    protected function insertValidateRules()
    {
        $this->form_validation->set_rules('link', 'Lütfen Bağlantıyı yazınız.', 'required');
        $this->form_validation->set_rules('target', 'Lütfen Hedef başlantıyı yazınız.', 'required');
    }




    protected function updateValidateRules()
    {
        $this->form_validation->set_rules('link', 'Lütfen Bağlantıyı yazınız.', 'required');
        $this->form_validation->set_rules('target', 'Lütfen Hedef başlantıyı yazınız.', 'required');
    }


} 
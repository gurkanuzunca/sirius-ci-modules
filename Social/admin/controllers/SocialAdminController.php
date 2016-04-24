<?php

use Sirius\Admin\Manager;

class SocialAdminController extends Manager
{
    public $moduleTitle = 'Sosyal Ağlar';
    public $module = 'social';
    public $table = 'socials';
    public $model = 'social';


    // Arama yapılacak kolonlar.
    public $search = array('title');


    // Filtreleme yapılacak querystring/kolonlar.
    // public $filter = array('type');

    public $actions = array(
        'records' => 'list',
        'order' => 'list',
        'insert' => 'insert',
        'update' => 'update',
        'delete' => 'delete',
    );


    protected function insertValidateRules()
    {
        $this->form_validation->set_rules('title', 'Lütfen Başlık yazınız.', 'required');
        $this->form_validation->set_rules('icon', 'Lütfen İkon seçiniz.', 'required');
        $this->form_validation->set_rules('link', 'Lütfen Bağlantı yazınız.', 'required');
    }

    protected function updateValidateRules()
    {
        $this->form_validation->set_rules('title', 'Lütfen Başlık yazınız.', 'required');
        $this->form_validation->set_rules('icon', 'Lütfen İkon seçiniz.', 'required');
        $this->form_validation->set_rules('link', 'Lütfen Bağlantı yazınız.', 'required');
    }


} 
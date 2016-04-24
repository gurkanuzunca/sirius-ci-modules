<?php

use Sirius\Admin\Manager;

class SpotAdminController extends Manager
{
    public $moduleTitle = 'Spotlar';
    public $module = 'spot';
    public $table = 'spots';
    public $model = 'spot';


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
        $this->form_validation->set_rules('link', 'Lütfen Bağlantı yazınız.', 'required');
        $this->form_validation->set_rules('summary', 'Lütfen Özet yazınız.', 'required');
    }

    protected function insertAfterValidate()
    {
        $this->utils
            ->uploadInput('imageFile')
            ->minSizes(225, 118)
            ->addProcessSize('normal', 255, 118, 'spot', 'thumbnail');


        if ($this->input->post('imageUrl')) {
            $this->modelData['image'] = $this->utils->imageDownload(true, $this->input->post('imageUrl'));
        } else {
            $this->modelData['image'] = $this->utils->imageUpload(true);
        }
    }



    protected function updateValidateRules()
    {
        $this->form_validation->set_rules('title', 'Lütfen Başlık yazınız.', 'required');
        $this->form_validation->set_rules('link', 'Lütfen Bağlantı yazınız.', 'required');
        $this->form_validation->set_rules('summary', 'Lütfen Özet yazınız.', 'required');
    }


    protected function updateAfterValidate($record)
    {
        $this->utils
            ->uploadInput('imageFile')
            ->minSizes(255, 118)
            ->addProcessSize('normal', 255, 118, 'spot', 'thumbnail');


        if ($this->input->post('imageUrl')) {
            $this->modelData['image'] = $this->utils->imageDownload(false, $this->input->post('imageUrl'), $record->image);
        } else {
            $this->modelData['image'] = $this->utils->imageUpload(false, $record->image);
        }
    }

} 
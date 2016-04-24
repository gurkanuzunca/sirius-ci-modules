<?php

use Sirius\Admin\Manager;

class ReferenceAdminController extends Manager
{
    public $moduleTitle = 'Referanslar';
    public $module = 'reference';
    public $table = 'references';
    public $model = 'reference';
    public $type = 'public';
    public $menuPattern = array(
        'moduleLink' => true,
    );

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



    protected function insertAfterValidate()
    {
        $this->utils
            ->uploadInput('imageFile')
            ->minSizes(200, 50)
            ->addProcessSize('normal', 200, null, 'reference', 'fit-width');


        if ($this->input->post('imageUrl')) {
            $this->modelData['image'] = $this->utils->imageDownload(true, $this->input->post('imageUrl'));
        } else {
            $this->modelData['image'] = $this->utils->imageUpload(true);
        }
    }

    protected function updateAfterValidate($record)
    {
        $this->utils
            ->uploadInput('imageFile')
            ->minSizes(200, 50)
            ->addProcessSize('normal', 200, null, 'reference', 'fit-width');


        if ($this->input->post('imageUrl')) {
            $this->modelData['image'] = $this->utils->imageDownload(false, $this->input->post('imageUrl'), $record->image);
        } else {
            $this->modelData['image'] = $this->utils->imageUpload(false, $record->image);
        }
    }


} 
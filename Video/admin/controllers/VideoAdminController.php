<?php

use Sirius\Admin\Manager;

class VideoAdminController extends Manager
{
    public $moduleTitle = 'Videolar';
    public $module = 'video';
    public $table = 'videos';
    public $model = 'video';
    public $type = 'public';
    public $menuPattern = array(
        'title' => 'title',
        'hint' => 'title',
        'link' => array('slug', 'id'),
        'moduleLink' => true,
        'language' => true
    );

    // Arama yapılacak kolonlar.
    public $search = array('title');


    // Filtreleme yapılacak querystring/kolonlar.
    // public $filter = array('type');

    public $actions = array(
        'records' => 'list',
        'videoInfo' => 'list',
        'insert' => 'insert',
        'update' => 'update',
        'delete' => 'delete',
    );


    protected function insertRequest()
    {
        $this->load->vars('public', array('js' => array(
            '../public/admin/js/module/video.js'
        )));
    }

    protected function insertValidateRules()
    {
        $this->form_validation->set_rules('title', 'Lütfen Başlık yazınız.', 'required');
        $this->form_validation->set_rules('videoId', 'Video bilgisi hatalı.', 'required');

        if ($this->input->post('autoSlug') !== 'true') {
            $this->form_validation->set_rules('slug', 'Lütfen slug yazınız.', 'required');
        }
    }

    protected function insertAfterValidate()
    {
        $this->utils
            ->uploadInput('imageFile')
            ->minSizes(480, 360)
            ->addProcessSize('normal', 480, 360, 'video', 'thumbnail');


        if ($this->input->post('imageUrl')) {
            $this->modelData['image'] = $this->utils->imageDownload(true, $this->input->post('imageUrl'));
        } else {
            $this->modelData['image'] = $this->utils->imageUpload(true);
        }
    }


    protected function updateRequest()
    {
        $this->load->vars('public', array('js' => array(
            '../public/admin/js/module/video.js'
        )));
    }


    protected function updateValidateRules()
    {
        $this->form_validation->set_rules('title', 'Lütfen Başlık yazınız.', 'required');

        if ($this->input->post('autoSlug') !== 'true') {
            $this->form_validation->set_rules('slug', 'Lütfen slug yazınız.', 'required');
        }
    }

    protected function updateAfterValidate($record)
    {
        $this->utils
            ->uploadInput('imageFile')
            ->minSizes(480, 360)
            ->addProcessSize('normal', 480, 360, 'video', 'thumbnail');


        if ($this->input->post('imageUrl')) {
            $this->modelData['image'] = $this->utils->imageDownload(false, $this->input->post('imageUrl'), $record->image);
        } else {
            $this->modelData['image'] = $this->utils->imageUpload(false, $record->image);
        }
    }



    public function videoInfo()
    {
        $video = $this->input->post('video');
        $match = array();
        $videoId = false;

        if (preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $video, $match)) {
            $videoId = $match[1];
        }

        if ($videoId){
            $json = new stdClass();
            $jsonData = json_decode(file_get_contents("https://www.googleapis.com/youtube/v3/videos?id=$videoId&key=AIzaSyDcg0LWRi1_CXgL_eLe4alpCfWudgnk-4E&part=snippet"));

            $json->id = $videoId;
            $json->title = $jsonData->items[0]->snippet->title;
            $json->description = $jsonData->items[0]->snippet->description;
            $json->thumbnail = "http://i.ytimg.com/vi/$videoId/0.jpg";
            echo json_encode($json);
        } else {
            echo json_encode(array('error' => true));
        }
    }

} 
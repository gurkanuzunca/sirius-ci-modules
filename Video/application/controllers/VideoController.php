<?php


class VideoController  extends CI_Controller
{

    public $module = 'video';



    public function index()
    {
        $this->load->model('video');

        $videos = array();
        $pagination = null;
        $videoCount = $this->video->count();

        if ($videoCount > 0) {
            $config = array(
                'base_url' => clink(array('@video')),
                'total_rows' => $videoCount,
                'per_page' => 10
            );

            $this->load->library('pagination');
            $this->pagination->initialize($config);


            $videos = $this->video->all($this->pagination->per_page, $this->pagination->offset);
            $pagination = $this->pagination->create_links();
        }


        $this->load->view('master', array(
            'view' => 'video/index',
            'videos' => $videos,
            'pagination' => $pagination,
        ));
    }


} 
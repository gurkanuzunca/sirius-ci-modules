<?php


class RedirectController  extends CI_Controller
{

    public $module = 'redirect';



    public function index()
    {
        $this->load->model('redirect');

        $protocol = strpos(strtolower($_SERVER['SERVER_PROTOCOL']),'https') === FALSE ? 'http' : 'https';
        $currentUrl = $protocol . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

        $this->redirect->check($currentUrl);

    }




} 
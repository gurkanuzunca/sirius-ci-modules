<?php


class Redirect extends CI_Model
{


    public function check($link)
    {
        $result = $this->db
            ->from('redirects')
            ->where('link', $link)
            ->get()
            ->row();

        if ($result) {
            redirect($result->target, 'location', 301);
        } else {
            show_404();
        }
    }


}
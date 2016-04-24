<?php


class Spot extends CI_Model
{

    public function all()
    {
        return $this->db
            ->from('spots')
            ->where('language', $this->language)
            ->order_by('order', 'asc')
            ->order_by('id', 'asc')
            ->limit(4)
            ->get()
            ->result();
    }

}
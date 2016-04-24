<?php


class Faq extends  CI_Model
{

    public function all()
    {
        return $this->db
            ->from('faqs')
            ->where('language', $this->language)
            ->order_by('order', 'asc')
            ->order_by('id', 'asc')
            ->get()
            ->result();
    }

}
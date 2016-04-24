<?php


class Reference extends  CI_Model
{

    public function all($limit = null, $offset = null)
    {
        if ($limit != null) {
            $this->db->limit($limit, $offset);
        }

        return $this->db
            ->from('references')
            ->where('language', $this->language)
            ->order_by('order', 'asc')
            ->order_by('id', 'desc')
            ->get()
            ->result();
    }


}
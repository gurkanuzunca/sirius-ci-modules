<?php


class News extends  CI_Model
{

    public function all($limit = null, $offset = null)
    {
        if ($limit != null) {
            $this->db->limit($limit, $offset);
        }

        return $this->db
            ->from('news')
            ->where('language', $this->language)
            ->order_by('id', 'desc')
            ->get()
            ->result();
    }

    public function count()
    {
        return $this->db
            ->from('news')
            ->where('language', $this->language)
            ->count_all_results();
    }


    public function find($id)
    {
        return $this->db
            ->from('news')
            ->where('id', $id)
            ->where('language', $this->language)
            ->get()
            ->row();

    }


}
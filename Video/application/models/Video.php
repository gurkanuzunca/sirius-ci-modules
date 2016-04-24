<?php


class Video extends  CI_Model
{

    public function all($limit = null, $offset = null)
    {
        if ($limit != null) {
            $this->db->limit($limit, $offset);
        }

        return $this->db
            ->from('videos')
            ->where('language', $this->language)
            ->order_by('order', 'asc')
            ->order_by('id', 'desc')
            ->get()
            ->result();

    }

    public function count()
    {
        return $this->db
            ->from('videos')
            ->where('language', $this->language)
            ->count_all_results();
    }




}
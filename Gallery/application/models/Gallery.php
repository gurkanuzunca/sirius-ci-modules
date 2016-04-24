<?php


class Gallery extends  CI_Model
{

    public function all($limit = null, $offset = null)
    {
        if ($limit != null) {
            $this->db->limit($limit, $offset);
        }

        return $this->db
            ->from('galleries')
            ->where('language', $this->language)
            ->order_by('order', 'asc')
            ->order_by('id', 'desc')
            ->get()
            ->result();

    }

    public function count()
    {
        return $this->db
            ->from('galleries')
            ->where('language', $this->language)
            ->count_all_results();
    }



    public function find($id)
    {
        $result = $this->db
            ->from('galleries')
            ->where('id', $id)
            ->where('language', $this->language)
            ->get()
            ->row();


        if ($result) {
            $result->images = $this->images($result);
        }

        return $result;
    }


    public function one()
    {
        $result = $this->db
            ->from('galleries')
            ->where('language', $this->language)
            ->order_by('order', 'asc')
            ->order_by('id', 'desc')
            ->limit(1)
            ->get()
            ->row();


        if ($result) {
            $result->images = $this->images($result);
        }

        return $result;
    }


    public function images($gallery)
    {
        return $this->db
            ->from('gallery_images')
            ->where('galleryId', $gallery->id)
            ->order_by('order', 'asc')
            ->order_by('id', 'desc')
            ->get()
            ->result();
    }


    public function allImages($limit = null, $offset = null)
    {
        if ($limit != null) {
            $this->db->limit($limit, $offset);
        }

        $result = $this->db
            ->from('gallery_images')
            ->where('language', $this->language)
            ->order_by('id', 'desc')
            ->get()
            ->result();

        return $result;
    }


}
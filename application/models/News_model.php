<?php

/**
 * Email 2284876299@qq.com
 * Author: Xiaojm
 * Date: 2017/4/8
 * Time: 9:30
 * Desc: 类的简单描述
 */
class News_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function get_news($slug = FALSE)
    {
        if ($slug === FALSE)
        {
            $query = $this->db->get('news');
            return $query->result_array();
        }
        $query = $this->db->get_where('news', array('slug' => $slug));
        return $query->row_array();
    }

}
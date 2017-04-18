<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/4/7
 * Time: 16:50
 */

defined('BASEPATH') or exit('No direct script access allowed');

class Test extends CI_Controller
{
    protected $id;
    protected $name;

    public function __construct()
    {
        parent::__construct();
        $this->load->model('news_model');
        $this->load->helper('common');
    }

    public function index()
    {
        echo str_limit('testtt');
        exit;
        $data['news'] = $this->news_model->get_news();
        $this->load->view('test', $data);
    }

    /**
     * @param $id
     */
    public function show($id = 0)
    {
        $id = (int)$id;
        if ($id <1) {
            show_error("非法操作", 400);
        }
        echo $id;
    }
}

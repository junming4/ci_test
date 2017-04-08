<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/4/7
 * Time: 16:50
 */

defined('BASEPATH') OR exit('No direct script access allowed');

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


}
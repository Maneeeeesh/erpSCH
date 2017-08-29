<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('my_model', 'mm');
    }

    public function dashboard($active = 1, $subno = 1, $submenu = 'index') {
        $this->check_login();

        // fetching page according to active status
        $data = $this->get_page($subno);
        $data['inner_page'] = $submenu;
        $data['active'] = $active;
        // ----------------------------------------
        $data['menu'] = $this->mm->getmenu($this->session->userdata('_status_'), 1);
        $data['sub_menu'] = $this->mm->getsubmenu();

        $this->load->view('templates/header');
        $this->load->view('templates/menu', $data);
        $this->load->view('dashboard', $data);
        $this->load->view('templates/footer');
    }

    function get_page($subno) {
        switch ($subno) {
            case 1:
                $data['page_'] = 'dashboard';
                $data['title_'] = 'Dashboard';
                break;
            case 2:
                $data['page_'] = 'master';
                $data['title_'] = 'Master / Sessions';
                break;
            case 3:
                $data['page_'] = 'reg_adm';
                $data['title_'] = 'Registration';
                $data['Personal'] = ' active';
                $data['Parents'] = '';
                $data['Address'] = '';
                break;
            case 4:
                $data['page_'] = 'master';
                $data['title_'] = 'Master / Classes';
                break;
            case 5:
                $data['page_'] = 'master';
                $data['title_'] = 'Master / Subject';
                break;
            case 6:
                $data['page_'] = 'master';
                $data['title_'] = 'Master / grading';
                break;
            case 7:
                $data['page_'] = 'master';
                $data['title_'] = 'Master / Teachers';
                break;
            case 8:
                $data['page_'] = 'master';
                $data['title_'] = 'Master / Fee';
                break;
            case 9:
                $data['page_'] = 'master';
                $data['title_'] = 'Master / General';
                break;
            default:
                $data['page_'] = 'erorrs';
        }
        return $data;
    }
    function check_login() {
        if (!$this->session->userdata('_user___')) {
            redirect('login/logout');
        }
    }

}
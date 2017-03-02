<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Description of home
 */
class Home extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
		$data = array();
		
		$data['home'] = 'This is a Home page. Using Template Library is easy to create content';
        
		// page title
		$this->template->write('title', 'Welcome to Codeigniter Template Library');
        
		$this->template->write_view('content', 'home', $data);
        $this->template->render();
    }

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */
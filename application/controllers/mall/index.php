<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends CI_Controller {
	function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$data['fe_file_path'] = 'mall/index';
		$this->load->view('template/template_mall',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
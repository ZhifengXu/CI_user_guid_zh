<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_guide extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_guide_model');
	}
	public function index()
	{
		$this->load->helper('url');
		$uri=$this->uri->uri_string();
		$data=$this->user_guide_model->get_data($uri,'en');
		if($data===NULL)
		{
			show_404();
		}
		else
		{
			$this->load->view('template/user_guide',$data);
		}
	}
	
	
}

/* End of file user_guide.php */
/* Location: ./application/controllers/user_guide.php */

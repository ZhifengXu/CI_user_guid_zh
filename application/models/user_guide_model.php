<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_guide_model extends CI_Model{
	
	private $uri_ids=array('' => 'index','toc' => 'toc','/general/requirements','/license','/changelog','/general/credits');
	private $langs=array('zh','en');
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('array');
		$this->load->database();
	}
	public function get_data($uri=NULL,$lang='en')
	{
		$uri_id=element($uri,$this->uri_ids,NULL);
		if($uri_id===NULL OR ! in_array($lang,$this->langs,TRUE))
		{
			return;
		}
		else
		{
			$this->db->select('title,breadcrumb,content')->from('exp_altair_codeigniter_user_guide')->where(array('uri_id'=>$uri_id,'lang'=>$lang));
			$query=$this->db->get();
			if($query->num_rows() > 0)
			{
				$data=$query->row_array();
			}
			else
			{
				return;
			}
		}
		return $data;
	}
	
}

/* End of file user_guide.php */
/* Location: ./application/controllers/user_guide.php */

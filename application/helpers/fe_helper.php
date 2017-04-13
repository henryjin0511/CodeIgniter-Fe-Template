<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
	* 前端SEO CSS JS类
*/
class front_end
{
	private $feConfig;
	function __construct(){
		$this->CI = & get_instance();
		$staticUrl = $this->CI->config->item('static_url');
		$this->feConfig = array(
			//全站主页
			'mall/index'=>array(
				'seo'=>array(
					'title'=>'测试title',
					'description'=>'测试description',
					'keywords'=>'测试keywords'
				),
                'css'=>array(
	                'https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min'    //单纯测试用
                ),
                'js'=>array(
	                'https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min'    //单纯测试用
                )
            )
		);
	}
	public function get_seo($page_name = ''){
		$feConfig = $this->feConfig;
		if(!$page_name) return "";
		$seo = (isset($feConfig[$page_name]['seo']) && !empty($feConfig[$page_name]['seo']))?$feConfig[$page_name]['seo']:array();
		$seo_title = (isset($seo['title']) && !empty($seo['title']))?$seo['title']:'默认title';
		$seo_description = (isset($seo['description']) && !empty($seo['description']))?$seo['description']:'默认description';
		$seo_keywords = (isset($seo['keywords']) && !empty($seo['keywords']))?$seo['keywords']:'默认keywords';
		$seo_string = '<title>'.$seo_title.'</title><meta name="description" content="'.$seo_description.'" /><meta name="keywords" content="'.$seo_keywords.'" />';
		return $seo_string;
	}
	public function get_css($page_name = ''){
		$feConfig = $this->feConfig;
		if(!$page_name) return "";
		$css_string = "";
		if(isset($feConfig[$page_name]['css']) && !empty($feConfig[$page_name]['css'])){
			foreach ($feConfig[$page_name]['css'] as $k => $v){
				$css_string .= (($k==0)?"":"\r\n").'<link rel="stylesheet" href="'.$v.'.css" />';	
			}
		}
		return $css_string;
	}
	public function get_js($page_name = ''){
		$feConfig = $this->feConfig;
		if(!$page_name) return "";
		$js_string = "";
		if(isset($feConfig[$page_name]['js']) && !empty($feConfig[$page_name]['js'])){
			foreach ($feConfig[$page_name]['js'] as $k => $v){
				$js_string .= (($k==0)?"":"\r\n").'<script type="text/javascript" src="'.$v.'.js"></script>';
			}
		}
		return $js_string;
	}
}
/* End of file ZK_url_helper.php */
/* Location: ./application/helper/ZK_url_helper.php */
?>
<?php
include_once(APPPATH.'controllers/Frontend_controller.php');
class Site extends Frontend_controller{

public function index()
	{
		$data['header_title_setup'] = $this->header_setup_model->get_header_title();
		$data['slider_setup'] = $this->slider_setup_model->get_slider_image_name();
		$data['header_left_menu']=$this->header_setup_model->get_header_left_menu();
		$data['menu_setup']=$this->menu_setup_model->get_page_content();
		$this->display('site/home',$data);		
	}

public function page(){
	
		$this->display('site/page',$data);		


}
public function gallery(){
	$this->display('site/gallery',$data);
}




}
?>
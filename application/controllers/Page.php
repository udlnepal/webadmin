<?php
include_once(APPPATH.'controllers/Frontend_controller.php');
class page extends Frontend_controller{

    public function index($page='welcome'){

        $data['title']=ucfirst($page);

        if(!file_exists(APPPATH.'views/page/'.$page.'.php')){
            // echo "here";
            $page='index';
        }

        $this->display('page/'.$page,$data);

    }

    public function testurl(){
    //echo "iamhere"; exit;
    $this->menu_setup_model->get_page_content();
}
    
}
?>
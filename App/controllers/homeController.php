<?php
class HomeController extends Controller {
	public function home($name =''){
        $this->view('template/header');
		$this->view('home/home',['name'=>$name]);
        $this->view('template/footer');
	}


}
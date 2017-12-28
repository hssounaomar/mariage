<?php
class VoyageController extends Controller {
	public function home($name =''){
        $voyage=$this->model('Voyage');
        $list=[];
        $list=$voyage->getAll();
        $this->view('template/header');
		$this->view('voyage/home',['list'=>$list]);
        $this->view('template/footer');
	}

	public function reserver($id=''){
	    $voyage=$this->model('Voyage');
	    $voy=null;
	    $voy=$voyage->findVoyageById($id);
        $this->view('template/header');
	    $this->view('voyage/reserver',['voyage'=>$voy]);
        $this->view('template/footer');
    }

}
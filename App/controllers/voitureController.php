<?php
/**
 * Created by PhpStorm.
 * User: Omar
 * Date: 31/12/2017
 * Time: 08:56
 */

class voitureController extends Controller
{
    public function home($name =''){
        $this->view('template/header');
        $this->view('voiture/home');
        $this->view('template/footer');
    }
}
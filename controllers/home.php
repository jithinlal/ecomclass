<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Home extends Controller{
    protected function Index(){
        $viewmodel = new HomeModel(); 
        $brandandcats = array("key1" => $viewmodel->getCategories(), "key2" => $viewmodel->getBrands());        
        $this->returnView($brandandcats, true);        
    }       
}
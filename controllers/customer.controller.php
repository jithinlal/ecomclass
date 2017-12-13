<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Customer extends Controller{
    protected function Index(){
        $customermodel = new HomeModel();
        $this->returnView($customermodel->Index(),false);
    }
}
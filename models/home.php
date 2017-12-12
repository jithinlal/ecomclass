<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

 class HomeModel extends Model{
    public function Index(){
        return;
    }

    public function getCategories(){
       $this->query('SELECT * FROM categories');
       $categories = $this->resultSet();
       return $categories;
    }

    public function getBrands(){
       $this->query('SELECT * FROM brands');
       $brands = $this->resultSet();
       return $brands;
    }
 }
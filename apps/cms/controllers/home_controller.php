<?php

class home{
    public function index( ){
        //Routs the Home Page
        tpReq('head');
            tpView('home','home');
        tpReq('foot');
    }
}
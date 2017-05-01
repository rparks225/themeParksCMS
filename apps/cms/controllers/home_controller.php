<?php

class home{

    public function index( $nav = '' ){

        tpReq('head');

        tpView('home','home');

        tpReq('foot');


    }
    

}
<?php	

class search{
    public function index( $nav = ''){
        //Routs the Search Bar Page
        tpReq('head');
            tpView('search','search');
        tpReq('foot');
    }
}
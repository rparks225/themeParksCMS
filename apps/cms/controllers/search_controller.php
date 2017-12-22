<?php	

class search{

    public function index( $nav = ''){

        tpReq('head');

            tpView('search','search');

        tpReq('foot');

    }

}
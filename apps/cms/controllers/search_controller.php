<?php	

class search{

    public function index( $nav = ''){

        tpReq('head');

        if($nav == ''){

            header('Location: '.ROOT.'404');

        }else{
            
            tpView('search','search');

        }

        tpReq('foot');

    }

}
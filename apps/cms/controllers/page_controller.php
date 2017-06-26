<?php	
		
class page{
	
            public function index( $nav = ''){

                 tpReq('head');

                        if($nav == ''){

                               //require_once 'libraries/themes/'.theme().'/html_blocks/404.php';
                               header('Location: '.ROOT.'404');

                         }else{
                             
                                tpView('pages','single');

                         }

                  tpReq('foot');

            }

}
<?php

class news{

            public function index(){

                        tpReq('head');


                            tpInc('404');


                        tpReq('foot');

            }

            public function Posts($nav = ''){


                        tpReq('head');

                               if($nav == ''){

                                    tpView('news','news');

                                }else{

                                    tpView('news','newsSingle');

                                }

                        tpReq('foot');

            }


}
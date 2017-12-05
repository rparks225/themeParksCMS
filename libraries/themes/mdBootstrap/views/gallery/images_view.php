<?php global $sName; ?>
{# $sort = false #}
{# $sessKey = md5($_SERVER['SERVER_ADDR'].' - '.$sName.'') #}

{-- if isset($_SESSION[$sessKey]) --}
    {# $sort = 'id="sortable"' #}
{-- endif --}

<!--Open Cont area-->

<div class="cont" id="int">   

    <div class="fancyCont">
        <div class="container">
            <div class="row">

                <div class="col-md-4 col-sm-4 hidden-xs">
                    <hr>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12">
                    <h1> 
                        {# $query = 'SELECT * FROM `gallery` WHERE `Gallery` LIKE \''.title(2).'\'' #}
                        {# $block = 'title' #}
                        {# $images2 = new model() #}
                        {# $images2->query($query,$block) #}
                    </h1>
                </div>

                <div class="col-md-4 col-sm-4 hidden-xs">
                    <hr>
                </div>

            </div>
        </div>    
    </div>

    <div class="fancyCont">

        <div class="container">
            <div class="row">

                <ul style="list-style:none;padding:0;">

                           <div {% echo $sort %}>

                               {# $query = 'SELECT * FROM `images` WHERE `Album` LIKE \''.title(2).'\' ORDER BY `images`.`Order` ASC ' #}
                               {# $block = 'galleryImage' #}
                               {# $images = new model() #}
                               {# $images->query($query,$block) #}

                            </div>

                </ul>
                
            </div>
            
                    <div class="clearfix">&nbsp;</div> 
                    <div class="clearfix">&nbsp;</div>
            
            <div class="row">
                
                <a class="col-md-2" href="javascript:history.go(-1)">&larr; Back</a>       
                
            </div>
            
        </div>

    </div>

    {# tpBlock('fancyIsh') #}

</div>  

<!--Close Cont area-->

<!--Open Cont area-->

 
<div class="cont" id="int">   

    <div class="fancyCont">
        <div class="container">
            <div class="row">

                <div class="col-md-4 col-sm-4 hidden-sm-down">
                    <hr>
                </div>

                <div class="col-md-4 col-sm-12 col-xs-12">
                    <h1><?php echo $heading ?></h1>
                </div>

                <div class="col-md-4 col-sm-4 hidden-sm-down">
                    <hr>
                </div>

            </div>
        </div>    
    </div>

    <div class="fancyCont">

        <div class="container">
            <div class="row">
                
                <?php 

                        if($edit == 'false'){

                            echo $html;

                        }else{

                            tpBlock('ee');

                        };

                ?>

            </div>
        </div>

    </div>

    <?php tpBlock('fancyIsh'); ?>

</div>  
 
<!--Close Cont area-->
    
<!--Open Cont area-->

<div class="cont" id="int">   

    <div class="fancyCont">
        <div class="container">
            <div class="row">

                <div class="col-md-4 col-sm-4 hidden-xs">
                    <hr>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12">
                    <h1>All - {% echo title(2) %}</h1>
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

                <?php 

                    $query = 'SELECT * FROM post';
                    $block = 'feature';
                    $heading = new model();
                    $heading->query($query,$block);
                
                ?>

            </div>
        </div>

    </div>

        {# tpBlock('fancyIsh') #}

</div>  

<!--Close Cont area-->
 
  
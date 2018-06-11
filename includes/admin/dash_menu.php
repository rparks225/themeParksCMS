<!-- Open Content -->
<?php tpAdmin('addMenu'); ?>
<div class="clearfix">&nbsp;</div>

<div class="card-panel">
    <div class="col s12 table-responsive">


        <table class="responsive-table highlight">

            <thead>

                <tr class="active" style="color:black;">
                    <th>Id</th>
                    <th>Number Links</th>
                    <th style="text-align:right;">Menu Name</th>
                    <th style="text-align:right;">Action</th>
                </tr>    

            </thead>

            <tbody>

                <?php 	 
                $block = "navTble";
                $query = "SELECT * FROM `Nav` ORDER BY `Id` ASC";

                //query's the db 
                $table = new admin_model();
                $table->query($query,$block);

                //deletes records
                $delete = new delete();
                $delete->del('Nav',false);
                ?>

            </tbody>

        </table>

    </div>

    <div class="clearfix"></div>

    <br>
    <br>    
</div>

<!-- Close Content area-->
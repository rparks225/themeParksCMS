<?php 

$vars = array('id','sUrl','dbName','sCaptcha','cmsPath','eePath','emailHost','emailAuth','emailUser','emailPass','emailEnc','emailPort','emailFrom','emailName','emailAdd','emailReply','eReplyTitle');

foreach($vars as $var){
    global $$var;
}
?>
{# $site = "{$dbName}" #}

{# tpAdmin('addPage') #}

    <div class="card-panel">
        <div class="table-responsive">
            <table class="responsive-table highlight">
                <thead>
                    <tr class="active" style="color:black;">
                        <th>Page</th>
                        <th>Editable</th>
                        <th>Page Title</th>
                        <th>Meta Keywords</th>
                        <th>Meta Desciption</th>
                        <th>Action</th>
                    </tr>    
                </thead>
                <tbody>

                    {# $nav = title(2) #}

                    {-- if ($nav == 'pages') --}

                         {# $nav = 0 #}
                         {# $nums = '' #}
                         {# $limit = '' #}

                    {-- else if($nav == 1) --}

                         {# $nav = 0 #}
                         {# $limit = ",10" #}
                         {# $nums = 'LIMIT '.$nav #}

                    {-- else --}

                         {# $nav = --$nav #}
                         {# $limit = ",10" #}
                         {# $nav = $nav*10+(0) #}
                         {# $nums = 'LIMIT '.$nav #}
                    {-- endif --}


                     {# $location = 'page' #}
                     {# $block = "tableRow2" #}
                     {# $query = "SELECT * FROM `page` ORDER BY `page`.`Editable` ASC $nums $limit" #}
                     {# $method = 'edited' #}

                      <!-- //query's the db -->
                     {# $table = new admin_model() #}
                     {# $table->query($query,$block) #}

                     <!-- //deletes record -->
                     {# $delete = new delete() #}
                     {# $delete->del($location,false) #}

                </tbody>
            </table>

        </div>
    </div>

    <div class="clearfix"></div>

    <div class="col s2">&nbsp;</div>

            <div class="col s8" style="text-align:center;">
                <!--Start Pageinate-->
                     {# $table = 'page' #}
                     {# $limit = 10 #}
                     {# $currentPage = 'tp-Pages' #}
                     {# paginate($table,$limit,$currentPage) #}
                <!--Close Pageinate-->
            </div>

    <br>
    <br>
    <!-- Close Content area-->
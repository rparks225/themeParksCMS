<?php 
$linkSys = json_decode( $navTxt,true ); 

$location = 'Nav';
$method = 'Updated';
global $dbName;

//updates the record
if(isset($_POST[''.$method.''])){
    if(isset($_POST['id'])){
        $id = addslashes($_POST['id']);
        $navi = '{'.str_replace('_',' ', substr( json_encode( $_POST , true),10,-20 ) ).'}';
        $query = 'UPDATE `'.$dbName.'`.`'.$location.'` SET `Nav_Text` = \''.$navi.'\' WHERE `'.$location.'`.`Id` = \''.$id.'\'';
    }
};

$update = new update();
$update->uped($location,$query,$method);
?>
<style>
    .ui-state-highlight { background:grey;height: 8.5em; line-height: 3.2em; }
</style>

<h3 class="col s11">Edit Nav Menu - <?php echo $id; ?></h3>

<div class="col s1">
    <a title="Add new link" class="btn-floating green added newShow" href="#!"><i class="material-icons white-text">add</i></a>
</div>

<div class ="card-panel col s11 input-group hidey2" style="margin-left:10px;padding:15px;">
    <div class="col s5">
        <input type="text" id="nue" value="">
        <label for="nue">New Link - URL</label>
    </div>
    <div class="col s5">
        <select id="parent" class="browser-default">
            <option value="" selected>Select Type</option>
            <option value="Single">Single link Item</option>
            <option value="Parent">Parent</option>
        </select>
        <label for="parent">Single Link Item/Parent</label>
    </div>
    <div class="col s2">
        <input type="reset" class="center btn btn-primary addLink" value="Add Link">
    </div>
</div>

<div class="col s12">
    <hr>
</div>

<form method="post" enctype="application/json">
   <div class="input-field col s12">
       <input type="hidden" name="id" value="<?php echo $id; ?>">
       <ul id="sortable1" class="connected">
       
       <?php if( !empty($linkSys) ): ?>
       
       <?php foreach( $linkSys as $title => $link): ?>
       
           <?php if( $title == '#'.substr($title,1) && $title != '#!' && $title != '#'  ): ?>
           <li class="ui-state-default">
               <div class ="card-panel col s12" style="padding:15px;">
                  
                       <div class="col s7 input-group">
                           <label class="parent" id="<?php echo $title; ?>"><?php echo substr($title,1); ?> <i>( Parent )</i></label>
                       </div>
                       <div class="col s1 offset-s1">
                           <a class="btn-floating red trash" href="#!"><i class="material-icons white-text">delete</i></a>
                       </div>
                       <div class="col s1 show">
                           <a class="btn-floating blue-grey" href="#!"><i class="material-icons white-text">visibility_off</i></a>
                       </div>
                       <div class="col s1 added2" data-parent="<?php echo $title; ?>" >
                           <a class="btn-floating green" href="#!"><i class="material-icons white-text">add</i></a>
                       </div>
                       <div class="col s1">
                           <a style="cursor:move;" class="btn-floating blue move" href="#!"><i class="material-icons white-text">menu</i></a>
                       </div>
                       <div class="clearfix">&nbsp;</div>
                   <div class="hidey" >
                       <hr> <div class="clearfix">&nbsp;</div>
                       <ul id="sortable2" class="connected" style="min-height:6em;">
           <?php endif; ?>
             
           <?php if( is_array( $link ) ): ?>
           
               <?php foreach( $link as $title2 => $link2 ): ?>
                       <li class="ui ui-state-default">
                           <div class ="card-panel col s12 input-group" style="padding:15px;">
                              <div class="col s9">
                                  <input type="text" data-parent="<?php echo $title; ?>" name="" class="col s5 bind2" id="<?php echo $title2; ?>" value="<?php echo $title2; ?>">
                                  <input type="text" class="col offset-s1 s6" name="<?php echo $title; ?>[<?php echo $title2; ?>]" id="<?php echo $title2; ?>" value="<?php echo $link2; ?>">
                                  <div class="clearfix"></div>
                                  <label for="<?php echo $title2; ?>"><?php echo $title2; ?> - URL</label>
                              </div>

                               <div class="col s1 offset-s1">
                                   <a class="btn-floating red trash2" href="#!"><i class="material-icons white-text">delete</i></a>
                               </div>
                               <div class="col s1">
                                   <a style="cursor:move;" class="btn-floating blue move" href="#!"><i class="material-icons white-text">menu</i></a>
                               </div>
                           </div>
                           <div class="clearfix"></div>
                       </li>
               <?php endforeach; ?>
                      
                               </ul>
                       </div>
                   </div>
               <div class="clearfix"></div>
           </li>
           <?php else: ?>
           
           <li class="ui-state-default">
               <div class ="card-panel col s12 input-group" style="padding:15px;">
                 <div class="col s9">
                     <input type="text" name="" class="col s4 bind" id="<?php echo $title; ?>" value="<?php echo $title; ?>">
                
                      <input type="text" class="offset-s1 col s7" name="<?php echo $title; ?>" id="<?php echo $title; ?>" <?php if( empty($link) ){ echo 'placeholder="Home Page"'; }; ?> value="<?php echo $link; ?>">
                      <div class="clearfix"></div>
                      <label for="<?php echo $title; ?>">Link Title / URL</label>
                  </div>
                   
                   <div class="col s1 offset-s1">
                       <a class="btn-floating red trash" href="#!"><i class="material-icons white-text">delete</i></a>
                   </div>
                   <div class="col s1">
                       <a style="cursor:move;" class="btn-floating blue move" href="#!"><i class="material-icons white-text">menu</i></a>
                   </div>
                 </div>
                 <div class="clearfix"></div>
               </li>
               
           <?php endif; ?>
       
       <?php endforeach; ?>
       
       <?php endif; ?>
       </ul>
   </div>
   
    <div class="col s12">
        <input type="hidden" name="Updated" value="Submit">
        <input class="btn btn-primary subby" type="button" value="submit">
    </div>
</form>
<div class="clearfix"></div>
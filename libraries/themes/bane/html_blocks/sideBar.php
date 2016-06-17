
<?php
$tits = title();

function secNav($linked){
     
 echo '
<!--Side Links-->     
<div class="col-md-3 sideNav mob">

        <ul>';
     
     foreach($linked as $link => $title){
         
         if(ROOT.$link == links()){
             $active = 'active';
         }else{
             $active = 'inactive';
         }
         
         echo '<li class="'.$active.'"><a href="'.ROOT.$link.'">'.$title.'</a></li>';
         
     }
     
     echo '</ul>

                    <button class="btn btn-new2" data-toggle="modal" data-target="#faciliForm">
                        <span class="pull-left img"><img width="38" height="33" src="images/brochure.png"></span> 
                        <span class="pull-left">Call Today - Get a Brochure</span>
                    </button>

</div>
<!--Close Side Links-->  
';

echo '
<!--Open Side form-->
            <div class="modal fade" id="faciliForm" tabindex="-1" role="dialog" aria-labelledby="faciliFormLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title fancy" id="Label">Brochure Request Form</h4>
                  </div>
                  <div class="modal-body">

                      <form method="Post" action="">

                          <div class="form-group">
                              <label for="Name">Name</label>
                              <input class="form-control" name="Name" id="Name" />
                          </div>

                          <div class="form-group">
                              <label for="Email">Email</label>
                              <input class="form-control" name="Email" id="Email" />
                          </div>

                          <div class="form-group">
                              <label for="Address">Address</label>
                              <input class="form-control" name="Address" id="Address" />
                          </div>

                          <div class="form-group">
                              <label for="Phone">Phone Number</label>
                              <input class="form-control" name="Phone" id="Phone" />
                          </div>';
    
    

                             if(title() == 'programs' || title() == 'leader' || title() == 'tour' || title() == 'contact' || title() == 'images'){
                                 
                                  echo '<div class="form-group">
                                          <label for="Facility">Facility</label>
                                          <input class="form-control" disabled name="Facility" id="Facility" value="'.title(2).'" />
                                      </div>';
                                 
                             }else{
                                 
                                  echo '
                                  <div class="form-group">
                                          <label for="Facility">Facility</label>
                                          <select class="form-control" name="Facility" id="Facility">
                                          <option>Select</option>
                                          ';
                                 
                                             $fac = array('Abbott-House','Devereux-House','Rosewood','Bay-Path','Colonial','Hancock-Park','Harbor-House','John-Scott-House','Mayflower-Place','The-Bostonian','Brighton-House','Craneville-Place','Springside','Sugar-Hill');
                                             
                                             foreach($fac as $vals){

                                                 echo '<option value="'.$vals.'">'.$vals.'</option>';
                                                 $i++;
                                             }
                                             
                                             
                                          echo '
                                          </select>
                                      </div>';

                             };
                         

                          echo '<label for="Message">Message</label>
                          <textarea rows="5" class="form-control" name="Message" id="Message"></textarea>

                      </form>

                  </div>
                  <div  style="text-align:center;" class="modal-footer">
                      <b>Thank You For Choosing BaneCare</b>
                  </div>
                </div>
              </div>
            </div>
<!--Close Side Form-->

';
};

?>    

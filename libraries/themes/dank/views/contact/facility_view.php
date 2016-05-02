
<?php

//facility contact

$map = array(

'Arlington'=>array(
'name'=>'Arlington',
'facility'=>'Arlington Center',
'location'=>'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d188668.87227226808!2d-71.39027264424297!3d42.36488077186497!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x5822632998e1ebca!2sCo-Op+Elder+Services!5e0!3m2!1sen!2sus!4v1448401002602',
),

'Burlington'=>array(
'name'=>'Burlington',
'facility'=>'Burlington Center',
'location'=>'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2941.6654329969756!2d-71.2241376838504!3d42.49866493432853!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e39fb400f0b4ff%3A0x7013761e19f52429!2sCooperative+Elder+Services!5e0!3m2!1sen!2sus!4v1448400827797'
),

'Concord'=>array(
'name'=>'Concord',
'facility'=>'Concord Center',
'location'=>'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2943.9358012502457!2d-71.37999768385116!3d42.45038203738425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0xf4c3071d67938ad9!2sCooperative+Elder+Services!5e0!3m2!1sen!2sus!4v1448400459262'
),

'Groton'=>array(
'name'=>'Groton',
'facility'=>'Groton Center',
'location'=>'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2936.8102835387726!2d-71.62953308384874!3d42.60176852779411!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e3c1d68f82c0f1%3A0x13dbaf3787b4a708!2sCooperative+Elder+Services+Inc!5e0!3m2!1sen!2sus!4v1448400673567'
),

'Milton'=>array(
'name'=>'Milton',
'facility'=>'Milton Center',
'location'=>'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2954.2296577265356!2d-71.12442728385464!3d42.23090635123937!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e37e403e569721%3A0xe7f352a1d927a7!2sCooperative+Elder+Services%2C+Inc!5e0!3m2!1sen!2sus!4v1448400528710'
)

);

if($map[''.title().'']['name'] == title()){
	
	$facility = $map[''.title().'']['facility'];
	
	}

?>
<!--Open Content-->
<div class="cont">

    <div class="container">
    
        <div class="row-fluid">
        
			<?php require_once 'libraries/themes/cesi/html_blocks/sideBar.php'; ?>
                
                <div class="col-md-8">
                <br><br>
                
                <h1>Contact/Map - <?php echo title(); ?></h1>
                
                  <div id="textSize"><strong>Text Size: <span id="smaller"> A</span> <span id="bigger">A</span></strong></div>
                <br/><br>
                
                <p>Please use this form for questions related to our Adult Day Health Centers or simply to say hi. All valid emails will be answered within 48 hours.</p>
                     
                     <br>
                     
                    <form method="post" action="" style="text-align:left;width:80%;">
                            
                            <div class="form-group">
                            <label>Facility</label>
                            <input name="facility" type="text" disabled class="form-control" value="<?php echo $facility; ?>" id="" />
                            </div>
                            
                            <div class="form-group">
                            <label>Name</label>
                            <input name="name" type="text" required class="form-control" id="" />
                            </div>
                            
                            <div class="form-group">
                            <label>Email</label>
                            <input name="email" type="email" required class="form-control" id="" />
                            </div>
                            
                            <div class="form-group">
                            <label>Address</label>
                            <input name="address" type="text" required class="form-control" id="" />
                            </div>
                            
                            <div class="form-group">
                            <label>Zip</label>
                            <input name="zip" pattern="[0-9]*" maxlength="5" required class="form-control" id="" />
                            </div>
                            
                            <div class="form-group">
                            <label>Comment</label>
                            <textarea name="comment" rows="10" class="form-control" id=""></textarea>
                            </div>
                            
                            <div class="clearfix"></div> 
                            
                            <input class="btn btn-new" type="submit" name="shortForm" value="Submit" />
                            
                    </form> 
                    
                    <br><br>
                    <div>
                    <iframe src="<?php echo $map[''.title().'']['location']; ?>" width="80%" height="300" frameborder="0" style="border:0" allowfullscreen>
                     </iframe>
                     </div>
                
                </div>
        
        </div>
    
    </div>

</div>
<!--Close Content-->

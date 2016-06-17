<?php

$leads = array(
    '0'=>array(
        'name'=>'Richard Bane',
        'title'=>'President, BaneCare Management, LLC',
        'img'=>'richard-bane.jpg',
        'email'=>'rich@gmail.com',
        'phone'=>'978.555.1585',
        'bio'=>'President Richard Bane and BaneCare continue to set the standard for premium skilled nursing care in Massachusetts.
<br><br>
A leading authority in the region’s long-term care field, Bane lectures across the country and acts as chair of The Aurum Network, the largest post-acute network of independent skilled care providers in New England. A recent past chair of the Massachusetts Senior Care Association, Richard is a key decision maker for the entire Massachusetts skilled care community, leading efforts in Accountable Care.',
    ),
    '1'=>array(
        'name'=>'Harrison Bane',
        'title'=>'Vice-President of Operations, BaneCare Management, LLC',
        'img'=>'harrison-bane.jpg',
        'email'=>'harri@gmail.com',
        'phone'=>'978.555.1319',
        'bio'=>'false'),
    '2'=>array(
        'name'=>'Haley Bane Foley',
        'title'=>'Director of Business Development, BaneCare Management, LLC',
        'img'=>'haley-bane.jpg',
        'email'=>'hayley@gmail.com',
        'phone'=>'978.555.1585',
        'bio'=>'false'),
    '3'=>array(
        'name'=>'Andrew Gillis',
        'title'=>'President, BaneCare Management, LLC',
        'img'=>'andrew-bane.jpg',
        'email'=>'aGillis@gmail.com',
        'phone'=>'978.555.1585',
        'bio'=>'false'),
);

$i = 0;

    foreach($leads as $lead=>$val){
        
        echo '
        <div id="'.$i.'" class="container" style="display:none;">
            <div class="row" style="padding:20px;">

                <div class="col-md-12">
                '; 
                   
                    if($val['img'] == 'false'){
                        
                        echo '<span style="font-size:250px;border:5px solid white;box-shadow:2px 2px 5px;margin-left:20px;" class="pull-right profileImg glyphicon glyphicon-user"></span>';
                        
                    }else{
                        
                        echo '<img style="width:250px;border:5px solid white;box-shadow:2px 2px 5px;margin-left:20px;" src="apps/_ee/files/'.$val['img'].'" class="pull-right profileImg"/>';
                        
                    };
        
                echo'
                

                    <p>
                    <h2 class="fancy">'.$val['name'].'<br /></h2>

                    <strong class="title">'.$val['title'].'</strong>
                    </p>

                        <p>
                        <strong>Email</strong>: 
                        <a target="_blank" href="mailto:'.$val['email'].'">'.$val['email'].'</a>
                        <br /><br>

                        <strong>Office</strong>: '.$val['phone'].'
                        </p>
                        
                        <br>

                        <p style="line-height:20px;">
                            ';
        
                            if($val['bio'] != 'false'){
                               echo $val['bio'];
                            }else{
                                echo '';
                            }
            
            
            echo '
                        </p>

                </div>

            </div>
        
        </div>
        
        ';
        ++$i;
    }

?>
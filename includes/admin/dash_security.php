<div class="col l3 m4 s12">
    <div class="card-panel" style="padding:24px 0;">
        <ul>
            <li>
                <a class="grey-text waves-effect waves-orange" 
                   style="padding:15px;width:100%;" 
                   href="<?php echo ROOT; ?>tp-Settings">Site Settings</a>
            </li>
            <li>
                <a class="grey-text waves-effect waves-orange" 
                   style="padding:15px;width:100%;" 
                   href="<?php echo ROOT; ?>tp-Security">Security Settings</a>
            </li>
            <li>
                <a class="grey-text waves-effect waves-orange" 
                   style="padding:15px;width:100%;" 
                   href="<?php echo ROOT; ?>tp-Users">User Settings</a>
            </li>
        </ul>
    </div>
</div>

<div class="col l9 m8 s12">
    <div class="card-panel">
        <form method="post" action="">

            <div class="input-field col s4">
                <input name="ips" id="ips" type="text" class="" value="" placeholder="1.1.1.1"  />
                <label for="ip">Add IP Address</label>
            </div>

            <div class="input-field col s2">
                <a id="ipUp" class="btn" href="#!">Add Ip</a>
            </div>

            <div class="input-field col s6">
                <label>Authorized Ip Addresses ( Example: allow from 127.0.0.1 )</label>
                <textarea id="sec" name="sec" type="text" class="materialize-textarea form-control"><?php echo file_get_contents('includes/admin/.htaccess'); ?></textarea>
                <br>
                <input onclick="alert('Ip Added Successfully')" type="submit" name="edited" class="btn btn-primary" value="Submit" />
            </div>

        </form>


        <?php
        if(!file_exists('includes/admin/.htaccess')){    
            $file = fopen('includes/admin/.htaccess','w');
            fwrite($file,
                   "order deny,allow
deny from all
allow from localhost" );
            fclose($file);
            header('Location: //'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'].'');    
        }else{    
            if(isset($_POST['sec'])){

                unlink('includes/admin/.htaccess');
                $file = fopen('includes/admin/.htaccess','w');
                fwrite($file, $_POST['sec']);
                fclose($file);
                header('Location: //'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'].'');
            }      
        }

        ?>
        <div class="clearfix"></div>
    </div>
</div>
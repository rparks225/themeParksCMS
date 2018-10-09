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
				<?php if( isset( $_SERVER['HTTP_CF_CONNECTING_IP'] ) || isset( $_SERVER['HTTP_X_FORWARDED_FOR'] ) ): ?>
					<div class="clearfix">&nbsp;</div>
					<p><b>Cloud Flare Ip:</b> <?php echo $_SERVER['HTTP_CF_CONNECTING_IP']; ?></p>
			    <?php endif; ?>
            </div>

            <div class="input-field col s2">
                <a id="ipUp" class="btn" href="#!">Add Ip</a>
            </div>

            <div class="input-field col s6">
                <label>Authorized Ip Addresses ( Example: >>127.0.0.1 )</label>
                <textarea id="sec" name="sec" type="text" class="materialize-textarea form-control"><?php echo str_replace('>>','
', file_get_contents('includes/admin/sec.txt') ); ?></textarea>
                <br>
                <input onclick="alert('Ip Added Successfully')" type="submit" name="edited" class="btn btn-primary" value="Submit" />
            </div>

        </form>


        <?php
		
		$base = 'order deny,allow
deny from all
allow from localhost';
		/* Creates Security File */
        if(file_exists('includes/admin/sec.txt')){      
            if(isset($_POST['sec'])){
                $replaced = str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '>>',$_POST['sec']);
                unlink('includes/admin/sec.txt');
                $file = fopen('includes/admin/sec.txt','w');
                fwrite($file, '>>'.$replaced);
                fclose($file);
                header('Location: //'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'].'');
            }
        }
		
		/* Creates htaccess Ip block file */
		if(!file_exists('includes/admin/.htaccess')){    
			if( !isset( $_SERVER['HTTP_CF_CONNECTING_IP'] ) || !isset( $_SERVER['HTTP_X_FORWARDED_FOR'] ) ){
				$file = fopen('includes/admin/.htaccess','w');
				fwrite($file, $base);
				fclose($file);	
			}
		}else{
			$file_one = file_get_contents('includes/admin/.htaccess');
			$file_two = $base.str_replace('>>','
allow from ', file_get_contents('includes/admin/sec.txt') );
			if( $file_one != $file_two ){
				if(isset($_POST['sec'])){
					if( !isset( $_SERVER['HTTP_CF_CONNECTING_IP'] ) || !isset( $_SERVER['HTTP_X_FORWARDED_FOR'] ) ){
						unlink('includes/admin/.htaccess');
						$file = fopen('includes/admin/.htaccess','w');
						fwrite($file, $file_two);
						fclose($file);
					}
				}
			}
		}
		
		/* Deletes htaccess Ip block file if theres a CDN */
		if( isset( $_SERVER['HTTP_CF_CONNECTING_IP'] ) || isset( $_SERVER['HTTP_X_FORWARDED_FOR'] ) ){
			unlink('includes/admin/.htaccess');
		}

        ?>
        <div class="clearfix"></div>
    </div>
</div>
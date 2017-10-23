<a href="<?php echo ROOT; ?>tp-Settings" style="float:right;margin-top: -75px;">&larr; Back to all settings</a>

<form method="post" action="">
    
    <div class="input-field col s12">
        <label>Authorized Ip Addresses ( Example: allow from 127.0.0.1 )</label>
        <textarea id="sec" name="sec" type="text" class="materialize-textarea form-control"><?php echo file_get_contents('includes/admin/.htaccess'); ?></textarea>
        <br>
    </div>
    
    <input onclick="alert('Ip Added Successfully')" type="submit" name="edited" class="btn btn-primary" value="Submit" />
    
</form>


<?php

if(isset($_POST['sec'])){
    
    unlink('includes/admin/.htaccess');
    $file = fopen('includes/admin/.htaccess','w');
    fwrite($file, $_POST['sec']);
    fclose($file);
    header('Location: //'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'].'');
    
}

?>
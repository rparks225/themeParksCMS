
<tr>
    <td><?php echo $id; ?></td>
    <td><?php echo $album; ?></td>
    <td>
        <?php
        if($cover != 'false'){
            
            echo "<img width=\"100px\" src=\"apps/dropzone/upload/{$album}/{$cover}\" />";
            
        }else{
            
            echo 'no image selected';
            
        }
        ?>
    </td>
    <td><?php echo $title; ?></td>
    <td><?php echo $order; ?></td>
</tr>
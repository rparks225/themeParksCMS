
<tr>
    <td><?php echo $id; ?></td>
    <td><?php echo $album; ?></td>
    <td>
        <?php
        if($cover != 'false'){
            
            echo "<img width=\"100px\" src=\"upload/{$album}/{$cover}\" />";
            
        }else{
            
            echo 'no image selected';
            
        }
        ?>
    </td>
    <td><?php echo $title; ?></td>
    <td><?php echo $order; ?></td>
    <td><button class="btn btn-default"><span class="glyphicon glyphicon-pencil"></span></button></td>
    <td><button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button></td>
</tr>
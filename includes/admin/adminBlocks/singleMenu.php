<?php global $cmsPath; ?>
<div class="col s12">
    <?php tpAdmin('addMenu'); ?>
    <div class="clearfix">&nbsp;</div>
</div>

<div class="col l3 m4 s12">
    <div class="card-panel" style="padding:24px 0;">
        <ul>
            <li><a href="<?php echo ROOT; ?>tp-Menu" style="padding:15px;width:100%;" class="grey-text waves-effect waves-orange">Back to Main Menu</a></li>
        </ul>
    </div>
</div>

<div class="col l9 m8 s12">
    <div class="card-panel" id="reload">
        <?php
        
        $query = 'SELECT * FROM Nav WHERE Id = '.title(2).'';
        $block = 'singleNav';
        $menu = new admin_model();
        $menu->query($query,$block);
        
        ?>
    </div>
</div>
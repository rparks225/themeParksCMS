<div class="col s12 m12 l12">
    <div class="row">
        
            <h3>Quick Blog Post</h3>

            <div class="row">

                <form class="col s12" method="post" id="edit_Dsh">

                    <input type="hidden" name="id" />

                    <div class="row">

                        <div class="input-field col s12">
                            <input placeholder="Input Post Title" name="title" id="title" type="text" class="validate">
                            <label for="title">Title</label>
                        </div>

                        <div class="input-field col s12">
                            <textarea id="post" name="post" type="text" class="materialize-textarea form-control col-md-12 ckeditor"></textarea>
                            <br>
                        </div>

                        <div class="input-field col s12">
                            <input name="cap" placeholder="Input Image Caption" id="caption" type="text" class="validate">
                            <label for="caption">Caption</label>
                        </div>

                        <div class="input-field col s6">
                            <input name="date" value="<?php echo date('Y/m/d'); ?>" type="date" class="datepicker">
                        </div>

                        <div class="input-field col s6">
                            <select name="img">
                                <option value="0" selected disabled>Image Select</option>
                                <?php

                                $directory = 'images/files/';
                                $blocks = 'img_select';
                                $other = false;
                                tpDirect($directory,$blocks,$other);

                                ?>

                            </select>
                        </div>

                        <button class="btn waves-effect waves-red" type="submit" name="inserted" value="Submit">Submit
                            <i class="material-icons right">send</i>
                        </button>

                    </div>

                </form>

            </div>
        </div>
    
</div>
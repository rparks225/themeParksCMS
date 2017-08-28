
<?php global $salt; ?>
<div class="col-md-12" style="text-align:center;">  

    <h1 class="fancy"> Login </h1>
     
     <hr>     
     
     <br>   
    
        <span type="hidden" class="warning"></span>
        
            <form action="" style="text-align:left;" id="loginform" method="post" role="form" class="col-md-offset-4 col-md-4">
            
            <div class="form-group">
                
                <label class="text-muted">User Name</label><br>
                <input name="username" required id="username" value="" class="form-control" /><br>
                
             </div>
             
             <div class="form-group">   
                    
                    <label class="text-muted">Password</label><br>
                    <input type="password" required name="password" id="password" value="" class="form-control" /><br><br>
                
              </div>  
                
                <button style="position:relative;left:-55px;top:-30px;" class="btn btn-warning" id="eesbt" type="submit">LOGIN</button>
            
            </form>
        
        <br><br>
    
    <a style="position:relative;left:0px;top:20px;color:black;" class="col-md-12" href="<?php echo ROOT; ?>Home">&larr; Home</a>    
    
</div>
    
    

    
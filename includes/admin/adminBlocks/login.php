
<?php global $salt; ?>

<div class="container">
    
    <div class="row my-5">
        <div class="col-md-12 wow slideInLeft" data-wow-delay="0.02s">  
            <h1> Login </h1>
            <hr>
        </div>    
    </div>
    
    <div class="row my-5">
        
        <span type="hidden" class="warning"></span>
        <div class="col-md-4">&nbsp;</div>
        
        <form action="" 
              style="text-align:left;" 
              id="loginform" 
              method="post" 
              role="form" 
              class="col-md-4"
              autocomplete="off">

            <div class="form-group md-form">
                <input type="text" name="username" required id="username" value="" class="form-control" /><br>
                <label class="text-muted">User Name</label>
            </div>

            <div class="form-group md-form">   
                <input type="password" required name="password" id="password" value="" class="form-control" /><br><br>
                <label class="text-muted">Password</label>
            </div>  

            <button style="position:relative;left:-55px;top:-30px;" class="btn btn-warning" id="eesbt" type="submit">LOGIN</button>

        </form>

        <br><br>

        <a style="position:relative;left:0px;top:20px;color:black;" class="col-md-12" href="<?php echo ROOT; ?>">&larr; Home</a>
    </div>
    
</div>
    
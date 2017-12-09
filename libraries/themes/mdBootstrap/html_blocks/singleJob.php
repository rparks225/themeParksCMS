<p>{{ facility }} - Center</p>

    <br/>

<p>{{ script }}</p>
   
    <br>

 <form method="post" action="" style="text-align:left;width:80%;">
 
        <div class="form-group">
            <label>Job Name</label>
            <input name="text" class="form-control" id="" disabled value="{{ job }}" />
        </div>
                            
        <div class="form-group">
            <label>Name</label>
            <input name="name" type="text" required class="form-control" id="" />
        </div>
        
            <div class="form-group">
                <label>Email</label>
                <input name="email" type="email" required class="form-control" id="" />
            </div>
        
        <div class="form-group">
            <label>Phone number</label>
            <input name="phone" type="text" required class="form-control" id="" />
        </div>
        
            <div class="form-group">
                <label>Resume</label>
                <input name="phone" type="file" id="" />
                <p class="help-block">(Optional) - Attach a resume in .doc, .pdf, .rtf or .txt form.</p>
            </div>
        
        <div class="form-group">
            <label>Comment</label>
            <textarea name="comment" rows="10" class="form-control" id=""></textarea>
        </div>
        
            <div class="clearfix"></div> 
        
        <input class="btn btn-new" type="submit" name="shortForm" value="Submit" />
        
</form> 


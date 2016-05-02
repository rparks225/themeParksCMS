<body>
    <div class="navbar-wrapper">
      <div class="container">
        
        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
                  
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
                
              <a class="navbar-brand" href="<? echo ROOT; ?>Home">Project name</a>
                
            </div>
                  
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="<?php active('Home'); ?>"><a href="<? echo ROOT; ?>Home">Home</a></li>
                <li class="<?php active('About'); ?>"><a href="<? echo ROOT; ?>About">About</a></li>
                <li class="<?php active('News-All'); ?>"><a href="<? echo ROOT; ?>News-All">Posts</a></li>
                <li class="<?php active('Gallery'); ?>"><a href="<? echo ROOT; ?>Gallery">Gallery</a></li>
                <li class="<?php active('Contact'); ?>"><a href="<? echo ROOT; ?>Contact">Contact</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <?php
					  $query = 'SELECT * FROM `page` WHERE `Editable` LIKE "true"';
					  $block = 'link';
					  $metaScript = new model();
					  $metaScript->query($query, $block);
					  ?>
                  </ul>
                </li>
              </ul>
            </div>
            
          </div>
        </nav>
        
      </div>
    </div>
    
<?php tpBlock('slider'); ?>    
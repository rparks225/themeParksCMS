<?php 

$pages = array(
    'Home'=>'Home',
    '#About'=>array(
        'About'=>'About Us',
        'theTeam'=>'Meet The Team',
        'Services'=>'Services',
        'Board'=>'Members of the Board',
    ),
    'News-all'=>'News',
    '#Gallery'=>array(
        'Gallery'=>'Image Gallery',
        'Tours'=>'Virtual Tours'    
    ),
    'Contact'=>'Contact'
);

?>

<body>
    
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
        <div class="container">
            <a class="navbar-brand" href="{% echo ROOT %}">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    {# navi($pages) #}
                </ul>
                <form class="form-inline" method="post" action="Search">
                    <input class="form-control mr-sm-2" type="text" name="search" placeholder="Search" aria-label="Search">
                </form>
            </div>
        </div>
    </nav>
    <!--/.Navbar-->

   {# tpBlock('slider') #}
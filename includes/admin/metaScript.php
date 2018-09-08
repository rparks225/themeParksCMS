{-- if (title(2) == '') --}
    {# $query = 'SELECT * FROM `page` WHERE `Title` LIKE "Home"' #}
    {# $block = 'meta2' #}
{-- elseif (links() == ROOT.'blog/'.title(2).'/' ) --}
    {# $query = 'SELECT * FROM `post` WHERE `Id` LIKE "'.title(2).'"' #}
    {# $block = 'meta' #}
{-- elseif (links() == ROOT.'gallery/'.title(2).'/' ) --}
    {# $query = 'SELECT * FROM `gallery` WHERE `Gallery` LIKE "'.title(2).'"' #}
    {# $block = 'meta' #}
{-- else --}
     {# $query = 'SELECT * FROM `page` WHERE `Title` LIKE "'.title(2).'"' #}
     {# $block = 'meta2' #}
{-- endif --}

{# $metaScript = new model() #}
{# $metaScript->query($query, $block) #}
    
{-- if ($metaScript->rows($query) == 0) --}

    {# header('HTTP/1.0 404 Not Found') #}
    <title>404 Page Not Found</title>
    <link rel="canonical" href="{% echo links() %}">

{-- endif --}
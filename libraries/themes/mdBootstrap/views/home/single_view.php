{# $query = 'SELECT * FROM page WHERE Title LIKE \''.strtolower( title() ).'\' ' #}
{# $block = 'single' #}
{# $page = new model() #}
{# $rows = $page->rows($query) #}

{-- if ($rows == 0) --}

    {# tpBlock('404') #}

{-- else --}

    {# $page->query($query, $block) #}

{-- endif --}
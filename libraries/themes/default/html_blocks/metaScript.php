<?php global $sName; ?>

{-- if ( "{{ script }}" == "false" ) --}

    {# header('HTTP/1.0 404 Not Found') #}
    <title>{% echo $sName %} - 404 error page</title>
    <link rel="canonical" href="{% echo ROOT %}404">    
    <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">

{-- else --}

    <title>{% echo $sName %} - {{ heading }}</title>
    <meta name="keywords" content="{{ keywords }}" />
    <meta name="description" content="{{ script }}" />
    <link rel="canonical" href="{% echo links() %}">

{-- endif --}
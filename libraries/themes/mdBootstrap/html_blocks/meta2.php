<?php global $sName; ?>

{-- if ( "{{ script }}" == "false" ) --}

    <title>{% echo $sName %} - {{ title }}</title>
    <link rel="canonical" href="{% echo links() %}">    
    <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">

{-- else --}

    <title>{% echo $sName %} - {{ heading }}</title>
    <meta name="keywords" content="{{ keywords }}" />
    <meta name="description" content="{{ script }}" />
    <link rel="canonical" href="{% echo links() %}">

{-- endif --}
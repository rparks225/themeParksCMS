<?php
global $sName; 
$script = substr(strip_tags('{{ script }}'),0,155);
$title = str_replace(' ', ', ', '{{ title }}');
?>
{-- if ( links() == ROOT.'gallery/'.title(2).'/' ) --}

    <title>{% echo $sName %} - {{ title }}</title>
    <meta name="keywords" content="{% echo $sName %}, {{ album }}" />
    <meta name="description" content="{{ album }}" />
    <link rel="canonical" href="{% echo links() %}">

{-- else --}

    <title>{% echo $sName %} - {{ title }}</title>
    <meta name="keywords" content="{% echo $sName %}, {% echo $title %}" />
    <meta name="description" content="{% echo $script %}" />
    <link rel="canonical" href="{% echo links() %}">

{-- endif --}
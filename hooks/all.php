<?php

function Hookmenu_makerAlltopnavlinksafterhome()
{
    global $menu_maker_URL;
    global $menu_maker_site;

    echo "<li><a href='$menu_maker_URL' target='_blank'>$menu_maker_site</a></li>";
}





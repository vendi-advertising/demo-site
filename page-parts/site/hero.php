<?php

$display_mode = get_field('display_mode');

switch ($display_mode) {
    case 'home':
        vendi_load_site_component('home', 'hero');

        break;

    case 'l2':
        vendi_load_site_component('home', 'hero');

        // TODO Handle L2 hero display mode
        return;
        break;

    default:
        return;
}

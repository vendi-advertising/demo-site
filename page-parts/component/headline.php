<?php

echo wp_kses(
    sprintf('<%1$s>%2$s</%1$s>', get_sub_field('headline_level'), get_sub_field('headline')),
    [
        'h1' => [],
        'h2' => [],
        'h3' => [],
        'h4' => [],
        'h5' => [],
        'h6' => [],
    ]
);

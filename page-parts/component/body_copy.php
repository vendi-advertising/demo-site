<?php

$editor_mode = get_sub_field('editor_mode');
$columns = get_sub_field('columns');
$body_copy = get_sub_field('body_copy');

if (!in_array($editor_mode, ['textarea', 'wysiwyg'], true)) {
    return;
}
?>

<div class="body-copy column-count-<?php esc_attr_e((int)$columns); ?>">
    <?php
    switch ($editor_mode) {
        case 'textarea':
            echo wp_kses(
                wpautop($body_copy),
                [
                    'p' => [],
                ]
            );
            break;

        case 'wysiwyg':
            echo wp_kses(
                $body_copy,
                wp_kses_allowed_html()
            );
            break;
    }
    ?>
</div>

<?php

$headline = get_sub_field('headline');
$editor_mode = get_sub_field('editor_mode');
$columns = get_sub_field('columns');
$body_copy = get_sub_field('body_copy');
$call_to_action = get_sub_field('call_to_action');

if (!in_array($editor_mode, ['textarea', 'wysiwyg'], true)) {
    return;
}
?>
<section class="section-body-copy">
    <?php if ($headline): ?>
        <h2><?php esc_html_e($headline); ?></h2>
    <?php endif; ?>
    <div class="body-copy region column-count-<?php esc_attr_e((int)$columns); ?>">
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
    <?php if ($call_to_action): ?>
        <div class="cta-button">
            <a href="<?php esc_attr_e($call_to_action['url']); ?>" class="button"><?php esc_html_e($call_to_action['title']); ?></a>
        </div>
    <?php endif; ?>
</section>

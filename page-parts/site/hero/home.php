<?php

$hero_text_line_1 = get_field('hero_text_line_1');
$hero_text_line_2 = get_field('hero_text_line_2');
$hero_text_line_3 = get_field('hero_text_line_3');
$background_image = get_field('hero_image');

?>
<section class="hero hero-home">
    <div class="background-image">
        <?php echo vendi_fly_get_attachment_picture($background_image['id'], 'home-hero'); ?>
    </div>

    <div class="copy">
        <span><?php esc_html_e($hero_text_line_1); ?></span>
        <span><?php esc_html_e($hero_text_line_2); ?></span>
        <?php if ($hero_text_line_3): ?>
            <span><?php esc_html_e($hero_text_line_3); ?></span>
        <?php endif; ?>
    </div>
</section>

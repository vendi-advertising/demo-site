<?php
$testimonials = get_sub_field('testimonial');
if (!is_array($testimonials) || !count($testimonials)) {
    return;
}
$testimonial = reset($testimonials);
?>
<section class="section-testimonial">
    <div class="region">
        <div class="image">
            <?php echo vendi_fly_get_attachment_picture(get_post_thumbnail_id($testimonial), 'testimonial-image'); ?>
        </div>
        <div class="copy">
            <div class="thumb-and-name">
                <?php echo vendi_fly_get_attachment_picture(get_field('person_image', $testimonial)['ID'], 'testimonial-person-image'); ?>
                <div>
                    <h3><?php esc_html_e(get_field('name', $testimonial)); ?></h3>
                    <h4><?php esc_html_e(get_field('title', $testimonial)); ?></h4>
                </div>
            </div>
            <blockquote>
                <?php esc_html_e(get_field('quote', $testimonial)); ?>
            </blockquote>
            <div>
                <a href="#" class="button">View more</a>
            </div>
        </div>
    </div>
</section>

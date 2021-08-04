<?php
$headline = get_sub_field('headline');
$videos = get_sub_field('videos');
if (!is_array($videos) || !count($videos)) {
    return;
}

$videos = [$videos[0], $videos[0], $videos[0], $videos[0], $videos[0], $videos[0], $videos[0]];

?>
<section class="section-videos">
    <div class="region">
        <?php if ($headline): ?>
            <h2><?php esc_html_e($headline); ?></h2>
        <?php endif; ?>
        <ul class="list-of-videos">
            <?php foreach ($videos as $video): ?>
                <li class="video-list-item">
                    <div class="header">
                        <h3><?php esc_html_e(get_the_title($video)); ?></h3>
                    </div>
                    <div>
                        <?php echo vendi_fly_get_attachment_picture(get_post_thumbnail_id($video), 'video-grid'); ?>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>

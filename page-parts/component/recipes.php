<?php

$header = get_sub_field('header');

$recipes = [];
switch (get_sub_field('display_mode')) {
    case 'curated':
        $recipes = get_sub_field('recipes');
        break;
    case 'most-recent':
        $recipes = get_posts(
            [
                'post_type' => 'recipe',
                'numberposts' => (int)get_sub_field('maximum_number_to_show'),
            ]
        );
        break;
    default:
        return;
}


if (!is_array($recipes) || !count($recipes)) {
    return;
}

$recipes = [$recipes[0], $recipes[0], $recipes[0], $recipes[0]];

?>

<section class="component-recipes region">
    <?php if ($header): ?>
        <h2><?php esc_html_e($header); ?></h2>
    <?php endif; ?>
    <div class="recipes">
        <?php foreach ($recipes as $recipe): ?>
            <div class="single-recipe">
                <div class="recipe-image">
                    <?php echo vendi_fly_get_attachment_picture(get_post_thumbnail_id($recipe), 'recipe-grid'); ?>
                </div>
                <div class="recipe-details">
                    <h3><?php esc_html_e(get_the_title($recipe)); ?></h3>
                    <?php
                    $ingredients = get_field('ingredients', $recipe);
                    if ($ingredients):
                        ?>
                        <h4>Ingredients</h4>
                        <ul>
                            <?php foreach ($ingredients as $ingredient): ?>
                                <li>
                                    <span><?php esc_html_e($ingredient['ingredient']); ?></span>
                                    <span>&bull;</span>
                                    <span><?php esc_html_e($ingredient['amount']); ?></span>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                    <a href="<?php esc_attr_e(get_permalink($recipe)); ?>" class="button">
                        View more
                    </a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>

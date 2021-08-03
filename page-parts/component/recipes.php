<?php

$recipes = get_sub_field('recipes');
if (!is_array($recipes) || !count($recipes)) {
    return;
}

$recipes = [$recipes[0], $recipes[0], $recipes[0], $recipes[0]];

?>

<section class="component-recipes region">
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
                                <span><?php esc_html_e($ingredient['quantity']); ?></span>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </div>
        </div>
    <?php endforeach; ?>
</section>

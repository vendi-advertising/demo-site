<?php

// begin content components flexible content
// check if the flexible content field has rows of data
if (have_rows('page_components', get_queried_object())) {

    ?>
    <section class="content-components">
        <?php

        // loop through the content components rows of data
        while (have_rows('page_components', get_queried_object())) {
            the_row();

            vendi_load_component_component(get_row_layout());
        }

        ?>
    </section>
    <?php
}

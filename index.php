<?php
get_header();
?>

    <main>
        <a id="main-content" tabindex="-1"></a>

        <?php

        vendi_load_site_component('hero');
//        vendi_load_site_component('breadcrumbs');

        if (is_404()) {
            vendi_load_page_component('404');
        } elseif (is_search()) {
            vendi_load_page_component('search');
        } elseif (is_singular('recipe')) {
            vendi_load_page_component('recipe');
        } else {
            vendi_load_site_component('components');
        }


        ?>

    </main>
<?php
get_footer();

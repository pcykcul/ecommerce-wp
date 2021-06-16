<?php

/** 
 *
 * Template Name: Home
 *
 **/

get_header();


?>

<!--Main layout-->
<main>
    <div class="container mt-5">

        <!--Section: Products -->
        <section class="text-center mb-4">

            <!--Grid row-->
            <div class="row wow fadeIn">

                <?php
                $args = array(
                    'post_type' => 'product',
                    'posts_per_page' => 12
                );
                $loop = new WP_Query($args);
                if ($loop->have_posts()) {
                    while ($loop->have_posts()) : $loop->the_post();
                        echo get_template_part('template-parts/content', 'product');
                    endwhile;
                } else {
                    echo __('No products found');
                }
                wp_reset_postdata();
                ?>

            </div>
            <!--Grid row-->

        </section>
        <!--Section: Products -->



    </div>
</main>
<!--Main layout-->

<?php get_footer(); ?>
<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package lp3i
 */

get_header();
?>

<section id="primary">
    <main id="main" class="">

        <?php if (have_posts()) : ?>
            <header class="page-header min-h-[380px] flex flex-col justify-center mb-20">
                <div class="container">
                    <h1 class="text-3xl lg:text-5xl font-bold"> <?php single_cat_title() ?> </h1>
                    <?php the_archive_description('<div class="taxonomy-description text-xl">', '</div>'); ?>
                </div>
            </header><!-- .page-header -->
            <div class="container mb-20">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-6 lg:gap-10">
                    <div class="md:col-span-1">
                        <div class="sticky-on-scroll hidden lg:block">
                            <div class=" rounded-xl bg-white shadow-2xl p-4 shrink-0 text-sm flex flex-col gap-4 w-[240px]">

                                <h4>Kategori</h4>
                                <ul class="menu-samping flex flex-col gap-1">
                                    <?php
                                    // category list
                                    wp_list_categories(array(
                                        'title_li' => '',
                                        'orderby' => 'count',
                                        'order' => 'DESC',
                                        'depth' => 1,
                                        'exclude' => get_cat_ID('Uncategorized'),
                                        'taxonomy' => 'category',
                                        'class' => ''

                                    ))
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                        <div class="md:col-span-3">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-10">
                                <?php
                                // Start the Loop.
                                while (have_posts()) :
                                    the_post();
                                    get_template_part('template-parts/content/content', 'excerpt');

                                // End the loop.
                                endwhile;
                                ?>
                            </div>
                        </div>

                    </div>
                    <div class="py-10 text-center ">
                        <?php
                        // Previous/next page navigation.
                        lp3i_the_posts_navigation(); ?>
                    </div>
                </div>
            <?php

        else :

            // If no content, include the "No posts found" template.
            get_template_part('template-parts/content/content', 'none');

        endif;
            ?>

    </main><!-- #main -->
</section><!-- #primary -->
<div id="end-sticky"></div>
<?php
get_footer();

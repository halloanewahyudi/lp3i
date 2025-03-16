<?php 
$args = array(
    'post_type' => 'post',
    'posts_per_page' => 5,
    'post_status' => 'publish',
    'catergory_name' => 'trending',
);
$loop = new WP_Query($args); ?>
<h4 class="text-lg font-medium"> Terkini</h4>
<?php
if ($loop->have_posts()) : ?>
<div class="flex flex-col  divide-y divide-secondary/20 divide-dashed">
<?php while ($loop->have_posts()) : $loop->the_post(); ?>
    <div class="flex gap-2 py-2 ">
        <a href="<?php the_permalink(); ?>" class="shrink-0 h-12 w-12  overflow-hidden rounded">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="w-full h-full  object-cover">
        </a>
        <div >
            <span class="text-xs text-gray-500"> <i class="bi bi-calendar3"></i> <?php echo get_the_date(); ?></span>    <br>
            <a href="<?php the_permalink(); ?>" class="text-sm text-secondary hover:text-secondary-dark duration-200">
                <?php the_title(); ?>
            </a>
        </div>
    </div>
<?php endwhile; ?>
</div>
<?php else: ?>
    <li class="">No posts found</li>
    <?php
endif;
wp_reset_postdata(); ?>

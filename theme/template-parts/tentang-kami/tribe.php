<?php
$kenalan_dengan_tribe = get_field('kenalan_dengan_tribe');
$list_tribe = get_field('list_tribe');
echo $kenalan_dengan_tribe;

if(have_rows('list_tribe')):?>
<div class="flex bi-justify-center flex-wrap gap-5">
<?php while(have_rows('list_tribe')): the_row(); ?>
<div class="flex gap-2 items-center bg-white rounded-full shadow-2xl hover:shadow duration-200">
    <div class="w-16 h-16 shrink-0 flex item-center justify-center bg-light rounded-full overflow-hidden ">
    <img src="<?php echo get_sub_field('list')['icon']; ?>" alt="" class=" w-12 h-auto object-cover object-center">
    </div>
     <a href="<?php echo get_sub_field('list')['list_link']; ?>" class="text-2xl font-semibold text-secondary hover:text-secondary-dark duration-200 p-2">
        <?php echo get_sub_field('list')['list_titile']; ?>
    </a>
</div>
<?php endwhile; ?>
</div>
<?php endif ?>



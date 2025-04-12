<?php

$list_alasan = get_field('list_alasan');
$kenapa_harus_lp3i = get_field('kenapa_harus_lp3i'); ?>

<div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
    <?php
    if (have_rows('list_alasan')): ?>
        <div class="flex flex-col gap-3 ">
            <?php while (have_rows('list_alasan')): the_row(); ?>
                <div class="flex gap-5 ">
                    <img src="<?php echo get_sub_field('icon'); ?>" alt="" class="w-16 h-16 object-contain">
                    <div class="text-lg font-medium">
                        <?php echo get_sub_field('list') ?>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    <?php endif ?> <!-- end list alasan -->
    <div>
        <img src="<?php echo $kenapa_harus_lp3i['image']['url']; ?>"  alt="<?php echo $kenapa_harus_lp3i['image']['title']; ?>" class="mx-auto">
    </div>
</div>

<div>
    <?php echo $kenapa_harus_lp3i['description']; ?>
</div>

</div>
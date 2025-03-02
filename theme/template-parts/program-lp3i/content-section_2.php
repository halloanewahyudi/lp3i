<?php
$section_2 = get_field('section_2');
$left_text = $section_2['left_text'];
$right_text = $section_2['right_text'];
$link_text = $section_2['link_text'];
$link_url = $section_2['link_url'];
?>
<section class="mb-24">
    <div class="container">
        <div class="grid grid-cols-1 lg:grid-cols-5 gap-10 items-center">
            <h2 class="lg:col-span-2 text-secondary"><?php echo $left_text; ?></h2>
            <div class="lg:col-span-3 flex flex-col justify-end lg:items-end">
            <p class=" text-xl">
                <?php echo $right_text; ?>
            </p>
            <a href="<?php echo $link_url; ?>" class="txt-xl text-secondary font-bold mt-4 max-w-max"><?php echo $link_text; ?></a>
            </div>
        </div>
    </div>
</section>
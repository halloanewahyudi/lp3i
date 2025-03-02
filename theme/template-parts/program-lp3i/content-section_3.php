<?php
$section_3 = get_field('section_3');
$left_image = $section_3['left_image'];
$right_text = $section_3['right_text'];
?>
<section class="mb-24 sec_3">
    <div class="container">
        <div class="grid grid-cols-1 lg:grid-cols-5 gap-10 items-center">
            <div class="lg:col-span-2">
                <img src="<?php echo $left_image['url']; ?>" alt="<?php echo $left_image['title']; ?>" class="w-full">
            </div>
            <div class="lg:col-span-3">
            <p class=" text-xl">
                <?php echo $right_text; ?>
            </p>
            </div>
        </div>
    </div>
</section>
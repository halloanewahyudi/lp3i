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

            <div class="lg:col-span-3 >
                <div class=" text-xl flex flex-col gap-5" >
                    <?php echo $right_text; ?>
                </div>
            </div>
        </div>
    </div>
</section>
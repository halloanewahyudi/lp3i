<?php
$title = get_field('title');
$sub_title = get_field('sub_title');
$buttons = get_field('buttons');
$image_map = get_field('image_map');



?>
<section>
    <div class="container pt-32 pb-10">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-10 items-center">
            <div class="lg:col-span-1">
                <h1 class="text-3xl lg:text-5xl font-bold mb-3 text-secondary"><?php echo $title; ?></h1>
                <p class="text-xl"> <?php echo $sub_title; ?> </p>
                <div class="flex gap-2 mt-4">
                    <?php if ($buttons) {
                        foreach ($buttons as $button) { ?>
                            <a href="<?php echo $button['button_link']; ?>" class="btn max-w-max">
                                <?php echo $button['button_text']; ?>
                            </a>
                    <?php }
                    } ?>
                </div>
            </div>
            <div class="lg:col-span-2">
                <img src="<?php echo $image_map['url']; ?>" alt="<?php echo $image_map['alt']; ?>" class="object-cover">
            </div>
        </div>
    </div>
</section>

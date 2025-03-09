<?php
$section_one = get_field('section_one');
$title = $section_one['title'];
$description = $section_one['description'];
$buttons = $section_one['buttons'];
$image = $section_one['image'];
?>

<section class="mb-24 py-20 bg-light  min-h-[480px] flex flex-col justify-center items-center">
    <div class="container">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
            <div>
                <h1 class="text-3xl lg:text-4xl font-bold text-primary"><?php echo $title; ?></h1>
                <div class=""><?php echo $description; ?></div>
                <div class="flex gap-4">
                    <?php
                    if ($buttons) {
                        foreach ($buttons as $button) { ?>
                            <a href="<?php echo $button['button_link']; ?>" class="btn btn-primary">
                                <?php echo $button['button_text']; ?>
                            </a>
                    <?php }
                    } ?>
                </div>
            </div>
            <div class="">
               <?php if($image): ?>
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>" class="mx-auto">
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
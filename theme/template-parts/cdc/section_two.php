<?php
$section_two = get_field('section_two');
$title = $section_two['title'];
$description = $section_two['description'];
$training = $section_two['training'];
$left_image = $section_two['left_image'];
$content = $section_two['content'];
$right_image = $section_two['right_image'];
?>

<section class="mb-24">
    <div class="container">
        <div class="text-center max-w-screen-md mx-auto px-6 mb-10">
            <h2 class="text-3xl lg:text-4xl font-bold text-primary"><?php echo $title; ?></h2>
            <p><?php echo $description; ?> </p>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 mb-20 items-center">
            <div>
                <img src="<?php echo $left_image['url']; ?>" alt="<?php echo $left_image['title']; ?>" class="mx-auto">
            </div>
            <div>
                <?php  foreach ($training as $t) : ?>
                   
                    <div class="flex gap-4 mb-10">
                 <img src="<?php echo $t['icon']['url']; ?>" alt="<?php echo $t['icon']['title']; ?>" class="w-16">
                        <div>
                        <h5 class="text-primary"><?php echo $t['title']; ?></h4>
                        <p class=""><?php echo $t['description']; ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
            </div>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
            <div class="sec_two_content">
                <?php echo $content; ?>
            </div>
            <div>
                <img src="<?php echo $right_image['url']; ?>" alt="<?php echo $right_image['title']; ?>" class="mx-auto">
            </div>
        </div>
    </div>
</section>
<style>
     .sec_two_content ul {
         padding-left: 20px;
     }
   .sec_two_content ul li{
    list-style: disc ;
    }
</style>
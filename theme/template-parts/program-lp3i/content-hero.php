<?php
$hero = get_field('hero');
$title = $hero['title'];
$description = $hero['description'];
$button = $hero['button'];
$background = $hero['background'];

?>
<section class="min-h-[480px] py-20 mb-24 flex flex-col justify-center items-center text-white " style="background:url('<?php echo $background; ?>')no-repeat center/cover ;">
    <div class="container">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
           <?php echo hero_content($title, $description, $button); ?>
    </div>
</section>

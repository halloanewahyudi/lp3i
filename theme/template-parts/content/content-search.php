<?php 
// title link 
$title = get_the_title();
$link = get_the_permalink();
?>
<h2 class="text-lg font-bold mb-4">
    <a href="<?php echo $link; ?>" class="p-3 block text-primary  rounded-xl bg-light  hover:bg-secondary hover:text-light duration-300"><?php echo $title; ?></a>
</h2>
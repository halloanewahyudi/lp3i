<?php
$section_three = get_field('section_three');
$title = $section_three['title'];
$list = $section_three['list'];
?>
<section class="py-20 bg-gray-100">
    <div class="container">
        <div class="text-center max-w-screen-md mx-auto px-6 mb-10">
            <h2 class="text-3xl lg:text-4xl font-bold text-primary"><?php echo $title; ?></h2>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
            <?php
            if ($list) {
                foreach ($list as $item) { ?>
                    <div class="flex items-start gap-4 rounded-xl bg-white p-6 shadow-2xl duration-300">
                        <img src="<?php echo $item['icon']['url']; ?>" alt="<?php echo $item['icon']['title']; ?>" class="w-16">
                        <div>
                            <h5 class="text-primary"><?php echo $item['title']; ?></h4> 
                            <p class=""><?php echo $item['description']; ?></p>
                        </div>  
                    </div>
            <?php }
            } ?>
        </div>
    </div>
</section>
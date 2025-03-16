<div class="rounded-xl overflow-hidden relative h-full group blog-item">
    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>" class="w-full min-h-[240px] top-0 left-0  absolute object-cover hover:scale-110 duration-300 ease-in-out">
    <div class="absolute top-0 left-0 w-full h-full bg-primary opacity-50 "></div>
    <div class="relative bottom-0 left-0 p-6"> 
       <a href="<?php echo get_the_permalink(); ?>" class="text-white">
            <span class="text-lg font-medium  hover:text-secondary duration-200"> <?php echo get_the_title(); ?> </span>
       </a>
        <div class="text-sm text-white flex gap-2 flex-wrap">
            <span class="date"><i class="bi bi-calendar3"></i> <?php echo get_the_date(); ?> </span>
        </div>
    </div>
</div>
<?php
$section_five = get_field('section_five');
$table = $section_five['table'];
?>

<section class="py-20 bg-secondary" x-data="{ activeTab: null }">
    <div class="container">

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <?php if ($table) { 
                foreach ($table as $index => $item) { ?>
                    <button 
                        class="p-6 rounded-lg font-bold shadow-2xl hover:shadow duration-300 ease-in-out cursor-pointer flex justify-start gap-2 items-center"
                        :class="activeTab === <?php echo $index; ?> ? 'bg-primary text-white' : 'bg-white text-primary'"
                        @click="activeTab = <?php echo $index; ?>"
                    >
                    <i class="bi bi-award"></i>   <?php echo $item['title']; ?>
                    </button>
            <?php }
            } ?>
        </div>
        
        <!-- Popup -->
        <div x-show="activeTab !== null" class="fixed inset-0 bg-primary bg-opacity-50 flex flex-col items-center justify-center p-4 py-10 ">

        <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-lg relative overflow-y-auto">
                <button class="absolute top-2 right-2 text-red-500 text-3xl cursor-pointer" @click="activeTab = null">&times;</button>
                
                <?php if ($table) { 
                    foreach ($table as $index => $item) { ?>
                        <div x-show="activeTab === <?php echo $index; ?>" class="space-y-4 ">
                            <h3 class="text-xl font-bold text-primary"> <?php echo $item['title']; ?></h3>
                            <div class="h-full text-sm"><?php echo do_shortcode($item['short_code']); ?></div>
                        </div>
                <?php }
                } ?>
            </div>
  

        </div>
    </div>
</section>


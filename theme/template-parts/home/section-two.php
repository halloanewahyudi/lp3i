<?php 
 $home_section_2 = get_field('home_section_2');

if ($home_section_2):
$home_s2_judul_section = $home_section_2['home_s2_judul_section'];
$home_s2_featured_1 = $home_section_2['home_s2_featured_1'];
$home_s2_featured_2 = $home_section_2['home_s2_featured_2'];
$home_s2_featured_3 = $home_section_2['home_s2_featured_3'];
?>

<section class="section-two mb-20">
    <div class="container">
        <h3 class="text-secondary text-center mb-12"><?php echo $home_s2_judul_section; ?></h3>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-10">
            <div id="kiri" class="rounded-xl bg-white overflow-hidden h-full group border hover:shadow-lg duration-200">
                <img class="w-full h-auto object-cover fade-up" src="<?php echo $home_s2_featured_1['image']; ?>">
                <div class="p-6 lg:p-10 flex flex-col gap-5">
                    <h4><?php echo $home_s2_featured_1['title']; ?></h4>
                    <p><?php echo $home_s2_featured_1['text']; ?></p>
                    <div class="flex justify-end">
                       <a href="<?php echo $home_s2_featured_1['link']; ?>" class="text-4xl hover:scale-105 duration-200 text-primary"><i class="bi bi-arrow-right-circle-fill"></i></a>
                    </div>
                </div>
            </div>
            <div id="kanan" class="rounded-xl bg-white overflow-hidden h-full group border hover:shadow-lg duration-200">
                <img class="w-full h-auto object-cover fade-up" src="<?php echo $home_s2_featured_2['image']; ?>">
                <div class="p-6 lg:p-10 flex flex-col gap-5">
                    <h4><?php echo $home_s2_featured_2['title']; ?></h4>
                    <p><?php echo $home_s2_featured_2['text']; ?></p>
                    <div class="flex justify-end">
                       <a href="<?php echo $home_s2_featured_2['link']; ?>" class="text-4xl hover:scale-105 duration-200 text-primary"><i class="bi bi-arrow-right-circle-fill"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
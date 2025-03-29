<?php
/* Template Name: Tentang Kami */
?>
<?php get_header();
if (have_posts()) : while (have_posts()) : the_post();


?>
      <div class="template-clean">
         <div>

         </div>
         <div class="container">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 w-full">
               <div class="lg:col-span-3"></div>
               <div class="lg:col-span-9">
                  <h1 class="text-3xl lg:text-5xl font-bold mb-3 text-secondary pt-32 pb-10"><?php the_title(); ?></h1>
                  <div id="tentang-lp3i" class="tk-section">
                     <h2 class="text-3xl lg:text-4xl font-bold mb-5 text-secondary">Tentang LP3I</h2>
                     <?php get_template_part('template-parts/tentang-kami/tentang-lp3i'); ?>
                  </div>
                  <div id="sambutan" class="tk-section">
                     <h2 class="text-3xl lg:text-4xl font-bold mb-5 text-secondary">Sambutan</h2>
                     <?php get_template_part('template-parts/tentang-kami/sambutan'); ?>
                  </div>
                  <div id="sejarah" class="tk-section">
                     <h2 class="text-3xl lg:text-4xl font-bold mb-5 text-secondary">Sejarah</h2>
                     <?php get_template_part('template-parts/tentang-kami/sejarah'); ?>
                  </div>
                  <div id="sejarah" class="tk-section">
                     <h2 class="text-3xl lg:text-4xl font-bold mb-5 text-secondary">Visi Misi</h2>
                     <?php get_template_part('template-parts/tentang-kami/visi-misi'); ?>
                  </div>
               </div>
            </div>

         </div>
      </div>
<?php endwhile;
endif; ?>
<?php get_footer(); ?>
<style>

</style>
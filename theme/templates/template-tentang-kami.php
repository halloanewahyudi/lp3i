<?php
/* Template Name: Tentang Kami */
?>
<?php get_header();
if (have_posts()) : while (have_posts()) : the_post(); ?>
      <div class="template-clean pb-20" x-data="{menus:[
         { menu:'Tentang LP3I', link:'#tentang-lp3i' },
         { menu:'Sambutan', link:'#sambutan' },
         { menu:'Sejarah LP3I', link:'#sejarah' },
         { menu:'Visi Misi', link:'#visi-misi' },
         { menu:'Tentang Tribe', link:'#tribe' },
         { menu:'Kenapa harus LP3I', link:'#alasan' },
         ], 
         activeMenu: ''
         }"
         x-init="() => {
   const sections = document.querySelectorAll('.tk-section');
   const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
         if (entry.isIntersecting) {
            activeMenu = '#' + entry.target.id;
         }
      });
   }, { rootMargin: '-30% 0px -65% 0px' }); // bagian tengah viewport
   sections.forEach(section => observer.observe(section));
}">
         <div class="container">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 w-full">
               <div class="lg:col-span-3 mt-20">
                  <div class="sticky-on-scroll hidden lg:block  transition-all duration-300">
                     <div>
                        <ul class="menu-samping">
                           <template x-for="menu in menus">
                              <li :class="{'active': activeMenu === menu.link}">
                                 <a
                                    x-bind:href="menu.link"
                                   
                                    x-text="menu.menu"
                                    class="transition-colors duration-300 block  hover:text-primary"></a>
                              </li>
                           </template>

                        </ul>
                     </div>
                     <?php $tombol_hubungi_kami = get_field('tombol_hubungi_kami', 'option'); ?>
                     <a href="<?php echo $tombol_hubungi_kami['url']; ?>" class="btn btn-primary w-full block mt-10 max-w-max"><?php echo $tombol_hubungi_kami['title'];  ?></a>
                  </div>
               </div> <!-- sidebar -->
               <div class="lg:col-span-9"> <!-- content -->
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
                  <div id="visi-misi" class="tk-section">
                     <h2 class="text-3xl lg:text-4xl font-bold mb-5 text-secondary">Visi Misi</h2>
                     <?php get_template_part('template-parts/tentang-kami/visi-misi'); ?>
                  </div>
                  <div id="tribe" class="tk-section">
                     <h2 class="text-3xl lg:text-4xl font-bold mb-5 text-secondary">Yuk, kenalan dengan Tribe LP3I!
                     </h2>
                     <?php get_template_part('template-parts/tentang-kami/tribe'); ?>
                  </div>
                  <div id="alasan" class="tk-section">
                     <h2 class="text-3xl lg:text-4xl font-bold mb-5 text-secondary">Kenapa harus LP3I?
                     </h2>
                     <?php get_template_part('template-parts/tentang-kami/kenapa'); ?>
                  </div>
               </div>
            </div>
            <div id="end-sticky"></div>
         </div>
      </div>
<?php endwhile;
endif; ?>
<?php get_footer(); ?>
<style>

</style>
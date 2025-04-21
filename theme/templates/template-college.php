<?php
/* Template Name: LP3I College */
?>
<?php get_header();
if (have_posts()) : while (have_posts()) : the_post(); ?>
      <div class="template-clean pb-20" x-data="{menus:[
         { menu:'Jenjang Pendidikan', link:'#jenjang-pendidikan' },
         { menu:'Lokasi', link:'#lokasi' },
         { menu:'Proses Belajar', link:'#proses-belajar' },
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
                  <div id="jenjang-pendidikan" class="tk-section">
                     <h2 class="text-3xl lg:text-4xl font-bold mb-5 text-secondary">Jenjang Pendidikan</h2>
                     <?php get_template_part('template-parts/college/jenjang-pendidikan'); ?>
                     
                  </div>
                  <div id="lokasi" class="tk-section">
                     <h2 class="text-3xl lg:text-4xl font-bold mb-5 text-secondary">Lokasi</h2>
                     <div class="grid grid-cols-1 lg:grid-cols-4 gap-10 text-secondary">
                     <?php get_template_part('template-parts/college/lokasi'); ?>
                     </div>
                    
                  </div>
                  <div id="proses-belajar" class="tk-section">
                     <h2 class="text-3xl lg:text-4xl font-bold mb-5 text-secondary">Proses Belajar</h2>
                     <?php get_template_part('template-parts/college/proses-belajar'); ?>
                  </div>
                  <div id="output" class="tk-section">
                     <h2 class="text-3xl lg:text-4xl font-bold mb-5 text-secondary">
                        Output Pendidikan Vokasi di LP3I College
                     </h2>
                     <?php get_template_part('template-parts/college/output'); ?>
                  </div>
                  <div id="kurikulum" class="tk-section">
                     <h2 class="text-3xl lg:text-4xl font-bold mb-5 text-secondary">Kurikulum LP3I College
                     </h2>
                     <?php get_template_part('template-parts/college/kurikulum'); ?>
                  </div>
                  <div id="pilihan-program" class="tk-section">
                     <h2 class="text-3xl lg:text-4xl font-bold mb-5 text-secondary">Pilihan Program Studi LP3I College
                     </h2>
                     <?php get_template_part('template-parts/tentang-kami/pilihan-program'); ?>
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

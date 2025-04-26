<?php
/* Template Name: LP3I College */
?>
<?php get_header();
if (have_posts()) : while (have_posts()) : the_post(); ?>
      <div class="template-clean pb-20" x-data="{menus:[
         { menu:'Jenjang Pendidikan', link:'#jenjang-pendidikan' },
         { menu:'Lokasi', link:'#lokasi' },
         { menu:'Proses Belajar', link:'#proses-belajar' },
         { menu:'Output Lulusan', link:'#output' },
         { menu:'Kurikulum ', link:'#kurikulum' },
         { menu:'Pilihan Program Studi LP3I College', link:'#pilihan-program' },
         {menu:'Apa Itu Politeknik?', link:'#pendidikan-siap-kerja'},
         {menu:'Penyetaraan Jenjang Pendidikan Vokasi', link:'#jenjang-vokasi'},
         {menu:'Jenis-Jenis Pendidikan Tinggi Vokasi',link:'#jenis-pendidikan'},
          {menu:'Penyetaraan  KKNI',link:'#unsur-kompetensi'},
         {menu:'Kompetensi yang Harus Kamu Miliki', link:'#kompetensi'}
        
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
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-20 w-full">
               <div class="lg:col-span-3 mt-20">
                  <div class="sticky-on-scroll hidden lg:block  transition-all duration-300">
                     <div>
                        <?php $logo_college = get_field('logo_college', 'option');
                        if ($logo_college): ?>
                           <img src="<?php echo $logo_college['url']; ?>" alt="<?php echo $logo_college['title']; ?>" class="w-24 h-auto object-contain mb-6">
                        <?php endif; ?>
                        <ul class="menu-samping pb-16">
                           <template x-for="menu in menus">
                              <li :class="{'active': activeMenu === menu.link}">
                                 <a
                                    x-bind:href="menu.link"
                                    x-text="menu.menu"
                                    class="transition-colors duration-300 block  hover:text-primary"></a>
                              </li>
                           </template>
                        </ul>
                        <?php $tombol_hubungi_kami = get_field('tombol_hubungi_kami', 'option'); ?>
                        <a href="<?php echo $tombol_hubungi_kami['url']; ?>" class="btn btn-primary w-full block mt-10 max-w-max"><?php echo $tombol_hubungi_kami['title'];  ?></a>

                     </div>
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
                     <?php get_template_part('template-parts/college/pilihan-program'); ?>
                  </div>

                  <div id="pendidikan-siap-kerja" class="tk-section">
                     <h2 class="text-3xl lg:text-4xl font-bold mb-5 text-secondary">Apa Itu Pendidikan 2 Tahun Siap Kerja?
                     </h2>
                     <?php get_template_part('template-parts/college/apa-itu-pendidikan'); ?>
                  </div>

                  <div id="jenjang-vokasi" class="tk-section">
                     <h2 class="text-3xl lg:text-4xl font-bold mb-5 text-secondary">Penyetaraan Jenjang Pendidikan Vokasi
                     </h2>
                     <?php get_template_part('template-parts/college/jenjang-vokasi'); ?>
                  </div>

                  <div id="jenis-pendidikan" class="tk-section">
                     <h2 class="text-3xl lg:text-4xl font-bold mb-5 text-secondary">Jenis-Jenis Pendidikan Tinggi Vokasi
                     </h2>
                     <?php get_template_part('template-parts/college/jenis-pendidikan'); ?>
                  </div>

                  <div id="unsur-kompetensi" class="tk-section">
                     <h2 class="text-3xl lg:text-4xl font-bold mb-5 text-secondary">Penyetaraan Kandungan Unsur Kompetensi Lulusan Pendidikan 2 Tahun Siap Kerja berdasarkan KKNI
                     </h2>
                     <?php get_template_part('template-parts/college/unsur-kompetensi'); ?>
                  </div>

                  <div id="kompetensi" class="tk-section">
                     <h2 class="text-3xl lg:text-4xl font-bold mb-5 text-secondary">3 Komponen Kompetensi yang Harus Kamu Miliki Menurut KKNI
                     </h2>
                     <?php get_template_part('template-parts/college/kompetensi'); ?>
                  </div>

               </div> <!-- end content -->
            </div>
            <div id="end-sticky" class="pb-20"></div>
         </div>
      </div>
<?php endwhile;
endif; ?>
<?php get_footer(); ?>
<style>

</style>
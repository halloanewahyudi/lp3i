<?php
/* Template Name: Politeknik */
?>
<?php get_header();
if (have_posts()) : while (have_posts()) : the_post(); ?>
      <div class="template-clean pb-20" x-data="{menus:[
         { menu:'Jenjang Pendidikan', link:'#jenjang-pendidikan' },
         { menu:'Lokasi', link:'#lokasi' },
         { menu:'Proses Belajar', link:'#proses-belajar' },
         { menu:'Output Pendidikan Vokasi di LP3I College', link:'#output' },
         { menu:'Kurikulum LP3I College', link:'#kurikulum' },
         { menu:'Pilihan Program Studi LP3I College', link:'#pilihan-program' },
         {menu:'Apa Itu Pendidikan 2 Tahun Siap Kerja?', link:'#pendidikan-siap-kerja'},
         {menu:'Penyetaraan Jenjang Pendidikan Vokasi', link:'#jenjang-vokasi'},
         {menu:'Jenis-Jenis Pendidikan Tinggi Vokasi',link:'#jenis-pendidikan'},
         {menu:'3 Komponen Kompetensi yang Harus Kamu Miliki Menurut KKNI', link:'#kompetensi'},
         {menu:'Penyetaraan Kandungan Unsur Kompetensi Lulusan Pendidikan 2 Tahun Siap Kerja berdasarkan KKNI',link:'#unsur-kompetensi'}
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
                     <?php get_template_part('template-parts/politeknik/jenjang-pendidikan'); ?>
                  </div>

                  <div id="lokasi-politeknik" class="tk-section">
                     <h2 class="text-3xl lg:text-4xl font-bold mb-5 text-secondary">Lokasi</h2>
                     <div class="list-lokasi">
                        <?php get_template_part('template-parts/politeknik/lokasi'); ?>
                     </div>
                  </div>

                  <div id="proses-belajar" class="tk-section">
                     <h2 class="text-3xl lg:text-4xl font-bold mb-5 text-secondary">Proses Belajar</h2>
                     <?php get_template_part('template-parts/politeknik/proses-belajar'); ?>
                  </div>

                  <div id="output" class="tk-section">
                     <h2 class="text-3xl lg:text-4xl font-bold mb-5 text-secondary">
                        Output Pendidikan Vokasi di LP3I College
                     </h2>
                     <?php get_template_part('template-parts/college/output'); ?>
                  </div>

                  <div id="kurikulum" class="tk-section">
                     <h2 class="text-3xl lg:text-4xl font-bold mb-5 text-secondary">Kurikulum Politeknik LP3I dan Politeknik Group</h2>
                     <?php get_template_part('template-parts/politeknik/kurikulum'); ?>
                  </div>

                  <div id="pilihan-program" class="tk-section">
                     <h2 class="text-3xl lg:text-4xl font-bold mb-5 text-secondary">Pilihan Program Studi di Politeknik LP3I
                     </h2>
                     <?php get_template_part('template-parts/politeknik/pilihan-program'); ?>
                  </div>

                  <div id="pendidikan-siap-kerja" class="tk-section">
                     <h2 class="text-3xl lg:text-4xl font-bold mb-5 text-secondary">Apa itu Politeknik ?
                     </h2>
                     <?php get_template_part('template-parts/politeknik/apa-itu-politeknik'); ?>
                  </div>

                  <div id="jenjang-vokasi" class="tk-section">
                     <h2 class="text-3xl lg:text-4xl font-bold mb-5 text-secondary">Penyetaraan Jenjang Pendidikan Vokasi
                     </h2>
                     <?php get_template_part('template-parts/college/jenjang-vokasi'); ?>
                  </div>

                  <div id="jenis-pendidikan" class="tk-section">
                     <h2 class="text-3xl lg:text-4xl font-bold mb-5 text-secondary">Jenis-Jenis Pendidikan Tinggi Vokasi
                     </h2>
                     <?php get_template_part('template-parts/politeknik/jenis-vokasi'); ?>
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
            <div id="end-sticky"></div>
         </div>
      </div>
<?php endwhile;
endif; ?>
<?php get_footer(); ?>
<style>

</style>
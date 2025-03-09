<?php
$tabs = get_field('tabs');
$tab = $tabs['tab'];
?>


<section class="mb-24">
    <div class="container" x-data="{ activeTab: 0 }">
        <div class="tabs">
            <div class="tabs__nav flex flex-wrap justify-between border-b border-secondary mb-10">
                <?php foreach ($tab as $key => $tab_item) : ?>
                    <div
                        id="tab<?php echo $key; ?>"
                        class="tabs__nav__item p-2 text-2xl text-secondary cursor-pointer"
                        :class="activeTab === <?php echo $key; ?> ? 'font-bold border-b-4 border-secondary' : ''"
                        @click="activeTab = <?php echo $key; ?>">
                        <?php echo $tab_item['title']; ?>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="tabs__content  text-xl p-6 lg:p-10 bg-light rounded-xl">
                <?php foreach ($tab as $key => $tab_item) : ?>
                    <div
                        id="tab<?php echo $key; ?>Content"
                        class="tabs__content__item"
                        x-show="activeTab === <?php echo $key; ?>"
                        x-transition>
                        <div class="mb-10">
                            <?php echo $tab_item['tab_content']['content']; ?>
                            <div class="flex justify-end">
                                <a href="<?php echo $tab_item['right_link']['link_url']; ?>" class="text-secondary font-bold">
                                    <?php echo $tab_item['right_link']['link_text']; ?>
                                </a>
                            </div>
                        </div>
                        <?php if ($tab_item['sub_title']): ?>
                            <hr class="mb-10 text-secondary opacity-30">
                            <div>
                                <h5 class="mb-5 text-secondary"><?php echo $tab_item['sub_title']; ?></h5>
                                <div class="grid grid-cols-1 lg:grid-cols-4 gap-10">
                                    <div class="lg:col-span-1">
                                        <img src="<?php echo $tab_item['logo_lp3i']['url']; ?>" alt="<?php echo $tab_item['logo_lp3i']['title']; ?>" class="w-24">
                                    </div>
                                    <div class="lg:col-span-3 ">
                                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                                            <?php foreach ($tab_item['list_program'] as $list): ?>
                                                <div>
                                                    <div class="flex gap-2">
                                                        <i class="bi bi-arrow-right-circle-fill mt-1 text-secondary"></i>
                                                        <div>
                                                            <h5 class="text-secondary"> <?php echo $list['titel_list']; ?> </h4>
                                                                <?php foreach ($list['list_item'] as $key => $value): ?>
                                                                    <a href="<?php echo $value['link'] ?>" class="text-primary text-base">
                                                                        <?php echo $value['item']; ?>
                                                                    </a>
                                                                <?php endforeach; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php else: ?>
                            <div class="">
                                <h5 class="text-secondary mb-10">Apakah Anda tertarik mengikuti program <span class="text-tertiary font-extrabold">Kelas Karyawan </span>  dari LP3I Group? </h5>
                               <div class="form-kelas-karyawan">
                               <?php echo do_shortcode('[contact-form-7 id="8f88add" title="Kelas Karyawan"]'); ?>
                               </div>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

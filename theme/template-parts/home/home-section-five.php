<?php
$home_section_5 = get_field('home_section_5');
$home_s5_judul_section = $home_section_5['home_s5_judul_section'];
$home_s5_image = $home_section_5['home_s5_image'];
$background = $home_section_5['background'];
?>
<section class="mb-24" style="background:url('<?php echo $background; ?>')no-repeat center/cover;">
    <div class="container">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
            <div class="p-6">
                <h2 class="text-4xl font-bold mb-16 text-white" data-aos="fade-up" data-aos-duration="700">
                    <?php echo $home_s5_judul_section; ?>
                </h2>

                <!-- Pencarian Lokasi Kampus -->
                <div x-data="autocomplete()" class="relative">
                    <div class="relative h-max">
                        <input
                            type="text"
                            placeholder="Cari kampus di daerahmu..."
                            x-model="query"
                            @input="debouncedSearch"
                            @focus="open = true"
                            @keydown.arrow-down="moveDown()"
                            @keydown.arrow-up="moveUp()"
                            @keydown.enter="goToLink()"
                            @click.away="open = false"
                            class="w-full p-2 border border-gray-300 text-white ring-2 rounded-full focus:outline-none">
                        <!-- Indikator Loading -->
                        <div x-show="loading" class="absolute right-2 top-1/2 transform -translate-y-1/2 text-white p-2 rounded-full ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                                <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    <path stroke-dasharray="16" stroke-dashoffset="16" d="M12 3c4.97 0 9 4.03 9 9">
                                        <animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="16;0" />
                                        <animateTransform attributeName="transform" dur="1.5s" repeatCount="indefinite" type="rotate" values="0 12 12;360 12 12" />
                                    </path>
                                    <path stroke-dasharray="64" stroke-dashoffset="64" stroke-opacity=".3" d="M12 3c4.97 0 9 4.03 9 9c0 4.97 -4.03 9 -9 9c-4.97 0 -9 -4.03 -9 -9c0 -4.97 4.03 -9 9 -9Z">
                                        <animate fill="freeze" attributeName="stroke-dashoffset" dur="1.2s" values="64;0" />
                                    </path>
                                </g>
                            </svg>
                        </div>
                    </div>

                    <!-- Hasil Pencarian -->
                    <ul x-show="open && results.length > 0" class="autocomplete-list rounded-xl overflow-x-hidden">
                        <template x-for="(item, index) in results" :key="item.slug">
                            <li
                                class="autocomplete-item"
                                :class="{'bg-primary text-white': index === activeIndex}"
                                @click="selectItem(item)"
                                @mouseover="activeIndex = index">
                                <span x-text="item.title.rendered"></span>
                            </li>
                        </template>
                    </ul>
                </div>
                <!-- Akhir Pencarian -->
            </div>
            <div class="relative lg:-bottom-12 p-6">
                <img src="<?php echo $home_s5_image; ?>" alt="<?php echo $home_s5_judul_section; ?>" class="w-full rounded-xl">
            </div>
        </div>
    </div>
</section>

<script>
    function autocomplete() {
        return {
            query: '',
            results: [],
            open: false,
            loading: false,
            activeIndex: -1, // Menyimpan indeks item yang sedang dipilih
            timeout: null,

            debouncedSearch() {
                clearTimeout(this.timeout);
                this.timeout = setTimeout(() => {
                    this.search();
                }, 500);
            },

            async search() {
                if (this.query.length < 2) {
                    this.results = [];
                    this.open = false;
                    return;
                }

                this.loading = true;
                try {
                    let res = await fetch(`<?php echo site_url(); ?>/wp-json/wp/v2/campus?search=${encodeURIComponent(this.query)}&_fields=title,slug`);
                    let data = await res.json();

                    // Filter data yang memiliki slug
                    this.results = data.filter(item => item.slug !== undefined && item.slug !== null);

                    this.open = this.results.length > 0;
                } catch (error) {
                    console.error("Error fetching data:", error);
                    this.results = [];
                    this.open = false;
                }
                this.loading = false;
            },

            selectItem(item) {
                this.query = item.title.rendered;
                this.open = false;
                window.location.href = `<?php echo site_url(); ?>/campus/${item.slug}`;
            },

            moveDown() {
                if (this.activeIndex < this.results.length - 1) {
                    this.activeIndex++;
                }
            },

            moveUp() {
                if (this.activeIndex > 0) {
                    this.activeIndex--;
                }
            },

            goToLink() {
                if (this.activeIndex >= 0 && this.activeIndex < this.results.length) {
                    this.selectItem(this.results[this.activeIndex]);
                }
            }
        }
    }
</script>

<style>
    .autocomplete-list {
        position: absolute;
        background: white;
        border: 1px solid #ccc;
        max-height: 200px;
        overflow-y: auto;
        width: 100%;
        z-index: 10;
    }

    .autocomplete-item {
        padding: 8px;
        cursor: pointer;
    }

    .autocomplete-item:hover {
        @apply bg-secondary text-white;
    }
</style>
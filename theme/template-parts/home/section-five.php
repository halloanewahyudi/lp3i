<?php
$home_section_5 = get_field('home_section_5');
if ($home_section_5):
    $home_s5_judul_section = $home_section_5['home_s5_judul_section'];
    $home_s5_image = $home_section_5['home_s5_image'];
    $background = $home_section_5['background'];
?>
    <section class="section-5 pt-20 pb-10 mb-24  bg-no-repeat bg-cover w-full" style="background-image: url('<?php echo $background; ?>');">
        <div class="container ">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-10">
                <div class="kiri flex flex-col justify-center px-10">
                    <h4 class="text-primary-50 mb-5 text-left">
                        <?php echo $home_s5_judul_section; ?>
                    </h4>
                    <div x-data="searchComponent()" class="relative w-full max-w-screen-md mx-auto">
                        <div class="relative ">
                            <input
                                type="text"
                                x-model="query"
                                @input.debounce.300="search()"
                                class="w-full p-2 border rounded-full focus:outline-none focus:ring-2 focus:ring-primary-50"
                                placeholder="Cari Kampus...">
                            <template x-if="loading">
                                <div x-show="loading" class=" right-2 top-2 text-gray-500">
                                    🔄 Loading...
                                </div>
                            </template>


                            <i x-show="!loading" class="bi bi-search-heart text-xl absolute top-1/2 -translate-y-1/2 right-3 text-tertiary"></i>
                        </div>

                        <div class="mt-2 text-sm text-red-500" x-text="errorMessage" x-show="errorMessage"></div>
                        <ul x-show="results.length > 0" class="absolute w-full bg-white border rounded-xl overflow-hidden mt-1 shadow-lg">
                            <template x-for="item in results" :key="item.id">
                                <li class="p-2 hover:bg-gray-100">
                                    <a :href="item.link" x-text="item.title.rendered"></a>
                                </li>
                            </template>
                        </ul>
                    </div>
                </div>
                <div class="kanan -mb-20 -bottom-20">
                    <img class="fade-up relative w-full h-auto rounded-xl" src="<?php echo $home_s5_image; ?>" alt="">
                </div>
            </div>
        </div>
        </div>
    </section>
<?php endif; ?>

<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('searchComponent', () => ({
            query: '',
            results: [],
            loading: false,
            errorMessage: '',

            search() {
                if (this.query.length < 3) {
                    this.results = [];
                    this.errorMessage = '';
                    return;
                }

                this.loading = true; // Tampilkan loading
                this.errorMessage = ''; // Reset error

                fetch(`<?php echo site_url(); ?>/wp-json/wp/v2/campus?_fields=id,title&search=${this.query}`)
                    .then(res => {
                        if (!res.ok) {
                            throw new Error(`HTTP Error! Status: ${res.status}`);
                        }
                        return res.json();
                    })
                    .then(data => {
                        this.results = data;
                        this.loading = false; // Sembunyikan loading setelah data masuk
                    })
                    .catch(error => {
                        this.results = [];
                        this.errorMessage = "Terjadi kesalahan saat mengambil data.";
                        console.error("Fetch Error:", error);
                        this.loading = false; // Pastikan loading selalu berhenti
                    });
            }
        }));
    });
</script>
<div class="mx-auto max-w-7xl">
    <div class="grid grid-cols-1 md:grid-cols-12 h-[200px] md:h-[350px] lg:h-[400px]">
        <div class="col-span-1 sm:col-span-6 ">
            <div class="lg:pt-12 pb-4 sm:pb-2 px-4 sm:px-8"><h1
                        class="bg-gradient-to-r from-pblue-900 to-pred-900 bg-clip-text text-transparent text-3xl md:text-3xl lg:text-4xl mt-4 tracking-tight font-extrabold text-pblue-900 sm:mt-5 sm:text-4xl lg:mt-6 xl:text-4xxl capitalize">
                    Vacation packages</h1>
                <p class="prose text-sm sm:text-lg md:max-w-sm font-semibold text-slate-700 mt-2">
					All-inclusive and affordable vacations
				</p></div>
        </div>
        <div class="hidden sm:flex col-span-6">
            <div class="relative pb-8 bg-white sm:pb-16 md:pb-20">
                <svg class="block absolute right-0 inset-y-0 h-full w-48 text-white transform translate-x-1/2"
                     fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
                    <polygon points="50,0 100,0 50,100 0,100"></polygon>
                </svg>
            </div>
            <div class="-mt-40 lg:-mt-10"><img
                        class="max-w-7xl object-cover sm:h-72 md:h-1/2 lg:block lg:w-full lg:h-full"
                        src="<?php echo THEME_IMAGE_HOME . '/flights-section.jpg'?>" alt=""></div>
        </div>
    </div>
</div>

<section class="relative max-w-7xl  -mt-5 mx-auto xl:-mt-32 lg:-mt-28 md:-mt-8 px-0 md:px-4 pb-12 lg:px-6 lg:mb-6"
        aria-labelledby="contact-heading">
    <?php echo do_shortcode('[tr_search_by_vue]'); ?>
</section>

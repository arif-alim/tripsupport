<style>
    
    h1 {
        background: -webkit-linear-gradient(left, #00246B , #e11d48);
        background: -o-linear-gradient(right, #00246B, #e11d48);
        background: -moz-linear-gradient(right, #00246B, #e11d48);
        background: linear-gradient(to right, #00246B , #e11d48); 
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        }
</style>

<div class="mx-auto max-w-7xl">
    <div class="grid grid-cols-1 sm:grid-cols-12 sm:h-[400px]">
        <div class="col-span-1 sm:col-span-6">
            <div class="bnpl-heading lg:pt-12 pb-4 sm:pb-2 px-4 sm:px-8 z-10 "><h1
                        class="text-3xl mt-4 tracking-tight font-extrabold sm:mt-5 sm:text-6xl lg:mt-6 xl:text-4xxl capitalize">
                    <span class="flex">Book Now Pay Later</span></h1>
                <p class="prose text-sm sm:text-lg max-w-sm font-semibold text-slate-700 mt-2">
                    No Credit Check Needed.</p></div>
        </div>
        <div class="hidden sm:flex col-span-6">
            <div class="-mt-10"><img
                        class="hidden h-56 max-w-7xl object-cover sm:h-72 md:h-full lg:block lg:w-full lg:h-full "
                        src="<?php echo THEME_IMAGE_HERO . '/hotair-bg.jpg' ?>" alt=""></div>
        </div>
    </div>
</div>

<section class="relative max-w-7xl -mt-5 mx-auto xl:-mt-32 lg:-mt-28 md:-mt-8 px-0 md:px-4 pb-12 lg:px-8 lg:mb-6"
         aria-labelledby="contact-heading">
    <?php echo do_shortcode('[tr_search_by_vue]') ?>
</section>


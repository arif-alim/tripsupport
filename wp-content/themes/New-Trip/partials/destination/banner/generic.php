<div class="relative bg-slate-900 -mt-1">
	
	<div class="block relative mx-auto px-4 py-12 sm:max-w-7xl sm:px-6 sm:py-20 md:py-28 lg:px-8 lg:pb-44 lg:pt-24">
		<div class="md:mr-auto md:pr-10 w-full md:w-1/2">
			<p class="mt-2 text-white text-3xl font-extrabold sm:text-4xl">
				<?php the_title() ?>
			</p>
		</div>
	</div>
	<div class="block relative h-56 bg-white sm:h-72 md:absolute md:right-0 md:top-0 md:h-full md:w-1/2">
		<img class="w-full h-full object-cover" src="<?php echo get_the_post_thumbnail_url( get_the_ID(), '1536x1024' ); ?>" alt="vacation deals">
		<div aria-hidden="true" class="absolute inset-x-0 top-0 h-32 bg-gradient-to-b from-slate-900 xl:inset-y-0 xl:left-0 xl:h-full xl:w-92 xl:bg-gradient-to-r"></div>
	</div>
</div>



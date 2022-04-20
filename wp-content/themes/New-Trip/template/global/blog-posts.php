<div class="bg-gray-50">
    <div class="max-w-7xl mx-auto py-4 px-4 sm:py-12 sm:px-6 lg:px-8 mt-6 sm:mt-2">
        <div class="sm:flex sm:items-baseline sm:justify-between"><h1
                class="text-2xl tracking-tight font-extrabold text-gray-900 sm:text-3xl md:text-4xl"><span
                    class="block xl:inline">Inspirational Stories from Experts</span>
            </h1>

            <a href="<?php echo home_url() ?>/blog"
               class="hidden text-sm font-semibold text-rose-600 hover:text-pblue-900 sm:block">Browse all Blog
                Posts<span aria-hidden="true">→</span></a></div>
        <div class="max-w-5xl">
			<p class="mt-2 text-base text-gray-700 sm:mt-3  md:mt-3 md:text-md lg:mx-0">
				The world is filled with many wonderful and exciting places great for spending a long
				overdue vacation. Our goal is to make vacationing in these wonderful and exciting places
				more affordable and accessible to every Canadian through our book now, pay later payment
				plan.
			</p>
		</div></div>

    <div class="mx-auto max-w-md px-4 grid gap-8 sm:max-w-lg sm:px-6 md:grid-cols-2 md:max-w-7xl lg:px-8 lg:grid-cols-3 lg:max-w-7xl pb-16">
        <?php
        $args_all = array(
            'post_type' => 'post',
            'posts_per_page' => 3,
            'cat'=>'-1'

        );
        $query_all = new WP_Query($args_all);
        if ( $query_all->have_posts() ) :
        while ($query_all->have_posts()):
        $query_all->the_post(); ?>
        <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
            <div class="flex-shrink-0"><img class="h-48 w-full object-cover" src="<?php the_post_thumbnail_url()?>" alt="">
            </div>
            <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                <div class="flex-1"><p class="text-sm font-medium text-pblue-600"><a href="<?php $cat = get_the_category(); echo get_category_link( $cat[0]->cat_ID ) ; ?>"
                                                                                     class="hover:underline"><?php echo $cat[0]->name; ?> </a>
                    </p>
                    <a href="<?php the_permalink() ?>" class="block mt-2">
                        <p class="text-lg lg:text-lg font-semibold text-gray-900">
                            <?php the_title() ?>
                        </p>
                        <p class="mt-3 text-tiny text-gray-500 line-clamp-3">
                            <?php echo strip_tags(get_the_excerpt()); ?>
                        </p>
                    </a>
                </div>
                <div class="mt-6 relative items-center ">
                    <div class="text-sm text-gray-500 flex sm:justify-between">
                            <p class="text-sm font-medium text-gray-900">
                                <a href="#" class="hover:underline text-pblue-600"><?php the_author() ?></a>
                            </p>
                            <time datetime="2020-03-16"><?php the_time('M j , Y') ?></time>
                    </div>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
        <?php endif;
        wp_reset_postdata();
        ?>
        <div class="sm:hidden"><a href="javascript:void(0)"
                                  class="block text-sm font-semibold text-rose-600 hover:text-rose-400">View all
                blog posts<span aria-hidden="true">→</span></a></div>
    </div>
</div>

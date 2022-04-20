<?php /* Template Name: Hotel */ ?>
<?php get_header() ?>
    <main>
        <?php get_template_part('template/hotel/section-search') ?>
        <?php get_template_part('template/hotel/hotel-deals') ?>
        <?php get_template_part('template/global/blog-posts') ?>
        <?php get_template_part('template/global/newsletter') ?>	
		<?php get_template_part('template/hotel/hotel-destinations') ?>
    </main>
<?php get_footer() ?>
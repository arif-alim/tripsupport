<?php /* Template Name: Vacation */ ?>
<?php get_header() ?>
    <main>
        <?php get_template_part('template/vacation/section-search') ?>
        <?php get_template_part('template/vacation/popular-vacations') ?>
        <?php get_template_part('template/global/blog-posts') ?>
        <?php get_template_part('template/global/newsletter') ?>
    </main>
<?php get_footer() ?>
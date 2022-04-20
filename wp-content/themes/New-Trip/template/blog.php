<?php /* Template Name: Blog */ ?>
<?php get_header() ?>
<main>
    <div class="bg-white">
        <?php get_template_part('template/blog/section-search') ?>
        <?php get_template_part('template/blog/cta-section') ?>
        <?php get_template_part('template/blog/blog-posts') ?>
        <?php get_template_part('template/global/newsletter') ?>
    </div>
</main>
<?php get_footer() ?>
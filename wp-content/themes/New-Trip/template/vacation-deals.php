<?php /* Template Name: Vacation Deals */ ?>
<?php get_template_part('/partials/global/tailwind/styles') ?>
<?php get_header(); ?>
<main>
  
  <!-- Banner Section -->
  <?php get_template_part('/partials/vacation/banner/generic') ?>
  
  <!-- Booking Widget Section -->
  <section class="relative max-w-7xl -mt-5 mx-auto xl:-mt-32 lg:-mt-28 md:-mt-8 px-0 md:px-4 pb-12 lg:px-6 lg:mb-6" aria-labelledby="contact-heading">
    <?php echo do_shortcode('[tr_search_by_vue]') ?>
  </section>

  <!-- Vacation Cards -->
  <div class="relative bg-white">
    <div class="relative max-w-7xl mx-auto mt-4 mb-12 lg:mb-16 lg:mt-8">
      <?php $search_url = get_post_meta($post->ID, 'vacation_search_url', true); echo (!empty($search_url)) ? do_shortcode('[ts_vacation_single_page]') : do_shortcode('[ts-vacation-city]');  ?>
    </div>
  </div>

  <!-- Main Content -->
  <div class="mx-auto max-w-7xl bg-white">
    <section class="pt-20 pb-12  relative overflow-hidden ">
      <div class="container">
        <!-- Page Specific Content goes here -->
          <?php switch ($pagename) {
            case 'adults-only-resorts':
              get_template_part( '/partials/vacation/content/adults-only-resorts');
              break;
            case 'all-inclusive-vacations':
              get_template_part( '/partials/vacation/content/all-inclusive-vacations');
              break;
            case 'best-family-resorts':
              get_template_part( '/partials/vacation/content/best-family-resorts');
              break;
            case 'luxury-vacations':
              get_template_part( '/partials/vacation/content/luxury-vacations');
              break;
            case 'seasonal-vacations':
              get_template_part( '/partials/vacation/content/seasonal-vacations');
              break;
            case 'tour-operators':
              get_template_part( '/partials/vacation/content/tour-operators');
              break;
            
            default:
              get_template_part( '/partials/vacation/content/generic');
              break;
            }?>
  
          <!-- FAQs -->
          <?php get_template_part('partials/vacation/faqs/generic'); ?>
        </div>
      </div>
    </section>
  </div>
  <!-- Explore Links (internal pages) -->
  <?php get_template_part('partials/vacation/explore/generic'); ?>
  
  <!-- Newsletter -->
  <?php get_template_part('partials/global/newsletter') ?>
</main>

<?php get_footer() ?>
<?php get_template_part('partials/global/tailwind/scripts') ?>
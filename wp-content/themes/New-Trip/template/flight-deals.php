<?php /* Template Name: Flight Deals */ ?>
<?php get_template_part('/partials/global/tailwind/styles') ?>
<?php get_header(); ?>
<main>
  
  <!-- Banner Section -->
  <?php get_template_part('/partials/flight/banner/generic') ?>
  
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
            case 'flights-to-california':
              get_template_part( '/partials/flight/content/california');
              break;
            case 'flights-to-delhi':
              get_template_part( '/partials/flight/content/delhi');
              break;
            case 'flights-to-hongkong':
              get_template_part( '/partials/flight/content/hongkong');
              break;
            case 'flights-to-london':
              get_template_part( '/partials/flight/content/london');
              break;
            case 'flights-to-paris':
              get_template_part( '/partials/flight/content/paris');
              break;
            case 'flights-to-tehran':
              get_template_part( '/partials/flight/content/tour-tehran');
              break;
            
            default:
              get_template_part( '/partials/flight/content/generic');
              break;
            }?>
  
          <!-- FAQs -->
          <?php get_template_part('partials/flight/faqs/generic'); ?>
        </div>
      </div>
    </section>
  </div>
  <!-- Explore Links (internal pages) -->
  <?php get_template_part('partials/flight/explore/generic'); ?>
  
  <!-- Newsletter -->
  <?php get_template_part('partials/global/newsletter') ?>
</main>

<?php get_footer() ?>
<?php get_template_part('partials/global/tailwind/scripts') ?>
<?php /* Template Name: Hotel Deals */ ?>
<?php get_template_part('/partials/global/tailwind/styles') ?>
<?php get_header(); ?>
<main>
  
  <!-- Banner Section -->
  <?php get_template_part('/partials/hotel/banner/generic') ?>
  
  <!-- Booking Widget Section -->
  <section class="relative max-w-7xl -mt-5 mx-auto xl:-mt-32 lg:-mt-28 md:-mt-8 px-0 md:px-4 pb-12 lg:px-6 lg:mb-6" aria-labelledby="contact-heading">
    <?php echo do_shortcode('[tr_search_by_vue]') ?>
  </section>

  <!-- Hotel Deals Cards -->
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
            case 'hotels-in-australia':
              get_template_part( '/partials/hotel/content/australia');
              break;
            case 'hotels-in-caribbean':
              get_template_part( '/partials/hotel/content/caribbean');
              break;
            case 'domestic-hotels':
              get_template_part( '/partials/hotel/content/domestic');
              break;
            case 'hotels-in-europe':
              get_template_part( '/partials/hotel/content/europe');
              break;
            case 'hotels-in-middle-east':
              get_template_part( '/partials/hotel/content/middle-east');
              break;
            case 'hotels-in-usa':
              get_template_part( '/partials/hotel/content/usa');
              break;
            
            default:
              get_template_part( '/partials/hotel/content/generic');
              break;
            }?>
  
          <!-- FAQs -->
          <?php get_template_part('partials/hotel/faqs/generic'); ?>
        </div>
      </div>
    </section>
  </div>
  <!-- Explore Links (internal pages) -->
  <?php get_template_part('partials/hotel/explore/generic'); ?>
  
  <!-- Newsletter -->
  <?php get_template_part('partials/global/newsletter') ?>
</main>

<?php get_footer() ?>
<?php get_template_part('partials/global/tailwind/scripts') ?>
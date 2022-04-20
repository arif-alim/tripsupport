<?php /* Template Name: Destinations */ ?>
<?php get_template_part('/partials/global/tailwind/styles') ?>
<?php get_header(); ?>
<main>

  <!-- Banner Section -->
  <?php switch ($post->post_name) {
    case 'mexico':
      get_template_part( '/partials/destination/banner/mexico');
      break;
    case 'cuba':
      get_template_part( '/partials/destination/banner/cuba');
      break;
    case 'dominican-republic':
      get_template_part( '/partials/destination/banner/dominican');
      break;
    case 'jamaica':
      get_template_part( '/partials/destination/banner/jamaica');
      break;
    case 'hawaii':
      get_template_part( '/partials/destination/banner/hawaii');
      break;
    case 'aruba':
      get_template_part( '/partials/destination/banner/aruba');
      break;
    
    default:
      get_template_part( '/partials/destination/banner/generic');
      break;
    } 
  ?>

  <!-- Booking Widget Section -->
  <section class="relative max-w-7xl -mt-5 mx-auto xl:-mt-32 lg:-mt-28 md:-mt-8 px-0 md:px-4 pb-12 lg:px-6 lg:mb-6" aria-labelledby="contact-heading">
    <?php echo do_shortcode('[tr_search_by_vue]') ?>
  </section>

  <!-- Destinations Card -->
  <!-- <div class="relative bg-white">
    <div class="relative max-w-7xl mx-auto mt-4 mb-12 lg:mb-16 lg:mt-8">
      <?php $search_url = get_post_meta($post->ID, 'vacation_search_url', true); echo do_shortcode('[ts-vacation-city]');  ?>
    </div>
  </div> -->

  <!-- Page Specific Content goes here -->
  <?php switch ($post->post_name) {
    case 'mexico':
      get_template_part( '/partials/destination/content/mexico');
      break;
    case 'cuba':
      get_template_part( '/partials/destination/content/cuba');
      break;
    case 'dominican-republic':
      get_template_part( '/partials/destination/content/dominican');
      break;
    case 'jamaica':
      get_template_part( '/partials/destination/content/jamaica');
      break;
    case 'hawaii':
      get_template_part( '/partials/destination/content/hawaii');
      break;
    case 'aruba':
      get_template_part( '/partials/destination/content/aruba');
      break;
    
    default:
      get_template_part( '/partials/destination/content/generic');
      break;
    } 
  ?>


  <!-- FAQs -->
  <?php switch ($post->post_name) {
    case 'mexico':
      get_template_part( '/partials/destination/faqs/mexico');
      break;
    case 'cuba':
      get_template_part( '/partials/destination/faqs/cuba');
      break;
    case 'dominican-republic':
      get_template_part( '/partials/destination/faqs/dominican');
      break;
    case 'jamaica':
      get_template_part( '/partials/destination/faqs/jamaica');
      break;
    case 'hawaii':
      get_template_part( '/partials/destination/faqs/hawaii');
      break;
    case 'aruba':
      get_template_part( '/partials/destination/faqs/aruba');
      break;
    
    default:
      get_template_part( '/partials/destination/faqs/generic');
      break;
    } 
  ?>

  <!-- Explore Links (internal pages) -->
  <?php switch ($post->post_name) {
    case 'mexico':
      get_template_part( '/partials/destination/explore/mexico');
      break;
    case 'cuba':
      get_template_part( '/partials/destination/explore/cuba');
      break;
    case 'dominican-republic':
      get_template_part( '/partials/destination/explore/dominican');
      break;
    case 'jamaica':
      get_template_part( '/partials/destination/explore/jamaica');
      break;
    case 'hawaii':
      get_template_part( '/partials/destination/explore/hawaii');
      break;
    case 'aruba':
      get_template_part( '/partials/destination/explore/aruba');
      break;
    
    default:
      get_template_part( '/partials/destination/explore/generic');
      break;
    } 
  ?>
  
  <!-- Newsletter -->
  <?php get_template_part('partials/global/newsletter') ?>
</main>

<?php get_footer() ?>
<?php get_template_part('partials/global/tailwind/scripts') ?>
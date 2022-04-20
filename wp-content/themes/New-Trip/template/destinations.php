<?php /* Template Name: Destinations */ ?>
<?php get_template_part('/partials/global/tailwind/styles') ?>
<?php get_header(); ?>
<main>
  
  <!-- Banner Section -->
  <?php get_template_part('/partials/destination/banner/generic') ?>
  
  <!-- Booking Widget Section -->
  <section class="relative max-w-7xl -mt-5 mx-auto xl:-mt-32 lg:-mt-28 md:-mt-8 px-0 md:px-4 pb-12 lg:px-6 lg:mb-6" aria-labelledby="contact-heading">
    <?php echo do_shortcode('[tr_search_by_vue]') ?>
  </section>

  <!-- Main Content -->
  <div class="mx-auto max-w-7xl bg-white">
    <section class="pt-20 pb-12  relative overflow-hidden ">
      <div class="container">
        <!-- Page Specific Content goes here -->
          <?php switch ($pagename) {
            case 'aruba':
              get_template_part( '/partials/destination/content/aruba');
              break;
            case 'cuba':
              get_template_part( '/partials/destination/content/cuba');
              break;
            case 'dominican-republic':
              get_template_part( '/partials/destination/content/dominican');
              break;
            case 'hawaii':
              get_template_part( '/partials/destination/content/hawaii');
              break;
            case 'jamaica':
              get_template_part( '/partials/destination/content/jamaica');
              break;
            case 'mexico':
              get_template_part( '/partials/destination/content/mexico');
              break;
            
            default:
              get_template_part( '/partials/destination/content/generic');
              break;
            }?>
  
          <!-- FAQs -->
          <?php get_template_part('partials/destination/faqs/generic'); ?>
        </div>
      </div>
    </section>
  </div>
  <!-- Explore Links (internal pages) -->
  <?php get_template_part('partials/destination/explore/generic'); ?>
  
  <!-- Newsletter -->
  <?php get_template_part('partials/global/newsletter') ?>
</main>

<?php get_footer() ?>
<?php get_template_part('partials/global/tailwind/scripts') ?>
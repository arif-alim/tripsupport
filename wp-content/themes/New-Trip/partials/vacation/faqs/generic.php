<?php 
  $adults_faqs = array(
    array(
      "Adults Only Resorts Question #1" => "<p>Lorem ipsum dolor sit amet, <b>consectetur adipiscing elit</b>, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> <p> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
      "Adults Only Resorts Question #2" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>",
      "Adults Only Resorts Question #3" => "Adults Only Resorts Answer #3",
      "Adults Only Resorts Question #4" => "Adults Only Resorts Answer #4",
      "Adults Only Resorts Question #5" => "Adults Only Resorts Answer #5",
      "Adults Only Resorts Question #6" => "Adults Only Resorts Answer #6",
    ),
  );

  $inclusive_faqs = array(
    array(
      "All Inclusive Resorts Question #1" => "All Inclusive Resorts Answer #1",
      "All Inclusive Resorts Question #2" => "All Inclusive Resorts Answer #2",
      "All Inclusive Resorts Question #3" => "All Inclusive Resorts Answer #3",
      "All Inclusive Resorts Question #4" => "All Inclusive Resorts Answer #4",
      "All Inclusive Resorts Question #5" => "All Inclusive Resorts Answer #5",
      "All Inclusive Resorts Question #6" => "All Inclusive Resorts Answer #6",
    ),
  );

  $family_faqs = array(
    array(
      "Best Family Resorts Question #1" => "Best Family Resorts Answer #1",
      "Best Family Resorts Question #2" => "Best Family Resorts Answer #2",
      "Best Family Resorts Question #3" => "Best Family Resorts Answer #3",
      "Best Family Resorts Question #4" => "Best Family Resorts Answer #4",
      "Best Family Resorts Question #5" => "Best Family Resorts Answer #5",
      "Best Family Resorts Question #6" => "Best Family Resorts Answer #6",
    ),
  );

  $luxury_faqs = array(
    array(
      "Luxury Vacations Question #1" => "Luxury Vacations Answer #1",
      "Luxury Vacations Question #2" => "Luxury Vacations Answer #2",
      "Luxury Vacations Question #3" => "Luxury Vacations Answer #3",
      "Luxury Vacations Question #4" => "Luxury Vacations Answer #4",
      "Luxury Vacations Question #5" => "Luxury Vacations Answer #5",
      "Luxury Vacations Question #6" => "Luxury Vacations Answer #6",
    ),
  );

  $seasonal_faqs = array(
    array(
      "Seasonal Vacations Question #1" => "Seasonal Vacations Answer #1",
      "Seasonal Vacations Question #2" => "Seasonal Vacations Answer #2",
      "Seasonal Vacations Question #3" => "Seasonal Vacations Answer #3",
      "Seasonal Vacations Question #4" => "Seasonal Vacations Answer #4",
      "Seasonal Vacations Question #5" => "Seasonal Vacations Answer #5",
      "Seasonal Vacations Question #6" => "Seasonal Vacations Answer #6",
    ),
  );

  $tour_faqs = array(
    array(
      "Tehran Question #1" => "Tehran Answer #1",
      "Tehran Question #2" => "Tehran Answer #2",
      "Tehran Question #3" => "Tehran Answer #3",
      "Tehran Question #4" => "Tehran Answer #4",
      "Tehran Question #5" => "Tehran Answer #5",
      "Tehran Question #6" => "Tehran Answer #6",
    ),
  );
?>


<div class="mx-auto max-w-7xl bg-white">
  <section class="pt-16 relative overflow-hidden px-4">
    <div class="container">
      <div class="d-flex d-flex-wrap">
        <div class="w-full">
          <div class="mx-auto mb-6 lg:mb-10">
            <span class="font-normal text-tiny block text-rose-600">
              FAQs
            </span>
            <h2
              class="font-extrabold text-xl sm:text-3xl text-gray-900 mb-4"
            >
              <?php the_title(); ?>, Frequently Asked Questions
            </h2>
            <p class="sm:text-base text-tiny text-body-color">
              See below for frequently asked questions.
            </p>
          </div>
        </div>
      </div>
      <div class="flex">
        <div class="w-full ">
          <div class="accordion" id="accordionExample5">
            <!-- Adults Only Resorts Faqs Links -->
            <?php if ($pagename == 'adults-only-resorts') { ?>
              <?php $num = 0;
              $ques_id = "adultsQone";
              $bs_target = "#adultsOne";
              $aria_controls = "adultsOne";
              $ans_id = "adultsOne";
              $labelledby = "adultsQone";
              
              foreach($adults_faqs as $faq)
              $num++; {?>
                <?php foreach ($faq as $ques => $ans) {?>
                  <div class="accordion-item bg-white border border-gray-200">
                    <h2 class="accordion-header mb-0 font-semibold" id="<?php echo $ques_id++ ?>">
                      <button 
                      class="accordion-button relative collapsed flex items-center w-full p-[16px] text-base text-gray-800 text-left bg-white border-0 rounded-none transition focus:outline-none" 
                      type="button" 
                      data-bs-toggle="collapse" 
                      data-bs-target="<?php echo $bs_target++ ?>" 
                      aria-expanded="false"
                      aria-controls="<?php echo $aria_controls++ ?>">
                        <?php echo "$ques" ?>
                      </button>
                    </h2>
                    <div id="<?php echo $ans_id++ ?>" class="accordion-collapse collapse" aria-labelledby="<?php echo $labelledby++ ?>">
                      <div class="accordion-body p-[16px] text-tiny prose max-w-5xl text-slate-900">
                        <?php echo "$ans" ?>
                      </div>
                    </div>
                  </div>
                <?php } ?>
              <?php } ?>
            <?php } ?>
            
            <!-- All Inclusive Resorts Faqs Links -->
            <?php if ($pagename == 'all-inclusive-vacations') { ?>
              <?php $num = 0;
              $ques_id = "inclusiveQone";
              $bs_target = "#inclusiveOne";
              $aria_controls = "inclusiveOne";
              $ans_id = "inclusiveOne";
              $labelledby = "inclusiveQone";

              foreach($inclusive_faqs as $faq)
              $num++; {?>
                <?php foreach ($faq as $ques => $ans) {?>
                  <div class="accordion-item bg-white border border-gray-200">
                    <h2 class="accordion-header mb-0 font-semibold" id="<?php echo $ques_id++ ?>">
                      <button 
                      class="accordion-button relative collapsed flex items-center w-full p-[16px] text-base text-gray-800 text-left bg-white border-0 rounded-none transition focus:outline-none" 
                      type="button" 
                      data-bs-toggle="collapse" 
                      data-bs-target="<?php echo $bs_target++ ?>" 
                      aria-expanded="false"
                      aria-controls="<?php echo $aria_controls++ ?>">
                        <?php echo "$ques" ?>
                      </button>
                    </h2>
                    <div id="<?php echo $ans_id++ ?>" class="accordion-collapse collapse" aria-labelledby="<?php echo $labelledby++ ?>">
                      <div class="accordion-body p-[16px] text-tiny prose max-w-5xl text-slate-900">
                        <?php echo "$ans" ?>
                      </div>
                    </div>
                  </div>
                <?php } ?>
              <?php } ?>
            <?php } ?>

            <!-- Best Family Resorts Faqs Links -->
            <?php if ($pagename == 'best-family-resorts') { ?>
              <?php $num = 0;
              $ques_id = "familyQone";
              $bs_target = "#familyOne";
              $aria_controls = "familyOne";
              $ans_id = "familyOne";
              $labelledby = "familyQone";

              foreach($family_faqs as $faq)
              $num++; {?>
                <?php foreach ($faq as $ques => $ans) {?>
                  <div class="accordion-item bg-white border border-gray-200">
                    <h2 class="accordion-header mb-0 font-semibold" id="<?php echo $ques_id++ ?>">
                      <button 
                      class="accordion-button relative collapsed flex items-center w-full p-[16px] text-base text-gray-800 text-left bg-white border-0 rounded-none transition focus:outline-none" 
                      type="button" 
                      data-bs-toggle="collapse" 
                      data-bs-target="<?php echo $bs_target++ ?>" 
                      aria-expanded="false"
                      aria-controls="<?php echo $aria_controls++ ?>">
                        <?php echo "$ques" ?>
                      </button>
                    </h2>
                    <div id="<?php echo $ans_id++ ?>" class="accordion-collapse collapse" aria-labelledby="<?php echo $labelledby++ ?>">
                      <div class="accordion-body p-[16px] text-tiny prose max-w-5xl text-slate-900">
                        <?php echo "$ans" ?>
                      </div>
                    </div>
                  </div>
                <?php } ?>
              <?php } ?>
            <?php } ?>

            <!-- Luxury Vacations Faqs Links -->
            <?php if ($pagename == 'luxury-vacations') { ?>
              <?php $num = 0;
              $ques_id = "luxuryQone";
              $bs_target = "#luxuryOne";
              $aria_controls = "luxuryOne";
              $ans_id = "luxuryOne";
              $labelledby = "luxuryQone";

              foreach($luxury_faqs as $faq)
              $num++; {?>
                <?php foreach ($faq as $ques => $ans) {?>
                  <div class="accordion-item bg-white border border-gray-200">
                    <h2 class="accordion-header mb-0 font-semibold" id="<?php echo $ques_id++ ?>">
                      <button 
                      class="accordion-button relative collapsed flex items-center w-full p-[16px] text-base text-gray-800 text-left bg-white border-0 rounded-none transition focus:outline-none" 
                      type="button" 
                      data-bs-toggle="collapse" 
                      data-bs-target="<?php echo $bs_target++ ?>" 
                      aria-expanded="false"
                      aria-controls="<?php echo $aria_controls++ ?>">
                        <?php echo "$ques" ?>
                      </button>
                    </h2>
                    <div id="<?php echo $ans_id++ ?>" class="accordion-collapse collapse" aria-labelledby="<?php echo $labelledby++ ?>">
                      <div class="accordion-body p-[16px] text-tiny prose max-w-5xl text-slate-900">
                        <?php echo "$ans" ?>
                      </div>
                    </div>
                  </div>
                <?php } ?>
              <?php } ?>
            <?php } ?>

            <!-- Seasonal Vacations Faqs Links -->
            <?php if ($pagename == 'seasonal-vacations') { ?>
              <?php $num = 0;
              $ques_id = "seasonalQone";
              $bs_target = "#seasonalOne";
              $aria_controls = "seasonalOne";
              $ans_id = "seasonalOne";
              $labelledby = "seasonalQone";

              foreach($seasonal_faqs as $faq)
              $num++; {?>
                <?php foreach ($faq as $ques => $ans) {?>
                  <div class="accordion-item bg-white border border-gray-200">
                    <h2 class="accordion-header mb-0 font-semibold" id="<?php echo $ques_id++ ?>">
                      <button 
                      class="accordion-button relative collapsed flex items-center w-full p-[16px] text-base text-gray-800 text-left bg-white border-0 rounded-none transition focus:outline-none" 
                      type="button" 
                      data-bs-toggle="collapse" 
                      data-bs-target="<?php echo $bs_target++ ?>" 
                      aria-expanded="false"
                      aria-controls="<?php echo $aria_controls++ ?>">
                        <?php echo "$ques" ?>
                      </button>
                    </h2>
                    <div id="<?php echo $ans_id++ ?>" class="accordion-collapse collapse" aria-labelledby="<?php echo $labelledby++ ?>">
                      <div class="accordion-body p-[16px] text-tiny prose max-w-5xl text-slate-900">
                        <?php echo "$ans" ?>
                      </div>
                    </div>
                  </div>
                <?php } ?>
              <?php } ?>
            <?php } ?>

            <!-- Tour Operators Faqs Links -->
            <?php if ($pagename == 'tour-operators') { ?>
              <?php $num = 0;
              $ques_id = "tourQone";
              $bs_target = "#tourOne";
              $aria_controls = "tourOne";
              $ans_id = "tourOne";
              $labelledby = "tourQone";

              foreach($tour_faqs as $faq)
              $num++; {?>
                <?php foreach ($faq as $ques => $ans) {?>
                  <div class="accordion-item bg-white border border-gray-200">
                    <h2 class="accordion-header mb-0 font-semibold" id="<?php echo $ques_id++ ?>">
                      <button 
                      class="accordion-button relative collapsed flex items-center w-full p-[16px] text-base text-gray-800 text-left bg-white border-0 rounded-none transition focus:outline-none" 
                      type="button" 
                      data-bs-toggle="collapse" 
                      data-bs-target="<?php echo $bs_target++ ?>" 
                      aria-expanded="false"
                      aria-controls="<?php echo $aria_controls++ ?>">
                        <?php echo "$ques" ?>
                      </button>
                    </h2>
                    <div id="<?php echo $ans_id++ ?>" class="accordion-collapse collapse" aria-labelledby="<?php echo $labelledby++ ?>">
                      <div class="accordion-body p-[16px] text-tiny prose max-w-5xl text-slate-900">
                        <?php echo "$ans" ?>
                      </div>
                    </div>
                  </div>
                <?php } ?>
              <?php } ?>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<?php 
  $australia_faqs = array(
    array(
      "Aruba Question #1" => "<p>Lorem ipsum dolor sit amet, <b>consectetur adipiscing elit</b>, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> <p> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
      "Aruba Question #2" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>",
      "Australia Question #3" => "Australia Answer #3",
      "Australia Question #4" => "Australia Answer #4",
      "Australia Question #5" => "Australia Answer #5",
      "Australia Question #6" => "Australia Answer #6",
    ),
  );

  $caribbean_faqs = array(
    array(
      "Caribbean Question #1" => "Caribbean Answer #1",
      "Caribbean Question #2" => "Caribbean Answer #2",
      "Caribbean Question #3" => "Caribbean Answer #3",
      "Caribbean Question #4" => "Caribbean Answer #4",
      "Caribbean Question #5" => "Caribbean Answer #5",
      "Caribbean Question #6" => "Caribbean Answer #6",
    ),
  );

  $domestic_faqs = array(
    array(
      "Domestic Question #1" => "Domestic Answer #1",
      "Domestic Question #2" => "Domestic Answer #2",
      "Domestic Question #3" => "Domestic Answer #3",
      "Domestic Question #4" => "Domestic Answer #4",
      "Domestic Question #5" => "Domestic Answer #5",
      "Domestic Question #6" => "Domestic Answer #6",
    ),
  );

  $europe_faqs = array(
    array(
      "Europe Question #1" => "Europe Answer #1",
      "Europe Question #2" => "Europe Answer #2",
      "Europe Question #3" => "Europe Answer #3",
      "Europe Question #4" => "Europe Answer #4",
      "Europe Question #5" => "Europe Answer #5",
      "Europe Question #6" => "Europe Answer #6",
    ),
  );

  $middle_east_faqs = array(
    array(
      "Middle East Question #1" => "Middle East Answer #1",
      "Middle East Question #2" => "Middle East Answer #2",
      "Middle East Question #3" => "Middle East Answer #3",
      "Middle East Question #4" => "Middle East Answer #4",
      "Middle East Question #5" => "Middle East Answer #5",
      "Middle East Question #6" => "Middle East Answer #6",
    ),
  );

  $usa_faqs = array(
    array(
      "USA Question #1" => "USA Answer #1",
      "USA Question #2" => "USA Answer #2",
      "USA Question #3" => "USA Answer #3",
      "USA Question #4" => "USA Answer #4",
      "USA Question #5" => "USA Answer #5",
      "USA Question #6" => "USA Answer #6",
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
            <!-- Australia Faqs Links -->
            <?php if ($pagename == 'hotels-in-australia') { ?>
              <?php $num = 0;
              $ques_id = "australiaQone";
              $bs_target = "#australiaOne";
              $aria_controls = "australiaOne";
              $ans_id = "australiaOne";
              $labelledby = "australiaQone";
              
              foreach($australia_faqs as $faq)
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
            
            <!-- Caribbean Faqs Links -->
            <?php if ($pagename == 'hotels-in-caribbean') { ?>
              <?php $num = 0;
              $ques_id = "caribbeanQone";
              $bs_target = "#caribbeanOne";
              $aria_controls = "caribbeanOne";
              $ans_id = "caribbeanOne";
              $labelledby = "caribbeanQone";

              foreach($caribbean_faqs as $faq)
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

            <!-- Domestic Faqs Links -->
            <?php if ($pagename == 'domestic-hotels') { ?>
              <?php $num = 0;
              $ques_id = "domesticQone";
              $bs_target = "#domesticOne";
              $aria_controls = "domesticOne";
              $ans_id = "domesticOne";
              $labelledby = "domesticQone";

              foreach($domestic_faqs as $faq)
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

            <!-- Europe Hotels Faqs Links -->
            <?php if ($pagename == 'hotels-in-europe') { ?>
              <?php $num = 0;
              $ques_id = "europeQone";
              $bs_target = "#europeOne";
              $aria_controls = "europeOne";
              $ans_id = "europeOne";
              $labelledby = "europeQone";

              foreach($europe_faqs as $faq)
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

            <!-- Hotels in Middle East Faqs Links -->
            <?php if ($pagename == 'hotels-in-middle-east') { ?>
              <?php $num = 0;
              $ques_id = "middle_eastQone";
              $bs_target = "#middle_eastOne";
              $aria_controls = "middle_eastOne";
              $ans_id = "middle_eastOne";
              $labelledby = "middle_eastQone";

              foreach($middle_east_faqs as $faq)
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

            <!-- Hotels in USA Faqs Links -->
            <?php if ($pagename == 'hotels-in-usa') { ?>
              <?php $num = 0;
              $ques_id = "usaQone";
              $bs_target = "#usaOne";
              $aria_controls = "usaOne";
              $ans_id = "usaOne";
              $labelledby = "usaQone";

              foreach($usa_faqs as $faq)
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
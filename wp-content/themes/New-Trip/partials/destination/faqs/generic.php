<?php 
  $aruba_faqs = array(
    array(
      "Aruba Question #1" => "<p>Lorem ipsum dolor sit amet, <b>consectetur adipiscing elit</b>, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> <p> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
      "Aruba Question #2" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>",
      "Aruba Question #3" => "Aruba Answer #3",
      "Aruba Question #4" => "Aruba Answer #4",
      "Aruba Question #5" => "Aruba Answer #5",
      "Aruba Question #6" => "Aruba Answer #6",
    ),
  );

  $cuba_faqs = array(
    array(
      "Cuba Question #1" => "Cuba Answer #1",
      "Cuba Question #2" => "Cuba Answer #2",
      "Cuba Question #3" => "Cuba Answer #3",
      "Cuba Question #4" => "Cuba Answer #4",
      "Cuba Question #5" => "Cuba Answer #5",
      "Cuba Question #6" => "Cuba Answer #6",
    ),
  );

  $dominican_faqs = array(
    array(
      "Cuba Question #1" => "Cuba Answer #1",
      "Cuba Question #2" => "Cuba Answer #2",
      "Cuba Question #3" => "Cuba Answer #3",
      "Cuba Question #4" => "Cuba Answer #4",
      "Cuba Question #5" => "Cuba Answer #5",
      "Cuba Question #6" => "Cuba Answer #6",
    ),
  );

  $hawaii_faqs = array(
    array(
      "Cuba Question #1" => "Cuba Answer #1",
      "Cuba Question #2" => "Cuba Answer #2",
      "Cuba Question #3" => "Cuba Answer #3",
      "Cuba Question #4" => "Cuba Answer #4",
      "Cuba Question #5" => "Cuba Answer #5",
      "Cuba Question #6" => "Cuba Answer #6",
    ),
  );

  $jamaica_faqs = array(
    array(
      "Cuba Question #1" => "Cuba Answer #1",
      "Cuba Question #2" => "Cuba Answer #2",
      "Cuba Question #3" => "Cuba Answer #3",
      "Cuba Question #4" => "Cuba Answer #4",
      "Cuba Question #5" => "Cuba Answer #5",
      "Cuba Question #6" => "Cuba Answer #6",
    ),
  );

  $mexico_faqs = array(
    array(
      "Cuba Question #1" => "Cuba Answer #1",
      "Cuba Question #2" => "Cuba Answer #2",
      "Cuba Question #3" => "Cuba Answer #3",
      "Cuba Question #4" => "Cuba Answer #4",
      "Cuba Question #5" => "Cuba Answer #5",
      "Cuba Question #6" => "Cuba Answer #6",
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
            <!-- Aruba Faqs Links -->
            <?php if ($pagename == 'aruba') { ?>
              <?php $num = 0;
              $ques_id = "arubaQone";
              $bs_target = "#arubaOne";
              $aria_controls = "arubaOne";
              $ans_id = "arubaOne";
              $labelledby = "arubaQone";
              
              foreach($aruba_faqs as $faq)
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
            
            <!-- Cuba Faqs Links -->
            <?php if ($pagename == 'cuba') { ?>
              <?php $num = 0;
              $ques_id = "cubaQone";
              $bs_target = "#cubaOne";
              $aria_controls = "cubaOne";
              $ans_id = "cubaOne";
              $labelledby = "cubaQone";

              foreach($cuba_faqs as $faq)
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

            <!-- Dominican Republic Faqs Links -->
            <?php if ($pagename == 'dominican-republic') { ?>
              <?php $num = 0;
              $ques_id = "dominicanQone";
              $bs_target = "#dominicanOne";
              $aria_controls = "dominicanOne";
              $ans_id = "dominicanOne";
              $labelledby = "dominicanQone";

              foreach($dominican_faqs as $faq)
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

            <!-- Hawaii Faqs Links -->
            <?php if ($pagename == 'hawaii') { ?>
              <?php $num = 0;
              $ques_id = "hawaiiQone";
              $bs_target = "#hawaiiOne";
              $aria_controls = "hawaiiOne";
              $ans_id = "hawaiiOne";
              $labelledby = "hawaiiQone";

              foreach($hawaii_faqs as $faq)
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

            <!-- Jamaica Faqs Links -->
            <?php if ($pagename == 'jamaica') { ?>
              <?php $num = 0;
              $ques_id = "jamaicaQone";
              $bs_target = "#jamaicaOne";
              $aria_controls = "jamaicaOne";
              $ans_id = "jamaicaOne";
              $labelledby = "jamaicaQone";

              foreach($jamaica_faqs as $faq)
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

            <!-- Mexico Faqs Links -->
            <?php if ($pagename == 'mexico') { ?>
              <?php $num = 0;
              $ques_id = "mexicoQone";
              $bs_target = "#mexicoOne";
              $aria_controls = "mexicoOne";
              $ans_id = "mexicoOne";
              $labelledby = "mexicoQone";

              foreach($mexico_faqs as $faq)
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
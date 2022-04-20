<?php 
  $california_faqs = array(
    array(
      "california Question #1" => "<p>Lorem ipsum dolor sit amet, <b>consectetur adipiscing elit</b>, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> <p> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
      "california Question #2" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>",
      "california Question #3" => "california Answer #3",
      "california Question #4" => "california Answer #4",
      "california Question #5" => "california Answer #5",
      "california Question #6" => "california Answer #6",
    ),
  );

  $delhi_faqs = array(
    array(
      "delhi Question #1" => "delhi Answer #1",
      "delhi Question #2" => "delhi Answer #2",
      "delhi Question #3" => "delhi Answer #3",
      "delhi Question #4" => "delhi Answer #4",
      "delhi Question #5" => "delhi Answer #5",
      "delhi Question #6" => "delhi Answer #6",
    ),
  );

  $hongkong_faqs = array(
    array(
      "Hongkong Question #1" => "Hongkong Answer #1",
      "Hongkong Question #2" => "Hongkong Answer #2",
      "Hongkong Question #3" => "Hongkong Answer #3",
      "Hongkong Question #4" => "Hongkong Answer #4",
      "Hongkong Question #5" => "Hongkong Answer #5",
      "Hongkong Question #6" => "Hongkong Answer #6",
    ),
  );

  $london_faqs = array(
    array(
      "London Question #1" => "London Answer #1",
      "London Question #2" => "London Answer #2",
      "London Question #3" => "London Answer #3",
      "London Question #4" => "London Answer #4",
      "London Question #5" => "London Answer #5",
      "London Question #6" => "London Answer #6",
    ),
  );

  $paris_faqs = array(
    array(
      "Paris Question #1" => "Paris Answer #1",
      "Paris Question #2" => "Paris Answer #2",
      "Paris Question #3" => "Paris Answer #3",
      "Paris Question #4" => "Paris Answer #4",
      "Paris Question #5" => "Paris Answer #5",
      "Paris Question #6" => "Paris Answer #6",
    ),
  );

  $tehran_faqs = array(
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
            <!-- California Faqs Links -->
            <?php if ($pagename == 'flights-to-california') { ?>
              <?php $num = 0;
              $ques_id = "californiaQone";
              $bs_target = "#californiaOne";
              $aria_controls = "californiaOne";
              $ans_id = "californiaOne";
              $labelledby = "californiaQone";
              
              foreach($california_faqs as $faq)
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
            
            <!-- Delhi Faqs Links -->
            <?php if ($pagename == 'flights-to-delhi') { ?>
              <?php $num = 0;
              $ques_id = "delhiQone";
              $bs_target = "#delhiOne";
              $aria_controls = "delhiOne";
              $ans_id = "delhiOne";
              $labelledby = "delhiQone";

              foreach($delhi_faqs as $faq)
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

            <!-- Hongkong Faqs Links -->
            <?php if ($pagename == 'flights-to-hongkong') { ?>
              <?php $num = 0;
              $ques_id = "hongkongQone";
              $bs_target = "#hongkongOne";
              $aria_controls = "hongkongOne";
              $ans_id = "hongkongOne";
              $labelledby = "hongkongQone";

              foreach($hongkong_faqs as $faq)
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

            <!-- London Faqs Links -->
            <?php if ($pagename == 'flights-to-london') { ?>
              <?php $num = 0;
              $ques_id = "londonQone";
              $bs_target = "#londonOne";
              $aria_controls = "londonOne";
              $ans_id = "londonOne";
              $labelledby = "londonQone";

              foreach($london_faqs as $faq)
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

            <!-- Paris Faqs Links -->
            <?php if ($pagename == 'flights-to-paris') { ?>
              <?php $num = 0;
              $ques_id = "parisQone";
              $bs_target = "#parisOne";
              $aria_controls = "parisOne";
              $ans_id = "parisOne";
              $labelledby = "parisQone";

              foreach($paris_faqs as $faq)
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

            <!-- Tehran Faqs Links -->
            <?php if ($pagename == 'flights-to-tehran') { ?>
              <?php $num = 0;
              $ques_id = "tehranQone";
              $bs_target = "#tehranOne";
              $aria_controls = "tehranOne";
              $ans_id = "tehranOne";
              $labelledby = "tehranQone";

              foreach($tehran_faqs as $faq)
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

<style>
  .nav-tabs .nav-link.active, .nav-tabs .nav-item.show .nav-link {
    color: white;
    background-color: #e11d48;
    border-color: transparent !important;
  }
  .nav-tabs {
    border-bottom: none !important;
  }

  .nav-tabs .nav-link {
    border: none;
    border-top-left-radius: 0.25rem;
    border-top-right-radius: 0.25rem;
  }
}

</style>
<div class="mx-auto max-w-7xl bg-white">
  <section class="pt-8 relative z-20 overflow-hidden px-4">
    <div class="container">
      <div class="d-flex d-flex-wrap -mx-4">
        <div class="w-full px-4">
          <h1 class="text-xl tracking-tight font-extrabold text-slate-900 sm:text-2xl md:text-3xl"> 
            <span class="block xl:inline">Top Destinations for <?php the_title(); ?></span>
          </h1>
        </div>
      </div>
      <div class="max-w-5xl prose">
        <p><?php the_content(); ?></p>
      </div>
      

      <div class="flex flex-wrap">
        <div class="w-full">
          <ul class="nav nav-tabs nav-justified flex mb-0 list-none flex-wrap pt-3 pb-4 flex-row" id="tabs-tabJustify" role="tablist">
            <li class="nav-item -mb-px mr-2 last:mr-0 flex-auto text-center" role="presentation">
              <a 
              href="#tabs-tip1" 
              class="nav-link text-[13px] font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal active" 
              id="tabs-tab1" 
              data-bs-toggle="pill" 
              data-bs-target="#tabs-tip1" 
              role="tab" aria-controls="tabs-tip1" 
              aria-selected="true">
              <i class="fa-solid fa-umbrella-beach text-tiny mr-1"></i>
              Cuba
            </a>
            </li>
            <li class="nav-item -mb-px mr-2 last:mr-0 flex-auto text-center" role="presentation">
              <a 
              href="#tabs-tip2" 
              class="nav-link text-[13px] font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal" 
              id="tabs-tab2" 
              data-bs-toggle="pill" 
              data-bs-target="#tabs-tip2" 
              role="tab" aria-controls="tabs-tip2" 
              aria-selected="false">
              <i class="fa-solid fa-umbrella-beach text-tiny mr-1"></i>
              <?php if($pagename == 'adults-only-resorts') {
                echo 'Aruba';
               } elseif ($pagename == 'something-else') {
                 echo 'Something Else';
               } ?>
            </a>
            </li>
            <li class="nav-item -mb-px mr-2 last:mr-0 flex-auto text-center" role="presentation">
              <a 
              href="#tabs-tip3" 
              class="nav-link text-[13px] font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal" 
              id="tabs-tab3" 
              data-bs-toggle="pill" 
              data-bs-target="#tabs-tip3" 
              role="tab" aria-controls="tabs-tip3" 
              aria-selected="false">
              <i class="fa-solid fa-umbrella-beach text-tiny mr-1"></i>
              <?php if($pagename == 'adults-only-resorts') {
                echo 'Hawaii';
               } elseif ($pagename == 'something-else') {
                 echo 'Something Else';
               } ?>
            </a>
            </li>
            <li class="nav-item -mb-px mr-2 last:mr-0 flex-auto text-center" role="presentation">
              <a 
              href="#tabs-tip4" 
              class="nav-link text-[13px] font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal" 
              id="tabs-tab4" 
              data-bs-toggle="pill" 
              data-bs-target="#tabs-tip4" 
              role="tab" aria-controls="tabs-tip4" 
              aria-selected="false">
              <i class="fa-solid fa-umbrella-beach text-tiny mr-1"></i>
              <?php if($pagename == 'adults-only-resorts') {
                echo 'Mexico';
               } elseif ($pagename == 'something-else') {
                 echo 'Something Else';
               } ?>
            </a>
            </li>
            <li class="nav-item -mb-px mr-2 last:mr-0 flex-auto text-center" role="presentation">
              <a 
              href="#tabs-tip5" 
              class="nav-link text-[13px] font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal" 
              id="tabs-tab5" 
              data-bs-toggle="pill" 
              data-bs-target="#tabs-tip5" 
              role="tab" aria-controls="tabs-tip5" 
              aria-selected="false">
              <i class="fa-solid fa-umbrella-beach text-tiny mr-1"></i>
              <?php if($pagename == 'adults-only-resorts') {
                echo 'Jamaica';
               } elseif ($pagename == 'something-else') {
                 echo 'Something Else';
               } ?>
            </a>
            </li>
            <li class="nav-item -mb-px mr-2 last:mr-0 flex-auto text-center" role="presentation">
              <a 
              href="#tabs-tip5" 
              class="nav-link text-[13px] font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal" 
              id="tabs-tab5" 
              data-bs-toggle="pill" 
              data-bs-target="#tabs-tip5" 
              role="tab" aria-controls="tabs-tip5" 
              aria-selected="false">
              <i class="fa-solid fa-umbrella-beach text-tiny mr-1"></i>
              <?php if($pagename == 'adults-only-resorts') {
                echo 'Dominican';
               } elseif ($pagename == 'something-else') {
                 echo 'Something Else';
               } ?>
            </a>
            </li>
            
          </ul>
          <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded mt-4">
            <div class="px-4 py-5 flex-auto">
              <div class="tab-content" id="tabs-tabContentJustify">
                <div class="tab-pane tab-space fade show active text-slate-900 space-y-2" id="tabs-tip1" role="tabpanel"
                  aria-labelledby="tabs-tab1">
                  <h2 class="font-bold" >Double Check the Airport Code</h2>
                  <p class="text-tiny">Look for the following codes when choosing your takeoff destination.</p>
                  <ul>
                    <li>
                      All Toronto Airports (YTO)
                    </li>
                  </ul>
                </div>
                <div class="tab-pane fade" id="tabs-tip2" role="tabpanel" aria-labelledby="tabs-tab2">
                  <?php get_template_part('/partials/vacation/tab/content/cuba') ?>
                </div>
                <div class="tab-pane fade" id="tabs-tip3" role="tabpanel" aria-labelledby="tabs-tab3">
                  Tab 3 content justify
                </div>
                <div class="tab-pane fade" id="tabs-tip4" role="tabpanel" aria-labelledby="tabs-tab4">
                  Tab 3 content justify
                </div>
                <div class="tab-pane fade" id="tabs-tip5" role="tabpanel" aria-labelledby="tabs-tab5">
                  Tab 3 content justify
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
</div>


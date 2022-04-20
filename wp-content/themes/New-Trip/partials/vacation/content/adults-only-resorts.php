




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
  <section class="pt-8 relative z-20 overflow-hidden">
    <div class="container">
      <div class="d-flex d-flex-wrap">
        <div class="w-full px-4">
          <h1 class="text-xl tracking-tight font-extrabold text-slate-900 sm:text-2xl md:text-3xl"> 
            <span class="block xl:inline"><?php the_title(); ?></span>
          </h1>
        </div>
      </div>
      <div class="max-w-5xl p-4 prose">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </div>
      

      <div class="flex flex-wrap">
        <div class="w-full col-12">
          <ul class="nav nav-tabs nav-justified flex mb-0 list-none pt-3 pb-4 flex-row" id="tabs-tabJustify" role="tablist">
            <li class="nav-item -mb-px mr-2 last:mr-0 flex-auto text-center col-6 md:col-12 py-2" role="presentation">
              <a 
              href="#tabs-tip1" 
              class="nav-link text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal active" 
              id="tabs-tab1" 
              data-bs-toggle="pill" 
              data-bs-target="#tabs-tip1" 
              role="tab" aria-controls="tabs-tip1" 
              aria-selected="true">
              <i class="fa-solid fa-umbrella-beach text-tiny mr-1"></i>
              Cuba
            </a>
            </li>
            <li class="nav-item -mb-px mr-2 last:mr-0 flex-auto text-center col-6 md:col-12 py-2" role="presentation">
              <a 
              href="#tabs-tip2" 
              class="nav-link text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal" 
              id="tabs-tab2" 
              data-bs-toggle="pill" 
              data-bs-target="#tabs-tip2" 
              role="tab" aria-controls="tabs-tip2" 
              aria-selected="false">
              <i class="fa-solid fa-umbrella-beach text-tiny mr-1"></i>
              Aruba
            </a>
            </li>
            <li class="nav-item -mb-px mr-2 last:mr-0 flex-auto text-center col-6 md:col-12 py-2" role="presentation">
              <a 
              href="#tabs-tip3" 
              class="nav-link text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal" 
              id="tabs-tab3" 
              data-bs-toggle="pill" 
              data-bs-target="#tabs-tip3" 
              role="tab" aria-controls="tabs-tip3" 
              aria-selected="false">
              <i class="fa-solid fa-umbrella-beach text-tiny mr-1"></i>
              Mexico
            </a>
            </li>
            <li class="nav-item -mb-px mr-2 last:mr-0 flex-auto text-center col-6 md:col-12 py-2" role="presentation">
              <a 
              href="#tabs-tip4" 
              class="nav-link text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal" 
              id="tabs-tab4" 
              data-bs-toggle="pill" 
              data-bs-target="#tabs-tip4" 
              role="tab" aria-controls="tabs-tip4" 
              aria-selected="false">
              <i class="fa-solid fa-umbrella-beach text-tiny mr-1"></i>
              Jamaica
            </a>
            </li>
            
            
          </ul>
          <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded mt-4">
            <div class="px-4 py-5 flex-auto">
              <div class="tab-content" id="tabs-tabContentJustify">
                <div class="tab-pane tab-space fade show active text-slate-900 space-y-2" id="tabs-tip1" role="tabpanel"
                  aria-labelledby="tabs-tab1">
                  <?php get_template_part('/partials/vacation/content/tab/cuba') ?>    
                </div>
                <div class="tab-pane fade text-slate-900 space-y-2" id="tabs-tip2" role="tabpanel" aria-labelledby="tabs-tab2">
                  <?php get_template_part('/partials/vacation/content/tab/aruba') ?>
                </div>
                <div class="tab-pane fade text-slate-900 space-y-2" id="tabs-tip3" role="tabpanel" aria-labelledby="tabs-tab3">
                  <?php get_template_part('/partials/vacation/content/tab/mexico') ?>
                </div>
                <div class="tab-pane fade text-slate-900 space-y-2" id="tabs-tip4" role="tabpanel" aria-labelledby="tabs-tab4">
                  <?php get_template_part('/partials/vacation/content/tab/jamaica') ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
</div>


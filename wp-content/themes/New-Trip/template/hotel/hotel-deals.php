<?php $torontoHotelsURL = "https://secure.tripsupport.ca/flight/roundtrip;tripType=roundtrip;origin=YYZ;destination=YVR;departDate=6%20May%202022;returnDate=13%20May%202022;adult=1;child=0;infant=0;class=Economy;IsFlexiSearch=false;multiOrigin=;multiDestination=;multidate=" ?>
<?php $vancouverHotelsURL = "https://secure.tripsupport.ca/hotel/search/%7B%22To%22:%22%7B%5C%22id%5C%22:6173331,%5C%22name%5C%22:%5C%22Vancouver%5C%22,%5C%22secondaryName%5C%22:%5C%22British%20Columbia,%20Canada%5C%22,%5C%22type%5C%22:0%7D%22,%22Rooms%22:1,%22travellersForm%22:%7B%22travellers%22:%5B%7B%22adults%22:2,%22children%22:0,%22childrenAges%22:%5B%5D%7D%5D%7D,%22EntryDate%22:%222022-04-16%22,%22ExitDate%22:%222022-04-19%22%7D" ?>
<?php $montrealHotelsURL = "https://secure.tripsupport.ca/hotel/search/%7B%22To%22:%22%7B%5C%22id%5C%22:6077243,%5C%22name%5C%22:%5C%22Montreal%5C%22,%5C%22secondaryName%5C%22:%5C%22Quebec,%20Canada%5C%22,%5C%22type%5C%22:0%7D%22,%22Rooms%22:1,%22travellersForm%22:%7B%22travellers%22:%5B%7B%22adults%22:2,%22children%22:0,%22childrenAges%22:%5B%5D%7D%5D%7D,%22EntryDate%22:%222022-04-16%22,%22ExitDate%22:%222022-04-19%22%7D" ?>
<?php $calgaryHotelsURL = "https://secure.tripsupport.ca/hotel/search/%7B%22To%22:%22%7B%5C%22id%5C%22:5913490,%5C%22name%5C%22:%5C%22Calgary%5C%22,%5C%22secondaryName%5C%22:%5C%22Alberta,%20Canada%5C%22,%5C%22type%5C%22:0%7D%22,%22Rooms%22:1,%22travellersForm%22:%7B%22travellers%22:%5B%7B%22adults%22:2,%22children%22:0,%22childrenAges%22:%5B%5D%7D%5D%7D,%22EntryDate%22:%222022-04-16%22,%22ExitDate%22:%222022-04-19%22%7D" ?>

<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>



<div class="mx-auto max-w-7xl p-6">
	<!-- Heading -->
	<section class="relative mb-6">
		<div class="text-left">
			<div class="sm:flex sm:items-baseline sm:justify-between">
				<h1 class="text-2xl tracking-tight font-extrabold text-gray-900 sm:text-3xl md:text-4xl">
					Trending Hotel Destinations
				</h1>
			</div>
			<p class="mt-2 text-md text-slate-800 sm:mt-3 sm:text-md sm:max-w-prose md:mt-3 md:text-md lg:mx-0">
				Explore destinations currently popular with travelers across Canada.
			</p>
		</div>
	</section>
  <section class="relative" aria-labelledby="contact-heading">
    <div x-data="{ selected: 'canada' }">
      <div class="flex flex-col rounded-xl bg-white w-full ">
        <div class="mb-4 border-b border-gray-200">
          <ul
            class="flex flex-wrap -mb-px text-sm font-medium text-center">
            <li class="mr-2">
              <button
                class="inline-flex text-tiny px-2 md:px-8 flex items-center py-3 capitalize hover:text-rose-600 font-semibold"
                @click="selected = 'canada'"
                :class="{ 'text-rose-600': selected === 'canada' }"
                >
              <img src="<?php echo THEME_IMAGE_FLAGS . '/canada.svg'?>" alt="canadian flag" class="w-5 mr-2" />
                Canada
              </button>
            </li>
            <li class="mr-2">
              <button
                class="inline-flex text-tiny px-2 md:px-8 flex items-center py-3 capitalize hover:text-rose-600 font-semibold"
                @click="selected = 'usa'"
                :class="{ 'text-rose-600': selected === 'usa' }"
                >
              <img src="<?php echo THEME_IMAGE_FLAGS . '/usa.svg'?>" alt="usa flag" class="w-5 mr-2" />
                United States
              </button>
            </li>
            <li class="mr-2">
              <button
                class="inline-flex text-tiny px-2 md:px-8 flex items-center py-3 capitalize hover:text-rose-600 font-semibold"
                @click="selected = 'spain'"
                :class="{ 'text-rose-600': selected === 'spain' }"
                >
              <img src="<?php echo THEME_IMAGE_FLAGS . '/spain.svg'?>" alt="spain flag" class="w-5 mr-2" />
                Spain
              </button>
            </li>
            <li class="mr-2">
              <button
                class="inline-flex text-tiny px-2 md:px-8 flex items-center py-3 capitalize hover:text-rose-600 font-semibold"
                @click="selected = 'china'"
                :class="{ 'text-rose-600': selected === 'china' }"
                >
              <img src="<?php echo THEME_IMAGE_FLAGS . '/china.svg'?>" alt="china flag" class="w-5 mr-2" />
                China
              </button>
            </li>
            <li class="mr-2">
              <button
                class="inline-flex text-tiny px-2 md:px-8 flex items-center py-3 capitalize hover:text-rose-600 font-semibold"
                @click="selected = 'italy'"
                :class="{ 'text-rose-600': selected === 'italy' }"
                >
              <img src="<?php echo THEME_IMAGE_FLAGS . '/italy.svg'?>" alt="italy flag" class="w-5 mr-2" />
                Italy
              </button>
            </li>
            <li class="mr-2">
              <button
                class="inline-flex text-tiny px-2 md:px-8 flex items-center py-3 capitalize hover:text-rose-600 font-semibold"
                @click="selected = 'turkey'"
                :class="{ 'text-rose-600': selected === 'turkey' }"
                >
              <img src="<?php echo THEME_IMAGE_FLAGS . '/turkey.svg'?>" alt="turkey flag" class="w-5 mr-2" />
                Turkey
              </button>
            </li>
            <li class="mr-2">
              <button
                class="inline-flex text-tiny px-2 md:px-8 flex items-center py-3 capitalize hover:text-rose-600 font-semibold"
                @click="selected = 'france'"
                :class="{ 'text-rose-600': selected === 'france' }"
                >
              <img src="<?php echo THEME_IMAGE_FLAGS . '/france.svg'?>" alt="france flag" class="w-5 mr-2" />
                France
              </button>
            </li>
            
          </ul>
        </div>
        <div>
          <div class="py-1 mb-2 lg:pb-4" x-show="selected === 'canada'">
            <?php get_template_part('template/hotel/country/canada') ?>
          </div>
          <div class="py-1 mb-2 lg:pb-4" x-show="selected === 'usa'">
            <?php get_template_part('template/hotel/country/usa') ?>
          </div>
          <div class="py-1 mb-2 lg:pb-4" x-show="selected === 'spain'">
            <?php get_template_part('template/hotel/country/spain') ?>
          </div>
          <div class="py-1 mb-2 lg:pb-4" x-show="selected === 'china'">
            <?php get_template_part('template/hotel/country/china') ?>
          </div>
          <div class="py-1 mb-2 lg:pb-4" x-show="selected === 'italy'">
            <?php get_template_part('template/hotel/country/italy') ?>
          </div>
          <div class="py-1 mb-2 lg:pb-4" x-show="selected === 'turkey'">
            <?php get_template_part('template/hotel/country/turkey') ?>
          </div>
          <div class="py-1 mb-2 lg:pb-4" x-show="selected === 'france'">
            <?php get_template_part('template/hotel/country/france') ?>
          </div>
          
        </div>

      </div>
    </div>
  </section>
</div>


<style>
  .tr-ellipsis-4 {
	overflow: hidden;
	text-overflow: ellipsis;
	white-space: initial;
	display: -webkit-box;
	-webkit-line-clamp: 4;
	-webkit-box-orient: vertical;
}

  .tr-ellipsis-3 {
	overflow: hidden;
	text-overflow: ellipsis;
	white-space: initial;
	display: -webkit-box;
	-webkit-line-clamp: 3;
	-webkit-box-orient: vertical;
}
  .tr-ellipsis-2 {
	overflow: hidden;
	text-overflow: ellipsis;
	white-space: initial;
	display: -webkit-box;
	-webkit-line-clamp: 2;
	-webkit-box-orient: vertical;
}
</style>